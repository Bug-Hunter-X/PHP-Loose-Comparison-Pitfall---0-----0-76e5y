The solution is to always use the strict comparison operator (`===`) when comparing values in PHP unless type juggling is explicitly desired.  This ensures that both the value and the type are compared, eliminating the ambiguity caused by loose comparison.

```php
<?php
$stringZero = '0';
$intZero = 0;

if ($stringZero === $intZero) {
  echo "Values are equal using ===\n";
} else {
  echo "Values are NOT equal using ===\n";
}
?>
```
This revised code will correctly identify that the string '0' and the integer 0 are not strictly equal.