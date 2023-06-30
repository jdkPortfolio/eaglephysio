﻿<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Articles | EaglePhysio</title>
<link rel="shortcut icon" href="images/logo/iconlight.png" type="image/x-icon">

<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/tailwind.css">
<script src="js/wow.min.js"></script>
<script>
      // ===== wow js
      new WOW().init();
    </script>

<script defer="" src="alpinejs@3.10.2/dist/cdn.min.js"></script>
<?php include 'config.php'?>
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
<a href="index.php" :class="scrolledFromTop ? 'aj lg:aP' : 'aj lg:aQ' " class="scroll-menu aR aS aT hover:aU lg:aV a6 lg:aW xl:aX">
Home
</a>
</li>
<!-- <li>
<a href="index.php#" :class="scrolledFromTop ? 'aj lg:aP' : 'aj lg:aQ' " class="scroll-menu aR aS aT hover:aU lg:aV a6 lg:aW xl:aX">
About Us
</a>
</li> -->
<li>
<a href="index.php#pricing" :class="scrolledFromTop ? 'aj lg:aP' : 'aj lg:aQ' " class="scroll-menu aR aS aT hover:aU lg:aV a6 lg:aW xl:aX">
Services
</a>
</li>
<li>
 <a href="index.php#testimonial" :class="scrolledFromTop ? 'aj lg:aP' : 'aj lg:aQ' " class="scroll-menu aR aS aT hover:aU lg:aV a6 lg:aW xl:aX">
Reviews
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


<section class="ae a2d a2U a2V a2W a2X dark:a2Y[#3c3e56] dark:a2Z a1M wow fadeInUp" data-wow-delay=".2s">
<div class="ab">
<div class="aJ[570px] a2f a2g">
<h1 class="a1X a1j dark:a1k a2_ md:a30[45px] a31 md:a31 a28">
Articles
</h1>
<p class="a25 aR aT a28">
Find the most relevant information about our Physiocare Services.
</p>
<ul class="a6 a7 a1p">
<li class="a6 a7">
<a href="index.php" class="a25 aR aT hover:aU">
Home
</a>
<span class="a25 aR aT a32">
/
</span>
</li>
<li class="a25 aR aU">
Articles
</li>
</ul>
</div>
</div>
<div class="ao a9 a1a a16 a2f a2i">
<svg class="a5 a1P" viewbox="0 0 1440 300" fill="none" xmlns="http://www.w3.org/2000/svg">
<mask id="mask0_109_1705" style="mask-type: alpha" maskunits="userSpaceOnUse" x="0" y="0" width="1440" height="300">
<rect width="1440" height="300" fill="url(#paint0_linear_109_1705)"></rect>
</mask>
<g mask="url(#mask0_109_1705)">
<path opacity="0.7" d="M1291.06 -3.15679C1175.26 243.544 983.032 314.788 901.395 319.573L872 460.514L1562.33 604.489L1702.1 -65.7031C1613.34 -147.646 1406.86 -249.858 1291.06 -3.15679Z" fill="url(#paint1_linear_109_1705)"></path>
<path opacity="0.5" d="M1222.49 9.45347C1172.63 310.802 986.959 446.139 900.353 476.139L911.528 637.115L1699.98 582.38L1646.84 -183.078C1526.17 -244.463 1272.34 -291.895 1222.49 9.45347Z" fill="url(#paint2_linear_109_1705)"></path>
<path opacity="0.7" d="M149.358 308.718C222.688 88.7382 378.04 9.42554 446.549 -2.73335L457.377 -124.754L-140.275 -177.786L-191.761 402.434C-108.609 462.853 76.0275 528.697 149.358 308.718Z" fill="url(#paint3_linear_109_1705)"></path>
<path opacity="0.5" d="M240.436 277.93C254.739 -27.18 423.33 -183.285 505.837 -223.198L475.93 -381.766L-300.729 -235.281L-158.516 518.725C-31.4918 565.589 226.133 583.039 240.436 277.93Z" fill="url(#paint4_linear_109_1705)"></path>
</g>
<defs>
<lineargradient id="paint0_linear_109_1705" x1="1440" y1="149.664" x2="-32.6283" y2="149.664" gradientunits="userSpaceOnUse">
<stop stop-color="#E4F2FE"></stop>
<stop offset="1" stop-color="#FFEEFE"></stop>
</lineargradient>
<lineargradient id="paint1_linear_109_1705" x1="995.731" y1="-66.5516" x2="1096.08" y2="471.23" gradientunits="userSpaceOnUse">
<stop stop-color="white"></stop>
<stop offset="1" stop-color="white" stop-opacity="0"></stop>
</lineargradient>
<lineargradient id="paint2_linear_109_1705" x1="884.631" y1="30.9273" x2="1156.5" y2="580.496" gradientunits="userSpaceOnUse">
<stop stop-color="white"></stop>
<stop offset="1" stop-color="white" stop-opacity="0"></stop>
</lineargradient>
<lineargradient id="paint3_linear_109_1705" x1="405.219" y1="332.927" x2="266.963" y2="-111.532" gradientunits="userSpaceOnUse">
<stop stop-color="white"></stop>
<stop offset="1" stop-color="white" stop-opacity="0"></stop>
</lineargradient>
<lineargradient id="paint4_linear_109_1705" x1="573.471" y1="217.127" x2="239.254" y2="-296.913" gradientunits="userSpaceOnUse">
<stop stop-color="white"></stop>
<stop offset="1" stop-color="white" stop-opacity="0"></stop>
</lineargradient>
</defs>
</svg>
</div>
</section>


<section id="blog" class="av[100px]">
<div class="ab">
<div class="a6 a1K ac">
<?php echo getAllArticles($connect);?>
</div>
<div class="a6 a1p ac">
<div class="a5 a2g a34 lg:a35 af">
<div class="a2f aV a2V a2W a2X dark:a1U dark:a2Z aw af a1r a36 wow fadeInUp" data-wow-delay=".2s">
<a href="javascript:void(0)" class="a37 a38 md:a1L md:a2I a6 a7 a1p a2l a0 dark:a1 a1j dark:a1k dark:hover:aU a25 a1i md:a39 hover:a1q hover:a1k">
<svg viewbox="0 0 24 24" class="a23 a2v a3a md:a1H md:a1I">
<path d="M9.99995 7.06006L9.99995 11.0601L18.92 11.0601L18.95 13.0701L9.99995 13.0701L9.99995 17.0601L4.99995 12.0601L9.99995 7.06006Z"></path>
</svg>
</a>
<a href="javascript:void(0)" class="a37 a38 md:a1L md:a2I a6 a7 a1p a2l a0 dark:a1 a1j dark:a1k dark:hover:aU a25 a1i md:a39 hover:a1q hover:a1k">
1
</a>
<a href="javascript:void(0)" class="a37 a38 md:a1L md:a2I a6 a7 a1p a2l a0 dark:a1 a1j dark:a1k dark:hover:aU a25 a1i md:a39 hover:a1q hover:a1k">
...
</a>
<a href="javascript:void(0)" class="a37 a38 md:a1L md:a2I a6 a7 a1p a2l a0 dark:a1 a1j dark:a1k dark:hover:aU a25 a1i md:a39 hover:a1q hover:a1k">
4
</a>
<a href="javascript:void(0)" class="a37 a38 md:a1L md:a2I a6 a7 a1p a2l a0 dark:a1 a1j dark:a1k dark:hover:aU a25 a1i md:a39 hover:a1q hover:a1k">
5
</a>
<a href="javascript:void(0)" class="a37 a38 md:a1L md:a2I a6 a7 a1p a2l a0 dark:a1 a1j dark:a1k dark:hover:aU a25 a1i md:a39 hover:a1q hover:a1k">
6
</a>
<a href="javascript:void(0)" class="a37 a38 md:a1L md:a2I a6 a7 a1p a2l a0 dark:a1 a1j dark:a1k dark:hover:aU a25 a1i md:a39 hover:a1q hover:a1k">
<svg viewbox="0 0 24 24" class="a23 a2v a3a md:a1H md:a1I">
<path d="M14.0001 16.9399L14 12.9399L5.08005 12.9399L5.05005 10.9299L14 10.9299L14 6.93994L19 11.9399L14.0001 16.9399Z"></path>
</svg>
</a>
</div>
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
<a href="index.php" class="aV a1O">
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
<a href="index.php" class="a25 aR aT hover:aU a2A">
Home
</a>
</li>
<li>
<a href="index.php#pricing" class="a25 aR aT hover:aU a2A">
Services
</a>
</li>
<li>
<a href="index.php#about" class="a25 aR aT hover:aU a2A">
About Us
</a>
</li>
<li>
<a href="index.php#testimonial" class="a25 aR aT hover:aU a2A">
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


<script src="js/main.js"></script>
</body>
</html>
