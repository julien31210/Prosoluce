$(document).ready(function() {
    // navigation des onglets
    $('#tabnavigation .item').tab();

    $('.ui.dropdown')
        .dropdown();



    // $(".container").css({ display: "none" });
    // $('.ui.menu .ui.dropdown .menu>.item').click(function() {
    //     $(".container").css({ display: "block" });
    // });

});ript src="http://localhost:8000/js/jquery-3.2.1.min.js"></script>
<script src="http://localhost:8000/js/semantic-2.2.10.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://localhost:8000/style/semantic.min.css">
<link rel="stylesheet" type="text/css" href="http://localhost:8000/style/style.css">


</head><body cz-shortcut-listen="true">
<div id="haut-page" class="pousse-footer">
  <header class="ui fixed menu navbar">
   <a href="https://www.prosoluce.fr/"><img id="logo" src="http://localhost:8000/assets/logo-prosoluce.png" alt="Logo PROSOLUCE"></a>
   <div id="burger"></div>
 </header>

<div class="ui vertical menu" id='navbarvertical'>
  <div class="ui left pointing dropdown link item"><i class="dropdown icon"></i>Envoi de messages<div class="menu">
      <div class="item">Messages SMS vers des téléphones mobiles et fixes</div>
      <div class="item">Campagnes d'appels téléphoniques (appels voix)</div>
      <div class="item">Courriers éléctroniques (e-mails)</div>
      <div class="item">Télécopies (FAX)</div>
    </div>
  </div>
  <div class="ui left pointing dropdown link item"><i class="dropdown icon"></i>Structure de groupes<div class="menu">
      <a class="item" href="/pages/groupes/groupes_search_user.php">Recherche de membres</a>
      <a class="item" href="/pages/groupes/groupes_add_user.php">Ajout d'un membre</a>
      <a class="item" href="/pages/groupes/groupes_change_user.php">Modification d'un membre</a>
      <a class="item" href="/pages/groupes/groupes_delete_user.php">Suppression d'un membre</a>
    </div>
  </div>
  <div class="ui left pointing dropdown link item"><i class="dropdown icon"></i>Contenu de groupes<div class="menu">
      <a class="item" href="/pages/groupes/groupes_list_groups.php">Liste des groupes existants</a>
      <a class="item" href="/pages/groupes/groupes_info_groups.php">Informations sur un groupe</a>
      <a class="item" href="/pages/groupes/groupes_create_groups.php">Création d'un groupe</a>
      <a class="item" href="/pages/groupes/groupes_change_groups.php">Modification d'un groupe</a>
      <a class="item" href="/pages/groupes/groupes_delete_contains_groups.php">Supprime le contenu d'un groupe d'envoi</a>
      <a class="item" href="/pages/groupes/groupes_import_contacts_XML.php">Import de contacts depuis un fichier XML</a>
      <a class="item" href="/pages/groupes/groupes_add_fields_groups.php">Ajouter des champs dans un groupe</a>
      <a class="item" href="/pages/groupes/groupes_delete_fields_groups.php">Supprimer des champs dans un groupe</a>
    </div>
  </div>
  <div class="ui left pointing dropdown link item"><i class="dropdown icon"></i>Gestion des modèles<div class="menu">
      <a class="item" href="/pages/templates/templates_create_change.php">Création ou modification d'un modèle</a>
      <a class="item" href="/pages/templates/templates_delete.php">Suppression d'un modèle</a>
      <a class="item" href="/pages/templates/templates_news.php">Informations sur un modèle</a>
      <a class="item" href="/pages/templates/templates_list.php">Liste de tous les modèles existants</a>
      <a class="item" href="/pages/templates/templates_add_rec.php">Ajoute un enregistrement au sein d'un modèle "voix"</a>
      <a class="item" href="pages/templates/templates_download_rec.php">Télécharge un enregistrement présent dans un modèle voix</a>
    </div>
  </div>
  <div class="ui left pointing dropdown link item"><i class="dropdown icon"></i>Gestion des crédits<div class="menu">
      <a class="item" href="pages/credits/credits_management_credits.php">Consultation des crédits disponibles</a>
      </div>
  </div>
  <div class="ui left pointing dropdown link item"><i class="dropdown icon"></i>Gestion des réponses et blacklists<div class="menu">
      <a class="item" href="pages/feedback/feedback_answers_blacklist.php">Obtention de la liste des destinataires blacklistés</a>
      <a class="item" href="pages/feedback/feedback_remove_member_blacklist.php">Suppression d'un membre au sein d'une blacklist</a>
      <a class="item" href="pages/feedback/feedback_get_answers.php">Obtention des réponses</a>
      </div>    
  </div>
  <div class="ui left pointing dropdown link item"><i class="dropdown icon"></i>Suivi des renvois<div class="menu">
      <a class="item" href="/pages/tracking/tracking_get.php">Récupération de la liste des messages envoyés avec suivi</a>
      <a class="item" href="/pages/tracking/tracking_recovery_mail.php">Email : récupération du suivi des actions</a>
    </div>
  </div>
  <div class="ui left pointing dropdown link item"><i class="dropdown icon"></i>Obtention d'informations sur les numéros de tél<div class="menu">
      <a class="item" href="pages/info/info_info_hlr.php">Obtention d'informations HLR</a>
    </div>
  </div>
</div>
<?php

if ((!isset($_GET=='index.php'){

}


?>

<div class="container">

