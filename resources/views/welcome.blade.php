<!--
=========================================================
* LES HISTOIRES DE LEUMINE - v3.0.4
=========================================================

* Product Page:  https://www.creative-tim.com/product/material-kit 
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en" itemscope itemtype="http://schema.org/WebPage">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets_home/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="https://leshistoiresdeleumine.com/public/assets_home/img/story.png">

    <title>
    LES FIDÈLES DE ASFIYAHI
    </title>

    <!-- Fonts and icons -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

    <!-- Nucleo Icons -->
    <link href="{{ asset('assets_home/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets_home/css/nucleo-svg.css') }}" rel="stylesheet" />

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

    <!-- CSS Files -->
    <link id="pagestyle" href="{{ asset('assets_home/css/material-kit.css?v=3.0.4') }}" rel="stylesheet" />

    <!-- Nepcha Analytics (nepcha.com) -->
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"> -->
    <link href="https://cdn.jsdelivr.net/gh/djibe/material@4.6.2-1.0/css/material-plugins.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="index-page bg-gray-200">
  
  <style>
      .custom-image {
    width: 100%; /* Réglez la largeur souhaitée */
    height: auto; /* Laissez la hauteur s'ajuster automatiquement pour maintenir les proportions */
    max-height: 150px; /* Optionnel : Limitez la hauteur maximale si nécessaire */
}
  </style>
<!-- modal -->
<!-- Modal -->
<div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imageModalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center p-0">
        <img id="modalImage" src="" alt="" class="original-size mt-3 mb-3 rounded">
      </div>
    </div>
  </div>
</div>
  <!-- Navbar -->

<div class="container position-sticky z-index-sticky top-0"><div class="row"><div class="col-12">
<nav class="navbar navbar-expand-lg  blur border-radius-xl top-0 z-index-fixed shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
  <div class="container-fluid px-0">
    <a class="navbar-brand font-weight-bolder ms-sm-3" href="/" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank">
   
    <img src="{{ asset('assets_home/img/logo_asfiyahi2.png') }}" alt="Logo" style="height: 50px; margin-right: 30px;"> LES FIDÈLES DE ASFIYAHI
    </a>
    <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon mt-2">
        <span class="navbar-toggler-bar bar1"></span>
        <span class="navbar-toggler-bar bar2"></span>
        <span class="navbar-toggler-bar bar3"></span>
      </span>
    </button>
    <div class="collapse navbar-collapse pt-3 pb-2 py-lg-0 w-100" id="navigation">
      <ul class="navbar-nav navbar-nav-hover ms-auto">
        <li class="nav-item ms-lg-auto ">
          <a class="nav-link nav-link-icon me-2" href="/" >
            <i class="fa fa-home me-1"></i>
            <p class="d-inline text-sm z-index-1 font-weight-bold" data-bs-toggle="tooltip" data-bs-placement="bottom">Accueil</p>
          </a>
        </li>
        <li class="nav-item ms-lg-auto ">
          <a class="nav-link nav-link-icon me-2" href="/nos_articles">
            <i class="fa fa-newspaper"></i> Souscription
          </a>
        </li>
        <li class="nav-item ms-lg-auto">
          <a class="nav-link nav-link-icon me-2" href="/a_propos">
            <i class="fa fa-info-circle"></i> À Propos
          </a>
        </li>
        <li class="nav-item ms-lg-auto">
          <a class="nav-link nav-link-icon me-2" href="/contact">
            <i class="fa fa-envelope"></i> Contact
          </a>
        </li>
      </ul>
    </div>    
  </div>
</nav>
<!-- End Navbar -->
</div></div></div>

<header class="header-2">
  <div class="page-header min-vh-75 relative" style="background-image: url('{{ asset('assets_home/img/back.jpg') }}');">
    <span class="mask bg-gradient-primary opacity-4"></span>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 text-center mx-auto">
            <img src="{{ asset('assets_home/img/logo_asfiyahi.png') }}" alt="Logo Asfiyahi" class="img-fluid mb-4" style="max-width: 200px;">
          <h1 class="text-white pt-3 mt-n5" style="text-shadow: 2px 2px 2px black;">LES FIDÈLES DE ASFIYAHI</h1>
          <!-- <p class="lead text-white mt-3">Soutenez la radio Télévision Asfiyahi, en achetant votre carte de fidélité !</p> -->
        </div>
      </div>
    </div>
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6">

<section class="pt-3 pb-4" id="count-stats">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 mx-auto py-3">
                <div class="row">
                    <div class="col-md-3 position-relative">
                        <div class="p-3 text-center">
                            <h1 class="text-gradient text-primary"><span id="state3" countTo="1">1</span>ÈRE</h1>
                            <h5 class="mt-3">Première plateforme de référence</h5>
                            <p class="text-sm font-weight-normal">Première plateforme de référence sur l'islam et la Tidjaniyya au Sénégal.</p>
                        </div>
                        <hr class="vertical dark">
                    </div>
                    <div class="col-md-3 position-relative">
                        <div class="p-3 text-center">
                            <h1 class="text-gradient text-primary" style="color:black !important"><span id="state1" countTo="50">0</span>M+</h1>
                            <h5 class="mt-3">Visites sur le site</h5>
                            <p class="text-sm font-weight-normal">Depuis le 15 Août 2009, le site a accumulé plus de 50 millions de visites à travers le monde.</p>
                        </div>
                        <hr class="vertical dark">
                    </div>
                    <div class="col-md-3 position-relative">
                        <div class="p-3 text-center">
                            <h1 class="text-gradient text-primary"><span id="state2" countTo="100">0</span>+</h1>
                            <h5 class="mt-3">Collaborateurs</h5>
                            <p class="text-sm font-weight-normal">Plus de 100 collaborateurs au Sénégal et dans la diaspora.</p>
                        </div>
                        <hr class="vertical dark">
                    </div>
                    
                    <div class="col-md-3">
                        <div class="p-3 text-center">
                            <h1 class="text-gradient text-primary"><span id="state4" countTo="2">2</span>M+</h1>
                            <h5 class="mt-3">Followers sur les réseaux sociaux</h5>
                            <p class="text-sm font-weight-normal">Des million de followers sur Facebook, TikTok, Instagram, YouTube, et Twitter.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


  




<section class="my-5 py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
       <center> <h1 class="mb-5 text-primary">Cartes de fidélité Asfiyahi</h1></center>
      </div>
    </div>
    <div class="row align-items-center justify-content-center">
      <div class="col-md-4 mb-4">
        <div class="info card-style text-center">
          <img src="{{ asset('assets_home/img/carte__simple.jpg') }}" alt="Carte Image" class="card-img">
          <h5 class="font-weight-bolder mt-3">Carte de Fidélité</h5>
          <!-- <p class="pe-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p> -->
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="info card-style text-center">
          <img src="{{ asset('assets_home/img/carte_gold.jpg') }}" alt="Carte Image" class="card-img">
          <h5 class="font-weight-bolder mt-3">Carte de Fidélité GOLD</h5>
          <!-- <p class="pe-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p> -->
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="info card-style text-center">
          <img src="{{ asset('assets_home/img/carte_diaspora.jpg') }}" alt="Carte Image" class="card-img">
          <h5 class="font-weight-bolder mt-3">Carte de Fidélité DIASPORA</h5>
          <!-- <p class="pe-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam.</p> -->
        </div>
      </div>
    </div>
  </div>
</section>


<style>
    .card-style {
  border: 2px solid #59af5d; /* Bordure orangée */
  border-radius: 15px; /* Bordure arrondie */
  padding: 15px; /* Espacement intérieur */
  margin-left: 10px; /* Réduire l'espace entre les cartes */
  margin-right: 10px; /* Réduire l'espace entre les cartes */
  transition: transform 0.3s ease; /* Transition pour l'effet de zoom */
}

.card-style:hover {
  transform: scale(1.05); /* Effet de zoom au survol */
}

.card-img {
  border: 1px solid #000; /* Bordure noire fine */
  border-radius: 10px; /* Bordure arrondie */
  max-width: 100%;
  height: auto;
  transition: transform 0.3s ease; /* Transition pour l'effet de zoom */
}

.card-style:hover .card-img {
  transform: scale(1.05); /* Effet de zoom au survol de l'image */
}

.original-size {
    max-width: 100%;
    height: auto;
}

/* Override Select2 styles */
.select2-container--filled .select2-selection:active {
    background-color: #ffffff !important; /* Your desired background color */
}

.select2-container--filled .select2-selection:hover {
    background-color: #ffffff !important; /* Your desired background color */
}

.select2-container .select2-selection:hover {
    border-color: #000000 !important; /* Your desired border color */
}

.select2-container--filled .select2-selection {
    background-color: #ffffff !important; /* Your desired background color */
    padding: 8px 16px 8px !important; /* Your desired padding */
}
.select2-container .select2-selection:before {
    color: #fb8c00 !important;
    
}

.select2-container .select2-selection {
    -ms-flex-align: center;
    align-items: center;
    background-clip: padding-box;
    background-color: transparent;
    border-bottom: 1px solid #caccd1 !important;
    border-radius: 4px 4px 0 0;
    color: #344767 !important;
    display: -ms-flexbox;
    display: flex;
    font-size: 1rem;
    letter-spacing: .009375em;
    line-height: 1.5;
    overflow: hidden;
    padding: .375rem 0 calc(.375rem - 1px);
    text-overflow: ellipsis;
    transition: border-color 15ms linear, box-shadow 15ms linear;
    white-space: nowrap;
    width: 100%;
    will-change: border-color, box-shadow;
}
</style>


<section class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <center><h1 class="mb-5 text-primary">Souscription aux cartes de fidélité Asfiyahi</h1></center>
      </div>
    </div>
    <div class="row">
      <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
          <div class="bg-gradient-primary shadow-primary border-radius-lg p-3">
            <h3 class="text-white text-primary mb-0">Souscription </h3>
          </div>
        </div>
        <div class="card-body">
          @if (session('success'))
          <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                onClose: () => {
                    window.location.href = "#subscription-section";
                }
            });
        </script>
          @endif
          <form method="post" action="{{ route('subscriptions.store') }}">
            @csrf
            <div class="card-body p-0 my-3">
              <div class="row" id="subscription-section">
                <div class="col-md-12">
                  <div class="input-group input-group-static mb-4">
                    <label>Type de carte</label>
                    <select name="subscription_type_id" class="form-control js-example-search-single" required="required">
                      <option value="">--Type de carte--</option>
                      @foreach($subscriptionTypes as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group input-group-static mb-4">
                    <label>Prénom(s)</label>
                    <input type="text" name="first_name" class="form-control" value="{{ old('first_name') }}" required="required">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group input-group-static mb-4">
                    <label>Nom</label>
                    <input type="text" name="last_name" class="form-control" value="{{ old('last_name') }}" required="required">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group input-group-static mb-4">
                    <label>Date de naissance</label>
                    <input type="date" name="birth_date" class="form-control" value="{{ old('birth_date') }}" required="required">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group input-group-static mb-4">
                    <label>Lieu de naissance</label>
                    <input type="text" name="birth_place" class="form-control" value="{{ old('birth_place') }}" required="required">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group input-group-static mb-4">
                    <label>Téléphone</label>
                    <input type="number" name="phone" class="form-control" value="{{ old('phone') }}" required="required">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="input-group input-group-static mb-4">
                    <label>Pays</label>
                    <select class="form-control js-example-search-single" name="country_id" required="required">
                    <option value="">--Sélectionnez un pays--</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }} (+{{ $country->calling_code }})</option>
                      @endforeach
                    
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="input-group input-group-static mb-4">
                    <label>Moyen de paiement</label>
                    <select name="payment_method" class="form-control js-example-search-single" required="required">
                      <option value="">--Moyen de paiement--</option>
                      <option value="Orange Money">Orange Money</option>
                      <option value="Wave">Wave</option>
                      <option value="Visa">Visa</option>
                      <option value="Mastercard">Mastercard</option>
                    </select>
                    <!-- <input type="text" name="payment_method" class="form-control" value="{{ old('payment_method') }}"> -->
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="input-group input-group-static mb-4">
                    <label>Adresse</label>
                    <textarea name="address" class="form-control" rows="3" required="required">{{ old('address') }}</textarea>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn bg-gradient-primary mt-3 mb-0">Valider</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- <section class="py-3">
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <center> <h1 class="mb-5 text-primary">Découvrez notre galerie</h1></center>
        </div>
    </div>
    <div class="row">
        <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach($images as $key => $image)
                <div class="carousel-item @if($key == 0) active @endif">
                    <img src="{{ asset('storage/' . $image->image_path) }}" class="d-block w-100" alt="{{ $image->title }}" style="height: 400px; object-fit: cover;">
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
  </div>
</section> -->
<!-- <section class="py-3">
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
            <center> <h1 class="mb-5 text-primary">Découvrez notre galerie</h1></center>
        </div>
    </div>
    <div class="row">
        @foreach($images as $image)
        
        <div class="col-lg-3 col-sm-6">
            <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                    <a class="d-block blur-shadow-image">
                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $image->title }}" class="img-fluid shadow border-radius-lg custom-image" loading="lazy">
                    </a>
                </div>
                <div class="card-body px-0">
                    <h5>
                    <center> <p  class="text-dark font-weight-bold">{{ $image->title }}</p></center> 
                    </h5>
                    
                </div>
            </div>
        </div>
        @endforeach
    </div>
  </div>
</section> -->

<section class="py-3">
  <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mb-5 text-primary">Découvrez notre galerie</h1>
        </div>
    </div>
    <div class="row" id="gallery">
        @foreach($images as $index => $image)
        <div class="col-lg-3 col-sm-6 mb-4 gallery-item @if($index >= 8) d-none @endif">
            <div class="card card-plain">
                <div class="card-header p-0 position-relative">
                    <a class="d-block blur-shadow-image" href="#" onclick="showImageModal('{{ asset('storage/' . $image->image_path) }}', '{{ $image->title }}')">
                        <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $image->title }}" class="img-fluid shadow border-radius-lg custom-image" loading="lazy">
                    </a>
                </div>
                <div class="card-body px-0">
                    <h5 class="text-dark font-weight-bold text-center">{{ $image->title }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-lg-12 text-center">
            <button class="btn btn-primary" id="loadMore" onclick="loadMore()">Voir plus <i class="fas fa-arrow-down"></i></button>
            <button class="btn btn-secondary d-none" id="loadLess" onclick="loadLess()">Voir moins <i class="fas fa-arrow-up"></i></button>
        </div>
    </div>
  </div>
</section>


<script>
    function loadMore() {
        var items = document.querySelectorAll('.gallery-item.d-none');
        for (var i = 0; i < 8; i++) {
            if (items[i]) {
                items[i].classList.remove('d-none');
            }
        }
        if (document.querySelectorAll('.gallery-item.d-none').length === 0) {
            document.getElementById('loadMore').style.display = 'none';
        }
        document.getElementById('loadLess').classList.remove('d-none');
    }

    function loadLess() {
        var items = document.querySelectorAll('.gallery-item');
        for (var i = 8; i < items.length; i++) {
            items[i].classList.add('d-none');
        }
        document.getElementById('loadMore').style.display = 'inline-block';
        document.getElementById('loadLess').classList.add('d-none');
        window.scrollTo(0, document.getElementById('gallery').offsetTop);
    }

    function showImageModal(imageSrc, imageTitle) {
        document.getElementById('modalImage').src = imageSrc;
        document.getElementById('imageModalLabel').textContent = imageTitle;
        var myModal = new bootstrap.Modal(document.getElementById('imageModal'));
        myModal.show();
    }
</script>





<section>
    <div class="row">
        <div class="col-lg-12">
            <center> <h1 class="mb-5 text-primary">Nous contacter</h1></center>
        </div>
    </div>
  <div class="page-header min-vh-100" id="contact-form">
    <div class="container">
        
      <div class="row">
        <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
            <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: linear-gradient(195deg, rgba(102, 187, 106, 0.5) 0%, rgba(56, 142, 60, 0.5) 100%), url('{{ asset('assets_home/img/contact.jpg') }}'); background-size: cover;" loading="lazy">
                <div class="overlay-text" style="position: relative; z-index: 1; color: white; padding: 20px;">
                    <h1 style="color:white;text-shadow: 2px 2px 2px black;">ASFIYAHI</h1>
                   <p style="font-size:30px;font-weight:bold;text-shadow: 2px 2px 2px black;"> Le Groupe Asfiyahi Pionner de l’information en continu sur l’islam et la Tijaniyya au Sénégal, le groupe Asfiyahi (ceux qui aspirent à la pureté) s’est positioné depuis Août 2009 dans la promotion des valeurs musulmanes sous l’inspiration de l’Islam Soufi, incarné par les saints Hommes du Sénegal et d’Afrique.</p>
                </div>
            </div>
        </div>

        <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
          <div class="card d-flex blur justify-content-center shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
              <div class="bg-gradient-primary shadow-primary border-radius-lg p-3">
                <h3 class="text-white text-primary mb-0">Contactez nous</h3>
              </div>
            </div>
            <div class="card-body">
                @if (session('success'))
                  <div id="success-alert" class="bg-gradient-primary shadow-primary border-radius-lg p-3" role="alert">
                    
                    <strong class="text-white text-primary mb-0">{{-- session('success') --}}</strong>
                  </div>
                @endif
              <form  method="post" id="email-form" action="{{--  route('contact.send')  --}}">
                  @csrf
                <div class="card-body p-0 my-3">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="input-group input-group-static mb-4">
                        <label>Prénom & Nom</label>
                        <input type="text" name="name" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6 ps-md-2">
                      <div class="input-group input-group-static mb-4">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-12 ps-md-2">
                      <div class="input-group input-group-static mb-4">
                        <label>Objet</label>
                        <input type="text" name="subject" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group mb-0 mt-md-0 mt-4">
                    <div class="input-group input-group-static mb-4">
                      <label>Comment pouvons-nous vous aider?</label>
                      <textarea name="message" class="form-control" id="message" rows="4" ></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn bg-gradient-primary mt-3 mb-0">Envoyer</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- -------   START PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->
<div class="py-5">
  <!-- <div class="container">
    <div class="row">
      <div class="col-lg-5 ms-auto">
        <h4 class="mb-1">Thank you for your support!</h4>
        <p class="lead mb-0">We deliver the best web products</p>
      </div>
      <div class="col-lg-5 me-lg-auto my-lg-auto text-lg-end mt-5">
        <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Kit%20made%20by%20%40CreativeTim%20%23webdesign%20%23designsystem%20%23bootstrap5&url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fmaterial-kit" class="btn btn-twitter mb-0 me-2" target="_blank">
          <i class="fab fa-twitter me-1"></i> Tweet
        </a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-kit" class="btn btn-facebook mb-0 me-2" target="_blank">
          <i class="fab fa-facebook-square me-1"></i> Share
        </a>
        <a href="https://www.pinterest.com/pin/create/button/?url=https://www.creative-tim.com/product/material-kit" class="btn btn-pinterest mb-0 me-2" target="_blank">
          <i class="fab fa-pinterest me-1"></i> Pin it
        </a>
      </div>
    </div> -->
  </div>
</div>
<!-- -------   END PRE-FOOTER 2 - simple social line w/ title & 3 buttons    -------- -->

</div>


  

<footer class="footer py-5">
  <div class="container z-index-1 position-relative">
    <div class="row">
      <div class="col-lg-4 me-auto mb-lg-0 mb-4 text-lg-start text-center">
        <h6 class="text-dark font-weight-bolder text-uppercase mb-lg-4 mb-3">LES FIDÈLES DE ASFIYAHI</h6>
        <ul class="nav flex-row ms-n3 justify-content-lg-start justify-content-center mb-4 mt-sm-0">
          <li class="nav-item">
            <a class="nav-link text-dark opacity-8" href="https://leshistoiresdeleumine.com" target="_blank">
              Accueil
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark opacity-8" href="https://leshistoiresdeleumine.com/nos_articles" target="_blank">
              Souscription
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark opacity-8" href="https://leshistoiresdeleumine.com/a_propos" target="_blank">
              A propros
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark opacity-8" href="https://leshistoiresdeleumine.com/contact" target="_blank">
              Contact
            </a>
          </li>
        </ul>
        <p class="text-sm text-dark opacity-8 mb-0">
          Copyright © <script>
            document.write(new Date().getFullYear())
          </script> Asfiyahi communication
        </p>
      </div>
      <div class="col-lg-6 ms-auto  text-center ">
        <p class="mb-5 text-lg text-dark font-weight-bold">
        Rejoignez la famille Asfiyahi et profitez de tous ses avantages dès aujourd'hui!
        </p>
        <!-- <a href="javascript:;" target="_blank" class="text-dark me-xl-4 me-4 opacity-5">
          <span class="fab fa-dribbble"></span>
        </a>
        <a href="javascript:;" target="_blank" class="text-dark me-xl-4 me-4 opacity-5">
          <span class="fab fa-twitter"></span>
        </a>
        <a href="javascript:;" target="_blank" class="text-dark me-xl-4 me-4 opacity-5">
          <span class="fab fa-pinterest"></span>
        </a>
        <a href="javascript:;" target="_blank" class="text-dark opacity-5">
          <span class="fab fa-github"></span>
        </a> -->
      </div>
    </div>
  </div>
</footer>


<!--   Core JS Files   -->
<script src="{{ asset('assets_home/js/core/popper.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets_home/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('assets_home/js/plugins/perfect-scrollbar.min.js') }}"></script>

<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="{{ asset('assets_home/js/plugins/countup.min.js') }}"></script>

<script src="{{ asset('assets_home/js/plugins/choices.min.js') }}"></script>

<script src="{{ asset('assets_home/js/plugins/prism.min.js') }}"></script>
<script src="{{ asset('assets_home/js/plugins/highlight.min.js') }}"></script>

<script>
  // Attendez que le document soit prêt
  document.addEventListener('DOMContentLoaded', function() {
    // Sélectionnez la div d'alerte
    var alertDiv = document.getElementById('success-alert');

    // Vérifiez si la div d'alerte existe
    if (alertDiv) {
      // Définissez un délai de 2 secondes (2000 millisecondes) pour masquer la div
      setTimeout(function() {
        alertDiv.style.display = 'none';
      }, 4000);
    }
  });
</script>
    
<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="{{ asset('assets_home/js/plugins/rellax.min.js') }}"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="{{ asset('assets_home/js/plugins/tilt.min.js') }}"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="{{ asset('assets_home/js/plugins/choices.min.js') }}"></script>

<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="{{ asset('assets_home/js/material-kit.min.js?v=3.0.4') }}" type="text/javascript"></script>

<script type="text/javascript">
  if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    };
  }
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script>
  $(document).ready(function() {
    $('.select2').select2();
  });
</script>

<script>
$(function() {
  $('.js-example-search-single').select2({
    theme: 'filled'
    // placeholder: 'Cars',
    // width: 'auto'
  });
})
</script>



</body>

</html>
