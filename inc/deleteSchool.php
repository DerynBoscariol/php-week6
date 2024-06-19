<?php
require('../reusable/con.php');  //require() won't let the rest of the code run without the resource, include() will try to run it anyways
include('functions.php');
if(isset($_GET['deleteSchool'])){
    $id = $_GET['id'];
    $query = "DELETE FROM schools WHERE `id` = '$id'"; // id in backticks variable $id in single quotes
    $school = mysqli_query($connect,$query);

    if($school){ //if $school was successfull stays on index
        set_message('School was deleted successfully!', 'danger');
        header('Location: ../index.php');
    } else {
        echo "Failed: " . mysqli_error($connect);
    }

} else {
    echo "Not Authorized";
}