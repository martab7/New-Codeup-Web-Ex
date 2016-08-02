<?php

// Controllers

//compiles all previous functions and combines them for their actions in controller-index


//takes built table for contacts file and APPENDS
function viewContacts($contacts)
{
    return formatContacts($contacts);
}

//takes in contacts and COMPILES ADD functions from user input functions USING Search function && if
//search matches existing, then DELETE name

function newContact(&$contacts,$name,$number)
{
    $matches = searchContact($contacts, $name);
    if (count($matches) > 0) {
        break;
    }
    addContact($contacts, $name, $number);
}

//compiles Search function while taking INPUT from search bar. Should Alert contact
function findContact($contacts)
{
    $name = inputName('Enter the name to search:');
    $matches = searchContact($contacts, $name);
    alert(formatContacts($matches));
}

?>
