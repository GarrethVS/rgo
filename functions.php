<?php

date_default_timezone_set('America/New_York');

function cleanUpLocation($location){
  $sanitizedLocation = preg_replace('/,/', '%2C', $location);
  $formatted_location = preg_replace('/\s/', '%20', $sanitizedLocation);
  return $formatted_location;
}


function generateTopSectionPreview($p){
  echo "<div class=\"row\">";
  
  //display coupon preview by type
  if ($p['bogo'] == "bogo"){
    echo displayBogoPreview($p);
  } else {
    displayCouponPreview($p);
  }
  
  echo "</div>";
}

function generateTopSectionCode($p){

  //display bogo block code if applicable
  if ($p['bogo'] == "bogo"){
    echo  displayBogoCode($p);
  } else {
    echo displayCouponCode($p); 
  }
}



function displayCouponPreview($p){ 
    //expiration date formatting
  $exp = $p['couponExpiration'];
  $formatted_exp = date('m/j/Y', strtotime($exp));
  
  //coupon code goes as is
  $code = $p['couponCode'];
  
  //sanitize location and URL endcode
  $formatted_location = cleanUpLocation($p['location']);

  
  $formatted_link = "https://responsys.hs.llnwd.net/i5/responsysimages/content/vitmnshp/RGO_LP_coupon2.html?expiration_date=$formatted_exp&amp;code=$code&amp;loc=$formatted_location";
?>
  
  <style>#grand-opening-coupon{background:#f04937;width:876px;height:250px;padding:40px 36px;margin:0 20px 17px 0;float:left}#grand-opening-coupon-inner{position:relative;border:2px solid #fff;height:245px}#grand-opening-coupon .coupon-title,#grand-opening-coupon .big20,#grand-opening-coupon .everything,#grand-opening-coupon .excludes,#grand-opening-coupon .coupon-link{position:absolute}#grand-opening-coupon .coupon-title{left:248px;top:-28px;color:#fff;font:54px corisandebold;background-color:#f04937;padding:0 10px}#grand-opening-coupon .big20{left:142px;top:7px;color:#fff;font:165px corisandebold;letter-spacing:-1px}#grand-opening-coupon .everything{left:157px;top:166px;color:#fff;font:31px corisandebold;letter-spacing:2px}#grand-opening-coupon .excludes{left:349px;top:210px;color:#fff;font:21px corisanderegular}#grand-opening-coupon .coupon-link{right:-2px;top:233px;font:18px corisandebold;color:#f04937}#grand-opening-coupon .coupon-link button{border:0;color:#f04937;background:url(http://www.vitaminshoppe.com/images/sprite-arrows.png) no-repeat scroll 120px -138px #fff;padding:0 35px 0 25px;line-height:36px}</style><div id="grand-opening-coupon"><div id="grand-opening-coupon-inner"><span class="coupon-title">grand opening</span> <span class="big20">20% off</span> <span class="everything">everything in the store with coupon</span> <span class="excludes">(excludes gift cards)</span> <a href="<?php echo $formatted_link; ?>" class="coupon-link"><button>print coupon</button></a></div></div>
  
<?php }

function displayCouponCode($p){ 
    //expiration date formatting
  $exp = $p['couponExpiration'];
  $formatted_exp = date('m/j/Y', strtotime($exp));
  
  //coupon code goes as is
  $code = $p['couponCode'];
  
  //sanitize location and URL endcode
  $formatted_location = cleanUpLocation($p['location']);
  
  $formatted_link = "https://responsys.hs.llnwd.net/i5/responsysimages/content/vitmnshp/RGO_LP_coupon2.html?expiration_date=$formatted_exp&amp;code=$code&amp;loc=$formatted_location";
?>
  
  <style>#grand-opening-coupon{background:#f04937;width:876px;height:250px;padding:40px 36px;margin:0 20px 17px 0;float:left}#grand-opening-coupon-inner{position:relative;border:2px solid #fff;height:245px}#grand-opening-coupon .coupon-title,#grand-opening-coupon .big20,#grand-opening-coupon .everything,#grand-opening-coupon .excludes,#grand-opening-coupon .coupon-link{position:absolute}#grand-opening-coupon .coupon-title{left:248px;top:-28px;color:#fff;font:54px corisandebold;background-color:#f04937;padding:0 10px}#grand-opening-coupon .big20{left:142px;top:7px;color:#fff;font:165px corisandebold;letter-spacing:-1px}#grand-opening-coupon .everything{left:157px;top:166px;color:#fff;font:31px corisandebold;letter-spacing:2px}#grand-opening-coupon .excludes{left:349px;top:210px;color:#fff;font:21px corisanderegular}#grand-opening-coupon .coupon-link{right:-2px;top:233px;font:18px corisandebold;color:#f04937}#grand-opening-coupon .coupon-link button{border:0;color:#f04937;background:url(/images/sprite-arrows.png) no-repeat scroll 120px -138px #fff;padding:0 35px 0 25px;line-height:36px}</style><div id="grand-opening-coupon"><div id="grand-opening-coupon-inner"><span class="coupon-title">grand opening</span> <span class="big20">20% off</span> <span class="everything">everything in the store with coupon</span> <span class="excludes">(excludes gift cards)</span> <a href="<?php echo $formatted_link; ?>" class="coupon-link"><button>print coupon</button></a></div></div>

<?php }

/****************************************************************************************************

BOGO VERSION CODE AND PREVIEW GENERATION

****************************************************************************************************/

function displayBogoPreview($p){
  //expiration date formatting
  $exp = $p['couponExpiration'];
  $formatted_exp = date('m/j/Y', strtotime($exp));
  
  //coupon code goes as is
  $code = $p['couponCode'];
  
  //sanitize location and URL endcode
  $formatted_location = cleanUpLocation($p['location']);
  
  $formatted_link = "https://responsys.hs.llnwd.net/i5/responsysimages/content/vitmnshp/RGO_LP_coupon2.html?expiration_date=$formatted_exp&amp;code=$code&amp;loc=$formatted_location";
  ?>
  <style>#grand-opening-coupon{background:#f04937;width:515px;height:250px;padding:40px 36px;margin:0 20px 17px 0;float: left;}#grand-opening-coupon-inner{position:relative;border:2px solid #fff;height:245px}#grand-opening-coupon .coupon-title,#grand-opening-coupon .big20,#grand-opening-coupon .percent,#grand-opening-coupon .off,#grand-opening-coupon .everything,#grand-opening-coupon .excludes,#grand-opening-coupon .coupon-link{position:absolute}#grand-opening-coupon .coupon-title{left:68px;top:-28px;color:#fff;font:54px corisandebold;background-color:#f04937;padding:0 10px}#grand-opening-coupon .big20{left:28px;top:29px;color:#fff;font:180px corisandebold}#grand-opening-coupon .percent{left:221px;top:50px;color:#fff;font:97px corisandebold}#grand-opening-coupon .off{left:231px;top:132px;color:#fff;font:63px corisandebold}#grand-opening-coupon .everything{left:325px;top:80px;color:#fff;font:27px corisandebold}#grand-opening-coupon .excludes{left:323px;top:172px;color:#fff;font:18px corisanderegular}#grand-opening-coupon .coupon-link{left:191px;top:233px;font:18px corisandebold;color:#f04937}#grand-opening-coupon .coupon-link button{border:0;color:#f04937;background:url(http://www.vitaminshoppe.com/images/sprite-arrows.png) no-repeat scroll 120px -136px #fff;padding:0 35px 0 25px;line-height:36px}</style><div id="grand-opening-coupon"><div id="grand-opening-coupon-inner"><span class="coupon-title">grand opening</span> <span class="big20">20</span> <span class="percent">%</span> <span class="off">off</span> <span class="everything">everything<br/>in the store<br/>with coupon</span> <span class="excludes">(excludes gift cards)</span> <a href="<?php echo $formatted_link; ?>" class="coupon-link"><button>print coupon</button></a></div></div> 
<?php
  $bogoEnd = $p['bogoEndDate'];
  $formatted_bogoEnd = date('m.j.y', strtotime($bogoEnd));
?>
<style>.rgo-bogo{height:330px;width:341px;background-color:#2f3f9c;float:left;position:relative}.rgo-bogo .plus{position:absolute;left:11px;top:106px;font:82px corisandebold;color:#fff}.rgo-bogo .rgo-bogo-image{position:absolute;left:67px;top:18px}.rgo-bogo .rgo-bogo-valid{color:#fff;font:18px corisandebold;position:absolute;left:87px;bottom:14px}</style><div class="rgo-bogo"><span class="plus">+</span> <img src="ca/siteimages/landingpages/rgo-bogo-lockup.png" class="rgo-bogo-image" alt="buy one, get one 50% off on all Vitamin Shoppe and BodyTech brand products. mix & match"/><span class="rgo-bogo-valid">valid through <?php echo $formatted_bogoEnd; ?></span></div>
<?php }



function displayBogoCode($p){
    //expiration date formatting
  $exp = $p['couponExpiration'];
  $formatted_exp = date('m/j/Y', strtotime($exp));
  
  //coupon code goes as is
  $code = $p['couponCode'];
  
  //sanitize location and URL endcode
  $formatted_location = cleanUpLocation($p['location']);
  $formatted_link = "https://responsys.hs.llnwd.net/i5/responsysimages/content/vitmnshp/RGO_LP_coupon2.html?expiration_date=$formatted_exp&amp;code=$code&amp;loc=$formatted_location";
  ?>
  <style>#grand-opening-coupon{background:#f04937;width:515px;height:250px;padding:40px 36px;margin:0 20px 17px 0;float: left;}#grand-opening-coupon-inner{position:relative;border:2px solid #fff;height:245px}#grand-opening-coupon .coupon-title,#grand-opening-coupon .big20,#grand-opening-coupon .percent,#grand-opening-coupon .off,#grand-opening-coupon .everything,#grand-opening-coupon .excludes,#grand-opening-coupon .coupon-link{position:absolute}#grand-opening-coupon .coupon-title{left:68px;top:-28px;color:#fff;font:54px corisandebold;background-color:#f04937;padding:0 10px}#grand-opening-coupon .big20{left:28px;top:29px;color:#fff;font:180px corisandebold}#grand-opening-coupon .percent{left:221px;top:50px;color:#fff;font:97px corisandebold}#grand-opening-coupon .off{left:231px;top:132px;color:#fff;font:63px corisandebold}#grand-opening-coupon .everything{left:325px;top:80px;color:#fff;font:27px corisandebold}#grand-opening-coupon .excludes{left:323px;top:172px;color:#fff;font:18px corisanderegular}#grand-opening-coupon .coupon-link{left:191px;top:233px;font:18px corisandebold;color:#f04937}#grand-opening-coupon .coupon-link button{border:0;color:#f04937;background:url(/images/sprite-arrows.png) no-repeat scroll 120px -136px #fff;padding:0 35px 0 25px;line-height:36px}</style><div id="grand-opening-coupon"><div id="grand-opening-coupon-inner"><span class="coupon-title">grand opening</span> <span class="big20">20</span> <span class="percent">%</span> <span class="off">off</span> <span class="everything">everything<br/>in the store<br/>with coupon</span> <span class="excludes">(excludes gift cards)</span> <a href="<?php echo $formatted_link; ?>" class="coupon-link"><button>print coupon</button></a></div></div> 
<?php
  $bogoEnd = $p['bogoEndDate'];
  $formatted_bogoEnd = date('m.j.y', strtotime($bogoEnd));
?>
<style>.rgo-bogo{height:330px;width:341px;background-color:#2f3f9c;float:left;position:relative}.rgo-bogo .plus{position:absolute;left:11px;top:106px;font:82px corisandebold;color:#fff}.rgo-bogo .rgo-bogo-image{position:absolute;left:67px;top:18px}.rgo-bogo .rgo-bogo-valid{color:#fff;font:18px corisandebold;position:absolute;left:87px;bottom:14px}</style><div class="rgo-bogo"><span class="plus">+</span> <img src="ca/siteimages/landingpages/rgo-bogo-lockup.png" class="rgo-bogo-image" alt="buy one, get one 50% off on all Vitamin Shoppe and BodyTech brand products. mix & match"/><span class="rgo-bogo-valid">valid through <?php echo $formatted_bogoEnd; ?></span></div>
<?php }


/****************************************************************************************************

SHARE THE HEALTH CODE AND PREVIEW GENERATION

****************************************************************************************************/

function generateShareTheHealthPreview($p){ 
    $sthDate  = strtolower(date('F j', strtotime($p['sthdate'])));
    $sthTime = strtolower($p['sthtime']);
?>
<div style="position: relative; top: 10px; left: 0px; width: 948px; height: 250px"><div style="float: right"><img src="ca/siteimages/hp/share_the_health_right.jpg" width="260" height="250" alt=""/></div><div style="width: 688px; background-color: #ffffff"><img src="ca/siteimages/hp/share_the_health_left.jpg" width="230" height="250" align="left" alt="Share the Health"/><div style="background-color:#FFFFFF; height:208px; padding-top:42px;top:865px;  width:458px; float: left"><span class="corisande-bold18" style="color:#595a5c; font-size:28px">join us as we celebrate your health</span><br/><span class="corisande-bold18" style="color:#e03c32; font-size:25px">save the date <?php echo $sthDate; ?>, <?php echo $sthTime; ?></span><br/><br/><span class="corisandeRegular" style="color:#595a6b; font-size:14px; font-weight: bold"><span class="corisande-bold18" style="color:#40c9f4; font-size: 24px">sample</span> free samples so you can explore new options</span><br/><span class="corisandeRegular" style="color:#595a6b; font-size:14px; font-weight: bold"><span class="corisande-bold18" style="color:#40c9f4; font-size: 24px">learn</span> health information &amp; consultations with health professionals</span><br/><span class="corisandeRegular" style="color:#595a6b; font-size:14px; font-weight: bold"><span class="corisande-bold18" style="color:#40c9f4; font-size: 24px">enjoy</span> share in a community of ideas and information</span></div></div>
<?php if ($p['bogo'] == "bogo"){
  $bogoEnd = $p['bogoEndDate'];
  $formatted_bogoEnd = date('m/j/y', strtotime($bogoEnd));
    ?>
    <div style="padding-top:10px; float:left">*Buy one, get one 50% off on all Vitamin Shoppe &amp; BodyTech brand products only. Offer valid through <?php echo $formatted_bogoEnd; ?> at 11:59PM. Mix and match. Discount taken on second item of equal or lesser value.</div>
<?php } ?>
</div>
<?php }

function generateShareTheHealthCode($p){ 
    $sthDate  = strtolower(date('F j', strtotime($p['sthdate'])));
    $sthTime = strtolower($p['sthtime']);
?>
<div style="position: relative; top: 10px; left: 0px; width: 948px; height: 250px"><div style="float: right"><img src="/ca/siteimages/hp/share_the_health_right.jpg" width="260" height="250" alt=""/></div><div style="width: 688px; background-color: #ffffff"><img src="/ca/siteimages/hp/share_the_health_left.jpg" width="230" height="250" align="left" alt=""/><div style="background-color:#FFFFFF; height:208px; padding-top:42px;top:865px;  width:458px; float: left"><span class="corisande-bold18" style="color:#595a5c; font-size:28px">join us as we celebrate your health</span><br/><span class="corisande-bold18" style="color:#e03c32; font-size:25px">save the date <?php echo $sthDate; ?>, <?php echo $sthTime; ?></span><br/><br/><span class="corisandeRegular" style="color:#595a6b; font-size:14px; font-weight: bold"><span class="corisande-bold18" style="color:#40c9f4; font-size: 24px">sample</span> free samples so you can explore new options</span><br/><span class="corisandeRegular" style="color:#595a6b; font-size:14px; font-weight: bold"><span class="corisande-bold18" style="color:#40c9f4; font-size: 24px">learn</span> health information &amp; consultations with health professionals</span><br/><span class="corisandeRegular" style="color:#595a6b; font-size:14px; font-weight: bold"><span class="corisande-bold18" style="color:#40c9f4; font-size: 24px">enjoy</span> share in a community of ideas and information</span></div></div>
<?php if ($p['bogo'] == "bogo"){
  $bogoEnd = $p['bogoEndDate'];
  $formatted_bogoEnd = date('m/j/y', strtotime($bogoEnd));
    ?>
    <div style="padding-top:10px; float:left">*Buy one, get one 50% off on all Vitamin Shoppe &amp; BodyTech brand products only. Offer valid through <?php echo $formatted_bogoEnd; ?> at 11:59PM. Mix and match. Discount taken on second item of equal or lesser value.</div>
<?php } ?>
</div>  
<?php }

/****************************************************************************************************

MOBILE CODE AND PREVIEW GENERATION

****************************************************************************************************/
function generateMobilePreview($p){ 
  //expiration date formatting
  $exp = $p['couponExpiration'];
  $formatted_exp = date('m/j/Y', strtotime($exp));
  
  //coupon code goes as is
  $code = $p['couponCode'];
//sanitize location and URL endcode
  $formatted_location = cleanUpLocation($p['location']);
  $formatted_link = "https://responsys.hs.llnwd.net/i5/responsysimages/content/vitmnshp/RGO_LP_coupon2.html?expiration_date=$formatted_exp&amp;code=$code&amp;loc=$formatted_location";
  $sthDate  = strtolower(date('F j', strtotime($p['sthdate'])));
  $sthTime = strtolower($p['sthtime']);
?>

  <div class="headbanner" style="margin-top: -50px;">
  <a href="<?php echo $formatted_link; ?>" target="new"><img alt="0" border="0" src="ca/siteimages/hp/grand_opening_mobile_banner.jpg" style="width: 100%;" />
  </a>
</div>
<span style="font-size: 36px; display: block;">.<br />.<br />.</span>
<div style="color:#AAAAAA; margin-top: -70px;"><img alt="" src="ca/siteimages/hp/m_RGOLP_04.jpg" style="padding-top:10px; width: 100%;" />
  <div style="padding: 0px 0px 0px 40px;">
    <p style="padding:10px; font-size:14;">come share the health and celebrate healthy living at our new Vitamin Shoppe store.
      <br />
      <span style="color:red; font-size:14px;"><?php echo $sthDate; ?>, <?php echo $sthTime; ?></span>
    </p>
    <span class="corisandeRegular" style="color:#595a6b; font-size:14px; font-weight: bold;"><span class="corisande-bold18" style="color:#40c9f4; font-size: 24px;">sample</span> free samples so you can explore new options</span>
    <br />
    <span class="corisandeRegular" style="color:#595a6b; font-size:14px; font-weight: bold;"><span class="corisande-bold18" data-node-index="$nid_10855888" style="color:#40c9f4; font-size: 24px;">learn</span> health information &amp; consultations with health professionals</span>
    <br />
    <span class="corisandeRegular" style="color:#595a6b; font-size:14px; font-weight: bold;"><span class="corisande-bold18" style="color:#40c9f4; font-size: 24px;">enjoy</span> share in a community of ideas and information</span>
  </div>
  <img alt="" src="ca/siteimages/hp/m_RGOLP_06.jpg" style="width: 100%;" />
</div>
<?php }

function generateMobileTop($p){ 
  //expiration date formatting
  $exp = $p['couponExpiration'];
  $formatted_exp = date('m/j/Y', strtotime($exp));
  
  //coupon code goes as is
  $code = $p['couponCode'];
//sanitize location and URL endcode
  $formatted_location = cleanUpLocation($p['location']);
  $formatted_link = "https://responsys.hs.llnwd.net/i5/responsysimages/content/vitmnshp/RGO_LP_coupon2.html?expiration_date=$formatted_exp&amp;code=$code&amp;loc=$formatted_location";
?>
  <div class="headbanner" style="margin-top: -50px;">
  <a href="https://responsys.hs.llnwd.net/i5/responsysimages/content/vitmnshp/RGO_LP_coupon2.html?expiration_date=4/26/15&amp;code=UGJ4XB77&amp;loc=Fuquay%20Varina%20NC" target="new"><img alt="0" border="0" src="/ca/siteimages/hp/grand_opening_mobile_banner.jpg" style="width: 100%;" />
  </a>
</div>
<?php }

function generateMobileBottom($p){ 
    $sthDate  = strtolower(date('F j', strtotime($p['sthdate'])));
    $sthTime = strtolower($p['sthtime']);
?>
  <div style="color:#AAAAAA; margin-top: -70px;"><img alt="" src="/ca/siteimages/hp/m_RGOLP_04.jpg" style="padding-top:10px; width: 100%;" />
  <div style="padding: 0px 0px 0px 40px;">
    <p style="padding:10px; font-size:14;">come share the health and celebrate healthy living at our new Vitamin Shoppe store.
      <br />
      <span style="color:red; font-size:14px;"><?php echo $sthDate; ?>, <?php echo $sthTime; ?></span>
    </p>
    <span class="corisandeRegular" style="color:#595a6b; font-size:14px; font-weight: bold;"><span class="corisande-bold18" style="color:#40c9f4; font-size: 24px;">sample</span> free samples so you can explore new options</span>
    <br />
    <span class="corisandeRegular" style="color:#595a6b; font-size:14px; font-weight: bold;"><span class="corisande-bold18" data-node-index="$nid_10855888" style="color:#40c9f4; font-size: 24px;">learn</span> health information &amp; consultations with health professionals</span>
    <br />
    <span class="corisandeRegular" style="color:#595a6b; font-size:14px; font-weight: bold;"><span class="corisande-bold18" style="color:#40c9f4; font-size: 24px;">enjoy</span> share in a community of ideas and information</span>
  </div>
  <img alt="" src="/ca/siteimages/hp/m_RGOLP_06.jpg" style="width: 100%;" />
</div>
<?php }
