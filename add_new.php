<!-- </?php
session_start();
if(!isset($_SESSION['mail1']))
{
    header('location:dashboard_login.php');
}
?> -->
<?php
$con = mysqli_connect("localhost", "root", "", "college");
if($_SERVER['REQUEST_METHOD']=='POST')
{

    $dept=mysqli_real_escape_string($con,$_POST['dept']);
    $query2 = "SELECT * FROM `departments` WHERE name='$dept'";
    $sql5 = mysqli_query($con, $query2);
    $sql5=mysqli_num_rows($sql5);
    if(!$sql5)
    {
        $query1 = "INSERT INTO `departments` (`id`,`name`,`Q1`,`Q2`,`Q3`,`Q4`,`total`) VALUES(NULL,'$dept','5','5','5','5','1')";
        $sql1 = mysqli_query($con, $query1);
        if($sql1)
        {
            echo "<script>alert('New Department added👍'); window.location.href='operations.php'</script>";
        }
        else
        {
            echo "<script>alert('Facing some technical issue❗'); window.location.href='operations.php'</script>";
        }
    }
    else
    {
        echo "<script>alert('Department name already exist❗'); window.location.href='operations.php'</script>";
    }
}
?>