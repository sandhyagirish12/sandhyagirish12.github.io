<?php  
$con=mysqli_connect("localhost","root","","Bank");
if (isset($_POST["submit"])){
  $jobtitle= $_POST['jobtitle'];
  $query="INSERT INTO date (Job_title) VALUES
  ('$jobtitle' )";
 $query_run=mysqli_query($con,$query);
 }
?>
<?php
require_once('dbcon.php');
$sql="select * from date  " ;
$result=mysqli_query($con,$sql);
if(isset($_GET['page']))
    {
      $page=$_GET['page']  ;
    }
    else{
        $page=1;
    }

    
    $num_per_page=10;
    $start_from=($page-1)*10;
    $previous_page=$page-1;
    $next_page=$page+1;
    $sql="select * from date order by job_id desc limit $start_from,$num_per_page" ;
     $result=mysqli_query($con,$sql);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pts.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div>
<div class="menu_bar">
   <h1 class="logo">            JOB <span>  TITLE</span></h1>
   <ul>
    <li><a href="home.php">Home </a></li>
    <li><a href="login3.php">Logout</a></li></ul></div>
  </br></br>
  <div class="mx-auto" style="width: 80%;">
  <form action="" method="POST">
    <div class="row g-3">
    
  <div class="col-sm-3">
  <label for="formGroupExampleInput"><h5>Create job title   :</h5></label>
  </div>
  <div class="col-sm-7">
  <input type="text " name="jobtitle" class="form-control" id="formGroupExampleInput" placeholder="Enter Job Title">
  </div>
  <div class="col-sm-2">
    <button type="submit"  name="submit" class="btn btn-primary">
  Create
</button>
  </div>
</div></form></div></div></div></br></br>

    <div class="container">
<?php
$pr_sql="select * from date  ";
$pr_result=mysqli_query($con,$pr_sql);
$total_records=mysqli_num_rows($pr_result);
$total_pages=ceil($total_records/$num_per_page);

?>
<div class ="dropdown" role="menu" style="overflow-y:scroll;height:370px; width:108%;">
<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
                
                <th>Date of creation</th>
                   <th>job title</th>
                   <th>Job description</th>
                   <th>Salary</th>
                   <th>Experience</th></tr>
                   <?php
                      
while($row=mysqli_fetch_assoc($result))
{
  $pr_sql="select * from date order by job_id desc limit 10";
?>
    <tr>

    <td> <?php  echo $row['Date'] ?> </td>
<td><?php echo $row['Job_title']?> </td>
<td><?php echo $row['job_desc']?>  </td>
<td><?php echo $row['salary']?> </td>
<td><?php  echo $row['expe']?> </td>

</tr>
<?php
}           
?></div> </table> </div> </div>
</div> </div></br>
<nav aria-label="pagination ">

  <ul class="pagination justify-content-center">
    <li class="page-item active">
      <a class="page-link <?= ($page<=1)? 'disabled': '';?>"  <?= ($page>1)? 'href=?page='.$previous_page : '';?>>Previous</a>
    </li>
    <?php 
    for ($counter =1; $counter <= $total_pages;$counter++) {
        ?>
        <li class="page-item">
        <a class="page-link" href="?page=<?= $counter; ?>"><?=$counter; ?></a></li>
        <?php
    }


    ?>

    <li class="page-item active"><a class="page-link <?= ($page>=$total_pages)? 'disabled': '';?>" <?= ($page<$total_pages)?'href=?page='.$next_page : '';?>>Next</a></li>
    
</li>
  </ul>
   
</nav>
<div class="mx-auto" style="width: 80%;">
<strong>page <?=$page; ?> of <?=$total_pages; ?></strong>  </div></div>

    
</body>

</html>