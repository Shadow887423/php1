<?php
$studentProfile = [
    "StudentID" => "23210024",
    "FullName" => "Paulo Christian Ugbinar",
    "Program" => "BSIT",
    "YearLevel" => "3rd Year",
    "Section" => "3C",
    "Email" => "test@gmail.com",
    "Status" => "Enrolled",
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <style>
        table {
            border-collapse: collapse;
            width: 300px; 
        }
        th, td {
            border: 1px solid black; 
            padding: 8px;
        }
        th {
            text-align: left;
        }
    </style>   
</head>
<body>
    <h2>Students Profile</h2>
    <table>
        <tr>
            <th>Information</th>
            <th>Details</th>
        </tr>
        
        <?php foreach($studentProfile as $key => $value): ?>
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $value; ?></td>
        </tr>  
        <?php endforeach; ?>
    </table>
</body>
</html>
