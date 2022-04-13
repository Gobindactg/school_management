<?php
@include 'Frontend/pages/Student/db.inc.php'
?>
<script src="js/jquery.js"></script>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/toutput.css">
<script>
    function activate(element){
     //   alert('element');
    }
    function updateValue(element,column,id){
      //  console.log(element.inlierText);
      var value = element.innerText
      //console.log(value+column+id)
      $.ajax({
          url:'backend.php',
          type:'post',
          data:{
              value: value,
              column: column,
              id: id
          },
          success: function(php_result){
              console.log(php_result);
          }
      })
    }
</script>
<div class="container">
    <h2 style="text-align:center; padding-top:25px">Information Of Staff</h2>
<table class="table">
    
    <thead class="thead-dark">
        <tr class="show">
            <th>Roll</th>
            <th>class</th>
       
            
          
        </tr>
    </thead>


<?php

$connection = mysqli_connect('localhost','root','','school_management');

if(!$connection){
    die("Not connected". mysqli_error()); 
}

$query = "SELECT * FROM student_marks";
$result = mysqli_query($connection,$query);
$count = mysqli_num_rows($result);
while ($row = mysqli_fetch_assoc($result)){
            
       $roll = $row['st_roll'];
       $class = $row['name'];
     
        $id = $row['id'];

      
?>
  
<tbody class="thead-light">
    <tr class="toutput">
    <td><div contenteditable="true" onBlur="updateValue(this,'st_roll','<?php echo $id?>')" onClick="activate(this)"><?php echo $roll;?></div></td>
    <td><div contenteditable="true" onBlur="updateValue(this,'class','<?php echo $id?>')" onClick="activate(this)"><?php echo $class;?></div></td>
   
    
    </tr>
</tbody>
<?php

}
?>
</table>

</div>
