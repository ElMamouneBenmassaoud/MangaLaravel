<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="/style/accueil.css">
    @yield('styles')
</head>
<body>
    <div id="header">
        <h1>WEBGII - Série - Manga</h1>
    </div>
    
    <div id="content">
        <div id="sidebar">
            <ul id="menu">
                <li><a href="/">Accueil</a></li>
                <li><a href="/">Nouvelle série</a></li>
            </ul>
        </div>
        
        <div id="manga-section">
            @yield('content')
        </div>
    </div>
    
    <div id="footer">
        58112 -  Benmassaoud El Mamoune - NRI
