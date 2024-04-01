<div style="height: 500px">
    <!-- Halaman Depan -->

    <?php
        // Check if the 'hal' key is set in the $_GET array
        if(isset($_GET['hal']) && !empty($_GET['hal'])) {
            $hal = $_GET['hal'];
            // Assuming $menu_bawah is an array containing file paths
            if(isset($menu_bawah[$hal])) {
                include_once $menu_bawah[$hal];
            } else {
                // Handle the case where $hal is not a valid key in $menu_bawah
                echo "Page not found!";
            }
        } else {
            // Include the default 'home.php' file
            include_once 'home.php';
        }
    ?>
</div>
