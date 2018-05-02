<?php 
    include ("class.php");
?>

<?php 
    $obj = new Action();
    $id = $_POST['id'];

    $obj->delete($id);
   // header("location:view.php");
?>