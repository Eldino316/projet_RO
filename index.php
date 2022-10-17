<!DOCTYPE html>
<html>
<title>PAGE D'ACCEUIL</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="moteur/css/w3.css">
<link rel="stylesheet" href="moteur/css/bootstrap.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="moteur/css/font-awesome.min.css">
<script src="moteur/js/bootstrap.min.js"></script>
<script src="moteur/js/w3.js"></script>
<script src="moteur/js/jquery.min.js"></script>

<link href="moteur/css/bootstrap.min.css" rel="stylesheet">

<!-- MetisMenu CSS -->
<link href="moteur/css/metisMenu.min.css" rel="stylesheet">

<!-- DataTables CSS -->
<link href="moteur/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

<!-- DataTables Responsive CSS -->
<link href="moteur/css/dataTables/dataTables.responsive.css" rel="stylesheet">

<!-- Custom CSS -->
<link href="moteur/css/startmin.css" rel="stylesheet">

<!-- Custom Fonts -->
<link href="moteur/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("image/banner.jpg");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">LOGO</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">A PROPOS</a>
      <a href="#team" class="w3-bar-item w3-button"> LES COURS</a>
      <a href="#work" class="w3-bar-item w3-button">WORK</a>
      <a href="#pricing" class="w3-bar-item w3-button">PRIX DES COURS</a>
      <a href="login.php" class="w3-bar-item w3-button">S'INSCRIRE OU SE CONNECTER </a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">Menu</a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">A PROPOS</a>
  <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">LES COURS</a>
  <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
  <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRIX DES COURS</a>
  <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button">S'INSCRIRE OU SE CONNECTER</a>
</nav>


<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-left w3-text-black" style="padding:48px">
    <span class="w3-jumbo w3-hide-small">MILLENIUM UNIVERSITY</span><br>
    <span class="w3-xxlarge w3-hide-large w3-hide-medium">MILLENIUM UNIVERSITY</span><br>
    <span class="w3-large"><i>Cours, Certificats et diplômes en ligne</i></span>
    <p><a href="#about" class="w3-button w3-white w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off">En savoir plus</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">A PROPOS DE L'UNIVERSITE</h3>
  <p class="w3-center w3-large">Les caracteristiques et les options disponibles</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large"><strong>Qui nous sommes et pourquoi nous pouvons vous aider?</strong></p>
      <p>Millenium University est un principale fournisseur spécialisé de la certification en Développement et Management International
      en ligne en <strong>langue français</strong>.Nos cours, programmes et certifications remarquablement <strong>abordables</strong> ont été offerts à des
      milliers de personnes dans de nombreux pays pour les aider à devenir des managers, des financiers, des gestionnaires de projets ou de produit de classe mondiale
      </p>
    </div>
    <div class="w3-quarter">
      <i class="w3-margin-bottom w3-jumbo w3-center"></i>
      <img src="image/Capture.jpg" alt="Etudes Supérieurs" style="width:20%">
      <p class="w3-large">Cours 100% en ligne</p>
      <p>Tous les cours sont en ligne. Un ordinateur et une connexion internet c'est tout ce qu'il vous faut.</p>
    </div>
    <div class="w3-quarter">
      <i class="w3-margin-bottom w3-jumbo"></i>
      <img src="image/Capture.jpg" alt="Etudes Supérieurs" style="width:20%">
      <p class="w3-large">Cours compacts et rapides</p>
      <p>Nos cours compacts ont été développés de façon à vous faire gagner du temps</p>
    </div>
    <div class="w3-quarter">
      <i class="w3-margin-bottom w3-jumbo"></i>
      <img src="image/Capture.jpg" alt="Etudes Supérieurs" style="width:20%">
      <p class="w3-large">Certification en ligne</p>
      <p>Votre processus d'apprentissage aboutira à une certification professionnelle !</p>
    </div>
  </div>
  <div class="w3-row w3-section">
  <div class="w3-third w3-container w3-black w3-large" style="height:250px">
    <h2>Contacte Info</h2>
    <p><i class="" style="width:30px"></i> Antananarivo, MADAGASCAR</p>
    <p><i class="" style="width:30px"></i> Phone: +261 34 22 697 99</p>
    <p><i class="" style="width:30px"> </i> Email: </p>
  </div>
  <div class="w3-third w3-center w3-large w3-dark-grey w3-text-white" style="height:250px">
    <h2>Avec Millenium University</h2>
    <p>Obtenez un certificat de réussite authentifié pour chaque cours que vous avez complété.
    Suivez une collection de cours et recevez un diplôme sans frais supplémentaires.
    Partagez vos certifications avec vos connaissances et aux employeurs.</p>
  </div>
  <div class="w3-third w3-center w3-large w3-grey w3-text-white" style="height:250px">
    <p><img src="image/diplome.jpg" alt="Etudes Supérieurs" style="width:65%"></p>
  </div>
</div>


<!-- Promo Section - "We know design" -->
<div class="w3-container w3-light-grey" style="padding:128px 16px">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>We know design.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore.</p>
      <p><a href="#work" class="w3-button w3-black"> View Our Works</a></p>
    </div>
    <div class="w3-col m6">
      <img class="w3-image w3-round-large" src="image/pic2.jpg" alt="Buildings" width="700" height="394">
    </div>
  </div>
</div>

<!-- Team Section -->
<div class="w3-container w3-center" style="padding:128px 16px" id="team">
  <h3 class="w3-center">LISTE DES COURS</h3>
  <p class="w3-center w3-large">Tous les cours sont en ligne et avec certificats (tous les cours sont en français)</p>
  <div class="w3-row-padding " style="margin-top:64px">
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="image/Capture.jpg" alt="Etudes Supérieurs" style="width:40%">
        <div class="w3-container">
          <h3>Développement et Management International</h3>
          <p class="w3-opacity">Synthétique et Opérationnel</p>
          <p>L’essentiel des connaissances</p>
          <p>Tous les outils indispensables</p>
          <p>Tous les indicateurs incontournables</p>
          <p><button onclick="document.getElementById('Management').style.display='block'" class="w3-button w3-light-grey w3-block">En Savoir plus</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="image/Capture2.jpg" alt="Etude supérieurs" style="width:49%">
        <div class="w3-container">
          <h3>La Validations des acquis de l'éxperience(VAE)</h3>
          <p class="w3-opacity">Kit de Formations</p>
          <p>Acquis d'apprentissage visés</p>
          <p>Méthodes de formations</p>
          <p>Léctures Complémentaires Conseilés</p>
          <p><button onclick="document.getElementById('validation').style.display='block'" class="w3-button w3-light-grey w3-block">En Savoir plus</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card">
        <img src="image/théo.jpg" alt="Mike" style="width:30%">
        <div class="w3-container">
          <h3>Théologie Pratique et Prédictions Laïc</h3>
          <p class="w3-opacity">Web Designer</p>
          <p>Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
          <p><button class="w3-button w3-light-grey w3-block">En Savoir plus</button></p>
        </div>
      </div>
    </div>
    <div class="w3-col l3 m6 w3-margin-bottom">
      <div class="w3-card w3-animate-fading">
        <div class="w3-container">
        <p><img src="image/etape1.jpg" alt="Mike" style="width:62%"></p>
        <p><img src="image/etape2.jpg" alt="Mike" style="width:62%"></p>
        <p><img src="image/etape3.jpg" alt="Mike" style="width:62%"></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Promo Section "Statistics" -->
<div class="w3-container w3-row w3-center w3-red w3-padding-64">
  <div class="w3-quarter">
    <span class="w3-xxlarge">14+</span>
    <br>Partenaires
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">55+</span>
    <br>Projets
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">89+</span>
    <br>Enseignants Confirmés
  </div>
  <div class="w3-quarter">
    <span class="w3-xxlarge">150+</span>
    <br>Etudians
  </div>
</div>

<!-- Work Section -->
<div class="w3-container" style="padding:128px 16px" id="work">
  <h3 class="w3-center">Prêt pour commencer maintenant?</h3>
  <p class="w3-center w3-large">Voir les étapes en générales</p>

  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-col l3 m6">
      <img src="image/etape1.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A microphone">
    </div>
    <div class="w3-col l3 m6">
      <img src="image/etape2.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A phone">
    </div>
    <div class="w3-col l3 m6">
      <img src="image/etape3.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A drone">
    </div>
    <div class="w3-col l3 m6">
      <img src="image/inscrire.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="Soundbox">
    </div>
  </div>

  <div class="w3-row-padding w3-section">
    <div class="w3-col l3 m6">
      <img src="image/tech_tablet.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tablet">
    </div>
    <div class="w3-col l3 m6">
      <img src="image/tech_camera.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A camera">
    </div>
    <div class="w3-col l3 m6">
      <img src="image/tech_typewriter.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A typewriter">
    </div>
    <div class="w3-col l3 m6">
      <img src="image/tech_tableturner.jpg" style="width:100%" onclick="onClick(this)" class="w3-hover-opacity" alt="A tableturner">
    </div>
  </div>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Our Skills.</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>
      tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide">Photography</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="w3-margin-right"></i>Web Design</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class=" w3-margin-right"></i>Photoshop</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div>

<!-- Pricing Section -->
<div class="w3-container w3-center w3-dark-grey" style="padding:128px 16px" id="pricing">
  <h3>PRIX DES COURS</h3>
  <p class="w3-large"></p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Développement et Management International</li>
        <li class="w3-padding-16"><b>1000</b> Supports de Cours</li>
        <li class="w3-padding-16"><b>50</b> Exercices Confirmer</li>
        <li class="w3-padding-16"><b>Communication avec l'instituteur</b> disponible</li>
        <li class="w3-padding-16"><b>Session d'examen + Session de rattrapage</b> Chronomètrer</li>
        <li class="w3-padding-16">
          <h2 class="w3-opacity">Ar 400 000</h2>
          <span class="w3-opacity">par session</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
        <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button">S'inscrire</a>
        </li>
      </ul>
    </div>
    <div class="w3-third">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-red w3-xlarge w3-padding-48">Validation des Acquis et Expériences(VAE)</li>
        <li class="w3-padding-16"><b>100</b> Formations</li>
        <li class="w3-padding-16"><b>50</b> Apprentissages sur les expériences</li>
        <li class="w3-padding-16"><b>Communication direct avec l'instituteur</b> disponible</li>
        <li class="w3-padding-16"><b>Validations de l'expérience </b>au bout de 2 mois</li>
        <li class="w3-padding-16">
          <h2 class="w3-opacity">Ar 800 000</h2>
          <span class="w3-opacity">par Expérience</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
        <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button">S'inscrire</a>
        </li>
      </ul>
    </div>
    <div class="w3-third w3-section">
      <ul class="w3-ul w3-white w3-hover-shadow">
        <li class="w3-black w3-xlarge w3-padding-32">Théologie Pratique et Prédictions Laïc</li>
        <li class="w3-padding-16"><b>100</b>  Supports de Cours</li>
        <li class="w3-padding-16"><b>50</b> Exercices Confirmer</li>
        <li class="w3-padding-16"><b>Communication direct avec l'instituteur</b> disponible</li>
        <li class="w3-padding-16"><b>Session d'examen + Session de rattrapage </b>au bout de 2 mois</li>
        <li class="w3-padding-16">
          <h2 class="w3-opacity">Ar 800 000</h2>
          <span class="w3-opacity">par Expérience</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
        <a href="login.php" onclick="w3_close()" class="w3-bar-item w3-button">S'inscrire</a>
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey">ACCEUIL</a>
  <div class="w3-xlarge w3-section">
    
  </div>
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

<!-- Modal2 -->
<div id="validation" class="w3-modal w3-animate-opacity">
  <span onclick="document.getElementById('validation').style.display='none'"class="w3-button w3-green w3-display-topright">Fermer</span>
  <div class="w3-modal-content">
  <header class="w3-display-container w3-center">
  <button class="w3-button w3-block w3-green w3-hide-large w3-hide-medium" onclick="document.getElementById('download').style.display='block'">Download</button>
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="image/app.jpg" alt="Image 1" style="min-width:500px" width="1500" height="1000">
    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge">Vous voulez en savoir plus sur La Validations des acquis de l'éxperience(VAE)?</h1>
        <hr class="w3-opacity">
        <p>N'hesitez-plus ceci est votre chance!</p>
        <p><a href="login.php" onclick="w3_close()" class="w3-button w3-block w3-green w3-round">S'inscrire</a></p>
      </div>
    </div>
  </div>
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="image/theme2.jpg" alt="Image 2" style="min-width:500px" width="1500" height="1000">
    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge w3-text-red">Vous voulez en savoir plus sur La Validations des acquis de l'éxperience(VAE)?</h1>
        <hr class="w3-opacity">
        <p>N'hesitez-plus ceci est votre chance!</p>
        <p><a href="login.php" onclick="w3_close()" class="w3-button w3-block w3-green w3-round">S'inscrire</a></p>
      </div>
    </div>
  </div>
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="image/theme3.jpg" alt="Image 3" style="min-width:500px" width="1500" height="1000">
    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge">Vous voulez en savoir plus sur La Validations des acquis de l'éxperience(VAE)?</h1>
        <hr class="w3-opacity">
        <p>N'hesitez-plus ceci est votre chance!</p>
        <p><a href="login.php" onclick="w3_close()" class="w3-button w3-block w3-green w3-round">S'inscrire</a></p>
      </div>
    </div>
  </div>
  <a class="w3-button w3-black w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-light-grey" onclick="plusDivs(1)">Suivant</a>
  <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs(1)">Take Tour</a>
</header>

<!-- The App Section -->
<div class="w3-padding-64 w3-white">
  <div class="w3-row-padding">
    <div class="w3-col l8 m6">
      <h1 class="w3-jumbo"><b>La Validations des acquis de l'éxperience(VAE)</b></h1>
      <h1 class="w3-xxxlarge w3-text-green"><b>Pourquoi on a besoin de lui?</b></h1>
      <p>On apprend continuellement, partout et tout au long de la vie. Mais souvent l’acquisition de connaissances en dehors du système formel d’éducation et 
de formation n’est ni bien comprise ni valorisée.
Ce kit de formation sur la validation des acquis (VAE) s’adresse à un public large et varié, comprenant les 
mandants de l’OIT, les hauts fonctionnaires, les organisations d’employeurs et de travailleurs, le personnel 
du dispositif des Nations unies (ONU) et le personnel d’autres organisations multilatérales ou régionales, les 
agences bilatérales, certaines organisations non gouvernementales, les services publics chargés de l’emploi et 
les agences privées pour l’emploi, les dirigeants des établissements d’éducation et de formation et les cadres, 
évaluateurs et animateurs concernés par la VAE.</p>
<a href="login.php" onclick="w3_close()"  class="w3-button w3-light-grey w3-padding-large w3-section w3-hide-small" class="fa fa-download"> Cliquez si Vous êtes interressé!</a>
      </button>
    </div>
    <div class="w3-col l4 m6">
      <img src="image/Capture2.jpg" class="w3-image w3-right w3-hide-small" width="335" height="471">
      <div class="w3-center w3-hide-large w3-hide-medium">
      <p><a href="login.php" onclick="w3_close()" class="w3-button w3-block w3-green w3-round">S'inscrire</a></p>
        <img src="image/apps.jpg" class="w3-image w3-margin-top" width="335" height="471">
      </div>
    </div>
  </div>
</div>

<!-- Modal -->

<!-- Clarity Section -->
<div class="w3-padding-64 w3-light-grey">
  <div class="w3-row-padding">
    <div class="w3-col l4 m6">
      <img class="w3-image w3-round-large w3-hide-small w3-grayscale" src="../w3images/app5.jpg" alt="App" width="335" height="471">
    </div>
    <div class="w3-col l8 m6">
      <h1 class="w3-jumbo"><b>Votre potentiel est illimité. Votre apprentissage devrait l'être aussi.</b></h1>
      <h1 class="w3-xxxlarge w3-text-red"><b>Comment s'y prendre?</b></h1>
      <p><span class="w3-xlarge">Le programme est structuré en six unités de formation (UF), précédées d’une session de présentation pour 
« Faire connaissance » et complété d’une synthèse, avec test d’évaluation, formulaire d’évaluation et clôture.Le kit de formation complet contient un guide de l’animateur pour le coordinateur de la formation et/ou 
le formateur et des documents à distribuer aux participants à la formation. </p>
    </div>
  </div>
</div>

<!-- Features Section -->
<div class="w3-container w3-padding-64 w3-dark-grey w3-center">
  <h1 class="w3-jumbo"><b>LES ETAPES A SUIVRES</b></h1>
  <p>illustration des étapes</p>

  <div class="w3-row" style="margin-top:64px">
    <div class="w3-col s3">
      <i class="w3-text-orange w3-jumbo"></i>
      <p>S'inscrire</p>
    </div>
    <div class="w3-col s3">
      <i class="w3-text-red w3-jumbo"></i>
      <p>Paiement du Cours en lingne</p>
    </div>
    <div class="w3-col s3">
      <i class="w3-text-yellow w3-jumbo"></i>
      <p> Acquis d’apprentissages visés</p>
    </div>
    <div class="w3-col s3">
      <i class="w3-text-green w3-jumbo"></i>
      <p>Plan</p>
    </div>
  </div>

  <div class="w3-row" style="margin-top:64px">
    <div class="w3-col s3">
      <i class="w3-text-white w3-jumbo"></i>
      <p>Questions Clés</p>
    </div>
    <div class="w3-col s3">
      <i class="w3-text-blue w3-jumbo"></i>
      <p>Contenu</p>
    </div>
    <div class="w3-col s3">
      <i class="w3-text-amber w3-jumbo"></i>
      <p>Notes pour les formateurs</p>
    </div>
    <div class="w3-col s3">
      <i class="w3-text-cyan w3-jumbo"></i>
      <p>Commencez une session normale</p>
    </div>
  </div>
  
  <div class="w3-row" style="margin-top:64px">
    <div class="w3-col s3">
      <i class="w3-text-sand w3-jumbo"></i>
      <p>Reçevoir le résultat</p>
    </div>
    <div class="w3-col s3">
      <i class="w3-text-orange w3-jumbo"></i>
      <p>Demander une session de rattrapage</p>
    </div>
    <div class="w3-col s3">
      <i class="w3-text-grey w3-jumbo"></i>
      <p>recevoir les décisions du Jury</p>
    </div>
    <div class="w3-col s3">
      <i class="w3-text-pink w3-jumbo"></i>
      <p>revoir des certificats</p>
    </div>
  </div>
</div>

<!-- Pricing Section -->
<div class="w3-padding-64 w3-center w3-white">
  <h1 class="w3-jumbo"><b>PRIX DES COURS</b></h1>
  <p class="w3-large">Les prix sont abordable selon votre Choix:</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-half w3-section">
      <ul class="w3-ul w3-card w3-hover-shadow">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Basique</li>
        <li class="w3-padding-16"><b>250</b>Supports des cours</li>
        <li class="w3-padding-16"><b>10</b> Exercices Confirmer</li>
        <li class="w3-padding-16"><b>Communication avec l'instituteur</b>Non disponible</li>
        <li class="w3-padding-16"><b>Session d'examen</b>Chronomètrer</li>
        <li class="w3-padding-16">
          <h2 class="w3-opacity">Ar 300 000</h2>
        </li>
        <li class="w3-light-grey w3-padding-24">
        <p><a href="login.php" onclick="w3_close()" class="w3-button w3-block w3-green w3-round">S'inscrire</a></p>
        </li>
      </ul>
    </div>
    <div class="w3-half w3-section">
      <ul class="w3-ul w3-card w3-hover-shadow">
        <li class="w3-red w3-xlarge w3-padding-32">Prémium</li>
        <li class="w3-padding-16"><b>1000</b>Supports des Cours</li>
        <li class="w3-padding-16"><b>50</b>Exercices Confirmer</li>
        <li class="w3-padding-16"><b>Communication avec l'instituteur</b>disponible</li>
        <li class="w3-padding-16"><b>Session d'examen + Session de rattrapage</b>Chronomètrer</li>
        <li class="w3-padding-16">
          <h2 class="w3-opacity">Ar 400 000</h2>
        </li>
        <li class="w3-light-grey w3-padding-24">
        <p><a href="login.php" onclick="w3_close()" class="w3-button w3-block w3-green w3-round">S'inscrire</a></p>
        </li>
      </ul>
    </div>
  </div>
  <br>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-light-grey w3-center w3-xlarge">
  <div class="w3-section">
    
  </div>
</footer>

<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
  </div>
</div>

<!-- Modal -->
<div id="Management" class="w3-modal w3-animate-opacity">
  <span onclick="document.getElementById('Management').style.display='none'"class="w3-button w3-green w3-display-topright">Fermer</span>
  <div class="w3-modal-content">
  <header class="w3-display-container w3-center">
  <button class="w3-button w3-block w3-green w3-hide-large w3-hide-medium" onclick="document.getElementById('download').style.display='block'">Download</button>
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="image/app.jpg" alt="Image 1" style="min-width:500px" width="1500" height="1000">
    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge">Vous voulez en savoir plus sur le Management International?</h1>
        <hr class="w3-opacity">
        <p>N'hesitez-plus ceci est votre chance!</p>
        <p><a href="login.php" onclick="w3_close()" class="w3-button w3-block w3-green w3-round">S'inscrire</a></p>
      </div>
    </div>
  </div>
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="image/theme2.jpg" alt="Image 2" style="min-width:500px" width="1500" height="1000">
    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge w3-text-red">Vous voulez en savoir plus sur le Management International?</h1>
        <hr class="w3-opacity">
        <p>N'hesitez-plus ceci est votre chance!</p>
        <p><a href="login.php" onclick="w3_close()" class="w3-button w3-block w3-green w3-round">S'inscrire</a></p>
      </div>
    </div>
  </div>
  <div class="mySlides w3-animate-opacity">
    <img class="w3-image" src="image/theme3.jpg" alt="Image 3" style="min-width:500px" width="1500" height="1000">
    <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
      <div class="w3-black w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
        <h1 class="w3-xlarge">Vous voulez en savoir plus sur le Management International?</h1>
        <hr class="w3-opacity">
        <p>N'hesitez-plus ceci est votre chance!</p>
        <p><a href="login.php" onclick="w3_close()" class="w3-button w3-block w3-green w3-round">S'inscrire</a></p>
      </div>
    </div>
  </div>
  <a class="w3-button w3-black w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-light-grey" onclick="plusDivs(1)">Suivant</a>
  <a class="w3-button w3-block w3-black w3-hide-large w3-hide-medium" onclick="plusDivs(1)">Take Tour</a>
</header>

<!-- The App Section -->
<div class="w3-padding-64 w3-white">
  <div class="w3-row-padding">
    <div class="w3-col l8 m6">
      <h1 class="w3-jumbo"><b>Administration et Management International</b></h1>
      <h1 class="w3-xxxlarge w3-text-green"><b>Pourquoi on a besoin de lui?</b></h1>
      <p>Les organisations opèrent sur un terrain de jeu global. L’environnement 
mondial est turbulent et se caractérise par ses multiples dimensions.
Cette complexité est étroitement liée à l’hétérogénéité des pays, notamment entre ceux émergents et ceux qui sont déjà développés. La question de la régionalisation peut également entrer en ligne de compte. De 
plus, la globalisation se caractérise par le nombre croissant et la diversité 
des acteurs impliqués dans les activités internationales : des firmes multinationales (FMN) et des petites et moyennes entreprises (PME), des 
entreprises ayant plusieurs localisations géographiques (pays développés 
et pays émergents), des firmes publiques ou privées, ainsi que des parties prenantes dont l’influence est croissante. Les acteurs sont nombreux, 
avec des spécificités et des intérêts divers.</p>
<a href="login.php" onclick="w3_close()"  class="w3-button w3-light-grey w3-padding-large w3-section w3-hide-small" class="fa fa-download"> Cliquez si Vous êtes interressé!</a>
      </button>
    </div>
    <div class="w3-col l4 m6">
      <img src="image/Capture.jpg" class="w3-image w3-right w3-hide-small" width="335" height="471">
      <div class="w3-center w3-hide-large w3-hide-medium">
      <p><a href="login.php" onclick="w3_close()" class="w3-button w3-block w3-green w3-round">S'inscrire</a></p>
        <img src="image/apps.jpg" class="w3-image w3-margin-top" width="335" height="471">
      </div>
    </div>
  </div>
</div>

<!-- Modal -->

<!-- Clarity Section -->
<div class="w3-padding-64 w3-light-grey">
  <div class="w3-row-padding">
    <div class="w3-col l4 m6">
      <img class="w3-image w3-round-large w3-hide-small w3-grayscale" src="../w3images/app5.jpg" alt="App" width="335" height="471">
    </div>
    <div class="w3-col l8 m6">
      <h1 class="w3-jumbo"><b>Votre potentiel est illimité. Votre apprentissage devrait l'être aussi.</b></h1>
      <h1 class="w3-xxxlarge w3-text-red"><b>Comment s'y prendre?</b></h1>
      <p><span class="w3-xlarge">Tous les cours se font en linge. Vous n'avez besoin qu'une connexion internet pour étudier.
      Vous béneficiez des exercices pour appuyer votre capaciter, vous commencer l'examen selon le temps que vous voulez. </p>
    </div>
  </div>
</div>

<!-- Features Section -->
<div class="w3-container w3-padding-64 w3-dark-grey w3-center">
  <h1 class="w3-jumbo"><b>LES ETAPES A SUIVRES</b></h1>
  <p>illustration des étapes</p>

  <div class="w3-row" style="margin-top:64px">
    <div class="w3-col s3">
      <i class="w3-text-orange w3-jumbo"></i>
      <p>S'inscrire</p>
    </div>
    <div class="w3-col s3">
      <i class="w3-text-red w3-jumbo"></i>
      <p>Paiement du Cours en lingne</p>
    </div>
    <div class="w3-col s3">
      <i class="w3-text-yellow w3-jumbo"></i>
      <p>Etudier et reçevez les support de cours selon votre choix</p>
    </div>
    <div class="w3-col s3">
      <i class="w3-text-green w3-jumbo"></i>
      <p>S'exercer</p>
    </div>
  </div>

  <div class="w3-row" style="margin-top:64px">
    <div class="w3-col s3">
      <i class="w3-text-white w3-jumbo"></i>
      <p>Envoyer des messages à l'instituteur en cas de problèmes</p>
    </div>
    <div class="w3-col s3">
      <i class="w3-text-blue w3-jumbo"></i>
      <p>Suivre l'avancement de votre niveau</p>
    </div>
    <div class="w3-col s3">
      <i class="w3-text-amber w3-jumbo"></i>
      <p>Demander une numéro de session d'examen si vous êtes prêts</p>
    </div>
    <div class="w3-col s3">
      <i class="w3-text-cyan w3-jumbo"></i>
      <p>Commencez une session normale</p>
    </div>
  </div>
  
  <div class="w3-row" style="margin-top:64px">
    <div class="w3-col s3">
      <i class="w3-text-sand w3-jumbo"></i>
      <p>Reçevoir le résultat</p>
    </div>
    <div class="w3-col s3">
      <i class="w3-text-orange w3-jumbo"></i>
      <p>Demander une session de rattrapage</p>
    </div>
    <div class="w3-col s3">
      <i class="w3-text-grey w3-jumbo"></i>
      <p>recevoir les décisions du Jury</p>
    </div>
    <div class="w3-col s3">
      <i class="w3-text-pink w3-jumbo"></i>
      <p>revoir des certificats</p>
    </div>
  </div>
</div>

<!-- Pricing Section -->
<div class="w3-padding-64 w3-center w3-white">
  <h1 class="w3-jumbo"><b>PRIX DES COURS</b></h1>
  <p class="w3-large">Les prix sont abordable selon votre Choix:</p>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-half w3-section">
      <ul class="w3-ul w3-card w3-hover-shadow">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Basique</li>
        <li class="w3-padding-16"><b>250</b>Supports des cours</li>
        <li class="w3-padding-16"><b>10</b> Exercices Confirmer</li>
        <li class="w3-padding-16"><b>Communication avec l'instituteur</b>Non disponible</li>
        <li class="w3-padding-16"><b>Session d'examen</b>Chronomètrer</li>
        <li class="w3-padding-16">
          <h2 class="w3-opacity">Ar 300 000</h2>
        </li>
        <li class="w3-light-grey w3-padding-24">
        <p><a href="login.php" onclick="w3_close()" class="w3-button w3-block w3-green w3-round">S'inscrire</a></p>
        </li>
      </ul>
    </div>
    <div class="w3-half w3-section">
      <ul class="w3-ul w3-card w3-hover-shadow">
        <li class="w3-red w3-xlarge w3-padding-32">Prémium</li>
        <li class="w3-padding-16"><b>1000</b>Supports des Cours</li>
        <li class="w3-padding-16"><b>50</b>Exercices Confirmer</li>
        <li class="w3-padding-16"><b>Communication avec l'instituteur</b>disponible</li>
        <li class="w3-padding-16"><b>Session d'examen + Session de rattrapage</b>Chronomètrer</li>
        <li class="w3-padding-16">
          <h2 class="w3-opacity">Ar 400 000</h2>
        </li>
        <li class="w3-light-grey w3-padding-24">
        <p><a href="login.php" onclick="w3_close()" class="w3-button w3-block w3-green w3-round">S'inscrire</a></p>
        </li>
      </ul>
    </div>
  </div>
  <br>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-light-grey w3-center w3-xlarge">
  <div class="w3-section">
    
  </div>
</footer>

<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
  </div>
</div>

</body>

<!-- Mirrored from www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_startup by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Jan 2020 01:42:08 GMT -->
</html>

 <script src="moteur/js/jquery.min.js"></script>

        
<script src="moteur/js/bootstrap.min.js"></script>


<script src="moteur/js/metisMenu.min.js"></script>


<script src="moteur/js/dataTables/jquery.dataTables.min.js"></script>
<script src="moteur/js/dataTables/dataTables.bootstrap.min.js"></script>


<script src="moteur/js/startmin.js"></script>
<script src="moteur/js/jquery.min.js"></script>


<script src="moteur/js/bootstrap.min.js"></script>


<script src="moteur/js/metisMenu.min.js"></script>


<script src="moteur/js/startmin.js"></script>

