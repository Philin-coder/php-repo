<?php
function cleardata($data, $type='i')
{
switch($type)
{
case 'i':return $data*1; break;
case 's':return trim(strip_tags($data)); break;
}
}
$output="";
if($_SERVER['REQUEST_METHOD']=="POST")
{
$number1=cleardata($_POST['number1']);
$number2=cleardata($_POST['number2']);
$operator=cleardata($_POST['operator'],'s');
switch($operator)
{
case '+':$output .=$number1+$number2; break;
case '-':$output .=$number1-$number2; break;
case '*':$output .=$number1*$number2; break;
case'/':
if($number2==0)  
$output="Деление на ноль запрещается";
else 
$output.=$number1/$number2;
break;
default:$output="Неизвестный оператор '$operator'";
}
}
?> 
<form action="<?php $_SERVER['PHP_SELF']?>"method="post">
число 1:<br> 
<input type="text" name=number1><br>
оператор<br>  
<input type="text" name="operator" ><br>
число 2<br> 
<input type="text" name="number2"><br>
<input type="submit"  type="submit" value="считать">
</form>
<?php
if($output)
{
echo $output;
}

?>