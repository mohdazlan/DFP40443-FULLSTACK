<?php include 'includes/header.php'; ?>
<?php
require 'includes/functions.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $student_grade = $_POST['grade'];

    if(getStatus($student_grade) == "Pass") {
echo "Work Smart";
    } else {
echo "Work Not Yet Smart";
    }
}
?>
<h2>Welcome to The Student Portal</h2>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin placerat dolor a vulputate sodales. Maecenas ut urna vel dolor laoreet commodo. Etiam sed molestie nunc. Suspendisse aliquam nulla quis fermentum placerat. Morbi vitae velit tortor. Duis condimentum massa nisi, ac vestibulum massa venenatis ut. Nam in maximus ligula.</p>

<a href="login.php">Go to login page</a>
<form action="" method="post">
     <input type="number" name="grade" ><br><br>
 <input type="submit" value="Check">
</form>


<?php include 'includes/footer.php'; ?>