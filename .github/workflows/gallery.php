<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link rel="stylesheet" href="styles.css">
  <script src="script.js" defer></script>
</head>
<body>
  <header>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <div class="gallery">
      <?php for ($i = 1; $i <= 25; $i++): ?>
        <div class="image-container">
          <img src="path/to/image<?= $i ?>.jpg" alt="Image Description <?= $i ?>">
          <button class="view-image">View</button>
          <form action="purchase.php" method="post">
            <select name="size" id="size<?= $i ?>">
              <option value="digital">Digital - $1.00</option>
              <option value="6x4">6x4 - $0.20</option>
              <option value="5x7">5x7 - $0.50</option>
              <option value="A4">A4 - $20</option>
              <option value="A3">A3 - $50</option>
            </select>
            <input type="number" name="quantity" id="quantity<?= $i ?>" min="1" max="20" required>
            <button type="submit">Buy Now</button>
          </form>
        </div>
      <?php endfor; ?>
    </div>
  </main>
  <footer>
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
    </nav>
  </footer>
</body>
</html>
