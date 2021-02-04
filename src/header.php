<!DOCTYPE html>
<html lang="pl-PL">

<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#163963">
    <meta name="description" content="SoftCraft">

    <!-- connect to domain of font files -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- optionally increase loading priority -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap">
    <!-- async CSS -->
    <link rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap">

    <link rel="preload" href="/blog/wp-content/themes/softcraft/style-non-critical.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

    <!-- no-JS fallback -->
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap">
        <link rel="stylesheet" href="/blog/wp-content/themes/softcraft/style.css"/>
    </noscript>

    <style type="text/css">
        body{margin:0;font-size:18px;color:#3A3B3C;line-height:1.44;font-family:"Open Sans", sans-serif;font-weight:400;background:#fff}main{margin-top:80px}@media screen and (min-width: 1024px){main{margin-top:80px;min-height:calc(100vh - 657px)}}img{max-width:100%}svg{max-width:100%;height:auto}h1,h2,h3,h4,h5{margin:0;line-height:1.22}h1{font-size:2.25rem;font-weight:400;min-height:132px}@media (min-width: 1200px){h1{font-size:54px;font-weight:600}}h2{font-size:2rem;font-weight:400}@media (min-width: 1200px){h2{font-size:42px}}h3{font-size:1.625rem;font-weight:400}@media (min-width: 1200px){h3{font-size:32px}}h4{font-size:1.125rem;font-weight:400}@media (min-width: 600px){h4{font-size:1.125rem}}h5{font-size:16px}p{margin:0.4rem 0;line-height:1.4;font-weight:300}a{text-decoration:none;color:#16AFBC}strong{font-weight:600}ul,ol{margin:0 0 0 20px;padding:0}html{box-sizing:border-box;-ms-overflow-style:scrollbar}*,*::before,*::after{box-sizing:inherit}.container,.container-fluid,.container-sm,.container-md,.container-lg,.container-xl{width:100%;padding-right:15px;padding-left:15px;margin-right:auto;margin-left:auto}.d-flex{display:flex}@media (min-width: 576px){.container,.container-sm{max-width:540px}}@media (min-width: 768px){.container,.container-sm,.container-md{max-width:90%}}@media (min-width: 992px){.container,.container-sm,.container-md,.container-lg{max-width:960px}}@media (min-width: 1200px){.container,.container-sm,.container-md,.container-lg,.container-xl{max-width:1140px}}.row{display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-right:-15px;margin-left:-15px}.row--reverted-col{flex-direction:column-reverse}@media (min-width: 768px){.row--reverted-col{flex-direction:initial}}.no-gutters{margin-right:0;margin-left:0}.no-gutters>.col,.no-gutters>[class*="col-"]{padding-right:0;padding-left:0}.col-1,.col-2,.col-3,.col-4,.col-5,.col-6,.col-7,.col-8,.col-9,.col-10,.col-11,.col-12,.col,.col-auto,.col-sm-1,.col-sm-2,.col-sm-3,.col-sm-4,.col-sm-5,.col-sm-6,.col-sm-7,.col-sm-8,.col-sm-9,.col-sm-10,.col-sm-11,.col-sm-12,.col-sm,.col-sm-auto,.col-md-1,.col-md-2,.col-md-3,.col-md-4,.col-md-5,.col-md-6,.col-md-7,.col-md-8,.col-md-9,.col-md-10,.col-md-11,.col-md-12,.col-md,.col-md-auto,.col-lg-1,.col-lg-2,.col-lg-3,.col-lg-4,.col-lg-5,.col-lg-6,.col-lg-7,.col-lg-8,.col-lg-9,.col-lg-10,.col-lg-11,.col-lg-12,.col-lg,.col-lg-auto,.col-xl-1,.col-xl-2,.col-xl-3,.col-xl-4,.col-xl-5,.col-xl-6,.col-xl-7,.col-xl-8,.col-xl-9,.col-xl-10,.col-xl-11,.col-xl-12,.col-xl,.col-xl-auto{position:relative;width:100%;padding-right:15px;padding-left:15px}.col{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.row-cols-1>*{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.row-cols-2>*{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.row-cols-3>*{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.row-cols-4>*{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.row-cols-5>*{-ms-flex:0 0 20%;flex:0 0 20%;max-width:20%}.row-cols-6>*{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}@media (min-width: 576px){.col-sm{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.row-cols-sm-1>*{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.row-cols-sm-2>*{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.row-cols-sm-3>*{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.row-cols-sm-4>*{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.row-cols-sm-5>*{-ms-flex:0 0 20%;flex:0 0 20%;max-width:20%}.row-cols-sm-6>*{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-sm-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-sm-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-sm-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-sm-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-sm-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-sm-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-sm-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-sm-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-sm-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-sm-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-sm-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-sm-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-sm-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}@media (min-width: 768px){.col-md{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.row-cols-md-1>*{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.row-cols-md-2>*{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.row-cols-md-3>*{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.row-cols-md-4>*{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.row-cols-md-5>*{-ms-flex:0 0 20%;flex:0 0 20%;max-width:20%}.row-cols-md-6>*{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-md-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-md-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-md-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-md-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-md-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-md-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-md-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-md-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-md-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-md-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-md-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-md-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-md-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}@media (min-width: 992px){.col-lg{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.row-cols-lg-1>*{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.row-cols-lg-2>*{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.row-cols-lg-3>*{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.row-cols-lg-4>*{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.row-cols-lg-5>*{-ms-flex:0 0 20%;flex:0 0 20%;max-width:20%}.row-cols-lg-6>*{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-lg-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-lg-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-lg-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-lg-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-lg-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-lg-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-lg-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-lg-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-lg-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-lg-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-lg-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-lg-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-lg-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}@media (min-width: 1200px){.col-xl{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%}.row-cols-xl-1>*{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}.row-cols-xl-2>*{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.row-cols-xl-3>*{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.row-cols-xl-4>*{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.row-cols-xl-5>*{-ms-flex:0 0 20%;flex:0 0 20%;max-width:20%}.row-cols-xl-6>*{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-xl-auto{-ms-flex:0 0 auto;flex:0 0 auto;width:auto;max-width:100%}.col-xl-1{-ms-flex:0 0 8.333333%;flex:0 0 8.333333%;max-width:8.333333%}.col-xl-2{-ms-flex:0 0 16.666667%;flex:0 0 16.666667%;max-width:16.666667%}.col-xl-3{-ms-flex:0 0 25%;flex:0 0 25%;max-width:25%}.col-xl-4{-ms-flex:0 0 33.333333%;flex:0 0 33.333333%;max-width:33.333333%}.col-xl-5{-ms-flex:0 0 41.666667%;flex:0 0 41.666667%;max-width:41.666667%}.col-xl-6{-ms-flex:0 0 50%;flex:0 0 50%;max-width:50%}.col-xl-7{-ms-flex:0 0 58.333333%;flex:0 0 58.333333%;max-width:58.333333%}.col-xl-8{-ms-flex:0 0 66.666667%;flex:0 0 66.666667%;max-width:66.666667%}.col-xl-9{-ms-flex:0 0 75%;flex:0 0 75%;max-width:75%}.col-xl-10{-ms-flex:0 0 83.333333%;flex:0 0 83.333333%;max-width:83.333333%}.col-xl-11{-ms-flex:0 0 91.666667%;flex:0 0 91.666667%;max-width:91.666667%}.col-xl-12{-ms-flex:0 0 100%;flex:0 0 100%;max-width:100%}}.section{padding:80px 0}@media (min-width: 1200px){.section{padding:120px 0}}.section--small{padding:80px}.section--main{display:flex;align-items:center}@media (min-width: 768px){.section--main{height:calc(100vh - 80px);min-height:750px;max-height:1440px}}.section--mobile-hide{display:none}@media (min-width: 768px){.section--mobile-hide{display:flex}}.section--bg-primary{background:#0070A7}.section--bg-tertiary{background:#FBFBFB}.section--pts{padding-top:60px}.section--pt-xxl{padding-top:120px}.section--pb-xxl{padding-bottom:120px}.section--ptn{padding-top:0}.section--pbn{padding-bottom:0}.section--separator{border-bottom:2px solid #fff}.navbar{display:flex;align-items:center;position:fixed;z-index:10;top:0;width:100%;height:80px;background:#0070A7;transition:all 0.5s ease}.navbar--reverted{background:#fff}.navbar--reverted .navbar__nav-desktop ul li a{color:#3A3B3C}.navbar--reverted .navbar__toggle--open .navbar__toggle-icon{background-color:transparent}.navbar--reverted .navbar__toggle-icon{background-color:#16AFBC}.navbar--reverted .navbar__toggle-icon:before,.navbar--reverted .navbar__toggle-icon:after{background-color:#16AFBC}.navbar__logo{height:28px}@media (min-width: 768px){.navbar__logo{height:34px}}.navbar .cls-1--reverted{fill:#16AFBC}.navbar .cls-2--reverted{fill:#1d1d1b}.navbar__logo-wrapper{display:inline-flex}.navbar__nav-mobile{position:fixed;width:100%;background:#fff;overflow:hidden;height:0;-webkit-transition:all 0.25s ease-in-out;transition:all 0.25s ease-in-out;top:80px;left:0}.navbar__nav-mobile ul{margin:0}.navbar__nav-mobile ul li{height:100%;line-height:48px;display:block;padding:0}.navbar__nav-mobile ul li.current_page_item>a{color:#16AFBC}.navbar__nav-mobile ul li a{font-size:22px;display:block;padding:0 40px;color:#3A3B3C}.navbar__nav-desktop{display:none;flex:1;justify-content:flex-end}.navbar__nav-desktop ul{display:flex;align-items:center;list-style:none}.navbar__nav-desktop ul li{padding-left:40px}.navbar__nav-desktop ul li a{font-size:22px;font-weight:400;color:#fff;transition:1s ease;border:2px solid transparent}.navbar__nav-desktop ul li a:hover{border-bottom:2px solid #16AFBC}.navbar__nav-desktop ul li.current_page_item a{border-bottom:2px solid #16AFBC}.navbar__toggle{display:flex;padding:8px 0 8px 10px;cursor:pointer;align-self:center;align-items:flex-end;flex-grow:1;flex-direction:column}@media only screen and (min-width: 1024px){.navbar__toggle{display:none}}.navbar__toggle--open i{background:transparent}.navbar__toggle--open i:before{top:0;transform:rotate(135deg)}.navbar__toggle--open i:after{top:0;transform:rotate(225deg)}.navbar__toggle-icon{display:inline-block;position:relative;top:0;width:26px;height:2px;background-color:#FBFBFB;transform:rotate(0);transition:transform 300ms 100ms}.navbar__toggle-icon:before,.navbar__toggle-icon:after{content:'';display:inline-block;position:absolute;width:26px;height:2px;background-color:#fff;transform:rotate(0);transition:transform 300ms 100ms}.navbar__toggle-icon:before{top:-6px}.navbar__toggle-icon:after{top:6px}@media only screen and (min-width: 1024px){.navbar__nav-mobile{display:none}.navbar__nav-desktop{display:flex}}.parent-pageid-25 .navbar ul>li:nth-of-type(2) a{border-bottom:2px solid #16AFBC}.hero{max-height:300px;margin:-60px auto 40px;display:flex}@media (min-width: 768px){.hero{max-height:480px;margin:0 0 0 auto}}.header--link{cursor:pointer;transition:1s all;font-size:24px;margin:60px}.header--link:hover{color:#0070A7}.header--active{color:#16AFBC}.header--secondary{color:#16AFBC}.header--white{color:#fff}.header--center{text-align:center}.header--center-mobile{text-align:center}@media (min-width: 768px){.header--center-mobile{text-align:left}}.header--mb-xs{margin-bottom:10px}.header__wrapper{display:flex;flex-direction:column;justify-content:center;height:100%;text-align:center;align-items:center}@media (min-width: 768px){.header__wrapper{text-align:initial;align-items:initial}}.header__wrapper--center{display:block;text-align:center}.header__wrapper--center .description{max-width:100%}.button{display:inline-flex;align-items:center;justify-content:center;height:48px;padding:0 40px;border-radius:30px;background:#fff;color:#16AFBC;font-size:18px;font-weight:600;text-align:center;cursor:pointer;transition:.5s all}@media (min-width: 1200px){.button{height:52px;padding:0 48px;font-size:20px}}.button:hover{opacity:.7}@media (min-width: 768px){.button--left-tablet{align-self:flex-start}}.button--bg{background:#16AFBC;color:#fff}.button--mt{margin-top:40px}
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src=""></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', '');
    </script>

    <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
    <header id="header" class="navbar">
        <div class="container d-flex">
            <a class="navbar__logo-wrapper" href="/blog" title="Softcraft – Crafting Digital Experience" aria-label="Softcraft – Crafting Digital Experience">
                <svg class="navbar__logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 228.01 42"><defs><style>.cls-1{fill:#ffffff}.cls-2{fill:#ffffff}</style></defs><path class="cls-1" d="M18.06 27.81a6.43 6.43 0 01-2.63 5.52c-1.74 1.32-4.25 1.92-7.5 1.92a17.78 17.78 0 01-7.89-1.49v-4.51a19.43 19.43 0 008.06 2c3.22 0 4.82-1 4.82-2.91a2.26 2.26 0 00-.53-1.55 6.08 6.08 0 00-1.75-1.29 29.29 29.29 0 00-3.4-1.51c-2.83-1.1-4.75-2.19-5.75-3.29a6.07 6.07 0 01-1.5-4.26 5.6 5.6 0 012.54-4.9A12.1 12.1 0 019.49 9.8a19.61 19.61 0 018.2 1.75L16 15.48a18.33 18.33 0 00-6.69-1.64q-4.12 0-4.13 2.35a2.39 2.39 0 001.08 2 24.19 24.19 0 004.7 2.2 21.62 21.62 0 014.42 2.15 6.55 6.55 0 012 2.25 6.61 6.61 0 01.68 3.02zM45.33 22.48q0 6-3.08 9.39t-8.6 3.38a11.73 11.73 0 01-6.08-1.6 10.19 10.19 0 01-4.08-4.42 15.17 15.17 0 01-1.42-6.75q0-6 3.07-9.33t8.64-3.35a10.83 10.83 0 018.44 3.43q3.12 3.42 3.11 9.25zm-17.84 0q0 8.51 6.28 8.5t6.22-8.5q0-8.41-6.26-8.42a5.36 5.36 0 00-4.77 2.18 11.11 11.11 0 00-1.47 6.24zM63.08 14.19h-6V34.8h-5.24V14.19h-4v-2.44l4-1.6v-1.6q0-4.35 2-6.45T60.13 0a16.52 16.52 0 015.41.91l-1.37 4a11.92 11.92 0 00-3.68-.67 3 3 0 00-2.59 1.1 5.58 5.58 0 00-.82 3.31v1.6h6zM79.11 31.03a12.69 12.69 0 003.82-.6v3.93a10.67 10.67 0 01-2.23.63 15.43 15.43 0 01-2.83.26q-7.38 0-7.38-7.82V14.19h-3.4v-2.31l3.6-1.91 1.8-5.19h3.2v5.46h7v3.95h-7v13.15a3.69 3.69 0 00.94 2.79 3.45 3.45 0 002.48.9z"/><path class="cls-2" d="M93.01 28.43q0-4.12-5.91-4.13v-4.24a7.89 7.89 0 004.45-1 3.51 3.51 0 001.46-3.08V9.06a5.69 5.69 0 012.41-5.09q2.41-1.64 7.23-1.64v4.05a6.28 6.28 0 00-3.68 1 3.31 3.31 0 00-1.14 2.74v6.6c0 2.94-1.7 4.71-5.09 5.28v.27c3.39.53 5.09 2.29 5.09 5.26v6.65a3.37 3.37 0 001.13 2.75 6 6 0 003.69 1v4.06q-5.13 0-7.39-1.74t-2.25-5.5zM117.55 35.25c-3.72 0-6.54-1.09-8.47-3.25s-2.9-5.29-2.9-9.34 1-7.31 3-9.53 4.94-3.33 8.76-3.33a16.47 16.47 0 017 1.44l-1.58 4.2a15.77 15.77 0 00-5.46-1.29q-6.37 0-6.38 8.46c0 2.76.53 4.82 1.59 6.21a5.51 5.51 0 004.65 2.08 13.29 13.29 0 006.6-1.74v4.56a10.29 10.29 0 01-3 1.17 17.61 17.61 0 01-3.81.36zM143.15 9.8a12.46 12.46 0 012.6.22l-.51 4.86a9.74 9.74 0 00-2.31-.26 6.7 6.7 0 00-5.08 2 7.4 7.4 0 00-1.94 5.31V34.8h-5.22V10.24h4.09l.69 4.33h.26a9.86 9.86 0 013.19-3.49 7.63 7.63 0 014.23-1.28zM165.34 34.8l-1-3.42h-.18a10.09 10.09 0 01-3.58 3.06 11.32 11.32 0 01-4.62.81 7.8 7.8 0 01-5.65-2 7.32 7.32 0 01-2-5.53 6.5 6.5 0 012.82-5.73c1.88-1.28 4.75-2 8.6-2.11l4.24-.13v-1.27a5 5 0 00-1.1-3.52 4.47 4.47 0 00-3.41-1.17 11.76 11.76 0 00-3.62.56 27.11 27.11 0 00-3.35 1.3l-1.69-3.73a17.87 17.87 0 014.37-1.59 20.33 20.33 0 014.49-.54c3.13 0 5.48.68 7.07 2s2.39 3.5 2.39 6.42V34.8zm-7.77-3.55a6.46 6.46 0 004.56-1.6 5.74 5.74 0 001.72-4.45v-2.12l-3.15.13a10.79 10.79 0 00-5.36 1.23 3.76 3.76 0 00-1.68 3.37 3.26 3.26 0 001 2.54 4.18 4.18 0 002.91.9zM188.35 14.19h-6V34.8h-5.25V14.19h-4v-2.44l4-1.6v-1.6q0-4.35 2-6.45t6.24-2.1a16.62 16.62 0 015.42.91l-1.38 4a11.92 11.92 0 00-3.69-.63 3 3 0 00-2.58 1.1 5.58 5.58 0 00-.81 3.3v1.6h6zM204.35 31.03a12.69 12.69 0 003.82-.6v3.93a10.67 10.67 0 01-2.23.63 15.43 15.43 0 01-2.83.26q-7.43 0-7.42-7.82V14.19h-3.36v-2.31l3.6-1.91 1.78-5.19h3.22v5.46h7v3.95h-7v13.15a3.69 3.69 0 00.94 2.79 3.45 3.45 0 002.48.9zM222.41 35.25a5.89 5.89 0 01-2.21 5.09q-2.21 1.62-7.07 1.66v-4.06a5.75 5.75 0 003.29-.86 3.27 3.27 0 001.17-2.87v-5.82a6.52 6.52 0 011.18-4.16 6.15 6.15 0 013.91-1.93v-.27c-3.39-.57-5.09-2.34-5.09-5.28v-6.6a3.5 3.5 0 00-1-2.74 5.41 5.41 0 00-3.45-1V2.33q5 0 7.12 1.7t2.15 5.62v6.37a3.49 3.49 0 001.41 3.15 7.58 7.58 0 004.19.94v4.24a7.56 7.56 0 00-4.16.94 3.53 3.53 0 00-1.44 3.19z"/></svg>
            </a>
            <nav class="navbar__nav-desktop">
                <?php wp_nav_menu(array('theme_location' => 'nav-menu', 'container' => false)); ?>
            </nav>
            <nav id="navbar__nav-mobile" class="navbar__nav-mobile">
                <?php wp_nav_menu(array('theme_location' => 'nav-menu', 'container' => false)); ?>
            </nav>
            <div id="navbar__toggle" class="navbar__toggle" onclick="slideToggle()"><i class="navbar__toggle-icon"></i></div>
        </div>
    </header>

    <main>