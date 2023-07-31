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
    $id = $_POST['id'];
    $dept = $_POST['dept'];

    $query1 = "SELECT * FROM `allocations` WHERE email='$id'and dept='$dept'";
    $sql1 = mysqli_query($con, $query1);
    $rows = mysqli_num_rows($sql1);
    if($rows>0)
    {
        echo "<script>alert('Already in this Department❗'); window.location.href='operations.php'</script>";
    }
    else
    {
        $query = "INSERT INTO `allocations` (`id`,`email`,`dept`,`checker`) VALUES(NULL,'$id','$dept','NO')";
        $sql = mysqli_query($con, $query);
        if($sql)
        {
            echo "<script>alert('Department assigned👍'); window.location.href='operations.php'</script>";
        }
        else
        {
            echo "<script>alert('Facing Some Technical issue❗'); window.location.href='operations.php'</script>";
        }
    }
    
}
?>