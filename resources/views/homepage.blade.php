@extends('layout.default')

@section('content')
    <div class="site-blocks-cover" id="home-section">
        <div class="img-wrap">
            <div class="owl-carousel slide-one-item hero-slider">
                <div class="slide">
                    <img src="images/glint_hero_1.jpg" alt="Image">
                </div>
                <div class="slide">
                    <img src="images/glint_hero_2.jpg" alt="Image">
                </div>
                <div class="slide">
                    <img src="images/glint_hero_3.jpg" alt="Image">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 ml-auto align-self-center">
                    <div class="intro">
                        <div class="heading text-uppercase">
                            <h1>Oipnet</h1>
                        </div>
                        <div class="text">
                            <p class="sub-text mb-5">
                                Création de solutions en ligne sur mesure.<br>
                                Formation de vos équipes sur les technologies web.
                            </p>
                            <p><a href="#" target="_blank" class="btn btn-outline-primary btn-md">Me contacter</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section" id="what-we-do-section">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6 section-title">
                        <h2 class="sub-title mb-2 d-block">Mon metier</h2>
                        <h3 class="title text-primary">Aujourd'hui je vous propose les prestations suivantes</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 ml-auto">
                        <div class="row">
                            @foreach($works as $work)
                                @include('partials.work._summary', ['work', $work])
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section" id="about-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5">
                        <img src="images/glint_about_1.jpg" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-lg-5 ml-auto section-title">
                        <h2 class="sub-title mb-2 d-block">Qui suis-je ?</h2>
                        <h3 class="title text-primary mb-3">A propos de moi</h3>
                        <p class="mb-4">
                            Developpeur indépendant depuis 2016. Depuis mon bureau installé dans le Sud-Gironde
                            j'interviens dans la réalisation de vos projet des sa conception à sa livraison
                        </p>

                        <div class="d-flex">
                            <ul class="list-unstyled ul-check success mr-5">
                                <li>Conception</li>
                                <li>Developpement</li>
                                <li>Audit</li>

                            </ul>
                            <ul class="list-unstyled ul-check success">

                                <li>Application mobile</li>
                                <li>Deploiement</li>
                                <li>Référencement</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
