<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $services = isset($_POST["services"]) ? $_POST["services"] : "No";
    $district = $_POST["district"];
    $tel = $_POST["tel"];
    $gender = $_POST["gender"];
    $how_find = $_POST["how_find"];
    $suggestions = $_POST["suggestions"];
    $comments = $_POST["comments"];

    $to = "atwongerevianney311@gmail.com";
    $subject = "Form Submission";
    $body = "Name: $name\nEmail: $email\nServices Liked: $services\nDistrict: $district\nTel. No: $tel\nGender: $gender\nHow Found: $how_find\nSuggestions: $suggestions\nComments: $comments";

    // Send email
    mail($to, $subject, $body);

    // Redirect back to the form or to a thank you page
    header("Location: thank-you.html");
    exit;
}
?>
