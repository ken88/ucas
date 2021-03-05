<?php include_once "top.php";?>
<body bgcolor="#ffffff" text="#000000" link="#e31c18" vlink="#e31c18" alink="#e31c18">
<div id="outerWrapper" class="clearfix">

    <!--wrapper start-->
    <div id="wrapperInternal" class="floatLeft">

        <!--header start -->
        <div id="header">
            <div id="tools">
                <ul>
                    <li><a href="https://www.ucas.com/corporate/about-us/contact-us" onclick="window.open(this.href);return false;">Contact us</a> |</li>
                    <li class="help"><a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.HEADER.PAGE'); return false;">Help</a> |</li>
                    <li><a href="javascript:onclick=window.print()">Print page</a></li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                </ul>
            </div><!--tools ENDS here-->
            <div id="logo" class="floatLeft">
                <img src="/static/picture/apply_logo.gif" width="91" height="30" alt="UCAS" />
            </div><!--logo ENDS here-->
            <div class="clearDiv">&nbsp;</div>
            <div id="strapLineApply">
                <h1 class="EN">Employment</h1>
                <div id="logOut"><a href="ServicesServlet?functionname=logout&amp;id=3121fb9f52fc68db16bcdbb25ba0&amp;ran=1xyxbh65mtj08">Log out</a></div>
            </div><!--strapLineApply ENDS here-->
            <div id="strapLineApplyPrint">
                <img src="/static/picture/apply_interactive_pagehead_print.jpg" alt="apply" />
            </div><!--StrapLinePrint ENDS here-->
        </div>
        <!--header end -->

        <div class="clearDiv">&nbsp;</div>
        <div id="mainContent">
            <!--menu starts 左面菜单栏开始-->
            <?php include_once "menu.php"; ?>
            <!--menu ends 左面菜单栏结束-->


            <div id="gatewayContent">
                <div id="breadcrumb">
                    <a href="welcome">Welcome</a> &gt;
                    Employment summary
                </div><!--breadcrumb ENDS here-->
                <hr>
                <div id="midBoxInternalWide">
                    <!--Form starts here-->
                    <div class="thisForm">
                        <!--clip starts-->
                        <form name="Form1" method="post" action="EmploymentServlet?id=e1836169083c2c1968b8b6f43643&amp;ran=wa0f3nuoyl7f">
                            <!--display 'Employment' clip -->
                            <p><input type="hidden" name="from" value="fromEmploymentSummary"></p><p class="bold">Please give the names and addresses of your most recent employers. If you have not had any paid work experience, you can leave this section blank, but you will need to mark it as complete.</p><script>
                                function setCookie(c_name,value,exdays)
                                {
                                    var exdate=new Date();
                                    exdate.setDate(exdate.getDate() + exdays);
                                    var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
                                    document.cookie=c_name + "=" + c_value;
                                }
                                var visible = true;
                                function showHideVideo(){
                                    $("#ucastv").toggle('slow', 'swing', function() { return false; });
                                    if (visible)
                                    {
                                        $("#showHideVideo").html("Show video");
                                        setCookie("UCAS_Employment",false,365);
                                    }
                                    else
                                    {
                                        $("#showHideVideo").html("Hide video");
                                        setCookie("UCAS_Employment",true,365);
                                    };
                                    visible = !visible;
                                    return false;
                                };
                            </script>
                            <div class="video">
                                <strong>Need guidance?</strong> Watch the video advice below [<a href="#" onclick="showHideVideo(); return false;" id="showHideVideo">Hide video</a>].<br>
                                <p id="ucastv"><iframe class="videoIFrame" src="https://players.brightcove.net/4824244714001/default_default/index.html?playlistId=1661051711021625506" scrolling="no"></iframe><br>
                                    (Unable to view videos here? You can watch them at <a onclick="window.open(this.href);return false;" href="https://www.ucas.com/connect/videos">www.ucas.com/connect/videos</a> instead)</p>
                            </div>
                            <p class="bold"><span class="warningTxt">You can add details of up to 5 employers.</span></p><ul>
                                <li><a href="EmploymentServlet?functionname=empdetails&amp;mode=add&amp;empId=0&amp;id=e1836169083c2c1968b8b6f43643&amp;ran=r7iuhuaee4ss">add an employer</a></li>
                            </ul>
                            <hr>
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tbody><tr><td colspan="2" width="520">No details entered.</td></tr><tr><td colspan="2"><hr></td></tr>
                                </tbody></table>
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tbody><tr><td width="481"><p class="bold">雇主名字</p><p>Address: 地址</p>
                                        <p>Nature of work: 工作内容</p>
                                        <p>From December 2001 to September 2006, full-time</p></td>
                                    <td><ul><li><a href="EmploymentServlet?functionname=empdetails&amp;mode=edit&amp;empId=2&amp;id=16b456d9812f48ee415bba4cd4e5&amp;ran=1iambr5n4hlrh">edit</a></li>
                                            <li><a id="delEmployer2" href="#">remove</a></li>
                                            <li style="display:none;"><a id="empLinkDel2" href="EmploymentServlet?functionname=delete&amp;empId=2&amp;id=16b456d9812f48ee415bba4cd4e5&amp;ran=zqb5leqfye7r">remove</a></li></ul></td></tr>
                                <tr><td colspan="2"><hr></td></tr>
                                <tr><td width="481"><p class="bold">1</p><p>Address: 2</p>
                                        <p>Nature of work: 3</p>
                                        <p>From December 2001 to November 2004, full-time</p></td>
                                    <td><ul><li><a href="EmploymentServlet?functionname=empdetails&amp;mode=edit&amp;empId=1&amp;id=16b456d9812f48ee415bba4cd4e5&amp;ran=1azgstsseydi3">edit</a></li>
                                            <li><a id="delEmployer1" href="#">remove</a></li>
                                            <li style="display:none;"><a id="empLinkDel1" href="EmploymentServlet?functionname=delete&amp;empId=1&amp;id=16b456d9812f48ee415bba4cd4e5&amp;ran=om5132p050vj">remove</a></li></ul></td></tr>
                                <tr><td colspan="2"><hr></td></tr>
                                </tbody></table>
                            <div class="thisForm">
                                <div class="thisFormElem">
                                    <div class="thisFormTxt">
                                        &nbsp;
                                    </div>
                                    <div class="thisFormField">
                                        <input type="checkbox" name="chkComplete" id="chkComplete">&nbsp;section completed
                                    </div>
                                </div>
                            </div>

                            <!--display 'save' button clip -->
                            <div class="thisForm">
                                <div class="thisFormElem">
                                    <div class="thisFormTxt">
                                        &nbsp;
                                    </div>
                                    <div class="thisFormField">
                                        <input type="hidden" name="hidJavaScriptEnabled" value="true" id="hidJavaScriptEnabled">
                                        <input type="submit" name="btnSave" value="save" class="submitBtn">

                                    </div>
                                </div>
                            </div>
                            <!--spacer -->
                            <div class="thisFormTxt">&nbsp;</div>
                            <div class="thisFormField">&nbsp;</div>
                            <!--end spacer-->
                        </form>
                        <!--clip ends-->
                    </div><!--close thisForm div-->
                    <!--Form ends here-->
                </div><!--midBoxInternalWide ends here-->
            </div>


        </div>


        <div class="clearDiv">&nbsp;</div>
        <!--display 'Footer' clip -->
        <div id="footer">
            <ul class="floatLeft">
                <li><a href="https://www.ucas.com/corporate/about-us" onclick="window.open(this.href);return false;">About us</a> | </li> <li><a href="https://www.ucas.com/corporate/about-us/terms-and-conditions/terms-and-conditions-use-apply" onclick="window.open(this.href);return false;">Terms &amp; conditions</a> | </li><li><a href="https://www.ucas.com/corporate/about-us/privacy-policies-and-declarations/ucas-privacy-policy" onclick="window.open(this.href);return false;">Privacy policy</a> </li>
            </ul>
            <p id="copy" class="floatRight">&copy; UCAS 2021</p>
        </div><!--footer ENDS here-->

        <div class="clearDiv">&nbsp;</div>
    </div>
    <!--wrapper end-->
</div>
<!--outerWrapper end-->


</body>
</html>