<?php

require_once 'connection.php';

if(isset($_POST["submit"])){
  $buttonname = $_POST["buttonname"];
  $description = $_POST["description"];

  $upload_dir = "upimages/"; //this is where the uploaded photo stored
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

  $upload_dir1 = "upaudio/"; //this is where the uploaded photo stored
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
  $upload_dir2 = "upvideo/"; //this is where the uploaded photo stored
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
}
  ////////////////////////////Gujarati/////////////////////////
  if(isset($_POST["submit"])){
    $buttonname1 = $_POST["buttonname1"];
    $description1 = $_POST["description1"];
  
    $upload_dir3 = "upimagesguj/"; //this is where the uploaded photo stored
    $ad_image1 = $upload_dir3.$_FILES["imageUpload1"]["name"];
    $upload_dir3.$_FILES["imageUpload1"]["name"];
    $upload_file3 = $upload_dir3.basename($_FILES["imageUpload1"]["name"]);
    $imageType1 = strtolower(pathinfo($upload_file3,PATHINFO_EXTENSION)); //used to detected the image format
    $check3 = $_FILES["imageUpload1"]["size"]; // to detect the size of the image
    $upload_ok3 = 0;
  
    if(file_exists($upload_file3)){
       echo "<script>alert('The file already exist')</script>";
       $upload_ok3 = 0;
    }else{
        $upload_ok3 = 1;
        if($check3 !== false){
          $upload_ok3 = 1;
          if($imageType1 == 'jpg' || $imageType1 == 'png' || $imageType1 == 'jpeg' || $imageType1 == 'gif'){
              $upload_ok3 = 1;
          }else{
              echo '<script>alert("please change the image format")</script>';
          }
          }else{
              echo '<script>alert("The photo size is 0 please change the photo ")</script>';
              $upload_ok3 = 0;
        }
    }
    ///////////////////////////
  
    $upload_dir4 = "upaudioguj/"; //this is where the uploaded photo stored
    $ad_audio1 = $upload_dir4.$_FILES["audioUpload1"]["name"];
    $upload_dir4.$_FILES["audioUpload1"]["name"];
    $upload_file4 = $upload_dir4.basename($_FILES["audioUpload1"]["name"]);
    $audioType1 = strtolower(pathinfo($upload_file4,PATHINFO_EXTENSION)); //used to detected the image format
    $check4 = $_FILES["audioUpload1"]["size"]; // to detect the size of the image
    $upload_ok4 = 0;
  
    if(file_exists($upload_file1)){
       echo "<script>alert('The file already exist')</script>";
       $upload_ok4 = 0;
    }else{
        $upload_ok4 = 1;
        if($check4 !== false){
          $upload_ok4 = 1;
          if($audioType1 == 'mp3' || $audioType1 == 'm4p' || $audioType1 == 'aax' || $audioType1 == 'aa'){
              $upload_ok4 = 1;
          }else{
              echo '<script>alert("please change the audio format")</script>';
          }
          }else{
              echo '<script>alert("The audio size is 0 please change the audio ")</script>';
              $upload_ok4 = 0;
        }
    }
    ////////////////////////////////
    $upload_dir5 = "upvideoguj/"; //this is where the uploaded photo stored
    $ad_video1 = $upload_dir5.$_FILES["videoUpload1"]["name"];
    $upload_dir5.$_FILES["videoUpload1"]["name"];
    $upload_file5 = $upload_dir5.basename($_FILES["videoUpload1"]["name"]);
    $videoType1 = strtolower(pathinfo($upload_file5,PATHINFO_EXTENSION)); //used to detected the image format
    $check5 = $_FILES["videoUpload1"]["size"]; // to detect the size of the image
    $upload_ok5 = 0;
  
    if(file_exists($upload_file5)){
       echo "<script>alert('The file already exist')</script>";
       $upload_ok5 = 0;
    }else{
        $upload_ok5 = 1;
        if($check5 !== false){
          $upload_ok5 = 1;
          if($videoType1 == 'mp4' || $videoType1 == 'avi' || $videoType1 == 'wmv' || $videoType1 == 'gif'){
              $upload_ok5 = 1;
          }else{
              echo '<script>alert("please change the video format")</script>';
          }
          }else{
              echo '<script>alert("The video size is 0 please change the video ")</script>';
              $upload_ok5 = 0;
        }
    }
}
  ////////////////////////////Hindi////////////////////////////
  if(isset($_POST["submit"])){
    $buttonname2 = $_POST["buttonname2"];
    $description2 = $_POST["description2"];
  
    $upload_dir6 = "upimageshin/"; //this is where the uploaded photo stored
    $ad_image2 = $upload_dir6.$_FILES["imageUpload2"]["name"];
    $upload_dir6.$_FILES["imageUpload2"]["name"];
    $upload_file6 = $upload_dir6.basename($_FILES["imageUpload2"]["name"]);
    $imageType2 = strtolower(pathinfo($upload_file6,PATHINFO_EXTENSION)); //used to detected the image format
    $check6 = $_FILES["imageUpload"]["size"]; // to detect the size of the image
    $upload_ok6 = 0;
  
    if(file_exists($upload_file6)){
       echo "<script>alert('The file already exist')</script>";
       $upload_ok6 = 0;
    }else{
        $upload_ok6 = 1;
        if($check6 !== false){
          $upload_ok6 = 1;
          if($imageType2 == 'jpg' || $imageType2 == 'png' || $imageType2 == 'jpeg' || $imageType2 == 'gif'){
              $upload_ok6 = 1;
          }else{
              echo '<script>alert("please change the image format")</script>';
          }
          }else{
              echo '<script>alert("The photo size is 0 please change the photo ")</script>';
              $upload_ok6 = 0;
        }
    }
    ///////////////////////////
  
    $upload_dir7 = "upaudiohin/"; //this is where the uploaded photo stored
    $ad_audio2 = $upload_dir7.$_FILES["audioUpload2"]["name"];
    $upload_dir7.$_FILES["audioUpload2"]["name"];
    $upload_file7 = $upload_dir7.basename($_FILES["audioUpload2"]["name"]);
    $audioType2 = strtolower(pathinfo($upload_file7,PATHINFO_EXTENSION)); //used to detected the image format
    $check7 = $_FILES["audioUpload"]["size"]; // to detect the size of the image
    $upload_ok7 = 0;
  
    if(file_exists($upload_file7)){
       echo "<script>alert('The file already exist')</script>";
       $upload_ok7 = 0;
    }else{
        $upload_ok7 = 1;
        if($check7 !== false){
          $upload_ok7 = 1;
          if($audioType2 == 'mp3' || $audioType2 == 'm4p' || $audioType2 == 'aax' || $audioType2 == 'aa'){
              $upload_ok7 = 1;
          }else{
              echo '<script>alert("please change the audio format")</script>';
          }
          }else{
              echo '<script>alert("The audio size is 0 please change the audio ")</script>';
              $upload_ok7 = 0;
        }
    }
    ////////////////////////////////
    $upload_dir8 = "upvideohin/"; //this is where the uploaded photo stored
    $ad_video2 = $upload_dir8.$_FILES["videoUpload2"]["name"];
    $upload_dir8.$_FILES["videoUpload2"]["name"];
    $upload_file8 = $upload_dir8.basename($_FILES["videoUpload2"]["name"]);
    $videoType2 = strtolower(pathinfo($upload_file2,PATHINFO_EXTENSION)); //used to detected the image format
    $check8 = $_FILES["videoUpload2"]["size"]; // to detect the size of the image
    $upload_ok8 = 0;
  
    if(file_exists($upload_file8)){
       echo "<script>alert('The file already exist')</script>";
       $upload_ok8 = 0;
    }else{
        $upload_ok8 = 1;
        if($check8 !== false){
          $upload_ok8 = 1;
          if($videoType2 == 'mp4' || $videoType2 == 'avi' || $videoType2 == 'wmv' || $videoType2 == 'gif'){
              $upload_ok8 = 1;
          }else{
              echo '<script>alert("please change the video format")</script>';
          }
          }else{
              echo '<script>alert("The video size is 0 please change the video ")</script>';
              $upload_ok8 = 0;
        }
    }
  /////////////////////////////////////////////////////////////
  if($upload_ok == 0 && $upload_ok1 == 0 && $upload_ok2 == 0 && $upload_ok3 == 0 && $upload_ok4 == 0 && $upload_ok5 == 0 && $upload_ok6 == 0 && $upload_ok7 == 0 && $upload_ok8 == 0){
    echo '<script>alert("sorry your file is not uploaded. Please try again")</script>';
  }else{
      if($buttonname != "" && $description != "" && $buttonname1 != "" && $description1 != "" && $buttonname2 != "" && $description2 != ""){
          move_uploaded_file($_FILES["imageUpload"]["tmp_name"],$upload_file);
          move_uploaded_file($_FILES["audioUpload"]["tmp_name"],$upload_file1);
          move_uploaded_file($_FILES["videoUpload"]["tmp_name"],$upload_file2);

          move_uploaded_file($_FILES["imageUpload1"]["tmp_name"],$upload_file3);
          move_uploaded_file($_FILES["audioUpload1"]["tmp_name"],$upload_file4);
          move_uploaded_file($_FILES["videoUpload1"]["tmp_name"],$upload_file5);

          move_uploaded_file($_FILES["imageUpload2"]["tmp_name"],$upload_file6);
          move_uploaded_file($_FILES["audioUpload2"]["tmp_name"],$upload_file7);
          move_uploaded_file($_FILES["videoUpload2"]["tmp_name"],$upload_file8);

          $sql = "INSERT INTO admin_eng(button_name,description1,image1,audio,video)
          VALUES('$buttonname','$description','$ad_image','$ad_audio','$ad_video')";

          $sql1 = "INSERT INTO admin_guj(button_name,description1,image1,audio,video)
          VALUES('$buttonname1','$description1','$ad_image1','$ad_audio1','$ad_video1')";

          $sql2 = "INSERT INTO admin_hindi(button_name,description1,image1,audio,video)
          VALUES('$buttonname2','$description2','$ad_image2','$ad_audio2','$ad_video2')";

          if($conn->query($sql) === TRUE && $conn->query($sql1) === TRUE && $conn->query($sql2) === TRUE){
              echo "<script>alert('your data uploaded successfully')</script>";
            }
        }
    }


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload in English page</title>
    <link rel="stylesheet" href="upload.css">
</head>
<body>
    <?php
         include_once 'en_user.php';

    ?>
    <section id="upload_container">
        <form action="test.php" method="POST" enctype="multipart/form-data" >
            <h3> Upload in English </h3>
            <input type="text" name="buttonname" id="buttonname" placeholder="button name" required>
            <input type="text" name="description" id="description" placeholder="description" required>
            <input type="file" name="imageUpload" id="imageUpload" required hidden>
            <button id="choose" onclick="upload();">Choose Image for English</button>
            <input type="file" name="audioUpload" id="audioUpload" required hidden>
            <button id="choose1" onclick="upload1();">Choose Audio for English</button>
            <input type="file" name="videoUpload" id="videoUpload" required hidden>
            <button id="choose2" onclick="upload2();">Choose Video for English</button>

            <h3> Upload in Gujarati </h3>
            <input type="text" name="buttonname1" id="buttonname1" placeholder="button name1" required>
            <input type="text" name="description1" id="description1" placeholder="description1" required>
            <input type="file" name="imageUpload1" id="imageUpload1" required hidden>
            <button id="choose3" onclick="upload3();">Choose Image for Gujarati</button>
            <input type="file" name="audioUpload1" id="audioUpload1" required hidden>
            <button id="choose4" onclick="upload4();">Choose Audio for Gujarati</button>
            <input type="file" name="videoUpload1" id="videoUpload1" required hidden>
            <button id="choose5" onclick="upload5();">Choose Video for Gujarati</button>

            <h3> Upload in Hindi </h3>
            <input type="text" name="buttonname2" id="buttonname2" placeholder="button name2" required>
            <input type="text" name="description2" id="description2" placeholder="description2" required>
            <input type="file" name="imageUpload2" id="imageUpload2" required hidden>
            <button id="choose6" onclick="upload6();">Choose Image for Hindi</button>
            <input type="file" name="audioUpload2" id="audioUpload2" required hidden>
            <button id="choose7" onclick="upload7();">Choose Audio for Hindi</button>
            <input type="file" name="videoUpload2" id="videoUpload2" required hidden>
            <button id="choose8" onclick="upload8();">Choose Video for Hindi</button>
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

    ///////////////////////////////////////////////////Gujarati
        var buttonname1 = document.getElementById("buttonname1");
        var description1 = document.getElementById("description1");
        var choose3 = document.getElementById("choose3");
        var uploadImage1 = document.getElementById("imageUpload1");
        var choose4 = document.getElementById("choose4");
        var uploadAudio1 = document.getElementById("audioUpload1");
        var choose5 = document.getElementById("choose5");
        var uploadVideo1 = document.getElementById("videoUpload1");
    //////////////////////////////////////////////////Hindi
        var buttonname2 = document.getElementById("buttonname2");
        var description2 = document.getElementById("description2");
        var choose6 = document.getElementById("choose6");
        var uploadImage2 = document.getElementById("imageUpload2");
        var choose7 = document.getElementById("choose7");
        var uploadAudio2 = document.getElementById("audioUpload2");
        var choose8 = document.getElementById("choose8");
        var uploadVideo2 = document.getElementById("videoUpload2");
    ///////////////////////////////////////////English
        function upload(){
            uploadImage.click();
        }
        function upload1(){
            uploadAudio.click();
        }
        function upload2(){
            uploadVideo.click();
        }
        //////////////////////////////////Gujarati
        function upload3(){
            uploadImage1.click();
        }
        function upload4(){
            uploadAudio1.click();
        }
        function upload5(){
            uploadVideo1.click();
        }
        ////////////////////////////////////Hindi
        function upload6(){
            uploadImage2.click();
        }
        function upload7(){
            uploadAudio2.click();
        }
        function upload8(){
            uploadVideo2.click();
        }
        /////////////////////////////////////English
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
        /////////////////////////////////////////Gujarati
        uploadImage1.addEventListener("change",function(){
            var file = this.files[0];
            choose3.innerHTML = "("+file.name+")";
        })
        uploadAudio1.addEventListener("change",function(){
            var file = this.files[0];
            choose4.innerHTML = "("+file.name+")";
        })
        uploadVideo1.addEventListener("change",function(){
            var file = this.files[0];
            choose5.innerHTML = "("+file.name+")";
        })
        ///////////////////////////////////////Hindi
        uploadImage2.addEventListener("change",function(){
            var file = this.files[0];
            choose6.innerHTML = "("+file.name+")";
        })
        uploadAudio2.addEventListener("change",function(){
            var file = this.files[0];
            choose7.innerHTML = "("+file.name+")";
        })
        uploadVideo2.addEventListener("change",function(){
            var file = this.files[0];
            choose8.innerHTML = "("+file.name+")";
        })
    </script>
</body>
</html>