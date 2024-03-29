<!DOCTYPE html>
<html>
    <head>
        <title>Dulce's Resume Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        

        <link rel="stylesheet" href="style.css">
    </head>
    <body class="body1">
       <!-- Navigation Bar -->

       <nav class=" nav navbar navbar-expand-lg navbar-light bg-light sticky">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <img src="/CA401639-84E8-4B1E-8624-E48451CA74D2.jpg" alt="logo" height="75" class="d-inline-block align-text-top">
   
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="About.html">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Portfolio.html">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="contact.html">Contact</a>
            </ul>
          </div>
        </div>
      </nav>

      <br>
      <br>
        <div>
            <h1 class="headings">Contact Me</h1>
            </div><br>

            <?php
		$name = $email = $contBack = $comment = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$name = cleanInput($_POST["name"]);
			$email = cleanInput($_POST["email"]);
			$contBack = cleanInput($_POST["contact-back"]);
			$comment = cleanInput($_POST["comments"]);
		}

        function cleanInput($data) {
			//POSSIBLE SOLUTION FOR STEP 2
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			//SOLUTION FOR STEP 3
			return $data;
		}
	?>

       
            
 <div>
 <form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?> method="POST">
<form style="text-align: center;" >
    <label>Name:</label>
    <input type="text" name="name"> <br><br>

<label>Email:</label>
<input required type="email" name="email"><br><br>

<label for ="Comments">Comments:</label><br>
    <textarea id="comments"
            name="comments"
            cols="40"
            rows="4"
            maxlengt="250"></textarea>
       
        <br><br>

        May I contact you back?<br>
        <br>

        <input type="radio" id="Yes" name="Contactback">
        <label for ="yes">Yes</label>
        <input type="radio" id="No" name="Contactback">
        <label for ="no">No</label><br>
<br>
        <div>

           <input type ="submit" value="Submit">

        </div>
        <?php if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>
	
	<section id="results" style="background-color: lightsteelblue;">
		<div class="container py-2" >
			<div class="row ">
				<h1>Form Entries:</h1>
			</div>
			<div class="row">				
				<ul>
					<?php
					if ($name !== "") { echo "<li>NAME: $name </li>"; } 
					if ($email !== "") { echo "<li>EMAIL: $email </li>"; }
					if ($contBack !== "") { echo "<li>CONTACT BACK: $contBack </li>"; }
					if ($comment !== "") { echo "<li>COMMENT: $comment </li>"; }
					?>
				</ul>		
			</div>
		</div>
</form>
<?php } ?>
</div>

<br>
<br>
<br>
<div style="text-align: center;">
  <button onclick="popUp()">Click Me</button>
  <script>
    function popUp() {
      let person = prompt("Please enter your name");

      let greeting = "Hello ";

      alert(greeting + person + "!" + "\nThank you for visiting my website.");


try {
  prompt("Welcome guest!");
}
catch(err) {
  document.getElementById("demo").innerHTML = err.message;
}
    }
  </script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>