<?php
require_once 'config/app_config.php';
require_once 'includes/header.php';

$questions=[
    ['question' => 'What does PHP stands for', 'answer'=> 'Hypertext Preprocessoe'],
    ['question' => 'What does HTML stands for', 'answer'=> 'Hypertext'],
    ['question' => 'What does CSS stands for', 'answer'=> 'CSS']
];


if(!isset($_SESSION['soalanSemasa'])){
    $_SESSION['soalanSemasa'] = 0;
    $_SESSION['score'] = 0;
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $userAnswer = $_POST['answer'];
    $currentQ = $_SESSION['soalanSemasa'];

    $correctAnswer = $questions[$currentQ]['answer'];

    if(strcasecmp($userAnswer,$correctAnswer) === 0){
          $_SESSION['score']++;
    }

    $_SESSION['soalanSemasa']++;

    if( $_SESSION['soalanSemasa'] >= count($questions)){
        header('Location: result.php');
        exit;
    }

 header('Location: quiz.php');
 exit;
}

$currentIndex = $_SESSION['soalanSemasa'];

$currentQuestion = $questions[$currentIndex];

?>
User:<?php echo htmlspecialchars($_SESSION['username']); ?><br>
Score:<?php echo $_SESSION['score'];?>
<br><br>
<?php echo $currentQuestion['question'] ?>
<form action="quiz.php" method="POST">
Your answer
<input type="text" name="answer">
<input type="submit" value="submit">
</form>

<?php
require_once 'includes/footer.php';
?>