<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatiple" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Cẩm nang du lịch Việt Nam</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link href="carousel.css" rel="stylesheet"> -->
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
<script src="js/jquery-1.11.3.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- <script src="../../assets/js/docs.min.js"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<!-- <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script> -->
	<script src="js/bootstrap.min.js"></script>
	  <!-- <script src="../../assets/js/ie-emulation-modes-warning.js"></script> -->
	  <script src="https://apis.google.com/js/platform.js"></script>
	 <style>
	 	body{
	 		background: url(image/bg_body.png);
		}
	 </style>

</head>
<body>
<!-- MENU -->
<nav id="custom-bootstrap-menu" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" 
          aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Du Lịch Việt Nam</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav">
              <li><a href="#">Trang Chủ</a></li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown">Du Lịch Miền Bắc <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="content-vung.php">Du Lịch Hạ Long</a></li>
                  
                  <li><a href="content-vung.php">Du Lịch Sapa</a></li>
                 
                  <li><a href="content-vung.php">Du Lịch Hà Nội</a></li>
                  
                  <li><a href="content-vung.php">Du Lịch Đông Bắc</a></li>
                 
                  <li><a href="content-vung.php">Du Lịch Tây Bắc</a></li>
                  
                  <li><a href="content-vung.php">Du Lịch Ninh Bình</a></li>
                 
                  <li><a href="content-vung.php">Du Lịch Quảng Ninh</a></li>
              </ul>
            </li>
            </ul>
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" data-toggle="dropdown">Du Lịch Miền Trung <span class="caret"></span></a>
                <ul class="dropdown-menu">
              <li><a href="#">Du Lịc Huế</a></li>
             
              <li><a href="#">Du Lịch Nha Trang</a></li>
              
              <li><a href="#">Du Lịch Đà Lạt</a></li>
              
              <li><a href="#">Du Lịch Hội An</a></li>
              
              <li><a href="#">Du Lịch Đà Nẵng</a></li>
              
              <li><a href="#">Du Lịch Phú Yên</a></li>
             
              <li><a href="#">Du Lịch Tây Nguyên</a></li>
          <!-- </ul class="dropdown-menu"> -->
          </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav">
              <li class="dropdown">
                <a href="#" data-toggle="dropdown">Du Lịch Miền Nam <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Du Lịch Côn Đảo</a></li>
                 
                  <li><a href="#">Du Lịch Phú Quốc</a></li>
                  
                  <li><a href="#">Du Lịch Bà Rịa - Vũng Tàu</a></li>
                  
                  <li><a href="#">Du Lịch Bạc Liêu</a></li>
                 
                  <li><a href="#">Du Lịch Tiền Giang</a></li>
                 
                  <li><a href="#">Du Lịch Cần Thơ</a></li>
                </ul>
              </li>
              <li><a href="#">Ẩm Thực Vùng Miền</a></li>
              <li><a href="#">Mẹo Hay</a></li>
              <li><a href="#">Bản Đồ Du Lịch</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Đăng nhập</a></button></li>
              <li><a href="#">Đăng ký</a></button></li>
              
          </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<!-- END MENU -->
<!-- SLIDE  SHOW-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
		<li data-target="#myCarousel" data-slide-to="3"></li>
	</ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="image/backg1.jpg" alt="Chania" height="300px">
        <div class="container">
            <div class="carousel-caption">
              <h1>Du Lịch Việt Nam - Nơi chia sẻ mọi thông tin du lịch hot nhất</h1>
            </div>
        </div>
    </div>
    <div class="item">
        <img src="image/backg2.jpg" alt="Chania">
        <div class="container">
            <div class="carousel-caption">
              <h1>Du Lịch Việt Nam - Nơi chia sẻ mọi thông tin du lịch hot nhất</h1>
              
            </div>
        </div>
    </div>
    <div class="item">
        <img src="image/backg3.jpg" alt="Flower">
        <div class="container">
            <div class="carousel-caption">
              <h1>Du Lịch Việt Nam - Nơi chia sẻ mọi thông tin du lịch hot nhất</h1>
              
            </div>
        </div>
    </div>
    <div class="item">
        <img src="image/backg4.jpg" alt="Flower">
        <div class="container">
            <div class="carousel-caption">
              <h1>Du Lịch Việt Nam - Nơi chia sẻ mọi thông tin du lịch hot nhất</h1>
              
            </div>
        </div>
    </div>
  </div>
  <!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<!-- END SLIDE SHOW-->

<!-- CONTENT -->
<div class="container" id="main-content">
	<div class="row">
		<div class="col-md-9">
			<div class="row">
		        <div class="col-md-12">
		          <img class="img-square" src="image/nhung-diem-den-hap-dan-nhat-o-mien-bac-dip-2-9-ivivu-1.jpg" width="100%" height="400">
		          <h2><a href="#">Những điểm đến hấp dẫn nhất ở miền Bắc dịp 2/9</a></h2>
		          <p>Dịp nghỉ lễ 2/9 là thời điểm lý tưởng cho những chuyến du lịch cùng với người thân, gia đình và bạn bè.
		           Dưới đây là những điểm đến đẹp và hấp dẫn mà du khách không nên bỏ qua ở miền Bắc.</p>
		          
		        </div>
		    </div>
		    <!--  -->
			<div class="row entry-main-content">
				<div class="header-d">
			    	<h4><strong>ĐIỂM ĐẾN</strong></h4>
					<h6>Những điểm đến không thể bỏ qua</h6>
		    	</div>
		    	<div class=" row entry-content">
			        <div class="col-md-6">
			          <img class="img-square" src="image/du-lich-hoi-an.jpg" alt="Generic placeholder image" width="370" height="215">
			          <h2><a href="#">Phố cổ Hội An: Những nét đẹp dung dị ngày rằm</a></h2>
			          <p> Nếu bạn cảm thấy cuộc sống của mình đang quá hối hả, hãy dừng lại và dành ít nhất một ngày rằm 
			          trong tháng để ghé tới Hội An và hòa mình vào cuộc sống bình dị nơi đây.</p>
			          
			        </div>
			        <div class="col-md-6">
			          <img class="img-square" src="image/nhung-canh-dep-me-man-doc-duong-bac-trung-bo.jpg" alt="Generic placeholder image" width="370" height="215">
			          <h2><a href="#">Những cảnh đẹp mê mẩn dọc đường Bắc Trung Bộ</a></h2>
			          <p>Trải dài từ Thanh Hóa đến Thừa Thiên Huế, Bắc Trung Bộ được xem là cung đường có đầy đủ mọi loại địa hình từ sông, hồ, biển, ruộng, đèo… lại khoác lên mình một bề dày lịch sử hào…</p>
			          
			        </div>
			    </div>
			    <div class=" row entry-content">
			   	    <div class="col-md-6">
			          <img class="img-square" src="image/Hoi-An-lot-Top-10-thanh-pho-tham-quan-ly-tuong-o-chau-A.jpg" alt="Generic placeholder image" width="370" height="215">
			          <h2><a href="#">Hội An lọt Top 10 thành phố tham quan lý tưởng ở châu Á</a></h2>
			          <p>Chuyên trang du lịch Mỹ Smarter Travel vừa công bố 10 thành phố lý tưởng để tham quan ở châu Á.</p>
			          
			        </div>
			        <div class="col-md-6">
			          <img class="img-square" src="image/Thuong-ngoan-phong-canh-nui-rung-cao-nguyen.jpg" alt="Generic placeholder image" width="370" height="215">
			          <h2><a href="#">Du lịch Đà Lạt thưởng ngoạn phong cảnh núi rừng cao nguyên</a></h2>
			          <p>Đến Đà Lạt, nếu muốn có cảm giác choáng ngợp trước phong cảnh núi rừng trùng điệp, hay mê man trong sắc màu rực rỡ của những vườn hoa, bạn hãy làm một chuyến ra vùng ngoại ô.</p>
			          
			       </div>
			    </div>
			</div>
			<!--  -->
		    <div class="row entry-main-content">
	        	<div class="header-d">
			    	<h4><strong>ẨM THỰC</strong></h4>
					<h6>Những món ăn ngon hấp dẫn</h6>
		    	</div>
		    	<div class=" row entry-content">
				    <div class="col-md-6">
			          <img class="img-square" src="image/mot-vong-an-uong-quanh-thanh-pho-da-lat-ivivu.jpg" alt="Generic placeholder image" width="370" height="215">
			          <h2><a href="#">Du lịch Đà Lạt ‘lượn’ một vòng ăn uống quanh thành phố</a></h2>
			          <p>Bánh mì xíu mại, thịt xiên nướng hay sữa đậu nành nóng… là những món thường nằm trong danh sách “phải ăn” của thực khách khi ghé thăm thành phố Đà Lạt ngàn hoa.</p>
			          
			        </div>
			        <div class="col-md-6">
			          <img class="img-square" src="image/hung-mon-trang-mieng-danh-cho-gioi-tre-tai-sai-gon.jpg" alt="Generic placeholder image" width="370" height="215">
			          <h2><a href="#">Du lịch Sài Gòn thưởng thức những món tráng miệng độc đáo</a></h2>
			          <p>Bạn có thể thưởng thức lẩu tàu hũ cùng hội bạn thân hay “đánh lẻ” với món chè bột lọc heo quay nổi tiếng xứ Huế.</p>
			    </div>
			    <div class=" row entry-content">     
			        </div>
					<div class="col-md-6">
				          <img class="img-square" src="image/huong-vi-dong-que-ha-tinh-trong-mon-bun-thit-nuong.jpg" alt="Generic placeholder image" width="370" height="215">
				          <h2><a href="#">Du lịch Hà Tĩnh thưởng thức món bún thịt nướng đậm hương vị đồng quê</a></h2>
				          <p>Bún thịt nướng Hà Tĩnh vừa tinh tế vừa đơn giản, kết hợp vị thanh mát của bún với hương thơm nồng của nước tương và vị béo ngậy của thịt</p>
				          
				    </div>
			        <div class="col-md-6">
			          <img class="img-square" src="image/ban-do-cac-quan-an-vat-o-thanh-pho-tuy-hoa.jpg" alt="Generic placeholder image" width="370" height="215">
			          <h2><a href="#">Bản đồ các quán ăn vặt khi du lịch Tuy Hòa</a></h2>
			          <p>Với địa chỉ bỏ túi được chính người dân địa phương hướng dẫn, bạn sẽ tha hồ ăn các món ngon nổi tiếng Tuy Hòa, Phú Yên như chả dông, bánh bèo nóng, bánh canh hẹ…</p>
			        </div>
			    </div>
			</div>
				
			<!--  -->  
	        <div class="row entry-main-content">
	        	<div class="header-d">
			    	<h4><strong>MẸO HAY DU LỊCH</strong></h4>
					<h6>Những kinh nghiệm du lịch không thể thiếu</h6>
		    	</div>
		    	<div class=" row entry-content">
				    <div class="col-md-6">
			          <img class="img-square" src="image/mot-vong-an-uong-quanh-thanh-pho-da-lat-ivivu.jpg" alt="Generic placeholder image" width="370" height="215">
			          <h2><a href="#">Du lịch Đà Lạt ‘lượn’ một vòng ăn uống quanh thành phố</a></h2>
			          <p>Bánh mì xíu mại, thịt xiên nướng hay sữa đậu nành nóng… là những món thường nằm trong danh sách “phải ăn” của thực khách khi ghé thăm thành phố Đà Lạt ngàn hoa.</p>
			          
			        </div>
			        <div class="col-md-6">
			          <img class="img-square" src="image/hung-mon-trang-mieng-danh-cho-gioi-tre-tai-sai-gon.jpg" alt="Generic placeholder image" width="370" height="215">
			          <h2><a href="#">Du lịch Sài Gòn thưởng thức những món tráng miệng độc đáo</a></h2>
			          <p>Bạn có thể thưởng thức lẩu tàu hũ cùng hội bạn thân hay “đánh lẻ” với món chè bột lọc heo quay nổi tiếng xứ Huế.</p>
			          
			        </div>
			    </div>
			    <div class=" row entry-content">
				    <div class="col-md-6">
			          <img class="img-square" src="image/huong-vi-dong-que-ha-tinh-trong-mon-bun-thit-nuong.jpg" alt="Generic placeholder image" width="370" height="215">
			          <h2><a href="#">Du lịch Hà Tĩnh thưởng thức món bún thịt nướng đậm hương vị đồng quê</a></h2>
			          <p>Bún thịt nướng Hà Tĩnh vừa tinh tế vừa đơn giản, kết hợp vị thanh mát của bún với hương thơm nồng của nước tương và vị béo ngậy của thịt</p>
			          
			        </div>
			        <div class="col-md-6">
			          <img class="img-square" src="image/ban-do-cac-quan-an-vat-o-thanh-pho-tuy-hoa.jpg" alt="Generic placeholder image" width="370" height="215">
			          <h2><a href="#">Bản đồ các quán ăn vặt khi du lịch Tuy Hòa</a></h2>
			          <p>Với địa chỉ bỏ túi được chính người dân địa phương hướng dẫn, bạn sẽ tha hồ ăn các món ngon nổi tiếng Tuy Hòa, Phú Yên như chả dông, bánh bèo nóng, bánh canh hẹ…</p>
			       </div>
			    </div>
			</div>
		</div> <!-- End Col-md-9 -->
		
	<!-- Sidebar -->	
		
		<div class="col-md-3">
			<div class="search"	>
				<div>
				    <h3 class="header-sidebar" >TÌM BÀI VIẾT</h3>
				</div>
				<div class="form-group has-feedback">
					  <label class="control-label sr-only" for="inputSuccess5">Hidden label</label>
					  <input type="text" class="form-control" id="inputSuccess5" aria-describedby="inputSuccess5Status" placeholder="search" />
					  <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
					  <span id="inputSuccess5Status" class="sr-only">(success)</span>
				</div>
			</div>

			<div class="entry-sidebar" >
				<div class="page-header">
		        	<h3 class="header-sidebar">Bài viết gần đây</h3>
		        </div>
				<div class="row item-bai-viet">
					<div class="col-md-4 item-img">
						<img src="image/item1.jpg" alt="hinh-anh" width="100px" height="100px"/>
					</div>
					<div class="col-md-8 entry-item" >
						<h4><a href="#">Khám phá Đà Lạt - miền đất thân thương...</a></h4>
					</div>
				</div>
				<div class="row item-bai-viet">
					<div class="col-md-4 item-img">
						<img src="image/item1.jpg" alt="hinh-anh" width="100px" height="100px"/>
					</div>
					<div class="col-md-8 entry-item" >
						<h4><a href="#">Khám phá Đà Lạt - miền đất thân thương...</a></h4>
						
					</div>
				</div>
				<div class="row item-bai-viet">
					<div class="col-md-4 item-img">
						<img src="image/item1.jpg" alt="hinh-anh" width="100px" height="100px"/>
					</div>
					<div class="col-md-8 entry-item">
						<h4><a href="image/item1.jpg">Khám phá Đà Lạt - miền đất thân thương...</a></h4>
						
					</div>
				</div>
				
        	</div>  
        	<!-- End Entry-sidebar 1 -->
        	<div class="entry-sidebar">
				<div class="page-header">
		        	<h3 class="header-sidebar">Bài viết được xem nhiều nhất</h3>
		        </div>
				<div class="row item-bai-viet">
					<div class="col-md-4 item-img">
						<img src="image/item2.jpg" alt="hinh-anh" width="100px" height="100px"/>
					</div>
					<div class="col-md-8 entry-item">
						<h4><a href="#">Thịt trâu nhúng mẻ - thịt của những kỉ niệm...</a></h4>
						
					</div>
				</div>
				<div class="row item-bai-viet">
					<div class="col-md-4 item-img">
						<img src="image/item2.jpg" alt="hinh-anh" width="100px" height="100px"/>
					</div>
					<div class="col-md-8 entry-item">
						<h4><a href="#">Thịt trâu nhúng mẻ - thịt của những kỉ niệm...</a></h4>
						
					</div>
				</div>
				<div class="row item-bai-viet">
					<div class="col-md-4 item-img">
						<img src="image/item2.jpg" alt="hinh-anh" width="100px" height="100px"/>
					</div>
					<div class="col-md-8 entry-item">
						<h4><a href="#">Thịt trâu nhúng mẻ - thịt của những kỉ niệm...</a></h4>
						
					</div>
				</div>
				
        	</div> 
        	<!-- End Entry-sidebar 2 -->
        	
		</div>
	<!-- End sidebar -->
    </div><!-- End Row big -->
    
</div>
	
<!-- END CONTENT-->


<!-- END SIDEBAR -->
	
<!-- </div> -->
<!-- END CONTENT-WRAP-->

<!-- FOOTER -->
<footer id="footer">
	<div class="container">
		<div class="row">
			<!-- <div class="col-md-3">
				<div class="line-col"></div>
				<ul>
					<li>
						<img src="#" alt="Đây là cái ảnh">
						<a href="#" title="">Link tới địa điểm trên ảnh</a>
					</li>
					<li>
						<img src="#" alt="Đây là cái ảnh">
						<a href="#" title="">Link tới địa điểm trên ảnh</a>
					</li>
					<li>
						<img src="#" alt="Đây là cái ảnh">
						<a href="#" title="">Link tới địa điểm trên ảnh</a>
					</li>
				</ul>
			</div>
			<div class="col-md-3">
				<div class="line-col"></div>
				<ul>
					<li>
						<img src="#" alt="Đây là cái ảnh">
						<a href="#" title="">Link tới địa điểm trên ảnh</a>
					</li>
					<li>
						<img src="#" alt="Đây là cái ảnh">
						<a href="#" title="">Link tới địa điểm trên ảnh</a>
					</li>
					<li>
						<img src="#" alt="Đây là cái ảnh">
						<a href="#" title="">Link tới địa điểm trên ảnh</a>
					</li>
				</ul>
			</div> -->
			<div class="col-md-3">
				<div class="line-col"></div>
				<ul>
					<li>
						<script>
						  var googleUser = {};
						  var startApp = function() {
						    gapi.load('auth2', function(){
						      // Retrieve the singleton for the GoogleAuth library and set up the client.
						      auth2 = gapi.auth2.init({
						        client_id: '177056325701-vpu5b7ns0gf9lguphcjjk5u1c0m72hmq.apps.googleusercontent.com',
						        cookiepolicy: 'single_host_origin',
						        // Request scopes in addition to 'profile' and 'email'
						        //scope: 'additional_scope'
						      });
						      attachSignin(document.getElementById('customBtn'));
						      function attachSignin(element) {
								    // console.log(element.id);
								    auth2.attachClickHandler(element, {},
								        function(googleUser) {
								        	console.log(googleUser.getBasicProfile().getName());
								        	console.log(googleUser.getBasicProfile());
								        	
								          document.getElementById('name').innerText = "Signed in: " +
								              googleUser.getBasicProfile().getName();
								        }, function(error) {
								          alert(JSON.stringify(error, undefined, 2));
								        });
								  }
						    });
						  };

						  
						</script>

						<div id="gSignInWrapper">
					    <span class="label">Sign in with:</span>
					    <div id="customBtn" class="customGPlusSignIn">
					      <span class="icon"></span>
					      <span class="buttonText">Google</span>
					    </div>
					  </div>
					  <div id="name"></div>
					  <script>startApp();</script>
					</li>
					<li>
							<div class="fb">
							<a href="http://localhost/eatandgo.com/plugins/fbconfig.php" title="">
							<!-- <button type="button" class="btn btn-success">Facebook</button> -->
								<img src="image/fb_login.png" alt="">
							</a>
							</div>
					</li>
				</ul>
			</div>
			<div class="col-md-3">
				<div class="line-col"></div>
				
			</div>
		</div>

		<div class="line"></div>
		<div class="alignleft">
			© Copyright 2015, All Rights Reserved. | Powered by <a href="#"> Eat And Go</a>
		</div>
	</div>
</footer>
<!-- END FOOTER -->


</body>
</html>