<?php
$path = "/"
 ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Le Max De Culture • Un nouveau DÉPART !</title>
    <link href="<?= $path?>assets/media/logo.png" rel="shortcut icon" />

    <link rel="stylesheet" href="<?= $path?>assets/stylesheets/master.css">

    <link rel="stylesheet" href="<?= $path?>assets/stylesheets/accueil.css">
    <link rel="stylesheet" href="<?= $path?>assets/stylesheets/association.css">
    <link rel="stylesheet" href="<?= $path?>assets/stylesheets/adherez.css">
    <link rel="stylesheet" href="<?= $path?>assets/stylesheets/nouveautes.css">
    <link rel="stylesheet" href="<?= $path?>assets/stylesheets/widgets.css">
    <link rel="stylesheet" media="screen and (max-width: 1024px)" type="text/css" href="<?= $path ?>assets/stylesheets/mobile.css">
    <meta name="Keywords" content="le max de culture, Le Max De Culture, association, partage, connaissances, cours, articles, conférences, interviews">
    <meta name="description" content="Le Max De Culture • Un nouveau DÉPART !">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  </head>
  <body>

    <a href="https://le-max-de-culture.fr/link" id="back_home" target="_blank">
      <img src="<?= $path?>assets/media/logo.png" alt="Logo de l'Association" title="Liens de l'Association">
    </a>

    <header>
      <nav>
        <ul>
          <li><a href="#accueil">Accueil</a></li>
          <li><a href="#association">Association</a></li>
          <li><a href="#adherez">Adhérez !</a></li>
          <li><a href="#nouveautes">Nouveautés</a></li>
        </ul>
      </nav>
    </header>

    <header id="mobile">
  <div id="title">
    <img src="<?= $path ?>assets/media/logo.png" alt="Logo du Site">
    <a href="<?= $pathl ?>index.php"><h1>
    Le Max De Culture</h1></a>
  </div>
  <div id="menu-toggle">
    <nav id="nav">
    <ul>
      <li><a href="#accueil">Accueil</a></li>
      <li><a href="#association">Association</a></li>
      <li><a href="#adherez">Adhérez !</a></li>
      <li><a href="#nouveautes">Nouveautés</a></li>
    </ul>
  </nav>
    <span class="fas fa-bars fa-2x" aria-hidden="true" onclick="mobile()" style="color:black;"></span>
  </div>
</header>


    <section id="accueil">
      <div id="home">
      <img src="assets/media/fusee.gif" alt="">
      <h1><span>Le Max De Culture</span><span>prend un nouveau DÉPART !</span></h1>
    </div>
    </section>


    <section id="association">

        <h2>Création de l'association</h2>

        <div>
          <p>Souhaitant proposer toujours plus d'activités et de contenus, il devenait de plus en plus important d'avoir un cadre légal pour le projet. C'est pourquoi, nous avons l'immense plaisir de vous annoncer la création officielle de l'<span>association Le Max De Culture</span> !! 🎉</p>

          <p>Outre la stabilité que ce statut permet, nous allons pouvoir désormais envisager des événements de plus grande ampleur. En effet, disposer d’un nom, d’une reconnaissance et de moyens facilitera l’accès à différentes personnes, ressources et lieux afin de proposer Le Max D’Actions !</p>

          <p>Vous pouvez retrouver la publication de l'Association sur le <a href="https://www.journal-officiel.gouv.fr/associations/detail-annonce/associations_b/20210018/320" target="_blank">Journal Officiel des Associations</a> ainsi que les <a href="<?= $path?>assets/media/statuts.pdf" target="_blank">Statuts de l'Association</a> et son <a href="<?= $path?>assets/media/reglement.pdf" target="_blank">Règlement</a>.</p>

            <p>Toute l’équipe du Max De Culture se joint à nous pour vous souhaiter la bienvenue ! Nous espérons que vous y passerez du bon temps et que le projet vous apportera tout autant qu’il nous apporte !</p>

      <!--    <p><span>Qu’est-ce que cela change pour le projet ?</span> Rien à court terme, nous allons continuer nos activités : les conférences, les échanges passionnés et les bons moments sur le serveur Discord ainsi que toutes les ressources mises à disposition. En revanche, nous allons essayer de proposer des actions plus grandes comme des conférences en présence, actions qui sont rendues possible grâce au statut de l’association !</p>!-->

          <img src="assets/media/fusee.png" alt="" style="max-width:400px;display:block; margin:auto;">
        </div>
    </section>

    <section id="adherez">

        <h2>Adhérez à l'association !</h2>
        <div>
        <p><span>Comment adhérer à l’association ?</span> Nous avons défini trois types de membre pour l'Association :
          <ul>
            <li><span>Les membres actifs :</span> ce sont ceux qui participent bénévolement au projet, à l'association. Ce sont par exemples les rédacteurs, les conférenciers, etc. Pour le devenir, il suffit de nous le demander (sur Discord, sur les réseaux ou par mail à <a href="mailto:contact@le-max-de-culture.fr" target="_blank">contact@le-max-de-culture.fr</a>). Les membres du Conseil d'Administration statueront une fois par mois sur les demandes pour être membre actif. Les membres actifs auront un droit de vote lors de l’assemblée générale ordinaire qui se tiendra chaque mois de décembre.</li>

            <li><span>Les membres bienfaiteurs :</span> ce sont ceux qui participent financièrement à l'Association en payant une cotisation annuelle de 30&nbsp;€. Pour le devenir, il suffit de compléter ce formulaire sur HelloAsso <a href="https://www.helloasso.com/associations/le-max-de-culture/adhesions/adhesion-association-le-max-de-culture" target="_blank">https://www.helloasso.com/associations/le-max-de-culture/adhesions/adhesion-association-le-max-de-culture</a>. Vous pouvez consulter ce tutoriel en <a href="<?= $path?>assets/media/tutoriel.pdf">PDF</a> ou en vidéo <a href="https://youtu.be/qX2AeCJdjJw" target="_blank">https://youtu.be/qX2AeCJdjJw</a> pour vous guider. Les membres bienfateurs peuvent assister à l'Assemblée Générale mais n'ont pas le droit de vote.</li>

            <li><span>Les membres actifs bienfaiteurs :</span> ce sont les membres qui sont à la fois actifs et bienfaiteurs et respectent les conditions de ces deux derniers.</li>
          </ul>
          La cotisation annuelle est de 30&nbsp;€. Les étudiants et les mineurs ont la possibilité d'avoir une cotisation de 25&nbsp;€ en le justifiant sur le formulaire en ligne (il y aura un champ à compléter).


          <a href="page" class="cotiser">Cotiser</a>
        </div>
    </section>

    <section id="nouveautes">


      <h2>Les nouveautés à venir !</h2>

      <div>
        <p>Nous allons <span>continuer nos activités</span> : les conférences, les exposés, les discussions, les échanges passionnés et les bons moments sur le serveur Discord ainsi que toutes les ressources mises à disposition. En revanche, nous allons essayer de proposer des actions plus grandes comme des conférences en présence, actions qui sont rendues possible grâce au statut d’Association !</p>

        <p>Nous allons redévelopper entièrement le <span>site Web</span> cet été. Celui-ci permettra, entre autres, de republier les articles et d'en produire de nouveaux mais aussi de lancer <span>Le Max De Cours</span> à la rentrée.</p>

        <p>Nous allons également démarrer deux nouveaux formats à court terme : les <span>interviews</span> et les <span>séminaires</span>. Les interviews nous permettront de découvrir la façon de pensée et le parcours de personnes inspirantes. Les séminaires permettront de donner la parole à des professionnels pour échanger à propos de leur métier et nous présenter leur passion.</p>

        <p>Nous allons continuer d'améliorer la qualité de notre contenu, notamment en développant des projets pour la <a href="https://www.youtube.com/channel/UCcUIG4QC68iMr6iEEXVd8MQ" target="_blank">chaîne YouTube</a> avec, par exemple, la diffusion des conférences en direct sur YouTube.</p>

        <p>Nous tenions également à profiter de ce nouveau départ pour changer le statut du projet : nous promouvons l'<span>open-source</span>. Ainsi, tout le code et les contenus seront disponibles sous la licence <a href="https://creativecommons.org/licenses/by-nc-nd/2.0/fr/" target="_blank">CC BY-NC-ND 2.0 FR</a> qui permet, à nouveau, de promouvoir le partage et la mise en commun. Tout sera sur le Github <a href="https://github.com/Le-Max-De-Culture" target="_blank">Le Max De Culture</a>, sur lequel nous ajouterons le contenu au fur et à mesure.</p>
      </div>
    </section>



    <footer>
      <p>&copy 2018 - <?= date('Y') ?> - <a href="https://le-max-de-culture.fr">Le Max De Culture</a></p>
      <p>Site sous licence <a href="https://creativecommons.org/licenses/by-nc-nd/2.0/fr/" target="_blank">CC BY-NC-ND 2.0 FR</a> - <a href="https://github.com/Le-Max-De-Culture/le-max-de-culture.fr">Code source</a> </p>

    </footer>

    <script src="<?= $path?>assets/javascript/master.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.13.1/js/all.js"></script>
  </body>
</html>
