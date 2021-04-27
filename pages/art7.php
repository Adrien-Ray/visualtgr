<?php include "../includes/header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 content">
            <p class="img"><img src="../assets/images/matrix.png" class="card-img-top" alt="matrix.png"></p>
            <i>Photo de Markus Spiske provenant de Pexels</i>
            <h1>la Cryptographie ou l’art du secret</h1>
            <i>Adrien Raymond</i>
            <p>La cryptographie regroupe les disciplines ayant pour but de rechercher des moyens d’assurer la protection de données. cela inclu:</p>
            <ul>
                <li>la confidentialitée: empêcher la lecture d’un message par une personne non-autorisée.</li>
                <li>l’authenticitée: permettre de « signer » un message pour assurer qu’il est envoyer par la bonne personne.</li>
                <li>l’intégritée: mise en place de protocoles permettant de vérifier que le message n’a pas été modifier de manière frauduleuse</li>

            </ul>
            <h2>vocabulaire</h2>
            <ul>
                <li>CHIFFREMENT: remplacer les caractère d’un texte « en claire » par d’autre pour le rendre illisible.</li>
                <li>CRYPTOSYSTEME: algoritme de chiffrement.</li>
                <li>CRYPTANALISE: science de l’étude des messages chiffrées en vue de leur déchiffrement.</li>
                <li>CRYPTOLOGIE: science regroupant la cryptographie et la cryptanalyse</li>
            </ul>
            <h2>la cryptographie dans le numérique </h2>
            <p>Dans le numérique, la cryptographie est omni-présente. D’abord utilisé dans les communications militaires, puis dans les messages relevants du secret d’état en général (sphère diplomatique,…), elle s’est continuellement perfectionné et démocratisé. En effet, les secteurs bancaires et industriels ont rapidement compris que la posession de technologie fiables serait vital, pour sécurisé les informations bancaires et contrer l’espionnage industriel. Aujourd’hui, sur internet, le simple fait de rentrer sur un espace personel demande par exemple:</p>
            <ul>
                <li>un procédé cryptographique de certification du dommaine (pour s’assurer que l’on ne se trouve pas sur un faux site destinné à voler notre mot de passe via le formulaire d’entrer par exemple)</li>
                <li>un procédé cryptographique pour rendre identifiants et mots de passes illisible à un attaquant qui intterceperait la communication</li>
                <li>Cun procédé cryptographique pour rendre illisible les pages qui s’échangeront après authentification, puisque celles ci pourrons avoir pour contenu ce qui est censé être protégé par le mot de passe.</li>
            </ul>
            <h2>La cryptographie dans les métiers du numérique </h2>
            <p>les métiers suivants demmande de comprendre et de manipuler des procédé cryptographiques:</p>
            <h2>developpeur cryptgraphe</h2>
            <p>developpeur spécialiser dans le cryptage des données sensibles</p>
            <h2>analyste en sécurité</h2>
            <p>vérifie que les systemes de sécuritée d’une entreprise/d’un réseau fonctionnes et répondent aux standards actuels.</p>
            <h2>ingénieur en sécurité</h2>
            <p>métier consistant a élaborer la sécuritée d’un réseau (proche de analyste en sécuritée, qui prend en quelque sorte la suite des opérations).</p>
            <h2>consultant en sécurité</h2>
            <p>il s’agit fréquement d’une personne/organisme exterieur qui donne des conseils, des recommendations et aide a la mise en place de ceux-ci.</p>
            <h2>pentester</h2>
            <p>le pentesteur cherche des failles de sécuritée dans le but de les corrigé. en claire, il s’agit de faire le travail d’un pirate pour réglé les failles avant qu’un réel pirate ne les exploites. Le pentester est souvent confronté a la cryptographie, il peut être notament utile qu’il soit formé à la cryptanalyse. (voir Le Pentesteur ou le Corsaire des Hackers, sur la fiche wiliams.md)</p>
            <h2>technicien réseau</h2>
            <p>le technicien réseau peut être amené à géré la sécuritée des serveurs et des données échangées, il peut donc aussi lui être demandé d’avoir des compétences en cryptologie.</p>
            <h2>cryptologue</h2>
            <p>Cryptologue n’est pas un métier que l’on est ammené a trouver fréquement dans une entreprise. Il s’agit en fait plus d’un mathématicien (voir d’un physicien) qui invente de nouvelles méthodes de cryptage (voir qui cherche les méthodes permettant de casser le code sans la clef). Il existes de nombreuses sous-disciplines dans ce dommaine (Cryptanalyse, Cryptographie symétrique, Cryptographie asymétrique, Cryptographie quantique et post-quantique,… )</p>
            <h2>conclusion</h2>
            <p>La cryptologie regrouppe un grand nombre de compétences. De meme, il existe une grande variété de métiers dans lesquels il peut être nécessaire d’avoir des notions de cryptographie. A partir du moment ou un systeme, un réseau, une entreprise manipule des données dont la lecture sans autorisation peut être convoité, il est nécessaire qu’une personne compétente dans ce dommaine réfléchisse a la mise en place et la maintenance des systemes cryptographiques.</p>
            <h2>references</h2>
            <ul>
                <li>le webdoc de la cryptologie: https://www.ssi.gouv.fr/particulier/bonnes-pratiques/crypto-le-webdoc/cryptologie-art-ou-science-du-secret/</li>
                <li>article wikipedia cryptologie: https://fr.wikipedia.org/wiki/Cryptologie</li>
            </ul>
        </div>
    </div>
</div>
<?php include "../includes/footer.php"; ?>