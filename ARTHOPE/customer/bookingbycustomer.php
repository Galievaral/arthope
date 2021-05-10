<?php include("header/header.php"); ?>
<?php
if($_SESSION["uid"] == ""  ||  $_SESSION["uid"]==NULL)
{
header('Location:../customer/');
}
else{
	$cid = $_SESSION["uid"];
	$cn=$_SESSION["name"];
}
?>
<?php
$aid=$_GET['id'];
$run_art=mysqli_query($con,"select * from art_info where art_id=$aid");
$art_result=mysqli_fetch_array($run_art);
$_SESSION['aart'] = $aid;
?>
<section>
	<!--это форма для оформления заказа-->
<div class="back-img back-img1">
<div class="container divform">
	<h2>Оформление заказа</h2>
	<form action="" method="post" name="f1">
		<div class="form-group">
			<label for="a3"> Ваше имя:</label>
			<input type="text" class="form-control" id="a3" name="cname" readonly required value="<?php echo $cn;?>">
		</div>
		<div class="form-group">
			<label for="a4"> Название картины:</label>
			<input type="text" class="form-control" id="a4" name="aname" readonly  value="<?php echo $art_result[1];?>">
		</div>
		<div class="form-group">
			<label for="a6">Адрес доставки:</label>
			<input type="text" class="form-control" id="a6" name="da" placeholder="Введите адрес доставки" required>
		</div>
		<div class="form-group">
			<label for="a7">Количество:</label>
			<input type="number" class="form-control" id="a7" name="quan" placeholder="Введите количество" required>
		</div>
		<div class="form-group">
			<label for="a8">Цена:</label>
			<input type="number" class="form-control" id="a8" name="price" readonly value="<?php echo $art_result[3];?>">
		</div>
		<button type="submit" class="btn btn-primary" name="sub">Готово</button>
	</form>
</div></div><?php include("../footer/footer.php"); ?> 
</section>


<!--конец формы для оформления заказа-->
<?php
if ( isset( $_POST[ 'sub' ] ) ){
	$a13=$_POST['cname'];
	$a14=$_POST['aname'];
	$a16=$_POST['da'];
	$a17=$_POST['quan'];
	$a18=($a17 * $_POST['price']);
	$sql = "INSERT INTO booking_info ( Name	, bart_name, delivery_address, bart_quantity, bart_price) VALUES ( '$a13', '$a14','$a16', '$a17', '$a18')"; //this is query for booking 
	if (mysqli_query($con, $sql)) {
		$current_baid = mysqli_insert_id($con);
		$_SESSION['baid'] =$current_baid;

   echo "<script>alert('Ваш заказ успешно оформлен!');
	window.location.assign('welcome.php')
	</script>";
		
} else {
    echo "Произошла ошибка " . $sql . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
	?>
			

		
	
