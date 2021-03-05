<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <style type="text/css" media="screen">
        @import "/static/css/styles.css";
    </style>
    <link rel="stylesheet" type="text/css" media="print" href="/static/css/popup.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="/static/css/form.css" />
    <link rel="stylesheet" type="text/css" media="print" href="/static/css/print.css" />

    <script type="text/javascript" src="/static/js/jquery-1.4.2.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/js/General.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/js/search.js" charset="utf-8"></script>

    <script type="text/javascript" src="https://s3-eu-west-1.amazonaws.com/ucas-prod/json/2021/searchData/assessCentreData_EN.js" charset="utf-8"></script>
    <script type="text/javascript">

        var inputName = '<?php echo $inputName;?>';
        function passToParent(passBackValue) {
            var valueArray = passBackValue.split("|"); //can't use comma as might be in name

            $("#"+inputName,opener.document).val(valueArray[0]); //给父窗口aaa中赋值
            $("#centreNumberTextEntry",opener.document).val(valueArray[valueArray.length-1]); //给父窗口aaa中赋值
            window.close();
        }
    </script>

    <noscript>
        <!--
            meta-tag "refresh" is provided for those browsers that
            do not support JavaScript.  Please note that the time
            delay is greater than zero.

            Notice that this is nested within a "noscript" block.
            Which means that browsers that support JavaScript will
            not "see" the refresh meta-tag.
        -->
        <meta http-equiv="refresh" content="0; URL=enableJavascript.jsp" />
    </noscript>
</head>

<body bgcolor="#ffffff" text="#000000" link="#e31c18" vlink="#e31c18" alink="#e31c18" onload="init();">

<div id="wrapperInternalPopUp" class="floatLeft">

    <!--display 'PopUpHeader' clip -->
    <div id="header">
        <div id="tools">
            <ul>
                <li><a href="javascript:onclick=window.print()">Print page</a> |</li>
                <li><a href="javascript:onclick=window.close()">Close window</a></li>
                <li>&nbsp;</li>
            </ul>
        </div><!--tools ENDS here-->
        <div id="logo" class="floatLeft">
            <img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" />
        </div><!--logo ENDS here-->
        <div class="clearDiv">&nbsp;</div>
    </div><!--header ENDS here-->

    <div class="clearDiv">&nbsp;</div>
    <div id="midBoxInternalWide">
        <p>&nbsp;</p>

        <!-- onkeyup is used to trigger the search function, so after each keystroke the search function is called. -->
        Search: <input type="text" onkeyup="performSearch();" id="input">
        <p>&nbsp;</p>
        <div id="limit" style="display: none;padding-left:1px;">
            <p>We have found more than 50 results, please enter more details such as the road name or town in the 'Search' box to help you find your school.</p>
            <p>&nbsp;</p>
        </div>
        <p id="searchResults"></p><p>&nbsp;</p>

        <p></p><div id="notlisted" style="display: none;"><a href="#" onclick="passToParent('|')">Click here to enter my school or centre details manually</a></div><p></p>
        <p>&nbsp;</p>
        <p></p>
    </div>
</div>
</body>
<script>
    // search class instance
    var search;
    // field id or name being used to search - required by the search function
    var searchField = 4;
    // field id or name being used to present to the user - this is used by this page
    var presentationField = 2;

    // This function is called 'onload' within the <body> tag.
    function init() {
        //internal function which creates the searchable field from the data provided
        //this reduces the amount of data being sent.
        createSearchField(matchData, presentationField,searchField)
        //contruct the search object passing the data set which is a var in the bigData.js file
        search = new Search(matchData);

        //The following sets up the call back functions.
        //No match will display 'No Matches Found'
        search.onNoMatch(function() {
            document.getElementById('searchResults').innerHTML='No matches found.';
            document.getElementById('notlisted').style.display = 'block';
        })
        //This is called when there has been 1 or more matches found, this is called before onHandleLine is called for
        //each matched entry
            .onMatch(function() {
                document.getElementById('searchResults').innerHTML="<table id='tblResults' width='700'></table>";
                var tbl = document.getElementById('tblResults');
                var row = tbl.insertRow(0);
                var cell0 = row.insertCell(0);
                var cell1 = row.insertCell(1);
                var cell2 = row.insertCell(2);
                cell0.innerHTML = "<span style=\"font-family: Arial, sans-serif;	font-size:0.7em;padding:0;font-weight:bold;float:left\">School/college/centre name</span>";
                cell1.innerHTML = "&nbsp;";
                cell2.innerHTML = "<span style=\"font-family: Arial, sans-serif;	font-size:0.7em;padding:0;font-weight:bold;float:left\">Exam&nbsp;centre&nbsp;number</span>";
                document.getElementById('notlisted').style.display = 'block';
            })
            //displays the top 10 results because no search has been entered... this event is handy as it
            //will be called even when whitespace is entered into the search field which would have to be handled
            //locally
            .onNoInput(function() {
                document.getElementById('limit').style.display = 'none';
                document.getElementById('searchResults').innerHTML='';
                document.getElementById('notlisted').style.display = 'none';
            })
            //When more results than the limit are reached.
            .onMoreThanLimit(function(data) {
                document.getElementById('limit').style.display = 'block';
            })
            //When less results than the limit are returned.
            .onLessThanEqualLimit(function(data) {
                document.getElementById('limit').style.display = 'none';
            })
            //this is called with each data line matched in order, this is called after the onMatch handler.
            .onHandleLine(function(data) {
                var tbl = document.getElementById('tblResults');
                var lastRow = tbl.rows.length;
                // if there's no header row in the table, then iteration = lastRow + 1
                var iteration = lastRow;
                var row = tbl.insertRow(lastRow);
                var cell0 = row.insertCell(0);

                cell0.innerHTML = "<a href=\"#\" onclick='passToParent(\""+data[1].replace("'","&#39;")+"|"+data[0]+"|"+data[3]+"\");return false;' style=\"font-family: Arial, sans-serif;	font-size:0.7em;padding:0;font-weight:normal;text-decoration:underline;color:#e31c18;\">"+data[2]+"</a>";
                var cell1 = row.insertCell(1);
                cell1.innerHTML = "&nbsp;";
                var cell2 = row.insertCell(2);
                cell2.innerHTML = "<span style=\"font-family: Arial, sans-serif;	font-size:0.7em;padding:0;font-weight:normal;float:left\">"+data[0]+"</span>";
            });
        search.search('',searchField);
    };

    //Local function for debug purposes, calls the search method
    function performSearch() {
        search.search(document.getElementById('input').value,searchField);
    };
    // Reads each records srcField (source field) and upper cases the string and removes
    // special characters e.g. (, ), {, }, [, ]
    function createSearchField(matchData, srcField, mtcField)
    {
        var source;
        var match;
        for (record in matchData) {
            source = matchData[record][srcField];
            match = source.toUpperCase();
            match = match.replace(/[\(\)\{\}\[\]]/gi,'');
            matchData[record][mtcField] = match;
        }
    };
    document.getElementById('input').focus();
</script>
</html>
