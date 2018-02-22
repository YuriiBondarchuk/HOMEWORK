<?php
//var_dump($_POST);
//$url =__URI;
if ($_POST){
    fileDownload ();
}
function fileDownload ()
{

    $dir_img = __DIR__.'/img/';
    $dir_other = __DIR__.'/doc/';

    $filename = md5($_FILES['file']['tmp_name']);
    $file_ext = strstr($_FILES['file']['name'],'.');
    $file = strstr(mime_content_type($_FILES['file']['tmp_name']),'/',1);


    if ($file=='image') {
        move_uploaded_file($_FILES['file']['tmp_name'],$dir_img.$filename.$file_ext);
    }
    else {
        move_uploaded_file($_FILES['file']['tmp_name'],$dir_other.$filename.$file_ext);

    }

header( 'Location: index.php', true, 303 ) ;
}

function outputFile ($filen ) {
    $dir_img = __DIR__.'/img/';
    $dir_other = __DIR__.'/doc/';

    if ($filen=='img'){
        $file_outp= array_chunk(imageSort($dir_img),3);

    }
    else {

        $file_outp = dirSort($dir_other);
    }

    return $file_outp;
}

function dirSort($dir){
    foreach (scandir($dir) as $value){
        if ($value!='.'&&$value!='..'){
            $dir_sort []= $value;
        }

    }
    return $dir_sort;
}

function imageSort ($dir){
    foreach (scandir($dir) as $value){
        if ($value!='.'&&$value!='..'){
            $img_sort []= $value;
        }

    }
    return $img_sort;
}