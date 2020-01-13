<?php
$stdin = fopen('php://stdin', 'r');
$n = -1;
$num = 0;
$array = [];

while ($n < 0 || !is_int($n)) {
  echo 'Enter a nonnegative integer ';
  $n = intval(trim(fgets($stdin)));
}

function fibonacci($n) {
  if ($n === 0) {
    return 0;
  } else if ($n === 1) {
    return 1;
  } else {
    return fibonacci($n - 1) + fibonacci($n - 2);
  }
}

for ($i = 0; $i <= $n; $i++) {
  array_push($array, fibonacci($i));
}

echo implode(', ', $array) . "\n";