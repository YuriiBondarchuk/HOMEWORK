<?php
function actionList ()
{
        $storage = config ('storagePath');
    $files = array_filter(scandir(config('storagePath')), function ($item){
        return !in_array($item,['.','..','.gitignore']);
    });
    $messages = [];
    foreach ($files as $file){
        $data = unserialize(file_get_contents("{$storage}/{$file}"));
        $messages [] = array_merge(['id'=>$file],$data);
    }
    $mes_time = [];
    foreach ($messages as $key=>$value){
        $mes_time[$key]=$value['time'];
    }

    array_multisort($mes_time,SORT_DESC,$messages);


 render ('/messages/list', ['messages'=>$messages]);

}
function actionCreate (){

    $path = config('storagePath');
    $file = $path.'/'.getUniqueFileName($path,'txt');


    $messageString = serialize($_POST);
    file_put_contents($file, $messageString);


    redirect(   toUrl('/messages/list'));

}

function actionEditing(){
    $storage = config ('storagePath');
    $files = array_filter(scandir(config('storagePath')), function ($item){
        return !in_array($item,['.','..','.gitignore']);
    });
    $messages = [];
    foreach ($files as $file){
        $data = unserialize(file_get_contents("{$storage}/{$file}"));
        $messages [] = array_merge(['id'=>$file],$data);
    }

    render ('/messages/editing', ['messages'=>$messages]);
}
function actionDelete(){

    $storage = config ('storagePath');
    $name=array_keys($_POST);


     foreach ($name as $namedel){
         $file_del=substr($namedel,0,-4);
       //var_dump($file_del); exit;
         unlink($storage.'/'.$file_del.'.txt');
     }


    actionList();
}
function actionEdit()
{

    $storage = config('storagePath');

    foreach ($_POST as $key=> $file ){
        $files [] = substr($key,0,-4).'.txt';
    }


    $messages = [];
    foreach ($files as $file) {
        $data = unserialize(file_get_contents("{$storage}/{$file}"));
        $messages [] = array_merge(['id' => $file], $data);
    }

    render('/messages/edit', ['messages' => $messages]);
}
function actionEdit_new()
{
    $data = $_POST;


    $file = [];
    foreach ($data as $key => $value) {
        if (substr($key, -1) != 'a'&&$key!='date'&&$key!='time') {
            $file [substr($key, 0, -4) . '.txt']['author'] = $value;
            $file [substr($key, 0, -4) . '.txt']['time'] = $data['time'];
            $file [substr($key, 0, -4) . '.txt']['date'] = $data['date'];
        }

         elseif (substr($key, -1) == 'a'&&$key!='date'&&$key!='time'){
            $file [substr($key, 0, -5) . '.txt']['message'] = $value;

        }

    }
    $path = config('storagePath');

    foreach ($file as $key => $value){
        $files = $path.'/'.$key ;
        $messageString = serialize($value);
        file_put_contents($files, $messageString);
    }





    redirect(   toUrl('/messages/list'));


}