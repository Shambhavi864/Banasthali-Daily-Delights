<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>B2D | Online Shopping Site</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href='https://fonts.googleapis.com/css?family=Delius Swash Caps' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Andika' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!--header -->
 <?php
include 'includes/header_menu.php';
include 'includes/check-if-added.php';
?>
<!--header ends -->
<div class="container" style="margin-top:65px">
         <!--jumbutron start-->
        <div class="jumbotron text-center">
            <h1>Welcome to Banathali Daily Delights!</h1>
            <p>We have wide range of products for you.No need to hunt around,we have all in one place</p>
        </div>
        <!--jumbutron ends-->
        <!--breadcrumb start-->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Products</li>
            </ol>
        </nav>
        <!--breadcrumb end-->
    <hr/>
    <!--menu list-->
    <div class="row text-center" id="watch">
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/g1.png" alt="" class="img-fluid pb-1" >
                <div class="figure-caption">
                    <h6>Kellogs</h6>
                    <h6>Price :Rs 300</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(1)) {
                     echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=1" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/g2.png" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Paneer</h6>
                    <h6>Price :Rs 50</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(2)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                         } else {
                        ?>
                        <p><a href="cart-add.php?id=2" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                         }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/g3.png" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Pulses</h6>
                    <h6>Price :Rs 35</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(3)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=3" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/g4.png" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Bread</h6>
                    <h6>Price :Rs 17</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(4)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=4" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/g5.png" alt="" class="img-fluid pb-1" >
                <div class="figure-caption">
                    <h6>Masala</h6>
                    <h6>Price :Rs 30</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(5)) {
                     echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                        ?>
                        <p><a href="cart-add.php?id=5" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a><p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/g6.png" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Maggie</h6>
                    <h6>Price :Rs 80</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(6)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                         } else {
                        ?>
                        <p><a href="cart-add.php?id=6" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                         }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/g7.png" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Oil</h6>
                    <h6>Price :Rs 50</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(7)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=7" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6 py-2">
            <div class="card">
                <img src="images/g8.png" alt="" class="img-fluid pb-1">
                <div class="figure-caption">
                    <h6>Wheat</h6>
                    <h6>Price :Rs 350</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(8)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        </p><a href="cart-add.php?id=8" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center" id="shirt">
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="images/e1.png" alt="" class="img-fluid pb-1"  >
                    <div class="figure-caption">
                    <h6>iPhone</h6>
                    <h6>Price :Rs 20000</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(9)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=9" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/e2.png" alt="" class="img-fluid pb-1" >
                    <div class="figure-caption">
                    <h6>Redmi</h6>
                    <h6>Price :Rs 10000</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(10)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=10" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/e3.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>HP</h6>
                        <h6>Price :Rs 60000</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(11)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=11" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="images/e4.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>DELL</h6>
                        <h6>Price :Rs 70000</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(12)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=12" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="images/e5.png" alt="" class="img-fluid pb-1"  >
                    <div class="figure-caption">
                    <h6>Earpods</h6>
                    <h6>Price :Rs 180</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(13)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=13" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/e6.png" alt="" class="img-fluid pb-1" >
                    <div class="figure-caption">
                    <h6>NeckBands</h6>
                    <h6>Price :Rs 250</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(14)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=14" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                    }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3">
                <div class="card">
                    <img src="images/e7.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Sony Watch</h6>
                        <h6>Price :Rs 1500</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(15)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=15" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6 py-3" >
                <div class="card">
                    <img src="images/e8.png" alt="" class="img-fluid pb-1">
                    <div class="figure-caption">
                        <h6>Fastrack Watch</h6>
                        <h6>Price :Rs 3500</h6>
                        <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                        if (check_if_added_to_cart(16)) {
                        echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                        } else {
                        ?>
                        <p><a href="cart-add.php?id=16" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                        <?php
                        }
                    }
                    ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row text-center" id="shoes" >
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/f1.png" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Tomato</h6>
                            <h6>Price :Rs 10</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(17)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=17" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/f2.png" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Strawberry</h6>
                            <h6>Price :Rs 7</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(18)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                     <p><a href="cart-add.php?id=18" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                     <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/f3.png" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Peas</h6>
                            <h6>Price :Rs 7</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(19)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=19" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3" >
                    <div class="card">
                        <img src="images/f4.png" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                        <h6>Watermelon</h6>
                    <h6>Price :Rs 90</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(20)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=20" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/f5.png" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Grapes</h6>
                            <h6>Price :Rs 60</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(21)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=21" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/f6.png" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Lady Finger</h6>
                            <h6>Price :Rs 30</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(22)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                     <p><a href="cart-add.php?id=22" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                     <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3">
                    <div class="card">
                        <img src="images/f7.png" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                            <h6>Potato</h6>
                            <h6>Price :Rs 7</h6>
                            <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(23)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p><a href="cart-add.php?id=23" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6 py-3" >
                    <div class="card">
                        <img src="images/f8.png" alt="" class="img-fluid pb-1">
                        <div class="figure-caption">
                        <h6>Onion</h6>
                    <h6>Price :Rs 18</h6>
                    <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(24)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=24" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center" id="headphones">
                    <div class="col-md-3 col-6 py-3" >
                        <div class="card">
                            <img src="images/s1.png" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Notebook</h6>
                                <h6>Price :Rs 22</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(25)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p> <a href="cart-add.php?id=25" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="images/s2.png" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Ball Pen</h6>
                                <h6>Price :Rs 4</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(26)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=26" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="images/s3.png" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Gel Pen</h6>
                                <h6>Price :Rs 6</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(27)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=27" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                   <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="images/s4.png" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Pouch</h6>
                                <h6>Price :Rs 15</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(28)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p> <a href="cart-add.php?id=28" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-3 col-6 py-3" >
                        <div class="card">
                            <img src="images/s5.png" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Highlighter</h6>
                                <h6>Price :Rs 22</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(29)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p> <a href="cart-add.php?id=29" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="images/s6.png" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Pencil</h6>
                                <h6>Price :Rs 2</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(30)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=30" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="images/s7.png" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Fevicol</h6>
                                <h6>Price :Rs 10</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(31)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    </p><a href="cart-add.php?id=31" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                   <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 py-3">
                        <div class="card">
                            <img src="images/s8.png" alt="" class="img-fluid pb-1">
                            <div class="figure-caption">
                                <h6>Oil Patels</h6>
                                <h6>Price :Rs 95</h6>
                                <?php if (!isset($_SESSION['email'])) {?>
                    <p><a href="index.php#login" role="button" class="btn btn-warning  text-white ">Add To Cart</a></p>
                    <?php
                    } else {
                    if (check_if_added_to_cart(32)) {
                    echo '<p><a href="#" class="btn btn-warning  text-white" disabled>Added to cart</a></p>';
                    } else {
                    ?>
                    <p> <a href="cart-add.php?id=32" name="add" value="add" class="btn btn-warning  text-white">Add to cart</a></p>
                    <?php
                    }
                    }
                    ?>
                            </div>
                        </div>
                    </div>
                </div>
                
      </div>
      <!--menu list ends-->
      <!-- footer-->
        <?php include 'includes/footer.php'?>
      <!--footer ends-->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $('[data-toggle="popover"]').popover();
});
</script>
<?php if (isset($_GET['error'])) {$z = $_GET['error'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#signup').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
<?php if (isset($_GET['errorl'])) {$z = $_GET['errorl'];
    echo "<script type='text/javascript'>
$(document).ready(function(){
$('#login').modal('show');
});
</script>";
    echo "<script type='text/javascript'>alert('" . $z . "')</script>";}?>
</html>