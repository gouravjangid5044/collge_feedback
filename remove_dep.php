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

    $dept = $_POST['dept'];

    $query1 = "SELECT * FROM `departments` WHERE name='$dept'";
    $sql1 = mysqli_query($con, $query1);
    $rows = mysqli_num_rows($sql1);
    if($rows>0)
    {
        $query2 = "DELETE FROM `departments` WHERE name='$dept'";
        $sql2 = mysqli_query($con, $query2);
        $query3 = "DELETE FROM `allocations` WHERE dept='$dept'";
        $sql3 = mysqli_query($con, $query3);
        if($sql2&&$sql3)
        {
            echo "<script>alert('Department deleted❗'); window.location.href='operations.php'</script>";
        } 
        else
        {
            echo "<script>alert('Facing Some Technical issue❗'); window.location.href='operations.php'</script>";
        }   
    }
    else
    {
        echo "<script>alert('Department Not present❗'); window.location.href='operations.php'</script>";
    }
}
?>