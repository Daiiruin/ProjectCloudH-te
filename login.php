<?php
  // Vérifier si le formulaire a été soumis
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $pseudo = $_POST["pseudo"];
    $password = $_POST["password"];

    // Vérifier les informations d'identification de l'utilisateur
    if ($pseudo === "utilisateur" && $password === "motdepasse") {
      // Rediriger l'utilisateur vers une page de succès
      header("Location: home.php");
      exit;
    } else {
      // Afficher un message d'erreur si les informations d'identification sont incorrectes
      echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
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
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
      }
      input[type="text"],  input[type="password"] {
        display: block;
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border-radius: 5px;
        border: 1px solid #ccc;
        font-size: 16px;
      }
      input[type="submit"] {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
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
        color: #4CAF50;
        text-decoration: none;
      }
      .login-link a:hover {
        text-decoration: underline;
      }
    </style>
  </head>
  <body>
    <h1>CloudHôte</h1>
    <h2>Connexion</h2>
    <form action="login.php" method="post">
      <label for="text">Pseudo :</label>
      <input type="text" id="text" name="pseudo" required />
      <label for="password">Mot de passe :</label>
      <input type="password" id="password" name="password" required />
      <input type="submit" value="Se connecter" />
      <div class="login-link">
      <p>Vous n'avez pas de compte ? <a href="index.php">Inscrivez vous</a></p>
    </div>
    </form>
  </body>
</html>

