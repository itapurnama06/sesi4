<?php
    $path = "upgambar/";
    if(isset($_POST["upoadfile"])){
        if($_FILES["flgambar"]["error"]==0){
            $flname = $path .  basename($_FILES["flGAMBAR"]["name"]);
            move_uploaded_file($_FILES["flGAMBAR"]["tmp_name"], $flname);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File</title>
</head>
<body>
<?php
if(isset($_POST["uploadfile"])){
    echo "<img src='".$flame."'>";;
}
?>
    <form action="latihan03.php" method="POST" enctype="multipart/form-data">

        <div>
            Upload Gambar
            <input type="file" name="flGAMBAR">
        </div>

        <div>
            <input type="hidden" name="uploadfie" value="YA , YAKIN">
            <button type="submit">Upload Gambar</button>
        </div>

    </form>

</body>
</html>