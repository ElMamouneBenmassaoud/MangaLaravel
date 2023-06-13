@extends('caneva')
<link rel="stylesheet" type="text/css" href="/style/accueil.css">
@section('content')
<div class="create-form">
    <h2 class="title-content">Création d'une nouvelle série</h2>

    <form action="/serie/create" method="POST">
                @csrf

                <div class="form-group">
                    <label for="titre">Titre :</label>
                    <input type="text" name="titre" id="titre" class="form-control" value="{{ old('titre') }}" required>
                </div>

                <div class="form-group">
                    <label for="auteur">Auteur :</label>
                    <input type="text" name="auteur" id="auteur" class="form-control" value="{{ old('auteur') }}" required>
                </div>

                <div class="form-group">
                    <label for="date_parution">Date de parution :</label>
                    <input type="date" name="date_parution" id="date_parution" class="form-control" value="{{ date('Y-m-d') }}" required>
                </div>


                <div class="form-group">
                    <label for="nombre_volumes">Nombre de volumes :</label>
                    <input type="number" name="nombre_volumes" id="nombre_volumes" class="form-control" value="{{ old('nombre_volumes') }}" required>
                </div>

                <div class="form-group">
                    <label for="couverture">Nom du fichier de couverture :</label>
                    <input type="text" name="couverture" id="couverture" class="form-control" value="{{ old('couverture') }}" required>
                </div>

                <div class="form-group">
                    <label for="serie_finie">Série terminée :</label>
                    <input type="checkbox" name="serie_finie" id="serie_finie" class="form-check-input">
                </div>

            <div class="form-group">
                    <label for="description">Description :</label>
                    <input type="text" name="description" id="description" class="form-control" value="{{ old('description') }}" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </form>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

    @endsection

