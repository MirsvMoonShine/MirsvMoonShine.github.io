�޿���ٴ��� �ҽ��� �ణ �����߽��ϴ�.

�޿���ٴ��� ����� �����Ͷ� �ø��ϴ�.

�ҽ��� �������� ���Ƽ� �̷��� ������ �����ϰ� ������ �߽��ϴ�.

�׷��� �� ����ϰ� ���̵��� �ֽ���ϴ�.

���κ��带 ����ϰ� �Ǹ� �ּ� ������ �κп� � �����°� �־.

���� ���Խ�û���� �ּҰ˻����� �ڲ� ������ �����߰ŵ��..^^

���� �޿���ٴ��� ������� �����ȣ ��� ���κ��忡 �־ ��ĥ���� ��������..

�̰� ���� �ұ� �ϴٰ� �׳� ���Ϸ� �߽��ϴ�. �ణ ���̴� ������ �׷����� 

�����ؼ���.. ���� ����� ���� ���⼭ ����.. ������� ���ڽ��ϴ�.

������ Ǫ�ø� 

zipcode.db : �����ȣ ������� (2003.02.17.����)
zipcode.php
zipcode2.php

�̷��� ������ �ֽ��ϴ�.

�� ��� ������ ���κ����� zipcode ������ ���ε� ��ŵ�ϴ�.

������ member_join.php�� member_modify.php ������ �����ؾ� �մϴ�.

�ΰ��� ���Ͽ� ���ø� �˾� �ڹٽ�ũ��Ʈ��

function address_popup(num) {
  window.open('zipcode/search_zipcode.php?num='+num,'searchaddress','width=440,height=230,scrollbars=yes');
}

�� �Լ��� ���̻� ���κ��� �ּҰ˻��� ������� �����÷��� �� �Լ���
    
    zipcode/search_zipcode.php
    zipcode/search_zipcode2.php
    zipcode/search_zipcode3.php

�� ������ ���ϵ�� �Բ� ���� �Ͻø� �˴ϴ�. ���μŵ� �ƹ��� ������ �����ϴ�.

�켱 �׽�Ʈ�� ���� �����Ͻñ⸦ �ٶ��ϴ�.���� ���߿� �ȵȴٰ� ���� ���ñ���.^^;

�̷��� ������ ������. �� �Ʒ����� �Ʒ��� �Լ��� �ϳ� �� �߰� �ϰų� �����մϴ�.

function zipcode(form,address) {
  window.open('zipcode/zipcode.php?form='+form+'&address='+address,'searchaddress','left=100,top=100,width=445,height=400,scrollbars=yes');
}

�ΰ��� ����(member_join.php�� member_modify.php)�� ã�Ƽ� ���� �߰����ֽø� �˴ϴ�.

�׸��� ���� �ּ�ã�� ��ũ�� �ٲ���� �մϴ�.

�ι�°���� �ڹٽ�ũ�� �Լ��� �߰����̴ּ� member_join.php�� member_modify.php ���Ͽ�

���ּ�ã�� ��ư �ϰ� ȸ���ּ�ã�� ��ư �� �ΰ��� �ֽ��ϴ�.

���ּ�ã��
    onclick=address_popup(1) �� =====> onclick=zipcode('write','home_address') �� ����

ȸ���ּ�ã��
    onclick=address_popup(2) �� =====> onclick=zipcode('write','office_address') �� ����

�׷� �׽�Ʈ �غ�����..

�ȵǽø� �ڸ�Ʈ �����ּ���..
