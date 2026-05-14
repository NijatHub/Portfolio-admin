<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Thank You | Nijat Asgarli</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <section class="thankyou" style="text-align:center; margin-top:10%;">
    <h1 style="font-size:3rem; color:var(--main-color);">
      Thank You, <?php echo htmlspecialchars($_GET['name'] ?? 'Friend'); ?>!
    </h1>
    <p style="font-size:1.5rem; color:var(--text-color); margin:2rem;">
      Your message has been successfully sent. I’ll get back to you soon.
    </p>
    <a href="index.html" class="btn">Back to Home</a>
  </section>
</body>
</html>
