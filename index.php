<?php

function create_user($pseudo, $password, $domaine)
{
  shell_exec(sprintf("sudo sh /var/www/html/script.sh %s %s %s", escapeshellarg($pseudo), escapeshellarg($password), escapeshellarg($domaine)));
}

function add_user_table($pseudo, $password)
{
  shell_exec(sprintf("sudo sh/var/www/html/database_users.sh %s %s", escapeshellarg($pseudo), escapeshellarg($password)));
}

if (isset($_POST["pseudo"]) && isset($_POST["domaine"]) && isset($_POST["password"])) {
  $pseudo = filter_input(INPUT_POST, "pseudo");
  $password = filter_input(INPUT_POST, "password");
  $domaine = filter_input(INPUT_POST, "domaine");
  echo "L'utilisateur a été créé !";
  echo "<p>" . $pseudo . " " . $password . " " . $domaine . "</p>";

  create_user($pseudo, $password, $domaine);
  add_user_table($pseudo, $password);
}



?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <title>Connexion</title>
  <style>
    /* Styles pour la mise en forme */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    h1 {
      text-align: center;
      color: #333;
    }
    h2{
	text-align: center;
	color: #333;
}

    form {
      max-width: 400px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    input[type="text"],
    input[type="password"] {
      display: block;
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border-radius: 5px;
      border: 1px solid #ccc;
      font-size: 16px;
      margin-right: 20px;
    }

    input[type="submit"] {
      display: block;
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      border: none;
      color: #fff;
      border-radius: 5px;
      font-size: 16px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #3e8e41;
    }

    .login-link {
      text-align: center;
    }

    .login-link a {
      color: #4caf50;
      text-decoration: none;
    }

    .login-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>

<body>
<h1>CloudHôte</h1>
  <h2>Inscription</h2>
  <form method="post">
    <label for="text">Pseudo :</label>
    <input type="text" id="text" name="pseudo" required />

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password" required />

    <label for="text">Nom de domaine souhaité:</label>
    <input type="text" id="text" name="domaine" required />

    <input type="submit" value="S'inscrire" />

    <div class="login-link">
      <p>Vous avez déjà un compte ? <a href="login.php">Connectez vous</a></p>
    </div>
  </form>
</body>

</html>
