<?php

$servername = "localhost";
$username = "test";
$password = "1234";
$dbname = "Clients";
try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    $sql = "CREATE DATABASE clients";
    $conn->exec($sql);
    echo "Database created successfully";
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE usernames (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR (30) NOT NULL,
    surname VARCHAR (30) NOT NULL)";
    $conn->exec($sql);
    $sql = "INSERT INTO usernames (name, surname)
       VALUES ('Jeff', 'Bezos'),
       ('Bill', 'Gates'),
    ('Warrenn', 'Buffett'),
    ('Benard', 'Arno'),
    ('Carlos', 'Slim Elu'),
    ('Amancio', 'Ortega'),
    ('Larry', 'Ellison'),
    ('Mark', 'Zuckerberg'),
    ('Michael', 'Bloomberg'),
    ('Larry', 'Page')";
        $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "last id" . $last_id;

        $sql = "CREATE TABLE dob (
    dob DATE,
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT)";
    $conn->exec($sql);
    $sql = "INSERT INTO dob (dob)
       VALUES ('1964-01-12'),
       ('1955-10-28'),
       ('1930-08-30'),
       ('1949-03-05'),
       ('1940-01-28'),
       ('1936-03-28'),
       ('1944-08-17'),
       ('1984-05-14'),
       ('1942-02-14')";
            $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "last id" . $last_id;

    $sql = "CREATE TABLE tel (
    tel VARCHAR (30) NOT NULL,
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT)";
    $conn->exec($sql);
    $sql = "INSERT INTO tel (tel)
       VALUES ('810 1 206-922-0880'),
       ('810 1 206-922-0880'),
       ('8 800 200 8001'),
       ('402-346-1400'),
       ('810 44 20 7172 0172'),
       ('8–800–333–51–73'),
       ('8-800-301-02-35'),
       ('810 1 650-506-7000')";
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    echo "last id" . $last_id;
    echo "All Tables Created Successfully";


    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM usernames a
            JOIN dob b 
            ON a.id = b.id   
            JOIN tel c
            ON b.id = c.id ";
    $result = $conn -> query($sql);
    echo "<table width='100%' border ='1'><tr>";
    echo "<td>id</td>
          <td>name</td>
          <td>surname</td>
          <td>dob</td>
          <td>tel<td>
          ";
    foreach ($result as $table)
    {
        echo "<tr><td>$table[id] .</td>
              <td>$table[name] .</td>
              <td>$table[surname] .</td>
              <td>$table[dob] .</td>
              <td>$table[tel] .</td></tr>";


    }
    echo  "</tr></table>";
}

catch (PDOException $e) {
    echo $sql . $e->getMessage();
}
?>


