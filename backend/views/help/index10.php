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


        <p class="bold">Choose a disability/special needs category...</p>

        <br>

        <table border="0" cellpadding="0" cellspacing="0">

            <tbody><tr><td><a href="#" onclick="passToParent('No disability')">No disability</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('You have a social/communication impairment such as Asperger\'s syndrome/other autistic spectrum disorder')">You have a social/communication impairment such as Asperger's syndrome/other autistic spectrum disorder</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('You are blind or have a serious visual impairment uncorrected by glasses')">You are blind or have a serious visual impairment uncorrected by glasses</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('You are deaf or have a serious hearing impairment')">You are deaf or have a serious hearing impairment</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('You have a long standing illness or health condition such as cancer, HIV, diabetes, chronic heart disease, or epilepsy')">You have a long standing illness or health condition such as cancer, HIV, diabetes, chronic heart disease, or epilepsy</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('You have a mental health condition, such as depression, schizophrenia or anxiety disorder')">You have a mental health condition, such as depression, schizophrenia or anxiety disorder</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('You have a specific learning difficulty such as dyslexia, dyspraxia or AD(H)D')">You have a specific learning difficulty such as dyslexia, dyspraxia or AD(H)D</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('You have physical impairment or mobility issues, such as difficulty using your arms or using a wheelchair or crutches')">You have physical impairment or mobility issues, such as difficulty using your arms or using a wheelchair or crutches</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('You have a disability, impairment or medical condition that is not listed above')">You have a disability, impairment or medical condition that is not listed above</a></td></tr>

            <tr><td><a href="#" onclick="passToParent('You have two or more impairments and/or disabling medical conditions')">You have two or more impairments and/or disabling medical conditions</a></td></tr>

            </tbody></table>


    </div>
</div>
</body>
</html>
