<?php
// Database connection values
$host = 'localhost';
$user = 'djwint';
$password = 'bleach17';
$dbname = 'employee_manager';
$employeelist = [];

// Set DSN
$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;

// Create a PDO instance
$pdo = new PDO($dsn, $user, $password);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

# PDO Query

$stmt = $pdo->query('SELECT * FROM employee');

// while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//     echo $row['firstname'] . " " . $row['lastname'] . '<br>';
// }
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo $row['firstname'] . " " . $row['lastname'] . '<br>';
}
# PREPARED STATEMENTS (prepare & execute)

// UNSAFE
//$sql = "SELECT * FROM employee WHERE firstname = '$firstname'";

// Fetch Multiple EMPLOYEES

// User Input
// $firstname = "Terry";
// $id = 1;
// Positional Params
// $sql = 'SELECT * FROM employee WHERE firstname = ?';
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$firstname]);
// $employees = $stmt->fetchAll();

// NAMES PARAMS
// $sql = 'SELECT * FROM employee WHERE firstname = :firstname';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['firstname' => $firstname]);
// $employees = $stmt->fetchAll();

//var_dump($employees);
// foreach ($employees as $employee) {
//     echo $employee->firstname . ' ' . $employee->lastname . '<br>';
// }

// FETCH SINGLE EMPLOYEE

// $sql = 'SELECT * FROM employee WHERE id = :id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id' => $id]);
// $employee = $stmt->fetch();

// echo $employee->firstname . ' ' . $employee->lastname;

// INSERT DATA
// $firstname = "Rebecca";
// $lastname = "Ratoli";

// $sql = 'INSERT INTO employee(firstname, lastname) VALUES(:firstname, :lastname)';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['firstname' => $firstname, 'lastname' => $lastname]);
// echo 'Employee Added';

// UPDATE DATA
// $id = 8;
// $firstname = "Janet";

// $sql = 'UPDATE employee SET firstname = :firstname WHERE id =:id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['firstname' => $firstname, 'id' => $id]);
// echo 'Employee Updated';

// DELETE DATA
// $id = 3;

// $sql = 'DELETE FROM employee WHERE id =:id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id' => $id]);
// echo 'Employee Deleted';


// SEARCH DATA
// $search = "%Terry%";
// $sql = 'SELECT * FROM employee WHERE firstname LIKE ?';
// $stmt = $pdo->prepare($sql);
// $stmt->execute([$search]);
// $employees = $stmt->fetchAll();

// foreach ($employees as $employee) {
//     echo $employee->firstname . ' ' . $employee->lastname . '<br>';
// }
