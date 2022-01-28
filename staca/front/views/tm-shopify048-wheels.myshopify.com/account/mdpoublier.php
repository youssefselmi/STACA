<?php session_start();
$erreurs=array();
if(isset($_POST['connecter'])){
    $pass=$_POST['mdp'];
    $passCNF=$_POST['passwordCNF'];
    if (!empty($_POST['mdp']) && !empty($_POST['passwordCNF'])){

    if ($pass!=$passCNF)
    {
        $erreurs['MDP']= "Les mots de passe ne sont pas identiques";
    }
}
} ?>
<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->  

<!-- Mirrored from tm-shopify048-wheels.myshopify.com/account/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2019 22:14:43 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    
    <title>Account | Wheels &amp; Tyres</title>
    

    <link rel="canonical" href="login.php" />
  	<link href="http://cdn.shopify.com/s/files/1/0508/6409/t/2/assets/favicon.ico?0" rel="shortcut icon" type="image/x-icon" />
    <script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.start');</script><meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/5086409/digital_wallets/dialog">
<script id="shopify-features" type="application/json">{"accessToken":"a1f9d818538fd877d4c32bc79ff1e2f5","betas":[],"domain":"tm-shopify048-wheels.myshopify.com","predictiveSearch":true,"shopId":5086409,"smart_payment_buttons_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/spb.en.js","dynamic_checkout_cart_url":"https:\/\/cdn.shopify.com\/shopifycloud\/payment-sheet\/assets\/latest\/dynamic-checkout-cart.en.js"}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = "tm-shopify048-wheels.myshopify.com";
Shopify.currency = {"active":"USD","rate":"1.0"};
Shopify.theme = {"name":"tm-shopify048-wheels","id":8463075,"theme_store_id":null,"role":"main"};
Shopify.theme.handle = "null";
Shopify.theme.style = {"id":null,"handle":null};</script>
<script type="module">!function(o){(o.Shopify=o.Shopify||{}).modules=!0}(window);</script>
<script>!function(o){function n(){var o=[];function n(){o.push(Array.prototype.slice.apply(arguments))}return n.q=o,n}var t=o.Shopify=o.Shopify||{};t.loadJS=n(),t.detectLoadJS=n()}(window);</script>
<script id="__st">var __st={"a":5086409,"offset":-18000,"reqid":"48a1b32c-87b9-47ef-9357-fc8190f2b8b3","pageurl":"tm-shopify048-wheels.myshopify.com\/account\/login","u":"102d51256dc2"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'USD';
var meta = {"page":{}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
  
};
</script>
<script class="analytics">(function () {
  var customDocumentWrite = function(content) {
    var jquery = null;

    if (window.jQuery) {
      jquery = window.jQuery;
    } else if (window.Checkout && window.Checkout.$) {
      jquery = window.Checkout.$;
    }

    if (jquery) {
      jquery('body').append(content);
    }
  };

  var isDuplicatedThankYouPageView = function() {
    return document.cookie.indexOf('loggedConversion=' + window.location.pathname) !== -1;
  }

  var setCookieIfThankYouPage = function() {
    if (window.location.pathname.indexOf('/checkouts') !== -1 &&
        window.location.pathname.indexOf('/thank_you') !== -1) {

      var twoMonthsFromNow = new Date(Date.now());
      twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

      document.cookie = 'loggedConversion=' + window.location.pathname + '; expires=' + twoMonthsFromNow;
    }
  }

  var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
  if (trekkie.integrations) {
    return;
  }
  trekkie.methods = [
    'identify',
    'page',
    'ready',
    'track',
    'trackForm',
    'trackLink'
  ];
  trekkie.factory = function(method) {
    return function() {
      var args = Array.prototype.slice.call(arguments);
      args.unshift(method);
      trekkie.push(args);
      return trekkie;
    };
  };
  for (var i = 0; i < trekkie.methods.length; i++) {
    var key = trekkie.methods[i];
    trekkie[key] = trekkie.factory(key);
  }
  trekkie.load = function(config) {
    trekkie.config = config;
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.onerror = function(e) {
      (new Image()).src = 'http://v.shopify.com/internal_errors/track?error=trekkie_load';
    };
    script.async = true;
    script.src = '../../cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min2cbf.js?v=2019.11.04.1';
    var first = document.getElementsByTagName('script')[0];
    first.parentNode.insertBefore(script, first);
  };
  trekkie.load(
    {"Trekkie":{"appName":"storefront","development":false,"defaultAttributes":{"shopId":5086409,"isMerchantRequest":null,"themeId":8463075,"themeCityHash":"9934183276901724843","contentLanguage":"en","currency":"USD"}},"Performance":{"navigationTimingApiMeasurementsEnabled":true,"navigationTimingApiMeasurementsSampleRate":1},"Session Attribution":{}}
  );

  var loaded = false;
  trekkie.ready(function() {
    if (loaded) return;
    loaded = true;

    window.ShopifyAnalytics.lib = window.trekkie;
    

    var originalDocumentWrite = document.write;
    document.write = customDocumentWrite;
    try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
    document.write = originalDocumentWrite;
      (function () {
        if (window.BOOMR && (window.BOOMR.version || window.BOOMR.snippetExecuted)) {
          return;
        }
        window.BOOMR = window.BOOMR || {};
        window.BOOMR.snippetStart = new Date().getTime();
        window.BOOMR.snippetExecuted = true;
        window.BOOMR.snippetVersion = 12;
        window.BOOMR.shopId = 5086409;
        window.BOOMR.themeId = 8463075;
        window.BOOMR.url =
          "../../cdn.shopify.com/shopifycloud/boomerang/boomerang-latest.min.js";
        var where = document.currentScript || document.getElementsByTagName("script")[0];
        if (!where || !where.parentNode){
          return;
        }
        var promoted = false;
        var LOADER_TIMEOUT = 3000;
        function promote() {
          if (promoted) {
            return;
          }
          var script = document.createElement("script");
          script.id = "boomr-scr-as";
          script.src = window.BOOMR.url;
          script.async = true;
          where.parentNode.appendChild(script);
          promoted = true;
        }
        function iframeLoader(wasFallback) {
          promoted = true;
          var dom, bootstrap, iframe, iframeStyle;
          var doc = document;
          var win = window;
          window.BOOMR.snippetMethod = wasFallback ? "if" : "i";
          bootstrap = function(parent, scriptId) {
            var script = doc.createElement("script");
            script.id = scriptId || "boomr-if-as";
            script.src = window.BOOMR.url;
            BOOMR_lstart = new Date().getTime();
            parent = parent || doc.body;
            parent.appendChild(script);
          };
          if (!window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]./)) {
            window.BOOMR.snippetMethod = "s";
            bootstrap(where.parentNode, "boomr-async");
            return;
          }
          iframe = document.createElement("IFRAME");
          iframe.src = "about:blank";
          iframe.title = "";
          iframe.role = "presentation";
          iframe.loading = "eager";
          iframeStyle = (iframe.frameElement || iframe).style;
          iframeStyle.width = 0;
          iframeStyle.height = 0;
          iframeStyle.border = 0;
          iframeStyle.display = "none";
          where.parentNode.appendChild(iframe);
          try {
            win = iframe.contentWindow;
            doc = win.document.open();
          } catch (e) {
            dom = document.domain;
            iframe.src = "javascript:var d=document.open();d.domain='" + dom + "';void(0);";
            win = iframe.contentWindow;
            doc = win.document.open();
          }
          if (dom) {
            doc._boomrl = function() {
              this.domain = dom;
              bootstrap();
            };
            doc.write("<body onload='document._boomrl();'>");
          } else {
            win._boomrl = function() {
              bootstrap();
            };
            if (win.addEventListener) {
              win.addEventListener("load", win._boomrl, false);
            } else if (win.attachEvent) {
              win.attachEvent("onload", win._boomrl);
            }
          }
          doc.close();
        }
        var link = document.createElement("link");
        if (link.relList &&
          typeof link.relList.supports === "function" &&
          link.relList.supports("preload") &&
          ("as" in link)) {
          window.BOOMR.snippetMethod = "p";
          link.href = window.BOOMR.url;
          link.rel = "preload";
          link.as = "script";
          link.addEventListener("load", promote);
          link.addEventListener("error", function() {
            iframeLoader(true);
          });
          setTimeout(function() {
            if (!promoted) {
              iframeLoader(true);
            }
          }, LOADER_TIMEOUT);
          BOOMR_lstart = new Date().getTime();
          where.parentNode.appendChild(link);
        } else {
          iframeLoader(false);
        }
        function boomerangSaveLoadTime(e) {
          window.BOOMR_onload = (e && e.timeStamp) || new Date().getTime();
        }
        if (window.addEventListener) {
          window.addEventListener("load", boomerangSaveLoadTime, false);
        } else if (window.attachEvent) {
          window.attachEvent("onload", boomerangSaveLoadTime);
        }
        if (document.addEventListener) {
          document.addEventListener("onBoomerangLoaded", function(e) {
            e.detail.BOOMR.init({});
            e.detail.BOOMR.t_end = new Date().getTime();
          });
        } else if (document.attachEvent) {
          document.attachEvent("onpropertychange", function(e) {
            if (!e) e=event;
            if (e.propertyName === "onBoomerangLoaded") {
              e.detail.BOOMR.init({});
              e.detail.BOOMR.t_end = new Date().getTime();
            }
          });
        }
      })();
    

    if (!isDuplicatedThankYouPageView()) {
      setCookieIfThankYouPage();
      
        window.ShopifyAnalytics.lib.page(
          null,
          {}
        );
      
      
    }
  });

  
      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = "../../cdn.shopify.com/s/assets/shop_events_listener-17b815ecd2d75d5d3ec1b7a2a59daadee017bd9097e9b4629937b0a78cf0ecaa.js";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
    
})();</script>
<script integrity="sha256-/LWbHGRT9fhJCeTFZxJJr7GGGJRbAOrw4xIjESlEc8I=" crossorigin="anonymous" data-source-attribution="shopify.loadjs" defer="defer" src="../../cdn.shopify.com/s/assets/storefront/load_js-fcb59b1c6453f5f84909e4c5671249afb18618945b00eaf0e3122311294473c2.js"></script>
<script integrity="sha256-2P0MRbAT3p4Oh8olbuAvRl44EikliFx94nnWg4+R+mo=" data-source-attribution="shopify.dynamic-checkout" defer="defer" src="../../cdn.shopify.com/s/assets/storefront/features-d8fd0c45b013de9e0e87ca256ee02f465e38122925885c7de279d6838f91fa6a.js" crossorigin="anonymous"></script>


<script>window.performance && window.performance.mark && window.performance.mark('shopify.content_for_header.end');</script>

    <link href="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/bootstrapcfcd.css?0" rel="stylesheet" type="text/css" media="all" /> 
    <link href="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/assetscfcd.css?0" rel="stylesheet" type="text/css" media="all" /> 
    <link href="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/stylecfcd.css?0" rel="stylesheet" type="text/css" media="all" />
    <link href="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/responsivecfcd.css?0" rel="stylesheet" type="text/css" media="all" />
    <link href="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/font-awesomecfcd.css?0" rel="stylesheet" type="text/css" media="all" />

	
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,600,600italic,800italic' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js" type="text/javascript"></script>
    <link href="//cdn.shopify.com/s/files/1/0508/6409/t/2/assets/ie8.css?0" rel="stylesheet" type="text/css" media="all" />
    <![endif]-->

    <!--[if IE 9]>
    <link href="//cdn.shopify.com/s/files/1/0508/6409/t/2/assets/ie9.css?0" rel="stylesheet" type="text/css" media="all" />
    <![endif]-->

    <!--[if gte IE 9]>
    <style type="text/css">.gradient {filter: none;}</style>
    <![endif]-->

    
    <script src="../../../cdn.shopify.com/s/assets/themes_support/shopify_common-8ea6ac3faf357236a97f5de749df4da6e8436ca107bc3a4ee805cbf08bc47392.js" type="text/javascript"></script>
    <script src="../../../cdn.shopify.com/s/assets/themes_support/customer_area-4beccea87758d91106a581ba89341d9b51842f6da79209258c8297239e950343.js" type="text/javascript"></script>
    

    <script src="../../../cdn.shopify.com/s/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js" type="text/javascript"></script>
    <script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>  
    <script src="../../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/bootstrap.mincfcd.js?0" type="text/javascript"></script>
    <script src="../../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery-migrate-1.2.1.mincfcd.js?0" type="text/javascript"></script>
    <script src="../../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery.mobile.customized.mincfcd.js?0" type="text/javascript"></script>
    <script src="../../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/shopcfcd.js?0" type="text/javascript"></script>
    <script src="../../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery.easing.1.3cfcd.js?0" type="text/javascript"></script>
    <script src="../../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/api.jquerycfcd.js?0" type="text/javascript"></script>
    <script src="../../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/ajaxify-shopcfcd.js?0" type="text/javascript"></script>
    <script src="../../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/hoverIntentcfcd.js?0" type="text/javascript"></script>
    <script src="../../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/superfishcfcd.js?0" type="text/javascript"></script>
    <script src="../../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/supersubscfcd.js?0" type="text/javascript"></script>
    <script src="../../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery.mobilemenucfcd.js?0" type="text/javascript"></script>
    <script src="../../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/sftouchscreencfcd.js?0" type="text/javascript"></script>
    <script src="../../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery.fancybox-1.3.4cfcd.js?0" type="text/javascript"></script>
    <script src="../../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery.bxslider.mincfcd.js?0" type="text/javascript"></script>
    <script src="../../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery.nivoslidercfcd.js?0" type="text/javascript"></script>
    <script src="../../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery.customSelect.mincfcd.js?0" type="text/javascript"></script>
  	<script src="../../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/tm-stick-upcfcd.js?0" type="text/javascript"></script>
    

<script src="../../services/javascripts/currencies.js" type="text/javascript"></script>
<script src="../../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery.currencies.mincfcd.js?0" type="text/javascript"></script>

<script>


Currency.format = 'money_format';


var shopCurrency = 'USD';

/* Sometimes merchants change their shop currency, let's tell our JavaScript file */
Currency.money_with_currency_format[shopCurrency] = "${{amount}} USD";
Currency.money_format[shopCurrency] = "${{amount}}";
  
/* Default currency */
var defaultCurrency = 'USD' || shopCurrency;
  
/* Cookie currency */
var cookieCurrency = Currency.cookie.read();

/* Fix for customer account pages */
jQuery('span.money span.money').each(function() {
  jQuery(this).parents('span.money').removeClass('money');
});

/* Saving the current price */
jQuery('span.money').each(function() {
  jQuery(this).attr('data-currency-USD', jQuery(this).html());
});

// If there's no cookie.
if (cookieCurrency == null) {
  if (shopCurrency !== defaultCurrency) {
    Currency.convertAll(shopCurrency, defaultCurrency);
  }
  else {
    Currency.currentCurrency = defaultCurrency;
  }
}
// If the cookie value does not correspond to any value in the currency dropdown.
else if (jQuery('[name=currencies]').size() && jQuery('[name=currencies] option[value=' + cookieCurrency + ']').size() === 0) {
  Currency.currentCurrency = shopCurrency;
  Currency.cookie.write(shopCurrency);
}
else if (cookieCurrency === shopCurrency) {
  Currency.currentCurrency = shopCurrency;
}
else {
  Currency.convertAll(shopCurrency, cookieCurrency);
}

jQuery('[name=currencies]').val(Currency.currentCurrency).change(function() {
  var newCurrency = jQuery(this).val();
  Currency.convertAll(Currency.currentCurrency, newCurrency);
  jQuery('.selected-currency').text(Currency.currentCurrency);
});

var original_selectCallback = window.selectCallback;
var selectCallback = function(variant, selector) {
  original_selectCallback(variant, selector);
  Currency.convertAll(shopCurrency, jQuery('[name=currencies]').val());
  jQuery('.selected-currency').text(Currency.currentCurrency);
};

jQuery('.selected-currency').text(Currency.currentCurrency);

</script>



</head>
<body id="account" class="template-customers-login" >


<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

<div id="wrapper">
<div id="wrapper2">

<!-- HEADER -->
<header id="header">

<div class="header_row_1">
    <div class="container">
    <div class="row">
        <div class="col-xs-8">
            
            <!-- USER MENU -->
            <ul class="header_user">
            
                <li><a href="login.php" id="customer_login_link">Log in</a></li>
                
                <li><a href="register.php" id="customer_register_link">Create an account</a></li>
                
            
            <li class="checkout"><a href="../cart.html">Check out</a></li>
            </ul>
            
        </div>
        <div class="col-xs-4">
            <!-- CURRENCIES -->
            
            <div class="header_currency">
    <div class="customselect_wrap">
        <select id="currencies" name="currencies">
          
          
          <option value="USD" selected="selected">USD</option>
          
            
          
            
            <option value="EUR">EUR</option>
            
          
            
            <option value="GBP">GBP</option>
            
          
        </select>
    </div>
</div>
            
        </div>
    </div>
    </div>
</div>

<div class="header_row_2">
    <div class="container">
    <div class="row">
        <div class="col-sm-6">
            <!-- LOGO -->
            <div id="logo">
            <a href="../index.html">STACA</a>
            </div>
        </div>
        <div class="col-sm-6">
            <!-- HEADER CART -->
          	<div class="header_cart"><a href="../cart.html"><i class="fa fa-shopping-cart"></i><b>Cart:</b><span class="cart-total-items"><span class="count">0</span></span><span>item(s)</span><span>&nbsp;&ndash;&nbsp;</span><span class="money cart-total-price">$0.00</span></a></div>

            <!-- CUSTOM HEADER BLOCK -->
          	<div class="custom_header1"><h3><i class="fa fa-phone"></i>+216-71-234-567</h3></div>
        </div>
    </div>
    </div>
</div>

</header>


<!-- NAVIGATION -->
<div id="navigation">
<div class="container">
<nav role="navigation">
    <ul class="sf-menu visible-md visible-lg">
    
    
    
    
    
    
    <li class=" first">
        <a href="../index.html" title="">Home</a>
        
    </li>
    
    
    
    
    
    
      <li class="">
        <a href="../collections/all.html" title="">Products</a>
</li>
    
    
    
    
    
    
    <li class="">
        <a href="../blogs/blog.html" title="">Blog</a>
        
    </li>
    
    
    
    
    
    
    <li class="">
        <a href="../pages/about-us.html" title="">About Us</a>
        
    </li>
    
    
    
    
    
    
    <li class="">
        <a href="../pages/documentation.html" title="">Documentation</a>
        
    </li>
    
    
    
    
    
    
    <li class=" last">
        <a href="../pages/contact-us.html" title="">Contact us</a>
        
    </li>
    
    </ul>

    <!-- HEADER SEARCH -->
    <div class="header_search">
        <form action="" method="get" class="search-form" role="search">
        <input id="search-field" name="q" type="text" placeholder="Search store..." class="hint" />
        <button id="search-submit" type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>

  	<div class="clearfix"></div>
</nav>
</div>
</div>


<!-- SHOWCASE CUSTOM BLOCKS -->


<!-- MAIN CONTENT -->
<div id="main" role="main">
<div class="container">


<ul class="breadcrumb">
  <li><a href="../index.html" class="homepage-link" title="Back to the frontpage">Home</a></li>
  
      <li><span class="page-title">Account</span></li>
  
</ul>






    <div class="row sidebar_left sidebar_off">

    <div class="column_center">
    <div id="main_content" class="col-sm-12">
    
    

<div id="template" class="customer customer__login">

<div id="customer">

<h2 class="page_heading">Reset Password <?php echo $_SESSION['recoveremail']; ?></h2>
          
<div class="form-horizontal">
<form method="post" action="modifiermdp.php" id="customer_login" accept-charset="UTF-8"><input type="hidden" name="form_type" value="customer_login" /><input type="hidden" name="utf8" value="✓" />

<!-- Customer Account Login -->
<div id="password" class="clearfix form-group">
                  <label for="password" class="login control-label col-sm-4">Password</label>
                  <div class="col-sm-4"><input type="password" value="" name="mdp" id="password" class="form-control password" size="30" /></div>
                </div>
                <div id="password" class="clearfix form-group">
                    <label for="password" class="login control-label col-sm-4">Confirm Password</label>
                    <div class="col-sm-4"><input type="password" value="" name="passwordCNF" id="password" class="form-control password" size="30" /></div>
                  </div>
                  <div id="login_password" class="clearfix large_form form-group">

                  <?php if (count($erreurs)>0):?>
        <div class="alert alert-danger" id="ERR" role="alert">
        <?php foreach($erreurs as $erreur): ?>
            <li><?php echo $erreur;?></li>
        <?php endforeach; ?>
        </div>
        <?php endif; ?>
<div class="form-group">
<div class="action_bottom col-sm-offset-4 col-sm-4">
<input class="btn btn-primary" type="submit" value="Reset" name="connecter" action="/>
<span class="note">or <a href="../index.html">Return to Store</a></span>
</div>
</div>

</form>
</div>

</div>

<!-- Recover Password Form -->


<!-- Guest Login form for shops with optional customer accounts. This form is displayed only when users click on the checkout link on the cart page. -->


</div>

<script type="text/javascript">
  function showRecoverPasswordForm() {
    document.getElementById('recover-password').style.display = 'block';
    document.getElementById('customer').style.display='none';
  }

  function hideRecoverPasswordForm() {
    document.getElementById('recover-password').style.display = 'none';
    document.getElementById('customer').style.display = 'block';
  }

  if (window.location.hash == '#recover') { showRecoverPasswordForm() }
</script>
    
    </div>
    </div>

    

    

	</div>

</div>
</div>



<!-- FOOTER -->
<footer id="footer">
    <div class="container">
        <div class="row">

            <div class="col-sm-3 custom_footer custom_footer1">
                <h3>Information</h3>
                <ul class="list">
                  
                    <li ><a href="../index.html" title="">Home</a></li>
                    
                    <li ><a href="../search.html" title="">Search</a></li>
                    
                    <li ><a href="../blogs/blog.html" title="">Blog</a></li>
                    
                    <li ><a href="../pages/about-us.html" title="">About Us</a></li>
                    
                    <li ><a href="../pages/documentation.html" title="">Documentation</a></li>
                    
                    <li ><a href="../pages/contact-us.html" title="">Contact us</a></li>
                    
                </ul>
            </div>
    
            <div class="col-sm-3 custom_footer custom_footer2">
                <h3>Products</h3>
                <ul class="list">
                    
                    <li ><a href="../collections/wheels.html" title="">Wheels</a></li>
                    
                    <li ><a href="../collections/accessories.html" title="">Accessories</a></li>
                    
                    <li ><a href="../collections/sport-tyres.html" title="">Sport Tyres</a></li>
                    
                    <li ><a href="../collections/winter-tyres.html" title="">Winter Tyres</a></li>
                    
                    <li ><a href="../collections/summer-tyres.html" title="">Summer Tyres</a></li>
                    
                </ul>
            </div>
    
            <div class="col-sm-3 custom_footer custom_footer3">
                <h3>Follow us</h3>
                <ul>
                    <li><a href="https://twitter.com/templatemonster">Twitter</a></li>
                    <li><a href="https://www.facebook.com/TemplateMonster">Facebook</a></li>
                    
                    
                    
                    <li><a href="https://google.com/+templatemonster">Google+</a></li>
                    
                </ul>
            </div>          
    
            <div class="col-sm-3 custom_footer custom_footer4">
                <h3>Contacts</h3>
                <p>
                    <i class="fa fa-phone"></i>
                    <span>+216-71-234-567</span>
                    <span>+216-71-234-568</span>
                </p>
            </div>
    
        </div>
    
    </div>
    
    <div class="copyright">
        <div class="container" role="contentinfo">&copy; 2019 Wheels &amp; Tyres. All Rights Reserved. Design by <a href="http://templatemonster.com/">TemplateMonster.com</a>. <a target="_blank" rel="nofollow" href="https://www.shopify.com/website/templates?utm_campaign=poweredby&amp;utm_medium=shopify&amp;utm_source=onlinestore">Website template by Shopify</a>.</div><!-- Design by templatemonster.com -->
    </div>

</footer>

</div><!-- / #wrapper2 -->
</div><!-- / #wrapper -->

<script type="text/javascript">
$(document).ready(function(){
  $('.customselect_wrap select').customSelect();
});
</script>


<script src="../services/javascripts/currencies.js" type="text/javascript"></script>
<script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery.currencies.mincfcd.js?0" type="text/javascript"></script>

<script>


Currency.format = 'money_format';


var shopCurrency = 'USD';

/* Sometimes merchants change their shop currency, let's tell our JavaScript file */
Currency.money_with_currency_format[shopCurrency] = "${{amount}} USD";
Currency.money_format[shopCurrency] = "${{amount}}";
  
/* Default currency */
var defaultCurrency = 'USD' || shopCurrency;
  
/* Cookie currency */
var cookieCurrency = Currency.cookie.read();

/* Fix for customer account pages */
jQuery('span.money span.money').each(function() {
  jQuery(this).parents('span.money').removeClass('money');
});

/* Saving the current price */
jQuery('span.money').each(function() {
  jQuery(this).attr('data-currency-USD', jQuery(this).html());
});

// If there's no cookie.
if (cookieCurrency == null) {
  if (shopCurrency !== defaultCurrency) {
    Currency.convertAll(shopCurrency, defaultCurrency);
  }
  else {
    Currency.currentCurrency = defaultCurrency;
  }
}
// If the cookie value does not correspond to any value in the currency dropdown.
else if (jQuery('[name=currencies]').size() && jQuery('[name=currencies] option[value=' + cookieCurrency + ']').size() === 0) {
  Currency.currentCurrency = shopCurrency;
  Currency.cookie.write(shopCurrency);
}
else if (cookieCurrency === shopCurrency) {
  Currency.currentCurrency = shopCurrency;
}
else {
  Currency.convertAll(shopCurrency, cookieCurrency);
}

jQuery('[name=currencies]').val(Currency.currentCurrency).change(function() {
  var newCurrency = jQuery(this).val();
  Currency.convertAll(Currency.currentCurrency, newCurrency);
  jQuery('.selected-currency').text(Currency.currentCurrency);
});

var original_selectCallback = window.selectCallback;
var selectCallback = function(variant, selector) {
  original_selectCallback(variant, selector);
  Currency.convertAll(shopCurrency, jQuery('[name=currencies]').val());
  jQuery('.selected-currency').text(Currency.currentCurrency);
};

jQuery('.selected-currency').text(Currency.currentCurrency);

</script>


</body>

<!-- Mirrored from tm-shopify048-wheels.myshopify.com/account/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2019 22:14:44 GMT -->
</html>