<?php
require 'includes/snippet.php';
require 'includes/db-inc.php';
include 'includes/header.php';

// Function to safely escape and sanitize user input
function sanitizeInput($input)
{
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars($input));
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/front.css">
</head>

<body>
    <!-- 
        - #FEATURED COLLECTION
      -->

    <section class="section featured" aria-label="featured collection">
        <div class="container">
            <h2 class="h2 section-title">Featured Collections</h2>

            <p class="section-text">
                Contrary to popular belief, Lorem Ipsum is not simply random.
            </p>

            <ul class="grid-list">
                <li>
                    <div class="product-card">
                        <span class="card-badge">New</span>

                        <div class="card-banner img-holder" style="--width: 384; --height: 480">
                            <img src="./assets/images/book-1.png" width="384" height="480" loading="lazy" alt="Black Night" class="img-cover" />

                            <div class="card-action">
                                <button class="action-btn" aria-label="quick view" title="Quick View">
                                    <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="compare" title="Compare">
                                    <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to cart" title="Add to Cart">
                                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <div class="card-content">
                            <h3 class="h3">
                                <a href="#" class="card-title">Black Night</a>
                            </h3>

                            <data class="card-price" value="80">$80.00</data>

                            <div class="rating-wrapper">
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-card">
                        <div class="card-banner img-holder" style="--width: 384; --height: 480">
                            <img src="./assets/images/book-2.png" width="384" height="480" loading="lazy" alt="About The First Night" class="img-cover" />

                            <div class="card-action">
                                <button class="action-btn" aria-label="quick view" title="Quick View">
                                    <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="compare" title="Compare">
                                    <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to cart" title="Add to Cart">
                                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <div class="card-content">
                            <h3 class="h3">
                                <a href="#" class="card-title">About The First Night</a>
                            </h3>

                            <data class="card-price" value="19">$19.00</data>

                            <div class="rating-wrapper">
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-card">
                        <div class="card-banner img-holder" style="--width: 384; --height: 480">
                            <img src="./assets/images/book-3.png" width="384" height="480" loading="lazy" alt="Open The Sky" class="img-cover" />

                            <div class="card-action">
                                <button class="action-btn" aria-label="quick view" title="Quick View">
                                    <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="compare" title="Compare">
                                    <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to cart" title="Add to Cart">
                                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <div class="card-content">
                            <h3 class="h3">
                                <a href="#" class="card-title">Open The Sky</a>
                            </h3>

                            <data class="card-price" value="80">$80.00</data>

                            <div class="rating-wrapper">
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-card">
                        <div class="card-banner img-holder" style="--width: 384; --height: 480">
                            <img src="./assets/images/book-4.png" width="384" height="480" loading="lazy" alt="Book Hard Cover" class="img-cover" />

                            <div class="card-action">
                                <button class="action-btn" aria-label="quick view" title="Quick View">
                                    <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="compare" title="Compare">
                                    <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to cart" title="Add to Cart">
                                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <div class="card-content">
                            <h3 class="h3">
                                <a href="#" class="card-title">Book Hard Cover</a>
                            </h3>

                            <data class="card-price" value="55">$55.00</data>

                            <div class="rating-wrapper">
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-card">
                        <div class="card-banner img-holder" style="--width: 384; --height: 480">
                            <img src="./assets/images/book-5.png" width="384" height="480" loading="lazy" alt="The Big Book Of Science" class="img-cover" />

                            <div class="card-action">
                                <button class="action-btn" aria-label="quick view" title="Quick View">
                                    <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="compare" title="Compare">
                                    <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to cart" title="Add to Cart">
                                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <div class="card-content">
                            <h3 class="h3">
                                <a href="#" class="card-title">The Big Book Of Science</a>
                            </h3>

                            <data class="card-price" value="100">$100.00</data>

                            <div class="rating-wrapper">
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-card">
                        <div class="card-banner img-holder" style="--width: 384; --height: 480">
                            <img src="./assets/images/book-6.png" width="384" height="480" loading="lazy" alt="By The Air" class="img-cover" />

                            <div class="card-action">
                                <button class="action-btn" aria-label="quick view" title="Quick View">
                                    <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="compare" title="Compare">
                                    <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to cart" title="Add to Cart">
                                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <div class="card-content">
                            <h3 class="h3">
                                <a href="#" class="card-title">By The Air</a>
                            </h3>

                            <data class="card-price" value="89">$89.00</data>

                            <div class="rating-wrapper">
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-card">
                        <div class="card-banner img-holder" style="--width: 384; --height: 480">
                            <img src="./assets/images/book-7.png" width="384" height="480" loading="lazy" alt="Murdering Last Year" class="img-cover" />

                            <div class="card-action">
                                <button class="action-btn" aria-label="quick view" title="Quick View">
                                    <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="compare" title="Compare">
                                    <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to cart" title="Add to Cart">
                                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <div class="card-content">
                            <h3 class="h3">
                                <a href="#" class="card-title">Murdering Last Year</a>
                            </h3>

                            <data class="card-price" value="34">$34.00</data>

                            <div class="rating-wrapper">
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="product-card">
                        <div class="card-banner img-holder" style="--width: 384; --height: 480">
                            <img src="./assets/images/book-8.png" width="384" height="480" loading="lazy" alt="Stay Healthy" class="img-cover" />

                            <div class="card-action">
                                <button class="action-btn" aria-label="quick view" title="Quick View">
                                    <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="compare" title="Compare">
                                    <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to cart" title="Add to Cart">
                                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <div class="card-content">
                            <h3 class="h3">
                                <a href="#" class="card-title">Stay Healthy</a>
                            </h3>

                            <data class="card-price" value="67">$67.00</data>

                            <div class="rating-wrapper">
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>



    <!-- 
        - #POPULAR
      -->

    <section class="section popular" aria-label="popular collection">
        <div class="container">
            <h2 class="h2 section-title">Popular Collections</h2>

            <p class="section-text">
                Contrary to popular belief, Lorem Ipsum is not simply random.
            </p>

            <ul class="filter-list">
                <li>
                    <button class="filter-btn" data-filter-btn="featured">
                        Featured Products
                    </button>
                </li>

                <li>
                    <button class="filter-btn" data-filter-btn="new">
                        New Products
                    </button>
                </li>

                <li>
                    <button class="filter-btn" data-filter-btn="sell">
                        Upsell Prodcuts
                    </button>
                </li>
            </ul>

            <ul class="product-list has-scrollbar">
                <li class="scrollbar-item" data-filter="sell">
                    <div class="product-card">
                        <div class="card-banner img-holder" style="--width: 384; --height: 480">
                            <img src="./assets/images/book-9.png" width="384" height="480" loading="lazy" alt="Self Care" class="img-cover" />

                            <div class="card-action">
                                <button class="action-btn" aria-label="quick view" title="Quick View">
                                    <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="compare" title="Compare">
                                    <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to cart" title="Add to Cart">
                                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <div class="card-content">
                            <h3 class="h3">
                                <a href="#" class="card-title">Self Care</a>
                            </h3>

                            <data class="card-price" value="34">$34.00</data>

                            <div class="rating-wrapper">
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="scrollbar-item" data-filter="new">
                    <div class="product-card">
                        <div class="card-banner img-holder" style="--width: 384; --height: 480">
                            <img src="./assets/images/book-10.png" width="384" height="480" loading="lazy" alt="Welcome to Space" class="img-cover" />

                            <div class="card-action">
                                <button class="action-btn" aria-label="quick view" title="Quick View">
                                    <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="compare" title="Compare">
                                    <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to cart" title="Add to Cart">
                                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <div class="card-content">
                            <h3 class="h3">
                                <a href="#" class="card-title">Welcome to Space</a>
                            </h3>

                            <data class="card-price" value="150">$150.00</data>

                            <div class="rating-wrapper">
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="scrollbar-item" data-filter="sell">
                    <div class="product-card">
                        <div class="card-banner img-holder" style="--width: 384; --height: 480">
                            <img src="./assets/images/book-11.png" width="384" height="480" loading="lazy" alt="Monsoon" class="img-cover" />

                            <div class="card-action">
                                <button class="action-btn" aria-label="quick view" title="Quick View">
                                    <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="compare" title="Compare">
                                    <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to cart" title="Add to Cart">
                                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <div class="card-content">
                            <h3 class="h3">
                                <a href="#" class="card-title">Monsoon</a>
                            </h3>

                            <data class="card-price" value="23">$23.00</data>

                            <div class="rating-wrapper">
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="scrollbar-item" data-filter="featured">
                    <div class="product-card">
                        <div class="card-banner img-holder" style="--width: 384; --height: 480">
                            <img src="./assets/images/book-12.png" width="384" height="480" loading="lazy" alt="Every Thing You Ever" class="img-cover" />

                            <div class="card-action">
                                <button class="action-btn" aria-label="quick view" title="Quick View">
                                    <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="compare" title="Compare">
                                    <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to cart" title="Add to Cart">
                                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <div class="card-content">
                            <h3 class="h3">
                                <a href="#" class="card-title">Every Thing You Ever</a>
                            </h3>

                            <data class="card-price" value="57">$57.00</data>

                            <div class="rating-wrapper">
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="scrollbar-item" data-filter="new">
                    <div class="product-card">
                        <div class="card-banner img-holder" style="--width: 384; --height: 480">
                            <img src="./assets/images/book-13.png" width="384" height="480" loading="lazy" alt="Graphic Design School" class="img-cover" />

                            <div class="card-action">
                                <button class="action-btn" aria-label="quick view" title="Quick View">
                                    <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="compare" title="Compare">
                                    <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to cart" title="Add to Cart">
                                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <div class="card-content">
                            <h3 class="h3">
                                <a href="#" class="card-title">Graphic Design School</a>
                            </h3>

                            <data class="card-price" value="100">$100.00</data>

                            <div class="rating-wrapper">
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="scrollbar-item" data-filter="sell">
                    <div class="product-card">
                        <div class="card-banner img-holder" style="--width: 384; --height: 480">
                            <img src="./assets/images/book-14.png" width="384" height="480" loading="lazy" alt="Food Poison" class="img-cover" />

                            <div class="card-action">
                                <button class="action-btn" aria-label="quick view" title="Quick View">
                                    <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="compare" title="Compare">
                                    <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to cart" title="Add to Cart">
                                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <div class="card-content">
                            <h3 class="h3">
                                <a href="#" class="card-title">Food Poison</a>
                            </h3>

                            <data class="card-price" value="76">$76.00</data>

                            <div class="rating-wrapper">
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="scrollbar-item" data-filter="featured">
                    <div class="product-card">
                        <div class="card-banner img-holder" style="--width: 384; --height: 480">
                            <img src="./assets/images/book-15.png" width="384" height="480" loading="lazy" alt="Design" class="img-cover" />

                            <div class="card-action">
                                <button class="action-btn" aria-label="quick view" title="Quick View">
                                    <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="compare" title="Compare">
                                    <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to cart" title="Add to Cart">
                                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <div class="card-content">
                            <h3 class="h3">
                                <a href="#" class="card-title">Design</a>
                            </h3>

                            <data class="card-price">Free</data>

                            <div class="rating-wrapper">
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="scrollbar-item" data-filter="new">
                    <div class="product-card">
                        <div class="card-banner img-holder" style="--width: 384; --height: 480">
                            <img src="./assets/images/book-16.png" width="384" height="480" loading="lazy" alt="World News" class="img-cover" />

                            <div class="card-action">
                                <button class="action-btn" aria-label="quick view" title="Quick View">
                                    <ion-icon name="eye-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to wishlist" title="Add to Wishlist">
                                    <ion-icon name="heart-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="compare" title="Compare">
                                    <ion-icon name="repeat-outline" aria-hidden="true"></ion-icon>
                                </button>

                                <button class="action-btn" aria-label="add to cart" title="Add to Cart">
                                    <ion-icon name="bag-handle-outline" aria-hidden="true"></ion-icon>
                                </button>
                            </div>
                        </div>

                        <div class="card-content">
                            <h3 class="h3">
                                <a href="#" class="card-title">World News</a>
                            </h3>

                            <data class="card-price" value="20">$20.00</data>

                            <div class="rating-wrapper">
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                                <ion-icon name="star-outline" aria-hidden="true"></ion-icon>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>