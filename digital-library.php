<!doctype html>
<html lang="en">
<?php include 'include/head.php'; ?>
<?php
	$basePath = __DIR__."/digitalLibrary";
	$folderPath = "/";
	if(isset($_GET['path'])){
		$folderPath = $_GET['path'];
		$folderPath = str_replace("..","",$folderPath);
	}
	$scanLocation = $basePath.$folderPath;
	$files = array();
	$dirs = array();
	$scanOutput = scandir($scanLocation);
	foreach($scanOutput as $filePath){
		if($filePath != '.' && $filePath != '..'){
			$fileLocation = $scanLocation.'/'.$filePath;
			if(is_dir($fileLocation)){
				array_push($dirs, array("name"=>$filePath,"path"=>$folderPath."/".$filePath));
			}else{
				array_push($files, array("name"=>$filePath,"path"=>$folderPath."/".$filePath));
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
		<a href="digital-library.php">Digital Library</a>
		<?php
			$currentFolderName = "Digital Library";
			$previousPath = "";
			if(isset($_GET['path'])){
				$bredPath = $_GET['path'];
				$bredPath = str_replace("..","",$folderPath);
				$folderLevels = explode("/",$bredPath);
				$currentPath = "/";
				foreach($folderLevels as $folderLevel){
					if($folderLevel != ""){
						$previousPath = $currentPath;
						$currentPath .= $folderLevel."/";
						$currentFolderName = $folderLevel;
						echo '&nbsp; / &nbsp;';
						echo '<a href="digital-library.php?path='.$currentPath.'">'.$folderLevel.'</a>';
					}					
				}
			}
		?>
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
        <h2>
		<?php 
			if($previousPath != "")
				echo '<a href="digital-library.php?path='.$previousPath.'"> <i class="fa fa-angle-left"></i> </a>';
			echo $currentFolderName; 
		?>
		</h2>
      </div>
      <div class="row top-map">
        <div class="cont-details col-md-12">
			<?php
				foreach($dirs as $dir){
					echo "<div class='folder'>";
						echo "<a href='digital-library.php?path=".$dir['path']."'>";
							echo "<img src='./assets/images/folder png _PS.png' />";
							echo "<h4 style='color: #333;padding-top: 10px;'>".$dir['name']."</h4>";
						echo "</a>";
					echo "</div>";
				}
			?>
        </div>
		<?php 
			if(sizeof($dirs) > 0){
				echo '<div class="cont-details col-md-12"><hr/></div>';
			}
		?>
		<div class="cont-details col-md-12">
			<?php
				foreach($files as $file){
					echo "<div class='file'>";
						echo "<a target='_blank' href='./digitalLibrary/".$file['path']."'>";
							$extension = strtolower(substr($file['path'], -3));
							if($extension == 'pdf')
								echo "<img src='./assets/images/pdf_icon_1.png' />";
							else if($extension == 'doc' || $extension == 'ocx')
								echo "<img src='./assets/images/pdf_icon_1.png' />";
							else
								echo "<img src='./assets/images/file.png' />";
							echo "<div style='height:50px;overflow: hidden;'><h4>".$file['name']."</h4></div>";
						echo "</a>";
					echo "</div>";
				}
			?>
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