<?php
    $prices = array("perfume"=>"550", "tv"=>"5095", "spices"=>"35");
    foreach ($prices as $key => $value){
        echo 'key = '.$key.', value = '.$value.";\n";
    }
    while($element = current($prices)){
        echo key($prices);
        echo " : ";
        echo current($prices);
        echo "\n";
        next($prices);
    }

    $file = fopen("C:\FireComingOutOfTheMonkey'sHead.txt", "r");
    while (!feof($file)){
        $readByChar = fgetc($file);
        if (!feof($file)){
            echo (($readByChar == "\n") ? "<br />" : $readByChar);
        }
    }
    fclose($file);

    $file = fopen("C:\FireComingOutOfTheMonkey'sHead.txt", "r");
    flock($file, LOCK_SH);
        //read from file
    flock($file, LOCK_UN);
    fclose($file);

    $dumpArray = array(5, 7, 3, 0, 6, 1, 3, 9);
    if (is_array($dumpArray)){
        $length = sizeof($dumpArray);
        $str = "";
        if ($length){
            $count = 0;
            $str = "{";
            foreach ($dumpArray as $value){
                $str.= $value * 2;
                if ($count++ < $length - 1){
                    $str.= ", ";
                }
            }
            $str.= "}";
        } echo $str;
    }
    else{
        echo $dumpArray;
    }

  $documentRoot = $HTTP_SERVER_VARS[DOCUMENT_ROOT];
  addslashes("Mc'Donalds");

    $portConnect = fsockopen('localhost', errorno, $errorstr);
    if (!$portConnect){
        $errorno = 1;
        echo "Error: $errorno : $errorstr";
    }

    $feedback = "Everybody's Dancing The Dance Of The";
    $tok = strtok($feedback, " ");
    echo $tok;
    while($tok != " "){
        $tok = strtok(" ");
        echo $tok;
    }

    print_r(get_loaded_extensions());
    $loadedExtension = get_loaded_extensions();
    foreach ($loadedExtension as $loaded){
        print_r($loaded);
        $extensionFunction = get_extension_funcs($loaded);
        foreach ($extensionFunction as $extend){
            print_r($extend);
        }
    }

    $myObject = new stdClass();
    $serialObject = serialize($myObject);
    $newObject = unserialize($serialObject);

    $vote = $_REQUEST['vote'];
    $fileName = "votes.txt";
    $fileContent = file($fileName);
    $contentArray = explode('||', $fileContent[0]);
    $yes = $contentArray[0];
    $no = $contentArray[1];
    if ($vote == 0) $yes += 1;
    if ($vote == 1) $no += 1;
    $insertVotes = $yes." || ".$no;
    $file = fopen($fileName, 'w');
    fputs($file, $insertVotes);
    fclose($file);

    $y =
    $q = $_GET['q'];
    $xmlDoc = new DOMDocument();
    $x = $xmlDoc -> load("album.xml");
    for ($i = 0; $i < $x -> length - 1; $i++){
        if ($x -> item($i) -> nodeType == 1){
            if ($x -> item($i) -> childNodes -> item(0) -> nodeValue == $q){
                $y = $x -> item($i) -> parentNode;
            }
        }
    }
    $allChild = $y -> childNodes;
    for ($i = 0; $i < $allChild -> length - 1; $i++){
        if ($allChild -> item($i) -> nodeType == 1){
            echo $allChild -> item($i) -> nodeName." <br />";
            echo $allChild -> item($i) -> childNodes -> item(0) -> nodeValue." <br />";
        }
    }




