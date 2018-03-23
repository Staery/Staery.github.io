<?php 
print "<CENTER><FONT size=10>Получены данные:</FONT></CENTER><BR><BR><BR><BR>"; 
print "<TABLE width=400 align=\"left\" border=1"; 
echo "<TR><TD width=45%>Ф.И.О. :</TD><TD>", $_POST["lastname"], " ", $_POST["firstname"], " ", $_POST["patronymic"], "</TD></TR>"; 
echo "<TR><TD>Пол:</TD><TD>", $pol=$_POST["pol"],"</TD></TR>"; 
print "<TR><TD>Семейное положение:</TD><TD>"; 
$family=$_POST["family"]; 
if ($family==1) print ($pol=="Мужской")?("Холост"):("Не замужем"); 
/*$pol = условие ? true : false ; 
Тоже самое что if () { .. } else {.. }*/ 
if ($family==2) print ($pol=="Мужской")?("Женат"):("Замужем"); 
if ($family==3) print ($pol=="Мужской")?("Вдовец"):("Вдова");
if ($family==4) print ($pol=="Мужской")?("Развед?н"):("Разведена"); 
echo "</TD></TR><TR><TD>Образование:</TD><TD>", $_POST["edu"], "</TD>", "</TR>"; 
print "<TR><TD>Хобби:</TD><TD>"; 
$hobby=$_POST["hobby"]; 
if (in_array("Нет", $hobby)) print "Хобби отсутствует"; 
//in_array - возвращает TRUE, если значение существует в массиве. 
else for ($i=0; $i<count($hobby); $i++) echo $hobby[$i], "<BR>"; 
echo "</TD></TR><TR><TD>Компьютер:</TD><TD>", isset($_POST["computer"])?("есть"):("нет"), "</TD></TR>"; 
/* Функция isset() используется для определения, присвоено ли переменной какое-либо значение. 
Если значение присвоено, функция возвращает true.*/ 
print "</TABLE>"; 
?>
