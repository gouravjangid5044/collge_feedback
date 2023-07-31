<?php
session_start();
if(!isset($_SESSION['mail1']))
{
    header('location:dashboard_login.php');
}
?>
<?php
$con = mysqli_connect("localhost", "root", "", "college");
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $user = $_POST['user'];

    $query1 = "SELECT * FROM `faculty` WHERE email='$user'";
    $sql1 = mysqli_query($con, $query1);
    $rows = mysqli_num_rows($sql1);
    if($rows>0)
    {
        $query2 = "DELETE FROM `faculty` WHERE email='$user'";
        $sql2 = mysqli_query($con, $query2);
        $query3 = "DELETE FROM `allocations` WHERE email='$user'";
        $sql3 = mysqli_query($con, $query3);
        if($sql2&&$sql3)
        {
            echo "<script>alert('User Removed👍'); window.location.href='operations.php'</script>";
        }
        else
        {
            echo "<script>alert('Facing Some Technical issue❗'); window.location.href='operations.php'</script>";
        }
    }
    else
    {
        echo "<script>alert('User not Present❗'); window.location.href='operations.php'</script>";
    }
}
?>