<?php include "../includes/header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 content">
            <h1>Le Media-queries</h1>
            <i>etiennez - 9 avril 2021 - Les métiers du web</i>
            <p class="img"><img src="../assets/images/art5-img1.png" alt=""></p>
            <p>Les requêtes média (media queries) permettent de modifier l’apparence d’un site ou d’une application en fonction du type d’appareil (impression ou écran par exemple) et de ses caractéristiques (la résolution d’écran ou la largeur de la zone d’affichage (viewport) par exemple).</p>
            <h2>Les requêtes des médias utilisées :</h2>
            <p>Afin d’appliquer certains styles de façon conditionnelle grâce aux règles @ @media et @import. De cibler certains médias pour les éléments style, link, source et d’autres éléments HTML grâce à l’attribut media=. De tester et surveiller l’état d’un média grâce aux méthodes Window.matchMedia() et MediaQueryList.addListener() (en-US). Note : Les exemples de cet article utilisent @media à des fins d’illustration. Toutefois, la syntaxe est la même pour les différents types de requêtes média.</p>
            <h2>Contenue :</h2>
            <p>Une requête média se compose d’un type de média optionnel et d’une ou plusieurs expressions de caractéristiques de média. Plusieurs requêtes peuvent être combinées entre elles grâce à des opérateurs logiques. Les requêtes média ne sont pas sensibles à la casse.</p>
            <p>Une requête média vaut true si le type de média correspond à l’appareil utilisé pour l’affichage du document et si toutes les expressions relatives aux caractéristiques sont vraies. Les requêtes qui utilisent des types de média inconnus valent toujours false.</p>
            <p>Note : Lorsque une feuille de style est attachée à un élément link comportant une requête média, cette feuille de style sera toujours téléchargée, même si la requête renvoie false. Toutefois, le contenu de cette feuille n’est pas appliquée tant que le résultat de la requête ne devient pas true.</p>
            <h2>Les différents types de média</h2>
            <p>Un type de média définit une catégorie générale d’appareil. Le type de média est optionnel dans une requête média, sauf si celle-ci utilise les opérateurs logiques not ou only. Par défaut, le type de média utilisé est all.</p>
            <ul>
                <li>all:Correspond pour tous les appareils. print: Correspond aux matériaux paginés et aux documents consultés en aperçu avant impression. Pour plus d’informations, voir l’article sur les média paginés.</li>
                <li>screen:Correspond aux appareils dotés d’un écran.</li>
                <li>speech:ce sont outils de synthèse vocale. Note : Les types de média dépréciés CSS2.1 et Media Queries 3 ont défini plusieurs types additionnels (tty, tv, projection, handheld, braille, embossed, and aural) qui ont ensuite été dépréciés avec Media Queries 4. Ces types ne doivent donc plus être utilisés. Le type aural a été remplacé par le type speech.</li>
            </ul>
            <h2>Caractéristiques des média</h2>
            <p>Les caractéristiques média décrivent certaines caractéristiques spécifiques de l’agent utilisateur, de l’appareil d’affichage ou de l’environnement. Les expressions de caractéristique média testent leur présence ou leur valeur. Chaque expression de caractéristique doit être entourée de parenthèses.</p>
            <h3>quelques note importante :</h3>
            <ul>
                <li>width La largeur de la zone d’affichage (viewport)</li>
                <li>height La hauteur de la zone d’affichage</li>
                <li>aspect-ratio Le rapport largeur/hauteur de la zone d’affichage</li>
                <li>L’orientation de la zone d’affichage et la résolution ainsi que la densité de pixel pour l’appareil d’affichage</li>
                <li>scan Le processus de scan de l’appareil d’affichage</li>
                <li>grid Le type d’écran de l’appareil : matriciel ou grille ?</li>
                <li>update : La fréquence de modification du contenu par l’appareil d’affichage Ajoutée avec le niveau 4 du module de spécification Media Queries.</li>
                <li>overflow-block : La façon dont l’appareil d’affichage gère le contenu qui dépasse de la zone d’affichage selon l’axe de bloc.</li>
                <li>overflow-inline : La possibilité de faire défiler (scroll) le contenu qui dépasse de la zone d’affichage sur l’axe en ligne Ajoutée avec le niveau 4 du module de spécification Media Queries. color Le nombre de bits pour chaque composante de couleur pour l’appareil d’affichage (ou 0 si l’appareil ne gère pas les couleurs)</li>
                <li>color-gamut : Un intervalle approximatif des couleurs prises en charge par l’agent utilisateur et l’appareil d’affichage Ajoutée avec le niveau 4 du module de spécification Media Queries.</li>
                <li>color-index Le nombre d’éléments dans le tableau des couleurs de l’appareil d’affichage (ou 0 si l’appareil ne dispose pas d’un tel tableau) display-mode Le mode d’affichage de l’application, tel qu’indiqué par la propriété display du manifeste Définie dans la spécification pour les manifestes des applications web. monochrome Le nombre de bits par pixel pour le frame buffer monochrome de l’appareil d’affichage ou 0 si l’appareil n’est pas monochrome</li>
                <ul>
                    <li>inverted-colors : L’inversion (ou non) des couleurs par l’agent utilisateur ou le système d’exploitation.</li>
                    <li>any-hover : La capacité d’un des mécanismes de saisie à survoler les éléments. </li>
                    <li>light-level Le niveau de luminosité de l’environnement.</li>
                    <li>prefers-reduced-motion L’utilisateur préfère que la quantité de mouvement sur la page soit réduite.</li>
                    <li>prefers-reduced-transparency : L’utilisateur préfère que la transparence utilisée sur la page soit réduite.</li>
                    <li>prefers-contrast : L’utilisateur préfère que la contraste soit augmenté ou réduit entre des couleurs proches.</li>
                    <li>prefers-color-scheme L’utilisateur préfère utiliser un thème clair ou un thème sombre.</li>
                    <li>forced-colors Détecte si l’agent utilisateur restreint la palette de couleurs.</li>
                    <li>scripting La disponibilité des fonctions de script (JavaScript par exemple)</li>
                    <li>device-width La largeur de la surface de rendu pour l’appareil d’affichage.</li>
                    <li>device-height La hauteur de la surface de rendu pour l’appareil d’affichage.</li>
                    <li>device-aspect-ratio Le rapport largeur/hauteur de la surface de rendu pour l’appareil d’affichageLes opérateurs logiques not, and et only peuvent être utilisés afin de construire une requête média complexe. Il est aussi possible de combiner plusieurs requêtes média en les séparant par des virgules</li>
                </ul>
                <li>and : L’opérateur and permet de combiner plusieurs requêtes média en une seule. Pour que la requête résultante soit vraie, il faut que chacune des sous-requêtes soit vraie. Cet opérateur est également utilisé afin de relier des caractéristiques média avec des types de média.</li>
                <li>not : L’opérateur not est utilisé afin d’obtenir le résultat opposé d’une requête média (il renvoie true si l’opérande renvoie false). S’il est utilisé dans une liste de requêtes séparées par des virgules, il ne nie que la requête sur laquelle il est appliqué. Si l’opérateur not est utilisé, la requête doit nécessairement contenir un type de média.</li>
                <li>Note : Pour la spécification de niveau 3, l’opérateur not ne peut pas être utilisé afin de prendre l’opposé d’une expression de caractéristique de média, il ne peut servir qu’à l’échelle d’une requête média entière.</li>
                <li>only : L’opérateur only est utilisé afin d’appliquer un style uniquement si l’intégralité de la requête est vérifiée. Il permet d’empêcher les anciens navigateurs d’appliquer les styles concernés. Si on utilise pas only, un ancien navigateur interprétera screen and (max-width: 500px) comme screen uniquement (appliquant ainsi le style à tous les écrans). Si l’opérateur only est utilisé, la requête doit nécessairement contenir un type de média.</li>
                <li>, (virgule) Les virgules permettent de combiner plusieurs requêtes en une. Chaque requête est traitée séparément. Autrement dit, si une des requêtes de la liste renvoie true, toute la requête combinée renverra true. En ce sens, l’opérateur , agit comme un opérateur booléen or.</li>
            </ul>
                <h2>Cibler des types de média</h2>
                <p> Les types de média décrivent la catégorie générale de l’appareil utilisé. Bien que la plupart des sites web soient principalement conçus pour être affichés sur des écrans, il est possibles d’avoir des styles spécifiques pour les impressions ou pour les lecteurs d’écran. Voici une requête qui permet de cibler les imprimantes ou autres appareils imprimant le contenu sur plusieurs pages :</p>
                <p>@media print { … } Il est possible de cibler plusieurs types à la fois. La règle suivante permet de cibler les écrans et les appareils d’impression :</p>
                <p>@media screen, print { … } Pour une liste complète des types de média, voir ci-avant. Ces types étant très génériques, peu de valeurs sont disponibles. Afin d’avoir un ciblage plus fin, on pourra utiliser les caractéristiques média.</p>
        </div>
    </div>
</div>
<?php include "../includes/footer.php"; ?>