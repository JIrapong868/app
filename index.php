<!DOCTYPE html>
<html lang = "en">
    <meta charset = "utf-8">
    <title>Home</title>
    <body>
        <?php
        include "connect.php";
        ?>
        <table width = "100%" border ="2">
            <tr>
                <td colspan="4">
                <center>
                        <h1>SHOP TONKAO</h1>
                </center>
                </td>
            </tr>
            <tr>
                <td><a href="index.php">Home</a></td>
                <td><a href="./mangage.php">Mangage Product</a></td>
                <td><a href="./addform.php">Create a new Product</a></td>
                <td>Link</td>
            </tr>
            <tr height = "300px">
                <td colspan="4">
                    <?php
                    $search = "";
                    if($_SERVER["REQUEST_METHOD"] == "post"){
                        $search = $_POST['search'];
                    }

                    $sql = "SELECT * FROM products WHERE ProductName Like '%$search%' OR Category Like '%$search%' ";
                    $result = mysqli_query($conn, $sql) or  die("Error Query" . mysqli_error($conn));

                ?>
                <form method = "post" action ="">
                    <input type = "text" name = "search" size="100">
                    <input type = "submit" name="submit" value="ค้นหา">
                </form>
                    <table width = "100%" border = "2">
                    <tr>
                
                        <th>No.</th>
                        <th>picture</th>
                        <th>ProductName.</th>
                        <th>Picture.</th>
                        <th>Category.</th>
                        <th>ProductDescription.</th>
                        <th>QuantityStock.</th>
                    </tr>

                        <?php
                        if($result->num_rows>0){
                            $count = 1;
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                        echo "<td>" . $count ."</td>";
                                        echo "<td><img src='picture/$row[Picture]' width=100px; hight=100px></td>";
                                        echo "<td>".$row["ProductName"] ."</td>";
                                        echo "<td>".$row["Category"] ."</td>";
                                        echo "<td>".$row["ProductDescription"] . "</td>";
                                        echo "<td>".$row["Price"] . "</td>";
                                        echo "<td>".$row["QuantityStock"] . "</td>";
                                        $count++;
                                echo"</tr>";
                            }
                        }
                        ?>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>