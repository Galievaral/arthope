<!--this is form for customer registration-->
<section id="One" class="wrapper style3"  style="
    margin-top: -2%;
">
				<div class="inner">
					<header class="align-center">
						<p>Необходимо зарегистроваться для просмотра и заказа картин</p>
						<h2>Регистрация</h2>
						
					</header>
				</div>
</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">


	
	<form action="" method="post" name="f1">
		<div class="form-group">
			<label for="first">Имя:</label>
			<input type="text" class="form-control" id="first" name="first" placeholder="Введите Имя" required>
		</div>
		<div class="form-group"> 
			<label for="last">Фамилия:</label>
			<input type="text" class="form-control" id="last" name="last" placeholder="Введите Фамилию" required>
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" name="mail" placeholder="Введите email" required>
		</div>
		<div class="form-group">
			<label for="pwd">Пароль:</label>
			<input type="password" class="form-control" id="pwd" name="pass" placeholder="Введите пароль" required>
		</div>
        <b/>
        <b/>
		
		<button type="submit" class="button special" name="sub" >Зарегистрироваться</button>
	</form>
</div>
					</div>
				</div>
			</section>
<!--End this is form for customer registration-->
<?php
if ( isset($_POST['sub'])){
	$fn=$_POST['first'];
	$ln=$_POST['last'];
	$mail=$_POST['mail'];
	$pass=$_POST['pass'];

	$sql = "INSERT INTO customer_info (cust_pwd, cust_email, cust_Fname, cust_Lname) VALUES ('$pass', '$mail', '$fn', '$ln')"; //this is query for registration
	if (mysqli_query($con, $sql)) 
		{
	$customerid=mysqli_insert_id($con);
    	$sql1= "select * from customer_info where cust_email='".$mail."' and cust_pwd='".$pass."'"; //This  is query for login.
	$result = mysqli_query($con, $sql1);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result))
{
$_SESSION["uid"]=$row["cust_id"];
$_SESSION["name"]=$row["cust_Fname"];
}
		echo "<script>window.location.assign('customer/')</script>";
} 
} 
	else {
    echo "<script>alert('Произошла ошибка. Пожалуйста, попробуйте еще раз.');
	window.location.assign('index.php?page=customer_register')</script>";
}	
}
mysqli_close($con);
	?>
