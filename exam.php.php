<!DOCTYPE html>

<form>

    <form name="form" method="post" action="tp7.php">
    prénom
        <input type="text" name="prenom">
    nom
        <input type="text" name="nom">
        <input type="text" name="numéro de sécurité social">
        
        à quelle fréquence conssomez-vous de l'alcool ? réponse par semaine
        <input type="radio" name="fréquence"
        <?php if (isset($frequence) && $frequence=="2 à 3") echo "checked";?>
value="frequence">frequence



        Avez vous l'alcool
        <input type="text" name="nom">
        <input type="submit" value="envoyer">
    </form>

    <style>

    </style>

if ($_POST['submit']) {
    
    for ($i=0; $i < $_POST['10']; $i++) {
        echo "*";
    }

    $i = 0;
    while ($i < $_POST['10']) {
        echo "*";
        $i++;
    }

}