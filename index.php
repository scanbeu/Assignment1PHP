<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Grade Portal</title>
	<meta name="description" content="Submit student information for grading">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style.css">
	
</head>
<body>
	<section style="margin-top: 0px;" class="masthead">
		<div>
			<h1 >GRADE PORTAL</h1>
		</div>
	</section>
	<main style="margin-top: -200px;"class="container">
		<section  class="form-row row justify-content-center">
			<form method="post" action="database.php">
			<h2 class="mb-3" >STUDENT INFO</h2>
				<div class="form-group">
					<label for="idstudent">Student id</label>
					<input type="text" name="idstudent" id="idstudent" class="form-control">
				</div>
				<div class="form-group">
					<label for="fname">First Name</label>
					<input type="text" name="fname" id="fname" class="form-control">
				</div>
				<div class="form-group">
					<label for="lname">Last Name</label>
					<input type="text" name="lname" id="lname" class="form-control">
				</div>
				<div class="form-group">
					<label for="grade">Grade</label>
					<input type="text" name="grade" id="grade" class="form-control">
				</div>
				<div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
				<div style="text-align: center; margin-top: 20px;">
        			<a href="display.php" class="btn btn-secondary">View Student Data</a>
    			</div>
			</form>
		</section>
	</main>
</body>
</html>
