<? 
require_once('db.php');
$login = $_POST['login'] ; 
$pass = $_POST['pass']  ;
$repeatpass = $_POST['repeatpass'] ?? '';
$email = $_POST['email'] ;

if (empty($login) || empty($pass) || empty($repeatpass) || empty($email)) {
    echo "Заполните все поля";
} else {
    if ($pass !== $repeatpass) {
        echo "Пароли не совпадают";
    } else {
        // Валидация email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Неверный формат email";
        } else {
            // Экранирование входных данных для предотврашения sql-иньекций
            $login = mysqli_real_escape_string($conn, $login);
            $email = mysqli_real_escape_string($conn, $email);
            $hashed_pass = password_hash($pass, PASSWORD_DEFAULT); // Хэширование пароля
            // не понимаю правда как хеширование работаем ибо в таблицу переходит что-то типо 
            //$2y$10$P.A739WC1d85fs5I0MDcxOQBg9fu/mZ1DyowFCnYIY5tr.IFmo34K

            // Подготовка SQL-запроса
            $sql = "INSERT INTO user (login, pass, email) VALUES ('$login', '$pass', '$email')";
            
            if ($conn->query($sql) === TRUE) {
                echo "Успешная регистрация";
            } else {
                echo "Ошибка: " . $conn->error;
            }
        }
    }
}



?>