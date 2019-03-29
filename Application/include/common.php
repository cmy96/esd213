<?php

// this will autoload the class that we need in our code
spl_autoload_register(function($class) {
 
    // we are assuming that it is in the same directory as common.php
    // otherwise we have to do
    // $path = 'path/to/' . $class . ".php"    
    require_once "services/$class.php"; 
  
});


// session related stuff

session_start();
// ini_set('display_errors', 1);

// include "configuration.php";


// error_reporting(E_ALL ^ E_NOTICE);

function printErrors() {
    if(isset($_SESSION['errors'])){
        echo "<ul style='color:red;'>";
        
        foreach ($_SESSION['errors'] as $value) {
            echo "<li>" . $value . "</li>";
        }
        
        echo "</ul>";   
        unset($_SESSION['errors']);
    }    
}


// function isMissingOrEmpty($name) {
//     $value = $_REQUEST[$name];
//     if (!isset($value) || (empty($value) && $value !== "0")) {
//         return "$name cannot be empty";
//     }
// }


// function isNonNegativeInt($var) {
//     if (is_numeric($var) && $var >= 0 && $var == round($var) && !is_float($var + 0))
//         return TRUE;
// }

// function isNonNegativeFloat($var) {
//     if (is_numeric($var) && $var >= 0)
//         return TRUE;
// }

// function checkError($book, $checklist) {
//     $errors = array();
//     foreach ($checklist as $item) {
//         switch ($item) {
//             case "emptypriceandtitleandavailability":
//                 if (empty($book->title) && empty($book->price) && empty($book->availability)){
//                     $errors[] = "title cannot be empty";
//                     $errors[] = 'price cannot be empty';
//                     $errors[] = "availability cannot be empty";
//                 break;}
//             case "emptyisbn13":
//                 if (empty($book->isbn13))
//                     $errors[] = "isbn13 cannot be empty";
//                 break;
//             case "emptytitle":
//                 if (empty($book->title))
//                     $errors[] = "title cannot be empty";
//                 break;
//             case "emptyprice":
//                 if (empty($book->price))
//                     $errors[] = "price cannot be empty";
//                 break;
//             case "duplicateisbn13":
//                 $dao = new BookDAO();
//                 if($dao->retrieve($book->isbn13)!==[])
//                     $errors[] = "duplicate ISBN13 record";
//                 break;
//             case "title":
//                 if (strlen($book->title) > 100 || empty($book->title))
//                     $errors[] = "invalid title";
//                 break;
//             case "isbn13record":  
//                 $dao = new BookDAO();  
//                 if (!$dao->retrieve($book->isbn13))
//                     $errors[] = "ISBN13 record not found";
//                 break;
//             case "isbn13":
//                 if (strlen($book->isbn13) != 13 || !isNonNegativeInt($book->isbn13))
//                     $errors[] = "invalid ISBN13 value";
//                 break;
//             case "price":
//                 if (!isNonNegativeFloat($book->price))
//                     $errors[] = "invalid price";
//                 break;
//             case "emptyavailability":
//                 if (empty($book->availability) && $book->availability !== 0)
//                     $errors[] = "availability cannot be empty";
//                 break;
//             case "availability":
//                 if (!isNonNegativeInt($book->availability))
//                     $errors[] = "invalid availability";
//                 break;
//         }
//     }
//     return $errors;
// }



// function isEmpty($var) {
//     if (isset($var))
//     foreach ($var as $key => $value) {
//     if (empty($value)) {
//        unset($var[$key]);
//     }
//     }

//     if (empty($var))
//         return TRUE;
// }