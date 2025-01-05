<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $platform = $_POST['platform'];
    $department = $_POST['department'];
    $reason = $_POST['reason'];
    $experience = $_POST['experience'];
    $rules = isset($_POST['rules']) ? 'Yes' : 'No';

    // Discord webhook URL
    $webhook_url = "your discord webhook.";

    $json_data = json_encode([
        "embeds" => [
            [
                "title" => "New Application Submission",
                "color" => 7506394,
                "fields" => [
                    [
                        "name" => "Name",
                        "value" => $name,
                        "inline" => true
                    ],
                    [
                        "name" => "Email",
                        "value" => $email,
                        "inline" => true
                    ],
                    [
                        "name" => "Date of Birth",
                        "value" => $dob,
                        "inline" => true
                    ],
                    [
                        "name" => "Platform",
                        "value" => $platform,
                        "inline" => true
                    ],
                    [
                        "name" => "Department",
                        "value" => $department,
                        "inline" => true
                    ],
                    [
                        "name" => "Reason for Joining",
                        "value" => $reason
                    ],
                    [
                        "name" => "Past Experience",
                        "value" => $experience
                    ],
                    [
                        "name" => "Understood Rules?",
                        "value" => $rules,
                        "inline" => true
                    ],
                ]
            ]
        ]
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

    // cURL to send the webhook
    $ch = curl_init($webhook_url);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-type: application/json']);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($ch);
    curl_close($ch);

    // Redirect to a thank you page or back to the form
    header('Location: thank_you.php');
}
?>
