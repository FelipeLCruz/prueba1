<?php 
/*session_start();
session_destroy();
echo "<script>window.open ('LOGIN/LOGIN.PHP'.'_self'</script>)";*/
?>

<?php 
session_start();
if(isset($_SESSION['NOMBRE'])){
    header('Location:INDEX.PHP');
    session_destroy();
    exit;
}
?>
