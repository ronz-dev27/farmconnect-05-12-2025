<?php
// footer.php - included at bottom of every page
?>
    <!-- Spacer to guarantee separation between content and prefooter -->
    <div class="prefooter-spacer" aria-hidden="true"></div>

    <!-- Pre-footer banner (background moved to CSS) -->
    <section class="prefooter text-white text-center py-5">
        <div class="prefooter-inner">
            <div class="container position-relative">
                <h3 class="fw-bold">Make Your Farming Easier with FarmConnect</h3>
                <p class="mb-3">It’s all about helping farmers make clearer, smarter, and more profitable decisions.</p>
                <a href="request_demo.php" class="btn btn-warning text-white">REQUEST DEMO</a>
            </div>
        </div>
    </section>

    <footer class="site-footer mt-auto">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-4">
                    <!-- Links arranged in two rows of four columns each -->
                    <div class="footer-links-grid">
                        <div class="row mb-2">
                            <div class="col-3"><a href="index.php">Home</a></div>
                            <div class="col-3"><a href="about.php">About</a></div>
                            <div class="col-3"><a href="features.php">Features</a></div>
                            <div class="col-3"><a href="benefits.php">Benefits</a></div>
                        </div>
                        <div class="row">
                            <div class="col-3"><a href="#">Free Demo</a></div>
                            <div class="col-3"><a href="faq.php">FAQ</a></div>
                            <div class="col-3"><a href="contact.php">Contact</a></div>
                            <div class="col-3"><a href="request_demo.php">Request Demo</a></div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 text-center">
                    <a href="https://www.facebook.com/karl.narvaez.17" class="text-muted me-3"><i class="fab fa-facebook fa-2x"></i></a>
                </div>

                <div class="col-md-4 text-md-end mt-3 mt-md-0">
                    <div class="text-muted">FarmConnect | All Rights Reserved <?php echo date('Y'); ?></div>
                    <div class="text-muted small">Powered by: FarmConnect Development Team</div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
