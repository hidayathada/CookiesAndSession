<?php
    session_start();
    if(empty($_SESSION['angka'])){
        $_SESSION['angka'] = rand(1,10);
    }
?>

<!DOCTYPE html>
<head>
    <title>Form Isian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
</head>
<body>
    
    <form role="form" method="post" action="tebak_angka.php">
        <div class="col-md-6 mt-4">
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-4 col-form-label">Silahkan Isi Angka</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="input_angka" placeholder="Silahkan Isi Angka">
            </div>
            </div>
            <div class="form-group row">
            <div class="offset-sm-4 col-sm-10">
                <input type="submit" value="Submit" name="submit" class="btn btn-primary"/>
            </div>
            </div>
        </div>
    </form>
    <div class="col-md-6 mt-4">
    <?php
        if(isset($_POST['input_angka'])){
            if($_POST['input_angka'] < $_SESSION['angka']){
                echo "Tebakan terlalu rendah";
                // echo $_SESSION['angka'];
            }elseif($_POST['input_angka'] > $_SESSION['angka']){
                echo "Tebakan terlalu tinggi";
            }else{
                echo "Tebakan anda betul";
                ?><br>
                <a href="tebak_angka.php" class="btn btn-danger"/>Main Lagi?</a>
                <?php
                session_destroy();
                exit();
            }
        }
    ?>
    </div>
</body>
<footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</footer>
</html>