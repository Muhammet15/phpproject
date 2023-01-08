</br></br></br></br>  
  
<?php

require 'baglan.php';

?>

<div class="jumbotron text-center" style="margin-bottom:0">
  <footer>
 
 <?php 
  $query = $db->query("SELECT * FROM footer", PDO::FETCH_ASSOC);
	if ( $query->rowCount() ){
     foreach( $query as $row ){
          ?>

    <p><?= $row['footer_ad']?></p>
       <h5> <p align="right"><?= $row['footer_link']?> </p></h5>
      
    </tr>
 <?php   
 }
	}?>
  
</footer>
</div>

</body>
</html>
