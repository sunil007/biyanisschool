<?php
	$data = $_POST;
	$postEnquiry = curl_init();
	curl_setopt($postEnquiry, CURLOPT_URL, "https://classmatrix.org/dashboard/webhook/enquiry/biyanisschool.php");
	curl_setopt($postEnquiry, CURLOPT_POST, true);
	curl_setopt($postEnquiry, CURLOPT_POSTFIELDS, http_build_query($data));
	curl_setopt($postEnquiry, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($postEnquiry, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($postEnquiry);
	echo $response;
	
	try {
		//$name = isset($_POST['name'])?$_POST['name']:"-";
		//$phone = isset($_POST['phone'])?$_POST['phone']:"-";
		//$message = 'NEW Enquiry <br>Name : '.$name.' <br>Phone : '.$phone.'';
		//mail("tsph.notes@gmail.com","New Enquiry",$message);
	}
	catch(Exception $e) {}
?>