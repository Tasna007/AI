@extends('User.master')

@section('Title','Accueil')

@section('Import')
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Accueil" name="description">
  <meta content="Tan Andriani" name="author">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400" rel="stylesheet">
  <!--CSS-->
  <link href="assets1/css/icofont.min.css" rel="stylesheet">
  <link href="assets1/css/linearicons.min.css" rel="stylesheet">
  <link href="assets1/css/magnific-popup.min.css" rel="stylesheet">
  <link href="assets1/css/animsition.min.css" rel="stylesheet">
  <link href="assets1/css/swiper.min.css" rel="stylesheet">
  <link href="assets1/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets1/css/jquery.pagepiling.css" rel="stylesheet">
  <!--Theme CSS-->
  <link href="assets1/css/theme.css" rel="stylesheet">
  <link href="assets1/css/responsive.css" rel="stylesheet">
  <!--Favicons-->
  <link href="favicons/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
  <link href="favicons/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
  <link href="favicons/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
  <link href="favicons/site.webmanifest" rel="manifest">
  <link color="#5bbad5" href="favicons/safari-pinned-tab.svg" rel="mask-icon">
  <link href="favicons/favicon.ico" rel="shortcut icon">
  <meta content="#da532c" name="msapplication-TileColor">
  <meta content="favicons/browserconfig.xml" name="msapplication-config">
  <meta content="#ffffff" name="theme-color">
@endsection

@section('SideBar')
<header class="header  header_fixed ">
    <div class="header__container">
      <div class="header__wrapper container-fluid">
        <div class="header__inner">
          <a class="logo header__logo" href="/">AI-Flow</a>
          <button class="header__menu-button" type="button">
            <span class="header__menu-button-inner"></span>
          </button>
        </div>
      </div>
      <div class="header-full-page">
        <div class="header-full-page__bottom container">
          <ul class="top-menu header-full-page__menu">
            <li class="top-menu__menu-item">
                <a class="dropdown__trigger top-menu__menu-link" href="/">Accueil</a>
            </li>
            <li class="top-menu__menu-item">
              <a class="dropdown__trigger top-menu__menu-link" href="/list">Liste des IA</a>
            </li>
          </ul>
          <div class="header-full-page__contacts">
            <span>Call us 24/7:</span>
            <a href="tel:+2610327550591">+261 032 75 505 91</a>
          </div>
        </div>
      </div>
    </div>
    <div class="header__overlay"></div>
    <div class="menu-panel header__menu">
      <div class="menu-panel__inner">
        <button class="header__menu-button header__menu-button_fixed" type="button">
          <span class="header__menu-button-inner"></span>
        </button>
        <div class="menu-panel__locales">
          <div class="menu-panel__locale link link link_active">En</div>
          <div class="menu-panel__locale link">Fr</div>
          <div class="menu-panel__locale link">De</div>
        </div>
        <div class="menu-panel__menu">
          <div class="menu-panel__menu-item">
            <a class="menu-panel__menu-link menu-panel__menu-link menu-panel__menu-link_active" data-toggle="collapse" href="/">Accueil</a>
          </div>
          <div class="menu-panel__menu-item">
            <a class="menu-panel__menu-link collapsed" data-toggle="collapse" href="/list">Liste des IA</a>
          </div>
        </div>
        <div class="menu-panel__footer">
          <div class="socials menu-panel__socials">
            <a class="socials__social icofont-twitter" href="#">
              <div class="visually-hidden">twitter</div>
            </a>
            <a class="socials__social icofont-facebook" href="#">
              <div class="visually-hidden">facebook</div>
            </a>
            <a class="socials__social icofont-google-plus" href="#">
              <div class="visually-hidden">google plus</div>
            </a>
          </div>
          <div class="menu-panel__bottom">
            <div class="menu-panel__copyright">© 2019
              <strong>ARQUITO.</strong>
              All Rights Reserved.
            </div>
            <div class="menu-panel__author">Design by
              <a href="#">Tsanta</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
@endsection


@section('Content')
<div style="display: none">
  <!-- svg sprite-->
  <svg style="width:0; height:0; visibility:hidden;" xmlns="http://www.w3.org/2000/svg">
    <symbol id="icon_ion-icon-apps" viewBox="0 0 512 512">
      <path d="M96 176h80V96H96v80zm120 240h80v-80h-80v80zm-120 0h80v-80H96v80zm0-120h80v-80H96v80zm120 0h80v-80h-80v80zM336 96v80h80V96h-80zm-120 80h80V96h-80v80zm120 120h80v-80h-80v80zm0 120h80v-80h-80v80z"/>
    </symbol>
  </svg>
</div>
<div class="page__inner animsition">
  
  <main>
    <div class="full-screen-block">
      <div class="full-screen-block__slides">
        <div class="full-screen-block__slide section full-screen-block__slide full-screen-block__slide_dark" style="background-image: url(assets/img/pexels-cottonbro-studio-8721318.jpg)">
          <div class="container">
            <div class="full-screen-block__slide-inner">
              <div class="full-screen-block__subtitle">Vouvelles inventions</div>
              <div class="full-screen-block__title-wrapper">
                <div class="full-screen-block__title">Applications de l'IA 
                <br>
                  dans différents domaines : 
                </div>
                <div class="full-screen-block__label">l'IA est utilisée dans de nombreux domaines, notamment la santé, la finance, l'automobile, la logistique, la sécurité et la défense. Les sites d'information sur l'IA peuvent 
                  <div class="full-screen-block__label-value">vous donner un aperçu des applications de l'IA dans ces domaines et comment elle peut améliorer les performances et l'efficacité.</div>
                </div>
              </div>
              <a class="full-screen-block__link full-screen-block__link_inverted" href="#">A suivre</a>
              <div class="full-screen-block__counter">
                <span>01</span>
                <span class="full-screen-block__counter-all">/04</span>
              </div>
            </div>
          </div>
        </div>
        <div class="full-screen-block__slide section" style="background-image: url(assets/img/pexels-andrew-neel-15863000.avif)">
          <div class="container">
            <div class="full-screen-block__slide-inner">
              <div class="full-screen-block__subtitle">A savoir</div>
              <div class="full-screen-block__title-wrapper">
                <div class="full-screen-block__title">Les dernières avancées 
                  <br>
                  de l'IA :
                </div>
                <div class="full-screen-block__label">l'IA est un domaine en constante évolution, et il est important de savoir ce qui se passe dans ce domaine. Les sites d'information sur l'IA vous donneront des mises à jour régulières sur les dernières avancées en matière d'IA, notamment les nouvelles technologies, 
                  <div class="full-screen-block__label-value">les applications émergentes, les avancées de la recherche et les développements commerciaux.</div>
                </div>
              </div>
              <a class="full-screen-block__link full-screen-block__link_inverted" href="#">A suivre</a>
              <div class="full-screen-block__counter">
                <span>02</span>
                <span class="full-screen-block__counter-all">/04</span>
              </div>
            </div>
          </div>
        </div>
        <div class="full-screen-block__slide section" style="background-image: url(assets/img/pexels-pixabay-50711.jpg)">
          <div class="container">
            <div class="full-screen-block__slide-inner">
              <div class="full-screen-block__subtitle">Conséquence</div>
              <div class="full-screen-block__title-wrapper">
                <div class="full-screen-block__title">Les avantages et les risques 
                  <br>
                  de l'IA :
                </div>
                <div class="full-screen-block__label">l'IA peut apporter des avantages considérables dans de nombreux domaines, mais elle peut également présenter des risques importants, tels que l'automatisation des emplois, la prise de décision biaisée, la sécurité et la confidentialité des données.
                  <div class="full-screen-block__label-value">Les sites d'information sur l'IA peuvent vous aider à comprendre les avantages et les risques potentiels de l'IA et comment les gérer.</div>
                </div>
              </div>
              <a class="full-screen-block__link full-screen-block__link_inverted" href="#">A suivre</a>
              <div class="full-screen-block__counter">
                <span>03</span>
                <span class="full-screen-block__counter-all">/04</span>
              </div>
            </div>
          </div>
        </div>
        <div class="full-screen-block__slide section full-screen-block__slide full-screen-block__slide_dark" style="background-image: url(assets/img/pexels-cottonbro-studio-6153354.jpg)">
          <div class="container">
            <div class="full-screen-block__slide-inner">
              <div class="full-screen-block__subtitle">Avez vous peur...</div>
              <div class="full-screen-block__title-wrapper">
                <div class="full-screen-block__title">Les questions éthiques 
                  <br>
                  liées à l'IA :
                </div>
                <div class="full-screen-block__label">l'IA soulève des questions éthiques importantes, notamment en matière de responsabilité, d'équité et de transparence. Les sites d'information sur l'IA peuvent vous aider à comprendre les implications éthiques de l'IA 
                  <div class="full-screen-block__label-value">et les débats en cours sur la manière de réglementer l'utilisation de l'IA de manière responsable et équitable.</div>
                </div>
              </div>
              <a class="full-screen-block__link full-screen-block__link_inverted" href="#">A suivre</a>
              <div class="full-screen-block__counter">
                <span>04</span>
                <span class="full-screen-block__counter-all">/04</span>
              </div>
            </div>
          </div>
        </div>
        
        <div class="full-screen-block__footer">
          <div class="container-fluid">
            <div class="full-screen-block__footer-inner">
              <div class="full-screen-block__socials">
                <a class="full-screen-block__social-link icofont-twitter" href="#">
                  <div class="visually-hidden">twitter</div>
                </a>
                <a class="full-screen-block__social-link icofont-facebook" href="#">
                  <div class="visually-hidden">facebook</div>
                </a>
                <a class="full-screen-block__social-link icofont-behance" href="#">
                  <div class="visually-hidden">behance</div>
                </a>
              </div>
              <div class="full-screen-block__locales">
                <a class="full-screen-block__locale full-screen-block__locale_active" href="#">En</a>
                <a class="full-screen-block__locale" href="#">Fr</a>
                <a class="full-screen-block__locale" href="#">De</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
@endsection
@section('Script')
  <script src="assets1/js/polyfill.min.js"></script>
  <script src="assets1/js/jquery.min.js"></script>
  <script src="assets1/js/jquery.viewport.min.js"></script>
  <script src="assets1/js/jQuerySimpleCounter.min.js"></script>
  <script src="assets1/js/jquery.magnific-popup.min.js"></script>
  <script src="assets1/js/isotope.pkgd.min.js"></script>
  <script src="assets1/js/animsition.min.js"></script>
  <script src="assets1/js/bootstrap.bundle.min.js"></script>
  <script src="assets1/js/rellax.min.js"></script>
  <script src="assets1/js/swiper.min.js"></script>
  <script src="assets1/js/smoothscroll.js"></script>
  <script src="assets1/js/svg4everybody.legacy.min.js"></script>
  <script src="assets1/js/TweenMax.min.js"></script>
  <script src="assets1/js/TimelineLite.min.js"></script>
  <script src="assets1/js/typed.min.js"></script>
  <script src="assets1/js/vivus.min.js"></script>
  <script src="assets1/js/jquery.pagepiling.min.js"></script>
  <!--Theme JS-->
  <script src="assets1/js/theme.js"></script>
@endsection
