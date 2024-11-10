<?php
// Set the upload directory
$uploadDir = './documents/';

// Ensure the upload directory exists
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $patientName = $_POST['patient_name'];
    $bloodGroup = $_POST['blood_group'];
    $aadhar = $_POST['aadhar'];
    $address = $_POST['address'];
    $requestType = $_POST['request_type'];
    $phone = $_POST['phone'];
    $hospital = $_POST['hospital'];

    // Handle the medical details document upload
    $medicalDetails = $_FILES['medical_details'];
    $medicalDetailsPath = $uploadDir . basename($medicalDetails['name']);
    
    // Check if the file is uploaded and move it to the documents folder
    if ($medicalDetails['size'] > 0 && $medicalDetails['size'] <= 200 * 1024) { // Check size again for safety
        if (move_uploaded_file($medicalDetails['tmp_name'], $medicalDetailsPath)) {
            // Save the data to blood_request.txt
            $data = "Name: $name\nPatient Name: $patientName\nBlood Group Needed: $bloodGroup\nAadhar: $aadhar\n";
            $data .= "Address: $address\nRequest Type: $requestType\nPhone: $phone\nHospital: $hospital\n";
            $data .= "Medical Details Path: $medicalDetailsPath\n\n";
            $data .= "-----------------------------\n";

            file_put_contents('blood_request.txt', $data, FILE_APPEND | LOCK_EX);
            echo "Your request has been submitted successfully!";
        } else {
            echo "Error: Failed to upload the medical document.";
        }
    } else {
        echo "Error: Medical document must be less than 200KB.";
    }
} else {
    echo "Error: Invalid form submission.";
}
?>
