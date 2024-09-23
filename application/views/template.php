<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : 'My Application'; ?></title>
    <!-- Include CSS/JS files -->
</head>

<body>
    <header>
        <h1>Welcome to My Application</h1>
        <!-- Include navigation -->
    </header>
    <main>
        <?php $this->load->view($view); ?>
    </main>
    <footer>
        <p>&copy; 2024 My Application</p>
    </footer>
</body>

</html>