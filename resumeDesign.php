<?php
error_reporting(0);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

	<title>Resume Builder</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" /> 
	<link rel="stylesheet" type="text/css" href="resume.css" media="all" />

</head>
<body>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$empDet = $_POST['empDet'];
$jdate = $_POST['jdate'];
$skills = $_POST['skills'];
$obj = $_POST['obj'];
$hobby = $_POST['hobby'];


?>

<div id="doc2" class="yui-t7">
	<div id="inner">
	
		<div id="hd">
			<div class="yui-gc">
				<div class="yui-u first">
					<h1><?php echo $name?></h1>
					<h2><?php echo $empDet?></h2>
					<h3>Joined on <?php echo $jdate?></h3><br>
					<div class="contact-info">
						<h3><?php echo $phone?></h3>
						<h3><?php echo $email?></h3>
						<h3><?php echo $address?></h3>
					</div><!--// .contact-info -->
				</div>

				<div class="yui-u">
					<div class="contact-info">
					<?php
                	if(isset($_POST['submit'])){
                    $img_name = $_FILES['image']['name'];
                    $img_type = $_FILES['image']['type'];
                    $img_size = $_FILES['image']['size'];
                    $img_tmp_name = $_FILES['image']['tmp_name'];
                   

                    move_uploaded_file($img_tmp_name,"images/$img_name");
                    echo "<img src='images/$img_name' class='profile'>";
                }
        ?>
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

				<div class="yui-gf">
						<div class="yui-u first">
							<h2>Objective</h2>
						</div>
						<div class="yui-u">
							<h3><?php echo $obj?></h3>
						</div>
					</div><!--// .yui-gf-->


				<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Education</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">
							<div class="job">

						<?php
							$clgs = $_POST['clgs'];
							$degrees = $_POST['degrees'];
							$startDateEdus = $_POST['start-dateEdus'];
							$endDateEdus = $_POST['end-dateEdus'];
							$descriptionEdus = $_POST['edu-descriptions'];

							foreach ($clgs as $index => $clg) {
							echo '<h2>' . $clg . '</h2>';
							echo '<h3>' . $degrees[$index] . '</h3>';
							echo '<h3 style="text-align:end">' . $startDateEdus[$index] . ' to ' . $endDateEdus[$index] . '</h3>';
							echo '<p>' . $descriptionEdus[$index] . '</p>';
							}	
						?>
						</div>

						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf">
	
						<div class="yui-u first">
							<h2>Work Experience</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">

							<div class="job">
							<?php
								$jobTitles = $_POST['job-titles'];
								$categoryStats = $_POST['stat-cats'];
								$companyNames = $_POST['company-names'];
								$startDates = $_POST['start-dates'];
								$endDates = $_POST['end-dates'];
								$jobDescriptions = $_POST['job-descriptions'];
								
								foreach ($jobTitles as $index => $jobTitle) {
								echo '<h2>' . $jobTitle . '</h2>';
								echo '<h3>' . $categoryStats[$index] . '</h3>';
								echo '<h3>' . $companyNames[$index] . '</h3>';
								echo '<h3 style="text-align:end">' . $startDates[$index] . ' to ' . $endDates[$index] . '</h3>';
								echo '<p>' . $jobDescriptions[$index] . '</p>';
								}	
							?>
							</div>

							<div class="job">
							<?php
								$injobTitles = $_POST['injob-titles'];
								$categoryInters = $_POST['inter-cats'];
								$incompanyNames = $_POST['incompany-names'];
								$instartDates = $_POST['instart-dates'];
								$inendDates = $_POST['inend-dates'];
								$injobDescriptions = $_POST['injob-descriptions'];

								foreach ($injobTitles as $index => $injobTitle) {
								echo '<h2>' . $injobTitle . '</h2>';
								echo '<h3>' . $categoryInters[$index] . '</h3>';
								echo '<h3>' . $incompanyNames[$index] . '</h3>';
								echo '<h3 style="text-align:end">' . $instartDates[$index] . ' to ' . $inendDates[$index] . '</h3>';
								echo '<p>' . $injobDescriptions[$index] . '</p>';
								}	
							?>
							</div>

							<div class="job">
							<?php
								$jobTitleIsas = $_POST['job-titleIsas'];
								$categoryISAs = $_POST['isa-cats'];
								$companyNameIsas = $_POST['company-nameIsas'];
								$startDateIsas = $_POST['start-dateIsas'];
								$endDateIsas = $_POST['end-dateIsas'];
								$jobDescriptionIsas = $_POST['job-descriptionIsas'];
								
								foreach ($jobTitleIsas as $index => $jobTitleIsa) {
								echo '<h2>' . $jobTitleIsa . '</h2>';
								echo '<h3>' . $categoryISAs[$index] . '</h3>';
								echo '<h3>' . $companyNameIsas[$index] . '</h3>';
								echo '<h3 style="text-align:end">' . $startDateIsas[$index] . ' to ' . $endDateIsas[$index] . '</h3>';
								echo '<p>' . $jobDescriptionIsas[$index] . '</p>';
								}	
							?>
							</div>


							<div class="job">
							<?php
								$jobTitleCons = $_POST['job-titleCons'];
								$categoryCons = $_POST['con-cats'];
								$companyNameCons = $_POST['company-nameCons'];
								$startDateCons = $_POST['start-dateCons'];
								$endDateCons = $_POST['end-dateCons'];
								$jobDescriptionCons = $_POST['job-descriptionCons'];

								foreach ($jobTitleCons as $index => $jobTitleCon) {
								echo '<h2>' . $jobTitleCon . '</h2>';
								echo '<h3>' . $categoryCon[$index] . '</h3>';
								echo '<h3>' . $companyNameCons[$index] . '</h3>';
								echo '<h3 style="text-align:end">' . $startDateCons[$index] . ' to ' . $endDateCons[$index] . '</h3>';
								echo '<p>' . $jobDescriptionCons[$index] . '</p>';
								}	
							?>
							</div>

						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Skills</h2>
						</div>
						<div class="yui-u">
							<h3><?php echo $skills?></h3>
							<!--<ul class="talent">
								<li>XHTML</li>
								<li>CSS</li>
								<li class="last">Javascript</li>
							</ul>-->
						</div>
					</div><!--// .yui-gf-->


					<?php
					$csv_values = $_POST['csv_values'];
					$values_array=explode(",", $csv_values);
						if(isset($_GET['values'])) {
						// Get the values passed as a query string parameter and decode it from JSON
						$values_array = json_decode(urldecode($_GET['values']));
						}
					?>

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Achievements</h2>
						</div>
						<ul >
							<?php foreach($values_array as $value) { ?>
								<li class="yui-u"><?php echo $value; ?></li>
							<?php } ?>
						</ul>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Hobbies</h2>
						</div>
						<div class="yui-u">
							<h3><?php echo $hobby?></h3>
						</div>
					</div><!--// .yui-gf-->

					<div class="yui-gf">
						<br><br><br>
						<div class="yui-u">
						<h2 style="text-align:end;">Signature</h2>
						</div>
					</div><!--// .yui-gf-->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->

	</div><!-- // inner -->


</div><!--// doc -->


</body>
</html>

