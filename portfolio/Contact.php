<?php
$errors = [];
$fname = $lname = $gender = $email = $reason = $topic = $date = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    if(empty($_POST["fname"])) $errors["fname"] = "Required";
    else $fname = htmlspecialchars($_POST["fname"]);

    if(empty($_POST["lname"])) $errors["lname"] = "Required";
    else $lname = htmlspecialchars($_POST["lname"]);

    if(empty($_POST["gender"])) $errors["gender"] = "Required";
    else $gender = $_POST["gender"];

    if(empty($_POST["email"])) $errors["email"] = "Required";
    else $email = htmlspecialchars($_POST["email"]);

    if(empty($_POST["reason"])) $errors["reason"] = "Required";
    else $reason = $_POST["reason"];

    if(empty($_POST["topic"])) $errors["topic"] = "Required";
    else $topic = $_POST["topic"];

    if(empty($_POST["date"])) $errors["date"] = "Required";
    else $date = $_POST["date"];
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Contact Me</title>
</head>

<body style="font-family: Arial; background:#f5f5f5;">

<h2 style="text-align:center;">Contact Me</h2>

<div style="width:450px; margin:auto; background:white; padding:20px; border-radius:8px;">

<form method="post">

<!-- First Name -->
<div style="margin-bottom:12px;">
<label>First Name:</label><br>
<input type="text" name="fname" value="<?php echo $fname; ?>" style="width:100%; padding:6px;">
<span style="color:red;"><?php echo $errors["fname"] ?? ""; ?></span>
</div>

<!-- Last Name -->
<div style="margin-bottom:12px;">
<label>Last Name:</label><br>
<input type="text" name="lname" value="<?php echo $lname; ?>" style="width:100%; padding:6px;">
<span style="color:red;"><?php echo $errors["lname"] ?? ""; ?></span>
</div>

<!-- Gender -->
<div style="margin-bottom:12px;">
<label>Gender:</label><br>
<input type="radio" name="gender" value="Male" <?php if($gender=="Male") echo "checked"; ?>> Male
<input type="radio" name="gender" value="Female" <?php if($gender=="Female") echo "checked"; ?>> Female
<br>
<span style="color:red;"><?php echo $errors["gender"] ?? ""; ?></span>
</div>

<!-- Email -->
<div style="margin-bottom:12px;">
<label>Email:</label><br>
<input type="email" name="email" value="<?php echo $email; ?>" style="width:100%; padding:6px;">
<span style="color:red;"><?php echo $errors["email"] ?? ""; ?></span>
</div>

<!-- Reason -->
<div style="margin-bottom:12px;">
<label>Reason of Contact:</label><br>
<select name="reason" style="width:100%; padding:6px;">
<option value="">Select</option>
<option <?php if($reason=="Project") echo "selected"; ?>>Project</option>
<option <?php if($reason=="Thesis") echo "selected"; ?>>Thesis</option>
<option <?php if($reason=="Job") echo "selected"; ?>>Job</option>
</select>
<span style="color:red;"><?php echo $errors["reason"] ?? ""; ?></span>
</div>

<!-- Topic -->
<div style="margin-bottom:12px;">
<label>Topics:</label><br>
<select name="topic" style="width:100%; padding:6px;">
<option value="">Select</option>
<option <?php if($topic=="Web Development") echo "selected"; ?>>Web Development</option>
<option <?php if($topic=="Mobile Development") echo "selected"; ?>>Mobile Development</option>
<option <?php if($topic=="AI / ML Development") echo "selected"; ?>>AI / ML Development</option>
</select>
<span style="color:red;"><?php echo $errors["topic"] ?? ""; ?></span>
</div>

<!-- Date -->
<div style="margin-bottom:12px;">
<label>Consultation Date:</label><br>
<input type="date" name="date" value="<?php echo $date; ?>" style="width:100%; padding:6px;">
<span style="color:red;"><?php echo $errors["date"] ?? ""; ?></span>
</div>

<!-- Submit -->
<div>
<button type="submit" style="padding:8px 15px; background:#AA8F39; color:white; border:none;">
Submit
</button>
</div>

</form>

</div>

<p style="text-align:center; margin-top:20px;">
© 2026 Niladri Roy Nion — All Rights Reserved
</p>

</body>
</html>