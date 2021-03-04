<?php include_once "seelisttop.php";?>

<body bgcolor="#ffffff" text="#000000" link="#e31c18" vlink="#e31c18" alink="#e31c18">

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
    <div id="d1">

    </div>
    <div id="html" style="display: block;"></div>
</div>
</body>
<script>
    var instcode = '<?php echo $instcode;?>';
    var html = '<?php echo $html;?>';
//    alert(html)

</script>
</html>
