<!DOCTYPE html>
<html>
<head>
    <title>Video games table</title>
</head>
<body>
    <h1>Video Games Table</h1>

    <?php
    // Connecting to database
    $mysqli = mysqli_connect("mi-linux", "2349472", "52t0w1", "db2349472");
    if ($mysqli -> connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
        exit();
    } else {
        echo 'Connected to the database successfully.';
    }

    $res = mysqli_query($mysqli, "SELECT gameName, gameGenre, gameRating, gameRelease FROM VideoGames");

    if(!$res) {
        print("MySQL error: " . mysqli_error($mysqli));
        exit;
    }

   
    echo '<table border=2; bgcolor="#d9dddc">
            <tr>
                <th>Game Name</th>
                <th>Game Genre</th>
                <th>Game Rating</th>
                <th>Game Release</th>
            </tr>';

    
    while($row = mysqli_fetch_assoc($res)) {
        echo '<tr>
                <td>' . $row['gameName'] . '</td>
                <td>' . $row['gameGenre'] . '</td>
                <td>' . $row['gameRating'] . '</td>
                <td>' . $row['gameRelease'] . '</td>
            </tr>';
    }

    echo '</table>';

    mysqli_close($mysqli);
    ?>
</body>
</html>