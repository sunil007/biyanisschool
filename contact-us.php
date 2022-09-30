<!doctype html>
<html lang="en">
<?php include 'include/head.php'; ?>
<body>
<?php include 'include/nav.php'; ?>
<section class="w3l-breadcrum">
  <div class="breadcrum">
    <div class="container">
      <p><a href="index.php">Home</a> &nbsp; / &nbsp; Contact Us</p>
    </div>
  </div>
</section>
<!-- //breadcrum -->
<!-- contacts -->
<section class="w3l-contact" id="contact">
  <div class="contacts-9 py-5">
    <div class="container py-lg-3">
      <div class="header-section text-center mb-5">
        <h2 class='bottomUnderline'>Contact us</h2>
      </div>
      <div class="row top-map">
        <div class="cont-details col-md-5">
          <div class="cont-top mt-lg-4 mt-4">
            <div class="cont-left">
              <span class="fa fa-phone text-primary"></span>
            </div>
            <div class="cont-right">
              <h6>Call us:</h6>
              <p><a class="text-dec-none" href="tel:+91 7208-888695"> +91 7208-888695 Mira Road (Kanakia Road)</a></p>
			  <p><a class="text-dec-none" href="tel:+91 9136-382299"> +91 9136-382299 Mira Road (Shrishti Complex)</a></p>
			  <p><a class="text-dec-none" href="tel:+91 7208-888694"> +91 7208-888694 Bhayandar (West)</a></p>
			  <p><a class="text-dec-none" href="tel:+91 7208-888696"> +91 7208-888696 Kandivali East (Thakur Village)</a></p>
              <p><a class="text-dec-none" href="tel:+91 7208-888695"> +91 7208-888695 Kandivali West (Mahavir Nagar)</a></p>
              <p><a class="text-dec-none" href="tel:+91 7710-050171"> +91 7710-050171 Goregoan East (Gokuldham)</a></p>
              <p><a class="text-dec-none" href="tel:+91 9136-319824"> +91 9136-319824 Thane West (Hiranandani Estate)</a></p>

            </div>
          </div>
          <div class="cont-top mt-lg-4 mt-4">
            <div class="cont-left">
              <span class="fa fa-envelope-o text-primary"></span>
            </div>
            <div class="cont-right">
              <h6>Have any questions?</h6>
              <p><a href="mailto:info@biyanissuper30.com" class="mail">info@biyanissuper30.com</a></p>
            </div>
          </div>
        </div>
        <div class="map-content-9 col-md-7 mt-5 mt-md-0">
          <form action="#" onSubmit="return generateEnquiry(this)" method="post">
            <div class="twice">
              <input type="text" class="form-control" name="name" placeholder="Name" required="">
            </div>
            <div class="twice">
              <input type="number" class="form-control" name="phone" placeholder="Phone Number" required="">
            </div>
			<div class="twice">
              <input type="email" class="form-control" name="email" placeholder="Email" required="">
            </div>
            <div class="twice">
              <textarea name="message" class="form-control" placeholder="Message" required=""></textarea>
            </div>
            <div class="text-right">
              <button type="submit" class="btn btn-primary theme-button">Send Message&nbsp; &nbsp;<i class="fa fa-paper-plane-o"></i></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'include/footer.php'; ?>
<?php include 'include/js.php'; ?>
<?php include 'include/enquireModal.php'; ?>
</body>

</html>