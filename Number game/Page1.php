<!doctype html>
<html>

<!--php variables have to be in the ?php tag
comment like js i believe
// <== that stuff-->

<!--Being redirected from Another page-->
<head>
     <title>Number Game by AAK</title>
</head>

<style>
     html {
     min-height: 100%;
     background-image: url('https://cutewallpaper.org/21/gif-background-hd/Blue-Techno-Abstract-Loopable-Background-1920x1080-.gif');
     background-repeat: no-repeat;
     background-size: cover;
     background-position: center;}
     
     html::before {
     content: "";
     position: absolute;
     top: 0;
     left: 0;
     width: 100%;
     height: 100%;
     background-color: rgba(0, 0, 0, 0.05);}
     
     .ruleText {
     color: aqua;
     font-size: 130%;
     text-align: center;}
     
     .endText {
     font-size: 120%;
     text-align: center;
     color: fuchsia;}
     
     table {
     margin: 0 auto;
     text-align: center;
     position: relative;
     float: center;
     padding: 5%;}
     
     .button {
     display: inline-block;
     padding: 0.5em 1em;
     background-color: #ddd;
     color: #333;
     font-size: 1.2em;
     text-align: center;
     text-decoration: none;
     border: none;
     border-radius: 8px;
     box-shadow:
          0 0 0 2px #fff,
          0 2px 2px rgba(0, 0, 0, 0.2),
          0 4px 4px rgba(0, 0, 0, 0.5),
          0 6px 6px rgba(0, 0, 0, 0.8),
          0 8px 8px rgba(0, 0, 0, 1);}
</style>

<body>
     <strong><div class="ruleText">
          <?php     // echo the rules;
               echo "The rules are quite simple. The game will pick a number between 1 to 10.<br>";
               echo "You will then have to choose your number between 1 to 10.<br>";
               echo "If you guessed the same number as the game, you win. If not, you lose.<br>";
               echo "Pretty easy right? Let the games begin!<br><br>";
          ?>
     </div></strong>
     
     <form method="post" action="Page1.php">
          <table cellspacing="50"> 
          <!--The buttons-->
               <tr> <td><button class="button" name="number" value="1">1</button></td> 
                    <td><button class="button" name="number" value="2">2</button></td> 
                    <td><button class="button" name="number" value="3">3</button></td> 
                    <td><button class="button" name="number" value="4">4</button></td> 
                    <td><button class="button" name="number" value="5">5</button></td> 
               </tr>
               <tr> <td><button class="button" name="number" value="6">6</button></td> 
                    <td><button class="button" name="number" value="7">7</button></td> 
                    <td><button class="button" name="number" value="8">8</button></td> 
                    <td><button class="button" name="number" value="9">9</button></td> 
                    <td><button class="button" name="number" value="10">10</button></td> 
               </tr>
          </table>
     </form>
     
     <div class="endText">
          <?php 
               if ($_SERVER['REQUEST_METHOD'] === 'POST') {
               $number = $_POST['number']; }
               $RNum = rand(1, 10);
               
               if ($number == $RNum) {
                    echo "Well done! You got the correct number being $RNum.";}
               else {
                    echo "You didn't quite make it :( <br>The number was $RNum." ;}
          ?>  
     </div>
     
     <div>
          <H2>Play again??</H2>
          <p>Would you like to play again??</p>
          
          <form target="_blank" action="Page1.php">
               <button type="submit">Yes</button>
          </form>
          <form target="_blank" action="Page2.php">
               <button type="submit">No</button>
          </form>
     </div>
</body>

</html>