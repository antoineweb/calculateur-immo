<!doctype html>

<?php 
$rendement2=0;
$rendement=0;

$prix=$_GET["prix"];
$loyer=$_GET["loyer"];
$frais_acte=$_GET["frais_acte"];
$travaux=$_GET["travaux"];
$revenus_locatifs=$_GET["revenus_locatifs"];

$occupation=$_GET["occupation"];
$precompte=$_GET["precompte"];
$gestion=$_GET["gestion"];
$assurances=$_GET["assurances"];
$IPP=$_GET["IPP"];
$loyer2=$loyer*12;
$rendement2=$prix/$loyer2;
$rendement=100/$rendement2;

?>
<html lang="fr-BE" class="no-js">
<head>
<meta charset="UTF-8">
<title>Calcul de rendement immobilier | PIM - Agence immobilière Bruxelles</title>
<link href="https://www.rendement-immo.fr/layout/uploads/2019/08/favicon.png" rel="shortcut icon">
<link href="https://www.rendement-immo.fr/layout/uploads/2019/08/favicon.png" rel="apple-touch-icon-precomposed">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500&display=swap" rel="stylesheet">      
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/0b81329d8e.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta property="fb:app_id" content="511162012787901"/>
<meta property="og:type" content="article" />
<meta property="og:title" content="Calcul de rendement immobilier | PIM - Agence immobilière Bruxelles" />
<meta property="og:url" content="https://www.rendement-immo.fr/calculs-automatiques/calcul-de-rendement-immobilier/" />
<meta property="og:site_name" content="rendement-immo.fr"/>
<meta property="og:description" content="" />
<meta property="og:image" content="https://www.rendement-immo.fr/layout/uploads/2019/08/pim-facebook.jpg" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@pimbelgique" />
<meta name="twitter:title" content="Calcul de rendement immobilier | PIM - Agence immobilière Bruxelles" />
<meta name="twitter:description" content="" />
<meta name="twitter:image" content="https://www.rendement-immo.fr/layout/uploads/2019/08/pim-facebook.jpg" />
<link rel='dns-prefetch' href='//www.rendement-immo.fr' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' id='pim-css'  href='style/style.css?ver=1.0' media='all' />
<link rel='https://api.w.org/' href='https://www.rendement-immo.fr/wp-json/' />
<link rel="alternate" type="application/json+oembed" href="https://www.rendement-immo.fr/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.rendement-immo.fr%2Fcalculs-automatiques%2Fcalcul-de-rendement-immobilier%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://www.rendement-immo.fr/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.rendement-immo.fr%2Fcalculs-automatiques%2Fcalcul-de-rendement-immobilier%2F&#038;format=xml" />
<meta name="description" content="Agence et portail immobilier - Bruxelles" />
    
    <script type="application/javascript" src="style/jquery.js"></script>
     <script type="application/javascript" src="style/bootstrap.min.js"></script>
    <script type="application/javascript" src="style/jquery-3.1.min.js"></script>
    <script type="application/javascript" src="style/printfriendly.js"></script>
   
</head>
<body class="page-template-default page page-id-907492 page-child" itemscope itemtype="http://schema.org/WebPage">
    <header class="header clear" role="banner">
       <div class="backpim"></div>
   
            <nav id="main-navbar" class="navbar-main navbar bg-dark navbar-dark navbar-expand-lg pt-0 pb-0 pr-md-5 pl-md-5">
                <div class="navbar navbar-light">
                    <a href="https://www.rendement-immo.fr" class="navbar-brand">
                        <img itemprop="logo" src="style/logo.png" width="220"  alt="PIM - Agence immobilière Bruxelles">
                    </a>
                </div>	
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0"><li id="menu-item-908499" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-908499"><a href="https://www.rendement-immo.fr/vendre-avec-pim/">Ventes</a>
<ul class="sub-menu">
	<li id="menu-item-908226" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908226"><a href="https://www.rendement-immo.fr/en-vente/">À vendre</a></li>
	<li id="menu-item-908318" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908318"><a href="https://www.rendement-immo.fr/recherche-de-bien-immobilier-sur-bruxelles/">Je cherche un bien</a></li>
	<li id="menu-item-908465" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908465"><a href="https://www.rendement-immo.fr/cession-de-parts-d-une-societe-patrimoniale/">Cession de parts d’une société patrimoniale</a></li>
	<li id="menu-item-908558" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908558"><a href="https://www.rendement-immo.fr/vendre-avec-pim/je-demande-a-pim-de-vendre-mon-bien/">Vendre mon bien avec Pim</a></li>
	<li id="menu-item-908569" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-908569"><a href="https://www.rendement-immo.fr/vendre-avec-pim/tarif-et-contrat-dagence-immobiliere/">Tarif et contrat d’agence</a></li>
</ul>
</li>
<li id="menu-item-908421" class="menu-item menu-item-type-post_type menu-item-object-page current-page-ancestor current-menu-ancestor current-menu-parent current-page-parent current_page_parent current_page_ancestor menu-item-has-children menu-item-908421"><a href="https://www.rendement-immo.fr/calculs-automatiques/">Calculs</a>
<ul class="sub-menu">
	<li id="menu-item-907501" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907501"><a href="https://www.rendement-immo.fr/calculs-automatiques/calculateur-loyer-indexe/">Calculateur loyer indexé</a></li>
	<li id="menu-item-907494" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-907492 current_page_item menu-item-907494"><a href="https://www.rendement-immo.fr/calculs-automatiques/calcul-de-rendement-immobilier/" aria-current="page">Rendement immobilier</a></li>
	<li id="menu-item-907499" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907499"><a href="https://www.rendement-immo.fr/calculs-automatiques/calcul-des-frais-dacte/">Frais d&rsquo;acte d&rsquo;achat</a></li>
	<li id="menu-item-907498" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907498"><a href="https://www.rendement-immo.fr/calculs-automatiques/calcul-frais-de-notaire-pour-achat-immobilier-a-bruxelles-avec-abattement-fiscal/">Bruxelles avec abattement</a></li>
	<li id="menu-item-907497" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907497"><a href="https://www.rendement-immo.fr/calculs-automatiques/calcul-frais-de-notaire-pour-achat-immobilier-en-wallonie-avec-abattement-fiscal/">Wallonie avec abattement</a></li>
	<li id="menu-item-907496" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907496"><a href="https://www.rendement-immo.fr/calculs-automatiques/calcul-des-frais-dacte-notaire-sur-emprunt-hypothecairepim-be/">Frais d&rsquo;acte de prêt</a></li>
	<li id="menu-item-907500" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907500"><a href="https://www.rendement-immo.fr/calculs-automatiques/prets-calcul-charge-mensuelle/">Prêt: mensualités constantes</a></li>
	<li id="menu-item-907495" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907495"><a href="https://www.rendement-immo.fr/calculs-automatiques/calcul-pourcentage/">Calcul pourcentage</a></li>
</ul>
</li>
<li id="menu-item-907762" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-907762"><a href="https://www.rendement-immo.fr/les-conseils-de-pim/">Conseils</a>
<ul class="sub-menu">
	<li id="menu-item-907789" class="menu-item menu-item-type-post_type menu-item-object-conseils menu-item-907789"><a href="https://www.rendement-immo.fr/conseils/brochures-informatives-gratuites/">Brochures informatives</a></li>
	<li id="menu-item-907790" class="menu-item menu-item-type-post_type menu-item-object-conseils menu-item-907790"><a href="https://www.rendement-immo.fr/conseils/livres-utiles/">Livres immobiliers</a></li>
	<li id="menu-item-907791" class="menu-item menu-item-type-post_type menu-item-object-conseils menu-item-907791"><a href="https://www.rendement-immo.fr/conseils/les-metres-carres-belges/">Les m<sup>2</sup> belges</a></li>
	<li id="menu-item-907792" class="menu-item menu-item-type-post_type menu-item-object-conseils menu-item-907792"><a href="https://www.rendement-immo.fr/conseils/quel-prix-de-vente-fixer/">Quel prix de vente ?</a></li>
	<li id="menu-item-907793" class="menu-item menu-item-type-post_type menu-item-object-conseils menu-item-907793"><a href="https://www.rendement-immo.fr/conseils/valorisez-votre-logement/">Valorisez votre logement</a></li>
	<li id="menu-item-907794" class="menu-item menu-item-type-post_type menu-item-object-conseils menu-item-907794"><a href="https://www.rendement-immo.fr/conseils/confier-lexclusivite/">Confier l&rsquo;exclusivité ?</a></li>
</ul>
</li>
<li id="menu-item-907562" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-907562"><a href="https://www.rendement-immo.fr/outils-de-pim/">Outils</a>
<ul class="sub-menu">
	<li id="menu-item-907656" class="menu-item menu-item-type-post_type menu-item-object-outil menu-item-907656"><a href="https://www.rendement-immo.fr/outils/je-vends-check-list/">Je vends : check-list</a></li>
	<li id="menu-item-907657" class="menu-item menu-item-type-post_type menu-item-object-outil menu-item-907657"><a href="https://www.rendement-immo.fr/outils/nos-modeles-de-contrats-offre-vente/">Modèles de contrats de vente</a></li>
	<li id="menu-item-907650" class="menu-item menu-item-type-post_type menu-item-object-outil menu-item-907650"><a href="https://www.rendement-immo.fr/outils/lexique-pratique/">Lexique pratique</a></li>
	<li id="menu-item-907654" class="menu-item menu-item-type-post_type menu-item-object-outil menu-item-907654"><a href="https://www.rendement-immo.fr/outils/abreviations-immobilieres/">Abréviations immobilières</a></li>
	<li id="menu-item-907651" class="menu-item menu-item-type-post_type menu-item-object-outil menu-item-907651"><a href="https://www.rendement-immo.fr/outils/lart-de-la-petite-annonce/">L&rsquo;art de la petite annonce</a></li>
	<li id="menu-item-907652" class="menu-item menu-item-type-post_type menu-item-object-outil menu-item-907652"><a href="https://www.rendement-immo.fr/outils/citations-et-maisons/">Citations et maisons</a></li>
	<li id="menu-item-907653" class="menu-item menu-item-type-post_type menu-item-object-outil menu-item-907653"><a href="https://www.rendement-immo.fr/outils/adresses-ecoles/">Ecoles internationales</a></li>
	<li id="menu-item-907655" class="menu-item menu-item-type-post_type menu-item-object-outil menu-item-907655"><a href="https://www.rendement-immo.fr/outils/je-demenage-check-list/">Je déménage : check-list</a></li>
</ul>
</li>
<li id="menu-item-25" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-25"><a href="#">Baux et indexation</a>
<ul class="sub-menu">
	<li id="menu-item-907471" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907471"><a href="https://www.rendement-immo.fr/nos-modeles-de-baux-gratuits/">Modèles de baux gratuits</a></li>
	<li id="menu-item-907470" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907470"><a href="https://www.rendement-immo.fr/calculs-automatiques/calculateur-loyer-indexe/">Calculateur loyer indexé</a></li>
	<li id="menu-item-907474" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907474"><a href="https://www.rendement-immo.fr/indexation-des-loyers/">Indexation: explications &#038; tableaux</a></li>
</ul>
</li>
<li id="menu-item-26" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-26"><a href="https://www.rendement-immo.fr/faqimmo/">FAQ</a></li>
<li id="menu-item-27" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27"><a target="_blank" rel="noopener noreferrer" href="https://forum.rendement-immo.fr">Forum</a></li>
<li id="menu-item-907453" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-907453"><a href="https://www.rendement-immo.fr/pims-blog-actualite-immobiliere-belge/">Blog</a></li>
<li class="search menu-item menu-item-type-custom menu-item-object-custom"><a class="search_icon"><i class="fa fa-search"></i></a><div style="display:none;" class="pimsearchform"><!-- search -->
<form class="search" method="get" action="https://www.rendement-immo.fr" role="search">
	<input class="search-input form-control col-10" type="search" name="s" placeholder="Rechercher">
	<button class="btn btn-primary col-2" type="submit" role="button">Ok</button>
</form>
<!-- /search -->
    </div></li></ul>                </div> 
            </nav>
        </div>
    </header>	<main role="main">
            <div id="faq-header" class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="breadcrumb-pim breadcrumb-pim-pub"><a href="https://www.rendement-immo.fr">Accueil</a> <i class="fal fa-angle-double-right"></i> <a href="https://www.rendement-immo.fr/calculs-automatiques/">Calculs automatiques</a> <i class="fal fa-angle-double-right"></i> Calcul de rendement immobilier</div>
                    </div>
                </div> 
                <div id="faq-content" class="row">
                    <div class="col-md-12 pub-pim">
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <!-- PIM - horizontale -->
                   
                    
                    </div>
                        <div class="col-md-12 title-faq">
                            <h1>Calcul de rendement immobilier</h1>
                            <div class="rule-title"></div>
                        </div>
                        <div class="col-md-12 text-faq">
                            <div class="text-question">Pour connaître votre rendement immobilier, veuillez encoder vos valeurs chiffrées dans le formulaire ci-dessous.<br />Un lexique explicatif est disponible en cliquant sur l'icône d'information à droite de chaque libellé.</div>
                        </div>
                        <div class="col-md-12 lexique-zone">
                            <div class="move-zone">
                   <form method="get" class="form" enctype="multipart/form-data" action="?bla=44&blala=55">
                            <div class="row calculspim">
                                <div class="col-md-6">
                                    <h2>Investissement et loyer</h2>
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="number" class="form-control form-rendement" name="prix" value="<?php if (empty($_GET["prix"]) AND is_nan($_GET["prix"]) AND $_GET["prix"]=='' AND $_GET["prix"]=='Prix d\'achat principal') echo "Prix d'achat principal"; else echo $_GET["prix"]; ?>" placeholder="Prix d'achat principal" > 
                                            <div class="input-group-prepend">
                                              <div class="input-group-text">€</div>
                                            </div>
                                            <button type="button" data-container="body" data-toggle="tooltip" class="btn tooltip-pim" title="Le prix de vente/achat, hors frais d’acte.">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="number" class="form-control form-rendement" name="loyer" value="<?php if (isset($_GET["loyer"]) AND $_GET["loyer"]!='' ) echo $_GET["loyer"]; ?>"  placeholder="Loyer mensuel ">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text">€</div>
                                            </div>
                                            <button type="button" data-toggle="tooltip" class="btn tooltip-pim" title="Le loyer annuel existant ou escompté, sans investissement complémentaire.">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="number" class="form-control form-rendement" name="frais_acte" value="<?php if (isset($_GET["frais_acte"]) AND $_GET["frais_acte"]!='' ) echo $_GET["frais_acte"]; ?>"  placeholder="Frais d'acte">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text">€</div>
                                            </div>
                                            <button type="button" data-toggle="tooltip" class="btn tooltip-pim" title="  Variable selon la région concernée. Utilisez nos modules de calculs de frais d’acte et ajoutez le résultat obtenu, hors prix de vente.  S’il s’agit d’une vente sous régime TVA (construction neuve), ajoutez le total (tva + honoraires & frais notaire)">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </div>
                                    </div>  
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="number" class="form-control form-rendement" name="travaux" value="<?php if (isset($_GET["travaux"]) AND $_GET["travaux"]!='' ) echo $_GET["travaux"]; ?>"  placeholder="Travaux (TVAC)">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text">€</div>
                                            </div>
                                            <button type="button" data-toggle="tooltip" class="btn tooltip-pim" title="Montant estimé (tva comprise) des travaux à investir pour améliorer le revenu locatif potentiel.">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="number" class="form-control form-rendement" name="revenus_locatifs" value="<?php if (isset($_GET["revenus_locatifs"]) AND $_GET["revenus_locatifs"]!='' ) echo $_GET["revenus_locatifs"]; ?>"  placeholder="Revenus locatifs après travaux">
                                            <div class="input-group-prepend">
                                                  <div class="input-group-text">€</div>
                                            </div>
                                            <button type="button" data-toggle="tooltip" class="btn tooltip-pim" title="Valorisation du loyer annuel escompté après exécution des travaux. Si la valeur encodée pour travaux = « 0 », la valeur locative « après travaux » est sensée rester la même que le revenu locatif initial déjà encodé par vos soins et est à nouveau mentionné d’office.">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </div>
                                    </div>  
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="number" class="form-control form-rendement" name="occupation"  value="<?php if (isset($_GET["occupation"]) AND $_GET["occupation"]!='' ) echo $_GET["occupation"]; ?>"  placeholder="Taux d'occupation">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text">%</div>
                                            </div>
                                            <button type="button" data-toggle="tooltip" class="btn tooltip-pim" title="  Votre estimation du pourcentage en fonction de la vacance locative entre deux baux, des pertes sur impayés et sur vide locatif pendant la durée des travaux, des frais d’agence, etc.  Le pourcentage à indiquer est le solde positif (exemple: si 20 % de pertes annuelles estimées, mentionnez 80 %).">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </div>
                                    </div>                                     
                                </div>
                                <div class="col-md-6">
                                    <h2>Charges non récupérables</h2>
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="number" class="form-control form-rendement" name="precompte" value="<?php if (isset($_GET["precompte"]) AND $_GET["precompte"]!='' ) echo $_GET["precompte"]; ?>"   placeholder="Précompte immobilier">
                                            <div class="input-group-prepend">
                                                  <div class="input-group-text">€</div>
                                            </div>
                                            <button type="button" data-toggle="tooltip" class="btn tooltip-pim" title="  Si la location concerne du logement, le précompte immobilier ne peut pas être mis à charge du locataire et constitue donc une charge non récupérable. Indiquez le montant intégral annuel du précompte.   Pour les locations professionnelles, si le bail le prévoit, ce précompte peut être mis à charge du locataire. Dans ce cas, mentionnez « 0 » dans cette case.">
                                                <i class="fas fa-info-circle"></i>
                                            </button>    
                                        </div>
                                    </div>    
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="number" class="form-control form-rendement" name="gestion" value="<?php if (isset($_GET["gestion"]) AND $_GET["gestion"]!='' ) echo $_GET["gestion"]; ?>"   placeholder="Frais de gestion">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text">€</div>
                                            </div>
                                            <button type="button" data-toggle="tooltip" class="btn tooltip-pim" title="  Si vous gérez vous-même, il y aura tout de même certains frais, même réduits. Mentionnez ici une estimation de cette charge.   Si vous confiez la gestion à un régisseur professionnel, indiquez ici le coût annuel estimé (qui résulte probablement d’un pourcentage du revenu locatif).">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </div>
                                    </div>    
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="number" class="form-control form-rendement" name="assurances"  value="<?php if (isset($_GET["assurances"]) AND $_GET["assurances"]!='' ) echo $_GET["assurances"]; ?>"  placeholder="Assurances">
                                            <div class="input-group-prepend">
                                                  <div class="input-group-text">€</div>
                                            </div>
                                            <button type="button" data-toggle="tooltip" class="btn tooltip-pim" title="Le coût annuel de l’assurance incendie et risques divers, comme propriétaire.">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="number" class="form-control form-rendement" name="reparations" value="<?php if (isset($_GET["reparations"]) AND $_GET["reparations"]!='' ) echo $_GET["reparations"]; ?>"  placeholder="Réparations immeuble">
                                            <div class="input-group-prepend">
                                              <div class="input-group-text">€</div>
                                            </div>
                                            <button type="button" data-toggle="tooltip" class="btn tooltip-pim" title="Les frais annuels estimés de réparations diverses non imputables aux locataires.">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </div>
                                    </div>        
                                    <div class="form-group">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="number" class="form-control form-rendement" name="IPP" value="<?php if (isset($_GET["IPP"]) AND $_GET["IPP"]!='' ) echo $_GET["IPP"]; ?>"  placeholder="Impact estimé IPP">
                                            <div class="input-group-prepend">
                                                  <div class="input-group-text">€</div>
                                            </div>
                                            <button type="button" data-toggle="tooltip" class="btn tooltip-pim" title="L’incidence annuelle estimée à votre propre impôt aux personnes physiques, sur base du revenu cadastral de l’immeuble et de votre taux d’imposition. Consultez notre FAQ (fiscalité immobilière) si nécessaire.">
                                                <i class="fas fa-info-circle"></i>
                                            </button>
                                        </div>
                                    </div>  
                                    <div class="form-group"><button type="submit" class="btn btn-primary">Voir le résultat</button><button type="reset" class="btn btn-primary reset-pim">Mise à 0</button></div>                                    
                                </div>
                                <div id="contenu" class="col-12" tabindex="-1"><div class="result-pim">
                                    <?php 
                                    
                                    
$prix=$_GET["prix"];
$loyer=$_GET["loyer"];
$frais_acte=$_GET["frais_acte"];
$travaux=$_GET["travaux"];
$revenus_locatifs=$_GET["revenus_locatifs"];

$occupation=$_GET["occupation"];
$precompte=$_GET["precompte"];
$gestion=$_GET["gestion"];
$assurances=$_GET["assurances"];
$IPP=$_GET["IPP"];

$rendement=0;
 $rendement2=0;
$rendement3=0;
$rendement=100/($prix/($loyer*12));
$rendement2=100/(($prix+$frais_acte)/($loyer*12));
$rendement3=100/(($prix+$frais_acte+$travaux)/($loyer*12));                                    
                                    
                                    ?>
<h2>Résultat</h2>
    <div><span class="label-calcul">Prix d’achat Initale : 
      <button href="#" data-toggle="tooltip" class="btn tooltip-pim" title="" data-original-title="Le prix de vente/achat convenu, hors « frais d’acte »."><i class="fas fa-info-circle" aria-hidden="true"></i></button></span> <span class="font-weight-bold">
        
        <?php echo $prix." €<br>";    echo $_GET["prix"]." // ";
    echo "$rendement2=$prix/($loyer*12);
$rendement=100/$rendement2--";
    $prix; ?></span></div>
    <div><span class="label-calcul">Rendement très brut (%) : <button href="#" data-toggle="tooltip" class="btn tooltip-pim" title="" data-original-title="Résultat en % du calcul suivant: loyer annuel existant divisé par le prix achat hors frais d’acte."><i class="fas fa-info-circle" aria-hidden="true"></i></button></span> <span class="font-weight-bold"><?php echo $rendement2; ?> %</span></div>
    <div><span class="label-calcul">Prix d’achat acte en main : <button href="#" data-toggle="tooltip" class="btn tooltip-pim" title="Prix d’achat principal + frais d’acte."><i class="fas fa-info-circle" aria-hidden="true"></i></button></span> <span class="font-weight-bold"><?php echo $prix+$frais_acte; ?> €</span></div>
    <div><span class="label-calcul">Rendement brut (%) : <button href="#" data-toggle="tooltip" class="btn tooltip-pim" title="" data-original-title="Loyer annuel existant divisé par prix d’achat acte en main."><i class="fas fa-info-circle" aria-hidden="true"></i></button></span> <span class="font-weight-bold"><?php echo $rendement3; ?> %</span></div>
    <div><span class="label-calcul">Investissement total : <button href="#" data-toggle="tooltip" class="btn tooltip-pim" title="" data-original-title="Prix d’achat + frais d’acte + travaux ttc."><i class="fas fa-info-circle" aria-hidden="true"></i></button></span> <span class="font-weight-bold"><?php echo $prix+$frais_acte+$travaux; ?> €</span></div>
    <div><span class="label-calcul">Rendement brut sur investissement total (%): <button href="#" data-toggle="tooltip" class="btn tooltip-pim" title="" data-original-title="Revenu locatif (le cas échéant, après travaux) divisé par investissement total."><i class="fas fa-info-circle" aria-hidden="true"></i></button></span> <span class="font-weight-bold"><?php echo 100/(($prix+$frais_acte+$travaux)/($loyer*12*($occupation/100))); ?> %</span></div>
    <div><span class="label-calcul">Revenu locatif pondéré selon le taux d’occupation : <button href="#" data-toggle="tooltip" class="btn tooltip-pim" title="Taux d’occupation x revenu locatif (le cas échéant, après travaux)."><i class="fas fa-info-circle" aria-hidden="true"></i></button></span> <span class="font-weight-bold"><?php echo $loyer*12*($occupation/100); ?> €</span></div>
    <div><span class="label-calcul">Total charges non récupérable : <button href="#" data-toggle="tooltip" class="btn tooltip-pim" title="" data-original-title="Le total de la colonne n° 2."><i class="fas fa-info-circle" aria-hidden="true"></i></button></span> <span class="font-weight-bold"><?php echo $precompte+$gestion+$assurances+$_GET["reparations"]+$IPP;?> €</span></div>
    <div><span class="label-calcul">Total revenu locatif réel : <button href="#" data-toggle="tooltip" class="btn tooltip-pim" title="Résultat de « revenu locatif pondéré selon taux d’occupation » moins « total charges non récupérables »."><i class="fas fa-info-circle" aria-hidden="true"></i></button></span> <span class="font-weight-bold"><?php echo ($loyer*12*($occupation/100))-($precompte+$gestion+$assurances+$_GET["reparations"]+$IPP); ?> €</span></div>
    <div><span class="label-calcul">Rendement net (%) : <button href="#" data-toggle="tooltip" class="btn tooltip-pim" title="" data-original-title="Revenu locatif réel divisé par investissement total."><i class="fas fa-info-circle" aria-hidden="true"></i></button></span> <span class="font-weight-bold">
        <?php echo 100/(($prix+$frais_acte+$travaux)/(($loyer*12)-($precompte+$gestion+$assurances+$_GET["reparations"]+$IPP)*($occupation/100)));
        
        
        ;?> %</span></div>
</div></div>    
                            </div>
					   
                        </form>
                    	                                                    </div>
                        </div>
                </div>
            </div>
	</main>
<div id="news-zone"></div>
<div class="social-footer print-no">
    <ul class="share-pim">
    <li>
      <div class="facebook-share">
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.rendement-immo.fr/calculs-automatiques/calcul-de-rendement-immobilier/" target="_blank" class="share-popup">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
      </div>
      <span>Facebook</span>
    </li>
    <li>
      <div class="twitter-share">
          <a href="https://twitter.com/share?text=Calcul de rendement immobilier - PIM - Agence immobilière Bruxelles&url=https://www.rendement-immo.fr/calculs-automatiques/calcul-de-rendement-immobilier/&hashtags=PIM,immobilier,Bruxelles" class="share-popup" target="_blank">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
      </div>
      <span>Twitter</span>
    </li>

    <li>
      <div class="linkedin-share">
        <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://www.rendement-immo.fr/calculs-automatiques/calcul-de-rendement-immobilier/&title=Calcul de rendement immobilier&summary=&source=PIM" class="share-popup" target="_blank">
          <i class="fa fa-linkedin" aria-hidden="true"></i>
        </a>
      </div>
      <span>LinkedIn</span>
    </li>
    <li>
      <div class="whatsapp-share">
        <a href="whatsapp://send?text=https://www.rendement-immo.fr/calculs-automatiques/calcul-de-rendement-immobilier/" data-action="share/whatsapp/share" target="_blank">
          <i class="fab fa-whatsapp" aria-hidden="true"></i>
        </a>
      </div>
      <span>Whatsapp</span>
    </li>
    <li>
      <div class="email-share">
        <a href="mailto:?subject=Voici une info qui devrait vous plaire&amp;body=PIM immobilier - https://www.rendement-immo.fr/calculs-automatiques/calcul-de-rendement-immobilier/" title="Share by Email" target="_blank">
          <i class="fal fa-envelope-open-text" aria-hidden="true"></i>
        </a>
      </div>
      <span>Email</span>
    </li>
    <li>
      <div class="print-share">
        <script>var pfHeaderImgUrl = '';var pfHeaderTagline = '';var pfdisableClickToDel = 1;var pfHideImages = 0;var pfImageDisplayStyle = 'right';var pfDisablePDF = 0;var pfDisableEmail = 0;var pfDisablePrint = 0;var pfCustomCSS = '';var pfBtVersion='2';(function(){var js,pf;pf=document.createElement('script');pf.type='text/javascript';pf.src='//cdn.printfriendly.com/printfriendly.js';document.getElementsByTagName('head')[0].appendChild(pf)})();</script>
        <a href="https://www.printfriendly.com" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF" target="_blank">
          <i class="fal fa-print" aria-hidden="true"></i>
        </a>
      </div>
      <span>Print</span>
    </li>
  </ul>
</div>
<div class="newsletter-pim container-fluid print-no">
    <div class="container">
        <div class="col-md-12">
                                    <div class="news-intro">
                <div class="h2-pim">
                    <h2>La newsletter de Rendement-Immo.fr</h2>
                </div>
                <div class="text-news">
                     Abonnez-vous à notre newsletter mensuelle gratuite pour être informé des nouveautés (indice-santé, blog immobilier, législation, offres sélectionnées, etc.) 
                </div>
            </div>
            <div class="news-zone">
                <form id="sib-form" method="POST" action="https://sibforms.com/serve/MUIEAEKTB3hfPbPv4uZ5esWvR-piMude3NuU6N8MxkOf3-5abYKb9zfDaEMW6MUqD9fEvvaE0boTuqbICceLop1ZCnIWamLsuO9rz1q01xae_zeIK_X0XgWe-OrUUKX6pNpzdZ4Qcx94UhzGsXXgR8OxnAJs9gRwCqY1kOL1e8a0Pe_-vgj_d3qhVMF9cNE1CZkCDIWUm4jjXnqd" class="news-form validate">
                    <input class="search-input form-control col-10" maxlength="200" type="email" id="EMAIL" name="EMAIL" autocomplete="off" placeholder="Votre adresse email" data-required="true" required>
                    <label class="entry__error entry__error--primary" style=" font-size:16px; text-align:left; color:#661d1d; background-color:#ffeded; border-radius:3px; border-width:px; border-color:#ff4949;"></label>
                   
                    <button class="btn btn-primary col-2" form="sib-form" type="submit">Ok</button>
                </form>
            </div>
                      
                                            </div>
          </div>
                   
                            </div>
                                            </div>
    </div>
</div>
<footer class="footer" role="contentinfo">
    <div class="container">
        <div class="row">
            <div class="col-md-3 footer-pim1">
                <aside><div class="textwidget custom-html-widget"><div class="img-footer">
	<img src="style/logo-footer.png" alt="PIM - Agence immobilière - Bruxelles" />
</div>
<div class="text-footer">Agence immobilière située dans la région de Bruxelles, spécialisée en ventes moyen et haut de gamme. Notre portail de l'immobilier belge vous offre aussi de nombreuses ressources.</div>
<div class="contact-footer"><span class="space-contact">Téléphone :</span> <a href="tel:003223435959">+32.(0)2.534.45.85</a><br />
<span class="space-contact">Email:</span> <a href="mailto:info@rendement-immo.fr">info@rendement-immo.fr</a></div>
<div class="disclaimer-pim">
	<a href="https://www.rendement-immo.fr/remarques-sur-lutilisation-de-pim-rgpd-et-dispositions-anti-blanchiment-pim-be/">Disclaimer - RGPD - Cookies</a></div></div></aside>            </div>
            <div class="col-md-3 footer-pim2">
                		<aside>		<h3 class="pimfooter-title">Derniers articles du blog</h3>		<ul>
											<li>
					<a href="https://www.rendement-immo.fr/rw-nouvelle-reglementation-sur-le-controle-des-citernes-a-mazout/">RW: nouvelle réglementation sur le contrôle des citernes à mazout</a>
									</li>
											<li>
					<a href="https://www.rendement-immo.fr/duree-de-validite-de-lattestation-de-controle-electrique-bail-5-ou-25-ans/">Durée de validité de l’attestation de contrôle électrique &#038; Bail : 5 ou 25 ans ?</a>
									</li>
											<li>
					<a href="https://www.rendement-immo.fr/bienvenue-a-la-reforme-du-droit-des-biens/">Bienvenue à la réforme du droit des biens</a>
									</li>
											<li>
					<a href="https://www.rendement-immo.fr/le-proprietaire-vendeur-a-aussi-un-devoir-dinformation/">Le propriétaire vendeur a aussi un devoir d&rsquo;information</a>
									</li>
											<li>
					<a href="https://www.rendement-immo.fr/le-coefficient-dindexation-du-revenu-cadastral-2020-est-publie/">Le coefficient d&rsquo;indexation du revenu cadastral 2020 est publié</a>
									</li>
					</ul>
		</aside>            </div>
            <div class="col-md-3 footer-pim3">
                                                <aside>		
                    <h3 class="pimfooter-title">Derniers messages - forum</h3>		
                    <ul>
                                                        <li>
                                    <a href="https://forum.rendement-immo.fr/viewtopic.php?id=289923&action=new">Renon au locataire pour occupation personnelle</a>
                                </li>
                                                                <li>
                                    <a href="https://forum.rendement-immo.fr/viewtopic.php?id=290446&action=new">Elargir le conseil de copropriété : modalités pratiques ?</a>
                                </li>
                                                                <li>
                                    <a href="https://forum.rendement-immo.fr/viewtopic.php?id=290444&action=new">Studio neuf, cuisine équipée: garantie de l'électro-ménager??</a>
                                </li>
                                                                <li>
                                    <a href="https://forum.rendement-immo.fr/viewtopic.php?id=290445&action=new">Mandat hypothécaire (autres biens)</a>
                                </li>
                                                                <li>
                                    <a href="https://forum.rendement-immo.fr/viewtopic.php?id=290442&action=new">locataire qui organise son insolvabilité.</a>
                                </li>
                                                    </ul>
                </aside>
                                            </div>
            <div class="col-md-3 footer-pim4">
                <aside><h3 class="pimfooter-title">Derniers Tweets</h3><!-- Custom Twitter Feeds by Smash Balloon --><div id="ctf" class="ctf ctf-type-usertimeline  ctf-styles" style="width: 100%;" data-ctfshortcode="{}" data-ctfneeded="0"><div class="ctf-tweets"><div class="ctf-item ctf-author-pimbelgique ctf-new ctf-hide-avatar ctf-retweet" id="1230884567554416640" style=""><div class="ctf-tweet-content"><p class="ctf-tweet-text" style="">AR du 17 février 2020 modifiant, en ce qui concerne les avantages de toute nature, l'AR/CIR 92 en cas d'un #prêt consenti sans intérêt ou à un taux d'intérêt réduit (1) #ATN <br />
http://www.ejustice.just.fgov.be/cgi/article_body.pl?language=fr&caller=summary&pub_date=2020-02-21&numac=2020040391%0D%0A </div><div class="ctf-tweet-actions"></div></div><div class="ctf-item ctf-author-pimbelgique ctf-new ctf-hide-avatar" id="1230535567345160199" style=""><div class="ctf-tweet-content"><p class="ctf-tweet-text" style="">La reprise d'encours pour financer votre résidence secondaire ou des travaux https://www.lecho.be/r/t/1/id/10205488</div><div class="ctf-tweet-actions"></div></div><div class="ctf-item ctf-author-pimbelgique ctf-new ctf-hide-avatar" id="1230039331013906432" style=""><div class="ctf-tweet-content"><p class="ctf-tweet-text" style="">Combien vous coûtent les charges de copropriété? https://www.lecho.be/r/t/1/id/10208505</div><div class="ctf-tweet-actions"></div></div></div></div></aside>            </div>
        </div>
        <div class="sociale-pim">
                                    <a href="https://www.linkedin.com/" target="_blank" alt="Linkedin - Pim"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.facebook.com/" target="_blank" alt="Facebook - Pim"><i class="fab fa-facebook"></i></a>
            <a href="https://twitter.com/" target="_blank" alt="Twitter - Pim"><i class="fab fa-twitter"></i></a>
            <a href="https://www.youtube.com/" target="_blank" alt="Youtube - Pim"><i class="fab fa-youtube"></i></a>
                         
        </div>
        <div class="ipi-pim">
            Rue de la croix15, B-1050 Ixelles, Belgique. - N° entreprise: BE0125.197.427
            <div class="footer-ipi">
                <a href="http://www.ipi.be" tager="_blank">Agréation IPI (instance de contrôle et code de déontologie) n° 101.248.</a>
            </div>
        </div>
        <div class="copyright text-center pt-2 pb-2">
            <p class="m-0">&copy; Copyright rendement-immo.fr - 1996 - 2020 | Residential Real-Estate since 1988 | Powered by <a href="https://ux-design.be" target="_blank" alt="Agence Web - Bruxelles - Brabant Wallon - http://ux-design.be/">ux-design.be/</a></p>
        </div>
    </div>
</footer>



</body>
</html>

<!-- Dynamic page generated in 0.144 seconds. -->
<!-- Cached page generated by WP-Super-Cache on 2020-02-22 15:11:59 -->

<!-- Compression = gzip -->