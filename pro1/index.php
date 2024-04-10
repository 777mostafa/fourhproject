<?php
    require_once 'Airthmetic.php';
?>
<html>
    <head>
        <title>title</title>
        <style type="text/css">
            *{margin:0; padding:0}
            input, label, select, textarea{
                display: block;
                margin: 5px;
            }
        </style>
    </head>
    <body>
        <?php
            if(isset($_POST['calculate'])){
                // collect data 
                $firstNumber = $_POST['firstNumber'];
                $operator = $_POST['operator'];
                $secondNumber = $_POST['secondNumber'];
                // check data valid or not 
                if($firstNumber == null){
                    echo "please insert the value of first number";
                }else if(!is_numeric($firstNumber)){
                    echo "the value of first number must be digits";
                }else if($secondNumber == null){
                    echo "please insert the value of second number";
                }else if(!is_numeric($secondNumber)){
                    echo "the value of second number must be digits";
                }else {
                    // operations 
                    switch($operator){
                        case '+':
                            // create operation object
                            $operation = new Airthmetic();
                            // call addition by operation object
                            $result = $operation->addition($firstNumber, $secondNumber);
                            break;
                        case '-':
                            // create operation object
                            $operation = new Airthmetic();
                            // call subtraction by operation object
                            $result =  $operation->subtraction($firstNumber, $secondNumber);
                            break;
                        case '*':
                            // create operation object
                            $operation = new Airthmetic();
                            // call multiplcation by operation object
                            $result = $operation->multiplcation($firstNumber, $secondNumber);
                            break;
                        case '/':
                            // create operation object
                            $operation = new Airthmetic();
                            // call division by operation object
                            $result = $operation->division($firstNumber, $secondNumber);
                            break;
                        default:
                            $result = "invalid operator";
                    }
                    // output 
                    echo $result;
                }
            }
        ?>
        <form action="" method="POST">
            <label>first number</label>
            <input type="text" name="firstNumber" />
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <label>second number</label>
            <input type="text" name="secondNumber" />
            <input type="submit" name="calculate" value="calculate"/>
        </form>
    </body>
</html>
