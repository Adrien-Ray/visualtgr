<?php include "../includes/header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 content">
            <p class="img"><img src="../assets/images/matrix.png" alt=""></p>
            <i>Photo de Markus Spiske provenant de Pexels</i>
            <h1>la Cryptographie ou l’art du secret</h1>
            <i>Adrien Raymond</i>
            <p>La cryptographie regroupe les disciplines ayant pour but de rechercher des moyens d’assurer la protection de données. Cela inclus:</p>
            <ul>
                <li>La confidentialité : empêcher la lecture d’un message par une personne non-autorisée.</li>
                <li>L’authenticité :  permettre de « signer » un message pour assurer qu’il est envoyé par la bonne personne.</li>
                <li>L’intégrité :  mise en place de protocoles permettant de vérifier que le message n’a pas été modifier de manière frauduleuse</li>

            </ul>
            <h2>vocabulaire</h2>
            <ul>
                <li>CHIFFREMENT : remplacer les caractère d’un texte « en claire » par d’autre pour le rendre illisible.</li>
                <li>CRYPTOSYSTEME : algorithme de chiffrement.</li>
                <li>CRYPTANALISE : science de l’étude des messages chiffrées en vue de leur déchiffrement.</li>
                <li>CRYPTOLOGIE : science regroupant la cryptographie et la cryptanalyse</li>
            </ul>
            <h2>la cryptographie dans le numérique </h2>
            <p>Dans le numérique, la cryptographie est omniprésente. D’abord utilisé dans les communications militaires, puis dans les messages relevant du secret d’état en général (sphère diplomatique,…), elle s’est continuellement perfectionné et démocratisé. En effet, les secteurs bancaires et industriels ont rapidement compris que la possession de technologie fiables serait vitale, pour sécuriser les informations bancaires et contrer l’espionnage industriel. Aujourd’hui, sur internet, le simple fait de rentrer sur un espace personnel demande par exemple:</p>
            <ul>
                <li>Un procédé cryptographique de certification du domaine (pour s’assurer que l’on ne se trouve pas sur un faux site destiné à voler notre mot de passe via le formulaire d’entrer par exemple)</li>
                <li>Un procédé cryptographique pour rendre identifiants et mots de passes illisible à un attaquant qui intercepterait la communication</li>
                <li>Un procédé cryptographique pour rendre illisible les pages qui s’échangeront après authentification, puisque celles-ci pourrons avoir pour contenu ce qui est censé être protégé par le mot de passe.</li>
            </ul>
            <h2>La cryptographie dans les métiers du numérique </h2>
            <p>Les métiers suivants demande de comprendre et de manipuler des procédé cryptographiques:</p>
            <h2>développeur cryptographe</h2>
            <p>développeur spécialiser dans le cryptage des données sensibles</p>
            <h2>Analyste en sécurité</h2>
            <p>vérifie que les systèmes de sécurité d’une entreprise/d’un réseau fonctionnes et répondent aux standards actuels.</p>
            <h2>ingénieur en sécurité</h2>
            <p>métier consistant a élaborer la sécurité d’un réseau (proche de analyste en sécurité, qui prend en quelque sorte la suite des opérations).</p>
            <h2>Consultant en sécurité</h2>
            <p>il s’agit fréquemment d’une personne/organisme extérieur qui donne des conseils, des recommandations et aide à la mise en place de ceux-ci.</p>
            <h2>Pentester</h2>
            <p>Le pentesteur cherche des failles de sécurité dans le but de les corrigé. en claire, il s’agit de faire le travail d’un pirate pour réglé les failles avant qu’un réel pirate ne les exploites. Le pentester est souvent confronté a la cryptographie, il peut être notamment utile qu’il soit formé à la cryptanalyse. (voir Le Pentesteur ou le Corsaire des Hackers, sur la fiche wiliams.md)</p>
            <h2>technicien réseau</h2>
            <p>le technicien réseau peut être amené à gérer la sécurité des serveurs et des données échangées, il peut donc aussi lui être demandé d’avoir des compétences en cryptologie.</p>
            <h2>Cryptologue</h2>
            <p>Cryptologue n’est pas un métier que l’on est amené à trouver fréquemment dans une entreprise. Il s’agit en fait plus d’un mathématicien (voir d’un physicien) qui invente de nouvelles méthodes de cryptage (voir qui cherche les méthodes permettant de casser le code sans la clef). Il existes de nombreuses sous-disciplines dans ce domaine (Cryptanalyse, Cryptographie symétrique, Cryptographie asymétrique, Cryptographie quantique et post-quantique,… )</p>
            <h2>Conclusion</h2>
            <p>La cryptologie regroupe un grand nombre de compétences. De même, il existe une grande variété de métiers dans lesquels il peut être nécessaire d’avoir des notions de cryptographie. A partir du moment ou un système, un réseau, une entreprise manipule des données dont la lecture sans autorisation peut être convoité, il est nécessaire qu’une personne compétente dans ce domaine réfléchisse à la mise en place et la maintenance des systèmes cryptographiques.</p>
            <h2>Références</h2>
            <ul>
                <li>le webdoc de la cryptologie: https://www.ssi.gouv.fr/particulier/bonnes-pratiques/crypto-le-webdoc/cryptologie-art-ou-science-du-secret/</li>
                <li>article wikipedia cryptologie: https://fr.wikipedia.org/wiki/Cryptologie</li>
            </ul>
        </div>
    </div>
</div>
<?php include "../includes/footer.php"; ?>