<?php
function gen_one_to_three() {
    for ($i = 1; $i <= 3; $i++) {
        // Note that $i is preserved between yields.
        yield $i;
    }
}

$generator = gen_one_to_three();
foreach ($generator as $value) {
    echo "regular : ".$value , PHP_EOL;
    echo "With current function : ".$generator->current(),PHP_EOL;
}
?>