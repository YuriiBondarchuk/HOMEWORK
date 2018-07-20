<?php

require_once 'DB.php';
require_once 'Session.php';

class authorizing
{

    public static $screen = array();
    public static $data = array();

// Метод для  проверки пароля пользователя в базе и редиректа на главную в случае отсутсвие или на страницу
// library_list.php в случае успеха

    public function zaprosUser()
    {
//Подключение к базе данных
        self::$screen = new DB('localhost', 'YMB', 'YMB', 'library');

        if (isset($_POST['email']) && isset($_POST['password'])) {

            $email = self::$screen->escape($_POST['email']);

            $password = self::$screen->escape($_POST['password']);

            $sql = "SELECT `name`,  language_default FROM `users` WHERE email='{$email}' AND password ='{$password}'";

            array_push(self::$data, self::$screen->query($sql));
            if (!empty(self::$data[0]))
               return self::$data;
            else
                return header('Location: ../index.php', true, 307);

        } else null;


    }

//Вытащить все книги из базы
    public function zaprosLibraryBook($language)
    {

        if ($language == 'ukr') $language_book = self::$screen->escape('name_ukr');
        else $language_book = self::$screen->escape('name_en');

        $sql = "SELECT  $language_book as name_book FROM book";

        array_push(self::$data, self::$screen->query($sql));
        return self::$data;


    }

//Вытащить всех авторов к каждой книге
    public function zaprosLibraryAuthor($language, $book)
    {

        if ($language == 'ukr') $language_author = self::$screen->escape('name_ukr');
        else $language_author = self::$screen->escape('name_en');

        $sql = "SELECT author.$language_author FROM author
            JOIN book ON book.$language_author= '{$book}'
            JOIN book_author ON author_id=author.id AND book_author.book_id=book.id";

        $author = self::$screen->query($sql);
        return $author;


    }

// Установка в базе языка для пользователя по его выбору
    public function zaprosDefaultLanguageUpdate($language)
    {

        $language_default = self::$screen->escape($language);


        $sql = "UPDATE users SET language_default = '{$language_default}'";

        self::$screen->query($sql);


    }
}

$user_varif = new authorizing();

$user = $user_varif->zaprosUser()[0][0];

$arr = array();

if (!empty($user)) {
    $entrance = new Session();
    $entrance->set('name', $user['name']);

    $zapros_book = $user_varif->zaprosLibraryBook($user['language_default']);
    $zapros_author = array();
    foreach ($zapros_book[1] as $key) {
        $zapros_author[$key['name_book']] = $user_varif->zaprosLibraryAuthor($user['language_default'], $key['name_book']);


    }


    require_once '../library_list.php';
}





