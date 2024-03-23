<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Hotel Beni Hamad</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
   <!-- swiper js cdn link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <!-- custom css link -->
   <link rel="stylesheet" href="style.css">
</head>
<body>

   <!-- header -->

   <header class="header">
      <div class="artan">
         <img src="/images/ghir-HBH2.png" alt="">
         <a href="#" class="logo"> Hotel Beni Hamad </a>
      </div>
      <!-- <i class="fas fa-hotel"></i> -->
      <nav class="navbar">
         <a href="#home">Accueil</a>
         <a href="#about">À propos</a>
         <ul class="list">
            <li class="nav-item menU">
               <a class="nav-link pe-4" href="#reservation">Réservation</a>
               <ul class="submenu">
                 <li><a href="#room">Chambre & Tarifs</a></li>
                 <li><a href="#EVENEMENT">Événement & Salles</a></li>
             </ul>
             </li>
            </ul>
         <a href="#gallery">Gallerie</a>
         <a href="#review">Avis</a>
         <a href="#faq">faq</a>
         <!-- <a href="#reservation" class=""> book now</a> -->
         
          </li>
         </ul>
         <a href="login & sign up/login.html" class="btn" id="log"> Registre</a>
         
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
      
   </header>

   <!-- end -->

   <!-- home -->

   <section class="home" id="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(images/home-slide1.jpg) no-repeat;">
               <div class="content">
                  <h3>c'est là que les rêves deviennent réalité</h3>
                  <a href="#" class="btn"> en attente</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-slide2.jpg) no-repeat;">
               <div class="content">
                  <h3>c'est là que les rêves deviennent réalité</h3>
                  <a href="#" class="btn"> en attente</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-slide3.jpg) no-repeat;">
               <div class="content">
                  <h3>c'est là que les rêves deviennent réalité</h3>
                  <a href="#" class="btn"> en attente</a>
               </div>
            </div>

            <div class="swiper-slide slide" style="background: url(images/home-slide4.jpg) no-repeat;">
               <div class="content">
                  <h3>c'est là que les rêves deviennent réalité</h3>
                  <a href="#" class="btn"> en attente</a>
               </div>
            </div>

         </div>

         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>

      </div>

   </section>

   <!-- end -->

   <!-- availability -->

   <section class="availability">

      <form action="">

         <div class="box">
            <p>Arriver <span>*</span></p>
            <input type="date" class="input">
         </div>

         <div class="box">
            <p>Quitter <span>*</span></p>
            <input type="date" class="input">
         </div>

         <div class="box">
            <p>Adultes <span>*</span></p>
            <select name="adults" id="" class="input">
               <option value="1">1 adulte</option>
               <option value="2">2 adultes</option>
               <option value="3">3 adultes</option>
               <option value="4">4 adultes</option>
               <option value="5">5 adultes</option>
               <option value="6">6 adultes</option>
            </select>
         </div>

         <div class="box">
            <p>Enfants  <span>*</span></p>
            <select name="child" id="" class="input">
               <option value="0">0 Enfant</option>
               <option value="1">1 Enfant</option>
               <option value="2">2 Enfants </option>
               <option value="3">3 Enfants </option>
               <option value="4">4 Enfants </option>
               <option value="5">5 Enfants </option>
               <option value="6">6 Enfants </option>
            </select>
         </div>

         <div class="box">
            <p>Chambres <span>*</span></p>
            <select name="rooms" id="" class="input">
               <option value="1">1 Chambre</option>
               <option value="2">2 Chambres</option>
               <option value="3">3 Chambres</option>
               <option value="4">4 Chambres</option>
               <option value="5">5 Chambres</option>
               <option value="6">6 Chambres</option>
            </select>
         </div>

         <input type="submit" value="Envoyer" class="btn">

      </form>

   </section>

   <!-- end -->


   <!-- about -->

   <section class="about" id="about">

      <div class="row">

         <div class="image">
            <img src="images/about.jpg" alt="">
         </div>

         <div class="content">
            <h3>À Propos</h3>
            <p>« L'hôtel BENI-HAMAD » bénéficie d’un emplacement privilégié au centre ville de wilaya Bordj Bou Arreridj pas loin de toutes commodités et surtout d’une zone industrielle développée.
               L’hôtel vous réserve une escale somptueux ou vous découvrez le contraste harmonieux de l’aménagement de l’espace ainsi que son intimité et sécurité, sculpté par la lumière qui anime son architecture, parée par le luxe et le raffinement jusqu’aux moindres détails.</p>
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3225.0272260289494!2d4.762933176271358!3d36.06844000860572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x128cbdcdb40b0edb%3A0x61cbf6e31cd43b21!2sH%C3%B4tel%20Beni%20Hamad!5e0!3m2!1sfr!2sdz!4v1708106501155!5m2!1sfr!2sdz" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
         </div>
         

      </div>

   </section>

   <!-- end -->

   <!-- room -->

   <section class="room" id="room">

      <h1 class="heading">CHAMBRES</h1>

      <div class="swiper room-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">(9 500.00 DA)/Nuit</span>
                  <img src="images/chambresingle3.jpg" alt="">
                  <a href="#" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>Chambre single</h3>
                  <p>Bienvenue dans notre chambre single , un havre de confort et de tranquillité pour les voyageurs en solo.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">(13 200.00 DA)/Nuit</span>
                  <img src="images/chambretwin2.jpg" alt="">
                  <a href="#" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>Chambre Double</h3>
                  <p>Bienvenue dans notre charmante chambre double , où le confort et l'élégance se rencontrent pour créer une expérience inoubliable.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">(20 600.00 DA)/Nuit</span>
                  <img src="images/suitesenior 1.jpg" alt="">
                  <a href="#" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>Chambre Suite </h3>
                  <p>Bienvenue dans notre chambre suite , un sanctuaire de luxe et de confort où chaque détail a été soigneusement conçu pour vous offrir une expérience inoubliable</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">(13 800.00 DA)/Nuit</span>
                  <img src="images/suitesenior5.jpg" alt="">
                  <a href="#" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>Chambre Suite Double</h3>
                  <p>Bienvenue dans notre charmante chambre suite double, un espace conçu pour offrir confort, élégance et intimité à nos invités les plus exigeants.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price"> (17 200.00 DA)/Nuit</span>
                  <img src="images/room-5.jpg" alt="">
                  <a href="#" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>Suite junior single</h3>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#" class="btn">book now</a>
               </div>
            </div>

            <div class="swiper-slide slide">
               <div class="image">
                  <span class="price">(16 800.00 DA)/Nuit</span>
                  <img src="images/room-6.jpg" alt="">
                  <a href="#" class="fas fa-shopping-cart"></a>
               </div>
               <div class="content">
                  <h3>Suite senior single</h3>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente nisi.</p>
                  <div class="stars">
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star"></i>
                     <i class="fas fa-star-half-alt"></i>
                  </div>
                  <a href="#" class="btn">book now</a>
               </div>
            </div>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>

   <!-- end -->

   <section class="EVENEMENTS" id="EVENEMENT">
      <h1 class="heading">ÉVÉNEMENT</h1>
      <div class="imgS">
          <div class="image-container">
              <img src="images/kalaa.jpg" alt="">
              <div class="text-overlay">
                  <h3>Salle polyvalente</h3>
                  <p>L’hôtel BENI-HAMAD possède Une salle  polyvalente « EL KALAA  » de 200 places  conçu pour séminaires , congrès , fêtes , grands banquets ,et mariages richement équipée en matériel audio visuel de pointes.
                     L’expérience  et le savoir faire de notre staff garantissent la réussie de votre événement.</p>
              </div>
          </div>
          <div class="image-container">
              <img src="images/sallereunion.jpg" alt="">
              <div class="text-overlay">
                  <h3>Salle de réunion</h3>
                  <p>L’hôtel BENI-HAMAD possède une salle de réunion pour 45 places .
                     L’expérience  et le savoir faire de notre staff garantissent la réussie de votre événement.</p>
              </div>
          </div>
      </div>
  </section>
  
  

   <!-- services -->

   <section class="services">

      <div class="box-container">

         <div class="box">
            <img src="images/service1.png" alt="">
            <h3>swimming pool</h3>
         </div>

         <div class="box">
            <img src="images/service2.png" alt="">
            <h3>food & drink</h3>
         </div>

         <div class="box">
            <img src="images/service3.png" alt="">
            <h3>restaurant</h3>
         </div>

         

         <div class="box">
            <img src="images/service5.png" alt="">
            <h3>beauty spa</h3>
         </div>

         

      </div>

   </section>

   <!-- end -->

   <!-- gallery -->

   <section class="gallery" id="gallery">

      <h1 class="heading">Gallerie</h1>

      <div class="swiper gallery-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="images/gal1.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gal2.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gal3.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gal4.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gal5.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

            <div class="swiper-slide slide">
               <img src="images/gal6.jpg" alt="">
               <div class="icon">
                  <i class="fas fa-magnifying-glass-plus"></i>
               </div>
            </div>

         </div>

      </div>

   </section>

   <!-- end -->

   <!-- review -->

   <section class="review" id="review">

      <div class="swiper review-slider">
         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <h2 class="heading">Avis du client</h2>
               <i class="fas fa-quote-right"></i>
               <p>J'ai adoré mon séjour à cet hôtel ! Le personnel était incroyablement accueillant et serviable, la chambre était propre et confortable, et l'emplacement était parfait pour explorer la ville. Je recommande vivement cet hôtel à tous ceux qui recherchent un séjour agréable et sans tracas</p>
               <div class="user">
                  <img src="images/woman-8378634.png" alt="">
                  <div class="user-info">
                     <h3>Asma</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">Avis du client</h2>
               <i class="fas fa-quote-right"></i>
               <p>Je suis un habitué de cet hôtel et je continue à revenir année après année. La qualité du service ne cesse de s'améliorer, les chambres sont toujours impeccables et le personnel fait vraiment tout son possible pour rendre mon séjour aussi agréable que possible. C'est vraiment ma maison loin de chez moi</p>
               <div class="user">
                  <img src="images/IMG.png" alt="">
                  <div class="user-info">
                     <h3>Isaac</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">Avis du client</h2>
               <i class="fas fa-quote-right"></i>
               <p>Je suis très déçu de mon séjour dans cet hôtel. La chambre était sale à mon arrivée, le personnel était impoli et peu serviable, et l'insonorisation était si mauvaise que je pouvais entendre chaque bruit provenant des chambres voisines toute la nuit. Je ne recommanderais certainement pas cet endroit à quiconque</p>
               <div class="user">
                  <img src="images/pic-3.png" alt="">
                  <div class="user-info">
                     <h3>Sami</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">Avis du client</h2>
               <i class="fas fa-quote-right"></i>
               <p>Le petit-déjeuner buffet de cet hôtel était incroyablement décevant. Le choix était limité, la qualité était médiocre et les prix étaient beaucoup trop élevés pour ce qui était offert. Je m'attendais à mieux pour le prix que j'ai payé pour séjourner ici</p>
               <div class="user">
                  <img src="images/pic-4.png" alt="">
                  <div class="user-info">
                     <h3>Lamia</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">Avis du client</h2>
               <i class="fas fa-quote-right"></i>
               <p>Cet hôtel est un véritable joyau caché ! J'ai été agréablement surpris par la qualité de l'hébergement et des services proposés pour un prix si raisonnable. L'emplacement était également idéal, à proximité des attractions principales mais juste assez éloigné pour offrir une atmosphère paisible. Je reviendrai certainement ici lors de mon prochain voyage dans la région</p>
               <div class="user">
                  <img src="images/pic-5.png" alt="">
                  <div class="user-info">
                     <h3>Ahmed</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

            <div class="swiper-slide slide">
               <h2 class="heading">Avis du client</h2>
               <i class="fas fa-quote-right"></i>
               <p>Excellent hôtel ! Personnel accueillant, chambre spacieuse avec vue magnifique, installations modernes et petit-déjeuner délicieux. Recommandé </p>
               <div class="user">
                  <img src="images/man5.jpg" alt="">
                  <div class="user-info">
                     <h3>Saif Eddine</h3>
                     <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                     </div>
                  </div>
               </div>
            </div>

         </div>
         <div class="swiper-pagination"></div>
      </div>

   </section>

   <!-- end -->

   <!-- faq -->

   <section class="faqs" id="faq">

      <h1 class="heading">Questions fréquemment posées</h1>

      <div class="row">

         <div class="image">
            <img src="images/FAQs.gif" alt="">
         </div>

         <div class="content">

            <div class="box active">
               <h3>Les chambres sont-elles équipées d'une connexion Wi-Fi ?</h3>
               <p>Oui, toutes nos chambres sont équipées d'une connexion Wi-Fi gratuite pour nos clients.</p>
            </div>

            <div class="box">
               <h3>Y a-t-il un parking disponible ?</h3>
               <p>Oui, nous disposons d'un parking pour nos clients. Veuillez noter que des frais de stationnement peuvent s'appliquer.</p>
            </div>

            <div class="box">
               <h3>Est-ce que le petit-déjeuner est inclus dans le prix de la chambre ?</h3>
               <p>Oui, nous proposons un petit-déjeuner continental inclus dans le prix de la chambre. Des options de petit-déjeuner améliorées sont également disponibles moyennant des frais supplémentaires.</p>
            </div>

            <div class="box">
               <h3>Proposez-vous un service de restauration en chambre ?</h3>
               <p>Oui, nous offrons un service de restauration en chambre pour que vous puissiez profiter de repas et de collations dans le confort de votre chambre.</p>
            </div>

            <div class="box">
               <h3>Puis-je organiser des événements spéciaux ou des réunions dans l'hôtel ?</h3>
               <p>Oui, nous proposons des installations pour les événements spéciaux et les réunions. Veuillez contacter notre équipe pour discuter de vos besoins spécifiques.</p>
            </div>

         </div>

      </div>

   </section>

   <!-- end -->

   <!-- reservation -->
<?php
   // Connect database
   try {
      $username = "root";
      $password = "";
      $database = new PDO("mysql:host=localhost;dbname=hbh;",$username,$password);
      echo 'everything is good';
  } catch (Exception $e) {
     echo 'Error connecting to the database: ' . $e->getMessage();
  }

  if (isset($_POST['Send'])) {
   $Nom = $_POST['Nom'];
   $Email = $_POST['Email'];
   $Arriver = $_POST['Arriver'];
   $Quitter = $_POST['Quitter'];
   $Adultes = $_POST['Adultes'];
   $Enfants = $_POST['Enfants'];
   $Chambres = $_POST['Chambres'];
   // $TypeDC = $_POST['TypeDC'];

   $addData = $database->prepare("INSERT INTO réservation(Nom,Email,Arriver,Quitter,Adultes,Enfants,Chambres)
   VALUES('$Nom','$Email','$Arriver','$Quitter','$Adultes','$Enfants','$Chambres')"); //,'$TypeDC'
   var_dump($addData);
   
   if ($addData->execute()) {
      echo 'DONE';
  }else{
      echo 'NOTs GOOD';
  }
}
   
?>

   <section class="reservation" id="reservation">

      <h1 class="heading">Réservation</h1>

      <form action="" method="POST">

         <div class="container">

            <div class="box">
               <p>Nom <span>*</span></p>
               <input type="text" name="Nom" class="input" placeholder="votre nom svp">
            </div>

            <div class="box">
               <p>email <span>*</span></p>
               <input type="text" name="Email" class="input" placeholder="votre email svp">
            </div>

            <div class="box">
               <p>Arriver <span>*</span></p>
               <input type="date" name="Arriver" class="input">
            </div>

            <div class="box">
               <p>Quitter <span>*</span></p>
               <input type="date" name="Quitter" class="input">
            </div>

            <div class="box">
               <p>Adultes <span>*</span></p>
               <select name="Adultes" class="input">
                  <option value="1">1 adulte</option>
                  <option value="2">2 adultes</option>
                  <option value="3">3 adultes</option>
                  <option value="4">4 adultes</option>
                  <option value="5">5 adultes</option>
                  <option value="6">6 adultes</option>
               </select>
            </div>

            <div class="box">
               <p>Enfants <span>*</span></p>
               <select name="Enfants" class="input">
                  <option value="0">0 Enfant</option>
                  <option value="1">1 Enfant</option>
                  <option value="2">2 Enfants</option>
                  <option value="3">3 Enfants</option>
                  <option value="4">4 Enfants</option>
                  <option value="5">5 Enfants</option>
                  <option value="6">6 Enfants</option>
               </select>
            </div>

            <div class="box">
               <p>type de chambre <span>*</span></p>
               <select name="Chambres" class="input">
                  <option value="1">Chambre single</option>
                  <option value="2">Chambre double</option>
                  <option value="3">suite junior single</option>
                  <option value="4">suite senior single</option>
                  <option value="5">suite junior double</option>
                  <option value="6">suite senior double</option>
               </select>
            </div>

            <!-- <div class="box">
               <p>Type de chambre <span>*</span></p>
               <select name="TypeDC" class="input">
                  <option value="1">Chambre single</option>
                  <option value="2">Chambre double</option>
                  <option value="3">suite junior single</option>
                  <option value="4">suite senior single</option>
                  <option value="5">suite junior double</option>
                  <option value="6">suite senior double</option>
               </select>
            </div> -->
   
         </div>

         <input type="submit" name="Send" value="Valider" class="btn">

      </form>

   </section>

   <!-- end -->

   <!-- footer -->

   <section class="footer">

      <div class="box-container">

         <div class="box">
            <h3>Infor de contact</h3>
            <a href="#"> <i class="fas fa-phone"></i> +213 (0) 35 69 02 02 </a>
            <a href="#"> <i class="fas fa-phone"></i> +213 (0) 35 69 00 11</a>
            <a href="#"> <i class="fas fa-envelope"></i> info@hotel-benihamad.dz</a>
            <a href="#"> <i class="fas fa-map"></i> 01,Rue Frantz Fanon Bordj Bou Arreridj Algérie</a>
         </div>

         <div class="box">
            <h3>Liens rapides</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i>Accueil</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> À Propos</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Réservation</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Événement & Salles</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> Chambre & Tarifs</a>
         </div>

         <!-- <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> refund policy</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> refund policy</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> refund policy</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> refund policy</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> refund policy</a>
         </div> -->

      </div>
      

      <div class="share">
         <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-instagram"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-pinterest"></a>
      </div>

      <div class="credit">&copy; copyright @ 2024 by <span>Hotel Beni Hamad</span></div>

   </section>

   <!-- end -->
















   <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

   <script src="script.js"></script>














   
</body>
</html>