<?php
    require_once('../mobijoseph/phpcode/traitement_email.php');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1"/>

        <link href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
        <link href="../mobijoseph/css_boostrap/bootstrap.min.css" rel="stylesheet"/>
        <link href="../mobijoseph/css_local/style.css" rel="stylesheet"/>
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>

        <title>MOBI Joseph</title>
    </head>
    <body>
        <nav class="case-navbar navbar navbar-expand-lg position-fixed navbar-dark w-100">
            <div class="container-fluid">
              <a class="navbar-brand text-uppercase fw-border mx-4 py-3">MOBI Joseph</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item pe-4">
                    <a class="btn btn-order rounded-5">Accueil | Mon Site</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>

        <section class="banner-explore section_menu py-5 merriweather">

          <div class="container py-5">
              <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                      <h1 class="text-capitalize py-3 redressed banner-desc">
                          Bonjour! <br/> Bienvenue sur mon site
                      </h1>
                      <p class="text-capitalize py-3 redressed banner-desc-desc">
                          Trouvez de la passion, Découvez de l'estime, bravez le challenge en parcourant l'ensemble de ce site
                      </p>
                      <p>
                        <div class="row row-cols-1 row-cols-md-3 g-4 mx-auto">
                          <a class="btn btn-order btn-lg me-5 rounded-5 merriweather" role="button">Découvez Ma Page</a>
                          <a class="btn btn-order btn-lg me-5 rounded-5 merriweather" role="button">Plus D'Exploration</a>
                        </div>
                      </p>
                </div>
                </div>
              </div>
          </div>

          <div class="container py-2">
                <div class="row">
                      <div class="card cols-1 cols-md-3 bg-transparent text-center mb-4 mx-auto">
                        <div class="card-header redressed fs-4">
                          <div class="col d-flex justify-content-center">
                            <div class="row row-cols-1 row-cols-md-4 g-4 mx-auto">
                              <a class="btn btn-outline-info btn-lg me-5 rounded-5 position-relative merriweather active" role="button">Mes Projets Finis
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">2</span>
                              </a>
                              <a class="btn btn-outline-info btn-lg me-5 position-relative rounded-5 merriweather active" role="button">Espace Membre
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">99+</span>
                              </a>
                              <a class="btn btn-outline-info btn-lg me-5 position-relative rounded-5 merriweather active" role="button">Mon Profil
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">Activé</span>
                              </a>
                            </div>
                          </div>
                        </div>
                        <div class="card-body text-light">
                          <h5 class="card-title">Juste En Face De Vous</h5>
                          <p class="card-text">Un tableau d'inscription en tant que membre
                              <br/>Les codes sources de mes projets finis
                              <br/>L'essentiel de mon profil
                          </p>
                        </div>
                      </div>

                      <div class="row row-cols-1 row-cols-md-3 g-4 mx-auto">
                        <div class="col">
                          <div class="card h-100 text-center">
                            <img src="../mobijoseph/images/back_projet.jpg" class="card-img-top-back" alt="...">
                            <div class="card-body">
                            <img src="../mobijoseph/images/logo_projets.png" class="card-img-top mx-auto d-block" alt="...">
                              <p class="card-text card_text_style">Code Source de ce projet sur Github</p>
                              <a href="https://github.com/MOBI-Joseph2000/site-personnel" class="btn btn-clic rounded-5 merriweather active" role="button">Aller Sur Github</a>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100 text-center">
                            <img src="../mobijoseph/images/team.png" class="card-img-top-back" alt="...">
                            <div class="card-body">
                            <img src="../mobijoseph/images/logo_noir.png" class="card-img-top mx-auto d-block" alt="...">
                              <p class="card-text card_text_style">Notre Groupe Whatsapp pour développeur</p>
                              <a href="https://chat.whatsapp.com/l3wcuk9EpAMHDVvXhtpc1l" class="btn btn-clic rounded-5 merriweather active" role="button">Intégrer le groupe</a>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100 text-center">
                            <img src="../mobijoseph/images/member.jpg" class="card-img-top-back" alt="...">
                            <div class="card-body">
                              <img src="../mobijoseph/images/logo_espace_membre.jpg" class="card-img-top mx-auto d-block" alt="...">
                              <p class="card-text card_text_style">Les teams members encouragent</p>
                              <a onclick="document.getElementById('boiteD').style.display='block'" class="btn btn-clic rounded-5 merriweather active" role="button">Afficher</a>
                              <div id="boiteD" class="boite">
                                <div class="boite-contenu animation-haut">
                                  <header class="conteneur bleu">
                                    <span onclick="document.getElementById('boiteD').style.display='none'" class="boutton affichage">&times;</span>
                                    <h2>Information</h2>
                                  </header>
                                  <div class="conteneur">
                                      <p>Merci de nous avoir parcouru !</p>
                                      <p>Ce site vous présente nos acticités, nos inspirations, notre personne...</p>
                                  </div>
                                  <footer class="conteneur bleu">
                                      <p>MOBI Joseph</p>
                                  </footer>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>

            <div class="container py-2">
              <div class="row row-cols-2 row-cols-md-4 g-2 mx-auto text-center">
                <div class="col">
                  <div class="profilText">
                    <div class="imgBx">
                      <img src="../mobijoseph/images/programmation.png" alt="..">
                    </div>
                    <h6>Programmation<br/><span>Le développement informatique<br/>un art, un passion, une porte franchie</span></h6>
                  </div>
                </div>
                <div class="col">  
                  <div class="profilText">
                    <div class="imgBx">
                      <img src="../mobijoseph/images/livre.jpg" alt="..">
                    </div>
                    <h6>Lecture<br/><span>Une priorité pour notre<br/>épanouissement scientifique</span></h6>
                  </div>
                </div>
                <div class="col">
                  <div class="profilText">
                    <div class="imgBx">
                      <img src="../mobijoseph/images/music.jfif" alt="..">
                    </div>
                    <h6>Musique<br/><span>J'aime la musique<br/>Je fais de la musique</span></h6>
                  </div>
                </div>
                <div class="col">
                  <div class="profilText">
                    <div class="imgBx">
                      <img src="../mobijoseph/images/foot.jpg" alt="..">
                    </div>
                    <h6>Football<br/><span>Un moment de divertissement<br/>Le sport du moment</span></h6>
                  </div>
                </div>
              </div>
            </div>

            <div class="container py-2">
              <div class="row">
                <div class="row row-cols-1 row-cols-2 row-cols-md-4 g-2 mx-auto">
                        <div class="col">
                          <div class="card h-200 text-center">
                            <img src="../mobijoseph/images/web.jpg" class="card-img-top-back" alt="...">
                            <div class="card-body">
                              <p class="card-text card_text_style">Concevons des applications web pour une gestion optimale des affaires</p>
                              <div>
                                <i class="fa-brands fa-html5"></i>
                                <i class="fa-brands fa-css3"></i>
                                <i class="fa-brands fa-php"></i>
                                <i class="fa-brands fa-js"></i>
                                <i class="fa-solid fa-database"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-200 text-center">
                            <img src="../mobijoseph/images/mobile.png" class="card-img-top-back" alt="...">
                            <div class="card-body">
                              <p class="card-text card_text_style">Découvrons le monde mobile pour rendre votre portable riche et utile en application</p>
                              <div>
                                <i class='bx bxl-flutter'></i>
                                <i class='bx bxl-java'></i>
                                <i class='bx bxl-android'></i>
                                <i class="fa-solid fa-database"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-200 text-center">
                            <img src="../mobijoseph/images/desk.jpg" class="card-img-top-back" alt="...">
                            <div class="card-body">
                              <p class="card-text card_text_style">Jouissons des anvancés du développement logiciel pour la prise de nos entreprises</p>
                              <div>
                                <i class="fa-brands fa-java"></i>
                                <i class="fa-brands fa-python"></i>
                                <i class="fa-solid fa-c"></i>
                                <i class="fa-solid fa-database"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-200 text-center">
                            <img src="../mobijoseph/images/off.png" class="card-img-top-back" alt="...">
                            <div class="card-body">
                              <p class="card-text card_text_style">Nous maintenons la gestion de votre office ainsi que toute l'administration système</p>
                              <div>
                                <i class="fa-sharp fa-solid fa-file-word"></i>
                                <i class="fa-solid fa-file-excel"></i>
                                <i class="fa-solid fa-file-powerpoint"></i>
                                <i class="fa-solid fa-virus"></i>
                                <i class="fa-brands fa-windows"></i>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
              </div>
            </div>

            <div class="container py-2">
              <div class="col d-flex justify-content-center">  
                <p class="style_galerie">Mon Profil || Curriculum Vitae</p>
              </div>
            </div>

            <div class="container py-2">
              <div class="row row-cols-1 row-cols-md-1 g-4 mx-auto">
                <div class="card border-0 rounded-0">
                  <div class="row">
                    <div class="col">
                      <div class="profil">
                        <div class="imgBx">
                          <img src="../mobijoseph/images/image_profil.jpg" alt="..">
                        </div>
                        <h6>MOBI Joseph<br/><span>Elève Ingénieur<br/>Génie Informatique</span></h6>
                      </div>
                      <p style="text-align:center">
                          <h2 class="contact_style">+243 825 711 082</h2>
                          <h2 class="contact_style"> +243 977 061 683</h2>
                          <h2 class="contact_style">mobijoseph2000@gmail.com</h2>
                      </p>
                    </div>
                    <div class="col">
                      <div class="title_etude">
                        <h5 style="font-family: 'Redressed'; font-weight:bold">Etudes Faites</h5>
                        <p>
                          <span class="link-name">2006 - 2012</span>
                          <h2 class="tyle_paragraphe">Etudes primaires</h2>
                        </p>
                        <p>
                          <span class="link-name">2012 - 2018</span>
                          <h2 class="tyle_paragraphe">Etudes secondaires et humanitaires en scientifique</h2>
                        </p>
                        <p>
                          <span class="link-name">2018 - 2022</span>
                          <h2 class="tyle_paragraphe">Etudes universitaires à l'Université Mapon, faculté polytechnique, département de génie informatique</h2>
                        </p>
                        <h5 style="font-family: 'Redressed'; font-weight:bold">Expérience Professionnelle</h5>
                        <p>
                        <span class="link-name">1er Juin - 31 Juillet 2022</span>
                          <h2 class="tyle_paragraphe">Stage académique à la direction technique de Vodacom RDC à Kinshasa</h2>
                        </p>
                      </div>
                    </div>
                    <div class="col">
                      <div class="title_etude">
                        <h5 style="font-family: 'Redressed'; font-weight:bold">Habileté de travail</h5>
                        <p class="paragraphe_style">
                          Après plusieurs exercices d'apprentissage dans la conception et 
                          la realisation de certains projets informatiques, nous sommes aptes d'intégrer le marché 
                          professionnel de domaines suivants :
                          <ul class="paragraphe_style">
                              <dl> <i class='bx bxl-dev-to'></i> Développement Informatique </dl>
                              <dl> <i class='bx bxs-paint-roll'></i> Dépannage Informatique </dl>
                              <dl> <i class='bx bx-images'></i> Photo Design </dl>
                              <dl> <i class='bx bxl-microsoft-teams'></i> Gestion Office </dl>
                          </ul>
                        </p>
                      </div>
                      
                    </div>
                    <div class="col">
                      <div class="title_etude">
                          <h5 style="font-family: 'Redressed'; font-weight:bold">Langues Parlées</h5>
                          <p> <span class="link-name">Français</span>
                              <span class="pourcent"> <span class="pourcent_interne" style="width: 90%;"></span> </span>
                          </p>
                          <p> <span class="link-name">Anglais</span>
                              <span class="pourcent"> <span class="pourcent_interne" style="width: 30%;"></span> </span>
                          </p>
                          <p> <span class="link-name">Swahili</span>
                              <span class="pourcent"> <span class="pourcent_interne" style="width: 95%;"></span> </span>
                          </p>
                          <p> <span class="link-name">Lingala</span>
                              <span class="pourcent"> <span class="pourcent_interne" style="width: 45%;"></span> </span>
                          </p>
                      </div>
                      <div class="title_habilete">
                          <h5 style="font-family: 'Redressed'; font-weight:bold;">Centres d'Intérêt</h5>
                          <div class="row row-cols-2 row-cols-md-2 g-4 mx-auto">
                              <div class="col"> <i class='bx bx-book-open'> </i> lecture </div>
                              <div class="col"> <i class='bx bxs-music'> </i> musique </div>
                              <div class="col"> <i class='bx bx-conversation'> </i> chat </div>
                              <div class="col"> <i class='bx bx-football'> </i> football </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="container">
              <hr>
            </div>

            <div class="container py-2">
                <div class="card border-0 rounded-0">
                  <div class="row">
                    <div class="col">
                      <div class="card-body text-center">
                        <h3 class="redressed">Laissez un commentaire</h3>
                          <form id="post" method="POST" action="" enctype="multipart/form-data">  
                            <input type="text" name="nom" placeholder=" votre nom" required="" class="form form-control"> </br>
                            <input type="text" name="sujet" placeholder="le sujet" required="" class="form form-control"> </br>
                            <input type="email" name="email" placeholder="adresse mail" required="" class="form form-control"> </br>
                            <textarea name="message" placeholder="message" required="" class="form form-control"></textarea> </br> 
                            <input type="submit" name="submit" value="Envoyer"  class="btn btn-clic me-5 rounded-5">
                            </div>
                          </form>
                      </div>
                    </div>
                  </div>
                </div>
            </div>

            <footer class="bg-dark text-white pt-5">
              <div class="container"> 
                <div class="row row-cols-2">
                  <div class="col-md-3">
                    <p class="redressed disponible-dis">Nos Services</p>
                    <ul class="list-unstyled text-secondary">
                        <li>Développement Informatique</li>
                        <li>Dépannage Informatique</li>
                        <li>Photo Design</li>
                        <li>Gestion Office</li>
                        <li>Maitenance Machine</li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <p class="redressed disponible-dis">Liens Importants</p>
                    <ul class="list-unstyled text-secondary">
                        <li>Projet Github</li>
                        <li>Groupe des développeurs</li>
                        <li>Espace Membre</li>
                        <li>Statut de membre</li>
                        <li>Citation du moment</li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <p class="redressed disponible-dis">En Commentaires</p>
                    <ul class="list-unstyled text-secondary">
                        <li>Motif de contact</li>
                        <li>Service souhaité</li>
                        <li>Niveau d'appréciation</li>
                        <li>Vos suggestions</li>
                        <li>Mode de renseignement</li>
                    </ul>
                  </div>
                  <div class="col-md-3">
                    <p class="text-danger text-md-end redressed disponible-dis">Mes Projets</p>
                    <ul class="list-unstyled text-secondary text-md-end mt-4">
                        <li>Web-App@OnlineTest || </li>
                        <li>Mobile-App@WeightTracker</li>
                        <li>WS Team Group 2.00</li>
                        <hr>
                        <li>+243 977 061 683</li>
                        <li>mobijoseph2000@gmail.com</li>
                    </ul>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-md-4  d-flex flex-column justify-content-center align-items-center">
                    <p class="redressed disponible-dis">Contact Disponible</p>
                    <h3 class="text-danger">+243 825 711 082</h3>
                  </div>
                  <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                    <a class="btn rounded-pill bg-danger bg_taille" style="color:white"><p></p>Partageons Plus</a>
                    <div>
                        <i class='bx bxl-facebook-circle'></i>
                        <i class='bx bxl-whatsapp-square'></i>
                        <i class='bx bxl-telegram'></i>
                        <i class='bx bxl-instagram-alt'></i>
                        <i class='bx bxl-twitter'></i>
                        <i class='bx bxl-gmail'></i>
                    </div>
                  </div>
                  <div class="col-md-4 text-md-end">
                    <div class="row">
                      <div class="col">
                        <div class="profilText">
                          <div class="imgBx">
                            <img src="../mobijoseph/images/logo_noir.png" alt="...">
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="profilText">
                            <div class="imgBx">
                              <img src="../mobijoseph/images/logo_wt.png" alt="...">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                <div class="footer-bottom">
                  <p>meilleur coopération &copy;2022 développement-design pour tous</br>MOBI Joseph</p>
              </div>
                </div>
              </div>
            </footer>
                      
        </section>
      
      <script src="js/bootstrap.bundle.min.js"></script>

    </body>
</html>