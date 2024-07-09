<?php include_once("php/_init.php");?><!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <?php include_once("php/_head.php");?>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="/manifest.webmanifest">
    <meta name="msapplication-config" content="/browserconfig.xml">

    <meta name="junction/config/environment" content="%7B%22modulePrefix%22%3A%22junction%22%2C%22environment%22%3A%22production%22%2C%22rootURL%22%3A%22%2F%22%2C%22locationType%22%3A%22history%22%2C%22EmberENV%22%3A%7B%22EXTEND_PROTOTYPES%22%3Afalse%2C%22FEATURES%22%3A%7B%7D%2C%22_APPLICATION_TEMPLATE_WRAPPER%22%3Afalse%2C%22_DEFAULT_ASYNC_OBSERVERS%22%3Atrue%2C%22_JQUERY_INTEGRATION%22%3Afalse%2C%22_NO_IMPLICIT_ROUTE_MODEL%22%3Atrue%2C%22_TEMPLATE_ONLY_GLIMMER_COMPONENTS%22%3Atrue%7D%2C%22APP%22%3A%7B%22name%22%3A%22junction%22%2C%22version%22%3A%220.0.0%2Bf4270af5%22%7D%2C%22JUNCTION_PASSWORD%22%3A%22%22%2C%22PLAUSIBLE_AUTH%22%3A%22%22%2C%22PLAUSIBLE_DOMAIN%22%3A%22%22%2C%22PUSHER_API_KEY%22%3A%22%22%2C%22PUSHER_CLUSTER%22%3A%22ap2%22%2C%22HIDE_POSTCODE_ATTRIBUTION%22%3A%22false%22%2C%22TribeENV%22%3A%7B%22API_URL%22%3A%22%22%7D%7D">
<meta name="theme-color" content="#41B3FF">
<link rel="apple-touch-icon-precomposed" href="/favicon.png" sizes="512x512">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="Junction">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <link integrity="" rel="stylesheet" href="/assets/vendor-6dbaff760ea716cec172e2899b33f4a8.css">
    <link integrity="" rel="stylesheet" href="/assets/junction-f389c6f8b630760b7a4c213aa430b490.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/fontawesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.1.2/tinymce.min.js"></script>

      <link rel="shortcut icon" href="/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="48x48" href="/favicon-48x48.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#fff">
    <meta name="application-name" content="junction">
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="/apple-touch-icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
    <link rel="apple-touch-icon" sizes="1024x1024" href="/apple-touch-icon-1024x1024.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="junction">
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="/apple-touch-startup-image-640x1136.png">
    <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="/apple-touch-startup-image-750x1334.png">
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="/apple-touch-startup-image-828x1792.png">
    <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="/apple-touch-startup-image-1125x2436.png">
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="/apple-touch-startup-image-1242x2208.png">
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)" href="/apple-touch-startup-image-1242x2688.png">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="/apple-touch-startup-image-1536x2048.png">
    <link rel="apple-touch-startup-image" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="/apple-touch-startup-image-1668x2224.png">
    <link rel="apple-touch-startup-image" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="/apple-touch-startup-image-1668x2388.png">
    <link rel="apple-touch-startup-image" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="/apple-touch-startup-image-2048x2732.png">
    <link rel="apple-touch-startup-image" media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)" href="/apple-touch-startup-image-1620x2160.png">
    <link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="/apple-touch-startup-image-1136x640.png">
    <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="/apple-touch-startup-image-1334x750.png">
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="/apple-touch-startup-image-1792x828.png">
    <link rel="apple-touch-startup-image" media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" href="/apple-touch-startup-image-2436x1125.png">
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" href="/apple-touch-startup-image-2208x1242.png">
    <link rel="apple-touch-startup-image" media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)" href="/apple-touch-startup-image-2688x1242.png">
    <link rel="apple-touch-startup-image" media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="/apple-touch-startup-image-2048x1536.png">
    <link rel="apple-touch-startup-image" media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="/apple-touch-startup-image-2224x1668.png">
    <link rel="apple-touch-startup-image" media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="/apple-touch-startup-image-2388x1668.png">
    <link rel="apple-touch-startup-image" media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="/apple-touch-startup-image-2732x2048.png">
    <link rel="apple-touch-startup-image" media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)" href="/apple-touch-startup-image-2160x1620.png">
    <link rel="icon" type="image/png" sizes="228x228" href="/coast-228x228.png">
    <meta name="msapplication-TileColor" content="#fff">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="msapplication-config" content="/browserconfig.xml">
    <link rel="yandex-tableau-widget" href="/yandex-browser-manifest.json">

  <?php include_once("php/_head_footer.php");?></head>
  <body style="overflow-x: hidden;">
    <div class="vh-100 w-100 d-flex align-items-center justify-content-center" id="loading">
      <div class="spinner-border text-secondary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/js/all.min.js"></script>
    <script src="https://unpkg.com/@root/passphrase"></script>
    <script src="/assets/vendor-e7744d86cfa0196a3349e0698e320e8a.js" integrity="sha256-LFdetWhdjs/BMq9/JzsNdhMZJEpz7M9Wa4wKlMm5vTw= sha512-3lBEmS7NL8mP1hMPGKGH3JlSNwEV7TXGqI2Ug+wz/0pMEWMEGdRchcJDEtmL6Hqa97jIYITzpm8Twkbl7D8rYA=="></script>
<script src="/assets/chunk.9818.da862b311768528e8021.js" integrity="sha256-M0wfwbdxj2OniQHeU64I5CBAzW8uA8J/MSCa0sW29LM= sha512-ei1YxPXmTbhaWHuMK2UEAPzEafaGJgSgn3nuORhxjojbV2f93mTkhV042nk1LmZSn0Firm1L/M4/3aksDXi7lA=="></script>
<script src="/assets/chunk.3524.2c6c7ff035f05889ba41.js" integrity="sha256-EkdLEK8KgzwErWbKtN+Ov2rJFqv/ONeVwCzcD3ukbo8= sha512-ibJQ//VJgZRw4YRl2Dzv9iOCoHN3/jFHTbQBtNHmkDQshiMareT4Mguh0wGH0NX3t7Vk5dNm7ypOR4Enw/dieA=="></script>
    <script src="/assets/junction-6de3403909a7710b9893c86804b56204.js" integrity="sha256-pfG/y88OmHPHAD44x/dYZ2MwnsNE1Cl+LLZ0kNOF6pw= sha512-dIckDwwIB095wO1lZ1MC5yhjl1/GgzOjKISJHTHonUy+nAvpAw9tjcj6ADtQFu0AMm0h0LDR7zth6GqMKkRSJg=="></script>
    <script>
    document.addEventListener('focusin', (e) => {
      if (e.target.closest(".tox-tinymce-aux, .moxman-window, .tam-assetmanager-root") !== null) {
        e.stopImmediatePropagation();
      }
    });
    </script>

    <script>
      window.intercomSettings = {
        api_base: "https://api-iam.intercom.io",
        app_id: "z4829flu",
        user_id: 'A4989E', // IMPORTANT: Replace "user.id" with the variable you use to capture the user's ID
        name: 'Akshay M.', // IMPORTANT: Replace "user.name" with the variable you use to capture the user's name
        email: 'cityowl@hey.com', // IMPORTANT: Replace "user.email" with the variable you use to capture the user's email address
        created_at: '1715262361', // IMPORTANT: Replace "user.createdAt" with the variable you use to capture the user's sign-up date
      };
    </script>


    <script>
      // We pre-filled your app ID in the widget URL: 'https://widget.intercom.io/widget/z4829flu'
      (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/z4829flu';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(document.readyState==='complete'){l();}else if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
    </script>

    
  <?php include_once("php/_body_footer.php");?></body>
</html>
