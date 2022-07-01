<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <!--=============== FAVICON ===============-->
        <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">
     

        <!--=============== REMIX ICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

        <title>Portofolio</title>
    </head>
    <body>
        <!--=============== HEADER ===============-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#" class="nav__logo">
                    <img src="assets/img/logo.png" alt="">
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home" class="nav__link active-link">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="#skill" class="nav__link">Skill</a>
                        </li>
                        <li class="nav__item">
                            <a href="#project" class="nav__link">Project</a>
                        </li>
                        <li class="nav__item">
                            <a href="#contact" class="nav__link">Contact</a>
                        </li>
                        <li class="nav__item">
                            <a href="#products" class="nav__link"></a>
                        </li>
                        <li class="nav__item">
                            <a href="#products" class="nav__link"></a>
                        </li>
                        @if (Route::has('login'))
                        <li class="nav__item">
                            @auth
                            <a href="{{ url("/home") }}" class="nav__link">Home</a>
                        </li>
                        <li class="nav__item">
                            @else
                            <a href="{{ url('/login') }}" class="nav__link">Login</a>
                        </li>
                        <li class="nav__item">
                            @if (Route::has('register'))
                            <a href="{{ url('/register') }}" class="nav__link">Register</a>
                            @endif
                            @endauth
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="ri-close-line"></i>
                    </div>
                </div>
                @endif

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
            </nav>
        </header>

        <main class="main">
            <!--=============== HOME ===============-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div>
                        <img src="assets/img/home.png" alt="" class="home__img">
                    </div>
                    
                    <div class="home__data">
                        <div class="home__header">
                            <h1 class="home__title">Hai Saya</h1>
                            <h2 class="home__subtitle">Novil Mahdi</h2>
                        </div>

                        <div class="home__footer">
                            <h3 class="home__title-description">About</h3>
                            <p class="home__description">Saya lulusan IT D3 sekarang menjadi Full Stack Web Dev, 
                               saya sudah terjun ke dunia koding selama 2 tahun.
                            </p>
                            <a href="#" class="button button--flex">
                                <span class="button--flex">
                                  <img src="{{ asset('assets/img/contacts-line.png') }}" alt=""> Contact
                                </span>
                                <span class="home__price"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </section>

             <!--=============== PRODUCTS ===============-->
             <section class="products section grid" id="skill">
                <h2 class="section__title section__title-gradient">Skill</h2>

                <div class="products__container container grid">
                    <article class="products__card">
                        <div class="products__content">
                            <img src="assets/img/skill.png" alt="" class="products__img">
    
                            <h3 class="products__title">Php</h3>
                            <span class="products__price">Pemograman</span>
    
                            <button class="button button--flex products__button">
                               <img src="{{ asset('assets/img/check-line.png') }}" alt="">
                            </button>
                        </div>
                    </article>
                    <article class="products__card">
                        <div class="products__content">
                            <img src="assets/img/skill1.png" alt="" class="products__img">
    
                            <h3 class="products__title">Livewire</h3>
                            <span class="products__price">Pemograman</span>
    
                            <button class="button button--flex products__button">
                                <img src="{{ asset('assets/img/check-line.png') }}" alt="">
                            </button>
                        </div>
                    </article>
                    <article class="products__card">
                        <div class="products__content">
                            <img src="assets/img/skill2.png" alt="" class="products__img">
    
                            <h3 class="products__title">Laravel</h3>
                            <span class="products__price">Framework</span>
    
                            <button class="button button--flex products__button">
                                <img src="{{ asset('assets/img/check-line.png') }}" alt="">
                            </button>
                        </div>
                    </article>
                    <article class="products__card">
                        <div class="products__content">
                            <img src="assets/img/skill3.png" alt="" class="products__img">
    
                            <h3 class="products__title">Mysql</h3>
                            <span class="products__price">Database</span>
    
                            <button class="button button--flex products__button">
                                <img src="{{ asset('assets/img/check-line.png') }}" alt="">
                            </button>
                        </div>
                    </article>
                    <article class="products__card">
                        <div class="products__content">
                            <img src="assets/img/skill4.png" alt="" class="products__img">
    
                            <h3 class="products__title">Hmtl</h3>
                            <span class="products__price">Markup</span>
    
                            <button class="button button--flex products__button">
                                <img src="{{ asset('assets/img/check-line.png') }}" alt="">
                            </button>
                        </div>
                    </article>

                    <article class="products__card">
                        <div class="products__content">
                            <img src="assets/img/skill5.png" alt="" class="products__img">
    
                            <h3 class="products__title">Css</h3>
                            <span class="products__price">Style</span>
    
                            <button class="button button--flex products__button">
                                <img src="{{ asset('assets/img/check-line.png') }}" alt="">
                            </button>
                        </div>
                    </article>
                    <article class="products__card">
                        <div class="products__content">
                            <img src="assets/img/skill6.png" alt="" class="products__img">
    
                            <h3 class="products__title">Photoshop</h3>
                            <span class="products__price">Design</span>
    
                            <button class="button button--flex products__button">
                                <img src="{{ asset('assets/img/check-line.png') }}" alt="">
                            </button>
                        </div>
                    </article>
                </div>
            </section>

             <!--=============== DISCOUNT ===============-->
             <section class="discount section" id="project">
                <h2 class="section__title section__title-gradient">Project</h2>

                <div class="discount__container container grid">
                    <div class="discount__animate">
                        <h2 class="discount__title">Portofolio <br></h2>
                        <p class="discount__description">Website ini hanya menampilkan Portofolia clent.</p>
                        <a href="#portofolio" class="button button--flex">
                         <img src="{{ asset('assets/img/check-double-line.png') }}" alt=""> Fitur
                        </a>
                    </div>

                    <img src="assets/img/project.png" alt="" class="discount__img">
                  
                </div>
                <div class="discount__container container grid">
                    <div class="discount__animate">
                        <h2 class="discount__title">E-Commerce <br></h2>
                        <p class="discount__description">Website ini menampilkan vendor-vendor agar banyak dikenal dan digunakan jasanya</p>
                        <a href="#crud" class="button button--flex">
                            <img src="{{ asset('assets/img/check-double-line.png') }}" alt=""> Fitur
                        </a>
                    </div>

                    <img src="assets/img/project2.png" alt="" class="discount__img">
                  
                </div>
            
            </section>
            
           


            <!--=============== CASE ===============-->

            <section class="case section grid" id="portofolio">
                <h2 class="section__title section__title-gradient">Fitur</h2>

                <div class="case__container container grid">
                    <div>
                        <img src="assets/img/project.png" alt="" class="case__img">
                    </div>

                    
                    <div class="case__data">
                        <a href="#" class="button button--flex">
                            <i class="ri-information-line button__icon"></i>Read
                        </a>  
                        <br><br>
                    </div>
                </div>
            </section>


            <section class="case section grid" id="crud">
                <h2 class="section__title section__title-gradient">Fitur</h2>

                <div class="case__container container grid">
                    <div>
                        <img src="assets/img/project2.png" alt="" class="case__img">
                    </div>

                    
                    <div class="case__data">
                        <a href="#" class="button button--flex">
                            <i class="ri-information-line button__icon"></i>Authentication Google
                        </a>
                        <br><br>       
                        <a href="#" class="button button--flex">
                            <i class="ri-information-line button__icon"></i>CRUD
                        </a>  
                        <br><br>
                        <a href="#" class="button button--flex">
                            <i class="ri-information-line button__icon"></i>Database Mysql
                        </a>  
                        <br><br>
                        <a href="#" class="button button--flex">
                            <i class="ri-information-line button__icon"></i>Role: Admin & Member 
                        </a>  
                        <br><br>
                    </div>
                </div>
            </section>


             <!--=============== contact ===============-->
             <section class="specs section grid" id="contact">
                <h2 class="section__title section__title-gradient">Contact</h2>

                <div class="specs__container container grid" id="contact">
                    <div class="specs__content grid">
                        <div class="specs__data">
                          <img src="{{ asset('assets/img/github-fill.png') }}" alt="">
                            <h3 class="specs__title">Github</h3>
                            <span class="specs__subtitle">novilmahdi</span>
                        </div>
    
                        <div class="specs__data">
                            <img src="{{ asset('assets/img/instagram-line.png') }}" alt="">
                            <h3 class="specs__title">Instagram</h3>
                            <span class="specs__subtitle">@novil28</span>
                        </div>
    
                        <div class="specs__data">
                            <img src="{{ asset('assets/img/article-line.png') }}" alt="">
                            <h3 class="specs__title">Blogger</h3>
                            <span class="specs__subtitle">pelajaransekolahpintar.blogspot.com</span>
                        </div>
    
                        <div class="specs__data">
                            <i class="ri-phone-line specs__icon"></i>
                            <h3 class="specs__title">Phone</h3>
                            <span class="specs__subtitle">+62 823 6069 0353</span>
                        </div>
                    </div>
                    
                    <div>
                        <img src="assets/img/home.png" alt="" class="specs__img">
                    </div>
                    
                </div>
                
            </section>

        </main>

        <!--=============== FOOTER ===============-->
        <footer class="footer section">
            {{-- <div class="footer__container container grid">
                <a href="#" class="footer__logo">
                    <img src="assets/img/logo.png" alt="">
                </a>
    
                <div class="footer__content">
                    <h3 class="footer__title">Products</h3>
    
                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Headphones</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Earphones</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Earbuds</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Accesories</a>
                        </li>
                    </ul>
                </div>
                <div class="footer__content">
                    <form action="" class="footer__form">
                        <input type="email" placeholder="Email" class="footer__input">
                        <button class="button button--flex">
                            <i class="ri-send-plane-line button__icon"></i> Subscribe
                        </button>
                    </form>
    
                    <div class="footer__social">
                        <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                            <i class="ri-twitter-line"></i>
                        </a>
                    </div>
                </div>
    
                <div class="footer__content">
                    <h3 class="footer__title">Support</h3>
    
                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Product help</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Register</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Updates</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Provides</a>
                        </li>
                    </ul>
                </div>
    
             
            </div> --}}

            <p class="footer__copy">
                <a href="#" target="_blank" class="footer__copy-link">&#169; novilrush. All right reserved</a>
            </p>
        </footer>

        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up">
           <img src="{{ asset('assets/img/arrow-up-s-line.png') }}" alt="">
        </a>
        
        <!--=============== SCROLL REVEAL ===============-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--=============== MAIN JS ===============-->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>
</html>