<?php
function printTable($result)
{
    while ($row = $result->fetch_assoc()) {
        foreach ($row as $key) {
            $id = $row['id'];
            $first_name = $row['first_name'];
            $last_name = $row['last_name'];
            $email = $row['email'];
            $phone_number = $row['phone_number'];
            $birthday = $row['birthday'];
            $city_country = $row['city_country'];
            $estimated_gpa = $row['estimated_gpa'];
            $english_test_scores = $row['english_test_scores'];
            $high_school = $row['high_school'];
            $date_of_graduation = $row['date_of_graduation'];
            $collage_list = $row['collage_list'];
            $message = $row['message'];
            $is_viewed = $row['is_viewed'];

            $is_viewed_btn = ($is_viewed == 1) ? "btn btn-success btn-primary" : "btn btn-sm btn-primary";
            $is_viewed_txt = ($is_viewed == 1) ? "Ko'rilgan" : "Ko'rilmagan";

            $content = "<tr>
                                        <td>$id</td>
                                        <td>$first_name</td>
                                        <td>$last_name</td>
                                        <td>$email</td>
                                        <td>$birthday</td>
                                        <td>$phone_number</td>
                                        <td>$city_country</td>
                                        <td>$estimated_gpa</td>
                                        <td>$english_test_scores</td>
                                        <td>$high_school</td>
                                        <td>$date_of_graduation</td>
                                        <td>$collage_list</td>
                                        <td>$message</td>
                                        <td><a class=\"$is_viewed_btn\" href=\"\">$is_viewed_txt</a></td>
                                    </tr>";
        }
        echo $content;
    }
}