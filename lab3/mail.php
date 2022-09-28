<!doctype html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251" />
    <title> Ваше сообщение успешно отправлено </title>
</head>

<body>

    <?php
    $back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";

    if (isset($_FILES) && $_FILES['inputfile']['error'] == 0) {

        $destiation_dir = dirname(__FILE__) . '/' . $_FILES['inputfile']['name'];

        move_uploaded_file($_FILES['inputfile']['tmp_name'], $destiation_dir);

        echo 'Файл успешно загрузен';
    } else {

        echo "Файл не был загружен! $back";
    }

    if (
        !empty($_POST['surname']) and !empty($_POST['name']) and !empty($_POST['patronymic'])
        and !empty($_POST['birthday']) and !empty($_POST['sex']) and !empty($_POST['nationality'])
        and !empty($_POST['address']) and !empty($_POST['interests']) and !empty($_POST['email'])
        and !empty($_POST['skype']) and !empty($_POST['phone']) and !empty($_POST['contact'])
        and !empty($_POST['blast'])
    ) {

        $surname = trim(strip_tags($_POST['surname']));
        $name = trim(strip_tags($_POST['name']));
        $patronymic = trim(strip_tags($_POST['patronymic']));
        $birthday = trim(strip_tags($_POST['birthday']));
        $sex = trim(strip_tags($_POST['sex']));
        $nationality = trim(strip_tags($_POST['nationality']));
        $aboutMyself = trim(strip_tags($_POST['aboutMyself']));

        $address = trim(strip_tags($_POST['address']));
        $interests = trim(strip_tags($_POST['interests']));
        $email = trim(strip_tags($_POST['email']));
        $skype = trim(strip_tags($_POST['skype']));
        $phone = trim(strip_tags($_POST['phone']));
        $contact = trim(strip_tags($_POST['contact']));
        $blast = trim(strip_tags($_POST['blast']));

        $toFile =
            "Фамилия: " . $surname . "\r\n" .
            "Имя: " . $name . "\r\n" .
            "Отчество: " . $patronymic . "\r\n" .
            "День рождения: " . $birthday . "\r\n" .
            "Пол: " . $sex . "\r\n" .
            "Национальность: " . $nationality . "\r\n" .
            "О себе: " . $aboutMyself . "\r\n" .
            "Адресс: " . $address . "\r\n" .
            "Интересы: " . $interests . "\r\n" .
            "Почта: " . $email . "\r\n" .
            "Скайп: " . $skype . "\r\n" .
            "Телефон: " . $phone . "\r\n" .
            "Как связаться: " . $contact . "\r\n" .
            "Получать рассылку: " . $blast . "\r\n" .
            "---------------------------------------------------------------";

        $filename = __DIR__ . '/profils.txt';
        file_put_contents($filename, PHP_EOL . $toFile, FILE_APPEND);

        echo "Ваше сообщение успешно отправлено!";

        echo '<script>
        location.href= "/";
        </script>';

        exit;
    } else {

        echo "Для отправки сообщения заполните все поля! $back";
        exit;
    }

    ?>
</body>

</html>