   
<?php
echo "KENNY'S DEMO CALCULATOR\n";
echo "-----------------------\n";
echo "Enter the first number: \n";
$firstValue = readline();

// Assignment Q1a - Mask input to accept numbers only (first input)
if (is_numeric($firstValue)){
    print_r("Enter the operator: \n");
    $operatorArray = ["+", "-", "*", "/"];
    $operator = readline();
    if (in_array($operator, $operatorArray));
        print_r("Enter the second number: \n");
        $secondValue = readline();
        // Assignment Q1b - Mask input to accept numbers only (second input)
        if (is_numeric($secondValue)){
            switch ($operator){
                case $operatorArray[0]:
                    echo $firstValue + $secondValue;
                    break;
                case $operatorArray[1]:
                    echo $firstValue - $secondValue;
                    break;
                case $operatorArray[2]:
                    echo $firstValue * $secondValue;
                    break;
                // Assignment Q2 - Complete the code for division
                case $operatorArray[3]:
                    // Assignment Q3 - Prevent division by 0 (undefined)
                    if ($secondValue == 0){
                        print_r("When divided, the result will be undefined");
                    }
                    else{
                        echo $firstValue / $secondValue;
                    }
                    break;
                    
            }
    } 
    else{
    print_r("Invalid operator\n");  
    }
} 
else{
print_r("Invalid input\n");  
}

?>