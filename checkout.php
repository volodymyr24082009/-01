<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $item = htmlspecialchars($_POST['item']);
    $quantity = htmlspecialchars($_POST['quantity']);

    // Пошта, куди відправляється замовлення
    $to = "24g_chvv@liceum.ztu.edu.ua";
    $subject = "Нове замовлення з кафе 'Смакота'";
    
    // Формування повідомлення
    $message = "Ім'я: $name\n";
    $message .= "Email: $email\n";
    $message .= "Товар: $item\n";
    $message .= "Кількість: $quantity\n";

    $headers = "From: $email\r\n";

    // Відправка листа
    if (mail($to, $subject, $message, $headers)) {
        echo "Замовлення успішно відправлено!";
    } else {
        echo "Виникла проблема з відправкою замовлення.";
    }
}
?>

