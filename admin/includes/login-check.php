<?php 
session_start();
include 'db.php';
$msg='';
if (isset($_POST['login'])) {
	$email=$_POST['email'];
	$password=$_POST['password'];
	$q="SELECT * FROM admin WHERE email='$email'  AND password='$password' ";
	$sql=mysqli_query($conn,$q);
	if (mysqli_num_rows($sql)) {
		$_SESSION['admin']="Kivu";
		header("location: index.php");

	}else{
		?>
		<script>
			swal('Oops!', 'Incorrent username or password!', 'error');
		</script>
	<?php 
		}
	} 
	?>

