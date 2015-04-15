<?php 
//if(empty($_POST)) die ( "You didn't actually submit the form"); 
$post=$_POST; 
require_once( './functions.php'); 
?>

<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="UTF-8">

  <meta name="format-detection" content="telephone=no">

  <link rel="shortcut icon" href="http://www.vitaminshoppe.com/images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="http://www.vitaminshoppe.com/css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="http://www.vitaminshoppe.com/css/jquery-ui.css" />
  <link rel="stylesheet" type="text/css" href="http://www.vitaminshoppe.com/css/jquery.bxslider.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />


  <script type="text/javascript" src="http://www.vitaminshoppe.com/js/jquery-1.10.2.min.js"></script>

  <script src="https://cdn.optimizely.com/js/2230543447.js"></script>


  <script type="text/javascript" src="http://www.vitaminshoppe.com/js/modernizr.js"></script>
  <script charset="utf-8" src="http://www.vitaminshoppe.com/js/jquery-ui.js" type="text/javascript"></script>
  <script type="text/javascript" src="http://www.vitaminshoppe.com/js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="http://www.vitaminshoppe.com/js/main.js"></script>
  <script type="text/javascript" src="http://www.vitaminshoppe.com/js/form-validation.js"></script>
  <script type="text/javascript" src="http://www.vitaminshoppe.com/js/commonJS.js"></script>


  <!--[if lt IE 9]>
        <link rel="stylesheet" type="text/css" href="/css/ie.css" />
        <![endif]-->
  <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="/css/ie9.css" />
        <![endif]-->

  <!---->


  <link rel="stylesheet" type="text/css" href="http://www.vitaminshoppe.com/css/store-locator.css" />
  <script type="text/javascript" src="http://www.vitaminshoppe.com/js/store-locator.js"></script>
  <script type="text/javascript" src="http://www.vitaminshoppe.com/js/jquery.scrollTo.min.js"></script>

  <script type="text/javascript" src="ZeroClipboard.min.js"></script>
  <script>
    jQuery(function($){
      var client = new ZeroClipboard($('.clipboard-button'));
      client.on('ready', function(event){
        client.on( "copy", function (event) {
          var clipBoard = event.clipboardData,
              myTarget = event.target,
              myTextBox = myTarget.getAttribute('data-clipboard-target');          
          clipBoard.setData("text/html", document.getElementById(myTextBox).innerHTML);
        });
        client.on('afterCopy', function(event){
          alert('Copied to Clipboard');
        });
        client.on('error', function(event){
          console.log( 'ZeroClipboard error of type "' + event.name + '": ' + event.message );
          ZeroClipboard.destroy();
        });
      });
    });
  </script>

  <title>Vitamin Shoppe Stores in </title>
</head>

<body>

  <noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-MGRZKM" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <script>
    (function (w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        '//www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j,
        f);
    })(window, document, 'script', 'dataLayer', 'GTM-MGRZKM');
  </script>

  <noscript>
    <div class="error-master">JavaScript must be enabled to use this site. Please enable JavaScript in your browser and refresh the page</div>
  </noscript>





  <header class="main-header expended">


    <div class="utility-top-expand"></div>

    <a href="javascript:" id="minMenu" class="header-show"></a>
    <section id="header-top">
      <section id="logo-section" itemscope itemtype="http://schema.org/Organization">
        <span id="logo" itemprop="logo">
				<a href="/" title="The Vitamin Shoppe">
					     The Vitamin Shoppe
	</a> </span>

        <div id="search">

          <form name="search" action="/cartridges/SearchBox/#">
            <div style="display:none">
              <input name="_dyncharset" value="UTF-8" type="hidden" /> </div>
            <div style="display:none">
              <input name="_dynSessConf" value="7114272725625683448" type="hidden" /> </div>
            <!--input id="global_search" name="search" value="Search" type="text" title="Search"/-->
            <input class="atg_store_searchInput" name="search" value="Search" type="text" autocomplete="off" id="atg_store_searchInput" title="Search" onblur="if(this.value == '') { this.value='Search'};" onfocus="if (this.value=='Search') this.value='';" />
            <!--input name="search" value="Search" type="text" autocomplete="off" 
            id="global_search" title="Search" onblur="if(this.value == '') { this.value='Search'};" onfocus="if (this.value=='Search') this.value='';"/-->

            <input id="typeSelectedVal" name="/atg/endeca/assembler/SearchFormHandler.typeAheadSelectedValue" value="" type="hidden" />
            <input name="_D:/atg/endeca/assembler/SearchFormHandler.typeAheadSelectedValue" value=" " type="hidden" />
            <input name="/atg/endeca/assembler/SearchFormHandler.search" value="Go" type="hidden" />
            <input name="_D:/atg/endeca/assembler/SearchFormHandler.search" value=" " type="hidden" />
            <input id="atg_store_searchSubmit" title="Go" name="/atg/endeca/assembler/SearchFormHandler.search" value="Go" type="submit" />
            <input name="_D:/atg/endeca/assembler/SearchFormHandler.search" value=" " type="hidden" />
            <div style="display:none">
              <input name="_DARGS" value="/cartridges/SearchBox/SearchBox.jsp" type="hidden" /> </div>
          </form>
        </div>

        <ul id="utility-nav">

          <li class="turnto_off links-block user-link-block ipad-touch">

            <a class="utility-links corisande-bold size12" href="/s/myAccount/myAccount.jsp">
              <span class="header-icons icon-login"></span>
              </br>
              <span class="user-name">
                      Hi RGO Folks
 </span> </a>

            <div class="utility-sub-menu help ipad-dropdown margin-top" style="display: none;">
              <span class="arrow-top"></span>
              <h4 class="corisande-bold">My Account</h4>
              <ul class="text-block corisande-regular">

                <li class="first-level">
                  <a class="help-links corisande-bold" href="/s/myAccount/login.jsp">My Account</a>
                </li>
                <li class="first-level">
                  <a class="help-links corisande-bold" href="/s/quickreorder/quickReorder.jsp">Quick Reorder</a>
                </li>
                <li class="first-level">
                  <a class="help-links corisande-bold" href="/s/orderhistory/orderHistory.jsp">Order History</a>
                </li>
                <li class="first-level">
                  <a class="help-links corisande-bold" href="/s/myAccount/myWishList.jsp">Wish List</a>
                </li>
                <li class="first-level">
                  <a title="signout" class="help-links corisande-bold" href="/?_DARGS=/s/navigation/gadgets/myAccountLinks.jsp_AF&_dynSessConf=7114272725625683448&/atg/userprofiling/ProfileFormHandler.logout=true&_D%3A/atg/userprofiling/ProfileFormHandler.logoutSuccessURL=+&_D%3A/atg/userprofiling/ProfileFormHandler.logout=+&/atg/userprofiling/ProfileFormHandler.logoutSuccessURL=/s/myAccount/login.jsp">Sign Out</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="turnto_on turnto_loggedin links-block user-link-block">

            <a class="utility-links corisande-bold size12" href="/s/myAccount/myAccount.jsp">
              <span class="header-icons icon-login"></span>
              <br/> Hi
              <span class="user-name"></span>
            </a>



            <div class="utility-sub-menu help ipad-dropdown margin-top" style="display: none;">
              <span class="arrow-top"></span>
              <h4 class="corisande-bold">My Account</h4>
              <ul class="text-block corisande-regular">
                <li class="first-level">
                  <a class="help-links corisande-bold" href="/s/myAccount/myAccount.jsp">My Account</a>
                </li>
                <li class="first-level">
                  <a class="help-links corisande-bold" href="/s/quickreorder/quickReorder.jsp">Quick Reorder</a>
                </li>
                <li class="first-level">
                  <a class="help-links corisande-bold" href="/s/orderhistory/orderHistory.jsp">Order History</a>
                </li>
                <li class="first-level">
                  <a class="help-links corisande-bold" href="/s/myAccount/myWishList.jsp">Wish List</a>
                </li>
                <li class="first-level">
                  <a title="signout" class="help-links corisande-bold" href="/?_DARGS=/s/navigation/gadgets/welcomeTurnto.jsp_AF&_dynSessConf=7114272725625683448&/atg/userprofiling/ProfileFormHandler.logout=true&_D%3A/atg/userprofiling/ProfileFormHandler.logoutSuccessURL=+&_D%3A/atg/userprofiling/ProfileFormHandler.logout=+&/atg/userprofiling/ProfileFormHandler.logoutSuccessURL=/s/myAccount/login.jsp">Sign Out</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="turnto_on turnto_loggedout links-block user-link-block">
            <div class="down-arrow"><span></span>
            </div>
            <a class="utility-links login-signup corisande-bold size12" href="/s/myAccount/login.jsp"><span class="header-icons icon-login"></span><br>
      Sign In</a>
          </li>


          <li class="links-block help ipad-touch">
            <a href="javascript:" class="utility-links corisande-bold size12"><span class="header-icons icon-help"></span><br>Help</a>
            <div class="utility-sub-menu help ipad-dropdown">
              <span class="arrow-top"></span>
              <h4 class="corisande-bold">Help Topics</h4>
              <ul class="text-block corisande-regular">
                <li class="first-level"><a href="/u/contact-us.jsp" class="help-links corisande-bold">Customer Support</a>
                </li>
                <li class="first-level"><a href="/s/myAccount/login.jsp?loginFromHeader=yes" class="help-links corisande-bold">My Account</a>
                </li>
                <li class="first-level"><a href="/u/faq.jsp" class="help-links corisande-bold">Ordering &amp; Billing</a>
                </li>
                <li class="first-level"><a href="/u/faq.jsp" class="help-links corisande-bold">New Customers</a>
                </li>
                <li class="first-level"><a href="/u/shipping-policy.jsp" class="help-links corisande-bold">Shipping</a>
                </li>
                <li class="first-level see-all"><a href="/u/help.jsp" class="size12">See All</a>
                </li>
              </ul>
            </div>
          </li>


          <li class="links-block call ipad-touch">
            <a href="javascript:" class="utility-links corisande-bold size12"><span class="header-icons icon-call"></span><br>
	          Call
          </a>
            <div class="utility-sub-menu call ipad-dropdown">
              <span class="arrow-top"></span>
              <h4 class="corisande-bold">Customer Service</h4>
              <ul class="text-block corisande-regular">
                <li>
                  Domestic:&nbsp;
                  <span class="corisande-bold">1 (866) 293-3367</span>
                  <br> International:&nbsp;
                  <span class="corisande-bold">+1 (201) 868-5959</span> </li>
                <li> Other ways to&nbsp;
                  <a href="/u/contact-us.jsp" class="red-link-small">
				    Contact Us
	</a> </li>
              </ul>
            </div>
          </li>
          <li class="links-block chat ipad-touch" id="lpChatHeader2"></li>



          <li class="links-block stores store-nearest ipad-touch">
            <a href="/sl/store-locator" class="utility-links corisande-bold size12"><span class="header-icons icon-store"></span><br>Stores</a>
            <div class="utility-sub-menu store-locator ipad-dropdown">
              <span class="arrow-top"></span>
              <h4 class="corisande-bold">Store Locator</h4>
              <ul class="text-block corisande-regular">

                <li class="get-directions"><a class="button-red corisande-bold18" href="/sl/store-locator">Find a Store</a>
                </li>
              </ul>
            </div>

            <div class="utility-sub-menu store-locator-enabled ipad-dropdown disabled">
              <span class="arrow-top"></span>
              <h4 class="corisande-bold">Store Locator</h4>
              <ul class="text-block">
                <li>To automatically
                  <br>see your nearest store, <a href="javascript:" class="red-link-small corisande-bold12">Enable Location<br>Based Services</a>
                </li>
                <li class="get-directions"><a href="/sl/store-locator" class="button-red corisande-bold18">Find a Store</a>
                </li>
              </ul>
            </div>
          </li>


          <li class="links-block cart ipad-touch">
            <a class="utility-links cart-full corisande-bold size12" href="/cart/shopping-cart">
              <span class="header-icons icon-cart"></span>
              <br>Cart
              <span class="count">0</span> </a>

            <div class="utility-sub-menu cart-block ipad-dropdown" style="display:none;">
              <span class="arrow-top"></span>
              <h4 class="corisande-bold"><span style="margin-right:2px;">0</span> Items in Your Cart</h4>
              <ul class="cart-rows">

                <li class="empty">There are no items in your cart.</li>
              </ul>

              <ul class="cart-rows bottom-block">
                <li class="final-row">
                  <span class="text float-left">Subtotal</span>
                  <span class="text float-right text-right">
	       $0.00
 </span>
                  <a class="button-orange corisande-regular18" href="/cart/shopping-cart">
                    <span class="icon"></span>View Cart &amp; Check Out</a>
                </li>
              </ul>
            </div>

          </li>
        </ul>

      </section>
    </section>



    <div class="nav-block-container">


      <!-- main nav begins -->
      <nav class="normalMode">
        <ul id="nav-inner">


          <li class="ipad-touch">


            <a href="/c/vitamins-supplements/N-87v" class="primary">

              <span>Vitamins &amp;<br> Supplements</span>
            </a>
            <div class="sub-menu ipad-dropdown">

              <ul>
                <li>
                  <a href="/c/vitamins/N-87w" class="heading">
							Vitamins
	</a>
                  <a href="/c/vitamin-a/N-87x">
	                    Vitamin A
 </a>
                  <a href="/c/vitamin-b/N-882">
	                    Vitamin B
 </a>
                  <a href="/c/vitamin-c/N-88i">
	                    Vitamin C
 </a>
                  <a href="/c/vitamin-d/N-88o">
	                    Vitamin D
 </a>
                  <a href="/c/vitamin-e/N-88r">
	                    Vitamin E
 </a>
                </li>
                <li>
                  <a href="/c/supplements/N-8ay" class="heading">
							Supplements
	</a>
                  <a href="/c/omega-fatty-acids/N-8az">
	                    Omega Fatty Acids
 </a>
                  <a href="/c/amino-acids/N-8cf">
	                    Amino Acids
 </a>
                  <a href="/c/antioxidants/N-8cn">
	                    Antioxidants
 </a>
                  <a href="/c/glucosamine-chondroitin-joint-formulas/N-8di">
	                    Glucosamine & Chondroitin/Joint Formulas
 </a>
                  <a href="/c/specialty-supplements/N-8dj">
	                    Specialty Supplements
 </a>
                </li>
                <li>
                  <a href="/c/multivitamins/N-892" class="heading">
							Multivitamins
	</a>
                  <a href="/c/men-s-multivitamins/N-893">
	                    Men's Multivitamins
 </a>
                  <a href="/c/women-s-multivitamins/N-89a">
	                    Women's Multivitamins 
 </a>
                  <a href="/c/general-adult-multivitamins/N-89y">
	                    General Adult Multivitamins
 </a>
                  <a href="/c/easy-to-swallow-multivitamins/N-8ad">
	                    Easy to Swallow Multivitamins
 </a>
                  <a href="/c/children-s-multivitamins/N-8al">
	                    Children's Multivitamins 
 </a>
                  <a href="/c/multivitamins/N-892" class="shop-all">
	                    See all&nbsp; 
 </a>
                </li>
                <li>
                  <a href="/c/minerals/N-8dk" class="heading">
							Minerals
	</a>
                  <a href="/c/calcium/N-8dl">
	                    Calcium
 </a>
                  <a href="/c/iron/N-8ds">
	                    Iron
 </a>
                  <a href="/c/magnesium/N-8dt">
	                    Magnesium
 </a>
                  <a href="/c/multiminerals/N-8du">
	                    Multiminerals
 </a>
                  <a href="/c/zinc/N-8dx">
	                    Zinc
 </a>
                  <a href="/c/minerals/N-8dk" class="shop-all">
	                    See all&nbsp; 
 </a>
                </li>
                <li class="non-sub">

                </li>
              </ul>
              <!-- Display Shop All link at the bottom -->
              <a href="/c/vitamins-supplements/N-87v" class="red-link-small corisande-bold12">
	                    Shop All&nbsp; Vitamins &amp;<br> Supplements
 </a>
            </div>
          </li>

          <li class="ipad-touch">


            <a href="/c/sports-fitness/N-8e9" class="primary">

              <span>Sports &amp;<br>Fitness</span>
            </a>
            <div class="sub-menu ipad-dropdown">

              <ul>
                <li>
                  <a href="/c/sports-protein/N-8ea" class="heading">
							Sports Protein
	</a>
                  <a href="/c/whey-protein-isolate/N-8eb">
	                    Whey Protein/Isolate
 </a>
                  <a href="/c/protein-blends/N-8ef">
	                    Protein Blends
 </a>
                  <a href="/c/plant-based-proteins/N-8el">
	                    Plant Based Proteins
 </a>
                  <a href="/c/protein-bars/N-8ey">
	                    Protein Bars
 </a>
                  <a href="/c/protein-drinks/N-8ez">
	                    Protein Drinks
 </a>
                </li>
                <li>
                  <a href="/c/muscle-builders/N-8fe" class="heading">
							Muscle Builders
	</a>
                  <a href="/c/bcaa-complex/N-8ff">
	                    BCAA Complex
 </a>
                  <a href="/c/test-boosters/N-8fi">
	                    Test Boosters
 </a>
                  <a href="/c/muscle-building-formulas/N-cp97hw">
	                    Muscle Building Formulas
 </a>
                </li>
                <li>
                  <a href="/c/performance-supplements/N-8f0" class="heading">
							Performance Supplements
	</a>
                  <a href="/c/creatine/N-8f1">
	                    Creatine
 </a>
                  <a href="/c/endurance-support/N-8f2">
	                    Endurance Support
 </a>
                  <a href="/c/intra-post-workout-recovery/N-8f9">
	                    Intra/Post Workout & Recovery
 </a>
                </li>
                <li>
                  <a href="/c/training-accessories/N-8g9" class="heading">
							Training Accessories
	</a>
                  <a href="/c/training-accessories-equipment/N-8ga">
	                    Training Accessories & Equipment
 </a>
                  <a href="/c/compression-apparel/N-8gd">
	                    Compression Apparel
 </a>
                  <a href="/c/fitness-electronics/N-cp97i7">
	                    Fitness Electronics
 </a>
                </li>
                <li>
                  <a href="/c/food-accessories/N-8fl" class="heading">
							Food & Accessories
	</a>
                  <a href="/c/bars/N-8fm">
	                    Bars
 </a>
                  <a href="/c/drinks/N-8ft">
	                    Drinks
 </a>
                  <a href="/c/snacks-pudding/N-cp97hx">
	                    Snacks & Pudding
 </a>
                </li>
                <li>
                  <a href="/c/weight-management/N-8g8" class="heading">
							Weight Management
	</a>
                  <a href="/c/stimulants/N-cp97hy">
	                    Stimulants
 </a>
                  <a href="/c/non-stimulants/N-cp97hz">
	                    Non-Stimulants
 </a>
                </li>
              </ul>
              <!-- Display Shop All link at the bottom -->
              <a href="/c/sports-fitness/N-8e9" class="red-link-small corisande-bold12">
	                    Shop All&nbsp; Sports &amp;<br>Fitness
 </a>
            </div>
          </li>

          <li class="ipad-touch">


            <a href="/c/protein/N-8gf" class="primary">

              <span>Protein</span>
            </a>
            <div class="sub-menu ipad-dropdown">

              <ul>
                <li>
                  <a href="/c/whey-protein-isolate/N-8gg" class="heading">
							Whey Protein/Isolate
	</a>
                  <a href="/c/whey-protein/N-8gh">
	                    Whey Protein
 </a>
                  <a href="/c/whey-protein-isolate/N-8gi">
	                    Whey Protein Isolate
 </a>
                  <a href="/c/natural-whey/N-8gj">
	                    Natural Whey
 </a>
                </li>
                <li>
                  <a href="/c/protein-blends/N-8gk" class="heading">
							Protein Blends
	</a>
                  <a href="/c/anabolic-protein-blends/N-8gl">
	                    Anabolic Protein Blends
 </a>
                  <a href="/c/meal-replacement-powders/N-8gm">
	                    Meal Replacement Powders
 </a>
                  <a href="/c/weight-gainers/N-cp97ib">
	                    Weight Gainers
 </a>
                </li>
                <li>
                  <a href="/c/plant-based-proteins/N-8gq" class="heading">
							Plant Based Proteins
	</a>
                  <a href="/c/soy-protein/N-8gs">
	                    Soy Protein
 </a>
                  <a href="/c/pea-proteins/N-8gu">
	                    Pea Proteins
 </a>
                  <a href="/c/plant-based-blends/N-8gv">
	                    Plant Based Blends
 </a>
                </li>
                <li class="non-sub">

                  <a href="/c/protein-bars/N-8h2">
	                    Protein Bars
 </a>
                  <a href="/c/protein-drinks/N-8h3">
	                    Protein Drinks
 </a>
                </li>
              </ul>
              <!-- Display Shop All link at the bottom -->
              <a href="/c/protein/N-8gf" class="red-link-small corisande-bold12">
	                    Shop All&nbsp; Protein
 </a>
            </div>
          </li>

          <li class="ipad-touch">


            <a href="/c/digestion-super-foods/N-8h6" class="primary">

              <span>Digestion &amp;<br>Super Foods</span>
            </a>
            <div class="sub-menu ipad-dropdown">

              <ul>
                <li>
                  <a href="/c/probiotics/N-8h7" class="heading">
							Probiotics
	</a>
                  <a href="/c/specialty-probiotics/N-8hc">
	                    Specialty Probiotics
 </a>
                </li>
                <li>
                  <a href="/c/fiber/N-8hl" class="heading">
							Fiber
	</a>
                  <a href="/c/other-fiber/N-8hs">
	                    Other Fiber
 </a>
                </li>
                <li>
                  <a href="/c/super-foods/N-8ht" class="heading">
							Super Foods
	</a>
                  <a href="/c/acai/N-8hw">
	                    Acai
 </a>
                  <a href="/c/super-foods-super-fruits/N-cp97ie">
	                    Super Foods & Super Fruits
 </a>
                  <a href="/c/cranberry/N-8hz">
	                    Cranberry
 </a>
                  <a href="/c/bee-products/N-8i1">
	                    Bee Products
 </a>
                </li>
                <li>
                  <a href="/c/enzymes/N-8hh" class="heading">
							Enzymes
	</a>
                  <a href="/c/digestive-enzymes/N-8hi">
	                    Digestive Enzymes
 </a>
                  <a href="/c/lactase-dairy/N-cp97id">
	                    Lactase & Dairy
 </a>
                  <a href="/c/other-digestive-aids/N-8hk">
	                    Other Digestive Aids
 </a>
                </li>
                <li>
                  <a href="/c/cleanse-detox/N-8i8" class="heading">
							Cleanse & Detox
	</a>
                  <a href="/c/other/N-cp97il">
	                    Other
 </a>
                </li>
                <li>
                  <a href="/c/green-foods/N-8i2" class="heading">
							Green Foods
	</a>
                  <a href="/c/green-food-blends/N-8i3">
	                    Green Food Blends
 </a>
                  <a href="/c/other-green-foods/N-8i7">
	                    Other Green Foods
 </a>
                </li>
              </ul>
              <!-- Display Shop All link at the bottom -->
              <a href="/c/digestion-super-foods/N-8h6" class="red-link-small corisande-bold12">
	                    Shop All&nbsp; Digestion &amp;<br>Super Foods
 </a>
            </div>
          </li>

          <li class="ipad-touch">


            <a href="/c/weight-management/N-8i9" class="primary">

              <span>Weight<br>Management</span>
            </a>
            <div class="sub-menu ipad-dropdown">

              <ul>
                <li>
                  <a href="/c/non-stimulants/N-8id" class="heading">
							Non-Stimulants
	</a>
                  <a href="/c/carb-fat-blockers/N-8ik">
	                    Carb & Fat Blockers
 </a>
                  <a href="/c/meal-replacement/N-8ip">
	                    Meal Replacement
 </a>
                  <a href="/c/other-non-stimulants/N-8iq">
	                    Other Non-Stimulants
 </a>
                </li>
                <li class="non-sub">

                  <a href="/c/stimulants/N-8ia">
	                    Stimulants
 </a>
                </li>
              </ul>
              <!-- Display Shop All link at the bottom -->
              <a href="/c/weight-management/N-8i9" class="red-link-small corisande-bold12">
	                    Shop All&nbsp; Weight<br>Management
 </a>
            </div>
          </li>

          <li class="ipad-touch">


            <a href="/c/foods-drinks/N-8ir" class="primary">

              <span>Food<br>&amp; Drink</span>
            </a>
            <div class="sub-menu right ipad-dropdown">

              <ul>
                <li>
                  <a href="/c/foods/N-8is" class="heading">
							Foods
	</a>
                  <a href="/c/bars/N-8it">
	                    Bars
 </a>
                  <a href="/c/snacks/N-8j1">
	                    Snacks 
 </a>
                </li>
                <li>
                  <a href="/c/drinks/N-8jb" class="heading">
							Drinks
	</a>
                  <a href="/c/protein-drinks/N-8jd">
	                    Protein Drinks
 </a>
                  <a href="/c/natural-protein-drinks/N-8je">
	                    Natural Protein Drinks
 </a>
                  <a href="/c/low-carb-drinks/N-8jg">
	                    Low Carb Drinks
 </a>
                  <a href="/c/weight-loss-drinks/N-8jh">
	                    Weight Loss Drinks
 </a>
                  <a href="/c/quercetin-drinks/N-8jl">
	                    Quercetin Drinks
 </a>
                  <a href="/c/drinks/N-8jb" class="shop-all">
	                    See all&nbsp; 
 </a>
                </li>
                <li>
                  <a href="/c/healthy-oils-seeds/N-cp97iq" class="heading">
							Healthy Oils & Seeds
	</a>
                  <a href="/c/coconut-oil/N-cp97is">
	                    Coconut Oil
 </a>
                  <a href="/c/hemp-oil/N-cp97it">
	                    Hemp Oil
 </a>
                </li>
              </ul>
              <!-- Display Shop All link at the bottom -->
              <a href="/c/foods-drinks/N-8ir" class="red-link-small corisande-bold12">
	                    Shop All&nbsp; Food<br>&amp; Drink
 </a>
            </div>
          </li>

          <li class="ipad-touch">


            <a href="/c/herbs/N-8jz" class="primary">

              <span>Herbs</span>
            </a>
            <div class="sub-menu right ipad-dropdown">

              <ul>
                <li>
                  <a href="/c/herbal-remedies-by-health-concern/N-8k0" class="heading">
							Herbal Remedies By Health Concern
	</a>
                  <a href="/c/immune-support-herbs/N-8k1">
	                    Immune Support Herbs
 </a>
                  <a href="/c/cardiovascular-support-herbs/N-8k4">
	                    Cardiovascular Support Herbs
 </a>
                  <a href="/c/mood-support-herbs/N-8k7">
	                    Mood Support Herbs
 </a>
                  <a href="/c/women-s-health-issues/N-8kc">
	                    Women's Health Issues
 </a>
                  <a href="/c/men-s-health-issues/N-8kh">
	                    Men's Health Issues
 </a>
                  <a href="/c/herbal-remedies-by-health-concern/N-8k0" class="shop-all">
	                    See all&nbsp; 
 </a>
                </li>
                <li>
                  <a href="/c/teas/N-8kz" class="heading">
							Teas
	</a>
                  <a href="/c/herbal-teas/N-8l0">
	                    Herbal Teas
 </a>
                  <a href="/c/green-tea/N-8l1">
	                    Green Tea
 </a>
                  <a href="/c/white-black-teas/N-8l2">
	                    White/Black Teas
 </a>
                  <a href="/c/bagged-tea/N-8l4">
	                    Bagged Tea
 </a>
                  <a href="/c/detox-teas/N-8l5">
	                    Detox Teas
 </a>
                  <a href="/c/teas/N-8kz" class="shop-all">
	                    See all&nbsp; 
 </a>
                </li>
                <li>
                  <a href="/c/intimacy-herbs/N-8kv" class="heading">
							Intimacy Herbs
	</a>
                  <a href="/c/female-intimacy-herbs/N-8kw">
	                    Female Intimacy Herbs
 </a>
                  <a href="/c/male-intimacy-herbs/N-8kx">
	                    Male Intimacy Herbs
 </a>
                </li>
                <li class="non-sub">

                  <a href="/c/ginkgo/N-8km">
	                    Ginkgo
 </a>
                  <a href="/c/mushrooms/N-8ko">
	                    Mushrooms
 </a>
                  <a href="/c/other-herbs/N-8ky">
	                    Other Herbs
 </a>
                </li>
              </ul>
              <!-- Display Shop All link at the bottom -->
              <a href="/c/herbs/N-8jz" class="red-link-small corisande-bold12">
	                    Shop All&nbsp; Herbs
 </a>
            </div>
          </li>

          <li class="ipad-touch">


            <a href="/c/homeopathy/N-8la" class="primary">

              <span>Homeopathy</span>
            </a>
            <div class="sub-menu right ipad-dropdown">

              <ul>
                <li>
                  <a href="/c/homeopathy-by-health-concern/N-8lb" class="heading">
							Homeopathy by Health Concern
	</a>
                  <a href="/c/allergy-care-sinus-hay-fever/N-8lc">
	                    Allergy Care, Sinus & Hay Fever
 </a>
                  <a href="/c/cold-flu-care/N-8lf">
	                    Cold & Flu Care
 </a>
                  <a href="/c/colon-care/N-8lg">
	                    Colon Care
 </a>
                  <a href="/c/detox/N-8lh">
	                    Detox
 </a>
                  <a href="/c/hemorrhoids/N-8ll">
	                    Hemorrhoids
 </a>
                  <a href="/c/homeopathy-by-health-concern/N-8lb" class="shop-all">
	                    See all&nbsp; 
 </a>
                </li>
                <li>
                  <a href="/c/single-medicines/N-8m3" class="heading">
							Single Medicines
	</a>
                  <a href="/c/calendula/N-8m6">
	                    Calendula
 </a>
                  <a href="/c/miscellaneous-single-medicines/N-8m8">
	                    Miscellaneous Single Medicines
 </a>
                </li>
                <li class="non-sub">

                  <a href="/c/cold-flu-care/N-8m1">
	                    Cold & Flu Care
 </a>
                  <a href="/c/first-aid/N-8m9">
	                    First Aid
 </a>
                  <a href="/c/allergy-care/N-8mh">
	                    Allergy Care
 </a>
                  <a href="/c/children-s/N-8mc">
	                    Children's
 </a>
                  <a href="/c/immune-support/N-8mi">
	                    Immune Support
 </a>
                  <a href="/c/stress-anxiety-support/N-8mj">
	                    Stress & Anxiety Support
 </a>
                </li>
                <li class="non-sub">

                  <a href="/c/other-homeopathics/N-8mg">
	                    Other Homeopathics
 </a>
                </li>
              </ul>
              <!-- Display Shop All link at the bottom -->
              <a href="/c/homeopathy/N-8la" class="red-link-small corisande-bold12">
	                    Shop All&nbsp; Homeopathy
 </a>
            </div>
          </li>

          <li class="ipad-touch">


            <a href="/c/healthy-home/N-8ml" class="primary">

              <span>Healthy<br>Home</span>
            </a>
            <div class="sub-menu right ipad-dropdown">

              <ul>
                <li>
                  <a href="/c/blending-diffusing-decanting-accessories/N-8mp" class="heading">
							Blending, Diffusing & Decanting Accessories
	</a>
                  <a href="/c/candles/N-8mr">
	                    Candles
 </a>
                  <a href="/c/mixing-bottles-containers/N-8mt">
	                    Mixing Bottles & Containers
 </a>
                  <a href="/c/hydrosols-mists/N-8mw">
	                    Hydrosols & Mists
 </a>
                </li>
                <li class="non-sub">

                  <a href="/c/ecoshoppe-kitchen/N-8mx">
	                    ecoShoppe Kitchen
 </a>
                  <a href="/c/ecoshoppe-conservation/N-8my">
	                    ecoShoppe Conservation
 </a>
                  <a href="/c/ecoshoppe-cleaning/N-8mz">
	                    ecoShoppe Cleaning
 </a>
                  <a href="/c/ecoshoppe-home/N-8n0">
	                    ecoShoppe Home
 </a>
                </li>
              </ul>
              <!-- Display Shop All link at the bottom -->
              <a href="/c/healthy-home/N-8ml" class="red-link-small corisande-bold12">
	                    Shop All&nbsp; Healthy<br>Home
 </a>
            </div>
          </li>

          <li class="ipad-touch">


            <a href="/c/sexual-well-being/N-8n7" class="primary">

              <span>Sexual<br>Well-Being</span>
            </a>
            <div class="sub-menu right ipad-dropdown">

              <ul>
                <li>
                  <a href="/c/intimate-toys-accessories/N-8nf" class="heading">
							Intimate Toys and Accessories
	</a>
                  <a href="/c/condoms/N-cp97iy">
	                    Condoms
 </a>
                </li>
                <li class="non-sub">

                  <a href="/c/supplements-for-him/N-8n8">
	                    Supplements For Him
 </a>
                  <a href="/c/supplements-for-her/N-8n9">
	                    Supplements For Her
 </a>
                </li>
              </ul>
              <!-- Display Shop All link at the bottom -->
              <a href="/c/sexual-well-being/N-8n7" class="red-link-small corisande-bold12">
	                    Shop All&nbsp; Sexual<br>Well-Being
 </a>
            </div>
          </li>

          <li class="ipad-touch">


            <a href="/c/bath-beauty/N-8no" class="primary">

              <span>Bath &amp;<br>Beauty</span>
            </a>
            <div class="sub-menu right ipad-dropdown">

              <ul>
                <li>
                  <a href="/c/hand-body-care/N-8np" class="heading">
							Hand & Body Care
	</a>
                  <a href="/c/body-bath-accessories/N-8nq">
	                    Body & Bath Accessories
 </a>
                  <a href="/c/foot-care/N-8ns">
	                    Foot Care
 </a>
                  <a href="/c/hand-wash/N-8nt">
	                    Hand Wash
 </a>
                  <a href="/c/body-wash/N-8nu">
	                    Body Wash
 </a>
                  <a href="/c/lotions-creams/N-8nv">
	                    Lotions & Creams
 </a>
                  <a href="/c/hand-body-care/N-8np" class="shop-all">
	                    See all&nbsp; 
 </a>
                </li>
                <li>
                  <a href="/c/aromatherapy/N-8qk" class="heading">
							Aromatherapy
	</a>
                  <a href="/c/single-note-essential-oils/N-8ql">
	                    Single Note Essential Oils
 </a>
                  <a href="/c/synergistic-essential-oil-blends/N-8t8">
	                    Synergistic Essential Oil Blends
 </a>
                  <a href="/c/carrier-oils/N-8u7">
	                    Carrier Oils
 </a>
                  <a href="/c/flower-waters-hydrosols-mists/N-8v1">
	                    Flower Waters, Hydrosols & Mists
 </a>
                  <a href="/c/blending-diffusing-decanting-accessories/N-8vp">
	                    Blending, Diffusing & Decanting Accessories
 </a>
                  <a href="/c/aromatherapy/N-8qk" class="shop-all">
	                    See all&nbsp; 
 </a>
                </li>
                <li>
                  <a href="/c/facial-care/N-8o9" class="heading">
							Facial Care
	</a>
                  <a href="/c/cleanse-wash/N-8oa">
	                    Cleanse & Wash
 </a>
                  <a href="/c/serum-fluid-oil/N-8ok">
	                    Serum, Fluid & Oil
 </a>
                  <a href="/c/moisturizer-cream-lotion/N-8op">
	                    Moisturizer, Cream & Lotion
 </a>
                  <a href="/c/eye-lip/N-8p5">
	                    Eye & Lip
 </a>
                </li>
                <li>
                  <a href="/c/men-s-personal-care/N-8wt" class="heading">
							Men's Personal Care
	</a>
                  <a href="/c/shaving-creams-gels/N-8x0">
	                    Shaving Creams & Gels
 </a>
                  <a href="/c/travel-kits/N-8x5">
	                    Travel & Kits
 </a>
                </li>
                <li>
                  <a href="/c/oral-care/N-8ph" class="heading">
							Oral Care
	</a>
                  <a href="/c/toothpaste-gel/N-8pi">
	                    Toothpaste & Gel
 </a>
                  <a href="/c/gums-mints/N-8pl">
	                    Gums & Mints
 </a>
                </li>
                <li>
                  <a href="/c/hair-care/N-8po" class="heading">
							Hair Care
	</a>
                  <a href="/c/shampoo/N-8pp">
	                    Shampoo
 </a>
                  <a href="/c/conditioner/N-8pw">
	                    Conditioner
 </a>
                  <a href="/c/hair-coloration/N-8q3">
	                    Hair Coloration
 </a>
                  <a href="/c/hair-styling/N-8q9">
	                    Hair Styling
 </a>
                  <a href="/c/hair-scalp-treatments/N-8qf">
	                    Hair & Scalp Treatments
 </a>
                </li>
                <li>
                  <a href="/c/mom-kids-baby-personal-care/N-8wk" class="heading">
							Mom, Kids & Baby Personal Care
	</a>
                  <a href="/c/bath-body/N-8wl">
	                    Bath & Body
 </a>
                  <a href="/c/shampoo-conditioner/N-8wm">
	                    Shampoo & Conditioner
 </a>
                  <a href="/c/oral-care/N-8wn">
	                    Oral Care
 </a>
                  <a href="/c/outdoor-bug/N-8wo">
	                    Outdoor & Bug
 </a>
                </li>
                <li class="non-sub">

                  <a href="/c/sun-care/N-8x8">
	                    Sun Care
 </a>
                  <a href="/c/outdoor-bug/N-8x9">
	                    Outdoor & Bug
 </a>
                </li>
              </ul>
              <!-- Display Shop All link at the bottom -->
              <a href="/c/bath-beauty/N-8no" class="red-link-small corisande-bold12">
	                    Shop All&nbsp; Bath &amp;<br>Beauty
 </a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- main nav end -->
      <section id="secondary-nav">
        <div class="wrapper">


          <ul class="shop-by-filter">
            <li class="category-filter ipad-touch delay-menu">
              <a href="javascript:" class="shop-by corisande-regular size18">Shop By <span class="icon-arrow-blue"></span></a>
              <div class="first-level ipad-dropdown delay-submenu">
                <ul class="links-block">


                  <li class="first-level-row">

                    <a href="/c/shop-by-health-concern/N-7t1" class="filter-links corisande-bold">
	                    Concern Or Goal
 </a>
                  </li>
                  <li class="first-level-row"><a href="/browse-brands" class="filter-links corisande-bold">Brand</a>
                  </li>


                  <li class="first-level-row">

                    <a href="/c/kids/N-8xa" class="filter-links corisande-bold">
	                    Kids
 </a>
                  </li>
                  <li class="first-level-row">

                    <a href="/c/pets/N-8y3" class="filter-links corisande-bold">
	                    Pets
 </a>
                  </li>
                  <li class="first-level-row"><a href="javascript:" class="filter-links corisande-bold">Outlet</a>
                  </li>
                  <li class="first-level-row"><a href="/u/coupons" class="filter-links corisande-bold">Values &amp; Offers</a>
                  </li>


                  <li class="first-level-row">
                    <a href="http://video.vitaminshoppe.com/" target="_blank" class="filter-links corisande-bold">
                        Video
 </a> </li>
                  <li class="first-level-row">
                    <a href="/u/healthguide/hncontent.jsp" class="filter-links corisande-bold">
	                    Healthy Info & More
 </a> </li>
                </ul>
              </div>
            </li>
          </ul>

          <div class="vertical-banners">
            <ul class="text-banners bxslider-vertical size18">
              <li class="orange"><span class="icon-notification">!</span> <a href="javascript:" id="free-shipping-link" class="overlay-popup banner-link size18" data-rel="popup-free-shipping"><span class="corisande-bold">Learn about free shipping</span> on orders over $25.</a>
              </li>
              <li class="red"><span class="icon-notification">$</span> <a href="/c/vitamin-shoppe-bodytech/N-cp97rx" class="banner-link size18"><span class="corisande-bold">Buy one, get one 50% off</span> on all Vitamin Shoppe and BodyTech brand.</a>
              </li>
            </ul>
          </div>
          <div class="filters">
            <ul>
              <li class="category-reorder ipad-touch delay-menu">
                <a href="/s/quickreorder/quickReorder.jsp" class="reorder corisande-regular size18"><span class="icon-rotation"></span> Reorder Products</a>
                <div style="width: 1px; height: 1px; overflow: hidden;"><img src="/images/reorder-button-hover.png" alt="" />
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section>

    </div>
  </header>


  <section id="main-body-container" class="affiliate-program">
    <div id="breadcrumbs" itemprop="breadcrumb" class="corisande-regular"><a href="http://www.vitaminshoppe.com">Home</a> <span>|</span> <span class="text">Generated Code</span>
    </div>
    <section id="main-body-holder">
      <section class="page-container mtop15 utility-page">
        <h1 class="static-heading">Generated Code</h1>

        <!-- top section -->
        <div class="row">
          <h2>Top Section</h2>
          <h3>The preview:</h3>
          <?php generateTopSectionPreview($post); ?>
        </div>
        <div class="row">
          <h3>The Code</h3>
          <textarea id="topCode" style="width: 100%; height: 150px;">
            <?php generateTopSectionCode($post); ?>
          </textarea>
          <button id="topCopy" class="size18 clipboard-button" data-clipboard-target="topCode">Copy Code to Clipboard</button>
        </div>

        <!-- share the health section -->
        <div class="row">
          <h2>Share the Health Code</h2>
          <h3>The preview:</h3>
          <?php generateShareTheHealthPreview($post); ?>
        </div>
        <div class="row">
          <h3>The Code</h3>
          <textarea id="sthCode" style="width: 100%; height: 150px;">
            <?php generateShareTheHealthCode($post); ?>
          </textarea>
          <button id="sthCopy" class="size18 clipboard-button" data-clipboard-target="sthCode">Copy Code to Clipboard</button>
        </div>
        

        <!-- Mobile Preview -->
        <div class="row">
          <h2>MOBILE</h2>
          <h3>The preview:</h3>
          <div style="float: left; width: 100%; background-color: #000; height: 675px; text-align: center;">
            <div style="margin: 0 auto; text-align: center; width: 360px; background-color: #fff; height: 675px;">
              <img src="images/mobile-header.png" style="margin-bottom: 60px;" />
              <div style=" margin: 0 7px;">
                <?php echo generateMobilePreview($post); ?>
              </div>
            </div>
          </div>        
        </div>
        
        <!-- Mobile Section Top -->
        <div class="row">
          <h3>The Code</h3>
          <textarea id="mobileTopCode" style="width: 100%; height: 150px;">
            <?php generateMobileTop($post); ?>
          </textarea>
          <button id="sthCopy" class="size18 clipboard-button" data-clipboard-target="mobileTopCode">Copy Code to Clipboard</button>
        </div>
        <!-- Mobile Section BOTTOM -->
        <div class="row">
          <h3>The Code</h3>
          <textarea id="mobileBottomCode" style="width: 100%; height: 150px;">
            <?php generateMobileBottom($post); ?>
          </textarea>
          <button id="sthCopy" class="size18 clipboard-button" data-clipboard-target="mobileBottomCode">Copy Code to Clipboard</button>
        </div>
      </section>
    </section>
  </section>


  <footer>


    <section id="top-block">

      <script language="javascript" type="text/javascript">
        var fsr_cmmmc = " ";
      </script>

      <script language="javascript" type="text/javascript" src="/js/foresee/foresee-trigger.js"></script>

      <!-- Changes for RT-256 forsee ends here-->
      <div class="wrapper-footer">

        <div id="lpChatFooter3"></div>

        <ul class="site-links">

          <li>
            <h4 class="corisande-bold18">Help & My Account</h4>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="https://www.vitaminshoppe.com/s/myAccount/myAccount.jsp" title="My Account">
				My Account
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="http://www.vitaminshoppe.com/u/help.jsp" title="Click for Help">
				Help
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="https://www.vitaminshoppe.com/s/myHealthyAwards/index.jsp" title="My Healthy Awards">
				My Healthy Awards
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="https://www.vitaminshoppe.com/s/orderhistory/orderHistory.jsp" title="Order Tracking & History">
				Order Tracking & History
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="https://www.vitaminshoppe.com/s/quickreorder/quickReorder.jsp" title="Quick Reorder">
				Quick Reorder
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="http://www.vitaminshoppe.com/u/order-by-item-number.jsp" title="Order By Item Number">
				Order By Item Number
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="http://www.vitaminshoppe.com/u/faq.jsp" title="FAQs">
				FAQs
	</a>
          </li>
          <li>
            <h4 class="corisande-bold18">Value & Savings</h4>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="http://www.vitaminshoppe.com/b/vitamin-shoppe/N-9c1" title="Vitamin Shoppe Brand">
				Vitamin Shoppe Brand
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="http://www.vitaminshoppe.com/u/shipping-policy.jsp" title="Free Shipping Information">
				Free Shipping Information
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="http://www.vitaminshoppe.com/u/signup/email-sign-up-save" title="Sign Up & Save">
				Sign Up & Save
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="http://www.vitaminshoppe.com/sv/sale/N-1z12pxm" title="Sale Products">
				Sale Products
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="http://www.vitaminshoppe.com/u/global/gadgets/healthyAwardsClub.jsp" title="Healthy Awards">
				Healthy Awards
	</a>
          </li>
          <li>
            <h4 class="corisande-bold18">Policies & Services</h4>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="http://www.vitaminshoppe.com/u/privacy.jsp " title="Privacy Policy">
				Privacy Policy
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="http://www.vitaminshoppe.com/u/shipping-policy.jsp" title="Shipping Rates & Policies">
				Shipping Rates & Policies
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="http://www.vitaminshoppe.com/u/return.jsp " title="Returns Policy">
				Returns Policy
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="http://www.vitaminshoppe.com/u/terms.jsp" title="Terms of Use">
				Terms of Use
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_blank" href="http://www.vitaminshoppe.com/lp/affiliate" title="Affiliate Program">
				Affiliate Program
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="http://www.vitaminshoppe.com/u/gift-card-info.jsp" title="Gift Cards">
				Gift Cards
	</a>
          </li>
          <li>
            <h4 class="corisande-bold18">Corporate Information</h4>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="http://www.vitaminshoppe.com/u/about-vshoppe.jsp " title="About the Vitamin Shoppe">
				About the Vitamin Shoppe
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="http://www.vitaminshoppe.com/u/contact-us.jsp" title="Contact Us">
				Contact Us
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_self" href="http://www.vitaminshoppe.com/sl/store-locator" title="Store Locator">
				Store Locator
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_blank" href="http://vitaminshoppe.investorroom.com/" title="Investor Relations">
				Investor Relations
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_blank" href="http://www.vitaminshoppe.com/u/careers.jsp" title="Careers">
				Careers
	</a>
            <!-- Updating dsp:a tag to html a tag so that jsessionid does not get appended in the url -->
            <a target="_blank" href="http://www.vitaminshoppe.com/u/site-map.jsp" title="Site Map">
				Site Map
	</a>
          </li>
        </ul>

        <div class="awards-subscription-block">

          <div class="subscription-block">
            <h4 class="corisande-bold18">Sign Up &amp; Save</h4>
            <p class="text">Get exclusive coupon offers, advance info on sales and the latest news on how to stay healthy. Just fill in your email address!</p>
            <div class="subscription-form">
              <form name="email-subscription" action="/u/global/footer/?_DARGS=/u/global/footer/emailSignup.jsp.signupFooter#" method="post">
                <div style="display:none">
                  <input name="_dyncharset" value="UTF-8" type="hidden" /> </div>
                <div style="display:none">
                  <input name="_dynSessConf" value="7114272725625683448" type="hidden" /> </div>
                <label class="hidden" for="subscription-email">Enter Your Email Address</label>
                <input id="subscription-email" data-qtip-position="below" maxlength="128" placeholder="Enter Your Email Address" name="/vitaminshoppe/email/responsys/VSEmailCampaignFormHandler.email" value="" type="text" data-label="Email Address" />
                <input name="_D:/vitaminshoppe/email/responsys/VSEmailCampaignFormHandler.email" value=" " type="hidden" />
                <input id="esus-submit" name="/vitaminshoppe/email/responsys/VSEmailCampaignFormHandler.emailCampaign" value="Sign Up Now" class="button-red corisande-bold18" type="submit" />
                <input name="_D:/vitaminshoppe/email/responsys/VSEmailCampaignFormHandler.emailCampaign" value=" " type="hidden" />
                <input name="successURL" value="/u/signup/email-sign-up-thank-you" type="hidden" />
                <input name="_D:successURL" value=" " type="hidden" />
                <input name="errorURL" value="/sl/browseByCity.jsp" type="hidden" />
                <input name="_D:errorURL" value=" " type="hidden" />
                <div style="display:none">
                  <input name="_DARGS" value="/u/global/footer/emailSignup.jsp.signupFooter" type="hidden" /> </div>
              </form>
            </div>
          </div>

          <div class="awards-box">
            <h4 class="corisande-bold18">Awards</h4>
            <div class="images">
              <a data-action="outbound link" data-state="consumer labs" data-widget="awards" data-event="click" class="award-links" target="_blank" href="/lp/quality"><img alt="Consumer Labs Rated 2014 Top rated Vitamin Store Brand" src="/images/award-img2.gif" /> </a>
              <a data-action="outbound link" data-state="bbb" data-widget="awards" data-event="click" class="award-links" target="_blank" href="http://www.bbb.org/new-jersey/business-reviews/vitamins-and-food-supplements/the-vitamin-shoppe-in-secaucus-nj-16004762/"> <img alt="BBB Accredited Business" src="/images/award-img3.gif" /> </a>
              <a data-action="outbound link" data-state="bizrate" data-widget="awards" data-event="click" class="award-links" target="_blank" href="http://www.bizrate.com/ratings_guide/cust_reviews__mid--19205.html"> <img alt="Circle of Bizrate Excellence 2014" src="/ca/images/biz2015.gif" /> </a>
            </div>
          </div>

        </div>
      </div>
    </section>
    <section id="disclaimer-block">
      <div class="wrapper-footer">

        <div class="text-left">
          <span class="hint">**</span> The products and the claims made about specific products on or through this site have not been evaluated by the United States Food and Drug Administration and are not intended to diagnose, treat, cure or prevent disease. The information provided on this site is for informational purposes only and is not intended as a substitute for advice from your physician or other health care professional or any information contained on or in any product label or packaging. You should not use the information on this site for diagnosis or treatment of any health problem or for prescription of any medication or other treatment. You should consult with a healthcare professional before starting any diet, exercise or supplementation program, before taking any medication, or if you have or suspect you might have a health problem. Please view our full Terms Of Use Agreement for more information and the terms and conditions governing your use of this site. WEIGHT MANAGEMENT: Supports a weight management program that includes exercise and a calorie, carbohydrate, or fat restricted diet.
        </div>
        <div class="text-right">
          <a href="http://www.vitapath.ca" target="_blank">Live in Canada? Visit our new Vitapath website.</a>
          <br />
          <br /> All online offers and prices are valid for online purchases only, and may be different from those in the catalog and in our retail stores. We are not responsible for pricing or typographical errors.
          <br /> Sale Prices are valid through April 5th, 2015 11:59PM ET only.
          <br />
          <br /> © 2015 The Vitamin Shoppe. All Rights Reserved.
        </div>

      </div>
    </section>
  </footer>
  <!-- siteSection is passed from HeaderBreadcrumbs.jsp -->
  <!-- siteSection is passed from HeaderBreadcrumbs.jsp -->
  <script type="text/javascript">
    dataLayer = dataLayer || [];
    dataLayer.push({
      "siteVersion": "desktop",
      "currencyCode": "USD",
      "pageLevel": "Stores",
      "loggedIn": "false",
      "customer": "return",
      "country": "US",
      "pageType": "Stores",
      "siteSection": "Stores",
      "category": "General",
      "crmClientId": "WC714001891",
      "email": "emailtest2@vitaminshoppe.com",
      "event": "dataLayer-loaded",
      "mwCustomerNumber": "980146464"
    });
  </script>
  <div style="display: none;" id="popup-container">
    <div class="overlay"></div>
    <!-- Data content required to how on click of details link on cart page -->
    <div id="free-shipping-return" class="popupbox">
      <a href="javascript:" class="close"></a>
      <div class="content">
        <div class="head"><span class="corisande-bold">FREE STANDARD SHIPPING</span> on orders of $25 or more</div>
        <h4 class="corisande-bold18">How to get FREE Standard Shipping:</h4>
        <ol class="numbers corisande-regular">
          <li>Ship to an address within the United States (including U.S. territories)</li>
          <li>Place your online order of $25 or more* - after promotions and before tax are applied</li>
          <li>Use "Standard" shipping option at checkout</li>
        </ol>
        <span class="corisande-bold">Order by 6pm</span> for same day shipping
        <p class="text corisande-regular">Domestic orders placed Monday - Friday by 6 p.m. Eastern Time will be packed and shipped the same day, pending verification of billing information and the shipping method selected. International orders and orders containing gift cards, out-of-stock items or refrigerated items will be processed as quickly as possible, but won't necessarily be shipped out the same day.
          <br /> Excludes all orders placed on major US holidays (Memorial Day, Independence Day, Labor Day, Thanksgiving Day, Christmas Day and New Year's Day).

          <div class="head other">Rely on the
            <br /> Vitamin Shoppe<sup class="size18">®</sup> 100% Satisfaction Guarantee</div>
          <div class="text">You may return any item purchased from the Vitamin Shoppe for any reason within thirty (30) days of purchase. For online and catalog orders, the product ship date is the date of purchase. Refunds for unopened items will be issued via your original form of payment with one exception. Online orders paid for with PayPal and returned to a Vitamin Shoppe retail store will be refunded via merchandise credit.</div>
      </div>
    </div>
    <div id="popup-healthy-awards" class="popupbox">
      <a href="javascript:" class="close"></a>
      <div class="popupHealthyAwards">
        <h4>Vitamin Shoppe Healthy Awards Program - Free to join!</h4>
        <span>
<h4>
<p>Earn credits for free merchandise -</p>
<p>Over $29,000,000 given away last year</p>
</h4>
</span> When you make a purchase at our website, you are automatically enrolled in our loyalty program, which earns you points towards free merchandise. The more you purchase over time, the more free products you earn. Last year, customers like you earned over $29,000,000 in free merchandise credits, which can be used to purchase anything we sell. <span>
<p class="link-text"><a target="_blank" href=" /u/global/gadgets/healthyAwardsClub.jsp">For full program details, click here</a>.</p>
<span>                                                  </span></span>
      </div>
    </div>
    <div id="sms-terms" class="popupbox">
      <a href="javascript:" class="close"></a>
      <div class="popupDisclaimer">
        <div class="content">
          <div class="head">Text Messaging (SMS) Terms &amp; Conditions Highlights</div>
          <ul>
            <li>You will not receive more than 5 text messages per month</li>
            <li>You can opt out of the SMS program at any time by replying to 49833 with the word "STOP"</li>
            <li>Data and text message rates will apply to each text message sent or received in accordance with your wireless plan</li>
          </ul>
          <p><a href="/u/privacy.jsp" class="gray-link-small bold" target="_blank">View the full terms and conditions</a>
          </p>
        </div>
      </div>
    </div>
    <div class="popupbox" id="popup-disclaimer" style="display:none;">
      <a class="close" href="javascript:"></a>
      <div class="popupDisclaimer">
        These products are dietary supplements and are not intended to diagnose, treat cure or prevent any disease. Reviews are not intended as a substitute for appropriate medical care or the advice of a physician or another medical professional. Actual results may vary among users. Vitaminshoppe.com makes no warranty or representation, expressed or implied, as to the accuracy or validity of the information contributed by outside product review submissions, and assumes no responsibility or liability regarding the use of such information. The information and statements regarding the dietary supplements have not been evaluated by the Food and Drug Administration. If you have a medical condition or disease, please talk to your health care provider. If you are currently taking a prescription medication, you should work with your health care provider before discontinuing any drug or altering any drug regimen, including augmenting your regimen with dietary supplements. Do not attempt to self-diagnose any disease or ailment based on the reviews and do not use the information contained herein for diagnosing or treating a health problem or disease. Proper medical care is critical to good health. If you have a health concern or suspect you have an undiagnosed sign or symptom, please consult a physician or health care practitioner.
      </div>
    </div>
    <div class="popupbox" id="popup-qnadisclaimer" style="display:none;">
      <a class="close" href="javascript:"></a>
      <div class="popupDisclaimer">
        <div class="chat in">
          <div class="msg 1st">These products are dietary supplements and are not intended to diagnose, treat cure or prevent any disease. Reviews are not intended as a substitute for appropriate medical care or the advice of a physician or another medical professional. Actual results may vary among users. Vitaminshoppe.com makes no warranty or representation, expressed or implied, as to the accuracy or validity of the information contributed by outside product review submissions, and assumes no responsibility or liability regarding the use of such information. The information and statements regarding the dietary supplements have not been evaluated by the Food and Drug Administration. If you have a medical condition or disease, please talk to your health care provider. If you are currently taking a prescription medication, you should work with your health care provider before discontinuing any drug or altering any drug regimen, including augmenting your regimen with dietary supplements. Do not attempt to self-diagnose any disease or ailment based on the reviews and do not use the information contained herein for diagnosing or treating a health problem or disease. Proper medical care is critical to good health. If you have a health concern or suspect you have an undiagnosed sign or symptom, please consult a physician or health care practitioner.</div>
          <div id="insert">&#160;</div>
          <div class="clear">&#160;</div>
        </div>
        <div class="break">&#160;</div>
      </div>
    </div>
    <div class="popupbox" id="popup-loadingResults" style="display: none;">
      <div class="popupDisclaimer">
        <span><img src="/images/bx_loader.gif"/></span> <span class="updatingResults">updating results</span>
      </div>
    </div>
    <div class="popupbox" id="popup-processingOrder" style="display: none;">
      <div class="popupDisclaimer">
        <span><img src="/images/bx_loader.gif"/></span> <span class="updatingResults">processing</span>
      </div>
    </div>
    <div class="popupbox" id="popup-errorResultsDiv" style="display: none;">
      <div id="popup-errorResults">
        <a class="close" href="javascript:"></a>
      </div>
      <div class="popupDisclaimer">
        <span><img src="/images/bx_loader.gif"></span> <span class="errorResults">We're sorry,we were not able to complete your request,please try again</span> </div>
    </div>
    <p>
      <style type="text/css">
        #popup-free-shipping {
          overflow: visible;
        }
        
        #popup-free-shipping .close {
          top: -30px;
          right: -30px;
          background: transparent url(/images/sprite-icons.png) -165px -56px no-repeat;
        }
      </style>
    </p>
    <div id="popup-free-shipping" class="popupbox" style="top: 50px; display: none;background-color: #fff;">
      <a class="close" href="javascript:"></a>
      <div class="content" style="padding: 0 37px">
        <div class="head" style="padding-top: 5px"><span class="corisande-bold">FREE STANDARD SHIPPING</span> on orders of $25 or more</div>
        <h4 class="corisande-bold18">How to get FREE Standard Shipping:</h4>
        <ol class="numbers corisande-regular">
          <li>Ship to an address within the United States (including U.S. territories)</li>
          <li>Place your online order of $25 or more* - after promotions and before tax are applied</li>
          <li>Use "Standard" shipping option at checkout</li>
        </ol>
        <p><span class="corisande-bold">Order by 6pm</span> for same day shipping</p>
        <p class="text corisande-regular">Domestic orders placed Monday - Friday by 6 p.m. Eastern Time will be packed and shipped the same day, pending verification of billing information and the shipping method selected. International orders and orders containing gift cards, out-of-stock items or refrigerated items will be processed as quickly as possible, but won't necessarily be shipped out the same day.
          <br /> Excludes all orders placed on major US holidays (Memorial Day, Independence Day, Labor Day, Thanksgiving Day, Christmas Day and New Year's Day).</p>
        <div class="head other">Rely on the
          <br /> Vitamin Shoppe<sup class="size18">®</sup> 100% Satisfaction Guarantee</div>
        <div class="text">You may return any item purchased from the Vitamin Shoppe for any reason within thirty (30) days of purchase. For online and catalog orders, the product ship date is the date of purchase. Refunds for unopened items will be issued via your original form of payment with one exception. Online orders paid for with PayPal and returned to a Vitamin Shoppe retail store will be refunded via merchandise credit.</div>
      </div>
    </div>

    <div id="popup-quick-view" class="quick-view popupbox" style="display:none;"></div>


  </div>



</body>

</html>