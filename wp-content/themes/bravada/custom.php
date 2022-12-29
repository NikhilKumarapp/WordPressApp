<?php
// Template Name: custom
?>

<?php get_header();?>
<html>
<head>
	<style>
		*{
	padding: 0;
	margin: 0;
	font-family: sans-serif;
}
body{
	background:url(./bg.jpg)no-repeat;
	background-size: cover;
}
.Registeration-form{
	width:350px;
	top:50%;
	left:50%;
	transform: translate(-5%,-5%);
	position: absolute;
	color: #fff;

}
.Registeration-form h1{
	font-size:30px;
	text-align:  center;
	text-transform: uppercase;
	margin: 10px 0;
}
.Registeration-form p{
	font-size: 15px;
	margin: 3px ;
}
.Registeration-form input{
	font-size:15px;
	width: 100%;
	padding: 10px 5px;
	border: 0;
	outline: none;
	border-radius: 3px;
}
</style>
	</head>
	<body>
<div class="Registeration-form">
		<h1>Registeration form</h1>
		<form method="post">
			<p>Firstname</p>
				<input type="text" name="Firstname" pattern="^(?=.*[a-z]).{1,24}$" placeholder="Enter Firstname" required >
				<p>Lastname</p>
				<input type="text" name="Lastname" pattern="^(?=.*[a-z]).{1,24}$" placeholder="Enter Lastname"required>
				<p>Email</p>
				<input type="Email" name="Email" pattern="[^ @]*@[^ @]*"  placeholder="Enter Email"required>
				
				<p>Phone number</p>
				<input type="number" name="Phone" placeholder="Please enter Phone number">

				<p>Password</p>
				<input type="Password" name="Password"
                pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{6,24}$"placeholder="Enter password" required>
				
                <p>Date of birth</p>
				<input type="Date" name="DOB" placeholder="Enter DOB">
				<p>Bio</p>
				<input type="text" name="Bio" placeholder="Please enter bio"></br></br>
				
				<input type="submit" value="Register" name="insert">
				<input type="reset" value="Reset" >
                 
				
			
		</form>
	</div>
</body>
	</html>
		<?php
		if(isset($_POST['insert'])){
			$fn=$_POST['Firstname'];
			$ln=$_POST['Lastname'];
			$em=$_POST['Email'];
			$Ph=$_POST['Phone'];
			$Pa=$_POST['Password'];
			$D=$_POST['DOB'];
			$B=$_POST['Bio'];

			global $wpdb;

			$sql=$wpdb->insert("custom",array("Firstname"=>$fn,"Lastname"=>$ln,"Email"=>$em,"Phone"=>$Ph,"Password"=>$Pa,"DOB"=>$D,"Bio"=>$B));

			if($sql==true){
				echo "<script>alert('data inserted')</script>";
			}
			else {
				echo "<script>alert('data not inserted')</script>";
			}
		

		}


		?>

	</div>
	<?php get_sidebar(); ?>
	<?php get_footer(); ?>