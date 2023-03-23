<?php
    error_reporting(0);
    include('condb.php');

    require_once('header.php');

    if($_SERVER["REQUEST_METHOD"]=='POST'){
        $runivcode = $_POST['hunivcode'];
        $runivthai = $_POST['univthainame'];
        $runiveng = $_POST['univengname'];
        $runivnum = $_POST['univnumaddr'];
        $runivaddr = $_POST['univaddr'];
        $uSQL = "UPDATE tbuniversity SET univ_Thainame ='$runivthai', 
        univ_Engname='$runiveng', univ_Numaddr='$runivnum', univ_addr='$runivaddr' 
        WHERE univ_Code=$runivcode";
        // printf("%s",$uSQL);
        if($condb->query($uSQL)==TRUE){
            mysqli_close($condb);
            echo "บันทึกข้อมูลสมบูรณ์";
            exit();
        }else{
            mysqli_close($condb);
            echo "ไม่สามารถบันทึกข้อมูลนี้ได้ <br> Error: " . $condb->error ; 
            exit();
        }
    }

    if ($_GET["univid"]<>'' && isset($_GET["univid"])==TRUE){
        $univid = $_GET["univid"];
        $sql = "SELECT * FROM tbuniversity WHERE univ_Code = $univid"; 
        $resu = $condb->query($sql);
        if(mysqli_num_rows($resu) > 0){
            $rec = $resu -> fetch_array(MYSQLI_ASSOC);
            // printf("%d %s", $rec["univ_Code"], $rec["univ_Thainame"]);
            $uthainame = $rec["univ_Thainame"];
            $uengname = $rec["univ_Engname"];
            $unumaddr = $rec["univ_Numaddr"];
            $uaddr = $rec["univ_addr"];
        ?>
            <form action="" method="POST">
                <input type="hidden" id="hunivcode" name="hunivcode" 
                value=<?php echo $univid ?>>
                <div class="mb-3 mt-3">
                    <label for="univcode" class="form-label">รหัสมหาวิทยาลัย:</label>
                    <input type="text" class="form-control" id="univcode" 
                    name="univcode" value=<?php echo $univid ?> disabled>
                </div>
                <div class="mb-3 mt-3">
                    <label for="univthainame" class="form-label">ชื่อมหาวิทยาลัย (ไทย):</label>
                    <input type="text" class="form-control" id="univthainame" 
                    name="univthainame" value="<?php echo "$uthainame" ?>">
                </div>
                <div class="mb-3 mt-3">
                    <label for="univengname" class="form-label">ชื่อมหาวิทยาลัย (อังกฤษ):</label>
                    <input type="text" class="form-control" id="univengname" 
                    name="univengname" value="<?php echo $uengname; ?>">
                </div>
                <div class="mb-3 mt-3">
                    <label for="univnumaddr" class="form-label">เลขที่อยู่:</label>
                    <input type="text" class="form-control" id="univnumaddr" 
                    name="univnumaddr" value="<?php echo "$unumaddr" ?>">
                </div>
                <div class="mb-3 mt-3">
                    <label for="univaddr" class="form-label">ที่อยู่:</label>
                    <input type="text" class="form-control" id="univaddr" 
                    name="univaddr" value="<?php echo "$uaddr" ?>">
                </div>
                <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                <button type="reset" class="btn btn-danger">เคลียร์ข้อมูล</button>
            </form>

<?php

        }
        $resu -> free_result();
    }
    
    mysqli_close($condb);
?>
        </div>
<?php
    require_once('footer.php');
?>