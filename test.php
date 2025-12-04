<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="test.css">
    <link rel="icon" type="image/png" href="images/favicon.ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Mo-Portfolio</title>
    <meta http-equiv="refresh" content=""> 
 </head>
    <body>


     </body>
</html>

<!-- 

<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "portfolio";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>





<?php
require 'db.php';

// Fetch all projects
$sql = "SELECT * FROM projects ORDER BY id DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Projects</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>My Projects</h1>

<div class="projects-container">

<?php while($row = $result->fetch_assoc()): ?>
    <div class="project-card">
        <img src="uploads/<?php echo $row['image']; ?>" alt="">
        <h2><?php echo $row['title']; ?></h2>
        <p><?php echo $row['description']; ?></p>
        <a href="<?php echo $row['link']; ?>" target="_blank">View Project</a>
    </div>
<?php endwhile; ?>

</div>

</body>
</html>








.projects-container {
    display: grid;
    gap: 20px;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    padding: 20px;
}

.project-card {
    background: #111;
    color: white;
    padding: 20px;
    border-radius: 12px;
    border: 1px solid #222;
    transition: 0.2s;
}

.project-card:hover {
    transform: translateY(-5px);
    border-color: red;
}

.project-card img {
    width: 100%;
    border-radius: 10px;
    margin-bottom: 10px;
}
