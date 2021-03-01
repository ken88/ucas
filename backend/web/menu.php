<div id="leftNavInternal" class="floatLeft">
    <ul>
        <li class="notStarted" id="welcome">
            <a href="welcome">Welcome</a>
        </li>
        <li class="notStarted" id="personaldetails">
            <a href="personaldetails">Personal details</a>
        </li>
        <li class="notStarted" id="choices">
            <a href="choices">Choices</a>
        </li>
        <li class="notStarted" id="education">
            <a href="education">Education</a>
        </li>
        <li class="notStarted" id="employment">
            <a href="employment">Employment</a>
        </li>
        <li class="notStarted" id="statement">
            <a href="statement">Statement</a>
        </li>
        <li class="notStarted" id="viewalldetails">
            <a href="viewalldetails">View all details</a>
        </li>
        <li class="notStarted" id="Pay-Send">
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
    $(function () {
        $('#'+viewName).addClass('current');
    })
</script>