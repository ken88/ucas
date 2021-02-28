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
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Verify email:Enter code</title>
    <style type="text/css">
        .confirm_box{display: none;}
        #gatewayContent{width: 70%;float: left;}
        .video{text-align: center; margin-top: 1.4em;}
        #splNeedsDetailsTextEntry{width:90%; margin-top: 0px;}
        #disNeedsTextEntry{width:63%; margin-top: 0px;}
    </style>
    <script type="text/javascript" src="/static/js/jquery-1.4.2.min.js" charset="utf-8"></script>
    <script type="text/javascript" src="/static/js/general.js"></script>
    <script type="text/javascript" src="/static/js/jquery.simplemodal.js"></script>
    <script type="text/javascript" src="/static/js/choicessummary.js" charset="utf-8"></script>
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