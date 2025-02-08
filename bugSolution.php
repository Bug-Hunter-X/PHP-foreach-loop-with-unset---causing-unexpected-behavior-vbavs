function foo(array $arr) : array {
  $newArr = [];
  foreach ($arr as $key => $value) {
    if ($value !== 'someValue') {
      $newArr[] = $value;
    }
  }
  return $newArr;
}

$arr = ['a', 'someValue', 'b', 'someValue'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => a [1] => b )

//Solution: Create a new array and populate it with elements to keep.
//This avoids modifying the array while iterating through it.
//This approach eliminates the unexpected skipping of elements.
