<?
    // *** Настройка обязательности полей, в случае если они присутствуют в вашей форме
 
    // Имя
    const NAMEISREQUIRED = true;
    const MSGSNAMEERROR = "Поле обязательно для заполнения";
 
    // Телефон
    const TELISREQUIRED = true;
    const MSGSTELERROR = "Поле обязательно для заполнения";
 
    // Email
    const EMAILISREQUIRED = true;
    const MSGSEMAILERROR = "Поле обязательно для заполнения";
    const MSGSEMAILINCORRECT = "Некорректный почтовый адрес";
 
    // Текстовое поле
    const TEXTISREQUIRED = false;
    const MSGSTEXTERROR = "Поле обязательно для заполнения";
 
    // Файл
    const FILEISREQUIRED = false;
    const MSGSFILEERROR = "Поле обязательно для заполнения";
 
    // Соглашение
    const AGGREMENTISREQUIRED = false;
    const MSGSAGGREMENTERROR = "Поле обязательно для заполнения"; 
 
    // Сообщение об успешной отправке
    const MSGSSUCCESS = "Сообщение успешно отправлено";
 
    // *** SMTP *** //
 
        require_once($_SERVER['DOCUMENT_ROOT'] . '/mail/php/smtp.php');
        const HOST = 'smtp.gmail.com';
        const LOGIN = 'meldanil108@gmail.com'; // удалить
        const PASS = 'Danil9999'; // удалить
        const PORT = '465';
 
    // *** /SMTP *** //
 
        // Почта с которой будет приходить письмо
    const SENDER = 'meldanil108@gmail.com'; // удалить
     
    // Почта на которую будет приходить письмо
    const CATCHER = 'meldanil108@gmail.com'; // удалить
     
    // Тема письма
    const SUBJECT = 'Заявка с сайта';
     
    // Кодировка
     const CHARSET = 'UTF-8';