<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q3</title>
</head>
<body>
    
<?php
function multiplication($multiplier) {
    $results = [];
    for ($i = 1; $i <= 12; $i++) {
        $results[] = [
            'no' => $i,
            'multiplier' => $multiplier,
            'answer' => $i * $multiplier
        ];
    }
    return $results;
}

$multiplier = 5; 
$results = multiplication($multiplier);
?>

<table border="1" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Multiplier</th>
        <th>Answer</th>
    </tr>
    <?php foreach ($results as $row): ?>
    <tr>
        <td><?php echo $row['no']; ?></td>
        <td><?php echo $row['multiplier']; ?></td>
        <td><?php echo $row['answer']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>