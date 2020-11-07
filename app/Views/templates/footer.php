
<script type="text/javascript" src="/assets/js/jquery-3.5.1.slim.min.js"></script>
<script type="text/javascript" src="/assets/bootstrap4/js/bootstrap.min.js"></script>

<?php

if(isset($footerScript)){
   // array_walk_recursive($footerScripts, function (&$v, $k) {
       
   // });
     echo '<script type="text/javascript">' . $footerScript . '</script>';
    
}
?>

</body>

</html>
