<?php
    // include '../config/config.php';
    require '../carbondate/autoload.php';
    use Carbon\Carbon;
    use Carbon\CarbonInterval;

    printf("Now: %s", Carbon::now('Asia/Ho_Chi_Minh'));

    