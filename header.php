 <!-- back to top start -->
 <div class="back-to-top-wrapper">
     <button id="back_to_top" type="button" class="back-to-top-btn">
         <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
             <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
         </svg>
     </button>
 </div>
 <!-- back to top end -->

 <!-- header area start -->
 <header>
     <div class="tp-header-area tp-header-3">
         <div class="tp-header-border">
             <div class="tp-header-top theme-bg d-none d-lg-block">
                 <div class="container">
                     <div class="row">
                         <div class="col-xl-6 col-lg-7">
                             <div class="tp-header-top-content">
                                 <span><i class="fa-solid fa-phone-volume"></i> Talk with us: <a href="tel:+02087555844">+02087555844</a></span>
                                 <span><i class="fa-sharp fa-solid fa-envelope text-black"></i> <a href="mailto:
info@democareservices.co.uk">
                                         info@democareservices.co.uk</a></span>
                             </div>
                         </div>
                         <div class="col-xl-6 col-lg-5">
                             <div class="tp-header-top-social text-md-end">
                                 <span>Follow Us:</span>
                                 <a href="javascript:void(0)"><i class="fa-brands fa-facebook-f text-black"></i></a>
                                 <a href="javascript:void(0)"><i class="fa-brands fa-twitter text-black"></i></a>
                                 <a href="javascript:void(0)"><i class="fa-brands fa-vimeo-v text-black"></i></a>
                                 <a href="javascript:void(0)"><i class="fa-brands fa-pinterest-p text-black"></i></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="tp-header-exgency theme-bg">
             <div class="container">
                 <div class="row align-items-center">
                     <div class="col-xl-2 col-lg-4 col-md-3 col-9">
                         <div class="tp-header-logo">
                             <a href="https://democareservices.co.uk/"><img class="logo-fixed" src="assets/img/about/dcs-logo.png" alt="logo"></a>
                         </div>
                     </div>
                     <div class="col-xl-10 col-lg-8 col-md-9 col-3">
                         <div class="tp-header-2-main d-flex align-items-center justify-content-center">
                             <div class="main-menu d-none d-xl-block">
                                 <nav id="mobile-menu" class="tp-main-menu-content">
                                     <ul>
                                         <li class=" tp-header-box <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                                             <a href="https://democareservices.co.uk/">Home</a>
                                         </li>
                                         <li class=" <?php echo basename($_SERVER['PHP_SELF']) == 'about-us.php' ? 'active' : ''; ?>">
                                             <a href="about-us.php">About Us</a>
                                         </li>
                                         <li class="has-dropdown <?php echo in_array(basename($_SERVER['PHP_SELF']), ['children-care.php', 'elder-care.php', 'disable-care.php']) ? 'active' : ''; ?>">
                                             <a href="javascript:void(0)">Our Service</a>
                                             <ul class="tp-submenu">
                                                 <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'children-care.php' ? 'active' : ''; ?>">
                                                     <a href="children-care.php">Children Care</a>
                                                 </li>
                                                 <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'elder-care.php' ? 'active' : ''; ?>">
                                                     <a href="elder-care.php">Elder Care</a>
                                                 </li>
                                                 <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'disable-care.php' ? 'active' : ''; ?>">
                                                     <a href="disable-care.php">Disable Care</a>
                                                 </li>
                                             </ul>
                                         </li>
                                         <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                                             <a href="index.php#contact-us">Contact Us</a>
                                         </li>
                                     </ul>
                                 </nav>
                             </div>
                             <div class="offcanvas-btn d-xl-none mr-30">
                                 <button class="offcanvas-open-btn"><i class="fa-solid fa-bars"></i></button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </header>
 <!-- header area end -->

 <!-- header-sticky-area -->
 <div id="header-sticky" class="tp-header-sticky theme-bg-2">
     <div class="container-fluid">
         <div class="row">
             <div class="col-12">
                 <div class="tp-header-bottom ">
                     <div class="row align-items-center">
                         <div class="col-xl-2 col-lg-4 col-md-3 col-9">
                             <div class="logo">
                                 <a href="https://democareservices.co.uk/">
                                     <img data-width="115" src="assets/img/about/dcs-logo.png" alt="">
                                 </a>
                             </div>
                         </div>
                         <div class="col-xl-10 col-lg-8 col-md-9 col-3">
                             <div class="tp-header-2-main d-flex align-items-center justify-content-end">
                                 <div class="main-menu d-none d-xl-block">
                                     <nav id="mobile-menu" class="tp-main-menu-content">
                                         <ul>
                                             <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                                                 <a href="index.php">Home</a>
                                             </li>
                                             <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'about-us.php' ? 'active' : ''; ?>">
                                                 <a href="about-us.php">About Us</a>
                                             </li>
                                             <li class="has-dropdown <?php echo in_array(basename($_SERVER['PHP_SELF']), ['children-care.php', 'elder-care.php', 'disable-care.php']) ? 'active' : ''; ?>">
                                                 <a href="javascript:void(0)">Our Service</a>
                                                 <ul class="tp-submenu">
                                                     <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'children-care.php' ? 'active' : ''; ?>">
                                                         <a href="children-care.php">Children Care</a>
                                                     </li>
                                                     <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'elder-care.php' ? 'active' : ''; ?>">
                                                         <a href="elder-care.php">Elder Care</a>
                                                     </li>
                                                     <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'disable-care.php' ? 'active' : ''; ?>">
                                                         <a href="disable-care.php">Disable Care</a>
                                                     </li>
                                                 </ul>
                                             </li>
                                             <li class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                                                 <a href="index.php#contact-us">Contact Us</a>
                                             </li>
                                         </ul>
                                     </nav>
                                 </div>

                                 <div class="d-none d-md-block">
                                     <div class="tp-header-right d-flex align-items-center justify-content-end">
                                         <div class="tp-header-call d-flex align-items-center">
                                             <div class="tp-header-call-icon">
                                                 <span><img src="assets/img/icon/phone-3.svg" alt=""></span>
                                             </div>
                                             <div class="tp-header-call-content">
                                                 <span>Phone:</span>
                                                 <a href="tel:+917450268531">+91-7450268531</a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="offcanvas-btn d-xl-none ml-30">
                                     <button class="offcanvas-open-btn"><i class="fa-solid fa-bars"></i></button>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- heafer-sticky-area-end -->


 <!-- offcanvas area start -->
 <div class="offcanvas__area">
     <div class="offcanvas__wrapper">
         <div class="offcanvas__close">
             <button class="offcanvas__close-btn offcanvas-close-btn">
                 <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                     <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                 </svg>
             </button>
         </div>
         <div class="offcanvas__content">
             <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                 <div class="offcanvas__logo logo">
                     <a href="index.php">
                         <img class="mobile-logo-fix" src="assets/img/about/dcs-logo.png" alt="logo">
                     </a>
                 </div>
             </div>
             <div class="tp-main-menu-mobile"></div>
             
             
             <div class="side-info-social">
                 <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                 <a href="#"><i class="fa-brands fa-twitter"></i></a>
                 <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                 <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
             </div>
         </div>
     </div>
 </div>
 <div class="body-overlay"></div>
 <!-- offcanvas area end -->
