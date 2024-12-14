<?php
    
    // Step 1: Create variables with different datatypes
    $integerVar = 42;                  // Integer
    $floatVar = 3.14;                  // Float
    $stringVar = "Hello, PHP!";        // String
    $booleanVar = true;                // Boolean
    $arrayVar = array(1, 2, 3, 4, 5);  // Array
    $nullVar = null;                   // NULL
    $objectVar = (object)[
        "name" => "John Doe",
        "age" => 30
    ]; // Object
    
    // Step 2: Print all variables using echo and print
    echo "Using echo:\n";
    echo "Integer: $integerVar\n";
    echo "Float: $floatVar\n";
    echo "String: $stringVar\n";
    echo "Boolean: " . ($booleanVar ? 'true' : 'false') . "\n";
    echo "NULL: $nullVar\n";
    
    echo "\nUsing print:\n";
    print "Integer: $integerVar\n";
    print "Float: $floatVar\n";
    print "String: $stringVar\n";
    print "Boolean: " . ($booleanVar ? 'true' : 'false') . "\n";
    print "NULL: $nullVar\n";
    
    echo "\n";
    
    // Step 3: Display contents of the array using print_r and var_dump
    echo "Using print_r to display the array:\n";
    print_r($arrayVar);
    
    echo "\n\nUsing var_dump to display the array:\n";
    var_dump($arrayVar);
    
    echo "\n\nUsing var_dump to display the object:\n";
    var_dump($objectVar);
    
    echo "\n\n";
    
    // Step 4: Check and display data types using gettype() and var_dump
    echo "Checking data types using gettype():\n";
    echo "Integer variable type: " . gettype($integerVar) . "\n";
    echo "Float variable type: " . gettype($floatVar) . "\n";
    echo "String variable type: " . gettype($stringVar) . "\n";
    echo "Boolean variable type: " . gettype($booleanVar) . "\n";
    echo "Array variable type: " . gettype($arrayVar) . "\n";
    echo "NULL variable type: " . gettype($nullVar) . "\n";
    echo "Object variable type: " . gettype($objectVar) . "\n";
    
    echo "\nChecking data types using var_dump():\n";
    var_dump($integerVar);
    var_dump($floatVar);
    var_dump($stringVar);
    var_dump($booleanVar);
    var_dump($arrayVar);
    var_dump($nullVar);
    var_dump($objectVar);
    
    
?>