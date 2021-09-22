<?php
$dir='terupload/'; //dir file
$data_perpage=12; //data perhalaman
$pg = isset ($_GET['page']) && $_GET['page'] ? $_GET['page'] : 1;
if($pg<2){
    $start=0;
} else{
    $start = ($pg-1)*$data_perpage;
}
$open=opendir($dir) or die('Folder tidak terdeteksi!');
while ($file=readdir($open)) {
    if($file !='.' && $file !='..'){   
        $files[]=$file;
    }
}
$jumlah_file=count($files); //menghitung jumlah file
$jumlah_page = ceil($jumlah_file / $data_perpage); /
echo 'Jumlah file : '.$jumlah_file.' | Jumlah page : '.$jumlah_page.'<hr/><div>&nbsp;</div>';
for($x=$start;$x<($start+$data_perpage);$x++){
    if($x<$jumlah_file){
        print '&raquo; <a href="'.$dir.$files[$x].'">'.ucwords($files[$x]).'</a><br/>';
    }
}
if($jumlah_file>$data_perpage){
    echo '<div>&nbsp;</div>';
if($pg>1){
    echo '<a href="?page='.($pg-1).'">&laquo; Prev</a>';
}
if($pg<$jumlah_page){
    echo ' | <a href="?page='.($pg+1).'">Next &raquo;</a>';
}
}
?>
