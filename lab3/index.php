<!doctype html>
<html>

<head>
    <title> Создание профиля </title>
    <link rel="stylesheet" media="all" type="text/css" href="style.css" />
</head>

<body>

    <h1 class="title"> Мой профиль </h1>

    <form method="post" action="mail.php" onSubmit="return checkForm(this)" enctype="multipart/form-data">

        <div class="questionnaire">

            <div class="left">

                <img src="/image/profile-anonymous.png" width="250" height='350' alt="avatar" class="avatar">

                <input class="loadButton" name="inputfile" id="inputfile" type="file" onchange="showFile()" accept="image/*">

            </div>

            <div class="center">

                <label for='surname'> Фамилия </label>
                <input name='surname' type="text" required>

                <label for='name'> Имя </label>
                <input name='name' type="text" required>

                <label for='patronymic'> Отчество </label>
                <input name='patronymic' type="text" required>

                <label for="birthday"> Дата рождения </label>
                <input name='birthday' type="date" id='birthday' required>

                <div class="drop-down-lists">

                    <div class="drop-down-sex">

                        <label for="sex"> Пол </label>

                        <select id="sex" name="sex">
                            <option value="мужской"> Мужской </option>
                            <option value="женский"> Женский </option>
                        </select>

                    </div>

                    <div class="drop-down-nationality">

                        <label for="nationality"> Национальность </label>

                        <select id="nationality" name="nationality">
                            <option value="украинец"> Украинец </option>
                            <option value="белорус"> Белорус </option>
                            <option value="русский"> Русский </option>
                            <option value="англичанин"> Англичанин </option>
                            <option value="еврей"> Еврей </option>
                        </select>

                    </div>

                </div>

                <div class="aboutMyself">

                    <label for="aboutMyself"> Краткая информация </label>

                    <textarea 
                        id='aboutMyself' 
                        name="aboutMyself" 
                        rows="7" 
                        cols="30" 
                        placeholder='Напишите краткую информацию о себе'
                    ></textarea>

                </div>


            </div>

            <div class="right">

                <label for="address"> Адрес </label>
                <input type="text" name='address' required>

                <label for="interests"> Мои интересы </label>
                <input type="text" name='interests' required>

                <label for="email"> E-mail </label>
                <input type="text" name='email' required>

                <label for="skype"> Skype </label>
                <input type="text" name='skype' required>

                <label for="phone"> Телефон </label>
                <input type="text" name='phone' required>

                <p> Связаться со мной </p>

                <div class="radioButtons">

                    <div class='radioButton'>

                        <input type="radio" id="phoneRadioButton" name="contact" value="по телефону" required>

                        <label for="phoneRadioButton"> По телефону </label>

                    </div>

                    <div class="radioButton">

                        <input type="radio" id="emailRadioButton" name="contact" value="по почте" required>

                        <label for="emailRadioButton"> По электронной почте </label>

                    </div>

                    <div class="radioButton">

                        <input type="radio" id="skypeRadioButton" name="contact" value="по Skype" required>

                        <label for="skypeRadioButton"> Skype </label>

                    </div>

                </div>

                <p> Получать рассылку </p>

                <div class="radioButtons">

                    <div class="radioButton">

                        <input type='radio' id='yes' value='да' name='blast' required>

                        <label for="yes"> Да </label>

                    </div>

                    <div class="radioButton">

                        <input type='radio' id='no' value='нет' name='blast' required>

                        <label for="no"> Нет </label>

                    </div>

                </div>

            </div>

        </div>

        <hr>

        <div class="buttons">

            <button class="saveButton"> Сохранить </button>

            <button class="clearButton"> Сбросить </button>

        </div>

    </form>

</body>

<script src="script.js"></script>

</html>