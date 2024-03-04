<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre de formation professionnelle Sainte Barbe</title>
    <link rel="stylesheet" href=".\assets\styles\style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./public/fonts/tondu/style.css" rel="stylesheet" type="text/css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header class="banner" st>
        <div class="container">
            <div class="top-header">
                <div class="logo-header">
                    <a href="<?= SITE_URL ?>">
                        <img src=".\public\images\apprentis-auteuil-logo.jpg" alt width="100" height="102.6" data-src="\www\public\images\apprentis-auteuil-logo.jpg" decoding="async">
                    </a>
                </div>
                <div class="titre-header">
                    <h1>
                        <a href="<?= SITE_URL ?>">
                            Centre de Formation Professionnelle Sainte Barbe
                        </a>
                    </h1>
                    <p class="blog-tagline">Métiers du bâtiment, de l'éco-construction, et de l'éco-rénovation.</p>
                </div>
                <div class="recherche-header">
                    <form role="search" method="get" class="search-form" action="<?= SITE_URL ?>">
                        <label>
                            <span class="screen-reader-text">Rechercher&nbsp;</span>
                            <input type="search" class="search-field" placeholder="Recherche..." value name="s">
                        </label>
                        <button type="submit" class="search-submit">
                            <i class="fa fa-search" aria-hidden="true"></i>
                            <span class="sr-only">Rechercher</span>
                        </button>
                    </form>
                </div>
            </div>
            <div class="top-nav">
                <div class="menu-principal-container">
                    <ul class="menu-principal">
                        <li class="menu-principal-item">
                            <a href="<?= SITE_URL ?>/presentation">Présentation</a>
                            <!-- <ul classe="sub-menu">
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/mot-de-la-directrice">Mot de la directrice</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/reussir-au-cfp-sainte-barbe">Réussir au CFP Sainte Barbe</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/l-accompagnement-personnalise">L'accompagnement personnalisé</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/l-equipe-educative-et-pedagogique">L'équipe pédagogique et éducative</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/les-missions-d-apprentis-d-auteuil">Les missions d'Apprentis d'Auteuil</a>
                                </li>
                            </ul> -->
                        </li>
                        <li class="menu-principal-item">
                            <a href="<?= SITE_URL ?>/nos-metiers">Nos métiers</a>
                            <!-- <ul class="sub-menu">
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/couvreur">Couvreur</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/zingueur">Zingueur</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/etancheur">étancheur</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/menuisier-installeur">Menuisier Installeur</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/menuisier-fabricant">Menuisier Fabricant</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/plaquiste-platrier">Plaquiste-plâtrier</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/coffreur-bancheur">Coffreur bancheur</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/macon">Maçon</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/agent-de-maintenance-des-batiments">Agent de maintenances des bâtiments</a>
                                </li>
                            </ul> -->
                        </li>
                        <li class="menu-principal-item">
                            <a href="<?= SITE_URL ?>/un-projet-professionnel">Un projet professionnel</a>
                            <!-- <ul class="sub-menu">
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/l-alternance-une-voie-gagnante">L'alternance, une voie gagnante</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/se-preparer-a-l-apprentissage">Se préparer à l'apprentissage</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/temoignages">Témoignages</a>
                                </li>
                            </ul> -->
                        </li>
                        <li class="menu-principal-item">
                            <a href="<?= SITE_URL ?>/un-ecrin-vert">Un écrin vert</a>
                            <!-- <ul class="sub-menu">
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/eco-construction">Eco-construction</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/visite-virtuelle-du-site">Visite virtuelle du site</a>
                                </li>
                            </ul> -->
                        </li>
                        <li class="menu-principal-item">
                            <a href="<?= SITE_URL ?>/vie-pratique">Vie pratique</a>
                            <!-- <ul class="sub-menu">
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/se-loger-a-proximite">Se loger à proximité</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/transport-et-parking">Transport et parking</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/carte-generations">Carte générations #HDF</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/snackerie">Snackerie</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/salle-d-activites">Salle d'activités</a>
                                </li>
                            </ul> -->
                        </li>
                        <li class="menu-principal-item">
                            <a href="<?= SITE_URL ?>/espace-entreprise">Espace entreprise</a>
                            <!-- <ul class="sub-menu">
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/sous-certification-qualiopi">Organisme de formation Apprentis d'Auteuil : sous certificatio Qualiopi</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/formation-continue">Formation continue</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/formation-sur-mesure-pour-vos-salaries">Formation sur-mesure pour vos salariés</a>
                                </li>
                                <li class="sub-menu_item">
                                    <a href="<?= SITE_URL ?>/l-apprentissage-un-boost-pour-votre-entreprise">L'apprentissage, un boost pour votre entreprise</a>
                                </li>
                            </ul> -->
                        </li>
                        <li class="menu-principal-item">
                            <a href="<?= SITE_URL ?>/contact">Contact</a>
                        </li>
                        <li class="menu-principal-item">
                            <a href="<?= SITE_URL ?>/actualites">Actualités</a>
                        </li>
                    </ul>
                </div>
            </div>
            <a class="dropbtn" href="#"></a>
        </div>
    </header>
    <footer>
        <div class="container">
            <div class="footer-rouge">
                <div class="footer-inner s-container">
                    <div class="footer-rouge-logo">
                        <a href="http://www.apprentis-auteuil.org">
                            <img src="\public\images\logo_aa_blanc.png" alt data-src="<?= SITE_URL ?>/public/images/logo_aa_blanc.png" decoding="async" width="75" height="77">
                        </a>
                    </div>
                    <div class="footer-rouge-menu">
                        <ul class="footer-menu">
                            <li class="footer-menu-item">
                                <a href="https://www.apprentis-auteuil.org/comment-soutenir-apprentis-dauteuil.html">Comment soutenir Apprentis d'Auteuil</a>
                            </li>
                            <li class="footer-menu-item">
                                <a href="<?= SITE_URL ?>/mentions-legales">Mentions légales</a>
                            </li>
                            <li class="footer-menu-item">
                                <a href="<?= SITE_URL ?>/contact">Nous contacter</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-rouge-label-ideas">
                        <a href="http://www.ideas.asso.fr/">
                            <img src="/public/images/label-ideas.png" alt data-src="<?= SITE_URL ?>/public/images/label-ideas.png" decoding="async" width="144" height="53">
                        </a>
                    </div>
                    <div class="footer-rouge-texte">
                        Fondation catholique reconnue d'utilité publique, acteur engagé de la prévention et de la protection de l'enfance.
                    </div>
                </div>
            </div>
            <div class="footer-blanc">
                <div class="s-container">
                    <div class="footer-blanc-texte">Fondation reconnue d’utilité publique, acteur engagé de la prévention et de la protection de l’enfance, Apprentis d’Auteuil développe en France et à l’international des programmes d’accueil, d’éducation, de formation et d’insertion pour redonner aux jeunes et aux familles fragilisés ce qui leur manque le plus : la confiance. Les 7 200 collaborateurs d’Apprentis d’Auteuil accompagnent près de 40 000 jeunes et 8 000 familles dans plus de 400 établissements. A l’international, Apprentis d’Auteuil mène des actions dans plus de 31 pays aux côtés de 68 organisations partenaires. Pour soutenir nos actions, n’hésitez pas à faire un don à notre fondation. Apprentis d’Auteuil – fondation protection de l’enfance.</div>
                </div>
            </div>
        </div> 
    </footer>
</body>
</html>