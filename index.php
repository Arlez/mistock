<?php
if(!$_SESSION['nombre']){
    header('Location: login.php');
}
?>

<?php include 'includes/templates/header.php' ?> 



<?php include 'includes/templates/footer.php' ?> 