<!DOCTYPE html>
<html>

  <body>

    <h1>Arg Test in PHP</h1>

    Arg1: <?php echo $_POST["arg1"]; ?><br>
    Arg2: <?php echo $_POST["arg2"]; ?>

    <br>
    
    <?php
      system ( "/Users/hzou/play/ProjectInput/projectinput2 " . $_POST["arg1"] . " " . $_POST["arg2"]); 
    ?>
    
  </body>
</html>
