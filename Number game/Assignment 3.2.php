<!DOCTYPE html>
<html>
     <style>
          html {background-image: url('Assignment 3.2 bgpic.jpg');
                    background-attachment: fixed;
                    background-size: cover;
                    text-align: center}
          h1 {color: aqua;
               text-align: center;
               font-style: italic;
               font-size: 45px;}
          p {color: aqua;
               text-align: center;}
          button {height: 50px;
                    width: 150px;
                    font-size: 20px;
                    font-style: italic;
                    color: aqua;
                    background-color: black;}
          button:hover {background-color: fuchsia;
                         color: navy;}
     </style>

     <head>
          <title>Number Game by AAK</title>
          <h1>Welcome to my game!!</h1>
     </head>
     
     <!--Send to play game-->
     <body>
          <form method="post" target="_blank" action="Page1.php">
          <button type="submit">Start game</button>
          </form>
     </body>

     <foot>
          <p>Made by AAK studios</p>
     </foot>
     
     <!--
     <?php
          $i = 1;
          //while loops
          echo "Multiplication for 9 <br>";
          
          while ($i <= 10) {
               echo "$i) 9 x $i = " . (9 * $i) . "<br>";
               $i++;}
          ?>
     -->
</html>