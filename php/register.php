<?php
include '../php/connect.php';

if(isset($_POST["register"])){

    if(!empty($_POST['Name']) && !empty($_POST['Email'])&&!empty($_POST['Adress'])&&!empty($_POST['Password'])) {
        $Name=htmlspecialchars($_POST['Name']);
        $Email= htmlspecialchars($_POST['Email']);
        $Adress=htmlspecialchars($_POST['Adress']);
        $Password=htmlspecialchars($_POST['Password']);
        $query=mysqli_query($myConnection, "SELECT * FROM users WHERE Name='".$Name."'");
        $numrows=mysqli_num_rows($query);
        if($numrows==0)
        {
            $sql="INSERT INTO users (Name, Email, Password, Adress) VALUES('$Name','$Email','$Password','$Adress')";
            $result=mysqli_query($myConnection, $sql);
            if($result){
                $message = "Account Successfully Created";
                sleep(3);
                header("Location: /web/index.html");
            } else {
                $message = "Failed to insert data information!";
                sleep(1);
                header("Location: /web/register.html");
            }
        } else {
            $message = "That username already exists! Please try another one!";
            sleep(1);
            header("Location: /web/register.html");
        }
    } else {
        $message = "All fields are required!";
        sleep(1);
        header("Location: /web/register.html");
    }
}
?>

<?php if (!empty($message)) {echo "<p class=\"error\">" . "MESSAGE: ". $message . "</p>";} ?>