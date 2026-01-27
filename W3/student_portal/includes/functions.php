<?php
function isItDaniella($user,$pass){
    $admin_user = "daniella@pmu.my";
    $admin_pass = "1234";

    return($user===$admin_user&&$pass===$admin_pass);
}

function getStatus($grade) {
 if ($grade >= 50) {
 return "Pass";
 } else {
 return "Fail";
 }
}

?>