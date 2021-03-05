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
            <img src="/static/images/apply_logo.gif" width="91" height="30" alt="UCAS">
        </div><!--logo ENDS here-->
        <div class="clearDiv">&nbsp;</div>
    </div><!--header ENDS here-->


    <div id="midBoxInternalWide">
        <!--<h2 class="inPage">In page header example</h2>-->

        <p>&nbsp;</p>


        <p class="bold">Choose a residential category...</p>

        <br>

        <table border="0" cellpadding="0" cellspacing="0">

            <tbody><tr><td><a href="#" onclick="passToParent('UK Citizen - England')">UK Citizen - England</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('UK Citizen - Scotland')">UK Citizen - Scotland</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('UK Citizen - Wales')">UK Citizen - Wales</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('UK Citizen - Northern Ireland')">UK Citizen - Northern Ireland</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('British Citizen - Channel Islands and Isle of Man')">British Citizen - Channel Islands and Isle of Man</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('British Citizen - British Overseas Territories')">British Citizen - British Overseas Territories</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('EU National (non-UK Citizen)')">EU National (non-UK Citizen)</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('EEA or Swiss National')">EEA or Swiss National</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('Child of a Turkish Worker')">Child of a Turkish Worker</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('Refugee')">Refugee</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('Humanitarian Protection or similar')">Humanitarian Protection or similar</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('Settled in the UK')">Settled in the UK</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('Other')">Other</a></td></tr>

            </tbody></table>


    </div>
</div>
</body>
</html>
