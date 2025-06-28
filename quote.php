<?php include('includes/header.php'); 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection
$host = 'localhost';
$db = 'aone_db';    //aesokmlv_aone_db OR aone_db
$user = 'root'; //aesokmlv_aesolarltd OR root
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $conn->real_escape_string($_POST['first_name']);
    $last_name = $conn->real_escape_string($_POST['last_name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $contact_method = $_POST['contact_method'];
    $location = $conn->real_escape_string($_POST['location']);
    $property_type = $_POST['property_type'];
    $interests = isset($_POST['interests']) ? implode(", ", $_POST['interests']) : '';
    $bill = $_POST['electricity_bill'];
    $energy_source = $_POST['energy_source'];
    $power_estimate = $_POST['power_requirement'];
    $site_ready = $_POST['site_ready'];
    $roof_type = $_POST['roof_type'];
    $shade_level = $_POST['shade_level'];
    $timeline = $_POST['timeline'];
    $budget = $_POST['budget'];
    $notes = $conn->real_escape_string($_POST['notes']);

    // Handle file upload
$uploadDir = 'uploads/';
$uploadedFile = '';

if (isset($_FILES['attachment']) && $_FILES['attachment']['error'] == UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['attachment']['tmp_name'];
    $fileName = basename($_FILES['attachment']['name']);
    $safeFileName = time() . "_" . preg_replace("/[^a-zA-Z0-9\._-]/", "_", $fileName);
    $destination = $uploadDir . $safeFileName;

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    if (move_uploaded_file($fileTmpPath, $destination)) {
        $uploadedFile = $destination;
    } else {
        $uploadError = "File upload failed.";
    }
}

// Use $uploadedFile for the attachment in the SQL query
$attachment = $uploadedFile; // Ensure $attachment is defined here

    $sql = "INSERT INTO quote_requests 
        (first_name, last_name, email, phone, contact_method, location, property_type, interests,
         electricity_bill, energy_source, power_requirement, site_ready, roof_type, shade_level,
         timeline, budget, notes, attachment)
        VALUES (
        '$first_name', '$last_name', '$email', '$phone', '$contact_method', '$location',
        '$property_type', '$interests', '$bill', '$energy_source', '$power_estimate',
        '$site_ready', '$roof_type', '$shade_level', '$timeline', '$budget', '$notes', '$attachment')";

    if ($conn->query($sql) === TRUE) {
        $success = "Your quote request has been submitted successfully.";
    } else {
        $error = "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Request a Quote – A-ONE Electric & Solar Ltd.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="mb-4">Request a Quote</h2>

    <?php if (isset($success)): ?>
        <div class="alert alert-success"><?= $success ?></div>
    <?php elseif (isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
    <?php endif; ?>

    <form method="POST" action="" class="row g-3" enctype="multipart/form-data">
        <div class="col-md-6">
            <label class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Email Address</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label class="form-label">Preferred Contact Method</label>
            <select name="contact_method" class="form-select">
                <option>Email</option>
                <option>Phone</option>
                <option>WhatsApp</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Location (City/State)</label>
            <input type="text" name="location" class="form-control">
        </div>
        <div class="col-md-6">
            <label class="form-label">Property Type</label>
            <select name="property_type" class="form-select" required>
                <option value="">Select...</option>
                <option value="Residential">Residential</option>
                <option value="Commercial">Commercial</option>
                <option value="Industrial">Industrial</option>
                <option value="Agricultural">Agricultural</option>
                <option value="Institutional">Institutional</option>
                <option value="Government/Public">Government/Public</option>
                <option value="Mixed Use">Mixed Use</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Interested In</label>
            <select name="interests[]" class="form-select" required>
                <option value="">Select Service</option>
                <option value="Solar Power System">Solar Power System</option>
                <option value="Battery Storage System">Battery Storage System</option>
                <option value="Hybrid Power Systems">Hybrid Power Systems</option>
                <option value="Grid-Tied Solar System">Grid-Tied Solar System</option>
                <option value="Off-Grid Solar System">Off-Grid Solar System</option>
                <option value="Solar Inverter Installation">Solar Inverter Installation</option>
                <option value="Solar Water Heating">Solar Water Heating</option>
                <option value="Energy Efficiency Audit">Energy Efficiency Audit</option>
                <option value="Solar Pumping System">Solar Pumping System</option>
                <option value="EV Charging Station">EV Charging Station</option>
                <option value="Solar Lighting Solutions">Solar Lighting Solutions</option>
                <option value="Maintenance & Monitoring">Maintenance & Monitoring</option>
                <option value="System Design & Consultation">System Design & Consultation</option>
                <option value="Project Financing">Project Financing</option>
                <option value="Custom Renewable Solutions">Custom Renewable Solutions</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Monthly Electricity Bill</label>
            <select name="electricity_bill" class="form-select">
                <option>₦0 – ₦10,000</option>
                <option>₦10,000 – ₦50,000</option>
                <option>₦50,000 – ₦150,000</option>
                <option>₦150,000+</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Preferred Energy Source</label>
            <select name="energy_source" class="form-select">
                <option>Solar Only</option>
                <option>Solar + Battery</option>
                <option>Solar + Generator</option>
                <option>Grid-Tied (Net Metering)</option>
                <option>Not Sure</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Power Requirement</label>
            <select name="power_requirement" class="form-select">
                <option>1 – 5 kW</option>
                <option>5 – 10 kW</option>
                <option>10 – 50 kW</option>
                <option>50 kW+</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Is Site Ready?</label>
            <select name="site_ready" class="form-select">
                <option>Yes</option>
                <option>No</option>
                <option>Site Assessment Needed</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Roof Type</label>
            <select name="roof_type" class="form-select">
                <option>Metal</option>
                <option>Concrete</option>
                <option>Tile</option>
                <option>Ground Mount</option>
                <option>Not Sure</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Shade Level</label>
            <select name="shade_level" class="form-select">
                <option>Full Sun</option>
                <option>Partial Shade</option>
                <option>Heavily Shaded</option>
                <option>Not Sure</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Timeline</label>
            <select name="timeline" class="form-select">
                <option>Immediately</option>
                <option>Within 1 Month</option>
                <option>1–3 Months</option>
                <option>3–6 Months</option>
                <option>Just Researching</option>
            </select>
        </div>
        <div class="col-md-6">
            <label class="form-label">Budget</label>
            <select name="budget" class="form-select">
                <option><₦1,000,000</option>
                <option>₦1M – ₦5M</option>
                <option>₦5M – ₦10M</option>
                <option>₦10M – ₦20M</option>
                <option>₦20M+</option>
            </select>
        </div>
        <div class="col-12">
            <label class="form-label">Additional Notes</label>
            <textarea name="notes" class="form-control" rows="4"></textarea>
        </div>
        <div class="col-12">
            <label class="form-label">Attachment (Optional)</label>
            <input type="file" name="attachment" class="form-control">
        </div>      
        <div class="col-12 text-center mb-5">
            <button type="submit" class="btn btn-primary">Submit Quote Request</button>
        </div>
    </form>
</div>

</body>
</html>

<?php include('includes/footer.php'); ?>
