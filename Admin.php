<!DOCTYPE html>
<html lang="ar">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN-HBH</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 side-nav">
        </div>
      <div class="col-md-10 main-content">
        </div>
    </div>

  </div>
        <?php
        // متغيرات افتراضية
        $username = "root";
        $password = "";
        $database = "hbh";

        // استبدالها بمتغيرات البيئة
        if (isset($_ENV['DB_USERNAME'])) {
          $username = $_ENV['DB_USERNAME'];
        }
        if (isset($_ENV['DB_PASSWORD'])) {
          $password = $_ENV['DB_PASSWORD'];
        }
        if (isset($_ENV['DB_NAME'])) {
          $database = $_ENV['DB_NAME'];
        }

        try {
            $database = new PDO("mysql:host=localhost;dbname=$database", $username, $password);
            $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Set error handling mode
          
            $sql = "SELECT * FROM réservation";
            $stmt = $database->prepare($sql);
            $stmt->execute();
          } catch (PDOException $e) {
            echo 'Error connecting to the database: ' . $e->getMessage();
            exit(); // Exit script on error to prevent further execution
          }
          echo '<div class="table-responsive">';
            echo '<table class="table table-striped table-bordered">';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Nom</th>';
            echo '<th>Email</th>';
            echo '<th>Arriver</th>';
            echo '<th>Quitter</th>';
            echo '<th>Adultes</th>';
            echo '<th>Enfants</th>';
            echo '<th>Chambres</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
              echo '<tr>';
              echo '<td>' . $row['Nom'] . '</td>';
              echo '<td>' . $row['Email'] . '</td>';
              echo '<td>' . $row['Arriver'] . '</td>';
              echo '<td>' . $row['Quitter'] . '</td>';
              echo '<td>' . $row['Adultes'] . '</td>';
              echo '<td>' . $row['Enfants'] . '</td>';
              echo '<td>' . $row['Chambres'] . '</td>';
              echo '</tr>';
            }
          
        ?>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
