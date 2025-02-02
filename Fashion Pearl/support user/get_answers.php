
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "user";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$question = isset($_POST['question']) ? $_POST['question'] : '';
$question = strtolower(trim($question));

if (!empty($question)) {
    $sql = "SELECT answer FROM questions_answers WHERE LOCATE(question_keywords, ?) > 0 LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $question);
    $stmt->execute();
    $stmt->bind_result($answer);

    if ($stmt->fetch()) {
        echo $answer;
    } else {
        echo "Sorry, I don't have an answer for that yet.";
    }

    $stmt->close();
} else {
    echo "Please ask a valid question.";
}

$conn->close();
?>
