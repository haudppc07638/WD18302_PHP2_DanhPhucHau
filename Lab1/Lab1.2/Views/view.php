<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <title>haudppc07638</title>
</head>

<body>
    <p>PC07638 - Lab 1.2</p>
    <div class="container" style="text-align: center;">
        <h1>
            <?= $course_name ?>
        </h1>
        <form action="">
            <select name="block" id="">
                <? foreach ($list_of_courses as $key => $value): ?>
                    <option value="<?= $key ?>"><?= $value ?></option>
                <? endforeach; ?>
            </select>
            <button type="submit" class="btn btn-outline-primary">Tim khoa hoc</button>
        </form>
    </div>
</body>

</html>