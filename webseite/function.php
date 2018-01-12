<?php 
function connection_ok($mysqli) {
    if ($mysqli->connect_errno) {
        return false;
    }
    else {
        return true;
    }
}
function is_auth($mysqli, $user, $pass) {

    print("Hallo Welt");
    if($result = $mysqli->query("SELECT PW FROM tbluser WHERE username = '$user' LIMIT 1;")) {
        $row = mysqli_fetch_array($result);
        if (password_verify($pass, $row['PW'])) {
            return true;
        }
        else {
            return false;
        }
    }
    else {
        return false;
        echo"select statement";
    }
    return false;
}
?>