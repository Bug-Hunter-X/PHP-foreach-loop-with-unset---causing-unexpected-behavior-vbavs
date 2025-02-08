function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'someValue') {
      unset($arr[$key]);
    }
  }
  return $arr; 
}

$arr = ['a', 'someValue', 'b', 'someValue'];
$result = foo($arr);
print_r($result); //Output: Array ( [0] => a [2] => b )

//The error occurs when you try to modify an array while iterating through it using foreach.
//unset($arr[$key]) modifies the array and this can cause unexpected behavior.
//In this example, the second 'someValue' will not be unset because of this.
