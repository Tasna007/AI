@extends('user.Master')

@section('Title','Details')

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
    <div class="single-post">
      <div class="parallax-image single-post__head">
        <div class="parallax-image__image" data-rellax-percentage="0.5" data-rellax-speed="-3" ><img style="width :1580px;heigth:270px" src="data:image/jpg;base64,{{ $article->photo }}" /></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">
            <div class="single-post__header">
              <a class="single-post__category" href="#">News</a>
              <div class="single-post__date">{{ $article->id }}</div>
            </div>
            <div class="single-post__title">{{ $article->nom }}</div>
            <div class="single-post__text">
              <?php echo $article->description ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8 offset-lg-2">
            <h4 class="single-post__subtitle">{{ $article->categorie->nom }}</h4>
            <div class="single-post__text">{{ $article->categorie->description }}
            </div>
            <blockquote class="quote single-post__quote">
              <div class="quote__text">Pourquoi les ordinateurs ont-ils peur de la pluie ?

Parce qu'ils ont peur de se mouiller les circuits !</div>
              <div class="quote__name">ChatGPT</div>
              <div class="quote__role">8 Mia</div>
            </blockquote>
            <h4 class="single-post__subtitle">{{ $article->technologie->nom }}</h4>
            <div class="single-post__text">{{ $article->technologie->description }}
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
@endsection

@section('Import')
    <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Arquito - 3D Architecture &amp; Interior HTML Template" name="description">
  <meta content="Paul, Logan Cee, Mikhail Ojereliev" name="author">
  <title>Arquito - 3D Architecture &amp; Interior HTML Template</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400" rel="stylesheet">
  <!--CSS-->
  <link href="/assets1/css/icofont.min.css" rel="stylesheet">
  <link href="/assets1/css/linearicons.min.css" rel="stylesheet">
  <link href="/assets1/css/magnific-popup.min.css" rel="stylesheet">
  <link href="/assets1/css/animsition.min.css" rel="stylesheet">
  <link href="/assets1/css/swiper.min.css" rel="stylesheet">
  <link href="/assets1/css/bootstrap.min.css" rel="stylesheet">
  <!--Theme CSS-->
  <link href="/assets1/css/theme.css" rel="stylesheet">
  <link href="/assets1/css/responsive.css" rel="stylesheet">
  <!--Favicons-->
  <link href="/favicons/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180">
  <link href="/favicons/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png">
  <link href="/favicons/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png">
  <link href="/favicons/site.webmanifest" rel="manifest">
  <link color="#5bbad5" href="/favicons/safari-pinned-tab.svg" rel="mask-icon">
  <link href="/favicons/favicon.ico" rel="shortcut icon">
  <meta content="#da532c" name="msapplication-TileColor">
  <meta content="/favicons/browserconfig.xml" name="msapplication-config">
  <meta content="#ffffff" name="theme-color">
@endsection
@section('Script')
    <script src="/assets1/js/polyfill.min.js"></script>
<script src="/assets1/js/jquery.min.js"></script>
<script src="/assets1/js/jquery.viewport.min.js"></script>
<script src="/assets1/js/jQuerySimpleCounter.min.js"></script>
<script src="/assets1/js/jquery.magnific-popup.min.js"></script>
<script src="/assets1/js/isotope.pkgd.min.js"></script>
<script src="/assets1/js/animsition.min.js"></script>
<script src="/assets1/js/bootstrap.bundle.min.js"></script>
<script src="/assets1/js/rellax.min.js"></script>
<script src="/assets1/js/swiper.min.js"></script>
<script src="/assets1/js/smoothscroll.js"></script>
<script src="/assets1/js/svg4everybody.legacy.min.js"></script>
<script src="/assets1/js/TweenMax.min.js"></script>
<script src="/assets1/js/TimelineLite.min.js"></script>
<script src="/assets1/js/typed.min.js"></script>
<script src="/assets1/js/vivus.min.js"></script>
<!--Theme JS-->
<script src="/assets1/js/theme.js"></script>
@endsection

@section('SideBar')
<header class="header  header_fixed ">
    <div class="header__container">
      <div class="header__wrapper container-fluid">
        <div class="header__inner">
          <a class="logo header__logo" href="/">Arquito</a>
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
