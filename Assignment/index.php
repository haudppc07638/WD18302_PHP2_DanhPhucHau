<?php


require_once "vendor/autoload.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Assignment haudppc07638</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="Public/vendors/feather/feather.css">
  <link rel="stylesheet" href="Public/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="Public/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="Public/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="Public/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="Public/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="Public/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="Public/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="Public/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="Public/Public/images/favicon.png" />
</head>
<body>

<?

require_once "App/Views/layout/header.php";
require_once "App/Views/layout/menu.php";
require_once "App/Views/listproducts.php";
require_once "App/Views/layout/footer.php";


?>



<script src="Public/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="Public/vendors/chart.js/Chart.min.js"></script>
<script src="Public/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="Public/vendors/progressbar.js/progressbar.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="Public/js/off-canvas.js"></script>
<script src="Public/js/hoverable-collapse.js"></script>
<script src="Public/js/template.js"></script>
<script src="Public/js/settings.js"></script>
<script src="Public/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="Public/js/dashboard.js"></script>
<script src="Public/js/Chart.roundedBarCharts.js"></script>

<!-- Mã JavaScript hoặc jQuery -->
<!-- Thêm thư viện jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
  $(document).ready(function() {
    // Gán sự kiện cho các mục trong dropdown
    $('.dropdown-item').click(function() {
      // Lấy nội dung của mục được chọn
      var selectedStatus = $(this).text().trim();

      // Thay đổi nội dung của nút status
      $('#dropdownMenuSizeButton3').text(selectedStatus);
      // Thay đổi màu sắc của nút status tương ứng
      if (selectedStatus === 'Hiện') {
        $('#dropdownMenuSizeButton3').removeClass('btn-danger').addClass('btn-success');
      } else if (selectedStatus === 'Ẩn') {
        $('#dropdownMenuSizeButton3').removeClass('btn-success').addClass('btn-danger');
      }
    });
  });
</script>

<!-- End custom js for this page-->
</body>

</html>

