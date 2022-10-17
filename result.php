<?php
//include("check.php");
?>
<?php 
include("header1.php");
include("connect.php");
$sql ="select * from result ";
$result=$conn->query($sql);
 
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


<div   class="w3-main" style="margin-left:300px;margin-top:43px;"id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header"></h1>
                        </div>
                       
                    </div>
                  
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                 <b>  Resultats</b>
                                </div>
                                
                                <div class="panel-body">
                                   
                                    <br>
                                    <div class="table-responsive">
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
    <div class="col-sm-6">
        <div id="dataTables-example_filter" class="dataTables_filter">
            <thead>
                <tr>
                    <th>Numéro de série</th>
                    <th>Matière</th>
                    <th>Total des Question</th>
                   
                    <th>Questions répondu</th>
                    <th>Note Obtenu</th>
                    
                     <th>Date</th>
                   
                </tr>
            </thead>
            <tbody>
                                        <?php
                                            $count = 1;
                                            while ($row = mysqli_fetch_assoc($result)) {
                                            $id = $row['id'];
                                        ?>

                                        <!-- script -->
                                        <script type="text/javascript">
                                            $(document).ready(function(){
                                                    
                                                $('#e<?php echo $id; ?>').tooltip('show')
                                                $('#e<?php echo $id; ?>').tooltip('hide')
                                            });
                                        </script>
                                        <!-- end script -->
                                        <!-- script -->
                                        <script type="text/javascript">
                                            $(document).ready(function(){
                                                    
                                                $('#d<?php echo $id; ?>').tooltip('show')
                                                $('#d<?php echo $id; ?>').tooltip('hide')
                                            });
                                        </script>
                                        


<?php
foreach ($result as $row) {
     
    ?>
    <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $row['subject']; ?></td>
         <td>30</td>
        <td><?php echo $row['attend_que']; ?></td>
        <td><?php echo $row['obtained_marks']; ?></td>
        <td><?php echo $row['exam_date']; ?></td>
         <?php $count++; } ?>
        
        
        
<?php   
}
?>

                                   
                                        </tbody>
        </div>
    </div>
</table>
                                    </div>
                                    
                                    
                                </div>
                               
                            </div>
                           
                        </div>
                       
                    </div>
                   
                    
                            </div>
                            
                        </div>
                        
                    </div>
                  
                </div>
               
            </div>
          

        </div>

<script>
document.getElementsByClassName("tablink")[0].click();

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].classList.remove("w3-light-grey");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.classList.add("w3-light-grey");
}
</script>



        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
</html>
<?php
include("footer.php");
?>