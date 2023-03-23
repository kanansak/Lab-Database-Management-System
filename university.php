<?php
    include('condb.php');

    $sql = "SELECT * FROM tbuniversity";
    $result = mysqli_query($condb,$sql);

    if(mysqli_num_rows($result) > 0){
        echo "Record(s) : " . mysqli_num_rows($result) . "<br>" ;
        echo "<table border=1 cellpadding=4 cellspacing=0>";
        echo "<caption>ข้อมูลมหาวิทยาลัย</caption>";
        echo "<tr style=" . "background-color:#80ff00" . ">"; //tr =  แถว
        echo "<td style="."text-align:center;font-weight:bold".">ลำดับ</td>"; //td ข้อมูลที่อยู่ในแถว
        echo "<td style="."text-align:center;font-weight:bold".">ชื่อ ม. (ไทย)</td>";
        echo "<td style="."text-align:center;font-weight:bold".">ชื่อ ม. (อังกฤษ)</td>";
        echo "<td style="."text-align:center;font-weight:bold".">เลขที่อยู่</td>";
        echo "<td style="."text-align:center;font-weight:bold".">ที่อยู่</td>";
        echo "</tr>";
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>" . $row["univ_Code"] . "</td>";
            echo "<td>" . $row["univ_Thainame"] . "</td>";
            echo "<td>" . $row["univ_Engname"] . "</td>";
            echo "<td>" . $row["univ_Numaddr"] . "</td>";
            echo "<td>" . $row["univ_addr"] . "</td>";
            echo "</tr>";
            //echo "university ID : " . $row["univ_Code"] . " " .$row["univ_Thainame"]. "<br>";
        } 
        echo "</table>";
    }else{
        echo "Record(s) : 0";
    }
    mysqli_close($condb);
?>