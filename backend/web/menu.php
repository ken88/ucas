<div id="leftNavInternal" class="floatLeft">
    <ul>
        <li  id="welcome">
            <a href="welcome">Welcome</a>
        </li>
        <li class="" id="personaldetails">
            <a href="personaldetails">Personal details</a>
        </li>
        <li class="" id="choices">
            <a href="choices">Choices</a>
        </li>
        <li class="" id="education">
            <a href="education">Education</a>
        </li>
        <li class="" id="employment">
            <a href="employment">Employment</a>
        </li>
        <li class="" id="statement">
            <a href="statement">Statement</a>
        </li>
        <li class="" id="viewalldetails">
            <a href="viewalldetails">View all details</a>
        </li>
        <li class="" id="Pay-Send">
            Pay/Send
        </li>
        <li class="last">
            <a href="#" onclick="helpOpen('PopUpServlet', '?functionname=help&amp;page=HELP.OPTIONS.OPTIONS.PAGE'); return false;">Help</a>
        </li>

    </ul>
    <h3>Key</h3>
    <ul id="key">
        <li id="complete">Completed</li>
        <li id="inProgress">In progress</li>
        <li id="notStarted">Not started</li>
        <li style="display: none;" id="subCharacter">European characters allowed</li>
        <li id="help">Help</li>
    </ul>
    <!--key ENDS here-->
</div>
<!--leftNav ENDS here-->
<script type="text/javascript">
    var viewName = '<?php echo $view?>';
    $('#'+viewName).addClass('current');


    // 获取左侧菜单
    $.post('/useradmin/ajax-get-menu',null,function (data) {
        console.log(data)
        var res = data.data;
        if (res['personal_details'] === false) {
            $('#personaldetails').addClass('notStarted');
        } else if (res['personal_details'] === '0') {
            $('#personaldetails').addClass('inProgress');
        }else if (res['personal_details'] === '1') {
            $('#personaldetails').addClass('complete');
        }

        if (res['choices'] === false) {
            $('#choices').addClass('notStarted');
        } else if (res['choices'] === '0') {
            $('#choices').addClass('inProgress');
        }else if (res['choices'] === '1') {
            $('#choices').addClass('complete');
        }

        if (res['education'] === false) {
            $('#education').addClass('notStarted');
        } else if (res['education'] === '0') {
            $('#education').addClass('inProgress');
        }else if (res['education'] === '1') {
            $('#education').addClass('complete');
        }

        if (res['employment'] === false) {
            $('#employment').addClass('notStarted');
        } else if (res['employment'] === '0') {
            $('#employment').addClass('inProgress');
        }else if (res['employment'] === '1') {
            $('#employment').addClass('complete');
        }

        if (res['statement'] === false) {
            $('#statement').addClass('notStarted');
        } else if (res['statement'] === '0') {
            $('#statement').addClass('inProgress');
        }else if (res['statement'] === '1') {
            $('#statement').addClass('complete');
        }

        if (res['view_all_details'] === false) {
            $('#viewalldetails').addClass('notStarted');
        } else if (res['view_all_details'] === '0') {
            $('#viewalldetails').addClass('inProgress');
        }else if (res['view_all_details'] === '1') {
            $('#viewalldetails').addClass('complete');
        }

      
    },'json');
</script>