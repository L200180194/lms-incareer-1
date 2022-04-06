<?php 

session_start();

require "./Model/Assignments.php";

$objAssignment = new Assignments;

$allAssignments = $objAssignment->getAllAssigment();

if(isset($_GET['act'])) {
    switch($_GET['act']) {
        case "edit" :
            if(isset($_GET['assign_id'])) {
                echo "Data berhasil diedit!";
            }
            break;
        case "delete":
            if(isset($_GET['assign_id'])) {
                $objAssignment->setAssignmentId($_GET['assign_id']);
                $deleteStat = $objAssignment->deleteAssignment();

                if($deleteStat) {
                    echo "Data berhasil dihapus!";
                } else {
                    echo "Data gagal dihapus!";
                    header("location: list_assignments.php");
                }
            }
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Assigment</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Assignment Name</th>
                <th>Start Date</th>
                <th>Due Date</th>
                <th>Due Time</th>
                <th>Desciption</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($allAssignments as $row => $quest) : ?>
                <?php 
                    $arrStartDate = explode(" ", $quest['assignment_start_date']);
                    $arrEndDate = explode(" ", $quest['assignment_end_date']);

                    // var_dump($arrEndDate);
                    $startDate = $arrStartDate[0];
                    $dueDate = $arrEndDate[0];
                    $dueTime = $arrEndDate[1];
                
                ?>
                <tr>
                    <td><?=$quest['assignment_name'] ?></td>
                    <td><?=$startDate; ?></td>
                    <td><?=$dueDate; ?></td>
                    <td><?=$dueTime; ?></td>
                    <td><?=$quest['assignment_desc'] ?></td>
                    <td>
                        <button type="button" value="<?=$quest['assignment_id'];?>" class="btn btn-primary edit-assignment">Edit Cuyy</button>
                        <a class="btn btn-primary" href="list_assignments.php?act=edit&assign_id=<?=$quest['assignment_id'];?>">Edit</a>
                        <a class="btn btn-danger" href="list_assignments.php?act=delete&assign_id=<?=$quest['assignment_id'];?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <button type="button" value="OK" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Edit
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Assignment</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form method="POST" enctype="multipart/form-data">
                <label for="title">Assignment Title: </label>
                <input type="text" id="title" name="title">
                <br>
                <label for="start-date">Tanggal mulai: </label>
                <input type="datetime-local" name="start-date" id="start-date">
                <label for="end-date">Tanggal akhir: </label>
                <input type="datetime-local" name="end-date" id="end-date">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Tambahkan file</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="filename">
                </div>
                <label for="desc">Deksripsi: </label>
                <br>
                <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
                <br>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </div>
    </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".edit-assignment").on("click", function(e) {
                // e.preventDefault();
                let val = $(".edit-assignment").val();

                console.log(val);
            })
        })
    </script>
    
</body>
</html>