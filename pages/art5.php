<?php include "../includes/header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-sm-12 content">
            <h1>Les sélecteurs CSS CreuSéS de fond en comble</h1>
            <i>nicolasm - 9 avril 2021 - Utilisation du CSS</i>
            <p>Aujourd’hui nous allons rentrer dans le dur du CSS, apprendre à en simplifier sa lecture et à optimiser son écriture.</p>
            <p>Une fois notre page HTML rédigée, nous avons besoin de lui donner forme avec des styles CSS propres à chaque élément. </p>
            <h2>Voyons comment « parler » au CSS pour lui expliquer quel élément HTML il doit modifier et dans quelles circonstances.</h2>
            <ul>
                <li>/* Ceci est un commentaire en CSS */ Il ne sera pas interprété par le navigateur, très utile pour indiquer des informations sur un code destiné à d’autres développeurs.</li>
                <li>*{ cible toutes la balises de la page HTML</li>
                <li>body { cible tout le body de la page, très utile si on souhaite centrer tout le contenu d’une page, par exemple</li>
                <li>.class { cible tous les éléments a qui nous avons donné la class ="classe"</li>
                <li>#id { cible une balise spécifique, a qui nous avons donné id="id"</li>
                <li>h1, p { cible toutes les balises &lt;h1&gt; et toutes les balises &lt;p&gt; de la page</li>
                <li>.class p { cible toutes les balises &lt;p&gt; situées dans une &lt;div class="class"&gt;</li>
                <li>h2 + p { cible uniquement la première balise &lt;p&gt; située après &lt;h2&gt;</li>
                <li>a[class] { cible toutes les balises <a> qui possèdent une classe</li>
                <li>a[class="exemple"] { cible toutes les balises <a> qui possèdent class="exemple"</li>
                <li>a[href*="ici"] { cible toutes les balises <a> dont le lien contient le mot "ici"</li>
                <li>img[class^=candy] { cible toutes les images dont la classe commence par le mot "candy"</li>
                <li>div[class~="logo"] { cible toutes les div dont la classe contient le mot "logo"</li>
                <li>a[href$=.org] { cible toutes les balises <a> dont le lient se termine par ".org"</li>
            </ul>
            <h2>Il convient également de comprendre l’ordre de priorités des styles.</h2>
            <p>Si vous donnez un fond vert à toute une div qui contient plusieurs paragraphes, et un fond rouge à l’un de ces paragraphes, ce dernier sera en effet rouge, car il a la priorité sur la div principale, mais les autres paragraphes seront verts. Explications :</p>
            <p>Les balises enfants qui n’ont aucun style héritent des propriétés CSS des balises parents. En revanche, plus vous serez spécifique en ciblant un élément, plus le style de cet élément aura la priorité sur le style de ses parents.</p>
            <ul>
                <li>Le sélecteur étoile ( * ) a une priorité de 0.</li>
                <li>Une règle avec un sélecteur sur un type d’élément <p> ou des pseudo-éléments ( :: ) a une priorité de 1.</li>
                <li>Une règle avec un sélecteur sur une classe ( . ) ou des pseudo-class ( : ) a une priorité de 10.</li>
                <li>Une règle avec un sélecteur sur un identifiant ( # ) a une priorité de 100.</li>
                <li>Une règle écrite dans l’attribut style d’une balise HTML a une priorité de 1000.</li>
                <li>Une règle avec la mention !important a une priorité de 10000.</li>
            </ul>
            <p>Pour adopter les bonnes pratiques du web, il convient d’éviter au maximum d’utiliser la mention !important dans le CSS qui prend la priorité sur tout autre style donné à un parent. On peut vite se retrouver perdu si les mentions !important fleurissent sur la feuille de style.</p>
            <p>Il est aussi très déconseillé d’écrire le style CSS directement dans le HTML, car là aussi notre code n’en sera que plus difficilement maintenable à l’avenir.</p>
            <p>Et en règle générale, il sera plus confortable d’utiliser des class plus que des id, car lors de légers conflits de style, il sera facile de contourner une règle en utilisant un id de temps en temps pour devenir d’un seul coup plus précis.</p>
            <p>Ce sont les navigateurs qui appliquent les règles CSS que nous leur dictons et ils le font dans l’ordre d’affichage. Ce qui signifie qu’en cas d’égalité dans les priorités, c’est la déclaration écrite en dernière qui l’emporte.</p>
            <h2>:nth-child</h2>
            <p>C’est une fonction qui permet d’appeler un élément enfant selon sa position dans la div.</p>
            <p>//HTML<br>
            &lt;section class="grid"&gt;<br>
            &lt;article class="module"&gt;One&lt;/article&gt;<br>
            &lt;article class="module"&gt;Two&lt;/article&gt;<br>
            &lt;article class="module"&gt;Three&lt;/article&gt;<br>
            &lt;article class="module"&gt;Four&lt;/article&gt;<br>
            &lt;article class="module"&gt;Five&lt;/article&gt;<br>
            &lt;/section></p>
            <p>Dans ce cas, nous pouvons cibler uniquement le 4ème article en écrivant .module:nth-child(4) { .</p>
            <p>.module:nth-child(even) { ciblera toutes balises avec une class= »module » qui ont un rang pair, ici nous ciblerons donc le 2ème et 4ème article.</p>
            <p>.module:nth-child(odd) { ciblera toutes balises avec une class= »module » qui ont un rang impair, ici nous ciblerons donc le 1er, le 3ème et le 5ème article.</p>
            <h2>sources</h2>
            <p><a href="https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Selectors">https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Selectors</a></p>
            <p><a href="https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3">https://openclassrooms.com/fr/courses/1603881-apprenez-a-creer-votre-site-web-avec-html5-et-css3</a></p>
        </div>
    </div>
</div>
<?php include "../includes/footer.php"; ?>