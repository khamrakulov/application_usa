<?php
require_once '../database/connection.php';

if (isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $birthday = $_POST['birthday'];
    $city_country = $_POST['country'];
    $phone_number = $_POST['tel'];
    $gpa = $_POST['gpa'];
    $english_test_scores = $_POST['english_test_scores'];
    $school = $_POST['school'];
    $grad = $_POST['grad'];
    $collage_list = $_POST['col_list'];
    $message = $_POST['message'];

    if (str_word_count($message) < 250){
//        $alert = '<div class="alert alert-danger" role="alert">
//  So\'zlar soni 250 tadan kam
//</div>';
        $_SESSION['xabar'] = "kam";
        header("Location: ../index.php#apply-now");
    }
    if (str_word_count($message) > 500){
        $_SESSION['xabar'] = "ko'p";
        header("Location: ../index.php#apply-now");
    }

    $insert_sql = "INSERT INTO users (first_name, last_name, email, birthday, city_country, phone_number, estimated_gpa, english_test_scores, high_school, date_of_graduation, collage_list, message)
                            VALUES ('$first_name', '$last_name', '$email', '$birthday', '$city_country', '$phone_number', '$gpa', '$english_test_scores', '$school', '$grad', '$collage_list', '$message')";
    $insert_result = $db->query($insert_sql);
    var_dump($insert_result);
    exit();
}


?>