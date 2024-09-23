<?php


  $con = mysqli_connect("localhost","root","","chatroom");


   if(isset($_POST["Send"])){

       $a =  $_POST["mera_message"];    

       $b =  "insert into message(msg) values('$a')";

       mysqli_query($con,$b);

       header("location:index.php");

   }

 

?>