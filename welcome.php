<?php
include('includes/header.php');
?>

<div class="welcome-container">
    <h2>Thank you for registration! The details you provided are as given below...</h2>
    <ul>
        <li>
            Full Name: 
            <p> <?php echo $_POST['first_name'] . " " . $_POST['last_name']; ?> </p>
        </li>
        <li>
            Email: 
            <p> <?php echo $_POST['email']; ?> </p>
        </li>
        <li>
            Course: 
            <p> <?php echo $_POST['course']; ?> </p>
        </li>
        <li>
            Hobbies: 
            <?php
                for($i = 0; $i < count($_POST['hobbies']); $i++) {
                    $hobby = $_POST["hobbies"][$i];
                    echo "<p> $hobby </p>";
                }
            ?>
        </li>
        <li>
            About: 
            <p> <?php echo $_POST['about']; ?> </p>
        </li>
        <li>
            Email Subscription: 
            <p> 
                <?php 
                    if(array_key_exists("subscribe",$_POST)) {
                        echo "<span>Subscribed!";
                    } else {
                        echo "<span>Not-Subscribed!";
                    }
                    echo "</span>";
                ?>
            </p>
        </li>
    </ul>
</div>

<?php
include('includes/footer.php');
?>