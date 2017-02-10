<?php
    date_default_timezone_set('America/Los_Angeles');
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    if (empty($_SESSION['list_of_contacts'])) {
        $_SESSION['list_of_contacts'] = array();
    }

    $app = new Silex\Application();

    $app['debug'] = true;


    $app->get("/", function() {

    $output = "";

    foreach (Contact::getAll() as $contact) {
        $output = $output . "<p>" . $contact->getPersonName() . "</p>";
    }

    $output = $output ."
        <form action='/contacts' method='post'>
            <label for='personName'>Name:</label>
            <input id='personName' name='personName' type='text'>

            <button type='submit'>Add contact</button>
        </form>
    ";

    return $output;
});
?>
