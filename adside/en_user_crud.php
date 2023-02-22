<?php
     include('connection.php');

?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"> EDIT Admin Profile </h6>
        </div>
        <div class="card-body">
        <?php
            

            if(isset($_POST['edit_btn']))
            {
                $id = $_POST['edit_id'];
                
                $query = "SELECT * FROM admin_eng WHERE id='$id' ";
                $query_run = mysqli_query($conn, $query);

                foreach($query_run as $row)
                {
                    ?>

                        <form action="en_user_update.php" method="POST">

                            <input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>">

                            <div class="form-group">
                                <label> Buttoname </label>
                                <input type="text" name="edit_Buttoname" value="<?php echo $row['button_name'] ?>" class="form-control"
                                    placeholder="Enter text">
                            </div>
                            <div class="form-group">
                                <label> Description </label>
                                <input type="text" name="edit_Description" value="<?php echo $row['description1'] ?>" class="form-control"
                                    placeholder="Enter">
                            </div>
                            <div class="form-group">
                                <label> Image </label>
                                <input type="file" name="edit_image" value="<?php echo $row['image1'] ?>"
                                    class="form-control" placeholder="Enter">
                            </div>
                            <div class="form-group">
                                <label> Audio </label>
                                <input type="file" name="edit_audio" value="<?php echo $row['audio'] ?>"
                                    class="form-control" placeholder="Enter">
                            </div>
                            <div class="form-group">
                                <label> Video </label>
                                <input type="file" name="edit_video" value="<?php echo $row['video'] ?>"
                                    class="form-control" placeholder="Enter">
                            </div>

                            <a href="en_user_display.php" class="btn btn-danger"> CANCEL </a>
                            <button type="submit" name="updatebtn" class="btn btn-primary"> Update </button>

                        </form>
                        <?php
                }
            }
        ?>
        </div>
    </div>
</div>

</div>