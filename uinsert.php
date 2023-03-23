<?php
    include 'condb.php';
    require_once('header.php');
    if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['univthainame']<>''
     && $_POST['univengname']<>''){
        $univthainame = $_POST['univthainame'];
        $univengname = $_POST['univengname'];
        $univnumaddr = $_POST['univnumaddr'];
        $univaddr = $_POST['univaddr'];
        //echo "th=".$univthainame. " eng=".$univengname;
        $iSQL = "INSERT INTO tbuniversity(univ_Thainame, univ_Engname, ";
        $iSQL = $iSQL . "univ_Numaddr,univ_addr) VALUES (" . "'" . $univthainame."','" ;
        $iSQL = $iSQL . $univengname."','".$univnumaddr."','".$univaddr."')";
        if($condb->query($iSQL) == FALSE){
            echo "Can't insert data!! <br> sql error: " . $condb->error;
        }
    }
?>

    <form action="" method="POST">
        <div class="mb-3 mt-3">
            <label for="univthainame" class="form-label">ชื่อมหาวิทยาลัย (ไทย):</label>
            <input type="text" class="form-control" id="univthainame" 
            placeholder="ชื่อมหาวิทยาลัย" name="univthainame">
        </div>
        <div class="mb-3 mt-3">
            <label for="univengname" class="form-label">ชื่อมหาวิทยาลัย (อังกฤษ):</label>
            <input type="text" class="form-control" id="univengname" 
            placeholder="University name" name="univengname">
        </div>
        <div class="mb-3 mt-3">
            <label for="univnumaddr" class="form-label">เลขที่อยู่:</label>
            <input type="text" class="form-control" id="univnumaddr" 
            placeholder="Address Number" name="univnumaddr">
        </div>
        <div class="mb-3 mt-3">
            <label for="univaddr" class="form-label">ที่อยู่:</label>
            <input type="text" class="form-control" id="univaddr" 
            placeholder="Address Number" name="univaddr">
        </div>
        <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
        <button type="reset" class="btn btn-danger">เคลียร์ข้อมูล</button>
    </form>
<?php
    require_once('footer.php');
?>
    }