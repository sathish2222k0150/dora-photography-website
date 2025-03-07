<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dora Photography</title>
  <link rel="icon" href="./Images/logo.jpg" type="icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
  <style>
  /* Style the dropdown container */
.dropdown {
    display: inline-block;
    position: relative;
}

/* Style the button inside the dropdown */
.dropdown .dropbtn {
    background-color:transparent;
    color:  #999;
    padding: 10px;
    font-size: 12px;
    border: none;
    cursor: pointer;
    margin-left: 5px;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
    z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

/* Change color on hover */
.dropdown-content a:hover {
    background-color: #f1f1f1;
}

/* Show the dropdown content when the mouse is over the dropdown button */
.dropdown:hover .dropdown-content {
    display: block;
}

</style>
</head>
<body>
<link rel="stylesheet" href="admin.css">
<script src="admin.js"></script>
<div class='all'>

  <div class='admin-header'>

    <div class='header-text'>
      <h3>Adminstrator</h3>

      <div class='header-greet'>
        <span><i class="fa">&#xf007;</i> Hello Admin</span>

        <a href='logout.php' class='logout-btn'><i class="fa">&#xf011;</i></a>
      </div>

    </div>
  </div>

  <div class='admin-sidebar'>

    <li>

      <input placeholder='Search...' class='search-input' type='search' /><input type='submit' id='search-btn-1' class='fa' value='&#xf002;' />

    </li>

    <li>

      <a href='User.php'><i class="fa">&#xf0e4;</i> Dashboard</a>

    </li>

    <li>

      <a href='Users.php'><i class="fa">&#xf0c0;</i> Users</a>

    </li>

    <div class="dropdown">
    <a href="" class="dropbtn"><i class="fa">&#xf055;</i> Add Update</a>
    <div class="dropdown-content">
        <a href="index 2.php">Image</a>
        <a href="index 3.php">Video</a>
    </div>
</div>


    <li>

      <a href='register.php'><i class="fa">&#xf132;</i> Create Admin</a>

    </li>

    <span onclick="size()">
      <li id='all-nav' onclick="myFunction()">

        <a href= "Bookings.php" class='dropdown-btn'>📖 Bookings </a> <i class="fa fa-angle-down" aria-hidden="true"></i>

        <ul id='nav' class='second-nav-ul'>
          <li class='nav-items'>
            <a href='Booking details.php'>Bokkings Info</a>
          </li>

        </ul>

      </li>

    </span>

    

  </div>

  <div class='center-content'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class='all-border'>

      <div class='shows-location'>

        <div class='location-text'>

          <span class='location'>Admin <i class="fa">&#xf101;</i> Dashboard</span>

        </div>

      </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-md-6 mx-auto">
      <?php
          // Database Connection
          $con = mysqli_connect("localhost", "root", "", "db_sample");
          $message = "";
          if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          if (isset($_FILES["images"])) {
            $allowedTypes = ["png", "jpg", "jpeg"];
            $totalImages = count($_FILES['images']['name']);

            // Check if more than 30 files are selected
            if ($totalImages > 30) {
              $message = "<div class='alert alert-danger'>Please select up to 30 images.</div>";
            } else {
              for ($i = 0; $i < $totalImages; $i++) {
                $fileType = strtolower(pathinfo($_FILES["images"]["name"][$i], PATHINFO_EXTENSION));

                // Check Image Extension
                if (!in_array($fileType, $allowedTypes)) {
                  $message = "<div class='alert alert-danger'>Image Upload Failed. Invalid Image Format.</div>";
                  break; // Stop processing if an invalid format is found
                } elseif ($_FILES["images"]["size"][$i] > 307200) {
                  // Check Image Size greater than 300KB
                  $message = "<div class='alert alert-danger'>Image Upload Failed. Image Size greater than 300KB.</div>";
                  break; // Stop processing if size exceeds limit
                } else {
                  $fileName = time() . "_" . $i . "." . $fileType;
                  $category = $_POST['category']; // Get the selected category from the form

                  if (move_uploaded_file($_FILES["images"]["tmp_name"][$i], "uploads/" . $fileName)) {
                    // Save image name and category in the database
                    $sql = "INSERT INTO tbl_images (img, category) VALUES ('$fileName', '$category')";
                    if ($con->query($sql)) {
                      $message = "<div class='alert alert-success'>Image(s) Upload Successfully.</div>";
                    } else {
                      $message = "<div class='alert alert-danger'>Image Upload Failed. Try Again.</div>";
                      break; // Stop processing if database insertion fails
                    }
                  } else {
                    $message = "<div class='alert alert-danger'>Image Upload Failed. Try Again.</div>";
                    break; // Stop processing if move_uploaded_file fails
                  }
                }
              }
              // Redirect to prevent form resubmission
      header("Location: " . $_SERVER['REQUEST_URI']);
      exit();
            }
          }
        }
        ?>

        <form method='post' action='index 2.php' enctype='multipart/form-data'>
          <?php echo $message; ?>
          <div class='form-group'>
            <label>Choose Images (up to 20)</label>
            <input type='file' name='images[]' multiple required class='form-control'>
          </div>
          <div class='form-group'>
            <label>Select Category</label>
            <select name='category' class='form-control' required>
              <option value='baby_shoot'>Baby Shoot</option>
              <option value='wedding_shoot'>Wedding Shoot</option>
              <option value='baby_shower_shoot'>Baby Shower Shoot</option>
            </select>
          </div>
          <input type='submit' name='submit' value='Submit' class='btn btn-primary'>
        </form>
      </div>
    </div>
    <div class='row'>
      <div class='col-md-12'>
        <table class='table'>
          <thead>
            <tr>
              <th>SNo</th>
              <th>Image</th>
              <th>Category</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
             $sql = "SELECT * FROM tbl_images ORDER BY uploaded_timestamp DESC";
             $res = $con->query($sql);
             
             if ($res === false) {
                 die("Error in the SQL query: " . mysqli_error($con));
             }
             
             $i = 0;
             while ($row = $res->fetch_assoc()) {
                 $i++;
                 echo "
                   <tr>
                     <td>{$i}</td>
                     <td><img src='uploads/{$row["img"]}' style='height:80px;' ></td>
                     <td>{$row["category"]}</td>
                     <td>
                       <button class='btn btn-danger' onclick='confirmDelete({$row["id"]}, \"{$row["img"]}\")'>Delete</button>
                     </td>
                   </tr>
                 ";
             }
             
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script>
    function confirmDelete(id, imageName) {
      if (confirm("Are you sure you want to delete this image?")) {
        window.location.href = 'delete.php?id=' + id + '&name=' + imageName;
      }
    }
  </script>
</body>
</html>
