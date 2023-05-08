@extends('User.master')

@section('Title','Liste')

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
    <div class="heading-default heading-default heading-default_context_default">
      <div class="container">
        <div class="heading-default__title">Liste des Intelligences Artificielles</div>
      </div>
    </div>
    <div class="masonry articles-list-wrapper">
      <div class="container">
        @foreach($articles as $article)
        <div class="articles-list masonry__grid">
          <div class="articles-list__item masonry__item">
            <a class="article-listing-item" data-filters="Inspiration" href="/details/{{ str_replace([' ', ',', '.', '!', '?', '(', ')', '{', '}', '[', ']', '\'', '\"', '&', '$', '#', '@', '%', '+', '=', '\\', '|', '<', '>'], '-', $article->nom) }}-{{ $article->id }}.tsx">
              <div class="article-listing-item__cover">
                <div class="article-listing-item__cover-image" >
                <img style="width :770px;heigth:1770px" src="data:image/jpg;base64,{{ $article->photo }}" />
                </div>
              </div>
              <div class="article-listing-item__content">
                <div class="article-listing-item__header">
                  <div class="article-listing-item__category">Inspiration</div>
                  <div class="article-listing-item__date">{{ $article->id }}</div>
                </div>
                <div class="article-listing-item__title">{{ $article->nom }}</div>
                <div class="article-listing-item__text">{{ $article->categorie->description }}</div>
                <div class="article-listing-item__text">{{ $article->technologie->description }}</div>
                <div class="article-listing-item__continue">Continue
                  <span class="article-listing-item__continue-icon icofont-rounded-right"></span>
                </div>
              </div>
            </a>
          </div>    
        </div>
        @endforeach
      </div>
    </div>
  </main>
  <footer class="footer-default footer">
    <div class="container">
      <div class="footer-default__head">
        <a class="logo" href="/">AI-FLOW</a>
      </div>
      <div class="row">
        <div class="footer-default__column col-12 col-sm-6 col-md-3">
          <div class="footer-default__group-title">company</div>
          <p>166 Main Street, Beverly Hills
            <br/>
            CA, 90210
          </p>
          
          <p>+0085 346 2188</p>
        </div>
        <div class="footer-default__column col-12 col-sm-6 col-md-3">
          <div class="footer-default__group-title">help center</div>
          <ul class="footer-default__list">
            <li class="footer-default__list-item">
              <a class="footer-default__list-link" href="#">FAQs</a>
            </li>
            <li class="footer-default__list-item">
              <a class="footer-default__list-link" href="#">Terms & Conditions</a>
            </li>
            <li class="footer-default__list-item">
              <a class="footer-default__list-link" href="#">Privacy</a>
            </li>
            <li class="footer-default__list-item">
              <a class="footer-default__list-link" href="#">Help</a>
            </li>
            <li class="footer-default__list-item">
              <a class="footer-default__list-link" href="#">Services</a>
            </li>
          </ul>
        </div>
        <div class="footer-default__column col-12 col-sm-6 col-md-3">
          <div class="footer-default__group-title">quick links</div>
          <ul class="footer-default__list">
            <li class="footer-default__list-item">
              <a class="footer-default__list-link" href="#">About</a>
            </li>
            <li class="footer-default__list-item">
              <a class="footer-default__list-link" href="#">Contact</a>
            </li>
            <li class="footer-default__list-item">
              <a class="footer-default__list-link" href="#">Career</a>
            </li>
            <li class="footer-default__list-item">
              <a class="footer-default__list-link" href="#">Blog</a>
            </li>
          </ul>
        </div>
        <div class="footer-default__column col-12 col-sm-6 col-md-3">
          <div class="socials footer-default__socials">
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
        </div>
      </div>
      <div class="footer-default__bottom">
        <div class="footer-default__copyright">© 2019
          <strong>AI-FLOW</strong>
          All Rights Reserved.
        </div>
        <div class="footer-default__author">Design by
          <a href="#">Logan Cee</a>
        </div>
      </div>
    </div>
  </footer>
</div>
@endsection

@section('Import')
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="AI-FLOW" name="description">
  <meta content="Paul, Logan Cee, Mikhail Ojereliev" name="author">
  <title>AI-FLOW</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400" rel="stylesheet">
  <!--CSS-->
  <link href="assets1/css/icofont.min.css" rel="stylesheet">
  <link href="assets1/css/linearicons.min.css" rel="stylesheet">
  <link href="assets1/css/magnific-popup.min.css" rel="stylesheet">
  <link href="assets1/css/animsition.min.css" rel="stylesheet">
  <link href="assets1/css/swiper.min.css" rel="stylesheet">
  <link href="assets1/css/bootstrap.min.css" rel="stylesheet">
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
<!--Theme JS-->
<script src="assets1/js/theme.js"></script>
@endsection

@section('SideBar')
<header class="header  header_fixed ">
    <div class="header__container">
      <div class="header__wrapper container-fluid">
        <div class="header__inner">
          <a class="logo header__logo" href="/">AI-FLOW</a>
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
              <strong>AI-FLOW</strong>
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
