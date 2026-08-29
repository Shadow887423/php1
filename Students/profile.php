<!DOCTYPE html>
<html>
<head>
    <title>Student Profile</title>

    <style>
        body {
            margin: 0;
            padding-top: 50px;
            display: flex;
            justify-content: center;
        }

        .profile {
            text-align: center;
        }

        table {
            border-collapse: collapse;
            width: 500px;
        }

        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>

    <div class="profile">
        <h2>Student Profile</h2>

        <?php
        $student = [
            "Student ID" => "23210024",
            "Full Name" => "Paulo Christian A. Ugbinar",
            "Program" => "BSIT",
            "Year Level" => "3rd Year",
            "Section" => "BSIT-3C",
            "Email" => "paulochristianugbinar45@gmail.com",
            "Status" => "Active"
        ];
        ?>

        <table>
            <?php foreach ($student as $key => $value): ?>
                <tr>
                    <th><?php echo $key; ?></th>
                    <td><?php echo $value; ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

</body>
</html>