<?php
require "inc/header.php";
?>
<div class="container">
    <h1>Add Employee</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="form-group">
            <label>First Name:</label>
            <span class="error">* <?php echo $firstnameErr; ?></span>
            <input type="text" name="firstname" placeholder="firstname" class="form-control">
        </div>
        <div class="form-group">
            <label>Last Name:</label>
            <span class="error">* <?php echo $lastnameErr; ?></span>
            <input type="text" name="lastname" placeholder="lastname" class="form-control">
        </div>
        <div class="form-group">
            <label>Department:</label>
            <select class="form-control" id="exampleFormControlSelect1" name="department">
                <option value="Deli Manager">Deli Manager</option>
                <option value="Sales Associate">Sales Associate</option>
                <option value="Produce Manager">Produce Manager</option>
                <option value="Cashier">Cashier</option>
            </select>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php require "inc/footer.php"; ?>