
<?php
require_once 'database/db.php';

// Fetch products from database
$category = isset($_GET['category']) ? $_GET['category'] : '';
$search = isset($_GET['search']) ? $_GET['search'] : '';

$query = "SELECT * FROM products WHERE 1=1";

if ($category) {
    $query .= " AND category LIKE '%" . mysqli_real_escape_string($conn, $category) . "%'";
}

if ($search) {
    $query .= " AND (name LIKE '%" . mysqli_real_escape_string($conn, $search) . "%' OR description LIKE '%" . mysqli_real_escape_string($conn, $search) . "%')";
}

$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Force - Products</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="header-top">
            <h1 class="logo">Computer Force</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="product.php">Products</a></li>
                <li><a href="register.php">Register</a></li>
                <li><a href="about.php">About</a></li>
            </ul>
        </nav>
    </header>

    <div class="search-container">
        <div class="search-box">
            <input type="text" id="searchKeyword" placeholder="Enter keyword" value="<?php echo htmlspecialchars($search); ?>">
            <button onclick="searchProducts()">Search</button>
        </div>
    </div>

    <div class="container">
        <aside class="sidebar">
            <h3>Purchases</h3>
            <div class="cart-items">
                <div class="cart-item">
                    <span>Test Item 1</span>
                    <span>$1000</span>
                </div>
                <div class="cart-item">
                    <span>Test Item 2</span>
                    <span>$500</span>
                </div>
            </div>
            <div class="cart-total">
                <div style="display: flex; justify-content: space-between;">
                    <span>Total</span>
                    <span>$1500</span>
                </div>
            </div>
        </aside>

        <main class="main-content">
            <h1>Products we sell</h1>
            <p>Computer Force sells products in the following categories:</p>
            
            <div class="product-categories">
                <div class="category-card">
                    <h3>Keyboards and Mice</h3>
                </div>
                <div class="category-card">
                    <h3>Software</h3>
                </div>
                <div class="category-card">
                    <h3>Peripherals</h3>
                </div>
                <div class="category-card">
                    <h3>Storage</h3>
                </div>
                <div class="category-card">
                    <h3>Graphics Card</h3>
                </div>
                <div class="category-card">
                    <h3>Printing and Scanning</h3>
                </div>
            </div>

            <?php if (mysqli_num_rows($result) > 0): ?>
                <h2 style="margin-top: 30px;">Available Products</h2>
                <div style="margin-top: 20px;">
                    <?php while ($product = mysqli_fetch_assoc($result)): ?>
                        <div style="background: #f8f9fa; padding: 15px; margin-bottom: 15px; border-radius: 4px;">
                            <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                            <p><strong>Category:</strong> <?php echo htmlspecialchars($product['category']); ?></p>
                            <p><strong>Price:</strong> $<?php echo number_format($product['price'], 2); ?></p>
                            <?php if ($product['description']): ?>
                                <p><?php echo htmlspecialchars($product['description']); ?></p>
                            <?php endif; ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </main>
    </div>

    <footer>
        <p>&copy; 2025 Leonard Siu All rights reserved</p>
        <div class="footer-links">
            <a href="privacyPolicy.php">Privacy Policy</a>
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>

