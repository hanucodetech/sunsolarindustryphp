
<!-- index.php -->
<?php include 'header.php'; ?>

<?php
// Check the 'page' parameter to load the corresponding file
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    
    // Handle different pages
    if ($page == 'about') {
        include 'about.php';
    } elseif ($page == 'work') {
        include 'work.php';
    }
    elseif ($page == 'contact') {
        include 'contact.php';
    } 
    elseif ($page == 'product') {
        include 'product.php';
    }else {
        include 'home.php';
    }
} else {
    include 'home.php'; // Default to home page
}
?>

<?php include 'footer.php'; ?>
