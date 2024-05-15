<?php
require_once ("api/connection.php");
require_once ("function.php");
?>

<?php
if (isset($_POST['submit'])) {
    $email = inject_checker($conn, $_POST['email']);
    $pass = inject_checker($conn, $_POST['pass']);

    if (empty($email)) {
        $error_msg = "Email field can not be empty";
    } elseif (empty($pass)) {
        $error_msg = "Password field can not be empty";
    } else {
        $query = "SELECT * FROM users WHERE email = '$email' AND pass = '$pass'";
        $run_query = mysqli_query($conn, $query);

        if (mysqli_num_rows($run_query) == 1) {
            session_start();

            while ($result = mysqli_fetch_assoc($run_query)) {
                $email = $result['email'];
                $_SESSION['user'] = $email;

                header("Location: welcome.php");
            }
        } else {
            $error_msg = "Login Failed";
        }
    }
}

?>