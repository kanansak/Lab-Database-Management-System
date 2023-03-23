<?php
    include('condb.php');

    require_once('header.php');
    $sql = "SELECT * FROM tbuniversity";
    $result = mysqli_query($condb,$sql);

    if(mysqli_num_rows($result) > 0){
        echo "Record(s) : " . mysqli_num_rows($result) . "<br>" ;
        echo "<table border=1 cellpadding=4 cellspacing=0>";
            echo "<caption>ข้อมูลมหาวิทยาลัย</caption>";
            echo "<thead>";
                echo "<tr>"; 
                    echo "<th>ลำดับ</th>"; 
                    echo "<th>ชื่อ ม. (ไทย)</th>";
                    echo "<th>ชื่อ ม. (อังกฤษ)</th>";
                    echo "<th>เลขที่อยู่</th>";
                    echo "<th>ที่อยู่</th>";
                echo "</tr>";
            echo "</thead>";

            echo "<tbody>";
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td style="."text-align:center;font-weight:bold".">" . $row["univ_Code"] . "</td>";
                    echo "<td>" . $row["univ_Thainame"] . "</td>";
                    echo "<td>" . $row["univ_Engname"] . "</td>";
                    echo "<td>" . $row["univ_Numaddr"] . "</td>";
                    echo "<td>" . $row["univ_addr"] . "</td>";
                    echo "</tr>";
                    //echo "university ID : " . $row["univ_Code"] . " " .$row["univ_Thainame"]. "<br>";
                } 
            echo "<tbody>";
        echo "</table>";
    }else{
        echo "Record(s) : 0";
    }
    mysqli_close($condb);

    require_once('footer.php');
?>
