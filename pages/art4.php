<?php include "../includes/header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 content">
            <h1>CSS FLEXBOX</h1>
            <i>karinae - 9 avril 2021 - Utilisation du CSS</i>
            <h2>Les flexbox qu’est ce que c’est ?</h2>
            <p>Le module des boîtes flexibles, aussi appelé « flexbox », a été conçu comme un modèle de disposition unidimensionnel et comme une méthode permettant de distribuer l’espace entre des objets d’une interface ainsi que de les aligner.</p>
            <p>Le module des boîtes flexibles, aussi appelé « flexbox », a été conçu comme un modèle de disposition unidimensionnel et comme une méthode permettant de distribuer l’espace entre des objets d’une interface ainsi que de les aligner.</p>
            <p>L’idée principale est de donner à un élément contenant (container) la possibilité de changer les largeur et hauteur des éléments contenus (items), afin de remplir au mieux l’espace disponible, et de s’adapter à tous les terminaux et toutes les tailles d’écrans. Un container flexible permet aux items de s’étendre pour occuper la place disponible ou au contraire les réduit pour leur éviter de déborder.</p>
            <h2>Présentation des flexbox</h2>
            <p>Pour créer un flex-box il suffit d’un élément parent auquel on applique le style display:flex;. Sans qu’il n’y ait rien à faire de plus, ses enfants se positionneront côte à côte et non plus les uns en dessous des autres.</p>
            <p>Voici un élément div possédant trois enfants. Par défaut, ces derniers se disposent les uns en dessous des autres. leur largeur est par défaut 100%. Ce pourcentage est calculé sur la largeur du parent après déduction des marges éventuelles, extérieures et intérieures.</p>
            <figure><img src="../assets/images/art4-img1.png" alt=""></figure>
            <p>Voici maintenant la même construction mais le div parent a reçu la propriété display:flex;. Immédiatement, les trois cadres enfants se positionnent côte à côte à l’intérieur du parent. Et leur largeur est définie par leur contenu.</p>
            <figure><img src="../assets/images/art4-img2.png" alt=""></figure>
            <p>Ceci est le principe de base des flex-box. Remarque : si votre but est simplement d’afficher du texte sur plusieurs colonnes, comme dans un journal, reportez-vous à la propriété CSS columns.</p>
            <h2>La propriété flex-direction</h2>
            <p>Les containers flex-box peuvent fonctionner dans les deux sens. C’est à dire disposer leurs enfants horizontalement ou verticalement. Le besoin le plus courant est de les disposer horizontalement mais la disposition verticale est intéressante également.</p>
            <p>La propriété CSS flex-direction définit l’axe primaire pour la disposition des éléments enfant (en ligne ou en colonne). L’axe secondaire se déduit facilement. flex-direction définit également le sens d’affichage : de droite à gauche ou de gauche à droite, de haut en bas ou de bas en haut.</p>
            <figure><img src="../assets/images/art4-img3.png" alt=""></figure>
            <h2>Le positionnement des éléments dans un flex-box</h2>
            <p>Plusieurs propriétés nous permettent de gérer l’alignement et la répartition des éléments enfant à l’intérieur du container flex :</p>
            <ul>
                <li>justify-content : gère l’alignement des enfants suivant l’axe principal défini par flex-direction. Le plus souvent ce sera l’axe horizontal.</li>
                <li>align-content et align-items: gèrent l’alignement des enfants suivant l’axe secondaire, la plupart du temps ce sera l’axe vertical. Utilisez align-content si le container flex comporte plusieurs lignes et align-items si tous les éléments enfant sont sur la même ligne.</li>
                <li> align-self : cette propriété se définie au niveau de l’un des éléments enfant, pour lui donner un alignement différent.</li>
            </ul>
            <p>Remarque : les propriétés qui agissent suivant l’axe secondaire ont un nom qui commence par align alors que celle qui agit suivant l’axe primaire a un nom qui commence justify. C’est un moyen mnémotechnique pour s’y retrouver dans toutes ces propriétés.</p>
            <figure><img src="../assets/images/art4-img4.png" alt=""></figure>
            <h2>Les dimensions des éléments dans un flex-box</h2>
            <p>De même que l’alignement, les dimensions des éléments enfant peuvent être gérées avec précision. Les propriétés habituelles width et height sont disponibles mais n’exploitent pas toute la puissance des flex-box. Préférez les propriétés suivantes :</p>
            <ul>
                <li>flex-basis : définit la dimension initiale des éléments enfant. On définit souvent la valeur de cette propriété en pourcentage afin d’obtenir une disposition qui s’adapte à la taille de l’écran (responsive).</li>
                <li>flex-grow : indique si l’élément enfant peut s’agrandir pour remplir le container flex. Si plusieurs enfants peuvent s’agrandir ils le font proportionnellement à la valeur de cette propriété.</li>
                <li>flex-shrink : indique si l’élément enfant peut se réduire lorsque la place disponible est insuffisante pour tous les éléments enfant.</li>
            </ul>
            <h2>Les retours à la ligne dans un flex-box</h2>
            <p>La propriété CSS flex-wrap gère les retours à la ligne dans un container flex. Le mieux est de jouer un peu avec ce simulateur pour bien comprendre les possibilités et la puissance de flex-wrap.</p>
            <figure><img src="../assets/images/art4-img5.png" alt=""></figure>
            <h2>Testez!</h2>
            <p><a href="https://codepen.io/enxaneta/full/adLPwv">https://codepen.io/enxaneta/full/adLPwv</a> –> vous pourrez tester les différentes valeurs des propriétés et voir les résultats.</p>
            <p><a href="https://flexboxfroggy.com/#fr">https://flexboxfroggy.com/#fr</a> –> , un jeu où vous aidez Froggy la grenouille et ses amis en écrivant du code CSS! </p>
        </div>
    </div>
</div>
<?php include "../includes/footer.php"; ?>