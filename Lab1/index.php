<?php
echo "PC07638 - Lab1.1 <br>";
$course = [
    'block1' => 'Lap trinh php 1',
    'block2' => 'Lap trinh php 2',
    'block3' => 'JS nang cao'
];
// echo $course['s2'];

//model
// dung de lay ra mang tuan tu
function get_courses () {
    global $course;
    $result = [];
    foreach ($course as $key => $value) {
        $result[$key] = $value;
    }
    return $result;
}
/**
 * @param string $block
 * 
 * kiem tra xem co khoa hoc gi khong
 * 
 * @return string
 */
function find_by_block($block)
{
    global $course;
    return (array_key_exists($block, $course) ? $course[$block] : 'Invalid course');
}
//controller
$list_of_courses = get_courses();
$block = (!empty($_GET['block'])) ? $_GET['block'] : '';
$course_name = find_by_block($block);
?>
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
    <div class="container" style="text-align: center;">
        <h1><?= $course_name ?></h1>
        <form action="" >
            <select name="block" id="">
                <? foreach ($list_of_courses as $key => $value): ?>
                    <option value="<?= $key ?>">
                        <?= $value ?>
                    </option>
                <? endforeach; ?>
            </select>
            <button type="submit" class="btn btn-outline-primary">Tim khoa hoc</button>
        </form>
    </div>
</body>

</html>