
<?php


include("connexion.php");
session_start();
$nombre = $_GET['n'];
include("header1.php");
$quest ="select * from questions where question_id = $nombre";
$result= mysqli_query($conn,$quest);

$question = mysqli_fetch_assoc($result);

$req= "select * from options where a = $nombre";
$options = mysqli_query($conn,$req);



$questions ="select * from questions";
$bnquest= mysqli_query($conn,$questions);
$total = mysqli_num_rows($bnquest);

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">  
        
<div class="w3-main" style="margin-left:20px;margin-top:20px;">
<div class="container-fluid" style="margin-left:0px;">
<div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>Question <?php echo $nombre; ?> sur <?php echo $total; ?> </h2>
                           <h3 style="margin-top: 5%;">Commençer une Epreuve</h3> 
                        </div>
                        
                    
                    </div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                         
                   
                    <div class="col-md-6">
                    <div class="form-group">
                        
                        
                            
                        </div>
                    </div>

                     <div class="form-group">
                        <p><?php echo $question['question']; ?></p>
                     <form  method="POST" action="processus.php">
    <ul>
        
            <?php while($row= mysqli_fetch_assoc($options)){ ?>
                <li>
            
            <input type="radio" name="choix" value="<?php echo $row['optionsid'] ?>"><?php echo $row['c'] ?>
        </li>
        <?php } ?>
    </ul>

    <input type="hidden" name="nombre" value="<?php echo $nombre; ?>">
    <input type="submit" name="submit" value="submit">
</form>
                    </div>

                </div>
                                           </form>         
                                        </div>
                                       
                                    </div>
                                  
                                </div>
                               
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
    </div>
    </div>

</html>

<?php
            include("footer.php");
            ?>