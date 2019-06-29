<?php

require('autoload.php');

use src\Levenshtein;
use src\Hamming;

$post =$_POST;
$str1 = $_POST['str1'] ?? '';
$str2 = $_POST['str2'] ?? '';
$dis=-1;

if($_POST['method'] == 'levenshtein')
  $dis = levenshtein_dis($str1, $str2);  

function levenshtein_dis(string $str1, string $str2):int
{
    return Levenshtein::create($str1,$str2);
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit distance</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  </head>
  <body>
  <section class="hero is-primary is-fullheight">
          <div class="hero-body">
              <div class="container">
                <div class="columns is-5-tablet is-4-desktop is-3-widescreen">
                    <div class="column">
                        <div class="field has-text-centered">
                        <div class="card" style="padding:60px">
                           <h1 class='  title' style="color:#000">levenshtein distance : <?php echo $dis?></h1>
                           <a href="/index.php" class='button is-primary'>back</a>
                           </div>
                        </div>
                   </div>
                </div>
              </div>
           </div>
      </section>
  </body>
</html>