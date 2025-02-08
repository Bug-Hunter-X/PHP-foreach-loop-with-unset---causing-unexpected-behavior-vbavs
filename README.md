# PHP foreach loop with unset() causing unexpected behavior
This repository demonstrates an uncommon bug in PHP related to using `unset()` within a `foreach` loop when iterating over an array.  Modifying the array during iteration can lead to unexpected results and skipped elements. The `bug.php` file contains the buggy code, and `bugSolution.php` provides a corrected version. The bug is caused by the interaction between `unset()` and the internal pointer of the `foreach` loop. When you use `unset()` to remove an element from the array, the internal pointer may skip over the next element, leading to unexpected behavior. 

## How to Reproduce
1. Clone this repository.
2. Run `bug.php`.
3. Observe the unexpected output (not all 'someValue' elements are removed).
4. Run `bugSolution.php` to see the corrected output.