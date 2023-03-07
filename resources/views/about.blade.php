@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', 'About SotM Africa')
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
                <div class="col-lg-8"><a href="{{ route('about-fr') }}" class="french-version text-decoration-none">Version
                        Française</a></div>
            </div>
            <div class="row">
                <div class="col-lg-2"></div>
                <div class="col-lg-8">
                    <p><img src="{{ asset('assets/img/posts/sotm2019_bassam.jpg') }}" alt="sotm2019 Bassam"></p>
                    <blockquote class="border-start border-5">
                        <p class="text-muted">Leaving no one behind: Emerging from a global pandemic</p>
                    </blockquote>
                </div>
                <div class="col-lg-2"> </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <p class="text-justify">
                        The State of the Map Africa (SotM Africa) is a bi-annual regional conference that celebrates the
                        culture of open mapping, open data, GIS and its impact across Africa. The first SotM Africa
                        conference was hosted by the OSM community in
                        <a class="text-decoration-none"
                            href="https://wiki.openstreetmap.org/wiki/State_of_the_Map_Africa_2017">Uganda in 2017</a> and
                        in <a class="text-decoration-none" href="https://2019.stateofthemap.africa">2019 in Cote
                            d’Ivoire</a>.
                    </p>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <p class="text-justify">{{ $viewData['second paragraph'] }}</p>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <p class="text-justify">{{ $viewData['third paragraph'] }}</p>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <h4 class="display-6">OpenStreetMap Africa</h4>
                    <p class="text-justify">{{ $viewData['fourth paragraph'] }}</p>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
        </article>
    </div>
@endsection
