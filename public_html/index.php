<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="css/style.css"/>
		<script src="app.js"></script>
		<script src="controller.js"></script>
		<script src="js/custom.js"></script>

	</head>
	<main>
		<div class="page">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h1 class="theHeader">Jacob Findley</h1>
					</div>
				</div><!-- class="row", the first row-->
				<div class="row">
					<div class="col-md-6 col-sm-12">
						<img src="jfindleyMobilePage.svg" class="img-responsive">
					</div><!-- class="mol-md-6", the first column in the second row-->
					<div class="col-md-6 col-sm-12">
						<div class="foo">
							<h2>About Me/Credentials</h2>
							<h3>Who I Am:</h3>
							<p>
								My name is Jacob Findley, a student focused on computer science. I am working towards a career in Technical Writing, taking advantage of my natural talents in both computer languages and the English one. I hope to one day work for the government.<br/>
							</p>
							<h3>Skills:</h3>
							<p>
								Computer Languages: Java, C++, PHP, HTML, mySQL, Linux.<br/>
								Knowledgeable in Object Oriented Programming and Data Design.<br/>
								Proficiency in both front-end and back-end.<br/>
								I am rather talented in writing, both technical and literary<br/>
								Critical thinking<br/>
							</p>
						</div>
						<div class="foo">
							<h2>Projects I've Worked On</h2>
							<p>
								Jpegery.com, an image hosting site
							</p>
						</div>
						<div class="foo">
							<h2>Contact Information</h2>
							<p>
								Email: jacobmfindley@icloud.com
							</p>
							<form name="form" id="form" action="email.php">
								<div class="form-group">
									<div class="input-group">
										<input type="text" id="email" name="email" class="form-control" ng-minlength="4" maxlength="1000" ng-maxlength="1000" ng-required="true" placeholder="Email"/>
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<input type="text" id="emailContent" name="emailContent" class="form-control" ng-minlength="3" maxlength="10000" ng-maxlength="10000" ng-required="true" placeholder="What do you want to say?"
									</div>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
							<div id="output-area"></div>
						</div>
					</div><!-- class="col-md-6", the second column in the second row-->
				</div> <!-- class="row", the second row-->
			</div> <!--class="container" -->
		</div>

	</main>
</html>
