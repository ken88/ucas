<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <style type="text/css" media="screen">@import "/static/css/styles.css";</style>
    <link rel="stylesheet" type="text/css" media="screen" href="/static/css/form.css" />
    <!--[if lte IE 7]>
    <link rel="stylesheet" type="text/css" media="all" href="/static/css/iefixes.css" />
    <![endif]-->
    <!--[if IE 7]>
    <link rel="stylesheet" type="text/css" media="all" href="/static/css/ie7.css" />
    <![endif]-->
    <link rel="stylesheet" type="text/css" media="print" href="/static/css/print.css" />
    <!-- Confirm CSS files -->
    <link type='text/css' href='/static/css/confirm.css' rel='stylesheet' media='screen' />
    <link type='text/css' href='/static/css/popup.css' rel='stylesheet' media='screen' />
    <link type='text/css' href='/static/css/jquery.checkbox.css' rel='stylesheet' media='screen' />

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Verify email:Enter code</title>
    <style type="text/css">
        .confirm_box{display: none;}
        #gatewayContent{width: 70%;float: left;}
        .video{text-align: center; margin-top: 1.4em;}
        #splNeedsDetailsTextEntry{width:90%; margin-top: 0px;}
        #disNeedsTextEntry{width:63%; margin-top: 0px;}
        #highestExpectedQualCombo{width:90%; margin-right: 1px;}
        #statementTextEntry{width:90%; margin-top: 0px;}
        #ViewAll td.sectionHeading {
            font-size: 1.4em;
            font-weight: 700;
            color: #81725e;
            width: 300px;
        }

    </style>
    <script type="text/javascript" src="/static/js/jquery-1.4.2.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/js/general.js"></script>
    <script type="text/javascript" src="/static/js/jquery.simplemodal.js"></script>
    <script type="text/javascript" src="/static/js/choicessummary.js" charset="utf-8"></script>
    <script type='text/javascript' src='/static/js/jquery.removechars.js'></script>
    <script type="text/javascript" src="/static/js/security.js" charset="utf-8"></script>
    <script type='text/javascript' src='/static/js/jquery.removechars.js'></script>
    <script type="text/javascript" src="/static/js/search.js"></script>
    <script type="text/javascript" src="https://s3-eu-west-1.amazonaws.com/ucas-prod/json/2021/searchData/qualSearchData_EN.js" charset="utf-8"></script>

    <script type="text/javascript">
        function setJavaEnabled()
        {
            // set Javascript Enabled hidden field value to true
            $('#hidJavaScriptEnabled').val('true');
        }

        function launchPageHelp()
        {
            openPopUp('PopUpServlet', '?functionname=help&page=HELP.CHOICES.SUMMARY.PAGE', 506, 200, 'helpwindow');
            return false;
        }

        function helpOpen(page, args)
        {
            //presuming all help pop-ups are going to be the same dimensions...
            openPopUp1(page, args, 506, 200, 'helpwindow');
            return false;
        }

        function openPopUp1(page, args, xCoord, yCoord, winName)
        {
            //always centre the window, irrespective of size
            var popX = xCoord;
            var popY = yCoord;
            posX = ((screen.availWidth/2)-(popX/2));
            posY = ((screen.availHeight/2)-(popY/2));

            page += args;
            var url = "https://2021.undergrad.apply.ucas.com/ucasapply/";
            url += page;
            var myPopup = window.open(url,winName,'width='+popX+',height='+popY+'toolbar=0,menubar=0,directories=0,location=0,scrollbars=1,left='+posX+',top='+posY);
            if (!myPopup.opener)
                myPopup.opener = self;

            myPopup.focus();
            return false;
        }

        function helpOpen3(page, args)
        {
            //presuming all help pop-ups are going to be the same dimensions...
            openPopUp3(page, 506, 200, 'helpwindow');
            return false;
        }

        function openPopUp3(page,xCoord, yCoord, winName)
        {
            //always centre the window, irrespective of size
            var popX = xCoord;
            var popY = yCoord;
            posX = ((screen.availWidth/2)-(popX/2));
            posY = ((screen.availHeight/2)-(popY/2));

            var url = "https://2021.undergrad.apply.ucas.com/";
            url += page;
            var myPopup = window.open(url,winName,'width='+popX+',height='+popY+'toolbar=0,menubar=0,directories=0,location=0,scrollbars=1,left='+posX+',top='+posY);
            if (!myPopup.opener)
                myPopup.opener = self;

            myPopup.focus();
            return false;
        }


        function seelistOpen(page, args)
        {
            //presuming all help pop-ups are going to be the same dimensions...
            openPopUp2(page, args, 506, 200, 'helpwindow');
            return false;
        }

        function openPopUp2(page, args, xCoord, yCoord, winName)
        {
            //always centre the window, irrespective of size
            var popX = xCoord;
            var popY = yCoord;
            posX = ((screen.availWidth/2)-(popX/2));
            posY = ((screen.availHeight/2)-(popY/2));

            page += args;
            var myPopup = window.open(page,winName,'width='+popX+',height='+popY+'toolbar=0,menubar=0,directories=0,location=0,scrollbars=1,left='+posX+',top='+posY);
            if (!myPopup.opener)
                myPopup.opener = self;

            myPopup.focus();
            return false;
        }


        $(function () {
            // 退出
            $('#logOut').click(function () {
                window.location.href="/site/logout";
            })
        })


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
<div id="outerWrapper" class="clearfix"><!-- Outer  Wrapper starts here-->
    <div id="wrapperInternal" class="floatLeft"><!-- Wrapper Internal starts here-->
        <!--header starts here-->
        <div id="header">
            <!--tools start here-->
            <div id="tools">
                <ul>
                    <li><a href="#">Contact us</a> |</li>
                    <li class="help">
                        <a href="#" onclick="launchFieldHelp('PopUpServlet', '?functionname=help&page=HELP.HEADER.PAGE'); return false;">Help</a> |
                    </li>
                    <li><a href="javascript:onclick=window.print()">Print page</a></li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                </ul>
            </div>
            <!--tools ENDS here-->


            <div id="logo" class="floatLeft">
                <img src="/static/images/apply_logo.gif" width="91" height="30" alt="UCAS" />
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Education</h1>
                <div id="logOut"><a href="#">Log out</a></div>
            </div><!--strapLineApply ENDS here-->
         

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
                                <tr><td><a href="<?= \yii\helpers\Url::to(['useradmin/add-fw','school_id'=>Yii::$app->request->get('school_id')])?>">GCE Advanced Subsidiary</a></td></tr>
                                <tr><td><a href="<?= \yii\helpers\Url::to(['useradmin/add-fw','school_id'=>Yii::$app->request->get('school_id')])?>">BTEC Diploma</a></td></tr>
                                <tr><td><a href="<?= \yii\helpers\Url::to(['useradmin/add-fw','school_id'=>Yii::$app->request->get('school_id')])?>">Access to HE Diploma (2014 onwards)</a></td></tr>
                                <tr><td><a href="<?= \yii\helpers\Url::to(['useradmin/add-fw','school_id'=>Yii::$app->request->get('school_id')])?>">GCSE (Grade: A*-G)</a></td></tr>
                                <tr><td><a href="<?= \yii\helpers\Url::to(['useradmin/add-fw','school_id'=>Yii::$app->request->get('school_id')])?>">GCE Advanced Level</a></td></tr>
                                <tr><td><a href="<?= \yii\helpers\Url::to(['useradmin/add-fw','school_id'=>Yii::$app->request->get('school_id')])?>">Welsh Baccalaureate Advanced Skills Challenge Certificate</a></td></tr>
                                <tr><td><a href="<?= \yii\helpers\Url::to(['useradmin/add-fw','school_id'=>Yii::$app->request->get('school_id')])?>">SQA Scottish Highers</a></td></tr>
                                <tr><td><a href="<?= \yii\helpers\Url::to(['useradmin/add-fw','school_id'=>Yii::$app->request->get('school_id')])?>">SQA Advanced Highers</a></td></tr>
                                <tr><td><a href="<?= \yii\helpers\Url::to(['useradmin/add-fw','school_id'=>Yii::$app->request->get('school_id')])?>">National 5</a></td></tr>
                                <tr><td><a href="<?= \yii\helpers\Url::to(['useradmin/add-fw','school_id'=>Yii::$app->request->get('school_id')])?>">BTEC Extended Diploma (QCF)</a></td></tr>
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

        <!-- 底部start  -->
        <?php include_once "buttom.php"; ?>
        <!-- 底部end  -->


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

                cell.innerHTML = "<a href='/useradmin/add-fw?qualKey="+data[0]+"&val="+data[1]+"'>"+data[1]+"</a>";

            })
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