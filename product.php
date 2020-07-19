<head>
    <h1 style="text-align: center; color: #556123;">Product List</h1>
</head>

<style>
    table {
        border-collapse: collapse;
        width: 100%;
        color: #588c7e;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
    }
</style>

<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <!-- <th>Picture</th> -->
        </tr>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "hanghoa");

        if($conn -> connect_error){
            die("Connection failed:".$conn -> connect_error);
        }

        $sql='select MaHH, TenHH, DonGia from hanghoa';
        $result = $conn -> query($sql);

        if($result -> num_rows > 0){
            while($row = $result->fetch_assoc()) {
                    echo "<tr><td>".$row["MaHH"]."</td><td>".$row["TenHH"]."</td><td>".$row["DonGia"]."</td><tr>";
            }
            echo "</table>";
        }
        else {
            echo "0 result";
        }

        $conn -> close();
        ?>
    </table>
</body> 