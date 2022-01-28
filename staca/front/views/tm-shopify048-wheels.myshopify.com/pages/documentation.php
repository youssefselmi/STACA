<?php 
session_start();
?>
<!doctype html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="no-js"> <!--<![endif]-->  

<!-- Mirrored from tm-shopify048-wheels.myshopify.com/pages/documentation by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2019 22:16:17 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <meta name="description" content="The following Documentation will help you better understand theme settings and configuration options. Please note: this documentation is related to the theme itself. If you need more information on working with Shopify please refer to Shopify official documentation. Theme Features Responsive design - theme works fine o" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    
    <title>Documentation | Wheels &amp; Tyres</title>
    

    <link rel="canonical" href="documentation.html" />
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
<script id="__st">var __st={"a":5086409,"offset":-18000,"reqid":"a52a3be1-6f91-4098-a56a-dade2056382b","pageurl":"tm-shopify048-wheels.myshopify.com\/pages\/documentation","s":"pages-17182399","u":"2f067c1811d4","p":"page","rtyp":"page","rid":17182399};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'USD';
var meta = {"page":{"pageType":"page","resourceType":"page","resourceId":17182399}};
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
          {"pageType":"page","resourceType":"page","resourceId":17182399}
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

    

    <script src="../../cdn.shopify.com/s/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js" type="text/javascript"></script>
    <script src="../../ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>  
    <script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/bootstrap.mincfcd.js?0" type="text/javascript"></script>
    <script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery-migrate-1.2.1.mincfcd.js?0" type="text/javascript"></script>
    <script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery.mobile.customized.mincfcd.js?0" type="text/javascript"></script>
    <script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/shopcfcd.js?0" type="text/javascript"></script>
    <script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery.easing.1.3cfcd.js?0" type="text/javascript"></script>
    <script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/api.jquerycfcd.js?0" type="text/javascript"></script>
    <script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/ajaxify-shopcfcd.js?0" type="text/javascript"></script>
    <script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/hoverIntentcfcd.js?0" type="text/javascript"></script>
    <script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/superfishcfcd.js?0" type="text/javascript"></script>
    <script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/supersubscfcd.js?0" type="text/javascript"></script>
    <script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery.mobilemenucfcd.js?0" type="text/javascript"></script>
    <script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/sftouchscreencfcd.js?0" type="text/javascript"></script>
    <script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery.fancybox-1.3.4cfcd.js?0" type="text/javascript"></script>
    <script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery.bxslider.mincfcd.js?0" type="text/javascript"></script>
    <script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery.nivoslidercfcd.js?0" type="text/javascript"></script>
    <script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery.customSelect.mincfcd.js?0" type="text/javascript"></script>
  	<script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/tm-stick-upcfcd.js?0" type="text/javascript"></script>
    

<script src="../services/javascripts/currencies.js" type="text/javascript"></script>
<script src="../../cdn.shopify.com/s/files/1/0508/6409/t/2/assets/jquery.currencies.mincfcd.js?0" type="text/javascript"></script>

<script>


Currency.format = 'money_format';


var shopCurrency = 'USD';

/* Sometimes merchants change their shop currency, let's tell our JavaScript file */
Currency.money_with_currency_format[shopCurrency] = "DT{{amount}} DT";
Currency.money_format[shopCurrency] = "DT{{amount}}";
  
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
<body id="documentation" class="template-page" >


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
            <?php if (!isset($_SESSION['email_session'])):?>
                <li><a href="../account/login.php" id="customer_login_link"> Log in</a></li>
                
                <li><a href="../account/register.php" id="customer_register_link">Create an account</a></li>
                <?php endif; ?>  
            
            <?php if (isset($_SESSION['email_session'])):?>
                <li onClick='location. href="../account/modifier.php"'><i class="fa fa-user fa-lg" ></i></li>
                <li class="checkout"><a href="../account/logout.php" style="font-size:15px;">Log out</a></li>

            <?php endif; ?>    
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
            <a href="../index.html">Wheels &amp; Tyres</a>
            </div>
        </div>
        <div class="col-sm-6">
            <!-- HEADER CART -->
          	<div class="header_cart"><a href="../cart.html"><i class="fa fa-shopping-cart"></i><b>Cart:</b><span class="cart-total-items"><span class="count">0</span></span><span>item(s)</span><span>&nbsp;&ndash;&nbsp;</span><span class="money cart-total-price">0.00DT</span></a></div>

            <!-- CUSTOM HEADER BLOCK -->
          	<div class="custom_header1"><h3><i class="fa fa-phone"></i>1-800-234-5677</h3></div>
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
    
    
    
    
    
    
    <li class=" has-dropdown">
        <a href="../collections/all.html" title="">Products</a>
        
        <ul>
        
        
            <li class=" first"><a class="first" href="../collections/wheels.html">Wheels</a></li>
        
            <li class=""><a class="" href="../collections/accessories.html">Accessories</a></li>
        
            <li class=""><a class="" href="../collections/sport-tyres.html">Sport Tyres</a></li>
        
            <li class=""><a class="" href="../collections/winter-tyres.html">Winter Tyres</a></li>
        
            <li class=" last"><a class="last" href="../collections/summer-tyres.html">Summer Tyres</a></li>
        
        
        </ul>
        
    </li>
    
    
    
    
    
    
    <li class="">
        <a href="../blogs/blog.html" title="">Blog</a>
        
    </li>
    
    
    
    
    
    
    <li class="">
        <a href="about-us.html" title="">About Us</a>
        
    </li>
    
    
    
    
    
    
    <li class=" active">
        <a href="documentation.html" title="">Documentation</a>
        
    </li>
    
    
    
    
    
    
    <li class=" last">
        <a href="contact-us.html" title="">Contact us</a>
        
    </li>
    
    </ul>

    <!-- HEADER SEARCH -->
    <div class="header_search">
        <form action="https://tm-shopify048-wheels.myshopify.com/search" method="get" class="search-form" role="search">
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
  
      <li><span class="page-title">Documentation</span></li>
  
</ul>






    <div class="row sidebar_left ">

    <div class="column_center">
    <div id="main_content" class="col-sm-9">
    
    

<div class="page-scope">

  <div class="page_header">
    <h1 class="page_heading">Documentation</h1>
  </div>

  <div class="page_content">
    <div class="rte">
      <div class="documentation" style="text-align: left;">
<p>The following Documentation will help you better understand theme settings and configuration options. Please note: this documentation is related to the theme itself. If you need more information on working with Shopify please refer to <a href="http://docs.shopify.com/">Shopify official documentation</a>.</p>
<h2>Theme Features</h2>
<ol>
<li><b>Responsive design</b> - theme works fine on all resolutions starting from 320px.</li>
<li><b>Bootstrap framework</b> - theme layout and styles are based on popular CSS framework Bootstrap.</li>
<li><b>Theme settings</b> - theme is provided with various options that allow you to tune theme according to your needs.</li>
<li><b>Extended color options</b> - multiple color options selectors included so you can change theme colors the way you want.</li>
<li><b>Dropdown menu</b> - allows to display extra content in main navigation.</li>
<li><b>MailChimp newsletter</b> - theme has an integrated <a href="http://mailchimp.com/">MailChimp</a> newsletter system</li>
<li><b>Customers account</b> - theme allows customer registration and accounts.</li>
<li><b>Product image zoom</b> - view full product image in pop-up.</li>
<li><b>Contact form</b> - theme contains fully functional contacts page with Google map and contact form.</li>
<li><b>Currency switcher</b> - with single click allows to display product prices in desired currency.</li>
<li><b>Customizable slider</b> - with theme settings you can edit home page slider content.</li>
<li><b>Payment methods widget</b> - allows to display logos of the payment methods available for your store.</li>
</ol>
<h2>Theme settings</h2>
<h3>General</h3>
<p>Here you can select if you want to upload and use your logo image or display store name instead. Also you can define if you want to use custom logo for checkout pages. Last checkbox allows you to disable "Designed by" copyright notification from the store footer.</p>
<ul>
<li><b>Use custom logo</b> - allows you display image logo instead of store name.</li>
<li><b>Custom logo</b> - allows to upload custom logo image.</li>
<li><b>Use custom logo for checkout page</b> - display custom logo image at the checkout page.</li>
<li><b>Display copyright</b> - displays copyright notification in store footer if checked.</li>
</ul>
<img src="../../cdn.shopify.com/s/files/1/0286/8480/files/1-logo04ad.jpg?2259" />
<h3>Typography</h3>
<p>Allows to select font options for base font and heading tags. You can define font size, line height and font family. You can also add Google Font.</p>
<ul>
<li><b>Base Font</b> - font settings (font size, line height, font family) for the base body font. Base font is used for text paragraphs, lists, definition lists etc.</li>
<li><b>Links</b> - here you can define link colors</li>
<li><b>Page heading</b> - here you can define font styling for page headings. You can also define if you want to use custom Google Font font for website headings.</li>
<li><b>Product name</b> - allows to define font size and color for product names.</li>
</ul>
<img src="../../cdn.shopify.com/s/files/1/0286/8480/files/2-typohraphy4cb8.jpg?2260" />
<h3>Layout settings</h3>
<ul>
<li><b>Main Navigation</b> - select navigation to be used as theme main navigation.</li>
<li><b>Left/right sidebars</b> - options allow to enable/disable sidebars.</li>
<li><b>Best Sellers</b> - here you can select collection for Bestsellers block.</li>
<li><b>Homepage products listing</b> - allows to define Collection that will be displayed at the home page, number of products, number of columns, product images size.</li>
<li><b>Collection products listing</b> - allows to configure collection listing page. Set number of products, number of columns, product images size.</li>
<li><b>Breadcrumbs</b> - displays breadcrumbs if enabled.</li>
</ul>
<img src="../../cdn.shopify.com/s/files/1/0286/8480/files/3-layoutbbaa.jpg?2261" />
<h3>Style - Colors</h3>
<p>Color options allow you to define colors for various aspects of the theme. Every theme color can be changed here.</p>
<img src="../../cdn.shopify.com/s/files/1/0286/8480/files/4-colors0233.jpg?2262" />
<h3>Money Options</h3>
<p>Our themes are provided with currency switcher implemented.</p>
<ul>
<li><b>Show currency selector</b> - displays currency selector in store header if checked.</li>
<li><b>Money format</b> - allows to select prices display format for the store.</li>
<li><b>Currencies</b> - type currency codes divided by 'space' that you want to be available in your store.</li>
<li><b>Default currency</b> - select default store currency.</li>
</ul>
<img src="../../cdn.shopify.com/s/files/1/0315/6917/files/5-moneyc1fe.jpg?1645" />
<h3>Slider settings</h3>
<p>Here you can configure home page slider.</p>
<ul>
<li><b>Enable slider script</b> - if checked slider script will be initiated and slider will work. Otherwise all slides will be displayed as separate images. Useful to disable slider when you have a single slide.</li>
<li><b>Enable slide</b> - allows to enable/disable slides.</li>
<li><b>Image</b> - allows to upload slide image.</li>
<!-- <li><b>Caption</b> - slider captions consists of several lines and you can edit text for each of them. </li>
    <li><b>Caption button link</b> - allow to define slider 'read more' button link. </li> --></ul>
<img src="../../cdn.shopify.com/s/files/1/0286/8480/files/6-slider2650.jpg?2263" />
<h3>Custom blocks</h3>
<p>This section contain configuration settings for every custom block. You can define text, images, links for every banner.</p>
<img src="../../cdn.shopify.com/s/files/1/0286/8480/files/7-custom-blocksccbd.jpg?2264" />
<h3>Mailing List</h3>
<p>Here you can define MailChimp newsletter system for your store.</p>
<img src="../../cdn.shopify.com/s/files/1/0315/6917/files/8-mailing-list7437.jpg?1648" />
<h3>Payment methods</h3>
<p>Allows you to select what payment logos will be available at the checkout page.</p>
<p style="text-align: left;"><img src="../../cdn.shopify.com/s/files/1/0315/6917/files/9-payment96de.jpg?1649" /></p>
<h2>Additional information</h2>
<ul>
<li><a href="http://support.shopify.com/customer/portal/topics/34412-common-questions/articles">Common questions</a></li>
<li><a href="http://docs.shopify.com/manual/">Shopify user guide</a></li>
<li><a href="http://docs.shopify.com/themes">Shopify themes guide</a></li>
<li><a href="mailto:shopify@template-help.com">Customization services (shopify@template-help.com)</a></li>
</ul>
</div>
    </div>
  </div>
  
</div>
    
    </div>
    </div>

    
    <div class="column_left column col-sm-3">
    <div class="widget widget__collections">
  	<h3 class="widget_header">Collections</h3>
    <div class="widget_content">
        <ul class="list">
        
        <li class="accessories">
          <a href="../collections/accessories.html" title="Accessories">Accessories (8)</a>
        </li>
        
        <li class="sport-tyres">
          <a href="../collections/sport-tyres.html" title="Sport Tyres">Sport Tyres (8)</a>
        </li>
        
        <li class="summer-tyres">
          <a href="../collections/summer-tyres.html" title="Summer Tyres">Summer Tyres (10)</a>
        </li>
        
        <li class="wheels">
          <a href="../collections/wheels.html" title="Wheels">Wheels (18)</a>
        </li>
        
        <li class="winter-tyres">
          <a href="../collections/winter-tyres.html" title="Winter Tyres">Winter Tyres (10)</a>
        </li>
        
        </ul>
    </div>
</div>
    <div class="widget widget__types">
    <h3 class="widget_header">Product Types</h3>
    <div class="widget_content">
        <ul class="list">
        
            
            
            <li class="Accessories"><a href="../collections/types79cb.html?q=Accessories" title="Accessories">Accessories</a></li>
        
            
            
            <li class="Tyres"><a href="../collections/types773d.html?q=Tyres" title="Tyres">Tyres</a></li>
        
            
            
            <li class="Wheels"><a href="../collections/types3210.html?q=Wheels" title="Wheels">Wheels</a></li>
        
        </ul>
    </div>
</div>
    <div class="widget widget_best_sellers">
    <h3 class="widget_header">Best Sellers</h3>
    <div class="widget_content">
        <div class="product_listing_sidebar">
        
            <div class="product">

            <div class="product_img">  
                <a href="../products/dunlop-sp-sport-maxx-tt.html">
                <img src="../../cdn.shopify.com/s/files/1/0508/6409/products/dunlop_sp_sport_maxx_tt_1_mediumcfe9.png?v=1400671613" alt="Dunlop SP Sport Maxx TT" />
                </a>
            </div>

            <div class="product_info">
                <div class="product_name">
                    <a href="../products/dunlop-sp-sport-maxx-tt.html">Dunlop SP Sport Maxx TT</a>
                </div>
                <div class="product_price">
                    
                    <span class="money">199.00DT</span>
                    
                </div>
            </div>

            </div>
        
            <div class="product">

            <div class="product_img">  
                <a href="../products/excelsior-stahl-sport-17-e55-a1.html">
                <img src="../../cdn.shopify.com/s/files/1/0508/6409/products/excelsior_stahl-sport_17-e55-a1_1_mediumc9e2.png?v=1400671618" alt="Excelsior Stahl-Sport 17-E55-A1" />
                </a>
            </div>

            <div class="product_info">
                <div class="product_name">
                    <a href="../products/excelsior-stahl-sport-17-e55-a1.html">Excelsior Stahl-Sport 17-E55-A1</a>
                </div>
                <div class="product_price">
                    
                    <span class="money">60.00DT</span>
                    
                </div>
            </div>

            </div>
        
            <div class="product">

            <div class="product_img">  
                <a href="../products/fondmetal-5700.html">
                <img src="../../cdn.shopify.com/s/files/1/0508/6409/products/fondmetal_5700_1_mediumd26f.png?v=1400671625" alt="Fondmetal 5700" />
                </a>
            </div>

            <div class="product_info">
                <div class="product_name">
                    <a href="../products/fondmetal-5700.html">Fondmetal 5700</a>
                </div>
                <div class="product_price">
                    
                    <span class="money">78.00DT</span>
                    
                    <span class="money compare-at-price">100.00DT</span>
                    
                </div>
            </div>

            </div>
        
        </div>
    </div>
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
                    
                    <li ><a href="about-us.html" title="">About Us</a></li>
                    
                    <li class="active"><a href="documentation.html" title="">Documentation</a></li>
                    
                    <li ><a href="contact-us.html" title="">Contact us</a></li>
                    
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
                    <span>1-800-234-5677</span>
                    <span>1-800-234-5678</span>
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
Currency.money_with_currency_format[shopCurrency] = "DT{{amount}} DT";
Currency.money_format[shopCurrency] = "DT{{amount}}";
  
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

<!-- Mirrored from tm-shopify048-wheels.myshopify.com/pages/documentation by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Nov 2019 22:16:30 GMT -->
</html>