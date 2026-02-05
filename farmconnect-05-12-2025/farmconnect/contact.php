<?php include 'header.php'; ?>

<?php
$intro_title = 'Contact';
$intro_subtitle = 'Have a question? Send us a message and our team will reply soon.';
include 'intro.php';
?>

<?php
$success = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = strip_tags(trim($_POST['name'] ?? ''));
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    if (!$name || !$email || !$message) {
        $success = '<div class="alert alert-danger">Please fill in all fields with a valid email.</div>';
    } else {
        $to = 'info@farmconnect.local';
        $subject = "Contact from $name";
        $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
        $headers = "From: $name <$email>\r\nReply-To: $email";

        @mail($to, $subject, $body, $headers);

        $log = date('[Y-m-d H:i:s]') . " Contact from $name <$email>\n$message\n\n";
        file_put_contents(__DIR__ . '/messages.log', $log, FILE_APPEND);

        $success = '<div class="alert alert-success">Thank you! Your message has been received.</div>';
    }
}
?>

<main class="main-content">
    <div class="container">
        <section class="section">
            <div class="row align-items-center">
                <div class="col-12 col-md-10 col-lg-6 mx-auto">
                    <h2 class="section-title larger-title">Contact</h2>
                    <?php echo $success; ?>
                    <p class="text-muted">Have a question or want to partner with us? Send a message and we'll reply shortly.</p>

                    <form method="post" action="contact.php" class="mt-4 card p-3 card-modern">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input id="name" name="name" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input id="email" name="email" type="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" rows="6" class="form-control" required></textarea>
                        </div>
                        <button class="btn btn-success" type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>

<?php include 'footer.php'; ?>
