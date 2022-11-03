<?php
// Most times we dont need to set headers manually. However, if you want to send back something that's not HTML, in our case XML, then we need to specify the header
header('Content-Type: text/xml');

// get food item typed in browser
// every XML document must have a root tag that wraps the entire XML document.
echo '<response>';

    $item = $_GET['item'];
    $itemArray = array('burger', 'pizza', 'milk', 'bread', 'coke');
    if(in_array($item, $itemArray)) {
        echo 'Nice, we do have a '.$item.'!';
    } elseif($item=='') {
        echo 'Enter something';
    } else {
        echo 'Sorry, we dont have a '.$item.' in stock'; 
    }
 
echo '</response>'; 

?>