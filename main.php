<!-- Here is the PHP code for error and success messages, along with which tab and form is active -->
<?php

session_start();

$errors = [
    'signInError' => $_SESSION['signIn_error'] ?? '', 
    'loginError' => $_SESSION['login_error'] ?? ''
    ];
$successMessages = [
    'signInSuccess' => $_SESSION['signIn_successMessage'] ?? '',
    'loginSuccess' => $_SESSION['login_successMessage'] ?? ''
    ];

$activeTab = $_SESSION['active_tab'] ?? '#home';
$activeForm = $_SESSION['active_form'] ?? 'signIn';

unset($_SESSION['signIn_error'], $_SESSION['login_error'], $_SESSION['signIn_successMessage'], $_SESSION['login_successMessage'], $_SESSION['active_tab']);

function showMessage($message, $type = 'error') {
    if (empty($message)) {
        return '';
    }
    $class = ($type === 'success') ? 'success_message' : 'error_message';
    return "<p class='$class'>$message</p>";
}

function isActive($current, $target) {
    return ($current === $target) ? 'active' : '';
}

function isActiveForm($forName, $activeForm) {
    return $forName === $activeForm ? 'active' : '';
}

?>



<!-- Here is the HTML code for the whole website -->
<!DOCTYPE html>
<html lang="en">
<header>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
    <script src="js/tabs.js" defer></script>
    <script src="js/sidebar.js" defer></script>
    <script src="js/images.js" defer></script>
    <script src="js/form.js" defer></script>
    <script src="js/shopping-cart.js" defer></script>
    
    <title>Sista's Website</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/tabs.css">
    <link rel="stylesheet" href="css/images.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/form.css">
    <link rel="stylesheet" href="css/shopping-cart.css">
</header>
<body>
    <div class="wrapper">
        
        <div class="sidebar active">

            <button id="openCloseButton">&plus;</button>

            <h1>Sista's Website</h1>

            <ul class="tabs">
                <li data-tab-target="#home" class="active tab <?= isActive($activeTab, '#home') ?>">Home</li>
                <li data-tab-target="#projects" class="tab <?= isActive($activeTab, '#projects') ?>">Projects</li>
                <li data-tab-target="#shop" class="tab <?= isActive($activeTab, '#shop') ?>">Shop</li>
                <li data-tab-target="#aboutMe" class="tab <?= isActive($activeTab, '#aboutMe') ?>">About Me</li>
                <li data-tab-target="#signIn-login" class="tab <?= isActive($activeTab, '#signIn-login') ?>">Sign In</li>
            </ul>
        </div>
        
        <div class="tab-content">
            <div id="home" data-tab-content class="<?= isActive($activeTab, '#home') ?>">
                <h2>Home</h2>
                <p class="introText">Welcome to my website!</p>
                <p>Here you can find inspiration from my crocheted and knitted projects. 
                    You can also buy some samples of my projects under the "Shop" tab above. Feel free to explore!</p>
            </div>

            <div id="projects" data-tab-content class="<?= isActive($activeTab, '#projects') ?>">
                <h2>My Projects</h2>
                <p>Here you can see some of my latest crocheted and knitted projects.</p>

                <div class="container swiper">
                    <div class="card-wrapper">
                        <ul class="card-list swiper-wrapper">
                            <li class="card-item swiper-slide">
                                <a href="#" class="card-link">
                                    <img src="images/lily-sweater.jpg" alt="Lily Sweater" class="card-image">
                                    
                                    <p class="badge">Knitting</p>
                                    
                                    <h2 class="card-title">Lily Sweater</h2>

                                    <p class="image-text">The cutest sweater for all seasons 💖</p>
                                </a>
                            </li>

                            <li class="card-item swiper-slide">
                                <a href="#" class="card-link">
                                    <img src="images/diamond-sweater (1).jpg" alt="Diamond Sweater" class="card-image">
                                    
                                    <p class="badge">Crochet</p>
                                    
                                    <h2 class="card-title">Diamond Sweater</h2>

                                    <p class="image-text">The warmest and chunky yet cutest winter sweater 🩵</p>
                                </a>
                            </li>

                            <li class="card-item swiper-slide">
                                <a href="#" class="card-link">
                                    <img src="images/babyclava (1).jpg" alt="Babyclava" class="card-image">
                                    
                                    <p class="badge">Knitting</p>
                                    
                                    <h2 class="card-title">Babyclava</h2>

                                    <p class="image-text">Baby balaclava for all small aged people!</p>
                                </a>
                            </li>

                            <li class="card-item swiper-slide">
                                <a href="#" class="card-link">
                                    <img src="images/knitted-belt (1).jpg" alt="Knitted Belt" class="card-image">
                                    
                                    <p class="badge">Crochet</p>
                                    
                                    <h2 class="card-title">Knitted Belt</h2>

                                    <p class="image-text">Multicolored knit belt for colder days in mind ☃️</p>
                                </a>
                            </li>

                            <li class="card-item swiper-slide">
                                <a href="#" class="card-link">
                                    <img src="images/devils-beanie (1).png" alt="Devil's Beanie" class="card-image">
                                    
                                    <p class="badge">Crochet</p>
                                    
                                    <h2 class="card-title">Devil's Beanie</h2>

                                    <p class="image-text">Devil’s cute beanie</p>
                                </a>
                            </li>

                            <li class="card-item swiper-slide">
                                <a href="#" class="card-link">
                                    <img src="images/indiana-poncho.jpg" alt="Indiana Poncho" class="card-image">
                                    
                                    <p class="badge">Knitting</p>
                                    
                                    <h2 class="card-title">Indiana Poncho</h2>

                                    <p class="image-text">Indiana Jolie’s poncho for life 🤠</p>
                                </a>
                            </li>

                        </ul>

                        <div class="swiper-pagination"></div>

                    </div>
                </div>

            </div>

            <div id="shop" data-tab-content class="<?= isActive($activeTab, '#shop') ?>">
                <h2>Shop</h2>
                <p>Check out my shop for some beautiful handmade items!</p>

                <div class="shop-layout">

                    <div class="shop-items">
                        <div class="container swiper">
                            <div class="card-wrapper">
                                <ul class="card-list swiper-wrapper">
                                    <li class="card-item swiper-slide">
                                        <a href="#" class="card-link">
                                            <img src="images/lily-sweater.jpg" alt="Lily Sweater" class="card-image">
                                            
                                            <p class="badge">Knitting</p>
                                            
                                            <h2 class="card-title">Lily Sweater</h2>

                                            <p class="image-text">The cutest sweater for all seasons 💖</p>

                                            <p>45.00 DKK <button class="add-to-cart-button" data-name="Lily Sweater" data-price="45">Add to Cart</button></p>
                                        </a>
                                    </li>

                                    <li class="card-item swiper-slide">
                                        <a href="#" class="card-link">
                                            <img src="images/babyclava (1).jpg" alt="Babyclava" class="card-image">
                                            
                                            <p class="badge">Knitting</p>
                                            
                                            <h2 class="card-title">Babyclava</h2>

                                            <p class="image-text">Baby balaclava for all small aged people!</p>

                                            <p>25.00 DKK <button class="add-to-cart-button" data-name="Babyclava" data-price="25">Add to Cart</button></p>
                                        </a>
                                    </li>

                                    <li class="card-item swiper-slide">
                                        <a href="#" class="card-link">
                                            <img src="images/indiana-poncho.jpg" alt="Indiana Poncho" class="card-image">
                                            
                                            <p class="badge">Knitting</p>
                                            
                                            <h2 class="card-title">Indiana Poncho</h2>

                                            <p class="image-text">Indiana Jolie’s poncho for life 🤠</p>

                                            <p>75.00 DKK <button class="add-to-cart-button" data-name="Indiana Poncho" data-price="75">Add to Cart</button></p>
                                        </a>
                                    </li>

                                </ul>

                                <div class="swiper-pagination"></div>

                            </div>
                        </div>
                    </div>
                    

                    <aside class="shopping-cart">
                        <img src="images\shopping-cart-svgrepo-com.svg" alt="Shopping Cart Icon" class="shopping-cart-button">
                        <h2>Your Shopping List</h2>

                        <div id="shopping-cart-items">
                            <p class="empty-list-message">Its empty in here...</p>
                        </div>

                        <div class="shopping-cart-total">
                            <hr>
                            <p>Total of items: <span id="header-count">0</span></p>
                            <p>Total: <span id="total-currency">0.00</span> DKK</p>
                            <button class="checkout-button">Ready for checkout?</button>
                        </div>
                    </aside>
                    
                </div>
            </div>

            <div id="aboutMe" data-tab-content class="<?= isActive($activeTab, '#aboutMe') ?>">
                <h2>About Me</h2>
                <p>Learn more about me as a person and why I wanted this website.</p>
            </div>

            <php>
                <div id="signIn-login" data-tab-content class="<?= isActive($activeTab, '#signIn-login') ?>">
                    <div class="containerForm">

                        <div class="form-box <?= isActiveForm('signIn', $activeForm); ?>" id="signIn-form">
                            <form action="signIn-login.php" method="post">
                                <h2>Sign In</h2>

                                <?= showMessage($errors['signInError'], 'error'); ?>
                                <?= showMessage($successMessages['signInSuccess'], 'success'); ?>

                                <input type="name" name="name" placeholder="Name" required>
                                <input type="email" name="email" placeholder="Email" required>
                                <input type="password" name="password" placeholder="Password" required>
                                <button type="submit" name="signIn">Sign In</button>
                                <p>Already have an account? <a href="#" onclick="showForm('login-form')">Log In</a></p>
                            </form>
                        </div>

                        <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
                            <form action="signIn-login.php" method="post">
                                <h2>Login</h2>

                                <?= showMessage($errors['loginError'], 'error'); ?>
                                <?= showMessage($successMessages['loginSuccess'], 'success'); ?>
                                
                                <input type="email" name="email" placeholder="Email" required>
                                <input type="password" name="password" placeholder="Password" required>
                                <button type="submit" name="login">Login</button>
                                <p>You don't have an account? <a href="#" onclick="showForm('signIn-form')">Sign In</a></p>
                            </form>
                        </div>

                    </div>
                </div>
            </php>
            
        </div>
    </div>

</body>
</html>