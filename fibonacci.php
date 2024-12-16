<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n = intval($_POST['n']);

    function fibonacci($n) {
        $sequence = [0, 1];
        for ($i = 2; $i < $n; $i++) {
            $sequence[] = $sequence[$i - 1] + $sequence[$i - 2];
        }
        return $sequence;
    }

    $result = fibonacci($n);
    echo json_encode($result);
    exit;
}
?>
