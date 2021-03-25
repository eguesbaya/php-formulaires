<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Les formulaires en php</title>
  </head>
  <body>

  <?php var_dump($_POST);
  ?>

    <p> Merci 
      <?php echo $_POST['firstname'] . " " . $_POST['lastname'] . " de nous avoir contacté à propos de " . $_POST['subject'] . ".";
      ?>
    </br>
    </br>

    <?php echo "Un de nos conseiller vous contactera soit à l’adresse " . $_POST['email'] . " ou par téléphone au " . $_POST['phoneNumber'] . " dans les plus brefs délais pour traiter votre demande : ";
    ?>

    </br>
    </br>

    <?php echo $_POST['user_message'];
    ?>
    </p>

  </body>
</html>