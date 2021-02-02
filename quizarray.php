<?php
$quesarray = array(
    "0" => array(
        "ques" => "Ques 1. Which has block level scope ?",
        "op1" => "var",
        "op2" => "let",
        "op3" => "const",
        "op4" => "none",
        "correct" => "op1"
    ),
    "1" => array(
        "ques" => " Ques 2. What is full form of PHP ?",
        "op1" => "Preprocessor HyperText",
        "op2" => "Personal home page",
        "op3" => "Pay house Payment",
        "op4" => "none",
        "correct" => "op1"
    ),
    "2" => array(
        "ques" => "Ques 3. PHP files have a default file extension of ?",
        "op1" => ".html",
        "op2" => ".css",
        "op3" => ".php",
        "op4" => ".js",
        "correct" => "op3"
    ),
    "3" => array(
        "ques" => "Ques 4. What of the following function is used to get the length of string ?",
        "op1" => "length()",
        "op2" => "str.length",
        "op3" => 'str.concat()',
        "op4" => "str.rev()",
        "correct" => "op2"
    ),
    "4" => array(
        "ques" => "Ques 5. How should we add a single line comment in our PHP code?",
        "op1" => "/?",
        "op2" => "//",
        "op3" => "/**/",
        "op4" => "/",
        "correct" => "op2"
    ),
    "5" => array(
        "ques" => "Ques 6. whis of the foolowing is  the conditional loop?",
        "op1" => "for",
        "op2" => "ifelse",
        "op3" => "Switch",
        "op4" => "function",
        "correct" => "op1"
    ),
    "6" => array(
        "ques" => "Ques 7. HP is an example of ___________ scripting language.",
        "op1" => "Server-side",
        "op2" => "Browser-side",
        "op3" => "client-side",
        "op4" => "in-side",
        "correct" => "op1"
    ),
    "7" => array(
        "ques" => "Ques 8. Which of the following variables is not a predefined variable?",
        "op1" => "post",
        "op2" => "get",
        "op3" => "ask",
        "op4" => "request",
        "correct" => "op3"
    ),
    "8" => array(
        "ques" => "Ques 9. In PHP, arrays may be sorted with which of the following functions?",
        "op1" => "arsort()",
        "op2" => "ksort()",
        "op3" => "uksort()",
        "op4" => "rsort()",
        "correct" => "op3"
    ),
    "9" => array(
        "ques" => 'Ques 10. How do you write "Hello World" in PHP?',
        "op1" => '"Hello World";',
        "op2" => 'echo "Hello World";',
        "op3" => 'Document.Write("Hello World");',
        "op4" => 'Response.write("Hello world");',
        "correct" => "op2"
    )
);
echo "<form  action = 'quizarray.php' method = 'POST'>";
foreach ($quesarray as $key1 => $value1) {
    echo "<h1>" . $value1['ques'] . "</h1>";
    foreach ($value1 as $key2 => $value2) {
        if ($key2 != "correct"  && $key2 != "ques") {
            echo '<input type = "radio" name = "option' . ($key1 + 1) . '" value = ' . $key2 . '>' . $value2 . "<br>";
        }
    }
}


echo "<br>";
echo "<input type = 'submit' Value = 'SUBMIT' name = 'done'>";
echo "</form>";
?>

<?php
if (isset($_POST['done'])) {
    $marks = 0;
    
    foreach ($quesarray as $key1 => $value1) {

        if (isset($_POST['option' . ($key1 + 1)])) {
            if ($_POST['option' . ($key1 + 1)] == $value1['correct']) {
                $marks++;
            }
        }
    }
    echo $marks . " marks out of 10";
}

?>