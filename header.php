<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<link rel="stylesheet" href="<?php print STYLES_DIR . 'main.min.css'; ?>">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<!--[if lt IE 9]>
<script src="/assets/app.ie.min.js"></script>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- PS async widget loader - place inside <head> tag --> 
<script type="text/javascript">
try{pswtb}catch(ex){pswtb={}}if(!pswtb.loader){pswtb.loader={lsc:[],waitLoad:function(){var e= pswtb.loader;if(e.finish){for(var t=0;t<e.lsc.length;t++)e.finish(e.lsc[t].wcid);window .clearInterval(e.waitLoadTimer);e.waitLoadTimer=null}else{if(!e.waitLoadTimer) e.waitLoadTimer= window.setInterval(e.waitLoad,20)}},show:function(e){for(var t=0;t<this.lsc.length;t++)if(this .lsc[t].wcid===e.widgetConfigurationId){this.lsc[t].ops.push(e);return}var n=document
.createElement("script");n.type="text/javascript";var r=e.server;n.language="javascript";n.src= (r?(r.match(/\/\//)?"":"//")+r+(r.charAt(r.length-1)==="/"?"":"/"):"//embedded.pricespider.com/") +"WidgetScript.psjs?d=al&wc="+e.widgetConfigurationId;this.lsc.push({wcid:e. widgetConfigurationId,ops:[e]});if(navigator.userAgent.match(/msie [6-7]/i)){document.write('<' +'script type="'+n.type+'" src="'+n.src.replace(/d=al&/i,"")+'"><'+"/script>");this.waitLoad(); return}var i=navigator.userAgent.match(/msie [8-9]/i);n.async=true;if(i)n.onreadystatechange=
new Function("if ((/loaded|completed/i).test(this.readyState)) pswtb.loader.finish('"+e. widgetConfigurationId+"');");else n.onload=new Function("pswtb.loader.finish('"+e. widgetConfigurationId+"');");(i?document.getElementsByTagName("head")[0]:document.body) .appendChild(n)}}}
</script>
<!-- End of PS async widget loader -->


<!--<script src="http://www.pioneerelectronics.com/piocda/templates/V5/javascript/vendor/pricespider-wtb.js"></script>-->
<!-- PS async widget loader -->
<script type="text/javascript">try{pswtb}catch(ex){pswtb={}}if(!pswtb.loader){pswtb.loader={lsc:[],waitLoad:function(){var e=pswtb.loader;if(e.finish){for(var t=0;t<e.lsc.length;t++)e.finish(e.lsc[t].wcid);window.clearInterval(e.waitLoadTimer);e.waitLoadTimer=null}else{if(!e.waitLoadTimer) e.waitLoadTimer=window.setInterval(e.waitLoad,20)}},show:function(e){for(var t=0;t<this.lsc.length;t++)if(this.lsc[t].wcid===e.widgetConfigurationId){this.lsc[t].ops.push(e);return}var n=document.createElement("script");n.type="text/javascript";var r=e.server;n.language="javascript";n.src=(r?(r.match(/\/\//)?"":"//")+r+(r.charAt(r.length-1)==="/"?"":"/"):"//embedded.pricespider.com/")+"WidgetScript.psjs?d=al&wc="+e.widgetConfigurationId;this.lsc.push({wcid:e.widgetConfigurationId,ops:[e]});if(navigator.userAgent.match(/msie [6-7]/i)){document.write('<'+'script type="'+n.type+'" src="'+n.src.replace(/d=al&/i,"")+'"><'+"/script>");this.waitLoad();return}var i=navigator.userAgent.match(/msie [8-9]/i);n.async=true;if(i)n.onreadystatechange=new Function("if ((/loaded|completed/i).test(this.readyState)) pswtb.loader.finish('"+e.widgetConfigurationId+"');");else n.onload=new Function("pswtb.loader.finish('"+e.widgetConfigurationId+"');");(i?document.getElementsByTagName("head")[0]:document.body).appendChild(n)}}}</script>
<!-- End of PS async widget loader -->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '871722699638521');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=871722699638521&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WBT9QB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WBT9QB');</script>
<!-- End Google Tag Manager -->

<!-- IDG Pixel Code -->
<img src="http://pubads.g.doubleclick.net/activity;xsp=231656;ord=1?" width=1 height=1 border=0/>
</noscript>

<?php wp_head(); ?>

</head>

<body class="fs-grid" id="site-<?php echo get_current_blog_id() ?>">
  <?php include locate_template('parts/nav-mobile.php'); ?>
  <div id="wrapper">
    <?php include locate_template('parts/nav.php'); ?>
    <div id="content">
