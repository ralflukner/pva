<?php
if(isset($_SESSION["errorMessage"])){
    echo <<< _END
       <div class="error-message">
    _END;
    echo $_SESSION["errorMessage"];
}


