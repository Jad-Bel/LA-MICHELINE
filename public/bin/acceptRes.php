<?php
    require "/laragon/www/LA-MICHELINE/public/bin/connect.php";

    if (isset($_GET['reserv_id'])) {
        $reservId = intval($_GET['reserv_id']);

        $AccRes_sql = "UPDATE reservation SET `status` = 1 WHERE reserv_id = $reservId";

        if ($connect->query($AccRes_sql)) {
            header("location: ../reservationAdmin.php");
            exit;
        } else {
            echo "Error accepring reservation" . $connect->error;
        }
    }
?>