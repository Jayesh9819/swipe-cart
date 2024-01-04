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
                $sql="SELECT * FROM category";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc()){
                    
                    
                    ?>
                    <li class="onhover-category-list">
                <a href="javascript:void(0)" class="category-name">
                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/vegetable.svg" alt="">
                    <h6>Vegetables & Fruit</h6>
                    <i class="fa-solid fa-angle-right"></i>
                </a>
                    </li>
                    <?php }?>

            <li class="onhover-category-list">
                <a href="javascript:void(0)" class="category-name">
                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/cup.svg" alt="">
                    <h6>Beverages</h6>
                    <i class="fa-solid fa-angle-right"></i>
                </a>

                <div class="onhover-category-box w-100">
                    <div class="list-1">
                        <div class="category-title-box">
                            <h5>Energy & Soft Drinks</h5>
                        </div>
                        <ul>
                            <li>
                                <a href="javascript:void(0)">Soda & Cocktail Mix</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Soda & Cocktail Mix</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Sports & Energy Drinks</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Non Alcoholic Drinks</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Packaged Water</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Spring Water</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Flavoured Water</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <li class="onhover-category-list">
                <a href="javascript:void(0)" class="category-name">
                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/meats.svg" alt="">
                    <h6>Meats & Seafood</h6>
                    <i class="fa-solid fa-angle-right"></i>
                </a>

                <div class="onhover-category-box">
                    <div class="list-1">
                        <div class="category-title-box">
                            <h5>Meat</h5>
                        </div>
                        <ul>
                            <li>
                                <a href="javascript:void(0)">Fresh Meat</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Frozen Meat</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Marinated Meat</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Fresh & Frozen Meat</a>
                            </li>
                        </ul>
                    </div>

                    <div class="list-2">
                        <div class="category-title-box">
                            <h5>Seafood</h5>
                        </div>
                        <ul>
                            <li>
                                <a href="javascript:void(0)">Fresh Water Fish</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Dry Fish</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Frozen Fish & Seafood</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Marine Water Fish</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Canned Seafood</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Prawans & Shrimps</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Other Seafood</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <li class="onhover-category-list">
                <a href="javascript:void(0)" class="category-name">
                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/breakfast.svg" alt="">
                    <h6>Breakfast & Dairy</h6>
                    <i class="fa-solid fa-angle-right"></i>
                </a>

                <div class="onhover-category-box">
                    <div class="list-1">
                        <div class="category-title-box">
                            <h5>Breakfast Cereals</h5>
                        </div>
                        <ul>
                            <li>
                                <a href="javascript:void(0)">Oats & Porridge</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Kids Cereal</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Muesli</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Flakes</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Granola & Cereal Bars</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Instant Noodles</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Pasta & Macaroni</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Frozen Non-Veg Snacks</a>
                            </li>
                        </ul>
                    </div>

                    <div class="list-2">
                        <div class="category-title-box">
                            <h5>Dairy</h5>
                        </div>
                        <ul>
                            <li>
                                <a href="javascript:void(0)">Milk</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Curd</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Paneer, Tofu & Cream</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Butter & Margarine</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Condensed, Powdered Milk</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Buttermilk & Lassi</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Yogurt & Shrikhand</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Flavoured, Soya Milk</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <li class="onhover-category-list">
                <a href="javascript:void(0)" class="category-name">
                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/frozen.svg" alt="">
                    <h6>Frozen Foods</h6>
                    <i class="fa-solid fa-angle-right"></i>
                </a>

                <div class="onhover-category-box w-100">
                    <div class="list-1">
                        <div class="category-title-box">
                            <h5>Noodle, Pasta</h5>
                        </div>
                        <ul>
                            <li>
                                <a href="javascript:void(0)">Instant Noodles</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Hakka Noodles</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Cup Noodles</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Vermicelli</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Instant Pasta</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <li class="onhover-category-list">
                <a href="javascript:void(0)" class="category-name">
                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/biscuit.svg" alt="">
                    <h6>Biscuits & Snacks</h6>
                    <i class="fa-solid fa-angle-right"></i>
                </a>

                <div class="onhover-category-box">
                    <div class="list-1">
                        <div class="category-title-box">
                            <h5>Biscuits & Cookies</h5>
                        </div>
                        <ul>
                            <li>
                                <a href="javascript:void(0)">Salted Biscuits</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Marie, Health, Digestive</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Cream Biscuits & Wafers</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Glucose & Milk Biscuits</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Cookies</a>
                            </li>
                        </ul>
                    </div>

                    <div class="list-2">
                        <div class="category-title-box">
                            <h5>Bakery Snacks</h5>
                        </div>
                        <ul>
                            <li>
                                <a href="javascript:void(0)">Bread Sticks & Lavash</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Cheese & Garlic Bread</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Puffs, Patties, Sandwiches</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Breadcrumbs & Croutons</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>

            <li class="onhover-category-list">
                <a href="javascript:void(0)" class="category-name">
                    <img src="https://themes.pixelstrap.com/fastkart/assets/svg/1/grocery.svg" alt="">
                    <h6>Grocery & Staples</h6>
                    <i class="fa-solid fa-angle-right"></i>
                </a>

                <div class="onhover-category-box">
                    <div class="list-1">
                        <div class="category-title-box">
                            <h5>Grocery</h5>
                        </div>
                        <ul>
                            <li>
                                <a href="javascript:void(0)">Lemon, Ginger & Garlic</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Indian & Exotic Herbs</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Organic Vegetables</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Organic Fruits</a>
                            </li>
                        </ul>
                    </div>

                    <div class="list-2">
                        <div class="category-title-box">
                            <h5>Organic Staples</h5>
                        </div>
                        <ul>
                            <li>
                                <a href="javascript:void(0)">Organic Dry Fruits</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Organic Dals & Pulses</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Organic Millet & Flours</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Organic Sugar, Jaggery</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Organic Masalas & Spices</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Organic Rice, Other Rice</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Organic Flours</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Organic Edible Oil, Ghee</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>