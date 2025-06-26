@extends('app')

@section('title', "Demande de devis")

@section('content')
    <!-- Titre de la page -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
        <div class="container position-relative">
            <h1>Demande de devis</h1>
            <p>Veuillez remplir le formulaire ci-dessous pour recevoir un devis personnalisé.</p>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="index.html">Accueil</a></li>
                    <li class="current">Demande de devis</li>
                </ol>
            </nav>
        </div>
    </div><!-- Fin Titre de la page -->

    <!-- Section Demande de devis -->
    <section id="get-a-quote" class="get-a-quote section">

        <div class="container">

            <div class="row g-0" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-5 quote-bg" style="background-image: url(assets/img/quote-bg.jpg);"></div>

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="200">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{route('devis.send')}}" method="post" class="php-email-form">
                        @csrf
                        <h3>Demande de devis</h3>
                        <p>Merci de nous indiquer les informations nécessaires pour établir votre devis.</p>

                        <div class="row gy-4">

                            <div class="col-md-6">
                                <input type="text" name="departure" class="form-control" placeholder="Ville de départ" required="">
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="delivery" class="form-control" placeholder="Ville de livraison" required="">
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="weight" class="form-control" placeholder="Poids total (kg)" required="">
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="dimensions" class="form-control" placeholder="Dimensions (cm)" required="">
                            </div>

                            <div class="col-lg-12">
                                <h4>Vos informations personnelles</h4>
                            </div>

                            <div class="col-12">
                                <input type="text" name="name" class="form-control" placeholder="Nom" required="">
                            </div>

                            <div class="col-12">
                                <input type="email" class="form-control" name="email" placeholder="Email" required="">
                            </div>

                            <div class="col-12">
                                <input type="text" class="form-control" name="phone" placeholder="Téléphone" required="">
                            </div>

                            <div class="col-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                            </div>

                            <div class="col-12 text-center">
                                <div class="loading">Envoi en cours...</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Votre demande de devis a été envoyée avec succès. Merci !</div>

                                <button type="submit">Envoyer la demande</button>
                            </div>

                        </div>
                    </form>
                </div><!-- Fin du formulaire -->

            </div>

        </div>

    </section><!-- /Section Demande de devis -->

@endsection
