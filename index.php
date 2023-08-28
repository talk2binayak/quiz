<?php
$jsonString = file_get_contents('data.json');

$data = json_decode($jsonString, true);

$quiz = $data['quiz'];

foreach ($quiz as $category => $questions) {
    echo "<h2>$category</h2>";

    foreach ($questions as $questionKey => $questionData) {
        $question = $questionData['question'];
        $options = $questionData['options'];
        $answer = $questionData['answer'];

        echo "<p><strong>Question ($questionKey):</strong> $question</p>";
        
        echo "<ul>";
        foreach ($options as $option) {
            echo "<li>$option</li>";
        }
        echo "</ul>";

        echo "<p><strong>Answer:</strong> $answer</p>";
    }
}
?>
