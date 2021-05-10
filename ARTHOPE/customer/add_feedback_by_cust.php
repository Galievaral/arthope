<?php include("header/header.php"); ?>
<?php
$cid=$_GET['id'];
$run_cust=mysqli_query($con,"select * from customer_info where cust_id=$cid");
$cust_result=mysqli_fetch_array($run_cust);
?>
<section>
<div class="back-img back-img1 img-custom">
<div class="container divform">
	<h2 style="
    margin-top: 10px;
">Оставить отзыв</h2>
	<form action="" method="post" name="f1">
		<div class="form-group">
			<label for="email">Ваш email:</label>
			<input type="email" class="form-control" id="email" name="mail" placeholder="Введите Email" readonly value="<?php echo $cust_result[2];?>">
		</div>
		<div class="form-group">
			<label for="st"> Ваш комментарий:</label>
			<input type="text" class="form-control" id="st" name="comment" placeholder="Введите ваш комментарий" required>
		</div>
		
		<button type="submit" class="btn btn-primary" name="sub">Отправить</button>
	</form>
</div>
</div>
</section>
<!--Конец формы для отзыва-->
<?php
if ( isset( $_POST[ 'sub' ] ) ){
	$a12=$_POST['mail'];
	$a13=$_POST['comment'];
	$sql = "INSERT INTO feedback_info ( email_id, Feed_Comment) VALUES ('$a12', '$a13')"; // this is query for adding feedback by customer.
	if (mysqli_query($con, $sql)) {
    echo "<script>alert('Cпасибо за отзыв');
	window.location.assign('../customer/')
	</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
	?>
	<?php include("../footer/footer.php"); ?> 