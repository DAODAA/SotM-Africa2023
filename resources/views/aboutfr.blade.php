@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', 'About SotM Africa French version')
@section('content')
    <div class="py-5 bg-dark ">
        <p>OpenState Map</p>
    </div>
    <div id="jumboSection">
        <div class="jumbotron py-5">
            <h1 class="display-6">SotM Africa &amp; OpenStreetMap Africa</h1>
        </div>
    </div>
    <div class="post-section container">
        <article>
            <div class="row my-3">
                <div class="col-lg-2"></div>
                <div class="col-lg-8"><a href="{{ route('about') }}" class="french-version text-decoration-none">English
                        Version</a></div>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <p><img src="{{ asset('assets/img/posts/sotm2019_bassam.jpg') }}" alt="sotm2019 Bassam"></p>
                    <blockquote class="border-start border-5">
                        <p class="text-muted">Ne laisser personne pour compte: Émergence d’une pandémie mondiale</p>
                    </blockquote>
                </div>
                <div class="col-lg-2"> </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <p class="text-justify">
                        « State of the Map Africa » (SotM Africa) est une conférence régionale biannuelle qui célèbre la
                        culture de la cartographie ouverte, des données ouvertes, des SIG et de leur impact à travers
                        l’Afrique. La première conférence SotM Africa a été organisée par la communauté OSM en
                        <a class="text-decoration-none"
                            href="https://wiki.openstreetmap.org/wiki/State_of_the_Map_Africa_2017">Ouganda en 2017</a>. En
                        2019, elle a été accueillie à Abidjan et à Grand-Bassam en
                        <a class="text-decoration-none" href="https://2019.stateofthemap.africa">Côte d’Ivoire</a>. Le
                        premier jour,
                        la conférence a été organisée conjointement avec le programme “Understanding Risk West and Central
                        Africa” de la Banque mondiale. La conférence de cette année continuera à s’appuyer sur la stratégie
                        envisagée pour OpenStreetMap en Afrique, en tant que réseau renouvelé, fort et en pleine croissance,
                        et dans le cadre du mouvement mondial OpenStreetMap et Open GIS.
                    </p>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <p class="text-justify">La conférence de cette année s’appuiera sur une nouvelle stratégie envisagée
                        pour OpenStreetMap Africa en tant que réseau renouvelé, fort et en croissance, et faisant partie du
                        mouvement mondial de cartographie ouverte.</p>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <p class="text-justify">La conférence de cette année offrira un espace diversifié et amusant pour que
                        chacun puisse collaborer et faire partie de la communauté OpenStreetMap Africa. Nous poserons
                        également les jalons qui nous fourniront une base solide pour la communauté ouverte, collaborative
                        et participative que nous voulons construire et qui est nécessaire pour que notre mouvement se
                        diversifie et s’épanouisse. Nous espérons que vous vous joindrez à nous.</p>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <h4 class="display-6">OpenStreetMap Africa</h4>
                    <p class="text-justify">OSM Africa est un réseau de communautés locales OpenStreetMap, des communautés
                        de toute l’Afrique qui se donnent la main pour partager des ressources et collaborer pour se
                        développer et produire une carte complète et bien détaillée de l’Afrique sur OpenStreetMap afin de
                        faire progresser la qualité, l’exhaustivité et la durabilité des données géospatiales en Afrique</p>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
        </article>
    </div>
@endsection
