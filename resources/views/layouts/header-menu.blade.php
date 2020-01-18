<div class="main-header">
    <div class="logo">
        <img src="{{asset('assets/images/logo.png')}}" alt="">
    </div>

    <div class="menu-toggle">
                <div></div>
        <div></div>
        <div></div>
    </div>

    <div class="d-flex align-items-center">
        <div class="search-bar">
            <input type="text" placeholder="Search">
            <i class="search-icon text-muted i-Magnifi-Glass1"></i>
        </div>
    </div>

    <div style="margin: auto"></div>

    <div class="header-part-right center" style="margin-right: 10px;">
        <!-- XQR Value -->
       <?php

    $myData = file_get_contents("https://api.coingecko.com/api/v3/simple/price?ids=QREDIT&vs_currencies=USD");
    $myObject = json_decode($myData);
    $myObjectMap = $myObject;
    foreach($myObjectMap as $key => $item):
?>

         <p class="text-small text-muted left">1 XQR = $<?PHP echo $item->usd; ?> </p>


<?php endforeach; ?>
    </div>

</div>

<style>
.container {

    vertical-align: middle }
</style>
<!-- header top menu end -->
