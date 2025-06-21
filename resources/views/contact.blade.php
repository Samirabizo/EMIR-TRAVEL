@extends('home')


@section('title', "Contactez-nous")

@section('content')
<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/page-title-bg.jpg);">
        
      <div class="container position-relative">
        <h1>Contact</h1>
        <p>Contactez EMIR TRAVEL pour tous vos besoins en import-export au Gabon. Nous sommes à votre écoute.</p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.html">Accueil</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div>

    <!-- Contact Section -->
    <section id="contact" class="contact section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
          <!-- Remplacez par la carte du Gabon si besoin -->
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps?q=Libreville,+Gabon&output=embed" frameborder="0" allowfullscreen="" loading="lazy"></iframe>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Adresse</h3>
                <p>Quartier Louis, Libreville, Gabon</p>
              </div>
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Téléphone</h3>
                <p>+241 06 00 00 00</p>
              </div>
            </div>

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email</h3>
                <p>contact@emirtravel.ga</p>
              </div>
            </div>
          </div>

          <div class="col-lg-8">
            <form action="{route('contact.send')}" method="Post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
            @csrf
              <div class="row gy-4">
                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Votre nom" required="">
                </div>
                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Votre email" required="">
                </div>
                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Sujet" required="">
                </div>
                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>
                <div class="col-md-12 text-center">
                  <div class="loading">Chargement...</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Votre message a bien été envoyé. Merci !</div>
                  <button type="submit">Envoyer</button>
                </div>
              </div>
            </form>
          </div>

        </div>
      </div>
    </section>
  </main>

@endsection