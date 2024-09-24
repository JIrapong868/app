<!DOCTYPE HTML>
<html>  
<body>
    <head>
        <meta charset="utf-8">
        <title>Add Form</title>
    </head>

    <body>
        <table width="100%" border="1">
            <tr>
                <td colspan="4">
                     <center><h1>เพิ่มสินค้า</h1></center>
                </td>
            </tr>

            <tr>
                <td><a href="index.php">Home</a></td>
                <td><a href="./mangage.php">Mangage Product</a></td>
                <td><a href="./addform.php">Create a new Product</a></td>
            </tr>
            <tr height="380px">
                <td colspan="4">
                <form :method="post" action="">
                    <input type="hidden" name="ProductID" value="">
                    <table width="100%">
                        <tr>
                            <td>ชื่อสินค้า</td>
                            <td>
                                <input type="text" name="ProductName" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>ภาพสินค้า</td>
                            <td>
                                <input type="text" name="Picture" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>ประเภทสินค้า</td>
                            <td>
                                <input type="text" name="Category" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>รายละเอียดสินค้า</td>
                            <td>
                                <textarea name="ProductDescription" rows="s" cols="40" ></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>ราคาสินค้า</td>
                            <td>
                                <input type="text" name="Price" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>จำนวนสินค้า</td>
                            <td>
                                <input type="text" name="QuantityStock" value="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="button" value="Delete">
                            </td>
                            <td>
                                <input type="submit" name="submit" value="Delete">
                            </td>
                            <td>
                                <input type="button" value="Cancel">
                            </td>
                        </tr>
                    </table>
                </form>
            </tr>
            </td>
            <tr>
                <td colspan="4">
                    <center>
                        <h1>ร้านTONKAO Shop หมู่7 ต.หนองกระทุ่ม อ.เดิมบางนางบวช จ.สุพรรณยุรี 72120</h1>
                    </center>
                </td>
            </tr>
        </table>
    </body>
</body>