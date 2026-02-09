<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restock in Progress | The Tin Apothecary</title>
    <link rel="stylesheet" href="<?php echo TIN_RESTOCK_URL . 'assets/restock-style.css'; ?>">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@0;1&family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<body class="tin-restock-body">
    <div class="restock-container">
        <div class="restock-content">
            <h1 class="restock-headline"><?php echo esc_html(get_option('tin_restock_headline')); ?></h1>
            <p class="restock-message"><?php echo esc_html(get_option('tin_restock_message')); ?></p>
            <div class="restock-time">
                <strong><?php echo esc_html(get_option('tin_restock_return_time')); ?></strong>
            </div>
        </div>
    </div>
</body>
</html>