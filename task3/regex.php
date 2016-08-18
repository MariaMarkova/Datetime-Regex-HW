<?php
//3. �������� � ��������� � PHP ��� ��������� ������, ����� ������:

//1. ������ ����, � ����� �� ������� �is�
$re = "/\\b(\\w*is\\w*)\\b/i";
$str = "this is a forest";
preg_match_all($re, $str, $matchesIs);
//var_dump($matchesIs);

// 2. ������ ����, ����� ��������� �� �ting�
$regex_word = "/\\b(\\w*thing)\\b/i";
$str = "everything is thing";
preg_match_all($regex_word, $str, $matchesTing);
var_dump($matchesTing);

// 3. ������� ����


// 4. ������� ���������

// 5. ������� ��������� GSM �����
$subjectGSM = "0896 722 484";
preg_match('@(08[7-9][0-9](\s*|/)([0-9](\s*|\-*)){6})@i', $subjectGSM, $matches);
//var_dump($matches);

// 6. ������� HTML tag

// 7. ������� PHP statement

// 8. ������ ���� � ��� ���� � �����
$text = 'Ivan e malka vyshka. Toi e krysten na dqdo si ivan.';
$regex_givenWord = "/\\b(\\ivan)\\b/i";
preg_match_all($regex_givenWord, $text, $matchesIvan);
//var_dump($matchesIvan);

// 9. ������ ���� � �� �����������
$regexCarNumber = "/([C][T](\\s*)([0-9](\\s*)){4}([A-Z]){2})/"; 
$strCar = "CT44 45AH\nCT 44 45 AH\nCT 4445 AH\nCT 4 4 4 5 AZ";  
preg_match_all($regexCarNumber, $strCar, $matchesCar);


// 10. ������ ����� � gmail
$subjectGmail = 'maria.ivanova.markova@gmail.com';
$regex_gmail = '/([a-z0-9]+(?!.*(?:\+{2,}|\-{2,}|\.{2,}))(?:[\.+\-]{0,1}[a-z0-9])*@gmail\.com)/i';

preg_match_all($regex_gmail, $subjectGmail, $matches);
//var_dump($matches);

// 11. ������ ����� � gmail, yahoo, abv
$subjectEmails = 'maria.ivanova.markova@gmail.com yordan@abv.bg';
$regex_allEmails = '/(([a-zA-Z]|[0-9])|([-]|[_]|[.]))+[@](([a-zA-Z0-9])|([-])){2,63}[.](([a-zA-Z0-9]){2,63})+/i';

preg_match_all($regex_allEmails, $subjectEmails, $matches);
//var_dump($matches);

// 12. ������ ����� ����� 1000 � 19000
$regex_numberRange = '';
$regex_range = '';

// 13. ������ ������� CSS �������
$rgex_Class = "/([a-z0-9-_]+)((\\s)*)({)((\\s)*)(([a-z0-9-_;:%]*\\s*)*)(})/i";
$strClass = ".class {\color:white;\n}";
preg_match_all($rgex_Class, $strClass, $matchesClass);

// 14. �������� �� ������ ������� PHP while �����


// 15. ������� SQL SELECT ���������
$subject_SqlSelext = 'SELECT city FROM customers;';
$regex_selectStatement = '/^([s][e][l][e][c][t])\s([a-z0-9\-_]+|\*),?([a-z0-9\-_]+)*\s([f][r][o][m])\s([a-z0-9\-_]+),?([a-z0-9\-_]+)*(.*);$/i';

preg_match($regex_selectStatement, $subject_SqlSelext, $matchesSelect);
//var_dump($matchesSelect);