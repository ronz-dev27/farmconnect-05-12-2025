<?php include 'header.php'; ?>

<?php
$intro_title = 'Request Demo';
$intro_subtitle = 'Request a personalized walkthrough of FarmConnect for your organization.';
include 'intro.php';
?>

<?php
$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = strip_tags(trim($_POST['name'] ?? ''));
    $org = strip_tags(trim($_POST['organization'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $phone = strip_tags(trim($_POST['phone'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (!$name || !$email) {
        $success = '<div class="alert alert-danger">Name and a valid email are required.</div>';
    } else {
        $to = 'demos@farmconnect.local';
        $subject = "Demo request from $name";
        $body = "Name: $name\nOrganization: $org\nPhone: $phone\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $name <$email>\r\nReply-To: $email";

        @mail($to, $subject, $body, $headers);

        $log = date('[Y-m-d H:i:s]') . " Demo request from $name <$email> ($org / $phone)\n$message\n\n";
        file_put_contents(__DIR__ . '/demos.log', $log, FILE_APPEND);

        $success = '<div class="alert alert-success">Thank you! We will contact you to schedule a demo.</div>';
    }
}
?>

<main class="main-content">
    <div class="container">
        <section class="section">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="section-title">Request Demo</h2>
                    <?php echo $success; ?>
                    <p class="text-muted">Fill out the form and our team will reach out to schedule a personalized walkthrough.</p>

                    <form method="post" action="request_demo.php" class="mt-4 card p-3 card-modern">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Name</label>
                                <input name="name" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Organization</label>
                                <input name="organization" class="form-control">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input name="email" type="email" class="form-control" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone</label>
                                <input name="phone" class="form-control">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Message</label>
                            <textarea name="message" rows="5" class="form-control"></textarea>
                        </div>
                        <button class="btn btn-success" type="submit">Request Demo</button>
                    </form>
                </div>

                <div class="col-lg-6 d-none d-lg-block">
                    <img src="assets/img/hero-illustration.svg" alt="Request demo illustration" class="img-fluid rounded shadow-sm">
                </div>
            </div>
        </section>
    </div>
</main>

<?php include 'footer.php'; ?>
