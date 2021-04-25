<?php include "../includes/header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 content">
            <h1>Se déplacer dans le terminal. Les bases.</h1>
            <i>adamb 12 avril 2021</i>
            <h2>LS</h2>
            <p>Dans un premier temps nous allons voir ensemble la commande «ls ». Elle sert à explorer le contenue du dossier dans lequel vous vous trouvez. La commande ls sert aussi à explorer un dossier définit.</p>
            <p>ls /nom du dossier.</p>
            <h2>Découvrons maintenant ls ..</h2>
            <p>‘..’ quant à lui est un dossier caché qui correspond toujours au répertoire parent. Donc ls .. va afficher le contenu du répertoire parent. Le ls -a sert à voir les dossiers cachés. Et bien sûr, tous les paramètres peuvent être combinés. ls -la va afficher le contenu du répertoire avec les dossiers et fichiers cachés.</p>
            <h2>CD</h2>
            <p>Déplacez-vous dans votre répertoire avec la commande « cd » Faire cd vous ramène à la racine.Avec le cd vous pouvez déplacer dans n’importe quel dossier. cd nom du dossier. Vous pouvez le reproduire autant que vous voulez.</p>
            <p>Exemple : cd nom du dossier/nom du dossier/nom du dossier.</p>
            <p>Revenons dans le dossier précédant. Pour revenir dans le dossier précèdent il vous suffit de faire cd ..</p>
            <h2>MKDIR & touch</h2>
            <p>Créer vos fichiers et vos dossiers : Pour créer un dossier il vous suffit de d’écrire mkdir. (c’est une contraction de « make directory » c’est-à-dire créer un répertoire. Pour créer un fichier utilisez la commande touch.</p>
            <h2>RM</h2>
            <p>Pour terminer les bases je vais vous parler de rm. Ca sert à supprimer un fichier. Pour un répertoire vous devez utiliser rm -rf.</p>
            <p>Il reste énormément de commandes à savoir pour bien utiliser un terminal. Mais nous allons nous arrêter la pour le moment.</p>
        </div>
    </div>
</div>

<?php include "../includes/footer.php"; ?>