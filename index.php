<?php
// Report simple running errors
error_reporting(E_ALL);
// Make sure they're on screen
ini_set('display_errors', 1);
// HTML formatted errors
ini_set("html_errors", 1);
?>
<?php 
include('inc/quiz.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Math Quiz: Addition</title>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <div id="quiz-box">
            <?php 
            if (!empty($toast)){
                echo "<p>" . $toast . "</p>";
            }
            if ($show_score == true){
                echo "<p>You got " 
                . $_SESSION['totalCorrect'] 
                . " of " 
                . $totalQuestions 
                . " correct!</p>";

            }
            ?>
            <p class="breadcrumbs">
            <?php 
            if (!$show_score){
            echo "Question " 
            . count($_SESSION['used_indexes'])
            . " of " 
            . $totalQuestions;
            } ?></p>

            <p class="quiz">
                                <?php 
                                if(count($_SESSION['used_indexes']) == 0){
                                    $question['leftAdder'] = '';
                                    $question['rightAdder'] = '';
                                    echo "Would you like to reset the Quiz ?";
                                } else {
                                    echo "What is " 
                                    . $question['leftAdder'] 
                                    . " + " 
                                    . $question['rightAdder'] 
                                    . " ?";
                                } ?> </p>
            <form action="index.php" method="post" <?php //echo $show_score ? 'style="display:none"' : 'style="display:block"'; ?>>
                <input type="hidden" name="index" value= <?php echo $index; ?> />
                <input <?php echo $show_score ? 'type="hidden"' : 'type="submit"'; ?> class="btn" name="answer" value= <?php echo $answers[0]; ?> />
                <input <?php echo $show_score ? 'type="hidden"' : 'type="submit"'; ?> class="btn" name="answer" value= <?php echo $answers[1]; ?> />
                <input <?php echo $show_score ? 'type="hidden"' : 'type="submit"'; ?> class="btn" name="answer" value= <?php echo $answers[2]; ?> />
                <input <?php echo $show_score ? 'type="submit"' : 'type="hidden"'; ?> class="btn" name="answer" value="Reset" />

            </form>
        </div>
    </div>
</body>
</html>