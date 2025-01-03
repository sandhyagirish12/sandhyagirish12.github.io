<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Search</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">  
  </head>
  <body>
    <header>
        <h1>AY Tech Placement Tracking System</h1>
      </header>
      <nav>
    <ul>
      <li><a href="https://www.aytech.co.in/">
        <img src="ay.jpg" alt="Example" style="width:50px;height:50px;" style="position: absolute; top: 0; left: 0;">
      </a></li>
      <li><a href="home.php">Home</a></li>
      <li><a href="index.php">Placement Tracking</a></li>
      <li><a href="#">My Account</a></li>
      <div class="dropdown">
      <button class="dropbtn">Manage</button>
    <div class="dropdown-content">
      <a href="jobtitle.php">Job Title</a>
      <a href="organisation.php">Organisation</a>
      </div>
      <li><a href="landingpage.php">Go Back</a></li>
    </ul>
  </nav>
    <div  class="container">
	<form>
		<label for="name">Candidate Name:</label><br>
		<input type="text"placeholder="Enter Candidate Name" id="name" name="name"><br><br>
		
		<label for="email">Email Address:</label><br>
		<input type="email"placeholder="Enter your email" id="email" name="email"><br><br>
		
		<label for="contact">Contact Number:</label><br>
		<input type="tel"placeholder="Enter Contact Number" id="contact" name="contact"><br><br>
		
		<label for="cv">Link to CV:</label><br>
		<button class="browse-button">Browse CV</button><br><br>
		
		<label for="jobtitle">Select Job Title:</label><br>
		<select id="jobtitle" name="jobtitle">
			<option value="">Select</option>
			<option value="Full Stack Developer">Full Stack Developer</option>
			<option value="Tester">Tester</option>
			<option value="Mern Stack Developer">Mern Stack Developer</option>
			<!-- Add more options as needed -->
		</select><br><br>
		
		<label for="organization">Select Organization:</label><br>
		<select id="organization" name="organization">
			<option value="">Select</option>
			<option value="IBM">IBM</option>
			<option value="UST">UST</option>
			<option value="TCS">TCS</option>
			<!-- Add more options as needed -->
		</select><br><br>
		
		<button type="submit">Link to Job</button>
</div>
	</form>
  </body>
  <script src="browse.js"></script>
</html>
