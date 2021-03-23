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
    <title>镜台Mirror牛剑模拟报名系统</title>
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


        $(function(){
           // debugger;
            //默认设置
            var defaultSettings = {
                watermark_txt: "Mirror Education",
                watermark_x: 10,//水印起始位置x轴坐标
                watermark_y: 10,//水印起始位置Y轴坐标
                watermark_rows: 20,//水印行数
                watermark_cols: 30,//水印列数
                watermark_x_space: 10,//水印x轴间隔
                watermark_y_space: 10,//水印y轴间隔
                watermark_color: '#aaa',//水印字体颜色
                watermark_alpha: 0.4,//水印透明度
                watermark_fontsize: '25px',//水印字体大小
                watermark_font: '微软雅黑',//水印字体
                watermark_width: 260,//水印宽度
                watermark_height: 80,//水印长度
                watermark_angle: 50//水印倾斜度数
            };
            //采用配置项替换默认值，作用类似jquery.extend
            if (arguments.length === 1 && typeof arguments[0] === "object") {
                var src = arguments[0] || {};
                for (key in src) {
                    if (src[key] && defaultSettings[key] && src[key] === defaultSettings[key])
                        continue;
                    else if (src[key])
                        defaultSettings[key] = src[key];
                }
            }

            var oTemp = document.createDocumentFragment();

            //获取页面最大宽度
            var page_width = Math.max(document.body.scrollWidth, document.body.clientWidth);
            var cutWidth = page_width * 0.0150;
            var page_width = page_width - cutWidth;
            //获取页面最大高度
            var page_height = Math.max(document.body.scrollHeight, document.body.clientHeight) + 450;
            // var page_height = document.body.scrollHeight+document.body.scrollTop;
            //如果将水印列数设置为0，或水印列数设置过大，超过页面最大宽度，则重新计算水印列数和水印x轴间隔
            if (defaultSettings.watermark_cols == 0 || (parseInt(defaultSettings.watermark_x + defaultSettings.watermark_width * defaultSettings.watermark_cols + defaultSettings.watermark_x_space * (defaultSettings.watermark_cols - 1)) > page_width)) {
                defaultSettings.watermark_cols = parseInt((page_width - defaultSettings.watermark_x + defaultSettings.watermark_x_space) / (defaultSettings.watermark_width + defaultSettings.watermark_x_space));
                defaultSettings.watermark_x_space = parseInt((page_width - defaultSettings.watermark_x - defaultSettings.watermark_width * defaultSettings.watermark_cols) / (defaultSettings.watermark_cols - 1));
            }
            //如果将水印行数设置为0，或水印行数设置过大，超过页面最大长度，则重新计算水印行数和水印y轴间隔
            if (defaultSettings.watermark_rows == 0 || (parseInt(defaultSettings.watermark_y + defaultSettings.watermark_height * defaultSettings.watermark_rows + defaultSettings.watermark_y_space * (defaultSettings.watermark_rows - 1)) > page_height)) {
                defaultSettings.watermark_rows = parseInt((defaultSettings.watermark_y_space + page_height - defaultSettings.watermark_y) / (defaultSettings.watermark_height + defaultSettings.watermark_y_space));
                defaultSettings.watermark_y_space = parseInt(((page_height - defaultSettings.watermark_y) - defaultSettings.watermark_height * defaultSettings.watermark_rows) / (defaultSettings.watermark_rows - 1));
            }
            var x;
            var y;
            for (var i = 0; i < defaultSettings.watermark_rows; i++) {
                y = defaultSettings.watermark_y + (defaultSettings.watermark_y_space + defaultSettings.watermark_height) * i;
                for (var j = 0; j < defaultSettings.watermark_cols; j++) {
                    x = defaultSettings.watermark_x + (defaultSettings.watermark_width + defaultSettings.watermark_x_space) * j;

                    var mask_div = document.createElement('div');
                    mask_div.id = 'mask_div' + i + j;
                    mask_div.className = 'mask_div';
                    mask_div.appendChild(document.createTextNode(defaultSettings.watermark_txt));
                    //设置水印div倾斜显示
                    mask_div.style.webkitTransform = "rotate(-" + defaultSettings.watermark_angle + "deg)";
                    mask_div.style.MozTransform = "rotate(-" + defaultSettings.watermark_angle + "deg)";
                    mask_div.style.msTransform = "rotate(-" + defaultSettings.watermark_angle + "deg)";
                    mask_div.style.OTransform = "rotate(-" + defaultSettings.watermark_angle + "deg)";
                    mask_div.style.transform = "rotate(-" + defaultSettings.watermark_angle + "deg)";
                    mask_div.style.visibility = "";
                    mask_div.style.position = "absolute";
                    mask_div.style.left = x + 'px';
                    mask_div.style.top = y + 'px';
                    mask_div.style.overflow = "hidden";
                    mask_div.style.zIndex = "9999";
                    mask_div.style.pointerEvents = 'none';//pointer-events:none  让水印不遮挡页面的点击事件
                    //mask_div.style.border="solid #eee 1px";
                    mask_div.style.opacity = defaultSettings.watermark_alpha;
                    mask_div.style.fontSize = defaultSettings.watermark_fontsize;
                    mask_div.style.fontFamily = defaultSettings.watermark_font;
                    mask_div.style.color = defaultSettings.watermark_color;
                    mask_div.style.textAlign = "center";
                    mask_div.style.width = defaultSettings.watermark_width + 'px';
                    mask_div.style.height = defaultSettings.watermark_height + 'px';
                    mask_div.style.display = "block";
                    oTemp.appendChild(mask_div);
                }
                ;
            };
            document.body.appendChild(oTemp);
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
<body bgcolor="#ffffff" text="#000000" link="#e31c18" vlink="#e31c18" alink="#e31c18" >
<div style="background-color: yellow; height: 80px; font-size: 14px; ">
    <div style="color: red; text-align: center; padding-top: 10px;">
        本网站仅作为学生模拟报名使用！(Mirror Education 镜台教育牛剑模拟赛）不支持官方真实报名！如需真实报名请前往UCAS官网！最终解释权归Mirror镜台教育。
    </div>
    <div style="color: red; text-align: center;">
        This website intends to simulate the registration and application process for students（Mirror Education Oxford & Cambridge Application Simulation).<br>
        It is NOT used for official registration or application. For official application, please go to UCAS official website. Mirror Education reserves the
        right of final explanation.
    </div>
</div>
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