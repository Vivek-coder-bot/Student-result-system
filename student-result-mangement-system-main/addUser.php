<?php
require_once 'includes/admin_header.php';
if (!session_id()) session_start();
if (!$_SESSION['login']){ 
    header("Location:admin.php");
    exit();
}
?>


<div>
    <p>Add a student Here</p>
    <form action="includes/addUser_inc.php" method="post">
        
        <input type="number" name="id" placeholder="Roll Number" required >
        <input type="text" name="username" placeholder="Name" required>
        <input type="date" name="dob" placeholder="Date of Birth" required>
        <input type="text" name="fname" placeholder="Father's Name" required>

        <button type="submit"  name="submit" >Submit</button>
    </form>
</div>



<?php
    require_once 'includes/footer.php';
?>
