<?php
//Variables from the Gateway.
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request.
    $response  = "CON Get information on \n";
    $response .= "1. Diabetes \n";
    $response .= "2. Hypertension \n";
    $response .= "3. Kidney issues  \n";
    $response .= "4. Heart issues \n";
    $response .= "5. Low blood pressue \n";
    $response .= "6. HIV \n";
    $response .= "7. General Covid-19 information - WHO \n";
    $response .= "8. More ";

} else if ($text == "1") {
    // Diabetes Options
    $response = "CON Diabetes \n";
    $response .= "1. Nutrition/Diet - by Certified Nutritionist or doctor \n";
    $response .= "2. Food available around you \n";
    $response .= "3. Pharmacies/clinics available around you";

} else if ($text == "2") {
    // Hypertension Options
    $response = "CON Hypertension \n";
    $response .= "1. Nutrition/diet \n";
    $response .= "2. Food available around you \n";
    $response .= "3.Pharmacies/clinics available near you";

} else if ($text == "3") {
    // Kidney Issues
    $response = "CON Kidney Issues \n";
    $response .= "1. Kidney Issues";

} else if($text == "4" OR $text == "5" OR $text == "5") {
  $response = "END We will send you the requested information via SMS";

}  else if ($text == "7") {
    // General Covid- 19 information Options
    $response = "CON General Covid- 19 information \n";
    $response .= "1. WHO Google information \n";
    $response .= "2. Call 719 to speak to Safaricom";

} else if ($text == "8") {
    // Hypertension
    $response = "CON Tell us your current health challenge so we reach out to your nearest health facility \n";

} else if($text == "1*1" OR $text == "2*1") {
  $response = "END Thank you, we will connect you to the nearest nutritionist for advice - powered by Eldaily and therootcauseke";

} else if($text == "1*2" OR $text == "2*2") {
  $response = "END  Thank you for reaching out , we are finding the nearest food suppliers for you - powered by Eldaily and therootcauseke.";

} else if($text == "1*3" OR $text == "2*3") {

  $response = "END We are finding a the nearest pharmacy/ clinic to you - powered by Eldaily and therootcauseke.";

} else if ( $text == "7*2" ) {

    // Call 719 to speak to Safaricom
    $response = "END Coming Soon";
} else if ( $text == "7*1" ) {
   
    // General Covid-19 information - WHO
    $response = "END We will send  a link to WHO and Ministry of health info on Covid-19 via SMS.";
}

// Send the response back to the api
header('Content-type: text/plain');
echo $response;
