<?php 
require_once("includes/config.php");
/*if(!empty($_POST["cid"])) {
	$cid= $_POST["cid"];
	
		$result =mysqli_query($bd, "SELECT studentRegno FROM 	courseenrolls WHERE course='$cid'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:red'> Already Applied for this course.</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} 
}*/
if(!empty($_POST["cid"])) {
	$cid= $_POST["cid"];
	
		$result =mysqli_query($bd, "SELECT * FROM 	courseenrolls WHERE course='$cid'");
		$count=mysqli_num_rows($result);
		$result1 =mysqli_query($bd, "SELECT noofSeats FROM course WHERE id='$cid'");
		$row=mysqli_fetch_array($result1);
		$noofseat=$row['noofSeats'];
if($count>=$noofseat)
{
echo "<span style='color:red'> Lớp học đã đầy, vui lòng chọn lớp học khác !!</span>";
 echo "<script>$('#submit').prop('disabled',true);</script>";
} 
}

?>