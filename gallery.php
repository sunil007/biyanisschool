<!doctype html>
<html lang="en">
<?php include 'include/head.php'; ?>
<?php
	$basePath = __DIR__."/assets/gallery";
	$thumbnailLocation = $basePath."/thumbnails/";
	$imagesLocation = $basePath."/images/";
	$thumbnails = array();
	$images = array();
	
	/*Scanning Images*/
	$scanOutput = scandir($imagesLocation);
	foreach($scanOutput as $filePath){
		$fileLocation = $imagesLocation.'/'.$filePath;
		if($filePath != '.' && $filePath != '..'){
			if(!is_dir($fileLocation)){
				$images[$filePath] = $filePath;
			}
		}
	}
	
	/*Scanning Thumbnails*/
	$scanOutput = scandir($thumbnailLocation);
	foreach($scanOutput as $filePath){
		if($filePath != '.' && $filePath != '..'){
			$fileLocation = $thumbnailLocation.'/'.$filePath;
			if(!is_dir($fileLocation) && isset($images[$filePath])){
				array_push($thumbnails, $filePath);
			}
		}
	}
?>
<body>
<?php include 'include/nav.php'; ?>
<section class="w3l-breadcrum">
  <div class="breadcrum">
    <div class="container">
      <p>
		<a href="index.php">Home</a> 
		&nbsp; / &nbsp; 
		<a href="gallery.php">Gallery</a>
	  </p>
    </div>
  </div>
</section>
<!-- //breadcrum -->
<!-- contacts -->
<section class="w3l-contact" id="contact">
  <div class="contacts-9 py-5">
    <div class="container py-lg-3">
      <div class="header-section text-center mb-5">
        <h2>Photo Gallery</h2>
      </div>
      <div class="row top-map">
		<div class="cont-details col-md-12">
			<div style="display: flex;flex-direction: row;flex-wrap: wrap;justify-content: center;">
			<?php
				$thumbnails = array_reverse($thumbnails);
				foreach($thumbnails as $file){
					echo "<div class='file blurOnHover' onclick='showImage(\"./assets/gallery/images/".$file."\")' style='padding: 0px;cursor: pointer;width:210px;height:210px;background: url(\"./assets/gallery/thumbnails/".$file."\");background-position: center;background-size: cover;'>";
						echo '<div class="showOnHover" style="width:210px;height:210px;vertical-align: middle;display: table-cell;">'.substr($file, 4, -4).'</div>';
					echo "</div>";
				}
			?>
			</div>
		</div>
      </div>
    </div>
  </div>
</section>
<script>
	function showImage(image){
		$('#imageModal').remove();
		
			loadingModalText = "";
			loadingModalText += '<div class="modal" id="imageModal">';
			loadingModalText += '<div class="modal-dialog" style="width: 55%;max-width: 100%;text-align: center;margin-left:auto;margin-right:auto;">';
			loadingModalText += '<div class="modal-content">';
			loadingModalText += '<button class="btn btn-danger" data-dismiss="modal" style="border-radius: 25px;width: 38px;height: 38px;position: absolute;right: -20px;top: -20px;"><i class="fa fa-times"></i></button>';
			loadingModalText += '<div class="modal-body">';
			loadingModalText += '<img src="'+image+'" style="width: 100%;"/>';
			loadingModalText += '</div>';
			loadingModalText += '</div>';
			loadingModalText += '</div>';
			loadingModalText += '</div>';
			loadingModal = $.parseHTML(loadingModalText);
			$('body').append(loadingModal);
		
		$("#imageModal").modal('show');	
	}
</script>
<style>
	.showOnHover{
		visibility: hidden;
	}
	.showOnHover:hover, .blurOnHover:hover .showOnHover{
		visibility: visible;
		background-color: #8f2929;
		opacity: 0.9;
		color: #fff;
		font-weight: bold;
		border-radius: 10px;
		padding:10px;
	}
	.blurOnHover:hover {}
</style>
<?php include 'include/footer.php'; ?>
<?php include 'include/js.php'; ?>
<?php include 'include/enquireModal.php'; ?>
</body>

</html>