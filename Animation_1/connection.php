<?php
$flame = $_GET['s'];
 $var1 = 'f' ;
 $var2 = 'l' ;
 $var3 = 'a' ;
 $var4 = 'm' ;
 $var5 = 'e' ;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>firework</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="constyle.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

  </head>
  <body>
          <div class="fireworks">
            <?php
            if ($flame == $var1) {
                  ?><p style="color:blue;"><?php echo "friends"; ?></p><?php
            }else if($flame == $var2) {
                  ?><p style="color:#FF0080; "><?php echo "lovers"; ?></p><?php
            }else if($flame == $var3) {
                  ?><p style="color:#DBA901;"><?php echo "affection"; ?></p><?php
            }else if($flame == $var4) {
                  ?><p style="color:green; "><?php echo "marriage"; ?></p><?php
            }else if($flame == $var5) {
                  ?><p style="color:red;"><?php echo "enemies"; ?></p><?php
            }else{
                  ?><p style="color:violet;"><?php echo "siblings"; ?></p><?php
                }

            ?>
          </div>
          <div class="container">
             <a href="#" class="explode">expload</a>
             <img src="https://images.unsplash.com/photo-1473081556163-2a17de81fc97?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80" class="image" alt="">
          </div>



         <script src="jquery.fireworks.js" type="text/javascript"></script>
         <script  type="text/javascript">
           $('.fireworks').fireworks();
         </script>

         <script src="jquery.imgexplode.js"></script>
         <script type="text/javascript">
           $(document).ready(function(){
             $(".explode").click(function(){
               $(".image").explode({"minWidth":3,"maxWidth":12,"radius":300,"minRadius":15,"release":false,"fadeTime":59,"recycle":false,"recycleDelay":75,"explodeTime":213,"round":false,"minAngle":3650,"maxAngle":360,"gravity":3,"groundDistance":235});
                $(".explode").explode({"minWidth":3,"maxWidth":12,"radius":300,"minRadius":15,"release":false,"fadeTime":59,"recycle":false,"recycleDelay":75,"explodeTime":213,"round":false,"minAngle":3650,"maxAngle":360,"gravity":3,"groundDistance":235});
             });

           });

         </script>
  </body>
</html>
