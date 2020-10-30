<?php
function checkPhoneNumber($number)
{
    $patten = '/^[(]+[0-9]{2}+[)]+[-]+[(]+[0]{1}+[0-9]{9}+[)]$/';
    if (preg_match_all($patten, $number)) {
        return "So dien thoai hop le";
    } else {
        return "So dien thoai khong hop le";
    }
}

echo checkPhoneNumber('(84)-(0978489648)');
echo "<br>";
echo "<br>";
echo checkPhoneNumber(' (a8)-(22222222)');