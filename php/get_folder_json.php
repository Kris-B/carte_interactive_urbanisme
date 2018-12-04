<?php
header('Content-Type: application/json');

$dir          = "./villa_moliere"; //path
$dir = $_GET['project'];

$list = array(); //main array
// echo "ok";
//exit;

if(is_dir($dir)){
  $files = scandir($dir);
  // rsort($files);
  foreach ($files as $file) {
    $info = pathinfo($file);
    if ($file == "." or $file == ".." or $info["extension"] == "php" ) {
      // ...
    }
    else {
      $list3 = array(
      'file' => $file,
      'is_dir' => is_dir( $file ) );
      // 'size' => filesize($file));
      array_push($list, $list3);
    }
  }


    // if($dh = opendir($dir)){
        // while(($file = readdir($dh)) != false){
            // $info = pathinfo($file);
        
            // if( $file == "." or $file == ".." or $info["extension"] == "php" ){
                // ...
            // } else { //create object with two fields
            
            
                // $list3 = array(
                // 'file' => $file,
                // 'is_dir' => is_dir( $file ) );
                // 'size' => filesize($file));
                // array_push($list, $list3);
            // }
        // }
    // }

    $return_array = array('files'=> $list);

    echo json_encode($return_array);

}

?>