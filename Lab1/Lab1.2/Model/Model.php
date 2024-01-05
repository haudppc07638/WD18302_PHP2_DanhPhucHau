<?php
function get_courses () {
    include 'Data.php';
    $result = [];
    foreach ($course as $key => $value) {
        $result[$key] = $value;
    }
    return $result;
}
function find_by_block($block){
    include 'Data.php';
    return (array_key_exists($block, $course) ? $course[$block] : 'Invalid course');
}
?>