<?php
//session_start();
include("server.php");

 
if(isset($_POST['Email'])&& isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Email = validate($_POST['Email']);
    $password = validate($_POST['password']);

    if(empty($Email)){
        hearder("Location: login.php?error= Votre Email est vide");
        exit();
    }

    else if(empty($password)){
        hearder("Location: login.php?error= Votre mots de pass est vide");
        exit();
    }else{
        $sql = "select * from student where Email ='$Email' and Password = '$password'";
        $res = mysqli_query($conn, $sql);

        if(mysqli_num_rows($res)===1){
            $row = mysqli_fetch_assoc($res);
            if($row['Email']===$Email && $row['Password']=== $password){
                $q = "select Matiere from student where Email ='$Email' and Password = '$password'";
                $re =  mysqli_query($conn, $q);
                if(mysqli_num_rows($re)===1){
                    $row = mysqli_fetch_assoc($re);
                    $matiere1 = "Developpement et Management International";
                    $matiere2 = "La Validation des Acquis et des Experiences";
                    $matiere3 = "Theologie Pratiques et Predictions Laic";
                    if($row['Matiere']== $matiere1){
                        header("Location: home.php");
                        exit();
                    }
                    else if($row['Matiere']== $matiere2){
                        header("Location: home1.php");
                        exit();
                    }
                    else {
                        header("Location: home2.php");
                        exit();
                    }
                     
                }
                
            }
            else{
                echo "votre mots de passe ou adresse mail n'est pas validé";
                header("Location: login.php");
                exit();
            }
        }else{
            echo "votre mots de passe ou adresse mail n'est pas validé";
            header("Location: login.php");
            exit();
        }
    }

}
else{
    echo "votre mots de passe ou adresse mail n'est pas validé";
    header("Location: login.php");
    exit();

}
?>
