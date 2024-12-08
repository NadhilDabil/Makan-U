 <!-- Humberger Begin -->
 <div class="humberger__menu__overlay"></div>
 <div class="humberger__menu__wrapper">
     <div class="humberger__menu__logo">
         <a href="#"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
     </div>
     <div class="humberger__menu__profile">
         <div class="d-flex align-items-center">
             <div class="rounded-circle border d-flex justify-content-center align-items-center"
                  style="width: 40px; height: 40px;">
                 <i class="fa fa-user fa-2x" aria-hidden="true"></i>
             </div>
             <p class="humberger__menu__profile__text ml-2 my-0"><a class="underline" href="#">Login</a> / <a class="underline" href="#">Sign Up</a></p>
         </div>
     </div>
     <nav class="humberger__menu__nav mobile-menu">
         <ul>
             <li class="active"><a href="./index.html">Home</a></li>
             <li><a href="./shop-grid.html">Shop</a></li>
             <li><a href="#">Pages</a>
                 <ul class="header__menu__dropdown">
                     <li><a href="./shop-details.html">Shop Details</a></li>
                     <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                     <li><a href="./checkout.html">Check Out</a></li>
                     <li><a href="./blog-details.html">Blog Details</a></li>
                 </ul>
             </li>
             <li><a href="./blog.html">Blog</a></li>
             <li><a href="./contact.html">Contact</a></li>
         </ul>
     </nav>
     <div id="mobile-menu-wrap"></div>
 </div>
 <!-- Humberger End -->

 <!-- Header Section Begin -->
 <header class="header">
     <div class="container">
         <div class="row">
             <div class="col-lg-3">
                 <div class="header__logo">
                     <a href="./index.html"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                 </div>
             </div>
             <div class="col-lg-6">
                 <nav class="header__menu">
                     <ul>
                         <li class="active"><a href="./index.html">Home</a></li>
                         <li><a href="./shop-grid.html">Shop</a></li>
                         <li><a href="#">Pages</a>
                             <ul class="header__menu__dropdown">
                                 <li><a href="./shop-details.html">Shop Details</a></li>
                                 <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                 <li><a href="./checkout.html">Check Out</a></li>
                                 <li><a href="./blog-details.html">Blog Details</a></li>
                             </ul>
                         </li>
                         <li><a href="./blog.html">Blog</a></li>
                         <li><a href="./contact.html">Contact</a></li>
                     </ul>
                 </nav>
             </div>
             <div class="col-lg-3">
                 <div class="header__cart">
                     <ul>
                         <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                         <li><a href="#"><i class="fa fa-user"></i></a></li>
                     </ul>
                 </div>
             </div>
         </div>
         <div class="humberger__open">
             <i class="fa fa-bars"></i>
         </div>
     </div>
 </header>
 <!-- Header Section End -->
