<?php
$dir_source= dirname(__FILE__).'/source';
$dir_in= dirname(__FILE__).'/in';
$dir_out= dirname(__FILE__).'/out';

if (is_dir($dir_source)) {
    if ($dh = opendir($dir_source)) {
        while (($file = readdir($dh)) !== false) {
            if ($file!="." && $file!="..") {
                $file_path_s="$dir_source/$file";
                echo "打开加密文件[$dir_source/$file]<br />";
                $str_source=str_replace('eval($ooo000($ooo00o($o00o)))','$rest=$ooo000($ooo00o($o00o))',file_get_contents($file_path_s));
                file_put_contents("$dir_in/$file",$str_source);
                echo "写入过渡文件[$dir_in/$file]<br />";
                include "$dir_in/$file";
                file_put_contents("$dir_out/$file",'<?php'.$rest);
                echo "写入解密文件[$dir_out/$file]<br />";
            }
        }
        closedir($dh);
        echo '文件解密完成！<br />';
    }
}else{
    echo 'source目录不存在<br />';
}



