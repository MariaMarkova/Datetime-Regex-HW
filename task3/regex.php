<?php
//3. Напишете и тествайте с PHP код регулярни изрази, които мачват:

//1. Всички думи, в които се съдържа “is”
$re = "/\\b(\\w*is\\w*)\\b/i";
$str = "this is a forest";
preg_match_all($re, $str, $matchesIs);
//var_dump($matchesIs);

// 2. Всички думи, които завършват на “ting”
$regex_word = "/\\b(\\w*thing)\\b/i";
$str = "everything is thing";
preg_match_all($regex_word, $str, $matchesTing);
var_dump($matchesTing);

// 3. Валидна дума


// 4. Валидно изречение

// 5. Валиден български GSM номер
$subjectGSM = "0896 722 484";
preg_match('@(08[7-9][0-9](\s*|/)([0-9](\s*|\-*)){6})@i', $subjectGSM, $matches);
//var_dump($matches);

// 6. Валиден HTML tag

// 7. Валиден PHP statement

// 8. Всички хора с име Иван в текст
$text = 'Ivan e malka vyshka. Toi e krysten na dqdo si ivan.';
$regex_givenWord = "/\\b(\\ivan)\\b/i";
preg_match_all($regex_givenWord, $text, $matchesIvan);
//var_dump($matchesIvan);

// 9. Всички коли с СТ регистрация
$regexCarNumber = "/([C][T](\\s*)([0-9](\\s*)){4}([A-Z]){2})/"; 
$strCar = "CT44 45AH\nCT 44 45 AH\nCT 4445 AH\nCT 4 4 4 5 AZ";  
preg_match_all($regexCarNumber, $strCar, $matchesCar);


// 10. Всички мейли в gmail
$subjectGmail = 'maria.ivanova.markova@gmail.com';
$regex_gmail = '/([a-z0-9]+(?!.*(?:\+{2,}|\-{2,}|\.{2,}))(?:[\.+\-]{0,1}[a-z0-9])*@gmail\.com)/i';

preg_match_all($regex_gmail, $subjectGmail, $matches);
//var_dump($matches);

// 11. Всички мейли в gmail, yahoo, abv
$subjectEmails = 'maria.ivanova.markova@gmail.com yordan@abv.bg';
$regex_allEmails = '/(([a-zA-Z]|[0-9])|([-]|[_]|[.]))+[@](([a-zA-Z0-9])|([-])){2,63}[.](([a-zA-Z0-9]){2,63})+/i';

preg_match_all($regex_allEmails, $subjectEmails, $matches);
//var_dump($matches);

// 12. Всички числа между 1000 и 19000
$regex_numberRange = '';
$regex_range = '';

// 13. всички валидни CSS класове
$rgex_Class = "/([a-z0-9-_]+)((\\s)*)({)((\\s)*)(([a-z0-9-_;:%]*\\s*)*)(})/i";
$strClass = ".class {\color:white;\n}";
preg_match_all($rgex_Class, $strClass, $matchesClass);

// 14. Началото на всички валидни PHP while цикли


// 15. Валиден SQL SELECT стейтмънт
$subject_SqlSelext = 'SELECT city FROM customers;';
$regex_selectStatement = '/^([s][e][l][e][c][t])\s([a-z0-9\-_]+|\*),?([a-z0-9\-_]+)*\s([f][r][o][m])\s([a-z0-9\-_]+),?([a-z0-9\-_]+)*(.*);$/i';

preg_match($regex_selectStatement, $subject_SqlSelext, $matchesSelect);
//var_dump($matchesSelect);