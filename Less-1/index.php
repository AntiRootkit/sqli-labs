<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Less-1 **Error Based- String**</title>
</head>

<body bgcolor="#000000">
<div style=" margin-top:70px;color:#FFF; font-size:23px; text-align:center">Welcome&nbsp;&nbsp;&nbsp;<font
        color="#FF0000"> Dhakkan </font><br>
    <font size="3" color="#FFFF00">


        <?php
            //including the Mysql connect parameters.
            include("../sql-connections/sql-connect.php");
            error_reporting(0);

            // take the variables
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
                echo 'YourID[' . $id . "]<br>\n";


//logging the connection parameters to a file for analysis.
                $fp = fopen('result.txt', 'a');
                fwrite($fp, 'ID:' . $id . "\n");
                fclose($fp);

// connectivity 


                $sql = "SELECT * FROM users WHERE id='$id' LIMIT 0,1";
                $result = mysql_query($sql);
                $row = mysql_fetch_array($result);

                if ($row) {
                    echo "<font size='5' color= '#99FF00'>";
                    echo 'Your Login name:' . $row['username'];
                    echo "<br>";
                    echo 'Your Password:' . $row['password'];
                    echo "</font>";
                }
                else {
                    echo '<font color= "#FFFF00">';
                    print_r(mysql_error());
                    echo "</font>";
                }
            }
            else {
                echo "Please input the ID as parameter with numeric value";
            }

        ?>
    </font></div>
</br></br></br>
<center>
    <img src="../images/Less-1.jpg"/></center>
</body>
</html>





 
