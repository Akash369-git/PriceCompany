<?php
  $server = "localhost";
  $user = "root";
  $password = "";
  $db = "priceloser";

  $con = mysqli_connect($server, $user, $password, $db);

  if($con){
    ?>
      <script>
        alert("Connection Successful");
      </script>
      <?php
  }else{
    ?>
    <script>
      alert("Connection not Successful");
    </script>
    <?php
  }
?>