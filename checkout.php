<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $item = htmlspecialchars($_POST['item']);
    $quantity = htmlspecialchars($_POST['quantity']);

    $to = "24g_chvv@liceum.ztu.edu.ua";
    $subject = "Нове замовлення з кафе 'Смакота'";
    $message = "Ім'я: $name\n";
    $message .= "Email: $email\n";
    $message .= "Товар: $item\n";
    $message .= "Кількість: $quantity\n";

    $headers = "From: $email\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Замовлення успішно відправлено!";
    } else {
        echo "Виникла проблема з відправкою замовлення.";
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Обробка даних
}

?>

