<html>
<head><title>array function</title></head>
<body>

<?php
    $numbers = array(15,23,43,34,12,17);
 ?>
    Maximum value:<?php echo max( $numbers);?><br>
    Minimum value:<?php echo min( $numbers);?><br>
    count:<?php echo count( $numbers);?><br>
    sort:<pre><?php sort( $numbers); print_r($numbers)?></pre><br>
    reverse sort:<pre><?php rsort( $numbers); print_r($numbers)?></pre><br>
    Implode:
    <?php
       $string=implode(" | ",$numbers);
       echo $string;
    ?>
    <br>  
    Explode:
    <pre>
    <?php
       $newarray=explode(" | ",$string);
      print_r($newarray);
    ?>
    </pre>
    <br> 
    search:<?php echo in_array(15,$numbers);?>  
</body>
</html>