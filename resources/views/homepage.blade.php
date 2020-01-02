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
    </div>
@endsection
