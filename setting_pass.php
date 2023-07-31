<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Password Reset</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
<?php
$con = mysqli_connect("localhost", "root", "", "college");
$token = mysqli_real_escape_string($con, $_GET['token']);
$user = mysqli_real_escape_string($con, $_GET['user']);
date_default_timezone_set('Asia/Kolkata');
$curr_time = date('Y-m-d H:i:s');
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $pass = mysqli_real_escape_string($con, $_POST['password']);
    $cn_pass = mysqli_real_escape_string($con, $_POST['confirm-password']);
    $token = mysqli_real_escape_string($con, $_GET['token']);
    $user = mysqli_real_escape_string($con, $_GET['user']);
    $con = mysqli_connect("localhost", "root", "", "college");
    if($pass==$cn_pass)
    {
        $query1 = mysqli_query($con,"UPDATE `faculty` SET password='$pass' WHERE email='$user'");
        if($query1)
        {
            echo "<script>alert('Password changed succesfully👍');</script>";
        }
    }
    else
    {
        echo "<script>alert('Confirm password and password not matches enter again❗');</script>";
    }
}
$query = mysqli_query($con, "SELECT * FROM `faculty` WHERE email='$user' and time>'$curr_time'");
$rows = mysqli_num_rows($query);
if($rows>0)
{
   ?>
   <section class="bg-gray-50 dark:bg-gray-900">
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <div class="w-full p-6 bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md dark:bg-gray-800 dark:border-gray-700 sm:p-8">
          <h2 class="mb-1 text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
              Change Password
          </h2>
          <form class="mt-4 space-y-4 lg:mt-5 md:space-y-5" action="setting_pass.php?token=<?php echo $token?>&user=<?php echo $user ?>" method="POST">
              <div>
                  <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
                  <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
              </div>
              <div>
                  <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm password</label>
                  <input type="confirm-password" name="confirm-password" id="confirm-password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
              </div>
              <button type="submit" class="w-full text-white bg-blue-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Reset passwod</button>
          </form>
      </div>
  </div>
</section>
   <?php
}
else
{
    echo "<script>alert('Link is expired 😔');</script>";
}
?>
</body>
</html>
