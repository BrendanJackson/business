<?php

// Alternatively 
use My_company\Person;
use My_company\Staff;
use My_company\Business;


$Brendan = new My_company\Person("Brendan Jackson!");
// Shouldn't we type hint Person here?
$Staff = new My_company\Staff([$Brendan]); 

$Brendans_company = new My_company\Business($Staff);
$Brendans_company->hire(new My_company\Person("Buddy"));
var_dump($Brendans_company->get_staff_members());

