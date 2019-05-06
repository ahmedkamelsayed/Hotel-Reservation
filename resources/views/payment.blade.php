<!DOCTYPE html>
<html>
<head>
<title>Payment Form Widget Flat Responsive Widget Template :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Payment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{asset('payment/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="{{asset('payment/js/jquery.min.js')}}"></script>
</head>
<body>
	<div class="main">
		<h1>Payment Form Widget</h1>
		<div class="content">
			
			<script src="{{asset('payment/js/easyResponsiveTabs.js')}}" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
									<h2>Select Payment Method</h2>
									  <ul class="resp-tabs-list">
										  <li class="resp-tab-item"><span><label class="pic1"></label>Credit Card</span></li>
										  <li class="resp-tab-item"><span><label class="pic3"></label>Cash payment</span></li>
										  <div class="clear"></div>
									  </ul>	
								</div>
								<div class="resp-tabs-container">
                                    
                                    <!-- credit caard  -->
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="payment-info">
											<h3>Personal Information</h3>
											<form method="post" action="{{ url('visa') }}" >
												{{ csrf_field() }}
												<div class="tab-for">				
													<h5>EMAIL ADDRESS</h5>
														<input type="email" name="email" required>
													<h5>FIRST NAME</h5>													
														<input type="text" name="name" required>
												</div>			
											    <h3 class="pay-title">Credit Card Info</h3>
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" name="name_on_card" required>
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" name="card_no" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required>
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" name="ex_month" class="text_box" type="text" value="6" min="1" />	
																</li>
																<li>
																	<input type="number" name="ex_year" class="text_box" type="text" value="1988" min="1" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" name="cvv" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required>
													</div>
													<div class="clear"></div>
												</div>
												<input type="submit" name="Send Message" value="SUBMIT" onclick="showId()">
                                            </form>
										</div>
									</div>
                                    
                                    <!-- cash  -->
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="payment-info">
											<h3>Cash payment</h3>
                                            <form method="post" action="{{ url('cash') }}" >
												{{ csrf_field() }}
												<div class="tab-for">				
													<h5>EMAIL ADDRESS</h5>
														<input type="email" name="email" required>
													<h5>FIRST NAME</h5>													
														<input type="text" name="name" required>
												</div>
                                                <div class="radio-btns">
                                                        <div class="single-bottom">
                                                            <ul>
                                                                <li>
                                                                    <input type="checkbox"  id="brand" value="" required>
                                                                    <label for="brand"><span></span>By checking this box, I agree to cash payment.</label>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <input type="submit" value="SUBMIT" onclick="showId()">
                                            </form>
										</div>
									</div>
                                    
								</div>	
							</div>
						</div>	

		</div>
	</div>
</body>
</html>

<script type="text/javascript">
	console.log("Test");
   	function showId(){
        alert("your id is "+ {{ $ids }} +" if you want to cancel booking" );
    }
</script>