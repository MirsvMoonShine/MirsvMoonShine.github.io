<html>
<head>
<title>�����ȣã��</title>
<meta http-equiv='Content-Type' content='text/html; charset=euc-kr'>
<meta http-equiv='Cache-Control' content='no-cache'>
<meta name='Author' content='LeeDooHyung.com'>
<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body bgcolor='#FFFFFF' text='#000000' leftmargin='0' topmargin='0' marginwidth='0' marginheight='0' onload='document.zip.query.focus();'>
<script>
function check_submit()
{
 if(!document.zip.query.value)
 {
  alert('�ּҸ� �Է��Ͽ� �ּ���');
  document.zip.query.focus();
  return false;
 }
 return true;
}
</script>

<?
//�����ȣ �����ͺ��̽� ���� ����
$zipfile = "zipcode.db";

echo ("

        <form name=zip method=post action='$PHP_SELF' onsubmit='return check_submit()'>
        <input type=hidden name=mode value=search>
        <input type=hidden name=form value=$form>
        <input type=hidden name=address value=$address>
        <table width='100%' height='30' cellpadding='2' cellspacing='1' border='0' bgcolor='666666'>
          <tr>
            <td align='center' bgcolor='EEEEEE'>
                <select name=searchmode onChange=document.zip.query.focus()>
                <option value=address>�ּҷ� ã��
                <option value=code>�����ȣ�� ã��
                </select>
                <input type=text name=query size=16 style='ime-mode:active'>
            </td>
            <td align='center' bgcolor='DCDCDC'>
                <input type='submit' value='ã��'>
                <input type='button' value='�ݱ�' onClick='javascript:window.close();opener.focus();'>
            </td>
          </tr>
        </table>
        </form>
");

        if($query) {
        echo ("
        <table width='100%' cellpadding='2' cellspacing='1' border='0' bgcolor='666666'>
        <tr>
                <td align=center bgcolor=A5A5A5 colspan='4'><b>�� �� �� ��</b></td>
        </tr>
<tr align=center bgcolor=dddddd>
<td width='30' align=center>��ȣ</td>
  <td width='50' align=center>�����ȣ</td>
  <td align=center>��&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��</td>
  <td width='30' align=center>����</td></font>
</tr>
                ");
                $query = chop($query);
                $datum = file("$zipfile");
                $i=0;
                while ($data = each($datum)) {
                        if(eregi("$query", $data[1])) {
                                $all_code = explode("|",$data[1]);
                                $i=$i+1;
				$add = "$all_code[1] " . "$all_code[2] " . "$all_code[3] " . "$all_code[4] ";
                                $juso = "$all_code[0] " . "$all_code[1] " . "$all_code[2] " . "$all_code[3] ";
                                echo ("
                                        
                                        <tr><td bgcolor='FFFFFF' align=center>$i</td>
                                        <td bgcolor='FFFFFF' align=center>$all_code[0]</td>
                                        <td bgcolor='FFFFFF'>&nbsp;$add</td>
                                        <td bgcolor='FFFFFF' align=center><a href=\"zipcode2.php?form=$form&address=$address&addr=$juso\">����</a></td></tr>
                                        
                                        ");
                        }
                }
        echo ("<tr>
                <td bgcolor=dddddd align=center colspan='4'><b>�� $i ���� �˻��Ǿ����ϴ�.</b>
                <br>
<div align=center><a href=# onclick=history.go(-2)><font color=black>�ڷΰ���</a> <font color=bbbbbb>|</font> <a href=# onclick=window.close()><font color=black>â �ݱ�</a>
        </td></tr>
        </table>
        ");

        } else {
        //�ʱ�ȭ��
        echo ("
        <table width='100%' cellpadding='2' cellspacing='1' border='0' bgcolor='EEEEEE'>
        <tr bgcolor='EEEEEE'>
  <td align=center height='30'><b>�����ȣ �˻� </b>(Search Zipcode)</td>
</tr>
<tr bgcolor=white>
  <td>
                <br>
            <p align='center'>�����ȣ�� �˻��մϴ�.<br>
                ã���� �ϴ� ���� �̸��� �Է��Ͽ� �ֽʽÿ�.<br>
                ( ��: <b>�̾�</b> �Ǵ� <b>�̾�9��</b> )<br>
                ( ��: �����ȣ ã���� ��� <b>142-809</b> )<br><br>
                </td>
        </table>
                ");

        }

?>

</body>
</html>
