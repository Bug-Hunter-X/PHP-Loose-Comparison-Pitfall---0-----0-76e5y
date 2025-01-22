# PHP Loose Comparison Pitfall

This repository demonstrates a common, yet subtle, error in PHP related to loose comparison of strings and integers.  The loose comparison operator (`==`) in PHP performs type juggling, leading to unexpected results in certain cases.  The strict comparison operator (`===`) should be preferred for better predictability and to avoid such pitfalls.

The `bug.php` file contains the erroneous code, and `bugSolution.php` provides the corrected version using strict comparison.

## How to Reproduce

1. Clone this repository.
2. Run `bug.php` using a PHP interpreter.
3. Observe the output and compare it to the expected output in `bugSolution.php`

## Solution

Always use the strict comparison operator (`===`) when comparing values in PHP to avoid unintended type coercion and ensure precise comparisons.