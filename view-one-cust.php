<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Prompt:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="home.php">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1"></head>
<style type="text/css">
        body,html{
            height:100%;
        }
*{
    margin: 0%;
    padding: 0%;
}
div.dashboard{
    background-color:#683805;
    height: 7%;
    width: 100%;
    padding: 7px 0 7px 0px;
}
span.bbs{
    font-family: 'Abel', sans-serif;
font-family: 'Prompt', sans-serif;
    font-size: 200%;
    margin-left: 35%;
    font-stretch: ultra-expanded;
    color:white;
}
    .bg-image {
    background-image:url("https://www.telegraph.co.uk/content/dam/personal-banking/2016/03/10/Smashed_Piggy_Bank.B5P23P_Smashed_Piggy_Bank_trans_NvBQzQNjv4BqplGOf-dgG3z4gg9owgQTXEmhb5tXCQRHAvHRWfzHzHk.jpg");
  height: 91%;
  opacity: 0.5;
  filter: blur(1px);
  background-position: center;
  background-size: cover;
}
.head{
    position: absolute;
    top: 3.5cm;
    font-size: 170%;
    left: 2cm;
}
.table-cust{
    position: absolute;
    top: 4.5cm;
    width: 20cm;
    text-align: center;
    left: 2cm;
    background-color: white;
}
.input{
    position: absolute;
    top: 7cm;
    left: 3cm;
    font-size: 120%;
}
.all{
    position: absolute;
    right: 2cm;
    top: 3.5cm;
}
.all-table{
    width: 10cm;
    height: 10cm;
    text-align: center;
    background-color: white;
}
.line{
    width: 4px;
    position: absolute;
    background-color:#683805;
    height: 17cm;
    top:-1cm;
    right: 12cm;
    bottom: 0cm;
}
</style>
<title>Basic Banking System</title>
    <body>
    <div class="dashboard"><span class="bbs">BASIC BANKING SYSTEM</span></div>
    <div class="bg-image"></div>
    <div class="chosen-cust">
    <?php
    session_start();
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="customer";
    $conn=new mysqli($servername,$username,$password,$dbname);
    if($conn->connect_error)
    {
        alert("Unable to access database");
    }
    else{
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            $name=$_POST["cust-name"];
            $_SESSION['name']=$name;
            $sql1="SELECT `Current Balance` FROM `customer table` WHERE `Name` = '$name'";
            $res1=$conn->query($sql1);
            $row1=$res1->fetch_array(MYSQLI_NUM);
            $_SESSION['bal']=$row1[0];
        $sql = "SELECT `Name`, `Email`, `Current Balance` FROM `customer table` WHERE `Name`='$name'";
        $result = $conn->query($sql);
          echo "<br><br>";
          echo "<span class='head'>".$name."'s account details: "."</span>";
          echo "<br>";
          echo "";
          echo "<table class='table-cust' border='1px' width='100%' align='center'><tr style='background-color: #683805;color: white;height: 30px;font-size: 110%;'><th>Name</th><th>Email</th><th>Current Balance</th></tr>";
          while($row = $result->fetch_assoc()) {
            echo "<tr style='height: 25px;'><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Current Balance"];
        }
          echo "</table>";
    }

    }
    ?>
     <div class="input">
        <form method="POST" action="transfer.php">
            <table>
                <tr style="height: 1cm; font-size: 110%;">
                    <td>Customer's name to transfer to</td>
                    <td>: <input type="text" name="transfer-cust-name" style="height: 0.5cm; width: 5cm;"></td>
                </tr>
                <tr style="height: 1cm; font-size: 110%;">
                    <td>Transfer amount</td>
                    <td>: <input type="number" name="transfer-amt" style="height: 0.5cm; width: 5cm;"></td>
                </tr>
                <tr>
                    <td colspan="2" ><input type="submit" value="Transfer" style="height: 0.8cm; width: 3cm;font-size: 90%;"></td>
                </tr>
            </table>
        </form>
    </div>
    </div>
    <div class="all">
        <span style="font-size: 170%; color: #683805; margin-left: 3cm;"> Customer List </span>
        <?php
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="customer";
        $conn=new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error)
        {
            echo "<script>Unable to access database.</script>";
        }
        else{
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $name=$_POST['cust-name'];
                $sql="SELECT `Name`, `Email` FROM `customer table` WHERE `Name` != '$name'";
                $result=$conn->query($sql);
                echo "<table border='1px' class='all-table'>
                    <tr style='background-color: #683805; color: white;'><th>Name</th><th>Email</th></tr>";
                while($row=$result->fetch_assoc())
                {
                    echo "<tr><td>".$row['Name']."</td><td>".$row['Email']."</td></tr>"; 
                }
            }
        }
        ?>
    </div>
    <div class="line"></div>
</body>
</html>