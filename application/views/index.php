<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
	<title>WETRAVEL</title>
	<link rel="stylesheet" href="<?php echo URL_ASSETS;?>/css/style.css">
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Flight Ticket Booking  Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<style type="text/css">
		.bg{
			background: url(<?php echo base_url();?>assets/images/5.jpg);
			background-size: cover;
		}
		.resp-tabs-list {
			background: #241614;
		}
		input[type="submit"]{
			background: #241614;
		}
		input[type="submit"]:hover{
			background:#99C794;
		}
		h3{
			color:#566167;
		}
		input{
			background:rgba(3, 3, 3, 0.57);
			border: 0;
			color: white;
			border: 1px solid #A9A9A9;
		}
		select{
			background: rgba(3, 3, 3, 0.57);
			color: white;
		}
		.select-kota{
			width: 100%;
		}
		input[type="password"] {
		padding: 10px;
		width: 93%;
		float: left;
	}
	</style>
</head>
<body class="bg" background="<?php echo URL_ASSETS;?>images/5.jpg">
	<h1>WETRAVEL</h1>
	<div class="main-agileinfo">
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Round Trip</span></li>
					<li class="resp-tab-item"><span>One way</span></li>	
					<li class="resp-tab-item"><span>Register</span></li>
					<li class="resp-tab-item"><span>Login</span></li>	
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">
					<div class="tab-1 resp-tab-content roundtrip">
						<form action="#" method="post">
							<div class="from">
								<h3>Keberangkatan</h3>
								<select id="w3_country1" class="select-kota" onchange="change_country(this.value)" class="frm-field required">
									<option>Jakarta</option>  
									<option>Bandung</option>   
									<option>Surabaya</option>   
									<option>Bali</option>  
									<option>Magelang</option> 
									<option>Yogyakarta</option> 
									<option>Jayapura</option>  	
									<option>Merauke</option> 					
								</select>
							</div>
							<div class="to">
								<h3>Tujuan</h3>
								<select id="w3_country1" class="select-kota"  onchange="change_country(this.value)" class="frm-field required">
									<option>Jakarta</option>  
									<option>Bandung</option>   
									<option>Surabaya</option>   
									<option>Bali</option>  
									<option>Magelang</option> 
									<option>Yogyakarta</option> 
									<option>Jayapura</option>  	
									<option>Merauke</option> 					
								</select>
							</div>
							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3>Tanggal</h3>
									<input  id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								</div>
								<div class="return">
									<h3>Kembali</h3>
									<input  id="datepicker1" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								</div>
								<div class="clear"></div>
							</div>
							<div class="class">
								<h3>Kelas</h3>
								<select id="w3_country1" onchange="change_country(this.value)" class="frm-field required">
									<option value="null">Economy</option>  
									<option value="null">Premium Economy</option>   
									<option value="null">Business</option>   
									<option value="null">First class</option>   						
								</select>

							</div>
							<div class="clear"></div>
							<div class="numofppl">
								<!-- <div class="adults">
									<h3>Adult:(12+ yrs)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="child">
									<h3>Child:(2-11 yrs)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div> -->
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<input type="submit" value="Cari Penerbangan">
						</form>						
					</div>		
					<div class="tab-1 resp-tab-content oneway">
						<form action="#" method="post">
							<div class="from">
								<h3>From</h3>
								<input type="text" name="city" class="city1" placeholder="Type Departure City" required="">
							</div>
							<div class="to">
								<h3>To</h3>
								<input type="text" name="city" class="city2" placeholder="Type Destination City" required="">
							</div>
							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3>Depart</h3>
									<input class="date" id="datepicker2" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
									<span class="checkbox1">
									</span>
								</div>
							</div>
							<div class="class">
								<h3>Class</h3>
								<select id="w3_country1" onchange="change_country(this.value)" class="frm-field required">
									<option value="null">Economy</option>  
									<option value="null">Premium Economy</option>   
									<option value="null">Business</option>   
									<option value="null">First class</option>   						
								</select>

							</div>
							<div class="clear"></div>
							<div class="numofppl">
								<div class="adults">
									<h3>Adult:(12+ yrs)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus" style="color: white;">&nbsp;</div>
											<div class="entry value" style="background:rgba(3, 3, 3, 0.57); color: white;"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="child">
									<h3>Child:(2-11 yrs)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value" style="background:rgba(3, 3, 3, 0.57); color: white;"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<input type="submit" value="Search Flights">
						</form>	
								
					</div>
					<div class="tab-1 resp-tab-content register">
						<form action="<?php base_url();?>index.php/Welcome/add_user" method="post">
							<div class="from">
								<h3>User Name</h3>
								<input type="text" name="username" class="" id="username" placeholder="Username" required="">
							</div>
							<div class="to">
								<h3>Password</h3>
								<input type="password" name="password" id="password" class="" placeholder="Password" required="">
							</div>
							<div class="from">
								<h3>Full Name</h3>
								<input type="text" name="fullname" id="fullname" class="" placeholder="Full Name" required="">
							</div>
							<div class="to">
								<h3>Level</h3>
								<select id="w3_country1" class="select-kota" name="level" onchange="change_country(this.value)" class="frm-field required">
									<option value="user">User</option>  
									<option value="admin">Admin</option>					
								</select>
							</div>
							
							<input type="submit" name="kirim" value="Daftar">
						</form>						
					</div>
					<div class="tab-1 resp-tab-content login">
						<form action="<?php base_url();?>index.php/welcome/login" method="post">
							<br>
							<div class="from">
								<h3>User Name</h3>
								<input type="text" name="username" class="" id="username" placeholder="Username" required="">
							</div>
							<div class="to">
								<h3>Password</h3>
								<input type="password" name="password" id="password" class="" placeholder="Password" required="">
							</div>
							<input type="submit" name="kirim" value="Masuk">
						</form>						
					</div>		
				</div>						
			</div>
		</div>
	</div>
	<div class="footer-w3l">
		<p class="agileinfo"> &copy; 2018 TRAVELKITA </p>
	</div>
	<!--script for portfolio-->
		<script src="<?php echo URL_ASSETS;?>/js/jquery.min.js"> </script>
		<script src="<?php echo URL_ASSETS;?>/js/easyResponsiveTabs.js" type="text/javascript"></script>
		<script type="text/javascript">
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion           
					width: 'auto', //auto or any width like 600px
					fit: true   // 100% fit in a container
				});
			});		
		</script>
		<!--//script for portfolio-->
				<!-- Calendar -->
				<link rel="stylesheet" href="<?php echo URL_ASSETS;?>/css/jquery-ui.css" />
				<script src="<?php echo URL_ASSETS;?>/js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
			<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
								<!--//quantity-->
						<!--load more-->
								<script>
	$(document).ready(function () {
		size_li = $("#myList li").size();
		x=1;
		$('#myList li:lt('+x+')').show();
		$('#loadMore').click(function () {
			x= (x+1 <= size_li) ? x+1 : size_li;
			$('#myList li:lt('+x+')').show();
		});
		$('#showLess').click(function () {
			x=(x-1<0) ? 1 : x-1;
			$('#myList li').not(':lt('+x+')').hide();
		});
	});
</script>
<!-- //load-more -->



</body>
</html>