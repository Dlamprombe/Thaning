first = $_POST['first'] + 0;//a small "hack" to make sure its an int but allow negs!!
$second= $_POST['second'] + 0;
$operator = $_POST["group1"];
switch($operator)
{
    case "add"
    echo "Answer is
