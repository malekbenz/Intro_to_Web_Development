<?php
if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}
?>
<form action="" method="post">
    Name: <input type="text" name="personal[name]" /><br />
    Email: <input type="text" name="personal[email]" /><br />
    Language: <br />
    <select multiple name="language[]">
        <option value="java">Java</option>
        <option value="php">PHP</option>
        <option value="javascript">Javascript</option>
    </select><br />

    
    <input type="submit" value="submit me!" /> <br> <br>

    <!-- When the user clicks somewhere on the image, the accompanying form will be transmitted to the server with two additional variables, sub_x and sub_y -->
    <input type="image" height="35px" src="images/click.png" name="sub" /> <br>
</form>