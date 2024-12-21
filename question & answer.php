<?php
$questions = [
    ['question' => 'What is 2 + 2?', 'correct' => '4'],
    ['question' => 'What is the capital of France?', 'correct' => 'Paris'],
    ['question' => 'Who worte "Hamlet"?', 'correct' => 'Shakespeare'],
];

$answers = [];
foreach ($questions as $index => $question){
    echo ($index+1). ". " . $question['question']. "\n";
    $answers[] = trim(readline("Your answer: "));
}

//Evalute Funtion

function evaluateQuiz(array $questions, array $answers): int{
    $score = 0;
    foreach($questions as $index => $question){
        if($answers [$index] === $question['correct']){
            $score++;
        }

    }
    return $score;
} 
//Calculate Score

$score = evaluateQuiz($questions, $answers);
echo "\n Your scored $score our of " . count($questions). ".\n";


if($score === count($questions)){
    echo "Excellent Job! \n";
}elseif($score >1){
    echo "Good Effort! \n";
}
else{
    echo "Better luck next time! \n";
}



?>
