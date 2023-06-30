﻿<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Eagle Physiocare</title>
<link rel="shortcut icon" href="images/logo/LOGO1.png" type="image/x-icon">

<link rel="stylesheet" href="css/glightbox.min.css">
<link rel="stylesheet" href="css/animate.css">
<!-- <link rel="stylesheet" href="css/css.css"> -->
<link rel="stylesheet" href="css/tailwind.css">
<link rel="stylesheet" href="css/daisyUI.css">
<script src="js/tailwindcdn.js"></script>
<script src="js/wow.min.js"></script>

<style>
  .myfontsize{
    font-size:20px;
  }
  .size18{
    font-size:16px;
    color:#a9a9a9;
    font-weight:bold;
  }
</style>

<script>
      // ===== wow js
      new WOW().init();
    </script>

<script defer="" src="alpinejs@3.10.2/dist/cdn.min.js"></script>
<?php include 'config.php';?>
</head>
<body x-data="
      {
        scrolledFromTop: false
      }
    " x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false" @scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false" class="a0 dark:a1">

<header x-data="
        {
          navbarOpen: false,
          dropdownOpen: false
        }
      " :class="scrolledFromTop ? 'a0 dark:a1 a2 dark:a2 a3 a4' : 'a0 dark:a1' " class="a5 a6 a7 a8 a9 aa wow fadeInUp" data-wow-delay=".2s">
<div class="ab">
<div class="a6 ac a7 ad ae">
<div class="af ag ah">
<a href="index.php" :class="scrolledFromTop ? 'ai lg:aj' : 'ak lg:ai' " class="a5 al">
<img src="images/logo/iicon.png" alt="logo" class="a5 dark:am">
<img src="images/logo/iicon.png" alt="logo" class="a5 am dark:al">
</a>
</div>
<div class="a6 af an a7 a5">
<div>
<button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive' " id="navbarToggler" class="al ao ap aq/2 ar/2 lg:am focus:as at au av[6px] aw">
<span :class="navbarOpen && 'ax ay[7px]' " class="ae az[30px] aA[2px] aB[6px] al aC dark:a0"></span>
<span :class="navbarOpen && 'aD' " class="ae az[30px] aA[2px] aB[6px] al aC dark:a0"></span>
<span :class="navbarOpen && 'ay[-8px] aE[135deg]' " class="ae az[30px] aA[2px] aB[6px] al aC dark:a0"></span>
</button>
<nav :class="!navbarOpen && 'am' " id="navbarCollapse" class="ao aF lg:aG aH a0 dark:aC aI aw aJ[250px] a5 lg:aK dark:lg:aK lg:ah lg:a5 ap aL lg:al lg:aM lg:aN">
<ul class="aO lg:a6">
<li>
<a href="index" :class="scrolledFromTop ? 'aj lg:aP' : 'aj lg:aQ' " class="scroll-menu aR aS aT hover:aU lg:aV a6 lg:aW xl:aX">
Home
</a>
</li>
<li>
<a href="#about" :class="scrolledFromTop ? 'aj lg:aP' : 'aj lg:aQ' " class="scroll-menu aR aS aT hover:aU lg:aV a6 lg:aW xl:aX">
About Us
</a>
</li>
<li>
<a href="#pricing" :class="scrolledFromTop ? 'aj lg:aP' : 'aj lg:aQ' " class="scroll-menu aR aS aT hover:aU lg:aV a6 lg:aW xl:aX">
Services
</a>
</li>
<li>
<a href="#testimonial" :class="scrolledFromTop ? 'aj lg:aP' : 'aj lg:aQ' " class="scroll-menu aR aS aT hover:aU lg:aV a6 lg:aW xl:aX">
Reviews
</a>
</li>
<li>
<a href="bloggrid.php" :class="scrolledFromTop ? 'aj lg:aP' : 'aj lg:aQ' " class="scroll-menu aR aS aT hover:aU lg:aV a6 lg:aW xl:aX">
Articles
</a>
</li>
<li class="ae aY submenu-item">
<a href="index.php#contact"  :class="scrolledFromTop ? 'aj lg:aP' : 'aj lg:aQ' " class="aR aT group-hover:aU lg:aV lg:aZ lg:a_ a6 lg:a10 xl:aX ">
Contact
</a>
</div>
</li>
</ul>
</nav>
</div>
<label for="darkToggler" class="a1v a1w a1x md:a1y md:a1z a1A a6 a7 a1p a1B dark:a1C a1j dark:a1k">
<input type="checkbox" name="darkToggler" id="darkToggler" class="a1D" aria-label="darkToggler" checked>
<svg viewbox="0 0 23 23" class="a1E dark:am a1F a1G md:a1H md:a1I" fill="none">
<path d="M9.55078 1.5C5.80078 1.5 1.30078 5.25 1.30078 11.25C1.30078 17.25 5.80078 21.75 11.8008 21.75C17.8008 21.75 21.5508 17.25 21.5508 13.5C13.3008 18.75 4.30078 9.75 9.55078 1.5Z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
</svg>
<svg viewbox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="am dark:al a1F a1G md:a1H md:a1I">
<mask id="path-1-inside-1_977:1934" fill="white">
<path d="M12.0508 16.5C10.8573 16.5 9.71271 16.0259 8.8688 15.182C8.02489 14.3381 7.55078 13.1935 7.55078 12C7.55078 10.8065 8.02489 9.66193 8.8688 8.81802C9.71271 7.97411 10.8573 7.5 12.0508 7.5C13.2443 7.5 14.3888 7.97411 15.2328 8.81802C16.0767 9.66193 16.5508 10.8065 16.5508 12C16.5508 13.1935 16.0767 14.3381 15.2328 15.182C14.3888 16.0259 13.2443 16.5 12.0508 16.5ZM12.0508 18C13.6421 18 15.1682 17.3679 16.2934 16.2426C17.4186 15.1174 18.0508 13.5913 18.0508 12C18.0508 10.4087 17.4186 8.88258 16.2934 7.75736C15.1682 6.63214 13.6421 6 12.0508 6C10.4595 6 8.93336 6.63214 7.80814 7.75736C6.68292 8.88258 6.05078 10.4087 6.05078 12C6.05078 13.5913 6.68292 15.1174 7.80814 16.2426C8.93336 17.3679 10.4595 18 12.0508 18ZM12.0508 0C12.2497 0 12.4405 0.0790176 12.5811 0.21967C12.7218 0.360322 12.8008 0.551088 12.8008 0.75V3.75C12.8008 3.94891 12.7218 4.13968 12.5811 4.28033C12.4405 4.42098 12.2497 4.5 12.0508 4.5C11.8519 4.5 11.6611 4.42098 11.5205 4.28033C11.3798 4.13968 11.3008 3.94891 11.3008 3.75V0.75C11.3008 0.551088 11.3798 0.360322 11.5205 0.21967C11.6611 0.0790176 11.8519 0 12.0508 0V0ZM12.0508 19.5C12.2497 19.5 12.4405 19.579 12.5811 19.7197C12.7218 19.8603 12.8008 20.0511 12.8008 20.25V23.25C12.8008 23.4489 12.7218 23.6397 12.5811 23.7803C12.4405 23.921 12.2497 24 12.0508 24C11.8519 24 11.6611 23.921 11.5205 23.7803C11.3798 23.6397 11.3008 23.4489 11.3008 23.25V20.25C11.3008 20.0511 11.3798 19.8603 11.5205 19.7197C11.6611 19.579 11.8519 19.5 12.0508 19.5ZM24.0508 12C24.0508 12.1989 23.9718 12.3897 23.8311 12.5303C23.6905 12.671 23.4997 12.75 23.3008 12.75H20.3008C20.1019 12.75 19.9111 12.671 19.7705 12.5303C19.6298 12.3897 19.5508 12.1989 19.5508 12C19.5508 11.8011 19.6298 11.6103 19.7705 11.4697C19.9111 11.329 20.1019 11.25 20.3008 11.25H23.3008C23.4997 11.25 23.6905 11.329 23.8311 11.4697C23.9718 11.6103 24.0508 11.8011 24.0508 12ZM4.55078 12C4.55078 12.1989 4.47176 12.3897 4.33111 12.5303C4.19046 12.671 3.99969 12.75 3.80078 12.75H0.800781C0.601869 12.75 0.411103 12.671 0.270451 12.5303C0.129799 12.3897 0.0507813 12.1989 0.0507812 12C0.0507813 11.8011 0.129799 11.6103 0.270451 11.4697C0.411103 11.329 0.601869 11.25 0.800781 11.25H3.80078C3.99969 11.25 4.19046 11.329 4.33111 11.4697C4.47176 11.6103 4.55078 11.8011 4.55078 12ZM20.5363 3.5145C20.6769 3.65515 20.7559 3.84588 20.7559 4.04475C20.7559 4.24362 20.6769 4.43435 20.5363 4.575L18.4153 6.6975C18.3455 6.76713 18.2628 6.82235 18.1717 6.86C18.0806 6.89765 17.983 6.91699 17.8845 6.91692C17.6855 6.91678 17.4947 6.83758 17.354 6.69675C17.2844 6.62702 17.2292 6.54425 17.1915 6.45318C17.1539 6.36211 17.1345 6.26452 17.1346 6.16597C17.1348 5.96695 17.214 5.77613 17.3548 5.6355L19.4758 3.5145C19.6164 3.3739 19.8072 3.29491 20.006 3.29491C20.2049 3.29491 20.3956 3.3739 20.5363 3.5145ZM6.74678 17.304C6.88738 17.4446 6.96637 17.6354 6.96637 17.8342C6.96637 18.0331 6.88738 18.2239 6.74678 18.3645L4.62578 20.4855C4.48433 20.6221 4.29488 20.6977 4.09823 20.696C3.90158 20.6943 3.71347 20.6154 3.57442 20.4764C3.43536 20.3373 3.35648 20.1492 3.35478 19.9526C3.35307 19.7559 3.42866 19.5665 3.56528 19.425L5.68628 17.304C5.82693 17.1634 6.01766 17.0844 6.21653 17.0844C6.4154 17.0844 6.60614 17.1634 6.74678 17.304ZM20.5363 20.4855C20.3956 20.6261 20.2049 20.7051 20.006 20.7051C19.8072 20.7051 19.6164 20.6261 19.4758 20.4855L17.3548 18.3645C17.2182 18.223 17.1426 18.0336 17.1443 17.8369C17.146 17.6403 17.2249 17.4522 17.3639 17.3131C17.503 17.1741 17.6911 17.0952 17.8877 17.0935C18.0844 17.0918 18.2738 17.1674 18.4153 17.304L20.5363 19.425C20.6769 19.5656 20.7559 19.7564 20.7559 19.9552C20.7559 20.1541 20.6769 20.3449 20.5363 20.4855ZM6.74678 6.6975C6.60614 6.8381 6.4154 6.91709 6.21653 6.91709C6.01766 6.91709 5.82693 6.8381 5.68628 6.6975L3.56528 4.575C3.49365 4.50582 3.43651 4.42306 3.39721 4.33155C3.3579 4.24005 3.33721 4.14164 3.33634 4.04205C3.33548 3.94247 3.35445 3.84371 3.39216 3.75153C3.42988 3.65936 3.48557 3.57562 3.55598 3.5052C3.6264 3.43478 3.71014 3.37909 3.80232 3.34138C3.89449 3.30367 3.99325 3.2847 4.09283 3.28556C4.19242 3.28643 4.29083 3.30712 4.38233 3.34642C4.47384 3.38573 4.5566 3.44287 4.62578 3.5145L6.74678 5.6355C6.81663 5.70517 6.87204 5.78793 6.90985 5.87905C6.94766 5.97017 6.96712 6.06785 6.96712 6.1665C6.96712 6.26515 6.94766 6.36283 6.90985 6.45395C6.87204 6.54507 6.81663 6.62783 6.74678 6.6975Z"></path>
</mask>
<path d="M12.0508 16.5C10.8573 16.5 9.71271 16.0259 8.8688 15.182C8.02489 14.3381 7.55078 13.1935 7.55078 12C7.55078 10.8065 8.02489 9.66193 8.8688 8.81802C9.71271 7.97411 10.8573 7.5 12.0508 7.5C13.2443 7.5 14.3888 7.97411 15.2328 8.81802C16.0767 9.66193 16.5508 10.8065 16.5508 12C16.5508 13.1935 16.0767 14.3381 15.2328 15.182C14.3888 16.0259 13.2443 16.5 12.0508 16.5ZM12.0508 18C13.6421 18 15.1682 17.3679 16.2934 16.2426C17.4186 15.1174 18.0508 13.5913 18.0508 12C18.0508 10.4087 17.4186 8.88258 16.2934 7.75736C15.1682 6.63214 13.6421 6 12.0508 6C10.4595 6 8.93336 6.63214 7.80814 7.75736C6.68292 8.88258 6.05078 10.4087 6.05078 12C6.05078 13.5913 6.68292 15.1174 7.80814 16.2426C8.93336 17.3679 10.4595 18 12.0508 18ZM12.0508 0C12.2497 0 12.4405 0.0790176 12.5811 0.21967C12.7218 0.360322 12.8008 0.551088 12.8008 0.75V3.75C12.8008 3.94891 12.7218 4.13968 12.5811 4.28033C12.4405 4.42098 12.2497 4.5 12.0508 4.5C11.8519 4.5 11.6611 4.42098 11.5205 4.28033C11.3798 4.13968 11.3008 3.94891 11.3008 3.75V0.75C11.3008 0.551088 11.3798 0.360322 11.5205 0.21967C11.6611 0.0790176 11.8519 0 12.0508 0V0ZM12.0508 19.5C12.2497 19.5 12.4405 19.579 12.5811 19.7197C12.7218 19.8603 12.8008 20.0511 12.8008 20.25V23.25C12.8008 23.4489 12.7218 23.6397 12.5811 23.7803C12.4405 23.921 12.2497 24 12.0508 24C11.8519 24 11.6611 23.921 11.5205 23.7803C11.3798 23.6397 11.3008 23.4489 11.3008 23.25V20.25C11.3008 20.0511 11.3798 19.8603 11.5205 19.7197C11.6611 19.579 11.8519 19.5 12.0508 19.5ZM24.0508 12C24.0508 12.1989 23.9718 12.3897 23.8311 12.5303C23.6905 12.671 23.4997 12.75 23.3008 12.75H20.3008C20.1019 12.75 19.9111 12.671 19.7705 12.5303C19.6298 12.3897 19.5508 12.1989 19.5508 12C19.5508 11.8011 19.6298 11.6103 19.7705 11.4697C19.9111 11.329 20.1019 11.25 20.3008 11.25H23.3008C23.4997 11.25 23.6905 11.329 23.8311 11.4697C23.9718 11.6103 24.0508 11.8011 24.0508 12ZM4.55078 12C4.55078 12.1989 4.47176 12.3897 4.33111 12.5303C4.19046 12.671 3.99969 12.75 3.80078 12.75H0.800781C0.601869 12.75 0.411103 12.671 0.270451 12.5303C0.129799 12.3897 0.0507813 12.1989 0.0507812 12C0.0507813 11.8011 0.129799 11.6103 0.270451 11.4697C0.411103 11.329 0.601869 11.25 0.800781 11.25H3.80078C3.99969 11.25 4.19046 11.329 4.33111 11.4697C4.47176 11.6103 4.55078 11.8011 4.55078 12ZM20.5363 3.5145C20.6769 3.65515 20.7559 3.84588 20.7559 4.04475C20.7559 4.24362 20.6769 4.43435 20.5363 4.575L18.4153 6.6975C18.3455 6.76713 18.2628 6.82235 18.1717 6.86C18.0806 6.89765 17.983 6.91699 17.8845 6.91692C17.6855 6.91678 17.4947 6.83758 17.354 6.69675C17.2844 6.62702 17.2292 6.54425 17.1915 6.45318C17.1539 6.36211 17.1345 6.26452 17.1346 6.16597C17.1348 5.96695 17.214 5.77613 17.3548 5.6355L19.4758 3.5145C19.6164 3.3739 19.8072 3.29491 20.006 3.29491C20.2049 3.29491 20.3956 3.3739 20.5363 3.5145ZM6.74678 17.304C6.88738 17.4446 6.96637 17.6354 6.96637 17.8342C6.96637 18.0331 6.88738 18.2239 6.74678 18.3645L4.62578 20.4855C4.48433 20.6221 4.29488 20.6977 4.09823 20.696C3.90158 20.6943 3.71347 20.6154 3.57442 20.4764C3.43536 20.3373 3.35648 20.1492 3.35478 19.9526C3.35307 19.7559 3.42866 19.5665 3.56528 19.425L5.68628 17.304C5.82693 17.1634 6.01766 17.0844 6.21653 17.0844C6.4154 17.0844 6.60614 17.1634 6.74678 17.304ZM20.5363 20.4855C20.3956 20.6261 20.2049 20.7051 20.006 20.7051C19.8072 20.7051 19.6164 20.6261 19.4758 20.4855L17.3548 18.3645C17.2182 18.223 17.1426 18.0336 17.1443 17.8369C17.146 17.6403 17.2249 17.4522 17.3639 17.3131C17.503 17.1741 17.6911 17.0952 17.8877 17.0935C18.0844 17.0918 18.2738 17.1674 18.4153 17.304L20.5363 19.425C20.6769 19.5656 20.7559 19.7564 20.7559 19.9552C20.7559 20.1541 20.6769 20.3449 20.5363 20.4855ZM6.74678 6.6975C6.60614 6.8381 6.4154 6.91709 6.21653 6.91709C6.01766 6.91709 5.82693 6.8381 5.68628 6.6975L3.56528 4.575C3.49365 4.50582 3.43651 4.42306 3.39721 4.33155C3.3579 4.24005 3.33721 4.14164 3.33634 4.04205C3.33548 3.94247 3.35445 3.84371 3.39216 3.75153C3.42988 3.65936 3.48557 3.57562 3.55598 3.5052C3.6264 3.43478 3.71014 3.37909 3.80232 3.34138C3.89449 3.30367 3.99325 3.2847 4.09283 3.28556C4.19242 3.28643 4.29083 3.30712 4.38233 3.34642C4.47384 3.38573 4.5566 3.44287 4.62578 3.5145L6.74678 5.6355C6.81663 5.70517 6.87204 5.78793 6.90985 5.87905C6.94766 5.97017 6.96712 6.06785 6.96712 6.1665C6.96712 6.26515 6.94766 6.36283 6.90985 6.45395C6.87204 6.54507 6.81663 6.62783 6.74678 6.6975Z" fill="black" stroke="white" stroke-width="2" mask="url(#path-1-inside-1_977:1934)"></path>
</svg>
</label>
</div>
</div>
</div>
</div>
</div>
</header>


<section id="home">
<div class="a2V a2W a2X dark:a2Y[#3c3e56] dark:a2Z a3b[20px] a2U a3c 2xl:a3d[60px] a3e lg:a3f">
<div class="ab">
<div class="a6 a1K a7 ac">
<div class="a5 lg:a2u/2 af">
<div class="a3g lg:a3h aJ[470px] wow fadeInUp" data-wow-delay=".2s">
<h1 class="a2x a1j dark:a1k a2_ md:a30[45px] a31 md:a31 a1O">
Eagle Physiocare
</h1>
<h3 class="a2x a1j dark:a1k a2_ md:a30[45px] a31 md:a31 a1O">
<span class="a25">Soaring Standards of Physiotherapy Service</span>
</h3>
<p class="a25 aR aT a3i size18">
Eagle Physiocare provides evidence-based physiotherapy services. Our services include
individual assessment and treatment which are geared to empower you to meet your goals.
</p>
<div class="a6 a7">
<a href="#about" class="aR a2x a1k a1q a1N aF a3j a1t hover:a1u a3k">
Explore
</a>
</div>
</div>
</div>
<div class="a5 lg:a2u/2 af">
<div class="a2g ae a2d aA[532px] wow fadeInUp" data-wow-delay=".25s">
<img src="images/logo/logo_.png" alt="hero-image" class="ah a2f">
<span class="ao a2i aq/2 a3l/2 a3m/2 ar/2 aJ[350px] a5 aA[350px] a0 dark:a1 a3n dark:a3n a3o a1A">
</span>
<span class="ao a2i aq/2 a3l/2 a3m/2 ar/2 aJ[450px] a5 aA[450px] a0 dark:a1 a3n dark:a3n a3o a1A">
</span>
</div>
</div>
</div>
</div>
</div>
</section>


<!-- <section id="features" class="a2s[110px]">
<div class="ab">
<div class="a6 a1p ac">
<div class="a5 af">
<div class="aJ[510px] a2f a2g a3p[70px] wow fadeInUp" data-wow-delay=".2s">
<h2 class="a1X a3q sm:a2_ a1j dark:a1k a28">
Our Recent Awards
</h2>
<p class="a25 aR aT">
 There are many variations of passages of Lorem Ipsum available
but the majority have suffered alteration in some form.
</p>
</div>
</div>
</div>
<div class="a6 a1K ac">
<div class="a5 md:a2u/2 xl:a2u/3 af">
<div class="a0 dark:aC a3r sm:a3s md:a3r lg:a3s xl:a3r 2xl:a3s a3b[20px] a3t a1O wow fadeInUp" data-wow-delay=".2s">
<div class="a6 a7 a3u">
<span class="a3v[10px]">
<svg width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="16" fill="#8B5CF6"></circle>
<path d="M24 14.0968L18.248 13.5747L16 8L13.752 13.5747L8 14.0968L12.36 18.08L11.056 24L16 20.8589L20.944 24L19.632 18.08L24 14.0968Z" fill="white"></path>
</svg>
</span>
<span class="a2x a39 a1j dark:a1k">
4.9 Rating
</span>
</div>
<div class="a6 a7 a1O">
<div class="a6 a7">
<img src="images/award/person-1.png" alt="image" class="az[38px] aA[38px] a3w a2T a1A">
<img src="images/award/person-2.png" alt="image" class="az[38px] aA[38px] a3w a2T a1A a3x">
<img src="images/award/person-3.png" alt="image" class="az[38px] aA[38px] a3w a2T a1A a3x">
</div>
<span class="a2A a3y a25 aR a1j dark:a1k">
+195K raters
</span>
</div>
<p class="aR aT a2y">
Lorem ipsum dolor sit amet, consec adipiscing elit In vulputate
vitae massa eu dapibus ligula.
</p>
<a href="javascript:void(0)" class="aV a7 a2x aR aU hover:a3z">
Rate Out Application
<span class="a3A">
<svg width="28" height="28" viewbox="0 0 28 28" class="a23">
<path d="M16.3333 19.7633V15.0967H5.92666L5.89166 12.7517H16.3333V8.09668L22.1667 13.93L16.3333 19.7633Z"></path>
</svg>
</span>
</a>
</div>
</div>
<div class="a5 md:a2u/2 xl:a2u/3 af">
<div class="a0 dark:aC a3r sm:a3s md:a3r lg:a3s xl:a3r 2xl:a3s a3b[20px] a3t a1O wow fadeInUp" data-wow-delay=".25s">
<div class="a6 a7 a3u">
<span class="a3v[10px]">
<svg width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
<circle cx="16" cy="16" r="16" fill="#8B5CF6"></circle>
<path d="M19.3333 10.6666V9.33325H12.6667V10.6666H9.33334V15.3333C9.33334 16.0666 9.93334 16.6666 10.6667 16.6666H12.7333C13 17.9733 14.0267 18.9999 15.3333 19.2666V20.7199C13.3333 21.0266 13.3333 22.6666 13.3333 22.6666H18.6667C18.6667 22.6666 18.6667 21.0266 16.6667 20.7199V19.2666C17.9733 18.9999 19 17.9733 19.2667 16.6666H21.3333C22.0667 16.6666 22.6667 16.0666 22.6667 15.3333V10.6666H19.3333ZM10.6667 15.3333V11.9999H12.6667V15.3333H10.6667ZM21.3333 15.3333H19.3333V11.9999H21.3333V15.3333Z" fill="white"></path>
</svg>
</span>
<span class="a2x a39 a1j dark:a1k">
Awwwards
</span>
</div>
<div class="a6 a7 a28">
<h3 class="a2x a1Y a1j dark:a1k">
Best of trendy design in
<span class="a2x aU"> 2024 </span>
on Awwwards
</h3>
</div>
<p class="aR aT a2y">
Lorem ipsum dolor sit amet, consec adipiscing elit In vulputate
vitae massa eu dapibus ligula.
</p>
<a href="javascript:void(0)" class="aV a7 a2x aR aU hover:a3z">
Go to Awards
<span class="a3A">
<svg width="28" height="28" viewbox="0 0 28 28" class="a23">
<path d="M16.3333 19.7633V15.0967H5.92666L5.89166 12.7517H16.3333V8.09668L22.1667 13.93L16.3333 19.7633Z"></path>
</svg>
</span>
</a>
</div>
</div>
<div class="a5 md:a2u/2 xl:a2u/3 af">
<div class="a0 dark:aC a3r sm:a3s md:a3r lg:a3s xl:a3r 2xl:a3s a3b[20px] a3t a1O wow fadeInUp" data-wow-delay=".3s">
<div class="a6 a7 a3u">
<img src="images/logo/logo.svg" alt="logo">
</div>
<div class="a6 a7 a28">
<h3 class="a2x a1Y a1j dark:a1k">
Appwind is the best app for online payments.
</h3>
</div>
<p class="aR aT a2y">
Lorem ipsum dolor sit amet, consec adipiscing elit In vulputate
vitae massa eu dapibus ligula.
</p>
<a href="javascript:void(0)" class="aV a7 a2x aR aU hover:a3z">
Know More
<span class="a3A">
<svg width="28" height="28" viewbox="0 0 28 28" class="a23">
<path d="M16.3333 19.7633V15.0967H5.92666L5.89166 12.7517H16.3333V8.09668L22.1667 13.93L16.3333 19.7633Z"></path>
</svg>
</span>
</a>
</div>
</div>
</div>
</div>
</section> -->


<section id="about" class="a2s[100px]">
<div class="ab">
<div class="a6 a1K a7 ac">
<div class="a5 lg:a2u/2 af">
<div class="a2g a3g lg:a3h wow fadeInUp" data-wow-delay=".2s">
<img src="images/about/joshua.png" alt="image" class="a3B">
</div>
</div>
<div class="a5 lg:a2u/2 af">
<div class="aJ[485px] lg:a3C wow fadeInUp" data-wow-delay=".3s">
<span class="a2x aR aU al a1Z">
About Us
</span>
<h2 class="a1X a3q sm:a2_ a31 a1j dark:a1k a3u">
Joshua
</h2>
<p class="a39 a26 aT a2w lg:a3i size18">
Is a physiotherapist with a lot of experience providing private out patient
physiotherapy services, aged-care services as well as occupational health services.
</p>
<!-- <p class="a39 a26 aT a2w lg:a3i">
Schedule your posts for times when your audience is most active.
Choose from our best-time predictions, or create your own
publishing schedule.
</p>
<a href="javascript:void(0)" class="aV a7 a2x aR aU hover:a3z">
Know More About App
<span class="a3A">
<svg width="28" height="28" viewbox="0 0 28 28" class="a23">
<path d="M16.3333 19.7633V15.0967H5.92666L5.89166 12.7517H16.3333V8.09668L22.1667 13.93L16.3333 19.7633Z"></path>
</svg>
</span>
</a> -->
</div>
</div>
</div>
</div>
</section>


<section class="a3D">
<div class="ab">
<div class="a6 a1K a7 ac">
<div class="a5 lg:a2u/2 af">
<div class="a2g a3g lg:a3h wow fadeInUp" data-wow-delay=".2s">
<img src="images/about/physio.png" alt="image" class="a3B">
</div>
</div>
<div class="a5 lg:a2u/2 lg:a3E af">
<div class="aJ[485px] wow fadeInUp" data-wow-delay=".3s">
<h2 class="a1X a3q sm:a2_ a31 a1j dark:a1k a3u">
What is Physiotherapy?
</h2>
<p class="a39 a26 aT a2w lg:a3i size18">
According to the Australian Physiotherapy Council, Physiotherapy…involves
the holistic approach to the prevention, diagnosis and therapeutic
management of pain, disorders of movement or optimisation of function to
enhance the health and welfare of the community from an individual or
population perspective.
</p>
<!-- <a href="javascript:void(0)" class="aV a7 a2x aR aU hover:a3z">
Get the App Now!
<span class="a3A">
<svg width="28" height="28" viewbox="0 0 28 28" class="a23">
<path d="M16.3333 19.7633V15.0967H5.92666L5.89166 12.7517H16.3333V8.09668L22.1667 13.93L16.3333 19.7633Z"></path>
</svg>
</span>
</a> -->
</div>
</div>
</div>
</div>
</section>


<section id="how-works" class="a2s[100px]">
<div class="ab">
<div class="a6 a1p ac">
<div class="a5 af">
<div class="aJ[510px] a2f a2g a3p[70px] wow fadeInUp" data-wow-delay=".2s">
<h2 class="a1X a3q sm:a2_ a1j dark:a1k a28">
We treat people with the following conditions among others
</h2>
</div>
</div>
</div>
<div class="a6 a1K a1p ac">
<div class="a5 md:a2u/2 lg:a2u/3 af">
<div class="a2w a2f aJ[310px] a2g aY wow fadeInUp" data-wow-delay=".2s">
<!-- <div class="a3F a3G a2f a3H a1q a3I a6 a7 a1p aU group-hover:a2n group-hover:a1k a1t a28"> -->
<!-- <svg width="42" height="43" viewbox="0 0 42 43" class="a23"> -->
<!-- <img src="https://api.lorem.space/image/face?hash=92048" />/ -->

<!-- <path d="M3.5 21.3843H7V30.1343H35V21.3843H38.5V30.1343C38.5 32.0768 36.9425 33.6343 35 33.6343H7C5.075 33.6343 3.5 32.0768 3.5 30.1343V21.3843ZM21 26.6343L30.7125 17.0793L28.2275 14.6118L22.75 20.0718V3.88428H19.25V20.0718L13.79 14.6118L11.305 17.0968L21 26.6343Z"></path> -->
<!-- </svg> -->
<!-- </div> -->
<div class="avatar">
  <div class="w-24 rounded">
    <img src="images/about/pain.jpg" />
  </div>
</div>
<h3 class="a2x a1Y sm:a27 md:a1Y lg:a27 a1j dark:a1k a3J myfontsize">
Persistant Pain
</h3>
<p class="a25 aR aT size18">
Any pain that goes on for longer than would be expected.
</p>
</div>
</div>

<div class="a5 md:a2u/2 lg:a2u/3 af">
<div class="a2w a2f aJ[310px] a2g aY wow fadeInUp" data-wow-delay=".2s">
<div class="avatar">
  <div class="w-24 rounded">
    <img src="images/about/injury.jpg" />
  </div>
</div>
<h3 class="a2x a1Y sm:a27 md:a1Y lg:a27 a1j dark:a1k a3J myfontsize">
Injuries
</h3>
<p class="a25 aR aT size18">
Work related injuries.
</p>
</div>
</div>

<div class="a5 md:a2u/2 lg:a2u/3 af">
<div class="a2w a2f aJ[310px] a2g aY wow fadeInUp" data-wow-delay=".2s">
<div class="avatar">
  <div class="w-24 rounded">
    <img src="images/about/surgery.jpg" />
  </div>
</div>
<h3 class="a2x a1Y sm:a27 md:a1Y lg:a27 a1j dark:a1k a3J myfontsize">
Surgery
</h3>
<p class="a25 aR aT size18">
Pre and Post-surgical programs.
</p>
</div>
</div>

<div class="a5 md:a2u/2 lg:a2u/3 af">
<div class="a2w a2f aJ[310px] a2g aY wow fadeInUp" data-wow-delay=".2s">
<div class="avatar">
  <div class="w-24 rounded">
    <img src="images/about/balance.jpg" />
  </div>
</div>
<h3 class="a2x a1Y sm:a27 md:a1Y lg:a27 a1j dark:a1k a3J myfontsize">
Balance
</h3>
<p class="a25 aR aT size18">
Exercises to help you improve symptoms of balance disorders.
</p>
</div>
</div>

<div class="a5 md:a2u/2 lg:a2u/3 af">
<div class="a2w a2f aJ[310px] a2g aY wow fadeInUp" data-wow-delay=".2s">
<div class="avatar">
  <div class="w-24 rounded">
    <img src="images/about/neurological.jpg" />
  </div>
</div>
<h3 class="a2x a1Y sm:a27 md:a1Y lg:a27 a1j dark:a1k a3J myfontsize">
Neurological Conditions
</h3>
<p class="a25 aR aT size18">
Doctor-supervised program designed for people with diseases, injury, or disorders of the nervous system.
</p>
</div>
</div>

<div class="a5 md:a2u/2 lg:a2u/3 af">
<div class="a2w a2f aJ[310px] a2g aY wow fadeInUp" data-wow-delay=".2s">
<div class="avatar">
  <div class="w-24 rounded">
    <img src="images/about/lungheart.jpg" />
  </div>
</div>
<h3 class="a2x a1Y sm:a27 md:a1Y lg:a27 a1j dark:a1k a3J myfontsize">
Lung / Heart
</h3>
<p class="a25 aR aT size18">
Combining techniques of both cardiovascular therapy with pulmonary therapy.
</p>
</div>
</div>

<div class="a5 md:a2u/2 lg:a2u/3 af">
<div class="a2w a2f aJ[310px] a2g aY wow fadeInUp" data-wow-delay=".2s">
<div class="avatar">
  <div class="w-24 rounded">
    <img src="images/about/insulin.jpg" />
  </div>
</div>
<h3 class="a2x a1Y sm:a27 md:a1Y lg:a27 a1j dark:a1k a3J myfontsize">
Diabetes
</h3>
<p class="a25 aR aT size18">
Avoid acute decompensation, prevent or delay the appearance 
of late disease complications, and maintain a good quality of life..
</p>
</div>
</div>

<div class="a5 md:a2u/2 lg:a2u/3 af">
<div class="a2w a2f aJ[310px] a2g aY wow fadeInUp" data-wow-delay=".2s">
<div class="avatar">
  <div class="w-24 rounded">
    <img src="images/about/weight.jpg"/>
  </div>
</div>
<h3 class="a2x a1Y sm:a27 md:a1Y lg:a27 a1j dark:a1k a3J myfontsize">
Weight
</h3>
<p class="a25 aR aT size18">
Cognitive-behavioral therapy that focuses on lifestyle changes that promote weight loss.
</p>
</div>
</div>
</div>
</div>
</section>


<section id="cta" class="a3D">
<div class="ab">
<div class="a2V a2W a2X dark:a2Y[#3c3e56] dark:a2Z a3b[20px] a1s sm:a3j md:a3K lg:a3L xl:a3K wow fadeInUp" data-wow-delay=".2s">
<div class="a6 a1K a1S ac">
<div class="a5 lg:a2u/2 af">
<div class="aJ[400px] a2U">
<!-- <span class="a2x aR aU al a1Z">
Download Now!
</span> -->
<h2 class="a1X a3q sm:a2_ a31 a1j dark:a1k a3M">
Your Goals May Include.
</h2>
<p class="a2x aR a26 aT a2e">
<ul class="list-disc" style="font-size:18px">
  <li>Return to full or optimal function</li>
  <li>Return to work</li>
  <li>Return to sport</li>
  <li>Return to activities and hobbies</li>
  <li>Prevention of falls and injuries</li>
  <li>Active lifestyle</li>
</ul>
</p>
<div class="a6 a7">
<!-- <a href="javascript:void(0)" class="a6 a7 a1q a1N a1r au sm:af a1t hover:a1u a3N sm:a1_">
<span class="a3O">
<svg width="34" height="34" viewbox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4 28.9958V4.9125C4 4.07667 4.48167 3.34 5.19 3L19.1442 16.9542L5.19 30.9083C4.48167 30.5542 4 29.8317 4 28.9958ZM23.5642 21.3742L8.32083 30.1858L20.3483 18.1583L23.5642 21.3742ZM28.31 15.2683C28.7917 15.6508 29.1458 16.2458 29.1458 16.9542C29.1458 17.6625 28.8342 18.2292 28.3383 18.6258L25.0942 20.4958L21.5525 16.9542L25.0942 13.4125L28.31 15.2683ZM8.32083 3.7225L23.5642 12.5342L20.3483 15.75L8.32083 3.7225Z" fill="white"></path>
</svg>
</span>
<span class="a2x a1k a39">
<span class="al a3P a1k a3Q">
Get it on
</span>
Google Play
</span>
</a>
<a href="javascript:void(0)" class="a6 a7 aC dark:a0 a1N a1r au sm:af a1t hover:a3R">
<span class="a3O a1k dark:a1j">
<svg width="34" height="34" viewbox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M26.5058 27.625C25.33 29.3817 24.0833 31.0958 22.185 31.1242C20.2866 31.1667 19.6775 30.005 17.5241 30.005C15.3566 30.005 14.6908 31.0958 12.8916 31.1667C11.0358 31.2375 9.6333 29.2967 8.4433 27.5825C6.0208 24.0833 4.16497 17.6375 6.6583 13.3025C7.8908 11.1492 10.1008 9.78916 12.495 9.74666C14.3083 9.71833 16.0366 10.9792 17.1558 10.9792C18.2608 10.9792 20.3575 9.46333 22.5533 9.68999C23.4741 9.73249 26.0525 10.0583 27.71 12.495C27.5825 12.58 24.6358 14.3083 24.6641 17.8925C24.7066 22.1708 28.4183 23.6017 28.4608 23.6158C28.4183 23.715 27.8658 25.6558 26.5058 27.625ZM18.4166 4.95833C19.4508 3.78249 21.165 2.88999 22.5816 2.83333C22.7658 4.49083 22.1 6.16249 21.1083 7.35249C20.1308 8.55666 18.5158 9.49166 16.9291 9.36416C16.7166 7.73499 17.51 6.03499 18.4166 4.95833Z" fill="currentColor"></path>
</svg>
</span>
<span class="a2x a1k dark:a1j a39">
<span class="al a3P a1k dark:a1j a3Q dark:a3Q">
Download from
</span>
App Store
</span>
</a> -->
</div>
</div>
</div>
<div class="a5 lg:a2u/2 af">
<div class="ae a5 a6 an a1S">
<div class="a5">
<!-- <img src="images/cta/cta-image-1.svg" alt="image" class="ae a2d a3S"> -->
</div>
<div class="a5 a3T">
<img src="images/about/restore.png" alt="image" class="ae a3U a3S">
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section id="pricing" class="a2s[100px]" >
<div class="ab" >
<div class="a6 a1p ac">
<div class="a5 af">
<div class="aJ[510px] a2f a2g a3p[70px] wow fadeInUp" data-wow-delay=".2s">
<h2 class="a1X a3q sm:a2_ a1j dark:a1k a28">
Services
</h2>
<p class="a25 aR aT size18">
Kindness and courtesy are at the root of our positive customer service experience.
</p>
</div>
</div>
</div>
<div class="a6 a1K ac">
<div class="a5 md:a2u/2 lg:a2u/3 af">
<div class="ae a1M a3V a3W sm:a3s md:a3W lg:a3X xl:a3Y 2xl:a3Z a3b[20px] a3w a3_[#f3eeff] dark:a40 a2w wow fadeInUp" data-wow-delay=".25s">
<div>
<div class="card w-100 bg-base-1 shadow-xl">
  <figure class="px-10 pt-10">
    <img src="images/about/facetoface.jpg" alt="Shoes" class="rounded-xl" />
  </figure>
  <div class="card-body items-center text-center">
    <h2 class="card-title">Face to Face Service</h2>
  </div>
</div>
</div>
</div>
</div>
<div class="a5 md:a2u/2 lg:a2u/3 af">
<div class="ae a1M a3V a3W sm:a3s md:a3W lg:a3X xl:a3Y 2xl:a3Z a3b[20px] a3w a3_[#f3eeff] dark:a40 a2w wow fadeInUp" data-wow-delay=".25s">
<div>
<div class="card w-100 bg-base-1 shadow-xl">
  <figure class="px-10 pt-10">
    <img src="images/about/home.jpg" alt="Shoes" class="rounded-xl" />
  </figure>
  <div class="card-body items-center text-center">
    <h2 class="card-title">Home Visits</h2>
  </div>
</div>
</div>
</div>
</div>
<div class="a5 md:a2u/2 lg:a2u/3 af">
<div class="ae a1M a3V a3W sm:a3s md:a3W lg:a3X xl:a3Y 2xl:a3Z a3b[20px] a3w a3_[#f3eeff] dark:a40 a2w wow fadeInUp" data-wow-delay=".25s">
<div>
<div class="card w-100 bg-base-1 shadow-xl">
  <figure class="px-10 pt-10">
    <img src="images/about/telehealth.jpg" alt="Shoes" class="rounded-xl" />
  </figure>
  <div class="card-body items-center text-center">
    <h2 class="card-title">Telehealth Services</h2>
  </div>
</div>
</div>
</div>
</div>
<div class="a5 md:a2u/2 lg:a2u/3 af">
<div class="ae a1M a3V a3W sm:a3s md:a3W lg:a3X xl:a3Y 2xl:a3Z a3b[20px] a3w a3_[#f3eeff] dark:a40 a2w wow fadeInUp" data-wow-delay=".25s">
<div>
<div class="card w-100 bg-base-1 shadow-xl">
  <figure class="px-10 pt-10">
    <img src="images/about/occupational.jpg" alt="Shoes" class="rounded-xl" />
  </figure>
  <div class="card-body items-center text-center">
    <h2 class="card-title">Occupational Health Services</h2>
  </div>
</div>
</div>
</div>
</div>
<div class="a5 md:a2u/2 lg:a2u/3 af">
<div class="ae a1M a3V a3W sm:a3s md:a3W lg:a3X xl:a3Y 2xl:a3Z a3b[20px] a3w a3_[#f3eeff] dark:a40 a2w wow fadeInUp" data-wow-delay=".25s">
<div>
<div class="card w-100 bg-base-1 shadow-xl">
  <figure class="px-10 pt-10">
    <img src="images/about/weightm.jpg" alt="Shoes" class="rounded-xl" />
  </figure>
  <div class="card-body items-center text-center">
    <h2 class="card-title">Physical Activity Advice</h2>
  </div>
</div>
</div>
</div>
</div>

</div>

</div>

</section>


<section id="testimonial" class="a3D">
<div class="a2r dark:aC a2s[100px] a2t[70px]" >
<div class="ab">
<div class="a6 a1p ac">
<div class="a5 af">
<div class="aJ[510px] a2f a2g a3p[70px] wow fadeInUp" data-wow-delay=".2s">
<h2 class="a1X a3q sm:a2_ a1j dark:a1k a28">
What Clients Say?
</h2>
<p class="a25 aR aT size18">
Some of the reviews recieved from satisfied clients.
</p>
</div>
</div>
</div>
<div class="a6 a1K ac lg:a47 xl:ac">
 <div class="a5 md:a2u/2 lg:a2u/3 af lg:au xl:af">
<div class="a0 dark:a1 a3r lg:aQ lg:a3X xl:a3r a3b[20px] a48 ae a2d a1M a2e aY hover:a1q a1t a49 wow fadeInUp" data-wow-delay=".25s">
<p class="a2x aR a1j dark:a1k a2y group-hover:a1k">
I had trouble from playing tennis and Joshua gave me excellent exercises which were easy to learn and use, would recommend his services to anyone.
</p>
<div class="a6 a7">
<div class="a4a a4b a1A a1M a20">
<img src="images/testimonial/image-1.png" alt="image" class="a5">
</div>
<div>
<h3 class="a2x a1i a1j dark:a1k group-hover:a1k">
Herbert Frey
</h3>
</div>
</div>
<span class="ao a9 a16 a2i aU group-hover:a1k">
<svg width="63" height="30" viewbox="0 0 63 30" class="a23">
<circle cx="7.21563" cy="10.1013" r="1.14106" transform="rotate(-118.771 7.21563 10.1013)"></circle>
<circle cx="24.8191" cy="0.43515" r="1.14106" transform="rotate(-118.771 24.8191 0.43515)"></circle>
<circle cx="16.7716" cy="27.5037" r="1.14106" transform="rotate(-118.771 16.7716 27.5037)"></circle>
<circle cx="2.38256" cy="1.2995" r="1.14106" transform="rotate(-118.771 2.38256 1.2995)"></circle>
<circle cx="25.5737" cy="22.6717" r="1.14106" transform="rotate(-118.771 25.5737 22.6717)"></circle>
<circle cx="34.3754" cy="17.8386" r="1.14106" transform="rotate(-118.771 34.3754 17.8386)"></circle>
<circle cx="43.1771" cy="13.0056" r="1.14106" transform="rotate(-118.771 43.1771 13.0056)"></circle>
<circle cx="51.9788" cy="8.17249" r="1.14106" transform="rotate(-118.771 51.9788 8.17249)"></circle>
<circle cx="60.5805" cy="3.44925" r="1.14106" transform="rotate(-118.771 60.5805 3.44925)"></circle>
<circle cx="11.9389" cy="18.7029" r="1.14106" transform="rotate(-118.771 11.9389 18.7029)"></circle>
<circle cx="20.7405" cy="13.8698" r="1.14106" transform="rotate(-118.771 20.7405 13.8698)"></circle>
<circle cx="29.5423" cy="9.0368" r="1.14106" transform="rotate(-118.771 29.5423 9.0368)"></circle>
<circle cx="38.344" cy="4.2038" r="1.14106" transform="rotate(-118.771 38.344 4.2038)"></circle>
<circle cx="47.1458" cy="-0.62915" r="1.14106" transform="rotate(-118.771 47.1458 -0.62915)"></circle>
</svg>
</span>
</div>
</div>
<div class="a5 md:a2u/2 lg:a2u/3 af lg:au xl:af">
<div class="a0 dark:a1 a3r lg:aQ lg:a3X xl:a3r a3b[20px] a48 ae a2d a1M a2e aY hover:a1q a1t a49 wow fadeInUp" data-wow-delay=".3s">
<p class="a2x aR a1j dark:a1k a2y group-hover:a1k">
This guy knows what he is doing and he is a lovely bloke also. I wouldn't go to anyone else.
</p>
<div class="a6 a7">
<div class="a4a a4b a1A a1M a20">
<img src="images/testimonial/image-2.png" alt="image" class="a5">
</div>
<div>
<h3 class="a2x a1i a1j dark:a1k group-hover:a1k">
Greg Stagg
</h3>
</div>
</div>
<span class="ao a9 a16 a2i aU group-hover:a1k">
<svg width="63" height="30" viewbox="0 0 63 30" class="a23">
<circle cx="7.21563" cy="10.1013" r="1.14106" transform="rotate(-118.771 7.21563 10.1013)"></circle>
<circle cx="24.8191" cy="0.43515" r="1.14106" transform="rotate(-118.771 24.8191 0.43515)"></circle>
<circle cx="16.7716" cy="27.5037" r="1.14106" transform="rotate(-118.771 16.7716 27.5037)"></circle>
<circle cx="2.38256" cy="1.2995" r="1.14106" transform="rotate(-118.771 2.38256 1.2995)"></circle>
<circle cx="25.5737" cy="22.6717" r="1.14106" transform="rotate(-118.771 25.5737 22.6717)"></circle>
<circle cx="34.3754" cy="17.8386" r="1.14106" transform="rotate(-118.771 34.3754 17.8386)"></circle>
<circle cx="43.1771" cy="13.0056" r="1.14106" transform="rotate(-118.771 43.1771 13.0056)"></circle>
<circle cx="51.9788" cy="8.17249" r="1.14106" transform="rotate(-118.771 51.9788 8.17249)"></circle>
<circle cx="60.5805" cy="3.44925" r="1.14106" transform="rotate(-118.771 60.5805 3.44925)"></circle>
<circle cx="11.9389" cy="18.7029" r="1.14106" transform="rotate(-118.771 11.9389 18.7029)"></circle>
<circle cx="20.7405" cy="13.8698" r="1.14106" transform="rotate(-118.771 20.7405 13.8698)"></circle>
<circle cx="29.5423" cy="9.0368" r="1.14106" transform="rotate(-118.771 29.5423 9.0368)"></circle>
<circle cx="38.344" cy="4.2038" r="1.14106" transform="rotate(-118.771 38.344 4.2038)"></circle>
<circle cx="47.1458" cy="-0.62915" r="1.14106" transform="rotate(-118.771 47.1458 -0.62915)"></circle>
</svg>
</span>
</div>
</div>
<div class="a5 md:a2u/2 lg:a2u/3 af lg:au xl:af">
<div class="a0 dark:a1 a3r lg:aQ lg:a3X xl:a3r a3b[20px] a48 ae a2d a1M a2e aY hover:a1q a1t a49 wow fadeInUp" data-wow-delay=".35s">
<p class="a2x aR a1j dark:a1k a2y group-hover:a1k">
Good Quality physio service.
</p>
<div class="a6 a7">
<div class="a4a a4b a1A a1M a20">
<img src="images/testimonial/image-3.png" alt="image" class="a5">
</div>
<div>
<h3 class="a2x a1i a1j dark:a1k group-hover:a1k">
Daniel Murandaashe
</h3>
</div>
</div>
<span class="ao a9 a16 a2i aU group-hover:a1k">
<svg width="63" height="30" viewbox="0 0 63 30" class="a23">
<circle cx="7.21563" cy="10.1013" r="1.14106" transform="rotate(-118.771 7.21563 10.1013)"></circle>
<circle cx="24.8191" cy="0.43515" r="1.14106" transform="rotate(-118.771 24.8191 0.43515)"></circle>
<circle cx="16.7716" cy="27.5037" r="1.14106" transform="rotate(-118.771 16.7716 27.5037)"></circle>
<circle cx="2.38256" cy="1.2995" r="1.14106" transform="rotate(-118.771 2.38256 1.2995)"></circle>
<circle cx="25.5737" cy="22.6717" r="1.14106" transform="rotate(-118.771 25.5737 22.6717)"></circle>
<circle cx="34.3754" cy="17.8386" r="1.14106" transform="rotate(-118.771 34.3754 17.8386)"></circle>
<circle cx="43.1771" cy="13.0056" r="1.14106" transform="rotate(-118.771 43.1771 13.0056)"></circle>
<circle cx="51.9788" cy="8.17249" r="1.14106" transform="rotate(-118.771 51.9788 8.17249)"></circle>
<circle cx="60.5805" cy="3.44925" r="1.14106" transform="rotate(-118.771 60.5805 3.44925)"></circle>
<circle cx="11.9389" cy="18.7029" r="1.14106" transform="rotate(-118.771 11.9389 18.7029)"></circle>
<circle cx="20.7405" cy="13.8698" r="1.14106" transform="rotate(-118.771 20.7405 13.8698)"></circle>
<circle cx="29.5423" cy="9.0368" r="1.14106" transform="rotate(-118.771 29.5423 9.0368)"></circle>
<circle cx="38.344" cy="4.2038" r="1.14106" transform="rotate(-118.771 38.344 4.2038)"></circle>
<circle cx="47.1458" cy="-0.62915" r="1.14106" transform="rotate(-118.771 47.1458 -0.62915)"></circle>
</svg>
</span>
</div>
</div>
<!-- <div class="a5 md:a2u/2 lg:a2u/3 af lg:au xl:af">
<div class="a0 dark:a1 a3r lg:aQ lg:a3X xl:a3r a3b[20px] a48 ae a2d a1M a2e aY hover:a1q a1t a49 wow fadeInUp" data-wow-delay=".4s">
<p class="a2x aR a1j dark:a1k a2y group-hover:a1k">
Lorem ipsum dolor sit amet, consect adipiscing elit.
Pellentesque dignissim nisi a odio laoreet luctus. Ut sed
diam, quis bibendum ex.
</p>
<div class="a6 a7">
<div class="a4a a4b a1A a1M a20">
<img src="images/testimonial/image-4.png" alt="image" class="a5">
</div>
<div>
<h3 class="a2x a1i a1j dark:a1k group-hover:a1k">
Devid Miller
</h3>
<p class="a25 a3P aT group-hover:a1k group-hover:a4c">
Product Designer
</p>
</div>
</div>
<span class="ao a9 a16 a2i aU group-hover:a1k">
<svg width="63" height="30" viewbox="0 0 63 30" class="a23">
<circle cx="7.21563" cy="10.1013" r="1.14106" transform="rotate(-118.771 7.21563 10.1013)"></circle>
<circle cx="24.8191" cy="0.43515" r="1.14106" transform="rotate(-118.771 24.8191 0.43515)"></circle>
<circle cx="16.7716" cy="27.5037" r="1.14106" transform="rotate(-118.771 16.7716 27.5037)"></circle>
<circle cx="2.38256" cy="1.2995" r="1.14106" transform="rotate(-118.771 2.38256 1.2995)"></circle>
<circle cx="25.5737" cy="22.6717" r="1.14106" transform="rotate(-118.771 25.5737 22.6717)"></circle>
<circle cx="34.3754" cy="17.8386" r="1.14106" transform="rotate(-118.771 34.3754 17.8386)"></circle>
<circle cx="43.1771" cy="13.0056" r="1.14106" transform="rotate(-118.771 43.1771 13.0056)"></circle>
<circle cx="51.9788" cy="8.17249" r="1.14106" transform="rotate(-118.771 51.9788 8.17249)"></circle>
<circle cx="60.5805" cy="3.44925" r="1.14106" transform="rotate(-118.771 60.5805 3.44925)"></circle>
<circle cx="11.9389" cy="18.7029" r="1.14106" transform="rotate(-118.771 11.9389 18.7029)"></circle>
<circle cx="20.7405" cy="13.8698" r="1.14106" transform="rotate(-118.771 20.7405 13.8698)"></circle>
<circle cx="29.5423" cy="9.0368" r="1.14106" transform="rotate(-118.771 29.5423 9.0368)"></circle>
<circle cx="38.344" cy="4.2038" r="1.14106" transform="rotate(-118.771 38.344 4.2038)"></circle>
<circle cx="47.1458" cy="-0.62915" r="1.14106" transform="rotate(-118.771 47.1458 -0.62915)"></circle>
</svg>
</span>
</div>
</div>
<div class="a5 md:a2u/2 lg:a2u/3 af lg:au xl:af">
<div class="a0 dark:a1 a3r lg:aQ lg:a3X xl:a3r a3b[20px] a48 ae a2d a1M a2e aY hover:a1q a1t a49 wow fadeInUp" data-wow-delay=".45s">
<p class="a2x aR a1j dark:a1k a2y group-hover:a1k">
Lorem ipsum dolor sit amet, consect adipiscing elit.
Pellentesque dignissim nisi a odio laoreet luctus. Ut sed
diam, quis bibendum ex.
</p>
<div class="a6 a7">
<div class="a4a a4b a1A a1M a20">
<img src="images/testimonial/image-5.png" alt="image" class="a5">
</div>
<div>
<h3 class="a2x a1i a1j dark:a1k group-hover:a1k">
Adam Wilsmith
</h3>
<p class="a25 a3P aT group-hover:a1k group-hover:a4c">
App Developer
</p>
</div>
</div>
<span class="ao a9 a16 a2i aU group-hover:a1k">
<svg width="63" height="30" viewbox="0 0 63 30" class="a23">
<circle cx="7.21563" cy="10.1013" r="1.14106" transform="rotate(-118.771 7.21563 10.1013)"></circle>
<circle cx="24.8191" cy="0.43515" r="1.14106" transform="rotate(-118.771 24.8191 0.43515)"></circle>
<circle cx="16.7716" cy="27.5037" r="1.14106" transform="rotate(-118.771 16.7716 27.5037)"></circle>
<circle cx="2.38256" cy="1.2995" r="1.14106" transform="rotate(-118.771 2.38256 1.2995)"></circle>
<circle cx="25.5737" cy="22.6717" r="1.14106" transform="rotate(-118.771 25.5737 22.6717)"></circle>
<circle cx="34.3754" cy="17.8386" r="1.14106" transform="rotate(-118.771 34.3754 17.8386)"></circle>
<circle cx="43.1771" cy="13.0056" r="1.14106" transform="rotate(-118.771 43.1771 13.0056)"></circle>
<circle cx="51.9788" cy="8.17249" r="1.14106" transform="rotate(-118.771 51.9788 8.17249)"></circle>
<circle cx="60.5805" cy="3.44925" r="1.14106" transform="rotate(-118.771 60.5805 3.44925)"></circle>
<circle cx="11.9389" cy="18.7029" r="1.14106" transform="rotate(-118.771 11.9389 18.7029)"></circle>
<circle cx="20.7405" cy="13.8698" r="1.14106" transform="rotate(-118.771 20.7405 13.8698)"></circle>
<circle cx="29.5423" cy="9.0368" r="1.14106" transform="rotate(-118.771 29.5423 9.0368)"></circle>
<circle cx="38.344" cy="4.2038" r="1.14106" transform="rotate(-118.771 38.344 4.2038)"></circle>
<circle cx="47.1458" cy="-0.62915" r="1.14106" transform="rotate(-118.771 47.1458 -0.62915)"></circle>
</svg>
</span>
</div>
</div>
<div class="a5 md:a2u/2 lg:a2u/3 af lg:au xl:af">
<div class="a0 dark:a1 a3r lg:aQ lg:a3X xl:a3r a3b[20px] a48 ae a2d a1M a2e aY hover:a1q a1t a49 wow fadeInUp" data-wow-delay=".5s">
<p class="a2x aR a1j dark:a1k a2y group-hover:a1k">
Lorem ipsum dolor sit amet, consect adipiscing elit.
Pellentesque dignissim nisi a odio laoreet luctus. Ut sed
diam, quis bibendum ex.
</p>
<div class="a6 a7">
<div class="a4a a4b a1A a1M a20">
<img src="images/testimonial/image-6.png" alt="image" class="a5">
</div>
<div>
<h3 class="a2x a1i a1j dark:a1k group-hover:a1k">
Justin Farnandes
</h3>
<p class="a25 a3P aT group-hover:a1k group-hover:a4c">
Seo Expert
</p>
</div>
</div>
<span class="ao a9 a16 a2i aU group-hover:a1k">
<svg width="63" height="30" viewbox="0 0 63 30" class="a23">
<circle cx="7.21563" cy="10.1013" r="1.14106" transform="rotate(-118.771 7.21563 10.1013)"></circle>
<circle cx="24.8191" cy="0.43515" r="1.14106" transform="rotate(-118.771 24.8191 0.43515)"></circle>
<circle cx="16.7716" cy="27.5037" r="1.14106" transform="rotate(-118.771 16.7716 27.5037)"></circle>
<circle cx="2.38256" cy="1.2995" r="1.14106" transform="rotate(-118.771 2.38256 1.2995)"></circle>
<circle cx="25.5737" cy="22.6717" r="1.14106" transform="rotate(-118.771 25.5737 22.6717)"></circle>
<circle cx="34.3754" cy="17.8386" r="1.14106" transform="rotate(-118.771 34.3754 17.8386)"></circle>
<circle cx="43.1771" cy="13.0056" r="1.14106" transform="rotate(-118.771 43.1771 13.0056)"></circle>
<circle cx="51.9788" cy="8.17249" r="1.14106" transform="rotate(-118.771 51.9788 8.17249)"></circle>
<circle cx="60.5805" cy="3.44925" r="1.14106" transform="rotate(-118.771 60.5805 3.44925)"></circle>
<circle cx="11.9389" cy="18.7029" r="1.14106" transform="rotate(-118.771 11.9389 18.7029)"></circle>
<circle cx="20.7405" cy="13.8698" r="1.14106" transform="rotate(-118.771 20.7405 13.8698)"></circle>
<circle cx="29.5423" cy="9.0368" r="1.14106" transform="rotate(-118.771 29.5423 9.0368)"></circle>
<circle cx="38.344" cy="4.2038" r="1.14106" transform="rotate(-118.771 38.344 4.2038)"></circle>
<circle cx="47.1458" cy="-0.62915" r="1.14106" transform="rotate(-118.771 47.1458 -0.62915)"></circle>
</svg>
</span>
</div>
</div> -->
</div>
</div>
</div>
</section>


<!-- <section id="faq" class="a2s[100px] a1M">
<div class="ab">
<div class="a6 a1p ac">
<div class="a5 af">
<div class="aJ[510px] a2f a2g a3p[70px] wow fadeInUp" data-wow-delay=".2s">
<h2 class="a1X a3q sm:a2_ a1j dark:a1k a28">
Frequently Asked Questions
</h2>
<p class="a25 aR aT">
There are many variations of passages of Lorem Ipsum available
but the majority have suffered alteration in some form.
</p>
</div>
</div>
</div>
<div class="a6 a1K ac">
<div class="a5 lg:a2u/2 af">
<div class="a2w lg:a3h ae a2d">
<div class="a0 dark:a1 a2C a3_[#e4f2fe] a4d a4e a3W sm:a3s md:a4f lg:a3V lg:a3W xl:a3s 2xl:a4g wow fadeInUp" data-wow-delay=".3s">
<div class="a2w">
<h3 class="a2x a1Y sm:a27 lg:a1Y xl:a27 a1j dark:a1k a3J">
Which plan is suitable for me?
</h3>
<p class="a25 aR aT">
Sed tempor mi at nunc commodo, quis tincidunt turpis
finibus. Pellentesque congue neque justo.
</p>
</div>
<div class="a2w">
<h3 class="a2x a1Y sm:a27 lg:a1Y xl:a27 a1j dark:a1k a3J">
Will I get free future updates?
</h3>
<p class="a25 aR aT">
Maecenas tincidunt risus et interdum lobortis. Nunc nec eros
mattis diam suscipit tristique at sit amet elit.
</p>
</div>
<div>
<h3 class="a2x a1Y sm:a27 lg:a1Y xl:a27 a1j dark:a1k a3J">
Do you provide support?
</h3>
<p class="a25 aR aT">
Maecenas tincidunt risus et interdum lobortis. Nunc nec eros
mattis diam suscipit tristique.
</p>
</div>
</div>
<div class="ao a2i a4h a4i">
<svg width="170" height="198" viewbox="0 0 170 198" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M115.694 166.387C145.356 149.262 155.508 111.348 138.387 81.6936C121.266 52.0388 83.3556 41.8746 53.6936 59C24.046 76.117 13.8788 114.039 31 143.694C48.1212 173.348 86.046 183.504 115.694 166.387Z" fill="url(#paint0_radial_100_226)"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M64.6936 109.694C85.686 109.694 102.694 92.6809 102.694 71.6936C102.694 50.7063 85.686 33.6936 64.6936 33.6936C43.7114 33.6936 26.6936 50.7063 26.6936 71.6936C26.6936 92.6809 43.7114 109.694 64.6936 109.694Z" fill="url(#paint1_radial_100_226)"></path>
<circle cx="72.1069" cy="51.1106" r="1.72625" transform="rotate(-120 72.1069 51.1106)" fill="#8B5CF6"></circle>
<circle cx="98.1196" cy="36.0928" r="1.72625" transform="rotate(-120 98.1196 36.0928)" fill="#8B5CF6"></circle>
<circle cx="59.5491" cy="58.3611" r="1.72625" transform="rotate(-120 59.5491 58.3611)" fill="#8B5CF6"></circle>
<circle cx="84.9638" cy="43.688" r="1.72625" transform="rotate(-120 84.9638 43.688)" fill="#8B5CF6"></circle>
<circle cx="110.976" cy="28.6695" r="1.72625" transform="rotate(-120 110.976 28.6695)" fill="#8B5CF6"></circle>
<circle cx="87.1254" cy="77.1236" r="1.72625" transform="rotate(-120 87.1254 77.1236)" fill="#8B5CF6"></circle>
<circle cx="64.5115" cy="37.9551" r="1.72625" transform="rotate(-120 64.5115 37.9551)" fill="#8B5CF6"></circle>
<circle cx="113.138" cy="62.1053" r="1.72625" transform="rotate(-120 113.138 62.1053)" fill="#8B5CF6"></circle>
<circle cx="90.5241" cy="22.9371" r="1.72625" transform="rotate(-120 90.5241 22.9371)" fill="#8B5CF6"></circle>
<circle cx="74.5676" cy="84.3741" r="1.72625" transform="rotate(-120 74.5676 84.3741)" fill="#8B5CF6"></circle>
<circle cx="51.9537" cy="45.2054" r="1.72625" transform="rotate(-120 51.9537 45.2054)" fill="#8B5CF6"></circle>
<circle cx="99.9822" cy="69.7005" r="1.72625" transform="rotate(-120 99.9822 69.7005)" fill="#8B5CF6"></circle>
<circle cx="77.3682" cy="30.5323" r="1.72625" transform="rotate(-120 77.3682 30.5323)" fill="#8B5CF6"></circle>
<circle cx="125.995" cy="54.6824" r="1.72625" transform="rotate(-120 125.995 54.6824)" fill="#8B5CF6"></circle>
<circle cx="103.381" cy="15.514" r="1.72625" transform="rotate(-120 103.381 15.514)" fill="#8B5CF6"></circle>
<circle cx="79.5299" cy="63.9678" r="1.72625" transform="rotate(-120 79.5299 63.9678)" fill="#8B5CF6"></circle>
<circle cx="56.916" cy="24.7994" r="1.72625" transform="rotate(-120 56.916 24.7994)" fill="#8B5CF6"></circle>
<circle cx="105.543" cy="48.9498" r="1.72625" transform="rotate(-120 105.543 48.9498)" fill="#8B5CF6"></circle>
<circle cx="82.9287" cy="9.78106" r="1.72625" transform="rotate(-120 82.9287 9.78106)" fill="#8B5CF6"></circle>
<circle cx="66.9722" cy="71.2183" r="1.72625" transform="rotate(-120 66.9722 71.2183)" fill="#8B5CF6"></circle>
<circle cx="44.3583" cy="32.0499" r="1.72625" transform="rotate(-120 44.3583 32.0499)" fill="#8B5CF6"></circle>
<circle cx="92.3868" cy="56.5452" r="1.72625" transform="rotate(-120 92.3868 56.5452)" fill="#8B5CF6"></circle>
<circle cx="69.7728" cy="17.3768" r="1.72625" transform="rotate(-120 69.7728 17.3768)" fill="#8B5CF6"></circle>
<circle cx="118.399" cy="41.5267" r="1.72625" transform="rotate(-120 118.399 41.5267)" fill="#8B5CF6"></circle>
<circle cx="95.7854" cy="2.35821" r="1.72625" transform="rotate(-120 95.7854 2.35821)" fill="#8B5CF6"></circle>
<defs>
<radialgradient id="paint0_radial_100_226" cx="0" cy="0" r="1" gradientunits="userSpaceOnUse" gradienttransform="translate(53.6936 59) rotate(60) scale(124)">
<stop stop-color="white"></stop>
<stop offset="0.569" stop-color="#FFEEFE"></stop>
<stop offset="0.993" stop-color="#F1C6EF"></stop>
</radialgradient>
<radialgradient id="paint1_radial_100_226" cx="0" cy="0" r="1" gradientunits="userSpaceOnUse" gradienttransform="translate(64.6936 33.6936) rotate(90) scale(76)">
<stop stop-color="white"></stop>
<stop offset="0.569" stop-color="#E4F2FE"></stop>
<stop offset="0.993" stop-color="#D2E2EF"></stop>
</radialgradient>
</defs>
</svg>
</div>
</div>
</div>
<div class="a5 lg:a2u/2 af">
<div class="a2w lg:a3h ae a2d">
<div class="a0 dark:a1 a2C a3_[#e4f2fe] a4d a4e a3W sm:a3s md:a4f lg:a3V lg:a3W xl:a3s 2xl:a4g wow fadeInUp" data-wow-delay=".4s">
<div class="a2w">
<h3 class="a2x a1Y sm:a27 lg:a1Y xl:a27 a1j dark:a1k a3J">
Which plan is suitable for me?
</h3>
<p class="a25 aR aT">
Sed tempor mi at nunc commodo, quis tincidunt turpis
finibus. Pellentesque congue neque justo.
</p>
</div>
<div class="a2w">
<h3 class="a2x a1Y sm:a27 lg:a1Y xl:a27 a1j dark:a1k a3J">
Will I get free future updates?
</h3>
<p class="a25 aR aT">
Maecenas tincidunt risus et interdum lobortis. Nunc nec eros
mattis diam suscipit tristique at sit amet elit.
</p>
</div>
<div>
<h3 class="a2x a1Y sm:a27 lg:a1Y xl:a27 a1j dark:a1k a3J">
Do you provide support?
</h3>
<p class="a25 aR aT">
Maecenas tincidunt risus et interdum lobortis. Nunc nec eros
mattis diam suscipit tristique.
</p>
</div>
</div>
<div class="ao a2i a4j a4k">
<svg width="170" height="183" viewbox="0 0 170 183" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M116 138.694C145.662 121.568 155.815 83.655 138.694 54.0002C121.572 24.3454 83.662 14.1812 54 31.3066C24.3524 48.4237 14.1852 86.3454 31.3064 116C48.4276 145.655 86.3524 155.811 116 138.694Z" fill="url(#paint0_radial_100_227)"></path>
<path fill-rule="evenodd" clip-rule="evenodd" d="M54 84C74.9924 84 92 66.9873 92 46C92 25.0127 74.9924 8 54 8C33.0178 8 16 25.0127 16 46C16 66.9873 33.0178 84 54 84Z" fill="url(#paint1_radial_100_227)"></path>
<circle cx="95.3482" cy="146.68" r="1.72625" transform="rotate(-120 95.3482 146.68)" fill="#8B5CF6"></circle>
<circle cx="121.361" cy="131.663" r="1.72625" transform="rotate(-120 121.361 131.663)" fill="#8B5CF6"></circle>
<circle cx="82.7904" cy="153.931" r="1.72625" transform="rotate(-120 82.7904 153.931)" fill="#8B5CF6"></circle>
<circle cx="108.205" cy="139.258" r="1.72625" transform="rotate(-120 108.205 139.258)" fill="#8B5CF6"></circle>
<circle cx="134.218" cy="124.239" r="1.72625" transform="rotate(-120 134.218 124.239)" fill="#8B5CF6"></circle>
<circle cx="110.367" cy="172.693" r="1.72625" transform="rotate(-120 110.367 172.693)" fill="#8B5CF6"></circle>
<circle cx="87.7528" cy="133.525" r="1.72625" transform="rotate(-120 87.7528 133.525)" fill="#8B5CF6"></circle>
<circle cx="136.379" cy="157.675" r="1.72625" transform="rotate(-120 136.379 157.675)" fill="#8B5CF6"></circle>
<circle cx="113.765" cy="118.507" r="1.72625" transform="rotate(-120 113.765 118.507)" fill="#8B5CF6"></circle>
<circle cx="97.8089" cy="179.944" r="1.72625" transform="rotate(-120 97.8089 179.944)" fill="#8B5CF6"></circle>
<circle cx="75.195" cy="140.775" r="1.72625" transform="rotate(-120 75.195 140.775)" fill="#8B5CF6"></circle>
<circle cx="123.223" cy="165.27" r="1.72625" transform="rotate(-120 123.223 165.27)" fill="#8B5CF6"></circle>
<circle cx="100.61" cy="126.102" r="1.72625" transform="rotate(-120 100.61 126.102)" fill="#8B5CF6"></circle>
<circle cx="149.236" cy="150.252" r="1.72625" transform="rotate(-120 149.236 150.252)" fill="#8B5CF6"></circle>
<circle cx="126.622" cy="111.084" r="1.72625" transform="rotate(-120 126.622 111.084)" fill="#8B5CF6"></circle>
<circle cx="102.771" cy="159.538" r="1.72625" transform="rotate(-120 102.771 159.538)" fill="#8B5CF6"></circle>
<circle cx="80.1573" cy="120.369" r="1.72625" transform="rotate(-120 80.1573 120.369)" fill="#8B5CF6"></circle>
<circle cx="128.784" cy="144.52" r="1.72625" transform="rotate(-120 128.784 144.52)" fill="#8B5CF6"></circle>
<circle cx="106.17" cy="105.351" r="1.72625" transform="rotate(-120 106.17 105.351)" fill="#8B5CF6"></circle>
<circle cx="90.2135" cy="166.788" r="1.72625" transform="rotate(-120 90.2135 166.788)" fill="#8B5CF6"></circle>
<circle cx="67.5996" cy="127.62" r="1.72625" transform="rotate(-120 67.5996 127.62)" fill="#8B5CF6"></circle>
<circle cx="115.628" cy="152.115" r="1.72625" transform="rotate(-120 115.628 152.115)" fill="#8B5CF6"></circle>
<circle cx="93.0141" cy="112.947" r="1.72625" transform="rotate(-120 93.0141 112.947)" fill="#8B5CF6"></circle>
<circle cx="141.641" cy="137.096" r="1.72625" transform="rotate(-120 141.641 137.096)" fill="#8B5CF6"></circle>
<circle cx="119.027" cy="97.928" r="1.72625" transform="rotate(-120 119.027 97.928)" fill="#8B5CF6"></circle>
<defs>
<radialgradient id="paint0_radial_100_227" cx="0" cy="0" r="1" gradientunits="userSpaceOnUse" gradienttransform="translate(54 31.3066) rotate(60) scale(124)">
<stop stop-color="white"></stop>
<stop offset="0.569" stop-color="#FFEEFE"></stop>
<stop offset="0.993" stop-color="#F1C6EF"></stop>
</radialgradient>
<radialgradient id="paint1_radial_100_227" cx="0" cy="0" r="1" gradientunits="userSpaceOnUse" gradienttransform="translate(54 8) rotate(90) scale(76)">
<stop stop-color="white"></stop>
<stop offset="0.569" stop-color="#E4F2FE"></stop>
<stop offset="0.993" stop-color="#D2E2EF"></stop>
</radialgradient>
</defs>
</svg>
</div>
</div>
</div>
</div>
</div>
</section> -->


<section id="blog" class="a2s[100px]">
  <div class="ab">
    <div class="a6 a1p ac">
      <div class="a5 af">
        <div class="aJ[510px] a2f a2g a3p[70px] wow fadeInUp" data-wow-delay=".2s">
          <h2 class="a1X a3q sm:a2_ a1j dark:a1k a28" style="color:white;">
          Recent Articles
          </h2>
          <p class="a25 aR aT">
          Find the most relevant information about our Physiocare Services.
          </p>
        </div>
      </div>
    </div>
    <div class="a6 a1K ac">
      
          <?php echo getRecentArticles($connect); ?>
          <div class="a6 a7">
            <a href="bloggrid.php" class="aR a2x a1k a1q a1N aF a3j a1t hover:a1u a3k">
            View All
            </a>
          </div>
      </div>
    </div>
</section>





<section id="contact" class="av[100px] a1M">
<div class="ab">
<div class="a6 a1p ac">
<div class="a5 af">
<div class="aJ[510px] a2f a2g a3p[70px] wow fadeInUp" data-wow-delay=".2s">
<h2 class="a1X a3q sm:a2_ a1j dark:a1k a28">
Need Any Help?
</h2>
<p class="a25 aR aT">
Contact Us
</p>
</div>
</div>
</div>
<div class="aJ[770px] a2f a4t a4d ae a0 dark:a1 a2d wow fadeInUp" data-wow-delay=".3s">
<div class="a3V a3W sm:a4u[70px] a0 dark:aC a4d a2C a4v dark:a4w">
<form action="sendemail.php" method="POST">
<div class="a6 a1K ac">
<div class="a5 md:a2u/2 af">
<div class="a3u">
<label for="" class="al a25 aR a1j dark:a1k a2j">
First Name
</label>
<input type="text" name="name" placeholder="Enter your first name" class="a5 a25 a1i aT av[14px] a3X aw a2C a4v dark:a4w aK dark:a1 a2E a4x focus-visible:aN focus:a2F" required>
</div>
</div>
<div class="a5 md:a2u/2 af">
<div class="a3u">
<label for="" class="al a25 aR a1j dark:a1k a2j">
Last Name
</label>
<input type="text" name="lastname" placeholder="Enter your last name" class="a5 a25 a1i aT av[14px] a3X aw a2C a4v dark:a4w aK dark:a1 a2E a4x focus-visible:aN focus:a2F">
</div>
</div>
<div class="a5 md:a2u/2 af">
<div class="a3u">
<label for="" class="al a25 aR a1j dark:a1k a2j">
Email
</label>
<input type="email" name="email" placeholder="Enter your email" class="a5 a25 a1i aT av[14px] a3X aw a2C a4v dark:a4w aK dark:a1 a2E a4x focus-visible:aN focus:a2F">
</div>
</div>
<div class="a5 md:a2u/2 af">
<div class="a3u">
<label for="" class="al a25 aR a1j dark:a1k a2j">
Phone number
</label>
<input type="text" name="phone" placeholder="Enter your phone number" class="a5 a25 a1i aT av[14px] a3X aw a2C a4v dark:a4w aK dark:a1 a2E a4x focus-visible:aN focus:a2F" required>
</div>
</div>
<div class="a5 af">
<div class="a2e">
<label for="" class="al a25 aR a1j dark:a1k a2j">
What are you looking for?
</label>
<textarea rows="5" name="message" placeholder="Enter your message" class="a5 a25 a1i aT av[14px] a3X aw a2C a4v dark:a4w aK dark:a1 a2E a4x focus-visible:aN focus:a2F a4y"></textarea>
</div>
</div>
<div class="a5 af">
<div class="a2g">
<button class="a2x aR a1k a1q a1N a1r a3j a2g hover:a1u">
Submit Message
</button>
</div>
</div>
</div>
</form>
</div>
<div>
<span class="ao a2K a4z a2i">
<svg width="126" height="156" viewbox="0 0 126 156" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M62.9999 126C97.8032 126 126 97.7947 126 63C126 28.2053 97.8032 0 62.9999 0C28.2137 0 -6.10352e-05 28.2053 -6.10352e-05 63C-6.10352e-05 97.7947 28.2137 126 62.9999 126Z" fill="url(#paint0_radial_100_549)"></path>
<circle cx="45.3482" cy="119.68" r="1.72625" transform="rotate(-120 45.3482 119.68)" fill="#8B5CF6"></circle>
<circle cx="71.3609" cy="104.662" r="1.72625" transform="rotate(-120 71.3609 104.662)" fill="#8B5CF6"></circle>
<circle cx="32.7905" cy="126.931" r="1.72625" transform="rotate(-120 32.7905 126.931)" fill="#8B5CF6"></circle>
<circle cx="58.2051" cy="112.258" r="1.72625" transform="rotate(-120 58.2051 112.258)" fill="#8B5CF6"></circle>
<circle cx="84.2176" cy="97.2391" r="1.72625" transform="rotate(-120 84.2176 97.2391)" fill="#8B5CF6"></circle>
<circle cx="60.3668" cy="145.693" r="1.72625" transform="rotate(-120 60.3668 145.693)" fill="#8B5CF6"></circle>
<circle cx="37.7528" cy="106.525" r="1.72625" transform="rotate(-120 37.7528 106.525)" fill="#8B5CF6"></circle>
<circle cx="86.3793" cy="130.675" r="1.72625" transform="rotate(-120 86.3793 130.675)" fill="#8B5CF6"></circle>
<circle cx="63.7654" cy="91.5066" r="1.72625" transform="rotate(-120 63.7654 91.5066)" fill="#8B5CF6"></circle>
<circle cx="47.809" cy="152.944" r="1.72625" transform="rotate(-120 47.809 152.944)" fill="#8B5CF6"></circle>
<circle cx="25.195" cy="113.775" r="1.72625" transform="rotate(-120 25.195 113.775)" fill="#8B5CF6"></circle>
<circle cx="73.2235" cy="138.27" r="1.72625" transform="rotate(-120 73.2235 138.27)" fill="#8B5CF6"></circle>
<circle cx="50.6096" cy="99.1019" r="1.72625" transform="rotate(-120 50.6096 99.1019)" fill="#8B5CF6"></circle>
<circle cx="99.2361" cy="123.252" r="1.72625" transform="rotate(-120 99.2361 123.252)" fill="#8B5CF6"></circle>
<circle cx="76.6221" cy="84.0833" r="1.72625" transform="rotate(-120 76.6221 84.0833)" fill="#8B5CF6"></circle>
<circle cx="52.7713" cy="132.537" r="1.72625" transform="rotate(-120 52.7713 132.537)" fill="#8B5CF6"></circle>
<circle cx="30.1573" cy="93.3689" r="1.72625" transform="rotate(-120 30.1573 93.3689)" fill="#8B5CF6"></circle>
<circle cx="78.7839" cy="117.519" r="1.72625" transform="rotate(-120 78.7839 117.519)" fill="#8B5CF6"></circle>
<circle cx="56.17" cy="78.3504" r="1.72625" transform="rotate(-120 56.17 78.3504)" fill="#8B5CF6"></circle>
<circle cx="40.2136" cy="139.788" r="1.72625" transform="rotate(-120 40.2136 139.788)" fill="#8B5CF6"></circle>
<circle cx="17.5996" cy="100.619" r="1.72625" transform="rotate(-120 17.5996 100.619)" fill="#8B5CF6"></circle>
<circle cx="65.6281" cy="125.115" r="1.72625" transform="rotate(-120 65.6281 125.115)" fill="#8B5CF6"></circle>
<circle cx="43.0141" cy="85.9466" r="1.72625" transform="rotate(-120 43.0141 85.9466)" fill="#8B5CF6"></circle>
<circle cx="91.6406" cy="110.096" r="1.72625" transform="rotate(-120 91.6406 110.096)" fill="#8B5CF6"></circle>
<circle cx="69.0267" cy="70.9275" r="1.72625" transform="rotate(-120 69.0267 70.9275)" fill="#8B5CF6"></circle>
<defs>
<radialgradient id="paint0_radial_100_549" cx="0" cy="0" r="1" gradientunits="userSpaceOnUse" gradienttransform="translate(62.9999) rotate(90) scale(126)">
<stop stop-color="white"></stop>
<stop offset="0.569" stop-color="#E4F2FE"></stop>
<stop offset="0.993" stop-color="#D2E2EF"></stop>
</radialgradient>
</defs>
</svg>
</span>
<span class="ao a4A a4B a2i">
<svg width="161" height="189" viewbox="0 0 161 189" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M160.578 80.5879C160.578 36.3933 124.762 0.587885 80.5784 0.587887C36.3946 0.587889 0.578432 36.3933 0.578434 80.5879C0.578436 124.761 36.3947 160.588 80.5784 160.588C124.762 160.588 160.578 124.761 160.578 80.5879Z" fill="url(#paint0_radial_100_548)"></path>
<circle cx="93.1069" cy="153.111" r="1.72625" transform="rotate(-120 93.1069 153.111)" fill="#8B5CF6"></circle>
<circle cx="119.12" cy="138.093" r="1.72625" transform="rotate(-120 119.12 138.093)" fill="#8B5CF6"></circle>
<circle cx="80.5492" cy="160.362" r="1.72625" transform="rotate(-120 80.5492 160.362)" fill="#8B5CF6"></circle>
<circle cx="105.964" cy="145.688" r="1.72625" transform="rotate(-120 105.964 145.688)" fill="#8B5CF6"></circle>
<circle cx="131.976" cy="130.67" r="1.72625" transform="rotate(-120 131.976 130.67)" fill="#8B5CF6"></circle>
<circle cx="108.125" cy="179.124" r="1.72625" transform="rotate(-120 108.125 179.124)" fill="#8B5CF6"></circle>
<circle cx="85.5115" cy="139.955" r="1.72625" transform="rotate(-120 85.5115 139.955)" fill="#8B5CF6"></circle>
<circle cx="134.138" cy="164.105" r="1.72625" transform="rotate(-120 134.138 164.105)" fill="#8B5CF6"></circle>
<circle cx="111.524" cy="124.937" r="1.72625" transform="rotate(-120 111.524 124.937)" fill="#8B5CF6"></circle>
<circle cx="95.5677" cy="186.374" r="1.72625" transform="rotate(-120 95.5677 186.374)" fill="#8B5CF6"></circle>
<circle cx="72.9537" cy="147.206" r="1.72625" transform="rotate(-120 72.9537 147.206)" fill="#8B5CF6"></circle>
<circle cx="120.982" cy="171.701" r="1.72625" transform="rotate(-120 120.982 171.701)" fill="#8B5CF6"></circle>
<circle cx="98.3683" cy="132.533" r="1.72625" transform="rotate(-120 98.3683 132.533)" fill="#8B5CF6"></circle>
<circle cx="146.995" cy="156.682" r="1.72625" transform="rotate(-120 146.995 156.682)" fill="#8B5CF6"></circle>
<circle cx="124.381" cy="117.514" r="1.72625" transform="rotate(-120 124.381 117.514)" fill="#8B5CF6"></circle>
<circle cx="100.53" cy="165.968" r="1.72625" transform="rotate(-120 100.53 165.968)" fill="#8B5CF6"></circle>
<circle cx="77.916" cy="126.8" r="1.72625" transform="rotate(-120 77.916 126.8)" fill="#8B5CF6"></circle>
<circle cx="126.543" cy="150.95" r="1.72625" transform="rotate(-120 126.543 150.95)" fill="#8B5CF6"></circle>
<circle cx="103.929" cy="111.781" r="1.72625" transform="rotate(-120 103.929 111.781)" fill="#8B5CF6"></circle>
<circle cx="87.9723" cy="173.219" r="1.72625" transform="rotate(-120 87.9723 173.219)" fill="#8B5CF6"></circle>
<circle cx="65.3583" cy="134.05" r="1.72625" transform="rotate(-120 65.3583 134.05)" fill="#8B5CF6"></circle>
<circle cx="113.387" cy="158.546" r="1.72625" transform="rotate(-120 113.387 158.546)" fill="#8B5CF6"></circle>
<circle cx="90.7728" cy="119.377" r="1.72625" transform="rotate(-120 90.7728 119.377)" fill="#8B5CF6"></circle>
<circle cx="139.399" cy="143.527" r="1.72625" transform="rotate(-120 139.399 143.527)" fill="#8B5CF6"></circle>
<circle cx="116.785" cy="104.358" r="1.72625" transform="rotate(-120 116.785 104.358)" fill="#8B5CF6"></circle>
<defs>
<radialgradient id="paint0_radial_100_548" cx="0" cy="0" r="1" gradientunits="userSpaceOnUse" gradienttransform="translate(0.578434 80.5879) scale(160)">
<stop stop-color="white"></stop>
<stop offset="0.569" stop-color="#FFEEFE"></stop>
<stop offset="0.993" stop-color="#F1C6EF"></stop>
</radialgradient>
</defs>
</svg>
</span>
</div>
</div>
</div>
</section>


<footer id="footer">
<div class="a2r ae dark:aC a2d a2s[100px] a2t[52px] wow fadeInUp" data-wow-delay=".2s">
<div class="ab">
<div class="a6 a1K ac">
<div class="a5 md:a2u/2 lg:a2v/12 xl:a2v/12 af">
<div class="a2w sm:aJ[300px]">
<a href="index.htm.html" class="aV a1O">
<img src="images/logo/iicon.png" alt="logo" class="aJ[160px] dark:am">
<img src="images/logo/iicon.png" alt="logo" class="aJ[160px] dark:al am">
</a>
<p class="a25 aR aT a1O">
Soaring Standards of Physiotherapy Service.
</p>
<div class="a6 a7">
<a target = "_blank"href="https://www.facebook.com/Eagle.Physiocare.Tasmania/?ref=page_internal" class="aT a6 a7 a1p hover:aU a20" name="social-link" aria-label="social-link">
<svg width="20" height="20" viewbox="0 0 20 20" class="a23">
<path d="M10 1.7002C5.41669 1.7002 1.66669 5.44186 1.66669 10.0502C1.66669 14.2169 4.71669 17.6752 8.70002 18.3002V12.4669H6.58335V10.0502H8.70002V8.20853C8.70002 6.11686 9.94169 4.96686 11.85 4.96686C12.7584 4.96686 13.7084 5.1252 13.7084 5.1252V7.18353H12.6584C11.625 7.18353 11.3 7.8252 11.3 8.48353V10.0502H13.6167L13.2417 12.4669H11.3V18.3002C13.2637 17.9901 15.0519 16.9881 16.3416 15.4752C17.6314 13.9624 18.3378 12.0382 18.3334 10.0502C18.3334 5.44186 14.5834 1.7002 10 1.7002Z"></path>
</svg>
</a>
<a href="javascript:void(0)" class="aT a6 a7 a1p hover:aU a20" name="social-link" aria-label="social-link">
<svg width="20" height="20" viewbox="0 0 20 20" class="a23">
<path d="M18.7167 5.00016C18.075 5.29183 17.3833 5.4835 16.6667 5.57516C17.4 5.1335 17.9667 4.4335 18.2333 3.59183C17.5417 4.0085 16.775 4.30016 15.9667 4.46683C15.3083 3.75016 14.3833 3.3335 13.3333 3.3335C11.375 3.3335 9.77499 4.9335 9.77499 6.9085C9.77499 7.19183 9.80832 7.46683 9.86666 7.72516C6.89999 7.57516 4.25832 6.15016 2.49999 3.99183C2.19166 4.51683 2.01666 5.1335 2.01666 5.7835C2.01666 7.02516 2.64166 8.12516 3.60833 8.75016C3.01666 8.75016 2.46666 8.5835 1.98333 8.3335C1.98333 8.3335 1.98333 8.3335 1.98333 8.3585C1.98333 10.0918 3.21666 11.5418 4.84999 11.8668C4.54999 11.9502 4.23333 11.9918 3.90832 11.9918C3.68333 11.9918 3.45833 11.9668 3.24166 11.9252C3.69166 13.3335 4.99999 14.3835 6.57499 14.4085C5.35832 15.3752 3.81666 15.9418 2.13333 15.9418C1.84999 15.9418 1.56666 15.9252 1.28333 15.8918C2.86666 16.9085 4.74999 17.5002 6.76666 17.5002C13.3333 17.5002 16.9417 12.0502 16.9417 7.32516C16.9417 7.16683 16.9417 7.01683 16.9333 6.8585C17.6333 6.3585 18.2333 5.72516 18.7167 5.00016Z"></path>
</svg>
</a>
<a href="javascript:void(0)" class="aT a6 a7 a1p hover:aU a20" name="social-link" aria-label="social-link">
<svg width="20" height="20" viewbox="0 0 20 20" class="a23">
<path d="M6.50002 1.6665H13.5C16.1667 1.6665 18.3334 3.83317 18.3334 6.49984V13.4998C18.3334 14.7817 17.8241 16.0111 16.9177 16.9175C16.0113 17.8239 14.7819 18.3332 13.5 18.3332H6.50002C3.83335 18.3332 1.66669 16.1665 1.66669 13.4998V6.49984C1.66669 5.21796 2.17591 3.98858 3.08234 3.08215C3.98876 2.17573 5.21814 1.6665 6.50002 1.6665ZM6.33335 3.33317C5.5377 3.33317 4.77464 3.64924 4.21203 4.21185C3.64942 4.77446 3.33335 5.53752 3.33335 6.33317V13.6665C3.33335 15.3248 4.67502 16.6665 6.33335 16.6665H13.6667C14.4623 16.6665 15.2254 16.3504 15.788 15.7878C16.3506 15.2252 16.6667 14.4622 16.6667 13.6665V6.33317C16.6667 4.67484 15.325 3.33317 13.6667 3.33317H6.33335ZM14.375 4.58317C14.6513 4.58317 14.9162 4.69292 15.1116 4.88827C15.3069 5.08362 15.4167 5.34857 15.4167 5.62484C15.4167 5.9011 15.3069 6.16606 15.1116 6.36141C14.9162 6.55676 14.6513 6.6665 14.375 6.6665C14.0988 6.6665 13.8338 6.55676 13.6385 6.36141C13.4431 6.16606 13.3334 5.9011 13.3334 5.62484C13.3334 5.34857 13.4431 5.08362 13.6385 4.88827C13.8338 4.69292 14.0988 4.58317 14.375 4.58317ZM10 5.83317C11.1051 5.83317 12.1649 6.27216 12.9463 7.05356C13.7277 7.83496 14.1667 8.89477 14.1667 9.99984C14.1667 11.1049 13.7277 12.1647 12.9463 12.9461C12.1649 13.7275 11.1051 14.1665 10 14.1665C8.89495 14.1665 7.83514 13.7275 7.05374 12.9461C6.27234 12.1647 5.83335 11.1049 5.83335 9.99984C5.83335 8.89477 6.27234 7.83496 7.05374 7.05356C7.83514 6.27216 8.89495 5.83317 10 5.83317ZM10 7.49984C9.33698 7.49984 8.70109 7.76323 8.23225 8.23207C7.76341 8.70091 7.50002 9.3368 7.50002 9.99984C7.50002 10.6629 7.76341 11.2988 8.23225 11.7676C8.70109 12.2364 9.33698 12.4998 10 12.4998C10.6631 12.4998 11.2989 12.2364 11.7678 11.7676C12.2366 11.2988 12.5 10.6629 12.5 9.99984C12.5 9.3368 12.2366 8.70091 11.7678 8.23207C11.2989 7.76323 10.6631 7.49984 10 7.49984Z"></path>
</svg>
</a>
<a href="javascript:void(0)" class="aT a6 a7 a1p hover:aU a20" name="social-link" aria-label="social-link">
<svg width="20" height="20" viewbox="0 0 20 20" class="a23">
<path d="M15.8333 2.5C16.2754 2.5 16.6993 2.67559 17.0118 2.98816C17.3244 3.30072 17.5 3.72464 17.5 4.16667V15.8333C17.5 16.2754 17.3244 16.6993 17.0118 17.0118C16.6993 17.3244 16.2754 17.5 15.8333 17.5H4.16667C3.72464 17.5 3.30072 17.3244 2.98816 17.0118C2.67559 16.6993 2.5 16.2754 2.5 15.8333V4.16667C2.5 3.72464 2.67559 3.30072 2.98816 2.98816C3.30072 2.67559 3.72464 2.5 4.16667 2.5H15.8333ZM15.4167 15.4167V11C15.4167 10.2795 15.1304 9.5885 14.621 9.07903C14.1115 8.56955 13.4205 8.28333 12.7 8.28333C11.9917 8.28333 11.1667 8.71667 10.7667 9.36667V8.44167H8.44167V15.4167H10.7667V11.3083C10.7667 10.6667 11.2833 10.1417 11.925 10.1417C12.2344 10.1417 12.5312 10.2646 12.75 10.4834C12.9688 10.7022 13.0917 10.9989 13.0917 11.3083V15.4167H15.4167ZM5.73333 7.13333C6.10464 7.13333 6.46073 6.98583 6.72328 6.72328C6.98583 6.46073 7.13333 6.10464 7.13333 5.73333C7.13333 4.95833 6.50833 4.325 5.73333 4.325C5.35982 4.325 5.0016 4.47338 4.73749 4.73749C4.47338 5.0016 4.325 5.35982 4.325 5.73333C4.325 6.50833 4.95833 7.13333 5.73333 7.13333ZM6.89167 15.4167V8.44167H4.58333V15.4167H6.89167Z"></path>
</svg>
</a>
</div>
</div>
</div>
<div class="a5 sm:a2u/2 md:a2u/2 lg:a11/12 xl:a11/12 af">
<div class="a2w">
<h3 class="a2x a1Y a1j dark:a1k a2y">
Quick Links
</h3>
<ul class="a2z[18px]">
<li>
<a href="#" class="a25 aR aT hover:aU a2A">
Our Blog
</a>
</li>
<li>
<a href="#pricing" class="a25 aR aT hover:aU a2A">
Services
</a>
</li>
<li>
<a href="#about" class="a25 aR aT hover:aU a2A">
About Us
</a>
</li>
<li>
<a href="#testimonial" class="a25 aR aT hover:aU a2A">
Reviews
</a>
</li>
</ul>
</div>
</div>
<!-- <div class="a5 sm:a2u/2 md:a2u/2 lg:a2B/12 xl:a2B/12 af">
<div class="a2w">
<h3 class="a2x a1Y a1j dark:a1k a2y">
App Information
</h3>
<ul class="a2z[18px]">
<li>
<a href="javascript:void(0)" class="a25 aR aT hover:aU a2A">
Style Guideline
</a>
</li>
<li>
<a href="javascript:void(0)" class="a25 aR aT hover:aU a2A">
Getting Started
</a>
</li>
<li>
<a href="javascript:void(0)" class="a25 aR aT hover:aU a2A">
Changelog
</a>
</li>
<li>
<a href="javascript:void(0)" class="a25 aR aT hover:aU a2A">
Update Details
</a>
</li>
</ul>
</div>
</div> -->
<div class="a5 md:a2u/2 lg:a2B/12 xl:a2B/12 af">
<!-- <div class="a2w">
<h3 class="a2x a1Y a1j dark:a1k a2y">
Join Our Newsletter
</h3>
<p class="a25 aR aT a1O">
Lorem ipsum dolor sit amet, consectetur adipiscing elit nulla
feugiat
</p>
<form class="ae">
<input type="email" placeholder="Enter your email" class="a5 a0 dark:a1 a1N a2C a2D av[14px] aH a25 a1i aT a2E focus-visible:aN focus:a2F">
<button class="ao a2G[6px] aq/2 ar/2 aw az[42px] aA[42px] a6 a7 a1p a1q a1k" name="submit-btn" aria-label="submit-btn">
<svg width="22" height="22" viewbox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M1.83333 19.25L21.0833 11L1.83333 2.75V9.16667L15.5833 11L1.83333 12.8333V19.25Z" fill="white"></path>
</svg>
</button>
</form>
</div> -->
</div>
</div>
</div>
<div>
<span class="ao a1a a2h a2i">
<svg width="142" height="73" viewbox="0 0 142 73" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M97.5778 80C97.5778 35.8054 61.7615 -5.42825e-06 17.5778 -3.49691e-06C-26.606 -1.56558e-06 -62.4222 35.8054 -62.4222 80C-62.4222 124.173 -26.606 160 17.5778 160C61.7615 160 97.5778 124.173 97.5778 80Z" fill="url(#paint0_radial_106_149)"></path>
<circle cx="103.496" cy="55.2326" r="1.84993" transform="rotate(-150.952 103.496 55.2326)" fill="#8B5CF6"></circle>
<circle cx="95.5911" cy="69.464" r="1.84993" transform="rotate(-150.952 95.5911 69.464)" fill="#8B5CF6"></circle>
<circle cx="111.22" cy="41.3244" r="1.84993" transform="rotate(-150.952 111.22 41.3244)" fill="#8B5CF6"></circle>
<circle cx="73.6349" cy="75.4679" r="1.84993" transform="rotate(-150.952 73.6349 75.4679)" fill="#8B5CF6"></circle>
<circle cx="131.636" cy="70.862" r="1.84993" transform="rotate(-150.952 131.636 70.862)" fill="#8B5CF6"></circle>
<circle cx="89.2642" cy="47.3283" r="1.84993" transform="rotate(-150.952 89.2642 47.3283)" fill="#8B5CF6"></circle>
<circle cx="81.3598" cy="61.5597" r="1.84993" transform="rotate(-150.952 81.3598 61.5597)" fill="#8B5CF6"></circle>
<circle cx="139.36" cy="56.9538" r="1.84993" transform="rotate(-150.952 139.36 56.9538)" fill="#8B5CF6"></circle>
<circle cx="96.9888" cy="33.4196" r="1.84993" transform="rotate(-150.952 96.9888 33.4196)" fill="#8B5CF6"></circle>
<circle cx="59.4034" cy="67.5636" r="1.84993" transform="rotate(-150.952 59.4034 67.5636)" fill="#8B5CF6"></circle>
<circle cx="117.404" cy="62.9572" r="1.84993" transform="rotate(-150.952 117.404 62.9572)" fill="#8B5CF6"></circle>
<circle cx="75.0325" cy="39.4235" r="1.84993" transform="rotate(-150.952 75.0325 39.4235)" fill="#8B5CF6"></circle>
<circle cx="67.1284" cy="53.6554" r="1.84993" transform="rotate(-150.952 67.1284 53.6554)" fill="#8B5CF6"></circle>
<circle cx="125.129" cy="49.049" r="1.84993" transform="rotate(-150.952 125.129 49.049)" fill="#8B5CF6"></circle>
<circle cx="82.7576" cy="25.5158" r="1.84993" transform="rotate(-150.952 82.7576 25.5158)" fill="#8B5CF6"></circle>
<defs>
<radialgradient id="paint0_radial_106_149" cx="0" cy="0" r="1" gradientunits="userSpaceOnUse" gradienttransform="translate(-62.4222 80) scale(160)">
<stop stop-color="#FFEEFE"></stop>
<stop offset="0.569" stop-color="#FFEEFE"></stop>
<stop offset="0.993" stop-color="#F1C6EF"></stop>
</radialgradient>
</defs>
</svg>
</span>
<span class="ao a16 a9 a2i">
<svg width="120" height="75" viewbox="0 0 120 75" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M103 75C137.804 75 166 46.7947 166 12C166 -22.7947 137.804 -51 103 -51C68.2141 -51 40.0003 -22.7947 40.0003 12C40.0003 46.7947 68.2141 75 103 75Z" fill="url(#paint0_radial_106_293)"></path>
<circle cx="32.5072" cy="32.5491" r="1.84993" transform="rotate(-157.548 32.5072 32.5491)" fill="#8B5CF6"></circle>
<circle cx="38.7245" cy="17.5037" r="1.84993" transform="rotate(-157.548 38.7245 17.5037)" fill="#8B5CF6"></circle>
<circle cx="44.9415" cy="2.4583" r="1.84993" transform="rotate(-157.548 44.9415 2.4583)" fill="#8B5CF6"></circle>
<circle cx="62.2536" cy="44.8406" r="1.84993" transform="rotate(-157.548 62.2536 44.8406)" fill="#8B5CF6"></circle>
<circle cx="17.4619" cy="26.3323" r="1.84993" transform="rotate(-157.548 17.4619 26.3323)" fill="#8B5CF6"></circle>
<circle cx="68.4737" cy="29.7972" r="1.84993" transform="rotate(-157.548 68.4737 29.7972)" fill="#8B5CF6"></circle>
<circle cx="23.6791" cy="11.2869" r="1.84993" transform="rotate(-157.548 23.6791 11.2869)" fill="#8B5CF6"></circle>
<circle cx="74.6905" cy="14.7513" r="1.84993" transform="rotate(-157.548 74.6905 14.7513)" fill="#8B5CF6"></circle>
<circle cx="80.908" cy="-0.293648" r="1.84993" transform="rotate(-157.548 80.908 -0.293648)" fill="#8B5CF6"></circle>
<circle cx="47.2109" cy="38.6253" r="1.84993" transform="rotate(-157.548 47.2109 38.6253)" fill="#8B5CF6"></circle>
<circle cx="2.41638" cy="20.115" r="1.84993" transform="rotate(-157.548 2.41638 20.115)" fill="#8B5CF6"></circle>
<circle cx="53.4277" cy="23.5794" r="1.84993" transform="rotate(-157.548 53.4277 23.5794)" fill="#8B5CF6"></circle>
<circle cx="8.63378" cy="5.06963" r="1.84993" transform="rotate(-157.548 8.63378 5.06963)" fill="#8B5CF6"></circle>
<circle cx="59.6451" cy="8.53448" r="1.84993" transform="rotate(-157.548 59.6451 8.53448)" fill="#8B5CF6"></circle>
<defs>
<radialgradient id="paint0_radial_106_293" cx="0" cy="0" r="1" gradientunits="userSpaceOnUse" gradienttransform="translate(103 -51) rotate(90) scale(126)">
<stop stop-color="white"></stop>
<stop offset="0.569" stop-color="#E4F2FE"></stop>
<stop offset="0.993" stop-color="#D2E2EF"></stop>
</radialgradient>
</defs>
</svg>
</span>
</div>
</div>
<div class="a0 dark:a1 a2H wow fadeInUp" data-wow-delay=".25s">
<p class="a25 aR aT a2g">
Copyright Eagle Physiocare <?php echo date('Y'); ?>, All rights reserved.
</p>
</div>
</footer>


<a x-show="scrolledFromTop" href="javascript:void(0)" class="a6 a7 a1p a1q a1k a1L a2I aw a2J a2K a2L a2M a2N[999] hover:a2O a2o back-to-top a2P">
<span class="a2B a2Q a2R a2S a2T ax a19[6px]"></span>
</a>


<script src="js/glightbox.min.js"></script>
<script src="js/main.js"></script>
<script>
      // ==== for menu scroll
      const pageLink = document.querySelectorAll(".menu-scroll");

      pageLink.forEach((elem) => {
        elem.addEventListener("click", (e) => {
          e.preventDefault();
          document.querySelector(elem.getAttribute("href")).scrollIntoView({
            behavior: "smooth",
            offsetTop: 1 - 60,
          });
        });
      });

      // section menu active
      function onScroll(event) {
        const sections = document.querySelectorAll(".scroll-menu");
        const scrollPos =
          window.pageYOffset ||
          document.documentElement.scrollTop ||
          document.body.scrollTop;

        for (let i = 0; i < sections.length; i++) {
          const currLink = sections[i];
          const val = currLink.getAttribute("href");
          const refElement = document.querySelector(val);
          const scrollTopMinus = scrollPos + 73;
          if (
            refElement.offsetTop <= scrollTopMinus &&
            refElement.offsetTop + refElement.offsetHeight > scrollTopMinus
          ) {
            document
              .querySelector(".scroll-menu")
              .classList.remove("aU");
            currLink.classList.add("aU");
          } else {
            currLink.classList.remove("aU");
          }
        }
      }

      window.document.addEventListener("scroll", onScroll);

      //========= glightbox
      GLightbox({
        href: "https://youtu.be/5XQPr4sQDYQ",
        type: "video",
        source: "youtube", //vimeo, youtube or local
        width: 900,
        autoplayVideos: true,
      });
    </script>
</body>
</html>
