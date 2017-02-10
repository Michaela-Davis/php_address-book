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

    function getPersonName()
    {
        return $this->personName;
    }

    function setPersonName($new_personName)
    {
        $this->personName = (string) $new_personName;
    }


    function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    function setPhoneNumber($new_phoneNumber)
    {
        $this->phoneNumber = (string) $new_phoneNumber;
    }


    function getAddress()
    {
        return $this->address;
    }

    function setAddress($new_address)
    {
        $this->address = (string) $new_address;
    }


}
 ?>
