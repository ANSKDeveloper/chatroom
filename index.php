<?php

    $con =  mysqli_connect("localhost","root","","chatroom");

    $a =  "select * from message";

    $res =   mysqli_query($con,$a);






?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatroom</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
        
        .Father {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .Son {
            background-color: purple;
            padding: 30px;
            border-radius: 5px;
            color: white;
            width: 400px;
        }
        
        input,
        button {
            font-size: 20px;
            padding: 5px 10px;
            border: none;
            outline: none;
            cursor: pointer;
            border-radius: 3px;
        }
        
        button {
            background-color: rgb(7, 145, 133);
            color: white;
        }
        
        .Message {
            padding: 20px;
            height: 350px;
            background-color: rgb(39, 39, 39);
            border-radius: 5px;
            margin: 20px 0px;
            overflow: scroll;
        }
        
        .Message::-webkit-scrollbar {
            display: none;
        }
        
        h1 {
            text-align: center;
        }
        
        h3 {
            padding: 10px 20px;
            margin: 5px 0px;
            border-top-left-radius: 10px;
            border-bottom-right-radius: 10px;
            background-color: rgb(15, 148, 48);
        }
    </style>
</head>

<body>
    <div class="Father">
        <div class="Son">
            <h1>Chatroom</h1>
            <div class="Message">
                 <!----Display Data -->
                 <?php
                        while($c =  mysqli_fetch_array($res)){
                 ?>
                
                <h3>  <?php  echo $c[1];       ?>            </h3>

                <?php
                         }
                ?>

            </div>
            <div class="Send">

                <form action="send.php" method="post">
                    <input type="text" name="mera_message" placeholder="type your message">
                    <button type="submit" name="Send">Send</button>
                </form>

            </div>
        </div>
    </div>

</body>

</html>