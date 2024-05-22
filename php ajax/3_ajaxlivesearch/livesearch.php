<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Live Search</title>
    <script>
    function liveSearch(str) {
        if (str.length == 0) {
            document.getElementById("result").innerHTML = "";
            return;
        } else {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == XMLHttpRequest.DONE) {
                    if (xhr.status == 200) {
                        document.getElementById("result").innerHTML = xhr.responseText;
                    } else {
                        alert('Error: ' + xhr.status);
                    }
                }
            };
            xhr.open("GET", "?q=" + str, true);
            xhr.send();
        }
    }
    </script>
</head>
<body>

<h2>Country Live Search</h2>
<form>
    Country name: <input type="text" onkeyup="liveSearch(this.value)">
</form>
<p>Results: <span id="result"></span></p>

<?php
if (isset($_GET["q"])) {
    // Database connection details
    $servername = "localhost";
    $username = "username";
    $password = "password";
    $dbname = "CountryDB";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Get the query parameter from the URL
    $q = $conn->real_escape_string($_GET["q"]);
    $sql = "SELECT name FROM countries WHERE name LIKE '%$q%' LIMIT 10";
    $result = $conn->query($sql);

    $hints = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $hints[] = $row["name"];
        }
    }

    // Output suggestion (or "no suggestion" if no hint was found)
    echo empty($hints) ? "no suggestion" : implode(", ", $hints);

    // Close the connection
    $conn->close();
    exit; // Important to exit to prevent further execution of the script
}
?>

</body>
</html>
