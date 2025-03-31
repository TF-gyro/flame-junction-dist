<?php include_once("php/_init.php");?><!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
  <head>
    <meta charset="utf-8">
    <?php include_once("php/_head.php");?>
    
    <meta property="og:image" content="/assets/img/cover.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="/manifest.webmanifest">
    <meta name="msapplication-config" content="/browserconfig.xml">

    <meta name="junction/config/environment" content="%7B%22modulePrefix%22%3A%22junction%22%2C%22environment%22%3A%22production%22%2C%22rootURL%22%3A%22%2F%22%2C%22locationType%22%3A%22history%22%2C%22EmberENV%22%3A%7B%22EXTEND_PROTOTYPES%22%3Afalse%2C%22FEATURES%22%3A%7B%7D%2C%22_APPLICATION_TEMPLATE_WRAPPER%22%3Afalse%2C%22_DEFAULT_ASYNC_OBSERVERS%22%3Atrue%2C%22_JQUERY_INTEGRATION%22%3Afalse%2C%22_NO_IMPLICIT_ROUTE_MODEL%22%3Atrue%2C%22_TEMPLATE_ONLY_GLIMMER_COMPONENTS%22%3Atrue%7D%2C%22APP%22%3A%7B%22name%22%3A%22junction%22%2C%22version%22%3A%22v1.2.3%2B9cfb3e40%22%7D%2C%22TribeENV%22%3A%7B%7D%7D">
<meta name="theme-color" content="#41B3FF">
<link rel="apple-touch-icon-precomposed" href="/favicon.png" sizes="512x512">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-title" content="Junction">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <link integrity="" rel="stylesheet" href="/assets/vendor.css">
    <link integrity="" rel="stylesheet" href="/assets/junction.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/css/fontawesome.min.css">
    <script defer data-domain="junction.express" src="https://plausible.io/js/script.js"></script>
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
  <body style="overflow-x: hidden">
    <div class="vh-100 w-100 d-flex align-items-center justify-content-center" id="loadingHTML">
      <div class="spinner-border text-primary" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.5.2/js/all.min.js"></script>
    <script src="https://unpkg.com/@root/passphrase"></script>
    <script src="/assets/vendor.js" integrity="sha256-Xi+YZWYq2k5VLgBZFCLoK2QcDGzRMibSiDDxncZC1tE= sha512-Nq/H5keNzqwftkyh3QksdVM5najlB2zA/BbVzZc7iOVGjbZYv/Ztny2W+nTLCbDpfvT6cKCvVeHqO7wdGd7qeQ=="></script>
<script src="/assets/chunk.115.dd957a5f4a9a3e52623f.js" integrity="sha256-zBjl0ao4NCOT1aoZUvuzcWuiC7CXV1iTMMocn1BNomI= sha512-3sgwrlPMCSmPLZhRZjMz6famojs9F3X2lTQ1f7pmptOBo6ql0UxEiGihu8EGXhA7HUSxX5aYcNVo9CDwP6hUYg=="></script>
<script src="/assets/chunk.524.592eae02e55a71294993.js" integrity="sha256-g4AgN7PK3rGygDbnRwd+qzgxJIxDEuv5SCbzKzlYxUU= sha512-dheTBqTs35Z1kQbzHgPnUxw662ICor29gEmOmaVBKnc0+oilaSMvTUqueX0aK/do3xjMHeEmHjlqkOSYbK+ciA=="></script>
    <script src="/assets/junction.js" integrity="sha256-/RNF3F2QDWUUo9FFbgbd4wTdMV6OiDUoUuBwQnwasvc= sha512-GSiY0bN3XrzMdj5gqlyc3ZuftmJIN3UZfVJwXpCiISqDR1byfJFbGULJ8xoDY6ACmd338EmMJgx6S/ZDCH1PhA=="></script>
    <script>
      document.addEventListener("focusin", (e) => {
        if (
          e.target.closest(
            ".tox-tinymce-aux, .moxman-window, .tam-assetmanager-root",
          ) !== null
        ) {
          e.stopImmediatePropagation();
        }
      });
    </script>

    
  <?php include_once("php/_body_footer.php");?></body>
</html>
