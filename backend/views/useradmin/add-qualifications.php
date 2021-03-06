<?php include_once "top.php";?>

<script type="text/javascript" src="/static/js/Search.js"></script>
<script type="text/javascript" src="https://s3-eu-west-1.amazonaws.com/ucas-prod/json/2021/searchData/qualSearchData_EN.js" charset="utf-8"></script>
<body bgcolor="#ffffff" text="#000000" link="#e31c18" vlink="#e31c18" alink="#e31c18" onload="init();">
<div id="outerWrapper" class="clearfix">
    <div id="wrapperInternal" class="floatLeft">

        <div id="header">
            <div id="tools">
                <ul>
                    <li><a href="https://www.ucas.com/corporate/about-us/contact-us" onclick="window.open(this.href);return false;">Contact us</a> |</li>
                    <li class="help"><a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&amp;page=HELP.HEADER.PAGE'); return false;">Help</a> |</li>
                    <li><a href="/static/js:onclick=window.print()">Print page</a></li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                </ul>
            </div><!--tools ENDS here-->
            <div id="logo" class="floatLeft">
                <img src="/static/images/apply_logo.gif" width="91" height="30" alt="UCAS" />
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Education</h1>
                <div id="logOut"><a href="ServicesServlet?functionname=logout&amp;id=1283b4ca1a72201542c5f15b1df3&amp;ran=dnziq9m7hx4z">Log out</a></div>
            </div><!--strapLineApply ENDS here-->
            <!--This 3 lines of code target the printed page only-->  <div id="strapLineApplyPrint">  <img src="/static/images/apply_interactive_pageHead_print.jpg" alt="apply" />  </div><!--StrapLinePrint ENDS here--></div><!--header ENDS here-->


        <div class="clearDiv">&nbsp;</div>

        <div id="mainContent">
            <!--menu starts 左面菜单栏开始-->
            <?php include_once "menu.php"; ?>
            <!--menu ends 左面菜单栏结束-->

            <!--temp -->
            <div id="gatewayContent">
                <div id="breadcrumb">
                    <a href="/useradmin/welcome">Welcome</a> &gt;
                    <a href="/useradmin/education">Education</a> &gt;
                    Choose qualification
                </div><!--breadcrumb ENDS here-->
                <hr/>

                <div id="midBoxInternalWide">

                    <!--Form starts here-->

                    <div class="thisForm">
                        <p>
                            Please search for the qualification title, eg 'A level' and <b>not</b> the subject, eg 'chemistry'.
                        </p>
                        <p>
                            Overseas qualifications will be listed alphabetically under the name of the country they were taken in.
                        </p>
                        <p>&nbsp; </p>
                        <!--clip starts-->
                        <form name="Form1" method="post" action="EducationServlet?id=1283b4ca1a72201542c5f15b1df3&amp;ran=3unyje1xb3hv" onSubmit="return(false);">
                            <div id="search">
                                Search: <input type="text" value="e.g. Baccalaureate" onfocus="inputContentOnFocus();" onblur="inputContentOffBlur();" onkeyup="performSearch();" id="input"/>
                                <p id="limit" style="display: none; padding-left:1px;">We have found more than 50 results, please enter more details in the 'Search' box to help you find your qualification.</p>
                                <p id="searchResults"></p>
                                <p style="display:none;" id="output">The search facility does not have a spellchecker. If you cannot find your qualification title please check that you have spelt it correctly. If you still can't find it, please enter 'Other' in the search box and select the relevant option from the list.</p>
                            </div>
                            <hr/>
                            <p class="bold">Or select from the popular qualifications listed below</p>
                            <!--display 'Short List' clip -->
                            <h2 class="inPage">Popular qualifications</h2>
                            <br><table border="0" cellpadding="0" cellspacing="0">
                                <tr><td><a href="/useradmin/add-fw">GCE Advanced Subsidiary</a></td></tr>
                                <tr><td><a href="/useradmin/add-fw">BTEC Diploma</a></td></tr>
                                <tr><td><a href="/useradmin/add-fw">Access to HE Diploma (2014 onwards)</a></td></tr>
                                <tr><td><a href="/useradmin/add-fw">GCSE (Grade: A*-G)</a></td></tr>
                                <tr><td><a href="/useradmin/add-fw">GCE Advanced Level</a></td></tr>
                                <tr><td><a href="/useradmin/add-fw">Welsh Baccalaureate Advanced Skills Challenge Certificate</a></td></tr>
                                <tr><td><a href="/useradmin/add-fw">SQA Scottish Highers</a></td></tr>
                                <tr><td><a href="/useradmin/add-fw">SQA Advanced Highers</a></td></tr>
                                <tr><td><a href="/useradmin/add-fw">National 5</a></td></tr>
                                <tr><td><a href="/useradmin/add-fw">BTEC Extended Diploma (QCF)</a></td></tr>
                                <tr><td>&nbsp;</td></tr>
                            </table>

                            <!--spacer -->
                            <div class="thisFormTxt">&nbsp;</div>
                            <div class="thisFormField">&nbsp;</div>
                            <!--end spacer-->
                        </form>
                        <!--clip ends-->
                    </div>
                    <!-- Close thisForm div -->
                    <!-- Form ends here -->
                </div><!--midBoxInternalWide ends here-->
            </div><!--gatewayContent ends here-->
        </div><!--mainContent ends here-->

        <div class="clearDiv">&nbsp;</div>

        <!--display 'Footer' clip -->
        <div id="footer">
            <ul class="floatLeft">
                <li><a href="https://www.ucas.com/corporate/about-us" onclick="window.open(this.href);return false;">About us</a> | </li> <li><a href="https://www.ucas.com/corporate/about-us/terms-and-conditions/terms-and-conditions-use-apply" onclick="window.open(this.href);return false;">Terms &amp; conditions</a> | </li><li><a href="https://www.ucas.com/corporate/about-us/privacy-policies-and-declarations/ucas-privacy-policy" onclick="window.open(this.href);return false;">Privacy policy</a> </li>
            </ul>
            <p id="copy" class="floatRight">&copy; UCAS 2021</p>
        </div><!--footer ENDS here-->


        <div class="clearDiv">&nbsp;</div>

    </div> <!--wrapper ENDS here-->
</div><!--outerWrapper ENDS here-->
</body>
<script>
    var queryStringList = new Array();
    var search;
    var searchField = 2;
    var presentationField = 1;
    var refField = 0

    function init() {
        ucasInit();
        createSearchField(matchData, presentationField, searchField, refField)

        search = new Search(matchData);
        search.onNoMatch(function() {
            document.getElementById('output').style.display='block';
            document.getElementById('searchResults').style.display='none';
        })
            .onMatch(function() {
                document.getElementById('searchResults').innerHTML="<table id='tblResults'></table>";
                document.getElementById('output').style.display='none';
                document.getElementById('searchResults').style.display='block';
            })
            .onNoInput(function() {
                document.getElementById('limit').style.display = 'none';
                document.getElementById('searchResults').style.display='none';
            })
            .onMoreThanLimit(function(data) {
                document.getElementById('limit').style.display = 'block';
            })
            .onLessThanEqualLimit(function(data) {
                document.getElementById('limit').style.display = 'none';
            })
            .onHandleLine(function(data) {
                var tbl = document.getElementById('tblResults');
                var lastRow = tbl.rows.length;
                // if there's no header row in the table, then iteration = lastRow + 1
                var iteration = lastRow;
                var row = tbl.insertRow(lastRow);
                var cell = row.insertCell(0);

                cell.innerHTML = "<a href='EducationServlet?functionname="+queryStringList[0]
                    +"&amp;mode="+queryStringList[1]
                    +"&amp;from=fromEducationQualShortList"
                    +"&amp;edeId="+queryStringList[2]
                    +"&amp;qualId=0"
                    +"&amp;qualKey="+data[0]
                    +"&amp;id="+queryStringList[4]
                    +"&amp;ran="+queryStringList[5]+"'>"+data[1]+"</a>";


            });
        search.search('',searchField);
    };
    function performSearch() {
        search.search(document.getElementById('input').value,searchField);
    };
    // Reads each records srcField (source field) and upper cases the string and removes
    // special characters e.g. (, ), {, }, [, ]
    function createSearchField(matchData, srcField, mtcField, refField)
    {
        var source;
        var match;
        for (record in matchData) {
            source = matchData[record][refField]+" "+matchData[record][srcField];
            match = source.toUpperCase();
            match = match.replace(/[\(\)\{\}\[\]]/gi,'');
            matchData[record][mtcField] = match;
        }
    };

</script>



<SCRIPT> // get the current URL

    function ucasInit(){
        var url = window.location.toString();
        //get the parameters
        url.match(/\?(.+)$/);
        var params = RegExp.$1;
        // split up the query string and store in an
        // associative array
        var params = params.split("&");


        for(var i=0;i<params.length;i++)
        {
            var tmp = params[i].split("=");
            queryStringList[i] = unescape(tmp[1]);

        }

    }

    function inputContentOnFocus()
    {

        if (document.getElementById("input").getAttribute("value")=="e.g. Baccalaureate")
        {
            document.getElementById("input").value="";
        }
    }
    function inputContentOffBlur()
    {

        if (document.getElementById("input").getAttribute("value")=="")
        {
            document.getElementById("input").value="e.g. Baccalaureate";
            document.getElementById('output').style.display='none';
        }

    }
</SCRIPT>
</html>