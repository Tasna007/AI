@extends('User.master')

@section('Title','Ajout Contenu')

@section('Content')
<section class="login-clean" style="height: 750px;">
        <form action="/insertArticle" method="POST" enctype="multipart/form-data">
            @csrf
            <h2 class="visually-hidden">Ajouter votre article</h2>
            <div class="illustration"><i class="icon ion-log-in" style="border-color: rgb(230,216,92);color: #4e73df;"></i></div>
            <div class="mb-3"><input class="form-control" type="text" name="nom" placeholder="Titre" required></div>
            <div class="mb-3"><input class="form-control" type="file" name="photo"></div>
            <div class="mb-3">
                <select class="form-select" name="idcategorie">
                    <option value="">Choisir une catégorie</option>
                    @foreach($categories as $categorie)
                    <option value="{{ $categorie->id }}">{{ $categorie->intituler }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <select class="form-select" name="idtechnologie">
                    <option value="">Choisir une technologie</option>
                    @foreach($technologies as $technologie)
                    <option value="{{ $technologie->id }}">{{ $technologie->nom }}</option>
                    @endforeach
                </select>
            </div>
            <textarea class="ckeditor" name="description"></textarea>
            <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: #4e73df;">Publier</button></div>
        </form>
    </section>
@endsection

@section('Import')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
        <link rel="stylesheet" href="assets/css/Footer-Clean.css">
        <link rel="stylesheet" href="assets/css/Header-Blue.css">
        <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        
    </head>
@endsection
@section('Script')
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/ckeditor_4.20.2_full/ckeditor/ckeditor.js"></script>
@endsection