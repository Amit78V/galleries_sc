<?php

require_once 'connection.php';

if(isset($_POST["submit"])){
  $buttonname = $_POST["buttonname"];
  $description = $_POST["description"];

  $upload_dir = "upimagesguj/"; //this is where the uploaded photo stored
  $ad_image = $upload_dir.$_FILES["imageUpload"]["name"];
  $upload_dir.$_FILES["imageUpload"]["name"];
  $upload_file = $upload_dir.basename($_FILES["imageUpload"]["name"]);
  $imageType = strtolower(pathinfo($upload_file,PATHINFO_EXTENSION)); //used to detected the image format
  $check = $_FILES["imageUpload"]["size"]; // to detect the size of the image
  $upload_ok = 0;

  if(file_exists($upload_file)){
     echo "<script>alert('The file already exist')</script>";
     $upload_ok = 0;
  }else{
      $upload_ok = 1;
      if($check !== false){
        $upload_ok = 1;
        if($imageType == 'jpg' || $imageType == 'png' || $imageType == 'jpeg' || $imageType == 'gif'){
            $upload_ok = 1;
        }else{
            echo '<script>alert("please change the image format")</script>';
        }
        }else{
            echo '<script>alert("The photo size is 0 please change the photo ")</script>';
            $upload_ok = 0;
      }
  }
  ///////////////////////////

  $upload_dir1 = "upaudioguj/"; //this is where the uploaded photo stored
  $ad_audio = $upload_dir1.$_FILES["audioUpload"]["name"];
  $upload_dir1.$_FILES["audioUpload"]["name"];
  $upload_file1 = $upload_dir1.basename($_FILES["audioUpload"]["name"]);
  $audioType = strtolower(pathinfo($upload_file1,PATHINFO_EXTENSION)); //used to detected the image format
  $check1 = $_FILES["audioUpload"]["size"]; // to detect the size of the image
  $upload_ok1 = 0;

  if(file_exists($upload_file1)){
     echo "<script>alert('The file already exist')</script>";
     $upload_ok1 = 0;
  }else{
      $upload_ok1 = 1;
      if($check1 !== false){
        $upload_ok1 = 1;
        if($audioType == 'mp3' || $audioType == 'm4p' || $audioType == 'aax' || $audioType == 'aa'){
            $upload_ok1 = 1;
        }else{
            echo '<script>alert("please change the audio format")</script>';
        }
        }else{
            echo '<script>alert("The audio size is 0 please change the audio ")</script>';
            $upload_ok1 = 0;
      }
  }
  ////////////////////////////////
  $upload_dir2 = "upvideoguj/"; //this is where the uploaded photo stored
  $ad_video = $upload_dir2.$_FILES["videoUpload"]["name"];
  $upload_dir2.$_FILES["videoUpload"]["name"];
  $upload_file2 = $upload_dir2.basename($_FILES["videoUpload"]["name"]);
  $videoType = strtolower(pathinfo($upload_file2,PATHINFO_EXTENSION)); //used to detected the image format
  $check2 = $_FILES["videoUpload"]["size"]; // to detect the size of the image
  $upload_ok2 = 0;

  if(file_exists($upload_file2)){
     echo "<script>alert('The file already exist')</script>";
     $upload_ok2 = 0;
  }else{
      $upload_ok2 = 1;
      if($check2 !== false){
        $upload_ok2 = 1;
        if($videoType == 'mp4' || $videoType == 'avi' || $videoType == 'wmv' || $videoType == 'gif'){
            $upload_ok2 = 1;
        }else{
            echo '<script>alert("please change the video format")</script>';
        }
        }else{
            echo '<script>alert("The video size is 0 please change the video ")</script>';
            $upload_ok2 = 0;
      }
  }

  //////////////////////////
  if($upload_ok == 0 && $upload_ok1 == 0 && $upload_ok2 == 0 ){
    echo '<script>alert("sorry your file is not uploaded. Please try again")</script>';
  }else{
      if($buttonname != "" && $description !=""){
          move_uploaded_file($_FILES["imageUpload"]["tmp_name"],$upload_file);
          move_uploaded_file($_FILES["audioUpload"]["tmp_name"],$upload_file1);
          move_uploaded_file($_FILES["videoUpload"]["tmp_name"],$upload_file2);

          $sql = "INSERT INTO admin_guj(button_name,description1,image1,audio,video)
          VALUES('$buttonname','$description','$ad_image','$ad_audio','$ad_video')";

          if($conn->query($sql) === TRUE){
              echo "<script>alert('your data uploaded successfully')</script>";
            }
        }
    }


}

?>

<!DOCTYPE html>
<html lang="gu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload in gujarati page</title>
    <link rel="stylesheet" href="upload.css">
</head>
<body>
    <?php
         include_once 'gj_user.php';

    ?>
    <section id="upload_container">
        <form action="ad_gujarati.php" method="POST" enctype="multipart/form-data" >
            <input type="text" name="buttonname" id="buttonname" placeholder="button name" required>
            <input type="text" name="description" id="description" placeholder="description" required>
            <input type="file" name="imageUpload" id="imageUpload" required hidden>
            <button id="choose" onclick="upload();">Choose Image</button>
            <input type="file" name="audioUpload" id="audioUpload" required hidden>
            <button id="choose1" onclick="upload1();">Choose Audio</button>
            <input type="file" name="videoUpload" id="videoUpload" required hidden>
            <button id="choose2" onclick="upload2();">Choose Video</button>
            <input type="submit" value="Upload" name="submit">
        </form>
    </section>

    <script>
        var buttonname = document.getElementById("buttonname");
        var description = document.getElementById("description");
        var choose = document.getElementById("choose");
        var uploadImage = document.getElementById("imageUpload");
        var choose1 = document.getElementById("choose1");
        var uploadAudio = document.getElementById("audioUpload");
        var choose2 = document.getElementById("choose2");
        var uploadVideo = document.getElementById("videoUpload");

        function upload(){
            uploadImage.click();
        }
        function upload1(){
            uploadAudio.click();
        }
        function upload2(){
            uploadVideo.click();
        }
        uploadImage.addEventListener("change",function(){
            var file = this.files[0];
            choose.innerHTML = "("+file.name+")";
        })
        uploadAudio.addEventListener("change",function(){
            var file = this.files[0];
            choose1.innerHTML = "("+file.name+")";
        })
        uploadVideo.addEventListener("change",function(){
            var file = this.files[0];
            choose2.innerHTML = "("+file.name+")";
        })
    </script>
</body>
</html>