<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>
    <style type="text/css" media="screen">
        @import "/static/css/styles.css";
    </style>
    <link rel="stylesheet" type="text/css" media="screen" href="/static/css/form.css" />
    <link rel="stylesheet" type="text/css" media="print" href="/static/css/print.css" />

    <script type="text/javascript" src="/static/js/jquery-1.4.2.min.js" charset="utf-8"></script>



    <script type="text/javascript">

        var inputName = '<?php echo $inputName;?>';
        function passToParent(msg) {
            $("#"+inputName,opener.document).val(msg); //给父窗口aaa中赋值
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