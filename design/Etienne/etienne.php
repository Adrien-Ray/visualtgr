<?php include "header.php" ?>


<h1>git & github: cheatsheet</h1>
<h2>solo</h2>
<ul>

    <li>git init : initialisation du repository </li>
    <li>git add [nom du fichier] : ajouter du fichier au tracking </li>
    <li>git commit -m "[description de la version]"</li>
    <li>git push</li>
</ul>

<h2>collaboratif</h2>

<ul>


    <li>git branch [nom de la branche]: création d'une nouvelle branche à partir de celle sur laquelle on est positionné</li>
    <li>git checkout [nom de la branche] : se positionner sur telle branche</li>
    <li>git checkout -b [nom de la branche] : clone, nome et se positionner sur new branche</li>
    <li>git merge [nom de la branche] : fusionne la branche nommée avec la branche sur laquelle on est positionné => garde les dos de la branche sur laquel on est et qui ne sont pas sur branche nomé.</li>

</ul>








<?php include "footer.php" ?>