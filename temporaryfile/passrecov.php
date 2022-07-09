<form action="" method="post">
    <input type="text" name="email" placeholder="enter your mail">
    <button type="submit">Submit</button>
</form>

<?php 
    include('../connection.php');
    if(isset($_POST['email']))
    {
        $to_email = $_POST['email'];

        $sql = "SELECT * FROM `customers` WHERE `customer_email`='$to_email'";
        $result = mysqli_query($conn,$sql);

        $count = mysqli_num_rows($result);

        if($count>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                    $pass_rec = $row['customer_password'];
                    echo'Your recovered Pass:  '.$pass_rec;      
            }
        }
        else{
            echo 'No data found here..';
        }
    }
?>