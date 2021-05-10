    <section id="One" class="wrapper style3" style="margin-top: -2%;">
                    <div class="inner">
                        <header class="align-center">
                             <p>Нужна помощь? Можете связаться с нашей службой поддержки.</p>
                            <h2>Свяжитесь с нами</h2>
                        </header>
                    </div>
                </section>

    <section id="two" class="wrapper style2">
                    <div class="inner">
                        <div class="box">
                            <div class="content">
    <!-- Form -->
                                    <h2>Форма для связи</h2>

                                    <form method="post" action="#" >
                                        <div class="row uniform">
                                            <div class="6u 12u$(xsmall)">
                                                <input type="text" name="contact-name" id="contact-name" value="" placeholder="Введите ваше Имя" required />
                                            </div>
                                            <div class="6u$ 12u$(xsmall)">
                                                <input type="email" name="contact-email" id="contact-email" value="" placeholder="Введите ваш Email" required />
                                            </div>
                                            <div class="12u$">
                                                <textarea name="contact-message" id="contact-message" placeholder="Введите ваше сообщение" rows="6"></textarea>
                                            </div>
                                            <!-- Break -->
                                            <div class="12u$">
                                                <ul class="actions">
                                                    <li><input type="submit" name="SubmitButton" value="Отправить" /></li>
                                                    <li><input type="reset" value="Очистить" class="alt" /></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </form>


                    <div class="inner">
                        <div class="box">

                <?php    
				if(isset($_POST['SubmitButton'])){ //check if form was submitted
				$frm=$_POST['contact-email'];
				$email="ralinagalieva@gmail.com"; 
                $mes="Сообщене от онлайн-галереи картин ArtHope \n 
                Name: ".$_POST['contact-name']."\n
                Message: ".$_POST['contact-message'];

				$ml= mail($email,$mes, "From:".$frm);
				if($ml){
				echo "<script type='text/javascript'>alert('Спасибо за обратную связь!\\n Мы скоро ответим на ваше сообщение'); window.location.assign('index.php?page=contactus');</script>";}
				else{
				echo "<script type='text/javascript'>alert('Пожалуйста, попробуйте еще раз.');window.location.assign('index.php?page=contactus');</script>";}

				}    
				?>			
	

    <!-- Form -->
                                    <h2 >Контактные данные</h2>                           


    <h3>Онлайн-галереи картин ARTHOPE </h3>
    <br>ArtHope - художественная надежда<br>
    <br>
                  <br>
    Контактный телефон +7 953 400 13 00<br>
    Электронная почта- arthopegallery@gmail.com<br>
    Почта для отправки ваших работ - yourarthope@gmail.com<br>
    <br>
         
                        </div>
                    </div>


                                </div>
                        </div>
                    </div>
                </section>