<!DOCTYPE html>
<html lang="zxx">
<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<title>Admin</title>
<link rel="icon" href="<?= base_url()?>img/logo.png" type="image/png">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="<?= base_url()?>admin/css/bootstrap1.min.css" />

<link rel="stylesheet" href="<?= base_url()?>admin/vendors/themefy_icon/themify-icons.css" />

<link rel="stylesheet" href="<?= base_url()?>admin/vendors/niceselect/css/nice-select.css" />

<link rel="stylesheet" href="<?= base_url()?>admin/vendors/owl_carousel/css/owl.carousel.css" />

<link rel="stylesheet" href="<?= base_url()?>admin/vendors/gijgo/gijgo.min.css" />

<link rel="stylesheet" href="<?= base_url()?>admin/vendors/font_awesome/css/all.min.css" />
<link rel="stylesheet" href="<?= base_url()?>admin/vendors/tagsinput/tagsinput.css" />

<link rel="stylesheet" href="<?= base_url()?>admin/vendors/datepicker/date-picker.css" />
<link rel="stylesheet" href="<?= base_url()?>admin/vendors/vectormap-home/vectormap-2.0.2.css" />

<link rel="stylesheet" href="<?= base_url()?>admin/vendors/scroll/scrollable.css" />

<link rel="stylesheet" href="<?= base_url()?>admin/vendors/datatable/css/jquery.dataTables.min.css" />
<link rel="stylesheet" href="<?= base_url()?>admin/vendors/datatable/css/responsive.dataTables.min.css" />
<link rel="stylesheet" href="<?= base_url()?>admin/vendors/datatable/css/buttons.dataTables.min.css" />

<link rel="stylesheet" href="<?= base_url()?>admin/vendors/text_editor/summernote-bs4.css" />

<link rel="stylesheet" href="<?= base_url()?>admin/vendors/morris/morris.css">

<link rel="stylesheet" href="<?= base_url()?>admin/vendors/material_icon/material-icons.css" />

<link rel="stylesheet" href="<?= base_url()?>admin/css/metisMenu.css">

<link rel="stylesheet" href="<?= base_url()?>admin/css/style1.css" />
<link rel="stylesheet" href="<?= base_url()?>admin/css/colors/default.css" id="colorSkinCSS">
</head>
<body class="crm_body_bg">


<nav class="sidebar dark_sidebar  ">
<div class="logo d-flex justify-content-between">
<a class="large_logo" href="/"><img src="<?= base_url()?>img/logo.png" alt></a>
<a class="small_logo" href="/"><img src="<?= base_url()?>img/mini_logo.png" alt></a>
<div class="sidebar_close_icon d-lg-none">
<i class="ti-close"></i>
</div>
</div>
<ul id="sidebar_menu">
<li>
<a href="index.html" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/dashboard.svg" alt>
</div>
<div class="nav_title">
<span>Analytic</span>
</div>
</a>
</li>
<li>
<a href="index_2.html" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/2.svg" alt>
</div>
<div class="nav_title">
<span>Default </span>
</div>
</a>
</li>
<li>
<a href="index_3.html" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/3.svg" alt>
</div>
<div class="nav_title">
<span>Dark </span>
</div>
</a>
</li>
<h4 class="menu-text"><span>CUSTOM</span> <i class="fas fa-ellipsis-h"></i> </h4>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/5.svg" alt>
</div>
<div class="nav_title">
<span>Application </span>
</div>
</a>
<ul>
<li><a href="editor.html">editor</a></li>
<li><a href="mail_box.html">Mail Box</a></li>
<li><a href="chat.html">Chat</a></li>
<li><a href="faq.html">FAQ</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/16.svg" alt>
</div>
<div class="nav_title">
<span>Pages</span>
</div>
</a>
<ul>
<li><a href="login.html">Login</a></li>
<li><a href="resister.html">Register</a></li>
<li><a href="error_400.html">Error 404</a></li>
<li><a href="error_500.html">Error 500</a></li>
<li><a href="forgot_pass.html">Forgot Password</a></li>
<li><a href="gallery.html">Gallery</a></li>
</ul>
</li>
<h4 class="menu-text"><span>LAYOUT</span> <i class="fas fa-ellipsis-h"></i> </h4>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/4.svg" alt>
</div>
<div class="nav_title">
<span>Themes</span>
</div>
</a>
<ul>
<li><a href="dark_sidebar.html">Dark Sidebar</a></li>
<li><a href="light_sidebar.html">light Sidebar</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/16.svg" alt>
</div>
<div class="nav_title">
<span>General</span>
</div>
</a>
<ul>
<li><a href="Minimized_Aside.html">Minimized Aside</a></li>
<li><a href="empty_page.html">Empty page</a></li>
<li><a href="fixed_footer.html">Fixed Footer</a></li>
</ul>
</li>
<li>
<a href="Builder.html" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/2.svg" alt>
</div>
<div class="nav_title">
<span>Builder </span>
</div>
</a>
</li>
<h4 class="menu-text"><span>Elements</span> <i class="fas fa-ellipsis-h"></i> </h4>
<li class>
<a href="invoice.html" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/6.svg" alt>
</div>
<div class="nav_title">
<span>Invoice</span>
</div>
</a>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/4.svg" alt>
</div>
<div class="nav_title">
<span>forms</span>
</div>
</a>
<ul>
<li><a href="Basic_Elements.html">Basic Elements</a></li>
<li><a href="Groups.html">Groups</a></li>
<li><a href="Max_Length.html">Max Length</a></li>
<li><a href="Layouts.html">Layouts</a></li>
</ul>
</li>
<li class>
<a href="Board.html" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/5.svg" alt>
</div>
<div class="nav_title">
<span>Board</span>
</div>
</a>
</li>
<li class>
<a href="calender.html" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/7.svg" alt>
</div>
<div class="nav_title">
<span>Calander</span>
</div>
</a>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/8.svg" alt>
</div>
<div class="nav_title">
<span>Products</span>
</div>
</a>
<ul>
<li><a href="Products.html">Products</a></li>
<li><a href="Product_Details.html">Product Details</a></li>
<li><a href="Cart.html">Cart</a></li>
<li><a href="Checkout.html">Checkout</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/9.svg" alt>
</div>
<div class="nav_title">
<span>Icons</span>
</div>
</a>
<ul>
<li><a href="Fontawesome_Icon.html">Fontawesome Icon</a></li>
<li><a href="themefy_icon.html">themefy icon</a></li>
</ul>
</li>
<h4 class="menu-text"><span>Features</span> <i class="fas fa-ellipsis-h"></i> </h4>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/8.svg" alt>
</div>
<div class="nav_title">
<span>Animations</span>
</div>
</a>
<ul>
<li><a href="wow_animation.html">Animate</a></li>
<li><a href="Scroll_Reveal.html">Scroll Reveal</a></li>
<li><a href="tilt.html">Tilt Animation</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/9.svg" alt>
</div>
<div class="nav_title">
<span>Components</span>
</div>
</a>
<ul>
<li><a href="accordion.html">Accordions</a></li>
<li><a href="Scrollable.html">Scrollable</a></li>
<li><a href="notification.html">Notifications</a></li>
<li><a href="carousel.html">Carousel</a></li>
<li><a href="Pagination.html">Pagination</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/11.svg" alt>
</div>
<div class="nav_title">
<span>Table</span>
</div>
</a>
<ul>
<li><a href="data_table.html">Data Tables</a></li>
<li><a href="bootstrap_table.html">Bootstrap</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/12.svg" alt>
</div>
<div class="nav_title">
<span>Cards</span>
</div>
</a>
<ul>
<li><a href="basic_card.html">Basic Card</a></li>
<li><a href="theme_card.html">Theme Card</a></li>
<li><a href="dargable_card.html">Draggable Card</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/12.svg" alt>
</div>
<div class="nav_title">
<span>Charts</span>
</div>
</a>
<ul>
<li><a href="chartjs.html">ChartJS</a></li>
<li><a href="apex_chart.html">Apex Charts</a></li>
<li><a href="chart_sparkline.html">Chart sparkline</a></li>
<li><a href="am_chart.html">am-charts</a></li>
<li><a href="nvd3_charts.html">nvd3 charts.</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/3.svg" alt>
</div>
<div class="nav_title">
<span>UI Kits </span>
</div>
</a>
<ul>
<li><a href="colors.html">colors</a></li>
<li><a href="Alerts.html">Alerts</a></li>
<li><a href="buttons.html">Buttons</a></li>
<li><a href="modal.html">modal</a></li>
<li><a href="dropdown.html">Droopdowns</a></li>
<li><a href="Badges.html">Badges</a></li>
<li><a href="Loading_Indicators.html">Loading Indicators</a></li>
<li><a href="State_color.html">State color</a></li>
<li><a href="typography.html">Typography</a></li>
<li><a href="datepicker.html">Date Picker</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/14.svg" alt>
</div>
<div class="nav_title">
<span>Widgets</span>
</div>
</a>
<ul>
<li><a href="chart_box_1.html">Chart Boxes 1</a></li>
<li><a href="profilebox.html">Profile Box</a></li>
</ul>
</li>
<li class>
<a class="has-arrow" href="#" aria-expanded="false">
<div class="nav_icon_small">
<img src="<?= base_url()?>admin/img/menu-icon/15.svg" alt>
</div>
<div class="nav_title">
<span>Maps</span>
</div>
</a>
<ul>
<li><a href="mapjs.html">Maps JS</a></li>
<li><a href="vector_map.html">Vector Maps</a></li>
</ul>
</li>
</ul>
</nav>

<section class="main_content dashboard_part large_header_bg">

<div class="container-fluid g-0">
<div class="row">
<div class="col-lg-12 p-0 ">
<div class="header_iner d-flex justify-content-between align-items-center">
<div class="sidebar_icon d-lg-none">
<i class="ti-menu"></i>
</div>
<label class="form-label switch_toggle d-none d-lg-block" for="checkbox">
<input type="checkbox" id="checkbox">
<div class="slider round open_miniSide"></div>
</label>
<div class="header_right d-flex justify-content-between align-items-center">
<div class="header_notification_warp d-flex align-items-center">
<li>
<div class="serach_button">
<i class="ti-search"></i>
<div class="serach_field-area d-flex align-items-center">
<div class="search_inner">
<form action="#">
<div class="search_field">
<input type="text" placeholder="Search here...">
</div>
<button class="close_search"> <i class="ti-search"></i> </button>
</form>
</div>
<span class="f_s_14 f_w_400 ml_25 white_text text_white">Apps</span>
</div>
</div>
</li>
<li>
<a class="bell_notification_clicker" href="#"> <img src="<?= base_url()?>admin/img/icon/bell.svg" alt>
<span>2</span>
</a>



</li>
<li>
<a class="CHATBOX_open" href="#"> <img src="<?= base_url()?>admin/img/icon/msg.svg" alt> <span>2</span> </a>
</li>
</div>
<div class="profile_info">
<img src="<?= base_url()?>admin/img/me.jpg" alt="#">
<div class="profile_info_iner">
<div class="profile_author_name">
<p>Owner</p>
<h5>Mary Mae</h5>
</div>
<div class="profile_info_details">
<a href="#">My Profile </a>
<a href="#">Settings</a>
<a href="/">Log Out </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="main_content_iner overly_inner ">
<div class="container-fluid p-0 ">

<div class="row">
<div class="col-12">
<div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
<div class="page_title_left">
<h3 class="f_s_25 f_w_700 dark_text">Dashboard</h3>
<ol class="breadcrumb page_bradcam mb-0">
<li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
<li class="breadcrumb-item active">Dark</li>
</ol>
</div>
<div class="page_title_right">
<div class="page_date_button">
August 1, 2020 - August 31, 2020
</div>
<div class="dropdown common_bootstrap_button ">
<span class="dropdown-toggle" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
action
</span>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
<a class="dropdown-item f_s_16 f_w_600" href="#"> Download</a>
<a class="dropdown-item f_s_16 f_w_600" href="#"> Print</a>
</div>
</div>
</div>
</div>
</div>
</div>
<div id="back-top" style="display: none;">
<a title="Go to Top" href="#">
<i class="ti-angle-up"></i>
</a>
</div>
<div class="main_content_iner ">
<div class="container-fluid p-0">
<div class="row justify-content-center">
<div class="col-lg-12">
<div class="white_card card_height_100 mb_30">
<div class="white_card_header">
<div class="box_header m-0">
<div class="main-title">
<h3 class="m-0">Data table</h3>
</div>
</div>
</div>
<div class="white_card_body">
<div class="QA_section">
<div class="white_box_tittle list_header">
<h4>Table</h4>
<div class="box_right d-flex lms_block">
<div class="serach_field_2">
<div class="search_inner">
<form Active="#">
<div class="search_field">
<input type="text" placeholder="Search content here...">
</div>
<button type="submit"> <i class="ti-search"></i> </button>
</form>
</div>
</div>
<!-- Add New Button -->

<div class="add_button ms-2">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addProductModal" autofocus>Add Product</button>

</div>
<!-- Add Product Modal -->
<div class="modal fade" id="addProductModal" role="dialog" aria-labelledby="addProductModalLabel" aria-hidden="true" >
    <br><br><br><br><br>
  <div class="modal-dialog"style="z-index: 10000;">
  
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addProductModalLabel">Add New Product</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="/products/store" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control">
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" name="price" id="price" class="form-control">
          </div>

          <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image" id="image" class="form-control">
          </div>
          <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" name="category" id="category" class="form-control">
          </div>
          <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="form-control">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
    
  </div>
</div>


</div>
</div>
<div class="QA_table mb_30">
    <table class="table lms_table_active">
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Image</th>
                <th scope="col">Price</th>
                <th scope="col">Category</th>
                <th scope="col">Quantity</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $product['name']; ?></td>
                    <td><?= $product['description']; ?></td>
                    <td><?= $product['image']; ?></td>
                    <td><?= $product['price']; ?></td>
                    <td><?= $product['category']; ?></td>
                    <td><?= $product['quantity']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
</div>
</div>
</div>
<div class="col-12">
</div>
</div>
</div>
</div>
<script>
$(document).ready(function() {
  $('#addProductModal').on('show.bs.modal', function() {
   
    $('#name').val('');
    $('#description').val('');
    $('#price').val('');
    $('#image').val('');
  });
});
</script>
<script src="<?= base_url()?>admin/js/jquery1-3.4.1.min.js"></script>

<script src="<?= base_url()?>admin/js/popper1.min.js"></script>

<script src="<?= base_url()?>admin/js/bootstrap1.min.js"></script>

<script src="<?= base_url()?>admin/js/metisMenu.js"></script>

<script src="<?= base_url()?>admin/vendors/count_up/jquery.waypoints.min.js"></script>

<script src="<?= base_url()?>admin/vendors/chartlist/Chart.min.js"></script>

<script src="<?= base_url()?>admin/vendors/count_up/jquery.counterup.min.js"></script>

<script src="<?= base_url()?>admin/vendors/niceselect/js/jquery.nice-select.min.js"></script>

<script src="<?= base_url()?>admin/vendors/owl_carousel/js/owl.carousel.min.js"></script>

<script src="<?= base_url()?>admin/vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>admin/vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url()?>admin/vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url()?>admin/vendors/datatable/js/buttons.flash.min.js"></script>
<script src="<?= base_url()?>admin/vendors/datatable/js/jszip.min.js"></script>
<script src="<?= base_url()?>admin/vendors/datatable/js/pdfmake.min.js"></script>
<script src="<?= base_url()?>admin/vendors/datatable/js/vfs_fonts.js"></script>
<script src="<?= base_url()?>admin/vendors/datatable/js/buttons.html5.min.js"></script>
<script src="<?= base_url()?>admin/vendors/datatable/js/buttons.print.min.js"></script>

<script src="<?= base_url()?>admin/vendors/datepicker/datepicker.js"></script>
<script src="<?= base_url()?>admin/vendors/datepicker/datepicker.en.js"></script>
<script src="<?= base_url()?>admin/vendors/datepicker/datepicker.custom.js"></script>
<script src="<?= base_url()?>admin/js/chart.min.js"></script>
<script src="<?= base_url()?>admin/vendors/chartjs/roundedBar.min.js"></script>

<script src="<?= base_url()?>admin/vendors/progressbar/jquery.barfiller.js"></script>

<script src="<?= base_url()?>admin/vendors/tagsinput/tagsinput.js"></script>

<script src="<?= base_url()?>admin/vendors/text_editor/summernote-bs4.js"></script>
<script src="<?= base_url()?>admin/vendors/am_chart/amcharts.js"></script>

<script src="<?= base_url()?>admin/vendors/scroll/perfect-scrollbar.min.js"></script>
<script src="<?= base_url()?>admin/vendors/scroll/scrollable-custom.js"></script>

<script src="<?= base_url()?>admin/vendors/vectormap-home/vectormap-2.0.2.min.js"></script>
<script src="<?= base_url()?>admin/vendors/vectormap-home/vectormap-world-mill-en.js"></script>

<script src="<?= base_url()?>admin/vendors/apex_chart/apex-chart2.js"></script>
<script src="<?= base_url()?>admin/vendors/apex_chart/apex_dashboard.js"></script>
<script src="<?= base_url()?>admin/vendors/echart/echarts.min.js"></script>
<script src="<?= base_url()?>admin/vendors/chart_am/core.js"></script>
<script src="<?= base_url()?>admin/vendors/chart_am/charts.js"></script>
<script src="<?= base_url()?>admin/vendors/chart_am/animated.js"></script>
<script src="<?= base_url()?>admin/vendors/chart_am/kelly.js"></script>
<script src="<?= base_url()?>admin/vendors/chart_am/chart-custom.js"></script>

<script src="<?= base_url()?>admin/js/dashboard_init.js"></script>
<script src="<?= base_url()?>admin/js/custom.js"></script>
</body>
</html>
