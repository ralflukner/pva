<?php
namespace Phppot;

if(!empty($_POST["login"])) {
    session_start();
    $username = filter_var($_POST["user_name"], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING);
    require_once (__DIR__ . "./class/Member.php");

    $user = new Member();
    $isLoggedIn = $user->processLogin($username, $password);
    if (! $isLoggedIn) {
        $_SESSION["errorMessage"] = "Invalid username or password";
    }
    header("Location: ./index.php");
    exit();
}

?>
<script>
    function validate() {
        let $valid = true;
        document.getElementById("user_info").innerHTML = "";
        document.getElementById("password_info").innerHTML = "";

        let userName = document.getElementById("user_name").value;
        let password = document.getElementById("password").value;

        if(userName === "")
        {
            document.getElementById("user_info").innerHTML = "required";
            $valid = false;
        }

        if(password === "")
        {
            document.getElementById("password_info").innerHTML = "required";
            $valid = false;
        }

        return $valid;
    }
</script>

