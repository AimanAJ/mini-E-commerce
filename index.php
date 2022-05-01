<?php
session_start();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Furniture Product List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main-wrapper">
        <div class="container">
            <div class="main-title">
                <h1>Furniture Shop List</h1>
            </div>
            <div class="display-style-btns">
                <button type="button" id="grid-active-btn">
                    <i class="fas fa-th"></i>
                </button>
                <button type="button" id="details-active-btn">
                    <i class="fas fa-list-ul"></i>
                </button>
            </div>


            <button class="bu" onclick="window.location.href='Add product.php'">Add new Product</button>

            <div class="item-list">
                <div class="item">
                    <div class="item-img">
                        <img src="images/accent_chairs.jpeg">
                        <div class="icon-list">
                            <button type="button">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                            <button type="button">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                            <button type="button">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="item-detail">
                        <a href="#" class="item-name">Accent Chair</a>
                        <div class="item-price">
                            <span class="new-price">$220.00</span>
                            <span class="old-price">$275.60</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugiat quod corporis delectus sequi laudantium molestias vero distinctio, qui numquam dolore, corrupti, enim consectetur cum?</p>
                        <button type="button" class="add-btn">add to cart</button>
                    </div>
                </div>

                <div class="item">
                    <div class="item-img">
                        <img src="images/beds.jpeg">
                        <div class="icon-list">
                            <button type="button">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                            <button type="button">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                            <button type="button">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="item-detail">
                        <a href="#" class="item-name">Beds</a>
                        <div class="item-price">
                            <span class="new-price">$220.00</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugiat quod corporis delectus sequi laudantium molestias vero distinctio, qui numquam dolore, corrupti, enim consectetur cum?</p>
                        <button type="button" class="add-btn">add to cart</button>
                    </div>
                </div>

                <div class="item">
                    <div class="item-img">
                        <img src="images/bookshelves.jpeg">
                        <div class="icon-list">
                            <button type="button">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                            <button type="button">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                            <button type="button">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="item-detail">
                        <a href="#" class="item-name">bookshelves</a>
                        <div class="item-price">
                            <span class="new-price">$220.00</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugiat quod corporis delectus sequi laudantium molestias vero distinctio, qui numquam dolore, corrupti, enim consectetur cum?</p>
                        <button type="button" class="add-btn">add to cart</button>
                    </div>
                </div>

                <div class="item">
                    <div class="item-img">
                        <img src="images/coffee_table.jpeg">
                        <div class="icon-list">
                            <button type="button">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                            <button type="button">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                            <button type="button">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="item-detail">
                        <a href="#" class="item-name">Coffee Table</a>
                        <div class="item-price">
                            <span class="new-price">$220.00</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore fugiat quod corporis delectus sequi laudantium molestias vero distinctio, qui numquam dolore, corrupti, enim consectetur cum?</p>
                        <button type="button" class="add-btn">add to cart</button>
                    </div>
                </div>

                <div class="item">
                    <div class="item-img">
                        <img src="images/cube_storage.jpeg">
                        <div class="icon-list">
                            <button type="button">
                                <i class="fas fa-sync-alt"></i>
                            </button>
                            <button type="button">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                            <button type="button">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>
                    </div>
                    <div class="item-detail">
                        <a href="#" class="item-name">Cube Storage</a>
                        <div class="item-price">
                            <span class="new-price">$220.00</span>
                        </div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <button type="button" class="add-btn">add to cart</button>
                    </div>
                </div>


                <?php
                if (isset($_SESSION['product'])) {
                    for ($i = 0; $i < count($_SESSION['product']); $i++) {
                        echo '  <div class="item">';
                        echo ' <div class="item-img">';
                        echo '<img src="images/desks.jpeg">';
                        echo ' <div class="icon-list">';
                        echo ' <button type="button">';
                        echo ' <i class="fas fa-sync-alt"></i>';
                        echo '</button>';
                        echo '<button type="button">';
                        echo '<i class="fas fa-shopping-cart"></i>';
                        echo '</button>';
                        echo ' <button type="button">';
                        echo '<i class="far fa-heart"></i>';
                        echo '</button>';
                        echo ' </div>';
                        echo ' </div>';
                        echo '<div class="item-detail">';
                        echo '<a href="#" class="item-name">' . $_SESSION['product'][$i]['title'] . '</a>';
                        echo ' <div class="item-price">';
                        echo ' <span class="new-price">'  . $_SESSION['product'][$i]['price'] . '</span>';
                        echo ' </div>';
                        echo ' <p>' . $_SESSION['product'][$i]['description'] . '</p>';
                        echo ' <button type="button" class="add-btn">add to cart</button>';
                        echo ' </div>';
                        echo ' </div>';
                    }
                } else {
                    echo '<div class="container1">';
                    echo '<h1>Go to Add product page to add new product.</h1>';
                    echo '</div>';
                }
                //  session_destroy();
                ?>


            </div>
        </div>
    </div>



    <script src="script.js"></script>
</body>

</html>