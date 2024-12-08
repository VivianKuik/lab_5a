<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q1</title>
</head>
<body>

<?php  
    $name = "Vivian Kuik Huoi Thin"; 
    $matricNo = "AI220380"; 
    $course = "Bachelor of Computer Science (Software Engineering)"; 
    $year = "3"; 
    $address = "UTHM"; 
?>

<table border="1" cellpadding="5">
    <tr>
        <td><strong>Name</strong></td>
        <td><?php echo $name; ?></td>
    </tr>
    <tr>
        <td><strong>Matric Number</strong></td>
        <td><?php echo $matricNo; ?></td>
    </tr>
    <tr>
        <td><strong>Course</strong></td>
        <td><?php echo $course; ?></td>
    </tr>
    <tr>
        <td><strong>Year of Study</strong></td>
        <td><?php echo $year; ?></td>
    </tr>
    <tr>
        <td><strong>Address</strong></td>
        <td><?php echo $address; ?></td>
    </tr>
</table>
    
</body>
</html>