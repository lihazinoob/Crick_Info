<!DOCTYPE html>
   <html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!--=============== REMIXICONS ===============-->
      <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet">

      <!--=============== CSS ===============-->
      <!-- <link rel="stylesheet" href="assets/css/styles.css"> -->
      <link href="{{ asset('cssfiles/homepage.css') }}" rel="stylesheet" type="text/css">

      <title>CrickInfo</title>
   </head>
   <body>
      <!--=============== HEADER ===============-->
      <header class="header">
         <nav class="nav container">
            <div class="nav__data">
               <a href="#" class="nav__logo">
                  <i class="ri-planet-line"></i> CrickInfo
               </a>
               
               <div class="nav__toggle" id="nav-toggle">
                  <i class="ri-menu-line nav__burger"></i>
                  <i class="ri-close-line nav__close"></i>
               </div>
            </div>

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
               <ul class="nav__list">
                  <li><a href="#" class="nav__link">Home</a></li>

                  <li><a href="#" class="nav__link">Discover</a></li>

                  <!--=============== DROPDOWN 1 ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        Teams <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="#" class="dropdown__link">
                               Bangladesh
                           </a>                          
                        </li>

                        <li>
                           <a href="#" class="dropdown__link">
                               India
                           </a>
                        </li>

                        <li>
                           <a href="#" class="dropdown__link">
                              Australia
                           </a>
                        </li>
                        
                        <li>
                           <a href="#" class="dropdown__link">
                               England
                           </a>
                        </li>
                        
                        <li>
                           <a href="#" class="dropdown__link">
                               Pakistan
                           </a>
                        </li>

                        <li>
                           <a href="#" class="dropdown__link">
                               South Africa
                           </a>
                        </li>

                        <li>
                           <a href="#" class="dropdown__link">
                               Sri Lanka
                           </a>
                        </li>      

                        <li>
                           <a href="#" class="dropdown__link">
                               West Indies
                           </a>
                        </li>
                        
                        <li>
                           <a href="#" class="dropdown__link">
                               New Zealand
                           </a>
                        </li>
                        
                        <li>
                           <a href="#" class="dropdown__link">
                               Afghanistan
                           </a>
                        </li>





                     </ul>
                  </li>
                  
                  
                  <!--=============== DROPDOWN 2 ===============-->
                  <li class="dropdown__item">
                     <div class="nav__link">
                        Users <i class="ri-arrow-down-s-line dropdown__arrow"></i>
                     </div>

                     <ul class="dropdown__menu">
                        <li>
                           <a href="#" class="dropdown__link">
                              <i class="ri-user-line"></i> Profiles
                           </a>                          
                        </li>

                        
                     </ul>
                  </li>

                  
               </ul>
            </div>
         </nav>
      </header>

      <!--=============== MAIN JS ===============-->
      <!-- <script src="assets/js/main.js"></script> -->
   </body>
</html>