<!DOCTYPE html>
<html lang="en">

<head>
    <title>haudppc07638</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.3.2 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body class="container mt-5" style="background-color: #f0f8ff; font-family: 'Arial', sans-serif;">
    <div class="text-center">
        <?php
        if (isset($_POST["email"]) && $_POST["email"] == "haudppc07638@fpt.edu.vn") {
            echo '<h2 class="text-success">Xin chào ' . $user['fullname'] . '</h2>';
        } else {
            echo '<h2 class="text-warning">Mời bạn nhập địa chỉ email</h2>';
        }
        ?>
        <form method="post" class="mt-3">
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-outline-primary">Login</button>
        </form>
    </div>
</body>

</html>