<?php
  $pattern="/[^0-9]/";   //������ʽģʽ
$string="0786968379#780780970";      //��Ҫ������ģʽ�ַ�������ƥ��ı����ַ���

   if(preg_match($pattern, $string)){
   	echo "������ʽ <b>{$pattern} </b>���ַ��� <b>{$string}</b> ƥ��ɹ�";
   }else{
   	echo "<font color='red'>������ʽ{$pattern} ���ַ��� {$string} ƥ��ʧ��</font>";
   }
