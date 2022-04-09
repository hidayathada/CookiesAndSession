<!DOCTYPE html>
<head>
    <title>Form Isian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
</head>
<?php
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $count = 1;
        $tanggal = date('d-M-Y');
        setcookie('username', $username, time() + (86400 * 30), "/");
        setcookie('count', $count, time() + (86400 * 30), "/");
        setcookie('tanggal', $tanggal, time() + (86400 * 30), "/");
        echo "Halo" . " " . $username . " " . "Ini Kunjungan Pertama Kamu";
        // $this->cookies();
        header("location:index.php");
    }
    if(empty($_COOKIE['username'])){?>
    <body>
    <form role="form" method="post" action="index.php">
        <div class="col-md-6 mt-4">
            <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            </div>
            <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <input type="submit" value="Submit" name="submit" class="btn btn-primary"/>
                <!-- <button type="btn btn-outline btn-primary" href="table_locations.php">Lihat Table</button> -->
            </div>
            </div>
        </div>
    </form>
    </div>
    </div>
    <?php 
    } else{
        
        if($_COOKIE['count'] > 1) {
            echo "Halo" . " " . "<b>" . $_COOKIE['username'] . "</b>" . " " . "Ini Kunjungan Ke " . "<b>" . $_COOKIE['count'] . "</b> <br>" . " " . "Kunjungan Terakhir Anda" . " " . "<b>" . $_COOKIE['tanggal'] . "</b>";
            setcookie('tanggal', date('d-M-Y'), time() + (86400 * 30), "/");
            setcookie('count', $_COOKIE['count']+1, time() + (86400 * 30), "/");
        } else {
            echo "Halo" . " " . "<b>" . $_COOKIE['username'] . "</b>" . "Ini Kunjungan Ke " . "<b>" . $_COOKIE['count'] . "</b>";
            setcookie('tanggal', date('d-M-Y'), time() + (86400 * 30), "/");
            setcookie('count', $_COOKIE['count']+1, time() + (86400 * 30), "/");
        }
    }
    
    ?>

    
    

</body>

<footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</footer>
</html>
<!-- long = -7,56526
    110.81423
    r = sqrt(sqr(x2-x1)+sqr(y2-y1))-->