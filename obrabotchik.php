<?php 
print "<CENTER><FONT size=10>�������� ������:</FONT></CENTER><BR><BR><BR><BR>"; 
print "<TABLE width=400 align=\"left\" border=1"; 
echo "<TR><TD width=45%>�.�.�. :</TD><TD>", $_POST["lastname"], " ", $_POST["firstname"], " ", $_POST["patronymic"], "</TD></TR>"; 
echo "<TR><TD>���:</TD><TD>", $pol=$_POST["pol"],"</TD></TR>"; 
print "<TR><TD>�������� ���������:</TD><TD>"; 
$family=$_POST["family"]; 
if ($family==1) print ($pol=="�������")?("������"):("�� �������"); 
/*$pol = ������� ? true : false ; 
���� ����� ��� if () { .. } else {.. }*/ 
if ($family==2) print ($pol=="�������")?("�����"):("�������"); 
if ($family==3) print ($pol=="�������")?("������"):("�����");
if ($family==4) print ($pol=="�������")?("������?�"):("���������"); 
echo "</TD></TR><TR><TD>�����������:</TD><TD>", $_POST["edu"], "</TD>", "</TR>"; 
print "<TR><TD>�����:</TD><TD>"; 
$hobby=$_POST["hobby"]; 
if (in_array("���", $hobby)) print "����� �����������"; 
//in_array - ���������� TRUE, ���� �������� ���������� � �������. 
else for ($i=0; $i<count($hobby); $i++) echo $hobby[$i], "<BR>"; 
echo "</TD></TR><TR><TD>���������:</TD><TD>", isset($_POST["computer"])?("����"):("���"), "</TD></TR>"; 
/* ������� isset() ������������ ��� �����������, ��������� �� ���������� �����-���� ��������. 
���� �������� ���������, ������� ���������� true.*/ 
print "</TABLE>"; 
?>
