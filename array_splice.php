<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using array_splice()</title>
    <link rel="stylesheet" href="common.css"/>
    <style>
        h2, pre {
            margin: 1px;
        }
        table {
            margin: 0;
            border-collapse: collapse;
            width: 100%;
        }
        th{
            text-align: left;
        }
        th, td {
            text-align: left;
            padding: 4px;
            vertical-align: top;
            border: 1px solid gray;
        }
    </style>
</head>
<body>
    <h1>Using array_splice()</h1>

    <?php 
    $headingStart = '<tr><th colspan="4"><h2>';
    $headingEnd = '</h2></th></tr>';
    $rowStart = '<tr><td><pre>';
    $nextCell = '</pre></td><td><pre>';
    $rowEnd = '</pre></td></tr>';

    echo '<table cellpadding="0" cellspacing="0"><tr><th>Original Array</th><th>Removed</th><th>Added</th><th>New Array</th></tr>';

    echo "{$headingStart}1. Adding two new elements to the middle{$headingEnd}";

    $authors = array("Steinbeck", "Kafka", "Tolkien");
    $arrayToAdd = array("Melville", "Hardy");
    echo $rowStart;
    print_r($authors);
    echo $nextCell;
    print_r(array_splice($authors, 2, 0, $arrayToAdd));
    echo $nextCell;
    print_r($arrayToAdd);
    echo $nextCell;
    print_r($authors);
    echo $rowEnd;
    echo "{$headingStart}2. Replacing two elements with a new element {$headingEnd}";

    $authors = array("Steinbeck", "Kafka", "Tolkien");
    $arrayToAdd = array("Bronte");
    echo $rowStart;
    print_r($authors);
    echo $nextCell;
    print_r(array_splice($authors, 0, 2, $arrayToAdd));
    echo $nextCell;
    print_r($arrayToAdd);
    echo $nextCell;
    print_r($authors);
    echo $rowEnd;

    echo "{$headingStart}3. Removing last two elements{$headingEnd}";

    $authors = array("Steinbeck", "Kafka", "Tolkien");
    echo $rowStart;
    print_r($authors);
    echo $nextCell;
    print_r(array_splice($authors, 1));
    echo $nextCell;
    echo "Nothing";
    echo $nextCell;
    print_r($authors);
    echo $rowEnd;

    echo "{$headingStart}4. Inserting a string instead of an array{$headingEnd}";

    $authors = array("Steinbeck", "Kafka", "Tolkien");
    echo $rowStart;
    print_r($authors);
    echo $nextCell;
    print_r(array_splice($authors, 1, 0, "Orwell"));
    echo $nextCell;
    echo "Orwell";
    echo $nextCell;
    print_r($authors);
    echo $rowEnd;

    echo '</table>';
    
    
    ?>
</body>
</html>