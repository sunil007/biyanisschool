
<!-- jQuery JS -->
<script src="assets/js/jquery-1.11.0.min.js"></script>
<!-- Template JavaScript -->
<script src="assets/js/owl.carousel.js"></script>

<!-- script for testimonials -->
<script>
  $(document).ready(function () {
    $('.owl-two').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- //testimonials owlcarousel -->

<!-- for services carousel slider -->
<script>
  $(document).ready(function () {
    $('.owl-three').owlCarousel({
      loop: true,
      stagePadding: 20,
      margin: 20,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      nav: false,
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 2
        },
        1000: {
          items: 3
        }
      }
    })
  })
</script>
<!-- //for services carousel slider -->

<!-- stats number counter-->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- Bootstrap JS -->
<script src="assets/js/bootstrap.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js?render=6LeQ334UAAAAAMcpX18gQk-hvLQh74biC2ii-oXI'></script>

<script>
	function generateEnquiry(form){
		let name = $(form).find("[name='name']").val();
		if(name == ""){
			$(form).find("[name='name']").effect('highlight',2000);
			return false;
		}
		
		let phone = $(form).find("[name='phone']").val();
		if(phone == ""){
			$(form).find("[name='phone']").effect('highlight',2000);
			return false;
		}
		
		let email = $(form).find("[name='email']").val();
		if(email == ""){
			$(form).find("[name='email']").effect('highlight',2000);
			return false;
		}
		
		showLoadingModal();
		captchaAction = "newEnquiry";
		grecaptcha.execute('6LeQ334UAAAAAMcpX18gQk-hvLQh74biC2ii-oXI', {action: captchaAction})
		.then(function(token) {
			var dataPoints = $(form).serializeArray();
			data = {};
			data['name'] = name;
			data['phone'] = phone;
			data['email'] = email;
			if(typeof(token) != "undefined" && token.length > 0)
				data['token']=token;
			
			//$("#successMessage").text("Please wait...Registring your enquiry with our Experts.");
			$.post("ajax/newEnquiry.php", data, function(data){
				try{
					//$("#successMessage").text("");
					//$("#errorMessage").text("");
					jsonData = JSON.parse(data);
					if(typeof(jsonData['status']) != "undefined" && jsonData['status'] == "success"){
						//$(form).hide();
						//$("#enquiryForm .modal-footer").hide();
						$(form).html("<h3 class='text-center'><span style='font-size:1.2em'>Thank You</span><br/>&nbsp;<br/>Request is Registered Successfully.<br/>&nbsp;<br/>&nbsp;</h3>");
					}else{
						//$("#successMessage").text("");
						//$("#errorMessage").text("Failed to connect to server. Please reload the page and try again.")
					}
				}catch(e){
					//console.log(e);
					//$("#successMessage").text("");
					//$("#errorMessage").text("Failed to connect to server. Please reload the page and try again.")
				}
				hideLoadingModal();
			});
		});
		return false;
	}
	
	function showLoadingModal(){
		if($('#loadingModal').length == 0){
			loadingModalText = "";
			loadingModalText += '<div class="modal" id="loadingModal" data-backdrop="static" data-keyboard="false">';
			loadingModalText += '<div class="modal-dialog" style="width: 275px;text-align: center;margin-left:auto;margin-right:auto;">';
			loadingModalText += '<div class="modal-content">';
			loadingModalText += '<div class="modal-body">';
			loadingModalText += '<img src="assets/images/hourglass.svg" />';
			loadingModalText += '<h3>Loading...</h3>';
			loadingModalText += '</div>';
			loadingModalText += '</div>';
			loadingModalText += '</div>';
			loadingModalText += '</div>';
			loadingModal = $.parseHTML(loadingModalText);
			$('body').append(loadingModal);
		}
		$("#loadingModal").modal('show');	
	}
	
	function hideLoadingModal(){
		console.log("hiding loadin modal...");
		$("#loadingModal").modal('hide');
	}
</script>