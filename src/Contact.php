<?php
class Contact
{
    private $personName;
    private $phoneNumber;
    private $address;



    function __construct($personName, $phoneNumber, $address)
    {
        $this->personName = $personName;
        $this->phoneNumber = $phoneNumber;
        $this->address = $address;
    }

    // personName Getter and Setter
    function getPersonName()
    {
        return $this->personName;
    }

    function setPersonName($new_personName)
    {
        $this->personName = (string) $new_personName;
    }

    // phoneNumber Getter and Setter
    function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    function setPhoneNumber($new_phoneNumber)
    {
        $this->phoneNumber = (string) $new_phoneNumber;
    }

    // address Getter and Setter
    function getAddress()
    {
        return $this->address;
    }

    function setAddress($new_address)
    {
        $this->address = (string) $new_address;
    }


    // METHODS
    function save()
    {
        array_push($_SESSION['list_of_contacts'], $this);
    }

    static function getAll()
    {
        return $_SESSION['list_of_contacts'];
    }

    static function deleteAll()
    {
        $_SESSION['list_of_tasks'] = array();
    }

}
 ?>
