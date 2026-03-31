<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Meu Site</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <?php include 'includes/roof.php'; ?>

    <main id="body">
        <?php
            $page = $_GET['page'] ?? 'home';

            $path = "pages/$page.php";

            if (file_exists($path)) {
                include $path;
            } else {
                echo "<h2>Página não encontrada</h2>";
            }
        ?>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/script.js"></script>
</body>
</html>