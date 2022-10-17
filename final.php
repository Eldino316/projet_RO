
<?php
session_start();
include("connexion.php");
include("header1.php");
$quest ="select * from questions";
$bnquest= mysqli_query($conn,$quest);
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
                        <h3 style="margin-top: 5%;">Résultats</h3>
                            <h2>Votre note est <?php echo $_SESSION['note']; ?> / <?php echo $total; ?>  </h2>
                            <?php unset ($_SESSION['note']); ?>
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
                                 
  
