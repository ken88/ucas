<!DOCTYPE html>
<html lang="en" id="top" class="fontsloaded">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="static/css/base.css" media="all" />
    <script id="Cookiebot" src="static/js/uc.js" data-cbid="a0bebf07-0de3-4c3d-bb4d-9b9f993e7627" data-blockingmode="auto"></script>
    <link rel="stylesheet" href="static/css/cookiebot.css" media="defer" onload="this.media=&quot;all&quot;" />

    <script>document.addEventListener('DOMContentLoaded', function() {document.body.classList.add(document.cookie.match('(^|;)\\s*glt_3_\-T_rRw2AdTdZQrVXfo9l\-h8Uqzn3hGrZCHHfvRg\-ITrJ0cZMfHuAmo9YpLYQbTjo\\s*=\\s*([^;]+)') ? 'gigya-logged-in' : 'gigya-logged-out');});</script>
    <meta name="theme-color" content="#1f2935" />

    <script type="application/ld+json">{"@context":"http:\/\/schema.org","@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"item":{"@id":"https:\/\/www.ucas.com\/","name":"Home"}}]}</script>

    <link rel="shortcut icon" href="https://www.ucas.com/sites/all/themes/ucas/favicon.ico" type="image/vnd.microsoft.icon" />

    <title>镜台Mirror牛剑模拟报名系统</title>
    <link type="text/css" rel="stylesheet" href="https://dfcdn.ucas.com/4.8.1/stylesheets/optional/schemes--optional--base.css" media="all" />
    <link type="text/css" rel="stylesheet" href="static/css/css_504dphvm3awltayvrrhhql6r9wkxwencoh5c_dfwgeo.css" media="all" />
    <link type="text/css" rel="stylesheet" href="static/css/owl.carousel.min.css" media="all" />
    <link type="text/css" rel="stylesheet" href="static/css/owl.theme.min.css" media="all" />
    <link type="text/css" rel="stylesheet" href="static/css/owl.transitions.min.css" media="all" />
    <link type="text/css" rel="stylesheet" href="static/css/css_fnhdr-ial3e-t_uinkqabinqystx8fhr_rztodcc4hw.css" media="all" />
    <style type="text/css" media="all">
        <!--/*--><![CDATA[/*><!--*/
        .page-node-355186 .article__content .article__paragraphs > .entity-paragraphs-item,.page-node-352491 .article__content hr,.page-node-352491 .useful.prose{margin-right:auto !important;}.page-node-355186 .article__content > :not(.article__summary):not(.article__mpc):not(.article__paragraphs):not(.article__event_date){margin-right:auto !important;}.page-explore .spinner__display{-webkit-transform:translate3d(0,0,0);}.vjs-button.vjs-share-control{display:none;}@media (min-width:720px){body.page-students.page-students-track-logout .region--content{margin:0;max-width:none;}}.page-node-375001 .section--upper-footer .brick--ucas-article-related-articles,.page-node-374906 .section--upper-footer .brick--ucas-article-related-articles,.page-node-374831 .section--upper-footer .brick--ucas-article-related-articles,.page-node-374886 .section--upper-footer .brick--ucas-article-related-articles,.page-node-374836 .section--upper-footer .brick--ucas-article-related-articles,.page-node-374806 .section--upper-footer .brick--ucas-article-related-articles{display:none;}.video-wall #ucas-media-share-your-story-form .field-name-field-name .form-item__description{display:none;}.section--lower-header .tabs.tabs__admin{z-index:11;}.page-provider-manage-reports .tabs__tab--active{padding-bottom:8px;}.section.section--lower-header .context__message a:hover{background:#e39e14;}.section.section--lower-header .context__message a{color:#000;background:#fbaf17;}.page-students .accordion-container:first-child .buttons-joined a:last-child{overflow:hidden;text-overflow:ellipsis;}#_hj_feedback_container [class*="__MinimizedWidgetMiddle__container"]{bottom:60px !important;top:auto !important;}#_hj_feedback_container [class*="__ExpandedWidget__middle"]{bottom:60px !important;top:auto !important;}.node-type-event.no-sidebars .page-layout-impact .article:not(.article--teaser) > .article__content > .article__summary{margin:0 auto;}

        /*]]>*/-->
    </style>
    <link type="text/css" rel="stylesheet" href="static/css/css_clxj9wdeai3tepf18-nlpgtpora6wc-17nts98xjzqm.css" media="all" />
    <script src="static/js/adverts.js"></script>
    <script type="text/javascript" src="/static/js/jquery-1.4.2.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        $(function(){

            // debugger;
            //默认设置
            var defaultSettings = {
                watermark_txt: "Mirror Education",
                watermark_x: 10,//水印起始位置x轴坐标
                watermark_y: 10,//水印起始位置Y轴坐标
                watermark_rows: 50,//水印行数
                watermark_cols: 50,//水印列数
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

</head>
<body class="html front not-logged-in no-sidebars page-node page-node- page-node-333441 node-type-landing-page v4" >

<div style="background-color: yellow; height: 100px; ">
    <div style="color: red; text-align: center; padding-top: 10px;">
        本网站仅作为学生模拟报名使用！(Mirror Education 镜台教育牛剑模拟赛）不支持官方真实报名！如需真实报名请前往UCAS官网！最终解释权归Mirror镜台教育。
    </div>
    <div style="color: red; text-align: center;">
        This website intends to simulate the registration and application process for students（Mirror Education Oxford & Cambridge Application Simulation).<br>
        It is NOT used for official registration or application. For official application, please go to UCAS official website. Mirror Education reserves the
        right of final explanation.
    </div>
</div>




<div id="page" class="page-wrapper page page-has-sticky-ad grid-page-layout--01" >

    <!-- 头部开始-->
    <section class="section section--upper-header global-header global-header--learners " id="section--upper-header" data-generated-at='{"version":"4.8.1","major_version":"4","ref":"4.8.1","processor":"v4","generated":"2021-02-12T14:43:25+00:00","parsed":"2021-02-24T10:28:07+00:00","framework_domain":"https:\/\/dfcdn.ucas.com","base_domain":"https:\/\/www.ucas.com","link_domain":"https:\/\/www.ucas.com","cached":"FALSE"}'>
        <a href="#main-content" class="skip-navigation">Skip navigation</a>
        <div class="wrapper">

            <a class="logo" href="#">
                <div class="logo__image">
                    <img alt="UCAS" src="static/picture/logo.svg">
                </div>
            </a>


            <div class="meganav">
                <a href="#" class="meganav__toggle" id="meganav-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </a>

                <div class="meganav__menu">
                    <nav class="meganav__links-wrapper">
                        <ul class="meganav__links">
                            <li class="global-link">
                                <a href="#" data-placement="mega-nav" class="global-link__link">
                                    <span class="global-link__title">Further education</span>
                                    <span class="global-link__description">Your options after GCSEs or Nationals</span>
                                </a>
                                <button class="button button--small button--secondary link-panel__toggle" style="display:none" title="Open Further education panel">Open panel</button>

                            </li>
                            <li class="global-link">
                                <a href="#" data-placement="mega-nav" class="global-link__link"><span class="global-link__title">Undergraduate</span><span class="global-link__description">University and conservatoires</span></a>          <button class="button button--small button--secondary link-panel__toggle" style="display:none" title="Open Undergraduate panel">Open panel</button>

                            </li>
                            <li class="global-link">
                                <a href="#" data-placement="mega-nav" class="global-link__link"><span class="global-link__title">Postgraduate</span><span class="global-link__description">Returning to university</span></a>          <button class="button button--small button--secondary link-panel__toggle" style="display:none" title="Open Postgraduate panel">Open panel</button>
                            </li>
                            <li class="global-link">
                                <a href="#" data-placement="mega-nav" class="global-link__link"><span class="global-link__title">Alternatives</span><span class="global-link__description">Apprenticeships, internships and gap years</span></a>          <button class="button button--small button--secondary link-panel__toggle" style="display:none" title="Open Alternatives panel">Open panel</button>

                            </li>
                            <li class="global-link">
                                <a href="#" data-placement="mega-nav" class="global-link__link"><span class="global-link__title">Careers</span><span class="global-link__description">Help with finding a job</span></a>          <button class="button button--small button--secondary link-panel__toggle" style="display:none" title="Open Careers panel">Open panel</button>
                            </li>
                        </ul>
                    </nav>
                </div>



                <div class="meganav__search-widget">
                    <a href="#" class="search-widget__toggle" >Search</a>
                    <div class="search-widget__wrapper wrapper">
                        <div class="search-widget__inner">
                        </div>
                    </div>
                </div>



                <div class="meganav__users">
                    <a href="#" class="meganav__user-menu-toggle meganav__user-menu-toggle--loading" id="user-menu-toggle">
                        <div class="meganav__user-menu-text"><span>&nbsp;</span></div>
                        <div class="meganav__user-menu-icon"></div>
                    </a>
                    <div class="meganav__user-menu" id="user-menu">
                        <div class="meganav__user-menu-wrapper1">
                            <ul class="user-menu">
                                <li class="user-menu__menu-item">
                                    <a href="/default/students" class="user-menu__menu-link user-menu__menu-link--students">
                                        Students
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <!-- 头部结束-->



    <section class="section section--lower-header section--lower-header-has-background section--lower-header-large section--lower-header-has-search" id="section-lower-header">
        <div class="wrapper-background wrapper-background--header-with-background wrapper-background--no-contain"  data-background-image="sites/all/themes/ucas/video/homepage-leader.jpg">
            <div class="section__video-background">
                <video autoplay muted loop playsinline id="landing-video" data-lazy-video="https://dfcdn.ucas.com/4.8.1/videos/homepage-leader.mp4">
                    <source type="video/mp4">
                </video>
            </div>

            <header class="header header--with-background header--reduced">

                <div class="header__inner-wrapper wrapper wrapper--padding">

                    <h1 class="header__heading" id="page-title">Choose your future</h1>


                    <div class="section-lower-header__search">
                        <form action="#" method="get">
                            <div class="global-search__wrapper">
                                <div class="global-search__tabs">
                                    <div class="global-search__tab-highlight" style="left: 20px; width: 61px;"></div>
                                    <button class="global-search__tab global-search__tab--active" type="button" data-tab-target="allForm">All results</button>
                                    <button class="global-search__tab" type="button" data-tab-target="courseForm">Courses</button>
                                    <button class="global-search__tab" type="button" data-tab-target="uniForm">Uni &amp; colleges</button>
                                    <button class="global-search__tab" type="button" data-tab-target="apprenticeshipsForm">Apprenticeships</button>
                                    <button class="global-search__tab" type="button" data-tab-target="adviceForm">Advice</button>
                                    <button class="global-search__tab" type="button" data-tab-target="eventsForm">Events</button>
                                </div>
                                <div class="global-search__dynamic-form">
                                    <input name="keywords" type="text" placeholder="Search for courses, uni & colleges and information">
                                </div>
                            </div>
                        </form>
                    </div>


                </div>


            </header>
        </div>
    </section>

    <div id="section--content" class="section section--content wrapper-background wrapper-background--angle " data-main-search-form="" >
        <div class="section__inner-wrapper section__inner ">


            <div class="section__content">


                <a id="main-content"></a>
                <div class="region region__content brick--main">

                    <article id="article-333441" class="node node-landing-page article article--landing-page article--view-full article-type--landing_page prose clearfix">


                        <div class="wrapper wrapper--padding">
                            <div class="landing-grid--single landing-grid landing-grid--01">
                                <div class="brick brick--ncw2021 grid__item brick--default" data-container-link="#">

                                    <div class="brick__wrapper clearfix contextual-links-region">

                                        <div class="brick__image" data-background-image="https://www.ucas.com/sites/default/files/styles/landing_tile/public/md-6911-nation-careers-week-hub-banner.png?itok=vQzrmFxU"></div>

                                        <h2 class="brick__title"><a href="#">#NCW2021 UCAS Hub Lives</a></h2>

                                        <div class="brick__content">
                                            <div class="bean__body prose">
                                                Join us between 1-5 March at 14:00 (UK time) for our daily Hub Live, including careers workshops, live Q&amp;As, student stories and more.      </div>
                                        </div>

                                        <div class="brick__footer">
                                            <a href="#">Explore <strong>more ›</strong></a>  </div>
                                    </div>

                                </div>

                                <div class="brick brick--ad brick--heavy prose brick--fourth-width brick--advertisement">
                                    <div class="brick__wrapper clearfix">
                                        <div id="LandingMPUPlacement2" style="width: 300px; height: 250px;"  data-google-target-values='{"type":"landing_page","page_id":"333441","audience":"","scheme":"All schemes","topic":""}' data-google-size="{'size':'mpu', 'min': 700}">
                                        </div>
                                        <div class="mpu__description">Advertisement. <a href="#">Why the ads?</a></div>
                                    </div>
                                </div>
                                <div class="brick brick--ad brick--heavy prose brick--fourth-width brick--advertisement">
                                    <div class="brick__wrapper clearfix">
                                        <div id="LandingMPUPlacement2" style="width: 300px; height: 250px;"  data-google-target-values='{"type":"landing_page","page_id":"333441","audience":"","scheme":"All schemes","topic":""}' data-google-size="{'size':'mpu', 'min': 700}"></div>
                                        <div class="mpu__description">Advertisement. <a href="#">Why the ads?</a></div>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="article__paragraphs">




                            <div class="entity entity-paragraphs-item paragraphs-item-content-blocks entity-paragraphs-item--full">
                                <div class="content">

                                    <div class="wrapper wrapper--padding">
                                        <div class="landing-grid landing-grid--04 grid grid--padding-wide grid--padding-extra-wide grid--equal-height grid--max-h3">
                                            <div class="brick brick--home---explore-your-options grid__item brick--default"data-container-link="#">

                                                <div class="brick__wrapper clearfix contextual-links-region">

                                                    <div class="brick__image" data-background-image="https://www.ucas.com/sites/default/files/styles/landing_tile/public/landing/subject.jpg?itok=nVeGbiDX"></div>

                                                    <h2 class="brick__title"><a href="#">Explore your options</a></h2>

                                                    <div class="brick__content">
                                                        <div class="bean__body prose">
                                                            <span>The personalised space to help you make the next step</span>      </div>
                                                    </div>

                                                    <div class="brick__footer">
                                                        <a href="#">Explore <strong>more ›</strong></a>  </div>
                                                </div>

                                            </div>



                                            <div class="brick brick--home---explore-uni-and-colleges grid__item brick--default"data-container-link="#">

                                                <div class="brick__wrapper clearfix contextual-links-region">

                                                    <div class="brick__image" data-background-image="https://www.ucas.com/sites/default/files/styles/landing_tile/public/landing/uni.jpg?itok=1sCAVE1s"></div>

                                                    <h2 class="brick__title"><a href="#">Explore uni and colleges</a></h2>

                                                    <div class="brick__content">
                                                        <div class="bean__body prose">
                                                            A-Z and search&nbsp;<span>universities and colleges</span>      </div>
                                                    </div>

                                                    <div class="brick__footer">
                                                        <a href="#">Explore <strong>more ›</strong></a>  </div>
                                                </div>

                                            </div>



                                            <div class="brick brick--home---explore-regions grid__item brick--default"data-container-link="#">

                                                <div class="brick__wrapper clearfix contextual-links-region">

                                                    <div class="brick__image" data-background-image="https://www.ucas.com/sites/default/files/styles/landing_tile/public/landing/region.png?itok=5qCuIRyg"></div>

                                                    <h2 class="brick__title"><a href="#">Explore regions</a></h2>

                                                    <div class="brick__content">
                                                        <div class="bean__body prose">
                                                            <span>UK regions and city guides</span>      </div>
                                                    </div>

                                                    <div class="brick__footer">
                                                        <a href="#">Explore <strong>more ›</strong></a>  </div>
                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>






                            <div class="entity entity-paragraphs-item paragraphs-item-hero-banner entity-paragraphs-item--full paragraphs-item-hero-banner paragraphs-item-hero-banner--image paragraphs-item-hero-banner--link ext-exclude link-container" data-background-image="https://www.ucas.com/sites/default/files/styles/leaderboard/public/structure-content-images/page-bg-pattern-3.png?itok=r-A1Wy2e">
                                <div class="wrapper wrapper--padding">
                                    <a class="link-container__link paragraphs_item__title" href="#">Discovery Days</a>    <div class="paragraphs_item__body prose">
                                        <h6>Meet universities and colleges, apprenticeships, and more. Be inspired. Get advice. Find your path. Watch live and on-demand. Explore a world of possibilities…</h6>

                                        <h6><a class="button button--primary" href="#" role="button">Find out more</a></h6>
                                    </div>
                                </div>
                            </div>






                            <div class="entity entity-paragraphs-item paragraphs-item-content-blocks entity-paragraphs-item--full">
                                <div class="content">

                                    <div class="wrapper wrapper--padding">
                                        <div class="landing-grid landing-grid--05 grid grid--padding-wide grid--padding-extra-wide grid--equal-height grid--max-h4">
                                            <div class="brick brick--home---unibuddy-cta grid__item brick--default"data-container-link="#">

                                                <div class="brick__wrapper clearfix contextual-links-region">

                                                    <div class="brick__image" data-background-image="https://www.ucas.com/sites/default/files/styles/landing_tile/public/landing/unibuddy_0.png?itok=rRVKvVPr"></div>

                                                    <h2 class="brick__title"><a href="#">Chat to students</a></h2>

                                                    <div class="brick__content">
                                                        <div class="bean__body prose">
                                                            <span>They know the uni, the courses, the accommodation, and the nightlife!</span>      </div>
                                                    </div>

                                                    <div class="brick__footer">
                                                        <a href="#">Explore <strong>more ›</strong></a>  </div>
                                                </div>

                                            </div>



                                            <div class="brick brick--home---apprenticeships-cta grid__item brick--default"data-container-link="#">

                                                <div class="brick__wrapper clearfix contextual-links-region">

                                                    <div class="brick__image" data-background-image="https://www.ucas.com/sites/default/files/styles/landing_tile/public/md-3374_apprenticeships_in_wales.png?itok=SG0o_Kmd"></div>

                                                    <h2 class="brick__title"><a href="#">Apprenticeships</a></h2>

                                                    <div class="brick__content">
                                                        <div class="bean__body prose">
                                                            Everying you need to know about UK apprenticeships      </div>
                                                    </div>

                                                    <div class="brick__footer">
                                                        <a href="#">Explore <strong>more ›</strong></a>  </div>
                                                </div>

                                            </div>



                                            <div class="brick brick--home---accommodation-cta grid__item brick--default"data-container-link="#">

                                                <div class="brick__wrapper clearfix contextual-links-region">

                                                    <div class="brick__image" data-background-image="https://www.ucas.com/sites/default/files/styles/landing_tile/public/landing/accommodation.png?itok=Z46a0svW"></div>

                                                    <h2 class="brick__title"><a href="#">Accommodation</a></h2>

                                                    <div class="brick__content">
                                                        <div class="bean__body prose">
                                                            <span>Find your digs –&nbsp;from campus halls to private living</span>      </div>
                                                    </div>

                                                    <div class="brick__footer">
                                                        <a href="#">Explore <strong>more ›</strong></a>  </div>
                                                </div>

                                            </div>



                                            <div class="brick brick--home---get-updates-from-ucas grid__item brick--default"data-container-link="#">

                                                <div class="brick__wrapper clearfix contextual-links-region">

                                                    <div class="brick__image" data-background-image="https://www.ucas.com/sites/default/files/styles/landing_tile/public/landing/ucas-updates_0.jpg?itok=poB52cGn"></div>

                                                    <h2 class="brick__title"><a href="#">UCAS Updates</a></h2>

                                                    <div class="brick__content">
                                                        <div class="bean__body prose">
                                                            <p>Support for students, parents, and teachers throughout the year.</p>
                                                        </div>
                                                    </div>

                                                    <div class="brick__footer">
                                                        <a href="#">Explore <strong>more ›</strong></a>  </div>
                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>






                            <div class="entity entity-paragraphs-item paragraphs-item-hero-banner entity-paragraphs-item--full paragraphs-item-hero-banner paragraphs-item-hero-banner--slim-slate paragraphs-item-hero-banner--slim paragraphs-item-hero-banner--link ext-exclude">
                                <div class="wrapper wrapper--padding">
                                    <div class="paragraphs-item-hero-banner__content link-container">
                                        <div class="paragraphs-item-hero-banner__left">
                                            <a class="link-container__link paragraphs_item__title" href="#">Don't miss out!</a>        <div class="paragraphs_item__body prose">
                                                <span>Get the personalised experience</span>      </div>
                                        </div>
                                        <div class="paragraphs_item__icon">
                                            <span alt="Home dashboard CTA icons" title="Home dashboard CTA icons" style="width:304px;height:96px;" data-lazy-image="https://www.ucas.com/sites/default/files/hub-icons.png" class="lazy-load img"><span style="padding-bottom: 31.578947368421%;"></span></span>      </div>
                                        <div class="paragraphs-item-hero-banner__right">
                                            <a class="button button--primary" href="#">Create your account now</a>      </div>
                                    </div>
                                </div>
                            </div>






                            <div class="entity entity-paragraphs-item paragraphs-item-content-blocks entity-paragraphs-item--full">
                                <div class="content">
                                    <div class="wrapper wrapper--padding"><h2 class="heading--emphasis"><a name="Updates+from+UCAS" class="paragraphs-item__label-anchor"></a><span>Updates</span> from UCAS</h2></div>
                                    <div class="wrapper wrapper--padding">
                                        <div class="landing-grid landing-grid--04 grid grid--padding-wide grid--padding-extra-wide grid--equal-height grid--max-h3">
                                            <div class="brick brick--admissions-reform grid__item brick--teaser">

                                                <div class="brick__wrapper clearfix contextual-links-region">

                                                    <div class="brick__image" data-background-image="https://www.ucas.com/sites/default/files/styles/landing_tile/public/landing/post-16_qualifications.jpg?itok=KVGAvboJ"></div>

                                                    <h2 class="brick__title">Reforming admissions</h2>

                                                    <div class="brick__content">
                                                        <div class="bean__body prose">
                                                            <span>Find out how we’re working with our customers and the wider to support continual improvement to admissions.</span>      </div>
                                                        <a href="#" class="brick__secondary-link">Read more</a>      </div>
                                                </div>

                                            </div>



                                            <div class="brick brick--homepage-update-cta-2 grid__item brick--teaser">

                                                <div class="brick__wrapper clearfix contextual-links-region">

                                                    <div class="brick__image" data-background-image="https://www.ucas.com/sites/default/files/styles/landing_tile/public/subject-guide-images/nursing.jpg?itok=5x9JrgvI"></div>

                                                    <h2 class="brick__title">Nursing application soar for 2021</h2>

                                                    <div class="brick__content">
                                                        <div class="bean__body prose">
                                                            <p>Over 60,000 people are keen to be part of the fightback against coronavirus and embark on a career in nursing according to latest university application statistics</p>
                                                        </div>
                                                        <a href="#" class="brick__secondary-link">Read more</a>      </div>
                                                </div>

                                            </div>



                                            <div class="brick brick--homepage-update-cta-3 grid__item brick--teaser">

                                                <div class="brick__wrapper clearfix contextual-links-region">

                                                    <div class="brick__image" data-background-image="https://www.ucas.com/sites/default/files/styles/landing_tile/public/landing/about-data-analysis-sm.jpg?itok=nCF0AvBn"></div>

                                                    <h2 class="brick__title">UCAS data and analysis timetable</h2>

                                                    <div class="brick__content">
                                                        <div class="bean__body prose">
                                                            We publish a wide range of undergraduate, conservatoire, and teacher training statistics and analysis reports throughout the year, for use across the education sector and beyond.      </div>
                                                        <a href="#" class="brick__secondary-link">Read more</a>      </div>
                                                </div>

                                            </div>



                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>

                    </article>
                    <div class="brick brick--6">
                        <div class="brick__wrapper clearfix">

                            <div class="brick__content clearfix prose">
                                <style>
                                    <!--/*--><![CDATA[/* ><!--*/



                                    /*--><!]]>*/
                                </style>    </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <section class="section section--upper-footer" id="section-upper-footer">


        <div class="brick brick--related">
            <div class="wrapper clearfix wrapper--padding">

                <div class="brick__content clearfix prose">
                    <div class="article__related_content">
                        <article id="article-333451" class="article article--horizontal article--related-teaser clearfix" data-container-link="#" data-card-info='{"type": "pages", "id": "333451", "title": "Advisers"}'>
                            <button class="button button--favourite inverse" disabled="disabled">Favourite</button>

                            <div class="article__image article__image--placeholder" data-background-image="https://www.ucas.com/sites/default/files/adviser_1.jpg"></div>

                            <div class="article__detail">
                                <h2 class="article__title"><a href="/advisers">Advisers</a></h2>
                                <div class="article__summary">
                                    Get access to guides and resources      </div>
                            </div>

                        </article>
                        <article id="article-333456" class="article article--horizontal article--related-teaser clearfix" data-container-link="#" data-card-info='{"type": "pages", "id": "333456", "title": "Providers"}'>
                            <button class="button button--favourite inverse" disabled="disabled">Favourite</button>

                            <div class="article__image article__image--placeholder" data-background-image="https://www.ucas.com/sites/default/files/provider-c-and-c-hub-banner.png"></div>

                            <div class="article__detail">
                                <h2 class="article__title"><a href="/providers-anonymous">Providers</a></h2>
                                <div class="article__summary">
                                    Sign in to access our services      </div>
                            </div>

                        </article>
                        <article id="article-336991" class="article article--horizontal article--related-teaser clearfix" data-container-link="#" data-card-info='{"type": "pages", "id": "336991", "title": "Data and analysis"}'>
                            <button class="button button--favourite inverse" disabled="disabled">Favourite</button>

                            <div class="article__image article__image--placeholder" data-background-image="https://www.ucas.com/sites/default/files/data_and_analysis.jpg"></div>

                            <div class="article__detail">
                                <h2 class="article__title"><a href="/data-and-analysis">Data and analysis</a></h2>
                                <div class="article__summary">
                                    Analytical statistics and data reporting      </div>
                            </div>

                        </article>
                        <article id="article-333471" class="article article--horizontal article--related-teaser clearfix" data-container-link="#" data-card-info='{"type": "pages", "id": "333471", "title": "About us "}'>
                            <button class="button button--favourite inverse" disabled="disabled">Favourite</button>

                            <div class="article__image article__image--placeholder" data-background-image="https://www.ucas.com/sites/default/files/about_us_1.jpg"></div>

                            <div class="article__detail">
                                <h2 class="article__title"><a href="/about-us">About us </a></h2>
                                <div class="article__summary">
                                    Corporate information and press      </div>
                            </div>

                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="section footer section--footer" id="section--footer" data-generated-at='{"version":"4.8.1","major_version":"4","ref":"4.8.1","processor":"v4","generated":"2021-02-12T14:43:25+00:00","parsed":"2021-02-24T10:28:07+00:00","framework_domain":"https:\/\/dfcdn.ucas.com","base_domain":"https:\/\/www.ucas.com","link_domain":"https:\/\/www.ucas.com","cached":"FALSE"}'>


        <div class="wrapper-container">
            <div class="wrapper wrapper--padding">
                <nav class="footer__social-contact" aria-label="contact and social media links">
                    <div class="footer__contact-links">
                        <a href="#" class="contact-link">Contact us</a>
                        <a href="#" class="contact-link" id="udf-feedback-link">Give feedback</a>
                    </div>

                    <div class="footer__icon-links">
                        <a href="#" target="_blank" rel="noopener" class="icon-link">Facebook<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 44 44" class="menu__svg">
                                <g id="facebook" transform="translate(0 0)">
                                    <circle class="cls-1" cx="22" cy="22" r="21"></circle>
                                    <path class="cls-2" d="M24 36V23h4.2l.8-5h-5v-2.9c0-1.4.5-2.4 2.5-2.4H29V8.2c-1.2-.1-2.5-.2-3.7-.2-3.7 0-6.3 2.3-6.3 6.6V18h-4v5h4v13h5z" fill="#fff"></path>
                                </g>
                            </svg>
                        </a>
                        <a href="#" target="_blank" rel="noopener" class="icon-link">Twitter<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 44 44">
                                <g id="twitter" transform="translate(0 0)">
                                    <circle class="cls-1" cx="22" cy="22" r="21"></circle>
                                    <path class="cls-2" d="M17.2 33c8.3 0 15.1-6.9 15.2-15.6v-.9c1-.8 1.9-1.8 2.7-2.9-1 .5-2 .7-3.1.9 1.1-.7 1.9-1.8 2.3-3.1-1 .6-2.2 1.1-3.4 1.3-2-2.2-5.4-2.4-7.5-.3-1.1 1.1-1.7 2.5-1.7 4.1 0 .4 0 .9.1 1.3-4.3-.2-8.3-2.3-11-5.8-1.4 2.5-.7 5.8 1.7 7.4-.8-.1-1.7-.3-2.4-.7v.1c0 2.6 1.8 4.9 4.3 5.4-.8.2-1.6.3-2.4.1.7 2.3 2.7 3.8 5 3.9-1.9 1.5-4.2 2.4-6.6 2.4-.4 0-.8 0-1.3-.1 2.3 1.6 5.2 2.5 8.1 2.5"></path>
                                </g>
                            </svg>
                        </a>
                        <a href="#" target="_blank" rel="noopener" class="icon-link">LinkedIn<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 44 44">
                                <g id="linked_in" transform="translate(0 0)">
                                    <circle class="cls-1" cx="22" cy="22" r="21"></circle>
                                    <path id="Rectangle_336" class="cls-2" d="M11 18h5v15h-5V18z"></path>
                                    <path id="Path_446" class="cls-2" d="M33 24.9V33h-5v-7.2c0-1.7.4-3.9-2-3.9s-3 1.9-3 3.8V33h-5V18h5v2.3c.9-1.5 2.8-2.4 4.5-2.4 4.6 0 5.5 3.1 5.5 7z"></path>
                                    <path id="Path_447" class="cls-2" d="M16 13.5c0 1.4-1.1 2.5-2.5 2.5S11 14.9 11 13.5s1.1-2.5 2.5-2.5 2.5 1.1 2.5 2.5z"></path>
                                </g>
                            </svg>
                        </a>
                        <a href="#" target="_blank" rel="noopener" class="icon-link">YouTube<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 44 44">
                                <g id="youtube" transform="translate(0 0)">
                                    <circle class="cls-1" cx="22" cy="22" r="21"></circle>
                                    <path d="M35.4 15.1c-.3-1.2-1.3-2.2-2.5-2.5C30.7 12 22 12 22 12s-8.8 0-11 .6c-1.2.3-2.1 1.3-2.5 2.5-.3 2.3-.5 4.6-.5 6.9s.2 4.6.6 6.9c.3 1.2 1.3 2.2 2.5 2.5 2.2.6 10.9.6 10.9.6s8.7-.1 10.9-.7c1.2-.3 2.1-1.3 2.5-2.5.4-2.3.6-4.6.6-6.9 0-2.2-.2-4.5-.6-6.8zM20 25.6v-8l7.4 4-7.4 4z"></path>
                                    <path class="cls-2" d="M35.4 15.1c-.3-1.2-1.3-2.2-2.5-2.5C30.7 12 22 12 22 12s-8.8 0-11 .6c-1.2.3-2.1 1.3-2.5 2.5-.3 2.3-.5 4.6-.5 6.9s.2 4.6.6 6.9c.3 1.2 1.3 2.2 2.5 2.5 2.2.6 10.9.6 10.9.6s8.7-.1 10.9-.7c1.2-.3 2.1-1.3 2.5-2.5.4-2.3.6-4.6.6-6.9 0-2.2-.2-4.5-.6-6.8zM20 25.6v-8l7.4 4-7.4 4z"></path>
                                </g>
                            </svg>
                        </a>
                        <a href="#" target="_blank" rel="noopener" class="icon-link">Instagram<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 44 44">
                                <g id="instagram" transform="translate(0 0)">
                                    <circle class="cls-1" cx="22" cy="22" r="21"></circle>
                                    <path class="cls-2" d="M22 16c1.1 0 2.1.3 3 .8s1.7 1.3 2.2 2.2c1.1 1.9 1.1 4.1 0 6-.5.9-1.3 1.7-2.2 2.2-1.9 1.1-4.1 1.1-6 0-.9-.5-1.7-1.3-2.2-2.2-1.1-1.9-1.1-4.1 0-6 .5-.9 1.3-1.7 2.2-2.2.9-.5 1.9-.8 3-.8zm0 10c2.2 0 4-1.8 4-4s-1.8-4-4-4-4 1.8-4 4 1.8 4 4 4zm8-10.5c0 .4-.2.8-.5 1.1-.3.3-.6.5-1 .4-.8 0-1.5-.7-1.5-1.5 0-.4.2-.8.4-1.1.6-.6 1.5-.6 2.1 0 .3.3.5.7.5 1.1zm3.9 1.5c0 1 .1 2.7.1 5s0 4-.1 5c0 .9-.2 1.8-.5 2.7-.6 1.8-2 3.2-3.8 3.8-.9.3-1.8.4-2.7.5H22c-2.3 0-4 0-5-.1-.9 0-1.8-.2-2.7-.5s-1.7-.8-2.3-1.4c-.7-.7-1.2-1.5-1.5-2.3-.3-.9-.4-1.8-.5-2.7v-5c0-2.3 0-4 .1-5 0-.9.2-1.8.5-2.7.6-1.8 2-3.2 3.8-3.8.9-.3 1.8-.4 2.7-.5 1-.1 2.7-.1 5-.1s4 0 5 .1c.9 0 1.8.2 2.7.5 1.8.6 3.2 2 3.8 3.8.1.9.3 1.8.3 2.7zm-2.4 12.2c.3-1 .4-1.9.4-2.9 0-.8.1-1.9.1-3.4v-1.7c0-1.5 0-2.6-.1-3.4 0-1-.2-2-.4-2.9-.4-1.1-1.3-1.9-2.3-2.3-1-.3-1.9-.4-2.9-.4-.8 0-1.9-.1-3.4-.1h-1.7c-1.4 0-2.6 0-3.4.1-1 0-2 .2-2.9.4-1.1.4-1.9 1.3-2.3 2.3-.3 1-.4 1.9-.4 2.9 0 .8-.1 1.9-.1 3.4v1.7c0 1.4 0 2.6.1 3.4 0 1 .2 2 .4 2.9.4 1.1 1.3 1.9 2.3 2.3 1 .3 1.9.4 2.9.4.8 0 1.9.1 3.4.1h1.7c1.5 0 2.6 0 3.4-.1 1 0 2-.2 2.9-.4 1-.4 1.9-1.3 2.3-2.3z"></path>
                                </g>
                            </svg>
                        </a>
                    </div>
                </nav>

                <nav class="footer__page-links" aria-label="information links">
                    <div class="footer__links-group">
                        <a href="#">Advisers</a>
                        <a href="#">Providers</a>
                        <a href="#">Data</a>
                    </div>

                    <div class="footer__links-group">
                        <a href="#">About us</a>
                        <a href="#">Join our team</a>
                        <a href="#">Accessibility</a>
                        <a href="#">Ad opportunities</a>
                    </div>

                    <div class="footer__links-group">

                    </div>
                </nav>
            </div>
        </div>
        <div class="wrapper-container">
            <div class="wrapper wrapper--padding">
                <div class="footer__copyright">
                    <img alt="UCAS" src="static/picture/logo.svg"></a>
                    <p>&copy; UCAS 2021</p>
                </div>
            </div>
        </div>


    </footer>
    <div class='advert advert--tolarge-footer'><div data-google-target-values='{"type":"landing_page","page_id":"333441","audience":"","scheme":"All schemes","topic":""}' data-google-size='{"size":"custom", "width": 320, "height": 50, "min": 1, "max": 721}' data-google-slot-id='/1217421/UCAS/UCAS_HP_Mobile'></div></div>
</div>


<script type='text/javascript'>
    if ('visibilityState' in document) {
        var UCASDesignFramework = UCASDesignFramework || {}, Drupal = Drupal || { 'settings': {}, 'behaviors': {}, 'locale': {} };
        function dfExtend(){for(var i=1; i<arguments.length; i++)for(var key in arguments[i])if(arguments[i].hasOwnProperty(key))arguments[0][key] = arguments[i][key];return arguments[0];}dfExtend(Drupal.settings, {"basePath":"\/","pathPrefix":"","ajaxPageState":{"theme":"ucas","theme_token":"ctyCGDcrumIRfRDBmOqo5YoGiCmBKT7z67C9wOMa6A4","jquery_version":"1.9","js":{"misc\/jquery-extend-3.4.0.js":1,"misc\/jquery-html-prefilter-3.5.0-backport.js":1,"misc\/jquery.once.js":1,"misc\/drupal.js":1,"sites\/all\/modules\/contrib\/jquery_update\/replace\/ui\/external\/jquery.cookie.js":1,"misc\/ajax.js":1,"sites\/all\/modules\/contrib\/geofield_gmap\/geofield_gmap.js":1,"sites\/all\/modules\/custom\/media_buto\/js\/media_buto_akita.js":1,"sites\/all\/modules\/contrib\/extlink\/extlink.js":1,"0":1,"sites\/all\/modules\/custom\/ucas_gigya\/js\/ucas-gigyaHelpers.js":1,"https:\/\/prod.df.ucascdn.com\/DF-1583-create-shared-user-menu\/scripts\/evergreen\/user-menu.js":1,"https:\/\/cdns.eu1.gigya.com\/js\/gigya.js?apikey=3_-T_rRw2AdTdZQrVXfo9l-h8Uqzn3hGrZCHHfvRg-ITrJ0cZMfHuAmo9YpLYQbTjo\u0026services=accounts.tfa,accounts.screenSet":1,"sites\/all\/modules\/custom\/ucas_gigya\/js\/ucas-gigyaHandlers.js":1,"sites\/all\/modules\/contrib\/ctools\/js\/auto-submit.js":1,"sites\/all\/modules\/contrib\/behavior_weights\/behavior_weights.js":1,"sites\/all\/modules\/custom\/ucas_event\/js\/ucas-ajaxTabs.js":1,"misc\/progress.js":1,"sites\/all\/modules\/custom\/ucas_media\/js\/ucas-video.js":1,"sites\/all\/modules\/custom\/ucas_media\/js\/ucas_media-brightcove.js":1,"sites\/all\/modules\/contrib\/radioactivity\/js\/radioactivity.js":1,"sites\/all\/modules\/custom\/ucas_organic_groups\/js\/ucas-organic-groups.js":1,"sites\/all\/modules\/custom\/ucas_site_config\/js\/helper.js":1,"sites\/all\/modules\/custom\/ucas_site_config\/js\/paragraph-admin.js":1,"sites\/all\/modules\/custom\/ucas_site_config\/js\/global.js":1,"sites\/all\/modules\/custom\/ucas_site_config\/js\/ucas-browsealoud.js":1,"sites\/all\/modules\/custom\/ucas_global_menu\/js\/ucas-globalMenu.js":1,"sites\/all\/libraries\/owl-carousel\/owl.carousel.min.js":1,"sites\/all\/themes\/ucas\/js\/ucas-globalSearch.js":1,"sites\/all\/themes\/desfra\/js\/helper.js":1,"sites\/all\/themes\/ucas\/js\/ga.js":1,"sites\/all\/themes\/ucas\/js\/ucas-file-input.js":1,"sites\/all\/themes\/ucas\/js\/ucas-lazy-load.js":1,"sites\/all\/themes\/ucas\/js\/ucas-multi-download.js":1,"sites\/all\/themes\/ucas\/js\/ucas-theme.js":1,"sites\/all\/themes\/ucas\/js\/ucas-tooltips.js":1,"sites\/all\/themes\/ucas\/js\/lib\/jquery-migrate-3.0.0.min.js":1,"sites\/all\/themes\/ucas\/js\/lib\/jquery.selectionBox.js":1,"sites\/all\/themes\/ucas\/js\/lib\/jquery.mobile.touch-events.min.js":1,"1":1},"css":{"https:\/\/dfcdn.ucas.com\/4.8.1\/stylesheets\/optional\/schemes--optional--base.css":1,"sites\/all\/modules\/custom\/ucas_gigya\/css\/ucas-gigya.css":1,"sites\/all\/modules\/custom\/ucas_site_config\/css\/ucas_site_config.css":1,"sites\/all\/libraries\/owl-carousel\/owl.carousel.min.css":1,"sites\/all\/libraries\/owl-carousel\/owl.theme.min.css":1,"sites\/all\/libraries\/owl-carousel\/owl.transitions.min.css":1,"sites\/all\/modules\/custom\/ucas_site_config\/css\/paragraph-hero-banner.css":1,"sites\/all\/modules\/custom\/ucas_site_config\/css\/paragraph-content-blocks.css":1,"sites\/all\/modules\/custom\/ucas_landing_pages\/css\/ucas-landing.css":1,"0":1,"sites\/all\/themes\/desfra\/css\/desfra-global.css":1,"sites\/all\/themes\/desfra\/css\/components\/video-popup.css":1,"sites\/all\/themes\/ucas\/css\/ucas-global.css":1,"sites\/all\/themes\/ucas\/css\/components\/file-input.css":1}},"isDrupalLogin":false,"isGigyaLogin":false,"gigyaToken":"glt_3_-T_rRw2AdTdZQrVXfo9l-h8Uqzn3hGrZCHHfvRg-ITrJ0cZMfHuAmo9YpLYQbTjo","level":10,"digitalUrl":"https:\/\/digital.ucas.com","accountsUrl":"https:\/\/accounts.ucas.com","ucasComUrl":"https:\/\/www.ucas.com","useCentralLogin":1,"CToolsModal":{"modalSize":{"contentBottom":72,"contentRight":26}},"extlink":{"extTarget":"_blank","extClass":"ext","extLabel":"(link is external)","extImgClass":0,"extSubdomains":1,"extExclude":"(gttr\\.ac\\.uk)|(cucas\\.ac\\.uk)|(ukpass\\.ac\\.uk)|(ucasprogress\\.com)|(pages02\\.net)|(prospects\\.ac\\.uk)|(update\\.ucas\\.co\\.uk)|(undergrad\\.apply\\.ucas\\.com)|(ucasdigital\\.com)|(ucas\\.com)","extInclude":"link\\\/[0-9]+$","extCssExclude":"div.description, .article__image, .section--footer, .section--upper-header, .section--lower-header, .explore-nav, .ext-exclude","extCssExplicit":"","extAlert":0,"extAlertText":"This link will take you to an external web site.","mailtoClass":"mailto","mailtoLabel":"(link sends e-mail)"},"pixels":{"jsPath":"https:\/\/www.ucas.com\/sites\/all\/themes\/ucas\/images\/pixels\/pixel-js.png","adsPath":"https:\/\/www.ucas.com\/sites\/all\/themes\/ucas\/images\/pixels\/pixel-ads.png"}});
        // Include full styles.
        ['https://dfcdn.ucas.com/4.8.1/stylesheets/optional/schemes--optional--full.css',
            'https://dfcdn.ucas.com/4.8.1/stylesheets/optional/icons--optional.css',
            'https://dfcdn.ucas.com/4.8.1/stylesheets/gigya.css',
            'https://dfcdn.ucas.com/4.8.1/stylesheets/full.css'].forEach(
            function(src) {var l=document.createElement('link');l.href=src;l.type='text/css';l.rel='stylesheet';document.head.appendChild(l);}
        );
        // Include full javascript.
        ['https://dfcdn.ucas.com/4.8.1/scripts/base.js',
            'https://dfcdn.ucas.com/4.8.1/scripts/vendor-light.js',
            'https://dfcdn.ucas.com/4.8.1/scripts/full.js',
            'https://dfcdn.ucas.com/4.8.1/scripts/inventory.js',
            'https://www.ucas.com/sites/default/files/js/js_Q3vaa0rR7P_EcER83U345uW03pCoQvlX_sex4C2f3OI.js',
            'https://www.ucas.com/sites/default/files/js/js_TMJmlz3gPjv2RHgNbEo5G0yq_QCtLegmDaQO1DqYMFs.js',
            'https://www.ucas.com/sites/default/files/js/js_AAZzFaGgUCjtXxWEIox_V3SEsAjAUAicJ12Lsb3PSUs.js',
            'window.__gigyaConf = {sessionExpiration: 0, enableSSOToken: true, autoLogin: true};',
            'https://www.ucas.com/sites/all/modules/custom/ucas_gigya/js/min/ucas-gigyaHelpers.min.js?qoqhog',
            'https://prod.df.ucascdn.com/DF-1583-create-shared-user-menu/scripts/evergreen/user-menu.js?qoqhog',
            'https://cdns.eu1.gigya.com/js/gigya.js?apikey=3_-T_rRw2AdTdZQrVXfo9l-h8Uqzn3hGrZCHHfvRg-ITrJ0cZMfHuAmo9YpLYQbTjo&services=accounts.tfa,accounts.screenSet',
            'https://www.ucas.com/sites/all/modules/custom/ucas_gigya/js/min/ucas-gigyaHandlers.min.js?qoqhog',
            'https://www.ucas.com/sites/default/files/js/js_zqZdhKXvBmsSG8IDjosbYPCWK78T_8TEtZaDzh9TTo8.js',
            'https://www.ucas.com/sites/all/libraries/owl-carousel/owl.carousel.min.js?qoqhog',
            'https://www.ucas.com/sites/default/files/js/js_gkkZT4LuqNo5DH76nwLKyFck5kwVfBKnD4Hv8FYZrQw.js',
            'https://www.ucas.com/sites/default/files/js/js_3386KiBliejScC406Vz95vc6RHM3rNXAB8paPvRsEpw.js',
            'https://dfcdn.ucas.com/4.8.1/scripts/ready.js'].forEach(
            function(src){var s=document.createElement('script');if (src.indexOf('{') !== -1 || src.indexOf('|') !== -1) {var script=src.replace('\\', '');var c=document.createTextNode(script);s.appendChild(c);s.async=false;}else{s.src=src;s.async=false;}document.head.appendChild(s);}
        );
    }


</script>
<!-- Usability tracking -->
<div class="usability-pixels" style="position:absolute;">
    <img alt="Single-pixel transparent image" style="display: none;" src="static/picture/pixel-all.png">
    <noscript>
        <img alt="Single-pixel transparent image" style="display: none;" src="static/picture/pixel-nojs.png">
    </noscript>
</div><!-- End usability tracking -->
<div id="advertisements" class="advert-300 advert-728 advert-banner">

</div>
</body>
</html>
