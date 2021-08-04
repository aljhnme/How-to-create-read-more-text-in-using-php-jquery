 <?php
 include'mysqli.php';

 $sqli="SELECT * FROM `text_php`";
 $query=mysqli_query($mysqli,$sqli);
 while ($row=mysqli_fetch_assoc($query)) 
 {
  $view_more="";
 if (strlen($row['text']) >= 150) 
  {
   $view_more="\r\n<strong class='more' id='".$row['id']."' style='cursor:pointer;'>read more</strong>"; 
  }
  if(isset($_POST['plus__'])) 
  {
    if ($row['id'] == $_POST['id']) 
    {
     $plus__=$_POST['plus__'];

     if (strlen($row['text']) <= $_POST['plus__']) 
      {
       $view_more="";
      }
     
    }else{
      $plus__=150;
    }
   }else{
    $plus__=150;
   }
   echo'<p class="lh-1">'.substr_replace($row['text'],$view_more,$plus__).'</p>'; 
 } 
 ?>
