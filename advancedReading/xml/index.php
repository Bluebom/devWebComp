<?php
    $xml = simplexml_load_file('./arquivo.xml');
    // print_r($xml);
    echo $xml->info02->item->idade;
?>