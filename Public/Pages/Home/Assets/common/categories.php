<div class="header-nav-left">
    <button class="dropdown-category">
        <i data-feather="align-left"></i>
        <span>All Categories</span>
    </button>

    <div class="category-dropdown">
        <div class="category-title">
            <h5>Categories</h5>
            <button type="button" class="btn p-0 close-button text-content">
                <i class="fa-solid fa-xmark"></i>
            </button>
        </div>

        <ul class="category-list">

            <?php
            include './App/Logic/db_connect.php';
            $sql = "SELECT * FROM category";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {


            ?>
                <li class="onhover-category-list">
                    <a href="./Shop?category=<?php echo $row['name']; ?>" class="category-name">
                        <img src="<?php echo $row['image']; ?>" alt="">
                        <h6><?php echo $row['name']; ?></h6>
                        <i class="fa-solid fa-angle-right"></i>
                    </a>
                </li>
            <?php } ?>

    </div>

</div>
