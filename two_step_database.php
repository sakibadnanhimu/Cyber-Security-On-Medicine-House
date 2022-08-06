<?php
         
          //for database connection
          $user = 'root';
          $pass ="";
          $database = "project";
          $host = 'localhost';
          $con = mysqli_connect($host,$user,$pass,$database);

          if (isset($_POST['submit'])) {
          $c = $_POST['c'];
      }
          
          $query = "SELECT * FROM code WHERE code = '$c' ";
          	  $run =mysqli_query($con,$query);
          	  //now check is it run or not
          	  if ($run) {
          	  	
          	  	 //now check how many rows
          	  	if (mysqli_num_rows($run)>0) {

          	  			echo "

          				    <script>

                                  
                                  window.location.href='admin_page.php';

          				    </script>

          				";
          			
          	  	}
          	  	else
          	  	{
          	  			echo "

          				    <script>

                                  alert ('oops! please try again:');
                                  window.location.href='admin_panel.php';

          				    </script>

          				";	
          	  	}
          	  }	



?>          