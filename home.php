<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="home.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Prompt:wght@500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
div.card{
    position: absolute;
    top: 20%;
    left: 4%;
    background-color:#683805;
    opacity: 0.8;
}
div.card-image{
    background-image: url("https://www.pngitem.com/pimgs/m/421-4212736_member-area-customers-icon-png-transparent-png.png");
    height: 5cm;
    width: 6cm;
    opacity: 0.7;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
}
div.card-head{
    font-family: 'Josefin Sans', sans-serif;
    font-size: 140%;
    color: white;
    margin-left: 0.2cm;
}
div.card:hover{
    transform: translate(3px,-7px);
    text-decoration: underline;
    text-decoration-color: white;
    cursor: pointer;
}
div.all-customers{
    position: absolute;
    left: 15cm;
    top: 1.9cm;
}
.table-cust{
    width: 20cm;
    text-align: center;
    height: 10cm;
    background-color: white;
    border-style: none;
}
.head{
    font-size: 170%;
    text-decoration: underline;
    position: relative;
    left: 5cm;
}
</style>
<script type="text/javascript">
function displaycust(){
    document.getElementById("disp-all-cust").style.display="block";
}
</script>
</head>
    <title>Basic Banking System</title>
    <body>
    <div class="dashboard"><span class="bbs">BASIC BANKING SYSTEM</span></div>
    <div class="bg-image"></div>
    <div class="card" onclick="displaycust()">
    <div class="card-image"></div><hr><br>
    <div class="card-head">View all customers</div><br>
    </div>
    <div class="all-customers" id="disp-all-cust" style="display: none;">
    <?php
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
        $sql = "SELECT * FROM `customer table`";
        $result = $conn->query($sql);
          echo "<br><br>";
          echo "<span class='head'>Customer List</span>";
          echo "<br><br>";
          echo "";
          echo "<table class='table-cust' border='3px' width='100%' align='center'><tr style='background-color: #683805;color: white;height: 30px;font-size: 110%;'><th>Sl no.</th><th>Name</th><th>Email</th><th>Current Balance</th></tr>";
          $i=1;
          while($row = $result->fetch_assoc()) {
            echo "<tr><td>".$row["Sl No."]."</td><td>".$row["Name"]."</td><td>".$row["Email"]."</td><td>".$row["Current Balance"];
        }
          echo "</table>";
    }
    ?>
        <div class="input">
        <form method="POST" action="view-one-cust.php">
            <table>
                <tr style="height: 1cm; font-size: 120%;">
                    <td>Enter customer's name to view</td>
                    <td>: <input type="text" name="cust-name" style="height: 0.5cm; width: 5cm;"></td><br>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="View Account" style="height: 0.7Cm; width: 3cm;"></td>
                </tr>
            </table>
        </form>
    </div>
    </div>
    </body>
</html>