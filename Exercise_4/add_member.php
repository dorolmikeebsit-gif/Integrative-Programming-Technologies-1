<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $birthday = $_POST['birthday'];
    $school = $_POST['school'];
    $course = $_POST['course'];
    $hobbies = $_POST['hobbies'];
    $quote = $_POST['quote'];
    $github = $_POST['github'];

    // Upload profile image
    $profileImage = "uploads/" . basename($_FILES["profile"]["name"]);
    move_uploaded_file($_FILES["profile"]["tmp_name"], $profileImage);

    // Upload QR code
    $qrCode = "uploads/" . basename($_FILES["qr"]["name"]);
    move_uploaded_file($_FILES["qr"]["tmp_name"], $qrCode);

    // Upload Avatar
    $avatarImage = "uploads/" . basename($_FILES["avatar"]["name"]);
    move_uploaded_file($_FILES["avatar"]["tmp_name"], $avatarImage);

    // Display result
    echo "<div class='profile-card' style='max-width:500px; margin:20px auto; padding:20px; text-align:center;'>";
    echo "<h2>✅ Member Added!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Birthday:</strong> $birthday</p>";
    echo "<p><strong>School:</strong> $school</p>";
    echo "<p><strong>Course:</strong> $course</p>";
    echo "<p><strong>Hobbies:</strong> $hobbies</p>";
    echo "<p><strong>Quote:</strong> $quote</p>";
    echo "<p><strong>Github:</strong> <a href='$github' target='_blank'>$github</a></p><br>";

    echo "<h3>Uploaded Images:</h3>";
    echo "<p>👤 Avatar:</p><img src='$avatarImage' width='80' height='80' style='border-radius:50%;'><br><br>";
    echo "<p>🖼️ Profile:</p><img src='$profileImage' width='120'><br><br>";
    echo "<p>📌 QR Code:</p><img src='$qrCode' width='120'>";
    echo "</div>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Add Member</title>
  <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    /* Reuse ng style.css para pareho */
    .form-container {
      max-width: 500px;
      margin: 50px auto;
      background: var(--card-bg, #fff);
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.15);
    }
    .form-container h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    .form-container input,
    .form-container textarea {
      width: 100%;
      margin-bottom: 12px;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 8px;
      font-size: 14px;
    }
    .form-container label {
      font-weight: bold;
      display: block;
      margin: 8px 0 4px;
    }
    .form-container button {
      display: block;
      width: 100%;
      background: #007bff;
      color: white;
      border: none;
      padding: 12px;
      border-radius: 8px;
      font-size: 16px;
      cursor: pointer;
      transition: 0.3s;
    }
    .form-container button:hover {
      background: #0056b3;
    }
  </style>
</head>
<body>
  <div class="form-container profile-card">
    <h2> Add Member</h2>
    <form method="POST" enctype="multipart/form-data">
      <input type="text" name="name" placeholder="Full Name" required>
      <input type="number" name="age" placeholder="Age" required>
      <input type="date" name="birthday" required>
      <input type="text" name="school" placeholder="School" required>
      <input type="text" name="course" placeholder="Course" required>
      <textarea name="hobbies" placeholder="Hobbies" required></textarea>
      <textarea name="quote" placeholder="Quote" required></textarea>
      <input type="url" name="github" placeholder="GitHub Link" required>

      <label>Upload Avatar (small icon):</label>
      <input type="file" name="avatar" accept="image/*" required>

      <label>Upload Profile Picture:</label>
      <input type="file" name="profile" accept="image/*" required>

      <label>Upload QR Code:</label>
      <input type="file" name="qr" accept="image/*" required>

      <button type="submit">Save Member</button>
    </form>
  </div>
</body>
</html>