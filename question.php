<?php
include("check.php");
?>
<?php
//session_start();
include("connexion.php");
include("header.php");

if(isset($_POST['btn']))
{
   // $code_matiere=$_POST['code_matiere'];
    $question=$_POST['k'];
    $nbquestion=$_POST['nbquestion'];
   
    $answer = $_POST['correct'];
    $id= '';
    $option = array();
    $option[1]=$_POST['a'];
    $option[2]=$_POST['b'];
    $option[3]=$_POST['c'];
    $option[4]=$_POST['d'];

    

    $sql="insert into questions(question_id,question)values('$nbquestion','$question')";


$resu=mysqli_query($conn,$sql);


  if($resu){
    foreach($option as $choix => $value){
        if($value != ""){
            if ($answer == $choix) {
                $correct = 1;
            }
            else{
                $correct = 0;
            }
       
        
        $sql2="insert into options(a,b,c)
        values('$nbquestion','$correct','$value')";
        $resu2=mysqli_query($conn,$sql2);
        if($resu2){
            continue;
        }
        else{
            die("erreur");
        }
    }
    }

    
    $message ="questions ajouteés!";
}
    
    
    
  
 
 
}
$quest ="select * from questions";
$bnquest= mysqli_query($conn,$quest);
$total = mysqli_num_rows($bnquest);
$next = $total + 1;
?>

    
    	      
    <form  method="POST" action="question.php" enctype="multipart/form-data">

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
               <h3>Création d'une question</h3> 
            </div>
            
        
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                              
                                <form role="form">


                                <div class="form-group">
    <label >Nombres de questions </label>
        
            <input type="number" name="nbquestion" class="form-control" value="" id="nbquestion"  required>
        </div>
    
    <div class="form-group">

                                     <div class="form-group">
    <label >Entrer la Question : </label>
       
            <input type ="text" name="k" id="questionInput" placeholder="Question" required autofocus>
        </div>
    
    <div class="form-group">
    <label >Option A </label>
        
            <input type="text" name="a" class="form-control" id="a" placeholder="Option A" required>
        </div>
    
    <div class="form-group">
    <label >Option B </label>
        
            <input type="text" name="b" class="form-control" id="b" placeholder="Option B" required>
        </div>
    

    <div class="form-group">
        <label >Option C </label>
        
            <input type="text" name="c" class="form-control" id="c" placeholder="Option C" required>
        
    </div>

    <div class="form-group">
        <label>Option D </label>
        
            <input type="text" name="d" class="form-control" id="d" placeholder="Option D" required>
      </div>
   

    <div class="form-group  ">
        <label >Réponse </label>
        
        <input type="number" name="correct" id="correct" class="form-control" required>    
            

        </div>
    </div>

    </div>
   
        <button type="submit" name="btn" class="btn btn-default">Générer</button>
        <button type="reset" class="btn btn-default">Réinitialiser</button>
    </div>
</form>



</div>
</div>
</div>
</form>         
                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
            <!-- /#page-wrapper -->
            <?php
            include("footer.php");
            ?>
                                 
  
