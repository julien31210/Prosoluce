<?php
include ('../header.php');
?>

<div id="d_cont">
    <div class="ui segment">
        <h2 class="ui left floated header">Envoyer une campagne</h2>
        <h3 class="ui orange right floated header">Envoi de SMS sur des téléphones mobiles ou fixes (réponse synchrone)</h3>
        <div class="ui clearing divider"></div>
        <div class="ui top attached tabular menu" id="tabnavigation">
        <a class="item active">Description</a>
        <a class="item">Codes xml</a>
        <a class="item">Codes erreurs</a>
        <a class="item">Test en ligne</a>
    </div>
    <div class="ui bottom attached active tab segment">
      <h4>URL d’appel</h4>
      <div class="ui list">
       <div class="item">http://api.ecampaign.prosoluce.fr/sendSMS</div>
   </div>
   <div class="ui divider"></div>
   <h4>Paramètres</h4>

</div>
<div class="ui bottom attached tab segment" data-tab="two">
    <p>test</p>
</div>
<div class="ui bottom attached tab segment" data-tab="three">
    <p>test</p>
</div>
<div class="ui bottom attached tab segment" data-tab="four">
    <p>test</p>
</div>
</div>
<div class="ui basic buttons">
    <a href="../../index.php" class="ui button">Accueil</a>
    <a href="compose_synchrone.php" class="ui button">Retour</a>
</div>
</div>
</div>


<?php
include ('../footer.php');
?>