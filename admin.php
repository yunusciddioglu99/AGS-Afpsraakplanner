<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/admin.js" defer></script>
</head>
<body>
    <div class="container">
        <h1>Admin Dashboard</h1>
        <div class="week-overview">
            <table>
                <thead>
                    <tr>
                        <th>Tijd</th>
                        <th>Maandag</th>
                        <th>Dinsdag</th>
                        <th>Woensdag</th>
                        <th>Donderdag</th>
                        <th>Vrijdag</th>
                        <th>Zaterdag</th>
                        <th>Zondag</th>
                    </tr>
                </thead>
                <tbody id="admin-schedule">
                    <!-- Dynamisch gevuld -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
