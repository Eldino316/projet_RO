

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>MILLLENIUM UNIVERSITY</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'><link rel="stylesheet" href="moteur/css/login.css">
  <script type="text/javascript" src="moteur/js/login.js"></script>




</head>
<body>
<p class="tip"></p>
<div class="cont">
    <div class="form sign-in">
      <h2>User Login</h2>
      <form method="POST" action="user.php">
        
        <label id="email">
          <span>Adresse Email</span>
          <input type="email" name="Email"  placeholder="exemple@gmail.com" required pattern="(+@gmail.com)|(+@yahoo.com)" title="Entez votre adresse mail validé" /><br>
        </label>
        <label>
          <span>Mots de passe</span>
          <input type="password" name="password"  pattern=".{5,15}" required title="5 to 15 characters" placeholder="**********" />
        </label>
        <a href="forgot.html"><p class="forgot-pass">Mots de passe Oublié?</p></a>
        <button class="submit" name="bn">Se Connecter</button>
      </form>
    </div>
      

  <div class="sub-cont">
    <div class="img">
      <div class="img__text m--up">
        <h2>Vous êtes Nouveau et Vous êtes ineterresé?</h2>
        <h2>Inscrivez maintenant!</h2>
      </div>
      <div class="img__text m--in">
        <h3>Si vous avez déja un Compte, Connectez-vous!</h3>
      </div>
      <div class="img__btn">
        <span class="m--up">S'inscrire</span>
        <span class="m--in">Connexion</span>
      </div>
    </div>
    <div class="form sign-up">
      <!--<h2 id="regtext">Register</h2>-->

    <?php
   include("server.php"); 

  if(isset($_POST['btn'])){
     
        $query = "insert into student(Nom, Email, Password, Phone, Matiere)values('".$_POST['name']."', '".$_POST['email']."', '".$_POST['password_1']."', '".$_POST['phone']."' , '".$_POST['branche']."')";
        if($conn->query($query)==TRUE)
        {
          echo"Record Inserted Sucessfully";?>
        <?php
        }else
          {
          echo "Something Wrong" . $conn->error;
          }
 
      }
      ?>

      <form method="POST" enctype="multipart/form-data">
          <label>
          <span>Nom</span>
            <input type="text" name="name"  pattern=".{3,}" required title="min character is 3" placeholder="Rakoto" required><br>
        </label>     
        <label>
          <span>Adresse Email</span>
            <input type="email" name="email"  placeholder="exemple@gmail.com" required pattern="(+@gmail.com)|(+@yahoo.com)"title="Entrez votre Email valide "><br>
        </label>
        <label>
          <span>Mots de Passe</span>
          <input type="password" name="password_1"  pattern=".{5,15}" required title="5 to 15 characters" placeholder="**********" > <br>
        </label>
    
        <label>
          <span>Confirmer le Mots de passe</span>
          <input type="password" name="password_2"  pattern=".{5,15}" required title="5 to 15 characters" placeholder="**********" > <br>
        </label>

        <label>
          <span>Numéro télephone</span>
          <input type="tel"  name="phone" placeholder="+261000000" required><br><br>
        </label>

        <label>
          <span>Sélectionner Votre Branche</span>
          <select name="branche">
            <option value="lecturer">Matières Disponibles......</option>
            <option value="Developpement et Management International" >Développement et Management International</option>
            <option value="La Validation des Acquis et des Experiences">La Validation des Acquis et des Expèriences</option>
            <option value="Theologie Pratiques et Predictions Laic">Théologie Pratiques et Prédictions Laïc</option>
          </select>
        </label>



        <button class="submit" name="btn">S'inscrire</button>

        
      </form>
    </div>
  </div>
</div>

 <script type="text/javascript" src="moteur/js/script.js"></script>
 <script src="moteur/js/jquery.min.js"></script>

<script src="moteur/js/bootstrap.min.js"></script>
<script src="moteur/js/metisMenu.min.js"></script>
<script src="moteur/js/dataTables/jquery.dataTables.min.js"></script>
<script src="moteur/js/dataTables/dataTables.bootstrap.min.js"></script>
<script src="moteur/js/startmin.js"></script>
<script src="moteur/js/jquery.min.js"></script>
<script src="moteur/js/bootstrap.min.js"></script>
<script src="moteur/js/metisMenu.min.js"></script>
<script src="moteur/js/startmin.js"></script>

<script type="text/javascript" src="moteur/js/moov.js"></script>

</body>
</html>