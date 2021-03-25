<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="utf-8">
    <title>Les formulaires en php</title>
  </head>
  <body>
    <p>Please fill in this form</p>


    <?php

  var_dump($_POST);

?>


    <form action="thanks.php" method="post">
    <div>
        <label for="firstname">Prénom :</label>
        <input type="text" id="firstname" name="firstname">
    </div>
    <div>
        <label for="lastname">Nom :</label>
        <input type="text" id="lastname" name="lastname">
    </div>
    <div>
        <label for="email">e-mail :</label>
        <input type="email" id="email" name="email" value="john.doe@gmail.com">
    </div>
    <div>
        <label for="telephone">telephone :</label>
        <input type="tel" id="telephone" name="phoneNumber" value="">
    </div>
    <div>
        <label for="select-subject">subject of your message:</label>
        <select name="subject" id="select_subject">
          <option value="daughter">votre fille</option>
          <option value="mother">votre mère</option>
          <option value="father">votre père</option>
          <option value="son">votre fils</option>

        </select>
    </div>
    <div>
        <label for="msg">Message :</label>
        <textarea id="msg" name="user_message">Type your message here</textarea>
    </div>
    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>
  </body>
</html>