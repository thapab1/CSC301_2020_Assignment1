<?php
$name = 'Babita Thapa';
$bio = "I'm originally from Nepal, a small country surrounded by India and china, located in Asia continent. My family is back there in Nepal. There are four members in my 
family: my dad, mom and younger brother. I'm the first child of my family and I'm away from home, away from family.  <br/>
    I'm an International student at NKU, majoring in Computer Science. I'm a junior. I will be graduated on May 2021. My dream job is to work as a software developer. 
My major courses this semester are CSC 402, CSC 301, Mat 375, and CIT 371. <br/>
    I have a little experience in HTML and Java Script. The main reason to enrolled in this class is to learn PHP and become more confident in web programming.";
$major ='Computer Science';
$yearOfSchool = 'Junior';
$graduationYear = 'Graduation on May, 2021';
$hobbies = "My hobbies are to watch movies, listen to music, and eat. ";
$email = 'thapab1@nku.edu';
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>My First PHP page</title>
  </head>
  <body
  <div class="jumbotron">
  <h1 class="display-4">
  <?php echo $name; ?> </h1>
  <p><img src="BabitaThapa.jpeg"  alt="Babita Thapa" style="width:450px; height=200px"/></p>
	<ul><li><p class="lead"><?php echo $major; ?></p></li>
	<li><p class="lead"><?php echo $yearOfSchool; ?></p></li>
	<li><p class="lead"><?php echo $graduationYear; ?></p></li>
	<li><p class="lead"><?php echo $hobbies; ?></p></li>
	</ul>
  <hr class="my-4">
  <p> <?php echo $bio; ?> </p>
  <a class="btn btn-primary btn-lg" href="mailto:thapab1@nku.edu" role="button">You can email me at thapab1@nku.edu</a>
</div>
   

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>