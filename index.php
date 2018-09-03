<?php
//Déclaration de variable qui seront changées par l'utilisateur
$validate = 0;
$number1 = 0;
$number2 = 0;
$result = 0;
//regex pour vérifier si les infos rentrées sont bien des chiffres
$regex = '/^\d+$/';
//Vérification de la bonne rentrée des informations dans les champs input
(!empty($_POST['chiffre1']) && preg_match($regex, $_POST['chiffre1'])) ? $number1 = $_POST['chiffre1'] : 'Veuillez entrer des chiffres';
(!empty($_POST['chiffre2']) && preg_match($regex, $_POST['chiffre2'])) ? $number2 = $_POST['chiffre2'] : 'Veuillez entrer des chiffres';
//addition
if (isset($_POST['addition'])) {
    $validate = 1;
    $result = $number1 + $number2;
//soustraction
}if (isset($_POST['soustraction'])) {
    $validate = 1;
    $result = $number1 - $number2;
//multiplication
}if (isset($_POST['multiplication'])) {
    $validate = 1;
    $result = $number1 * $number2;
//division
}if (isset($_POST['division'])) {
    $validate = 1;
    $result = $number1 / $number2;
//reset
}if (isset($_POST['reset'])) {
    $validate = 0;
    $result = 0;
    $number1 = 0;
    $number2 = 0;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/style.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <title>Calculatrice</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-6">
                    <div class="cadre">
                        <h1>Une calculatrice en PHP</h1>
                        <!--Initialisation du formulaire-->
                        <form action="#" method="POST">
                            <ul>
                                <li class="list"><!-- Nous gardons la valeur choisis par l'utilisateur dans les champs -->
                                    <input type="text" id="chiffre1" name="chiffre1" size="3" autofocus value="<?= ($validate == 1) ? $number1 : '';?>"/>
                                    <input type="text" id="chiffre2" name="chiffre2" size="3" value="<?= ($validate == 1) ? $number2 : '';?>"/>
                                </li>
                            </ul>
                            <ul>
                                <li class="list">
                                    <input type="submit" name="addition" value="+"/>
                                    <input type="submit" name="soustraction" value="-"/>
                                    <input type="submit" name="multiplication" value="*"/>
                                    <input type="submit" name="division" value="/"/>
                                    <input type="submit" name="clear" value="clean up calcul"/>
                                </li>
                            </ul>
                        </form><!--Nous affichons le résultat si les champs ne sont pas, sont mal, ou sont bien remplis-->
                        <p class="result">Résultat: <?php echo $result;?></p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
