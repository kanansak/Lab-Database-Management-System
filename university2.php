<?php
    include('condb.php');

    require_once('header.php');

    $sql = "SELECT * FROM tbuniversity";
    $result = mysqli_query($condb, $sql);

    if(mysqli_num_rows($result) > 0){
       // echo "Record(s): ". mysqli_num_rows($result) . "<br>";
       // echo "<table class=table table-striped>";
    ?>
    <div align="right">
        <a href="uinsert.php" class="btn btn-primary">เพิ่มข้อมูล</a>
    </div>
    <br>
     <table class="table table-borderless table-hover table-striped>">
    <?php
        echo "<caption>ข้อมูลมหาวิทยาลัย</caption>";
        echo "<thead>";
    ?>
        <tr class="table-primary">
    <?php
        //echo "<tr>";
        echo "<th>ลำดับ</td>";
        echo "<th>ชื่อ ม. (ไทย)</td>";
        echo "<th>ชื่อ ม. (อังกฤษ)</td>";
        echo "<th>เลขที่อยู่</td>";
        echo "<th>ที่อยู่</td>";
        echo "<th>ดำเนินการ</th>";
        echo "</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            $univid = $row["univ_Code"];
            echo "<td style=". "text-align:center". ">" . $univid . "</td>";
            echo "<td>" . $row["univ_Thainame"] . "</td>";
            echo "<td>" . $row["univ_Engname"] . "</td>";
            echo "<td>" . $row["univ_Numaddr"] . "</td>";
            echo "<td>" . $row["univ_addr"] . "</td>";
            echo "<td> <a href=\"updateu.php?univid=$univid\" class=\"btn btn-warning\">แก้ไข</a>
            <a href=\"deleteu.php?univid=$univid\" class=\"btn btn-danger\">ลบ</a>";

            echo "</td>";
            echo "</tr>";
          //echo "university ID : " . $row["univ_Code"] . " " . $row["univ_Thainame"] . "<br>";
        }
        echo "</tbody>";
        // echo "<tfoot>";
        // echo "<tr>";
        // echo "<td>ลำดับ</td>";
        // echo "<td>ชื่อ ม. (ไทย)</td>";
        // echo "<td>ชื่อ ม. (อังกฤษ)</td>";
        // echo "<td>เลขที่อยู่</td>";
        // echo "<td>ที่อยู่</td>";
        // echo "<td>ดำเนินการ</td>";
        // echo "</tr>";
        // echo "</tfoot>";
        echo "</table>";
        echo "Record(s): ". mysqli_num_rows($result) . "<br>";
    }else{
        echo "Record(s): 0";
    }
    mysqli_close($condb);
?>
        </div>
<?php
    require_once('footer.php');
?>