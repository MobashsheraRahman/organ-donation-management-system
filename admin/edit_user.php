<?php
// Start session and verify admin is logged in
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: admin_login.php");
    exit;
}

// Database connection
$con = mysqli_connect('localhost', 'root', '', 'organdb');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch user details
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query_user = "SELECT * FROM registration WHERE REGISTRATION_ID = $id";
    $result_user = mysqli_query($con, $query_user);
    $user = mysqli_fetch_assoc($result_user);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = $_POST['FIRST_NAME'];
    $last_name = $_POST['LAST_NAME'];
    $age = $_POST['AGE'];
    $blood_group = $_POST['BLOOD_GROUPr'];
    $gender = $_POST['Gender'];
    $email = $_POST['EMAIL'];
    $phone = $_POST['phoneR'];
    $address = $_POST['ADD_RESSr'];

    $query_update = "UPDATE registration SET 
        FIRST_NAME = '$first_name', 
        LAST_NAME = '$last_name', 
        AGE = $age, 
        BLOOD_GROUPr = '$blood_group', 
        Gender = '$gender', 
        EMAIL = '$email', 
        phoneR = $phone, 
        ADD_RESSr = '$address'
        WHERE REGISTRATION_ID = $id";

    if (mysqli_query($con, $query_update)) {
        header("Location: manage_users.php");
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1 class="text-center mt-3">Edit User</h1>
    <form method="POST" class="mt-4">
        <div class="mb-3">
            <label>First Name</label>
            <input type="text" name="FIRST_NAME" class="form-control" value="<?php echo $user['FIRST_NAME']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Last Name</label>
            <input type="text" name="LAST_NAME" class="form-control" value="<?php echo $user['LAST_NAME']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Age</label>
            <input type="number" name="AGE" class="form-control" value="<?php echo $user['AGE']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Blood Group</label>
            <select name="BLOOD_GROUPr" class="form-control">
                <option value="A+" <?php if ($user['BLOOD_GROUPr'] == 'A+') echo 'selected'; ?>>A+</option>
                <option value="A-" <?php if ($user['BLOOD_GROUPr'] == 'A-') echo 'selected'; ?>>A-</option>
                <option value="B+" <?php if ($user['BLOOD_GROUPr'] == 'B+') echo 'selected'; ?>>B+</option>
                <option value="B-" <?php if ($user['BLOOD_GROUPr'] == 'B-') echo 'selected'; ?>>B-</option>
                <option value="AB+" <?php if ($user['BLOOD_GROUPr'] == 'AB+') echo 'selected'; ?>>AB+</option>
                <option value="AB-" <?php if ($user['BLOOD_GROUPr'] == 'AB-') echo 'selected'; ?>>AB-</option>
                <option value="O+" <?php if ($user['BLOOD_GROUPr'] == 'O+') echo 'selected'; ?>>O+</option>
                <option value="O-" <?php if ($user['BLOOD_GROUPr'] == 'O-') echo 'selected'; ?>>O-</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Gender</label>
            <select name="Gender" class="form-control">
                <option value="Male" <?php if ($user['Gender'] == 'Male') echo 'selected'; ?>>Male</option>
                <option value="Female" <?php if ($user['Gender'] == 'Female') echo 'selected'; ?>>Female</option>
                <option value="other" <?php if ($user['Gender'] == 'other') echo 'selected'; ?>>Other</option>
            </select>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="EMAIL" class="form-control" value="<?php echo $user['EMAIL']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="number" name="phoneR" class="form-control" value="<?php echo $user['phoneR']; ?>" required>
        </div>
        <div class="mb-3">
            <label>Address</label>
            <textarea name="ADD_RESSr" class="form-control" required><?php echo $user['ADD_RESSr']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="manage_users.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
</body>
</html>
