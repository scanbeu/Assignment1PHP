<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Display Data</title>
    <meta name="description" content="Display student information from the database">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <section style="margin-top: 0px;" class="masthead">
        <div>
            <h1>STUDENT DATA</h1>
        </div>
    </section>
    <main style="margin-top: -200px;" class="container">
        <section class="form-row row justify-content-center">
            <?php
            // Database connection
            $db_server = "localhost";
            $db_username = "root";
            $db_password = "Sahil#12213456";
            $db_name = "website_db";

            $conn = new mysqli($db_server, $db_username, $db_password, $db_name);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            // Retrieve and display data
            $sql = "SELECT * FROM student"; // Corrected table name

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo '<table class="table">';
                echo '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Grade</th></tr>';
                while ($row = $result->fetch_assoc()) {
                    echo '<tr>';
                    echo '<td>' . $row['idstudent'] . '</td>';
                    echo '<td>' . $row['fname'] . '</td>';
                    echo '<td>' . $row['lname'] . '</td>';
                    echo '<td>' . $row['grade'] . '</td>';
                    echo '</tr>';
                }
                echo '</table>';
            } else {
                echo "No data found.";
            }

            $conn->close();
            ?>
        </section>
    </main>
</body>

</html>
