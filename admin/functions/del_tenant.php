<?php
require_once "db.php";

if (isset($_POST["deleteTenant"])) {
    // Collecting data
    $tenid = $_POST["tenID"];
    $numberOfRooms = (int)$_POST["num"]; // Ensure $numberOfRooms is an integer
    $roomId = $_POST['hsID'];
    $hsState = $_POST["state"];

    if ($numberOfRooms == 0) {
        // Set house status to 'Vacant' since there will be a free renting unit
        $hsState = 'Vacant';
    }
    // Increment number of rooms by 1
    $numberOfRooms++;

    // Prepare and execute the queries
    $mysqli->autocommit(FALSE);
    $status = true;

    // Query to update houses
    $sq_houses = "UPDATE `houses` SET `number_of_rooms`=?, `house_status`=? WHERE `houseID`=?";
    $stmt_houses = $mysqli->prepare($sq_houses);
    if (!$stmt_houses) {
        $status = false;
    } else {
        $stmt_houses->bind_param("iss", $numberOfRooms, $hsState, $roomId);
        $stmt_houses->execute();
        if ($stmt_houses->errno) {
            $status = false;
        }
    }

    // Query to remove tenant
    $sq_tenants = "DELETE FROM `tenants` WHERE `tenantID`=?";
    $stmt_tenants = $mysqli->prepare($sq_tenants);
    if (!$stmt_tenants) {
        $status = false;
    } else {
        $stmt_tenants->bind_param("i", $tenid);
        $stmt_tenants->execute();
        if ($stmt_tenants->errno) {
            $status = false;
        }
    }

    if ($status) {
        // Successful, commit changes
        $mysqli->commit();
        // Redirect to index and report success
        header('Location:../tenants.php?deleted');
    } else {
        // Rollback changes
        $mysqli->rollback();
        // Redirect back to page with error state
        header('Location:../tenants.php?del_error');
    }
} else {
    header('Location:../tenants.php?del_error');
}
?>
