<!DOCTYPE html>
<html>
    <body>
        <?php
        $servername="localhost";
        $username="root";
        $password= "";
        $dbname="customer";
        $conn=new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error)
        {
            echo "<script>alert('Error in connecting to database.')</script>";
        }
        else{
            session_start();
            $transfer_from=$_SESSION['name'];
            $transfer_from_bal=$_SESSION['bal'];
            $transfer_to=$_POST["transfer-cust-name"];
            $transfer_amt=$_POST["transfer-amt"];
            if($transfer_from_bal>=$transfer_amt)
            {
            $sql="UPDATE `customer table` SET `Current Balance`= `Current Balance`+$transfer_amt  WHERE `Name` = '$transfer_to'";
            $result=$conn->query($sql);
            $sql1="UPDATE `customer table` SET `Current Balance`= `Current Balance`-$transfer_amt  WHERE `Name` = '$transfer_from'";
            $result2=$conn->query($sql1);
            if($result==true&&$result2==true)
            echo '<script>confirm("Transaction successful!! You will be redirected to the home page.")</script>';
            echo "<script>location.replace('home.php')</script>";
            }
            else
            {
                echo "<script>alert('Insufficient Balance!! Please enter again')</script>";
                echo "<script>location.replace('home.php')</script>";
            }

        }
        ?>
</body>
    </html>