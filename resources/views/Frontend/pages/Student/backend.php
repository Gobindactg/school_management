
ajax succeffull
<?php
  $value = $_POST['value'];
  $column = $_POST['column'];
  $id = $_POST['id'];
sleep(1);

include 'db.inc.php';

  $sql ="UPDATE student_marks SET $column = :value WHERE id = :id LIMIT 1";
  $query = $db->prepare($sql);
  $query->bindParam('value',$value);
  $query->bindParam('id',$id);
  if($query->execute()){
      echo "Update Successfull $column to $value where encrypted id = $id";
  }else{
      echo "Failure";
  }


?>

