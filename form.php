<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<!---<title> Responsive Registration Form | CodingLab </title>--->
	<link rel="stylesheet" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div class="container">
		<div class="title">Resume Builder</div>
		<div class="content">
			<form method="post" action="resumeDesign.php" enctype="multipart/form-data">
				<label for="name">Name:</label>
				<input type="text" id="name" name="name"><br><br>

				<label for="address">Address:</label>
				<input type="text" id="address" name="address"><br><br>

				<label for="phone">Phone:</label>
				<input type="tel" id="phone" name="phone"><br><br>

				<label for="email">Email:</label>
				<input type="email" id="email" name="email"><br><br>

				<label for="image">Profile Photo:</label>
				<input type="file" id="image" name="image"><br><br>

				<label for="empDet">Current Employer Detail:</label>
				<input type="text" id="empDet" name="empDet"><br><br>

				<label for="jdate">Joining Date:</label>
				<input type="date" id="jdate" name="jdate"><br><br>

				<label for="skills">Skills:</label>
				<input type="text" id="skills" name="skills"><br><br>

				<label for="skills">Objectives:</label>
				<input type="text" id="obj" name="obj" style="height:100px;width:500px;"><br><br>


				<h2>Education</h2>
				<div id="education-container"></div>
				<button class="button" type="button" id="add-education">Add More</button><br><br>

				<h2>Work Experience</h2>

				<h3>Statutory Audit:</h3>
				<div id="stat-audit-container"></div>
				<button class="button" type="button" id="add-stat">Add More</button><br><br>

				<h3>Internal Audit:</h3>
				<div id="internal-audit-container"></div>
				<button class="button" type="button" id="add-internal-audit">Add More</button><br><br>

				<h3>Informative System Audit:</h3>
				<div id="isa-container"></div>
				<button class="button" type="button" id="add-isa">Add More</button><br><br>

				<h3>Concurrent Audit:</h3>
				<div id="concurrent-container"></div>
				<button class="button" type="button" id="add-concurrent">Add More</button><br><br>

				<label for="achiv">Achievements:</label>
				<input type="text" id="csv_values" name="csv_values"><br><br>

				<label for="hobby">Hobbies:</label>
				<input type="text" id="hobby" name="hobby"><br><br>

				<input name="submit" id="submit" class="button" type="submit" value="Submit">
			</form>

			<?php
			if(isset($_POST['submit'])) {
			// Get the values from the form text field
			$csv_values = $_POST['csv_values'];
			
			// Split the comma-separated values into an array
			$values_array = explode(",", $csv_values);
			
			// Redirect to the next page and pass the values as a query string parameter
			header("Location: design.php?values=".urlencode(json_encode($values_array)));
			exit;
			}
			?>

			<script>
				//Education JS
				const educationContainer = document.getElementById("education-container");
				const addEducationButton = document.getElementById("add-education");
				let educationIndex = 0;

				addEducationButton.addEventListener("click", () => {
					const educationInputs = `
                <h3>Education ${educationIndex + 1}</h3>
                <label for="degree-${educationIndex}">College Name:</label>
                <input type="text" id="clg-${educationIndex}" name="clgs[]"><br>
                
                        <label for="company-name-${educationIndex}">Degree:</label>
                        <input type="text" id="degree-${educationIndex}" name="degrees[]"><br>
                
                        <label for="start-date-${educationIndex}">Start Date:</label>
                        <input type="date" id="start-dateEdu-${educationIndex}" name="start-dateEdus[]"><br>
                
                        <label for="end-date-${educationIndex}">End Date:</label>
                        <input type="date" id="end-dateEdu-${educationIndex}" name="end-dateEdus[]"><br>
                
                        <label for="job-description-${educationIndex}">Description:</label>
                        <textarea id="edu-description-${educationIndex}" name="edu-descriptions[]"></textarea><br>
                    `;

					const removeEducationButton = document.createElement("button");
					removeEducationButton.textContent = "Remove";
					removeEducationButton.addEventListener("click", () => {
						educationContainer.removeChild(Education);
						educationContainer.removeChild(removeEducationButton);
					});

					const Education = document.createElement("div");
					Education.innerHTML = educationInputs;
					educationContainer.appendChild(Education);
					educationContainer.appendChild(removeEducationButton);

					educationIndex++;
				});


				//Work Experience JS
				const statContainer = document.getElementById("stat-audit-container");
				const addStatButton = document.getElementById("add-stat");
				let statutoryAuditIndex = 0;

				addStatButton.addEventListener("click", () => {
					const statInputs = `
                <h3>Statutory Audit ${statutoryAuditIndex + 1}</h3>
				<label for="job-title-${statutoryAuditIndex}">Category:</label>
                <input type="text" id="job-title-${statutoryAuditIndex}" name="job-titles[]"><br>

                <label for="job-title-${statutoryAuditIndex}">Job Title:</label>
                <input type="text" id="stat-cat-${statutoryAuditIndex}" name="stat-cats[]"><br>
        
                <label for="company-name-${statutoryAuditIndex}">Company Name:</label>
                <input type="text" id="company-name-${statutoryAuditIndex}" name="company-names[]"><br>
        
                <label for="start-date-${statutoryAuditIndex}">Start Date:</label>
                <input type="date" id="start-date-${statutoryAuditIndex}" name="start-dates[]"><br>
        
                <label for="end-date-${statutoryAuditIndex}">End Date:</label>
                <input type="date" id="end-date-${statutoryAuditIndex}" name="end-dates[]"><br>
        
                <label for="job-description-${statutoryAuditIndex}">Job Description:</label>
                <textarea id="job-description-${statutoryAuditIndex}" name="job-descriptions[]"></textarea><br>
            `;

					const removeStatButton = document.createElement("button");
					removeStatButton.textContent = "Remove";
					removeStatButton.addEventListener("click", () => {
						statContainer.removeChild(statAudit);
						statContainer.removeChild(removeStatButton);
					});

					const statAudit = document.createElement("div");
					statAudit.innerHTML = statInputs;
					statContainer.appendChild(statAudit);
					statContainer.appendChild(removeStatButton);

					statutoryAuditIndex++;
				});

				//Work Experience JS
				const internalAuditContainer = document.getElementById("internal-audit-container");
				const addInternalButton = document.getElementById("add-internal-audit");
				let internalAuditIndex = 0;

				addInternalButton.addEventListener("click", () => {
					const internalInputs = `
                <h3>Internal Audit ${internalAuditIndex + 1}</h3>
                <label for="injob-title-${internalAuditIndex}">Category:</label>
                <input type="text" id="injob-title-${internalAuditIndex}" name="injob-titles[]"><br>

				<label for="job-title-${statutoryAuditIndex}">Job Title:</label>
                <input type="text" id="inter-cat-${statutoryAuditIndex}" name="inter-cats[]"><br>

                <label for="company-nameIn-${internalAuditIndex}">Company Name:</label>
                <input type="text" id="incompany-name-${internalAuditIndex}" name="incompany-names[]"><br>

                <label for="start-dateIn-${internalAuditIndex}">Start Date:</label>
                <input type="date" id="instart-date-${internalAuditIndex}" name="instart-dates[]"><br>

                <label for="end-dateIn-${internalAuditIndex}">End Date:</label>
                <input type="date" id="inend-date-${internalAuditIndex}" name="inend-dates[]"><br>

                <label for="job-descriptionIn-${internalAuditIndex}">Job Description:</label>
                <textarea id="injob-description-${internalAuditIndex}" name="injob-descriptions[]"></textarea><br>
                `;

					const removeInternalButton = document.createElement("button");
					removeInternalButton.textContent = "Remove";
					removeInternalButton.addEventListener("click", () => {
						internalAuditContainer.removeChild(internalAudit);
						internalAuditContainer.removeChild(removeInternalButton);
					});

					const internalAudit = document.createElement("div");
					internalAudit.innerHTML = internalInputs;
					internalAuditContainer.appendChild(internalAudit);
					internalAuditContainer.appendChild(removeInternalButton);

					internalAuditIndex++;
				});

				//Work Experience JS
				const isaAuditContainer = document.getElementById("isa-container");
				const addISAButton = document.getElementById("add-isa");
				let isaAuditIndex = 0;

				addISAButton.addEventListener("click", () => {
					const isaInputs = `
                <h3>Informative System Audit ${isaAuditIndex + 1}</h3>
                <label for="job-titleIsa-${isaAuditIndex}">Category:</label>
                <input type="text" id="job-titleIsa-${isaAuditIndex}" name="job-titleIsas[]"><br>

				<label for="job-title-${statutoryAuditIndex}">Job Title:</label>
                <input type="text" id="isa-cat-${statutoryAuditIndex}" name="isa-cats[]"><br>

                <label for="company-nameIsa-${isaAuditIndex}">Company Name:</label>
                <input type="text" id="company-nameIsa-${isaAuditIndex}" name="company-nameIsas[]"><br>

                <label for="start-dateIsa-${isaAuditIndex}">Start Date:</label>
                <input type="date" id="start-dateIsa-${isaAuditIndex}" name="start-dateIsas[]"><br>

                <label for="end-dateIsa-${isaAuditIndex}">End Date:</label>
                <input type="date" id="end-dateIsa-${isaAuditIndex}" name="end-dateIsas[]"><br>

                <label for="job-descriptionIsa-${isaAuditIndex}">Job Description:</label>
                <textarea id="job-descriptionIsa-${isaAuditIndex}" name="job-descriptionIsas[]"></textarea><br>
                `;

					const removeISAButton = document.createElement("button");
					removeISAButton.textContent = "Remove";
					removeISAButton.addEventListener("click", () => {
						isaAuditContainer.removeChild(isaAudit);
						isaAuditContainer.removeChild(removeISAButton);
					});

					const isaAudit = document.createElement("div");
					isaAudit.innerHTML = isaInputs;
					isaAuditContainer.appendChild(isaAudit);
					isaAuditContainer.appendChild(removeISAButton);

					isaAuditIndex++;
				});

				//Work Experience JS
				const concurrentContainer = document.getElementById("concurrent-container");
				const addConcurrentButton = document.getElementById("add-concurrent");
				let concurrentAuditIndex = 0;

				addConcurrentButton.addEventListener("click", () => {
					const concurrentInputs = `
                <h3>Concurrent Audit ${concurrentAuditIndex + 1}</h3>
                <label for="job-titleCon-${concurrentAuditIndex}">Category:</label>
                <input type="text" id="job-titleCon-${concurrentAuditIndex}" name="job-titleCons[]"><br>

				<label for="job-title-${statutoryAuditIndex}">Job Title:</label>
                <input type="text" id="con-cat-${statutoryAuditIndex}" name="con-cats[]"><br>

                <label for="company-nameCon-${concurrentAuditIndex}">Company Name:</label>
                <input type="text" id="company-nameCon-${concurrentAuditIndex}" name="company-nameCons[]"><br>

                <label for="start-dateCon-${concurrentAuditIndex}">Start Date:</label>
                <input type="date" id="start-dateCon-${concurrentAuditIndex}" name="start-dateCons[]"><br>

                <label for="end-dateCon-${concurrentAuditIndex}">End Date:</label>
                <input type="date" id="end-dateCon-${concurrentAuditIndex}" name="end-dateCons[]"><br>

                <label for="job-descriptionCon-${concurrentAuditIndex}">Job Description:</label>
                <textarea id="job-descriptionCon-${concurrentAuditIndex}" name="job-descriptionCons[]"></textarea><br>
                `;

					const removeConcurrentButton = document.createElement("button");
					removeConcurrentButton.textContent = "Remove";
					removeConcurrentButton.addEventListener("click", () => {
						concurrentContainer.removeChild(concurrentAudit);
						concurrentContainer.removeChild(removeConcurrentButton);
					});

					const concurrentAudit = document.createElement("div");
					concurrentAudit.innerHTML = concurrentInputs;
					concurrentContainer.appendChild(concurrentAudit);
					concurrentContainer.appendChild(removeConcurrentButton);

					concurrentAuditIndex++;
				});

			</script>

		</div>
	</div>


</body>

</html>