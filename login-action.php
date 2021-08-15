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

<?php
