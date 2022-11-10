<footer id="footer" class="footer color-bg">
	  <div class="links-social inner-top-sm">
        <div class="container">
            <div class="row">
            	<div class="col-xs-12 col-sm-6 col-md-4">
            		 <!-- ============================================================= CONTACT INFO ============================================================= -->
<div class="contact-info">
    <div class="footer-logo">
        <div class="logo">
            <a href="index.php">
                
<h3>Shopping Portal</h3>
            </a>
        </div><!-- /.logo -->
    
    </div><!-- /.footer-logo -->

     <div class="module-body m-t-20">
        <p class="about-us"> Thank You for visiting us.</p>
    
        <div class="social-icons">
            
        <a href="https://www.facebook.com/" ><i class="icon fa fa-facebook"></i></a>
        <a href="https://twitter.com/i/flow/login"><i class="icon fa fa-twitter"></i></a>
        <a href="https://www.linkedin.com/login"><i class="icon fa fa-linkedin"></i></a>
        <a href="https://www.instagram.com/"><i class="icon fa fa-instagram"></i></a>
        <a href="https://in.pinterest.com/login/"><i class="icon fa fa-pinterest"></i></a>

        </div><!-- /.social-icons -->
    </div><!-- /.module-body -->
    <div class="row">
    <div class="feedback module-body m-t-20" >
        <h4 class="module-title">Feedback Form</h4>
    <form action="" method="POST">
        <label for="">Name :</label>
        <input type="text" placeholder="name" name="name" class="box">
        <br></br>
        <label for="">Email :</label>
        <input type="email" placeholder="email" name="email" class="box">
        <br></br>
        <label for="">number :</label>
        <input type="tel" placeholder="number" name="contact" class="box">
        <br></br>
        <label for="">feedback :</label>
        <br></br>
        <textarea name="message" placeholder="message" id="" cols="30" rows="10"></textarea>
        <br></br>
        <input type="submit" class="btn" name="submit" value="send message">

        <?php
                
                if(isset($_POST["submit"])){
                    $name = $_POST["name"];
                    $email = $_POST["email"];
                    $contact = $_POST["contact"];
                    $message = $_POST["message"];
                    
                    $message .= "\nContact No.:".$contact;
                    $message .= "\nName :".$name;
                    
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    $headers .= "From: ".$email." \r\n";
                                        
                    mail("patelkurvesh1999@gmail.com","Response from online shopping",$message);
                }
                
                ?>

    </form>
            </div>
</div>

</div><!-- /.contact-info -->
<!-- ============================================================= CONTACT INFO : END ============================================================= -->            	</div><!-- /.col -->

            	<div class="col-xs-12 col-sm-6 col-md-4">
            		 <!-- ============================================================= CONTACT TIMING============================================================= -->
<div class="contact-timing">
	<div class="module-heading">
		<h4 class="module-title">opening time</h4>
	</div><!-- /.module-heading -->

	<div class="module-body outer-top-xs">
		<div class="table-responsive">
			<table class="table">
				<tbody>
					<tr><td>Monday-Friday:</td><td class="pull-right">08.00 To 18.00</td></tr>
					<tr><td>Saturday:</td><td class="pull-right">09.00 To 20.00</td></tr>
					<tr><td>Sunday:</td><td class="pull-right">10.00 To 20.00</td></tr>
				</tbody>
			</table>
		</div><!-- /.table-responsive -->
	</div><!-- /.module-body -->
  
</div><!-- /.contact-timing -->
<!-- ============================================================= CONTACT TIMING : END ============================================================= -->            	
</div><!-- /.col -->






            	<div class="col-xs-12 col-sm-6 col-md-4">
            		 <!-- ============================================================= INFORMATION============================================================= -->
<div class="contact-information">
	<div class="module-heading">
		<h4 class="module-title">information</h4>
	</div><!-- /.module-heading -->

	<div class="module-body outer-top-xs">
        <ul class="toggle-footer" style="">
            <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>Ganpat Vidyanagar Mehsana-Gozaria, Highway, Kherva, Gujarat 384012</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-mobile fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <p>(+91) 9106716553<br>(+91) 7359373871</p>
                </div>
            </li>

              <li class="media">
                <div class="pull-left">
                     <span class="icon fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <span><a href="https://www.google.com/intl/en-GB/gmail/about/">online_shopping1234@gmail.com</a></span>
                </div>
            </li>
              
            </ul>
    </div><!-- /.module-body -->
    
</div><!-- /.contact-timing -->
<!-- ============================================================= INFORMATION : END ============================================================= -->            	


</div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.links-social -->

    <!-------------------------------------Feed back form--------------------------------------------------------->

