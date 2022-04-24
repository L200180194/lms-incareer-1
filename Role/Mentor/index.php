<?php

session_start();

$loginPath = "../../login.php";

if(!isset($_SESSION['user'])) {
    header("location: " . $loginPath);
    die;
}

switch($_SESSION['user']->{'role_id'}) {
    case 1:
        echo "
        <script>
            alert('Akses ditolak!');
            location.replace('../Admin/');
        </script>
        ";
        break;
    case 3:
        echo "
        <script>
            alert('Akses ditolak!');
            location.replace('../Student/');
        </script>
        ";
        break;
    default:
        break;
}


// require "../../Model/Courses.php";
// $objCourse = new Courses;
// $allCourses = $objCourse->gelAllCourseByUserId($_SESSION['user']->{'user_id'});

require_once "../../api/get_api_data.php";

$courseData = array();
$batchData = array();
$modulJSON = json_decode(http_request("https://ppww2sdy.directus.app/items/modul_name"));
$userBatchJSON = json_decode(http_request("https://i0ifhnk0.directus.app/items/user_batch"));

for($i = 0; $i < count($userBatchJSON->{'data'}); $i++) {
    if($userBatchJSON->{'data'}[$i]->{'user_user_id'} == $_SESSION['user']->{'user_id'}) {
        array_push($batchData, $userBatchJSON->{'data'}[$i]);
    }
}


for($i = 0; $i < count($modulJSON->{'data'}); $i++) {
    if($modulJSON->{'data'}[$i]->{'parent_id'} == NULL) {
        for($j = 0; $j < count($batchData); $j++){
            if($modulJSON->{'data'}[$i]->{'batch_id'} == $batchData[$j]->{'batch_batch_id'}) {
                array_push($courseData, $modulJSON->{'data'}[$i]);
            }
        }   
    }
}

var_dump($batchData);
var_dump($courseData);

// var_dump($courseData);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigment</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
    <h1>Halaman Mentor</h1>

    <table>
        <thead>
            <th>ID</th>
            <th>Name</th>
            <!-- <th>Description</th> -->
            <th>Link</th>
        </thead>
        <tbody>
            <?php foreach ($courseData as $key => $course) : ?>
                <tr>
                    <td><?= $course->{'id'}; ?></td>
                    <td><?= $course->{'modul_name'}; ?></td>
                    <td><a href="./course.php?course_id=<?= $course->{'id'}; ?>">Link</a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>

</html>