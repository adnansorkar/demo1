<?php
if (isset($_POST['numbers'])) {
    $input = $_POST['numbers'];
    $array = explode(',', $input);
    $numbers = [];

    foreach ($array as $item) {
        $trimmed = trim($item);
        if (is_numeric($trimmed)) {
            $numbers[] = (int)$trimmed;
        }
    }

    if (count($numbers) > 0) {
        sort($numbers);
        echo "সাজানো সংখ্যা: " . implode(', ', $numbers);
    } else {
        echo "দয়া করে শুধু সংখ্যা লিখো (কমা দিয়ে)। যেমন: 4, 7, 1";
    }
}
?>