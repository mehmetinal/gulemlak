
<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html>
<!--<![endif]-->
<head>



  <title>Ticaret Meclisi</title>

  <?php $this->load->view('layout/metas');?>


	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/');?>css/style.css" />
<style>

    html {
     min-height: 100%;
    }

    body{
      background-image: linear-gradient(150deg, #b10007 0%, #ffd106 100%); background-repeat: repeat-x;

    }

	 *{
		 font-family: "Poppins", sans-serif;


	 }

   .container{
    min-height: 100%;
  }

	h2,h4{
		font-weight: 700;
		color: white;
	}

	a{
		display: :block;
		color:white;
		margin: :20px;
	}
    a:hover{

		color: #221b1f;
	}
	.menu{

		float:right;
		height:60px;
	    text-align: center;
		vertical-align:middle;
		margin:10px;
	}
  .giris{



	  margin-top:30px; ;
	  text-align: end;
  }
	 .giris a{

		 color:white;
         font-size: :12px;
	 }

	 .uyeol a{

		 color: white;
         font-weight:700;
		 font-size:46px;
	 }
	 .row {

		 max-width: 900px;

		 margin: auto;
	 }

	 .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
		 background-color: #dc3545;
	 }
	 .custom-control-label{color:white}
	button[type="submit"]{

		font-weight:700;
	}
</style>

</head>
<body>

    <div class="main">

		<section class="testimonial py-5" id="testimonial">
			<div class="container">
        <div class="row">
            <div class="col-md-12">
              <div class="menu"><a href="#">iletişim</a></div>
  						<div class="menu"><a href="#">Destek</a></div>
  						<div class="menu"><a href="<?php echo base_url(); ?>">Anasayfa</a></div>
					  </div>
            <?php

        /** Beni Hatirla için gerekli olan cookie işlemleri... */

            $this->load->helper("cookie");

            $remember_me = get_cookie("remember_me");

            if($remember_me){
                $member = json_decode($remember_me);
            }

        ?>
          <div class="col-md-6 py-5 border">
						<h4 class="pb-4">Üye Giriş</h4>
						<form method="post">
							<div class="form-row">
                  <div class="form-group col-md-12">
                    <input id="email" name="email" placeholder="Eposta" class="form-control" type="email" value="<?php echo (isset($member)) ? $member->email : ''; ?>" required/>
							    </div>
  								<div class="form-group col-md-12">
  									<input type="password" name="password" class="form-control" id="sifre" placeholder="Şifre" value="<?php echo (isset($member)) ? $member->password : ''; ?>" required />
  								</div>
							</div>
							<div class="form-row">
								<div class="form-group">
									<div class="form-group">
										<div class="form-check">
											<!-- Default unchecked -->
											<div class="custom-control custom-checkbox">
												<input name="remember_me" type="checkbox" class="custom-control-input" id="defaultUnchecked" <?php echo (isset($member)) ? "checked" : ""; ?>>
												<label class="custom-control-label" for="defaultUnchecked">Beni Hatırla</label>

											</div>
										</div>
									</div>

								</div>
							</div>

							<div class="form-row">
								<button type="submit" class="btn btn-danger" style="width:100%; ">Üye Girişi</button>
							</div>
						</form>
						<div class="giris col-12">Şifrenizi unuttuysanız tıklayınız &nbsp;
              <!--<a href="#" data-toggle="modal" data-controls-modal="#passModal" data-backdrop="static" data-keyboard="false" data-target="#passModal" class="btn btn-bg-turquoise btn-sm pull-right">
                Şifremi Unuttum?
              </a>-->

              <a href="" target="_blank" class="btn btn-bg-turquoise btn-sm pull-right" onclick="alert('Şifre Yenile İşlemleri İçin Lütfen Site Yönetimini Arayınız.\n Cep: 0542 218 12 54')">
                Şifremi Unuttum?
              </a>
            </div>
            <div class="social-auth-links text-center">
              <p>- OR -</p>
              <a href="<?php echo $authURL; ?>" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Facebook ile devam et</a>
              <a href="<?php echo $loginURL; ?>" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i>Google+ ile devam et</a>
            </div>
					</div>
					<div class="col-md-6 py-5 text-white text-left" style=" ;" >

							<div class="card-body" >

								<h2 class="py-3">Ticaret Meclisi</h2>
								<p>
									<strong>Ticaretmeclisi.com</strong>'a ilan ver web dünyasında farklı ol.  Ayrıcalıklı dünyaya hoşgeldiniz.

								</p>

							</div>
						<hr style="border-color: white">
						<br>
						<div class="uyeol">
                           Platforma üye değilseniz tıklayınız<br>
                        <a href="<?php echo base_url('uyeol'); ?>">Hızlı Üye Ol</a>


					</div>

				</div>
			</div>
		</section>

    </div>

    <div class="modal fade" id="passModal" tabindex="-1" role="dialog" aria-labelledby="passModalLabel">
  		<div class="modal-dialog" role="document">
    		<div class="modal-content">
      			<div class="modal-header">
					<h4 class="modal-title">Şifremi Unuttum?</h4>
				</div>

				<div class="modal-body">
					<form method="post" id="resetPassword">
						<div class="form-group">
							<label>E-Posta Adresiniz</label>
							<input type="text" class="form-control" name="email" />
						</div>

					</form>

					<div id="resetText">
						<p class="passSingle">Şifrenizi yeniden belirlemek için, lütfen e-posta adresinize gönderilen linke tıklayınız...</p>
						<div class="passText"></div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-default btn-reset" data-dismiss="modal">Kapat</button>
					<button type="submit" class="btn btn-bg-turquoise" id="passwordReset">Şifremi Sıfırla</button>
				</div>
    		</div>
  		</div>
	</div>
  <?php $this->load->view('layout/scripts');?>
    <script type="text/javascript">
    $("#passwordReset").click(function(){
  	        var string = $("#resetPassword").serialize();

  	        $.ajax({
  	            type: "post",
  	            url: "<?php echo base_url('login/forgotpassword'); ?>",
  	            data : string,
  	            dataType: 'json',

  	            success: function(json){
  	               if(json['success']){
            						$("#resetPassword")[0].reset();

            						$("#resetPassword").fadeOut();
            						$("#passwordReset").fadeOut();

            						$(".passText").html(json['success']);

            						$("#resetText").fadeIn();

            	          generate('success', json['success']);
  	               }

  	                if(json['error']){
  	                    generate('error', json['error']);
  	                }
  	            },
                error:function()
        				{
        					alert("error");
        				}

  	        });
  	    });

  		$(".btn-reset").click(function(){
  			$("#resetPassword").fadeIn();
  			$("#passwordReset").fadeIn();

  			$(".passText").html('');

  			$("#resetText").fadeOut();
  		});
    </script>



</body>
</html>
