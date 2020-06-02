<?php
// Tracking (not avalible at the moment.)

//$myfile = fopen("data.txt", "w") or die("Unable to open file!");
//$txt = "Somebody viewed the ad!\n";
//fwrite($myfile, $txt);
//$txt = $_SERVER[REQUEST_TIME];
//fwrite($myfile, $txt);
//$txt = $_SERVER[HTTP_REFERER];
//fwrite($myfile, $txt);
//fclose($myfile);


// All the possible terms:

$town = array("New York", "Boston", "Toronto", "Houston", "Chicago", "Los Angeles", "Halifax", "London");
$product = array("new app", "new diet", "simple trick", "easy way to loose weight", "crazy trick", "simple diet", "new website", "new law", "new way to save money", "leaked video", "leaked method to loose weight", "leaked hack", "fun app", "addicting app", "addicting game", "brilliant trick", "easy life hack", "clever app", "clever website", "clever trick", "leaked photos", "leaked governent files", "new loan app");
$doctor = array("doctors", "scientists", "everyone", "experts", "home owners", "people over 65", "people with 0 speeding tickets", "your friends", "people who make over 30k a year", "people who served in the military", "historians");
$emotion = array("blown away", "in shock", "amazed", "impressed", "excited", "thrilled");


// Varibles that will form the clickbait ad

$a = $town[array_rand($town)];
$b = $product[array_rand($product)];
$c = $doctor[array_rand($doctor)];
$d = $emotion[array_rand($emotion)];

// The final product, all packaged up into one variable, $ad

$ad = $a . ": This " . $b . " has " . $c . " " . $d . ".";

// After this, all that remains is HTML and the $ad varibles is used.

?>
<!DOCTYPE html>
<!-- 

How to use this ad on your website
 
Use this code:
<iframe src="https://riverside.rocks/tests/clickbait" style="border: 1px solid black;" width="25%" height="12%">Loading...</iframe>

Change the styles to what suits you and your website.

-->
<html>
  <head>
    <link href="/styles/clickbait.css" rel="stylesheet">
    <script src="/src/min/show.min.js"></script><!-- See /src/show.js for the non-min version -->
    <script src="https://kit.fontawesome.com/281a5c53f1.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <div class="background">
    <table>
      <tr>
      <th>
        <div id="button">
            <button onclick="showTerm()" id="button"><i class="fas fa-window-close"></i></button>
        </div>
        </th>
        <th>
          <div id="report">
            <button onclick="report()" id="button"><i class="far fa-flag"></i></button>
        </div>
        </th>
        <th>
          <div id="term">
      <?php echo $ad; ?>
          </div>
        </th>
      </tr>
    </table>    
    </div>
  </body>
</html>
