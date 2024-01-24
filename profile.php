<?php
declare(strict_types=1);

$startTime = time();

while (true) {
    if ((time() - $startTime) >= 600) {
        break;
    }

    echo 'pew' . PHP_EOL;

    usleep(100000); // 100 ms delay to avoid CPU overload
}
