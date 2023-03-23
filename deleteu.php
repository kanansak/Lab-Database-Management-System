<?php
    // error_reporting(0);
    include('condb.php');
    require_once('header.php');

    if($_SERVER["REQUEST_METHOD"]=='POST'){
        $runivcode = $_POST['hunivcode'];
        $uSQL = "DELETE FROM tbuniversity  
        WHERE univ_Code=$runivcode";
        // printf("%s",$uSQL);
        if($condb->query($uSQL)==TRUE){
            mysqli_close($condb);
            echo "ลบข้อมูลสมบูรณ์";
            exit();
        }else{
            mysqli_close($condb);
            echo "ไม่สามารถลบข้อมูลนี้ได้ <br> Error: " . $condb->error ; 
            exit();
        }
    }

    if ($_GET["univid"]<>'' && isset($_GET["univid"])==TRUE){
        $univid = $_GET["univid"];

        ?>
            <h1>คุณต้องการลบข้อมูลนี้ใช่หรือไม่?</h1>
            <form action="" method="POST">
                <input type="hidden" id="hunivcode" name="hunivcode" 
                value=<?php echo $univid ?>>

                <button type="submit" class="btn btn-primary">ใช่</button>
                <a href="university2.php" class="btn btn-danger">ไม่</a>
            </form>

<?php
        }
?>
        </div>
<?php
    require_once('footer.php');
?>