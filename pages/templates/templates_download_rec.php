<div id="d_cont">
    <div class="ui segment">
        <h2 class="ui left floated header">Modèles</h2>
        <h3 class="ui orange right floated header">Télécharge un enregistrement présent dans un modèle "voix"</h3>
        <div class="ui clearing divider"></div>
        <div class="ui top attached tabular menu" id="tabnavigation">
            <a class="item active" data-tab="one">Description</a>
            <a class="item" data-tab="two">Requêtes</a>
            <a class="item" data-tab="three">Réponses</a>
            <a class="item" data-tab="four">Exemple d'intégration</a>
        </div>
        <div class="ui bottom attached active tab segment" data-tab="one">
            <p>Récupère un message enregistré au format MP3.</p>
            <?php include ('pages/tables/table_download_recorded_model_voice.php'); ?>
            <h4>URL d’appel</h4>
            <div class="ui list">
                <div class="item">http://api.ecampaign.prosoluce.fr/manageTemplate/*ID_MODELE*/getMP3</div>
            </div>
            <div class="ui divider"></div>
            <h4>Paramètres</h4>
            <p><strong>*ID*</strong> devra être remplacé par l'identifiant du modèle.</p>
            <?php include ('pages/tables/table_gest_grp_model.php'); ?>


        </div>
        <div class="ui bottom attached tab segment" data-tab="two">
            <button class="ui secondary button mini" id="copy-button" data-clipboard-target="#post-shortlink-two"><i class="large copy icon"></i></button>
            <?php echo'<pre><code class="html" id="post-shortlink-two">'; highlight_file('./pages/codes_xml/code_requetes/req_modele_load_enregis_voix.php');  echo'</code></pre>'; ?>
        </div>
        <div class="ui bottom attached tab segment" data-tab="three">
            <button class="ui secondary button mini" id="copy-button" data-clipboard-target="#post-shortlink-three"><i class="large copy icon"></i></button>
            <?php echo'<pre><code class="html" id="post-shortlink-three">'; highlight_file('./pages/codes_xml/code_reponses/resp_modele_load_enregis_voix.php');  echo'</code></pre>'; ?>

            <h4>Codes communs</h4>
            <?php include ('pages/code_errors/codes_communs.php'); ?>
            <?php include ('pages/code_errors/codes_relat_gest_model.php'); ?>
        </div>
        <div class="ui bottom attached tab segment" data-tab="four">
            <button class="ui secondary button mini" id="copy-button" data-clipboard-target="#post-shortlink-four"><i class="large copy icon"></i></button>
            <p id="post-shortlink-four">
                <?php  ?>
            </p>


        </div>
    </div>
</div>
</div>
</div>