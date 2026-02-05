<?php
// sidebar.php - fixed left navigation
?>
<?php
// sidebar.php - renders a desktop horizontal nav and a mobile slide-out aside
$current = basename($_SERVER['PHP_SELF']);
$items = [
    'index.php' => 'Home',
    'about.php' => 'About',
    'features.php' => 'Features',
    'benefits.php' => 'Benefits',
    'faq.php' => 'FAQ',
    'contact.php' => 'Contact',
];
?>
<!-- Desktop horizontal nav (inside header) -->
<nav class="top-nav d-none d-lg-flex align-items-center" aria-label="Main navigation">
    <?php foreach ($items as $href => $label):
        $active = ($current === $href) ? 'active' : '';
        $isBtn = ($label === 'Request Demo');
    ?>
        <a class="nav-link <?php echo $active ?> <?php echo $isBtn ? 'btn btn-success text-white ms-3' : 'ms-3 text-nowrap' ?>" href="<?php echo $href ?>"><?php echo $label ?></a>
    <?php endforeach; ?>
    <!-- CTA button on the right -->
    <a href="request_demo.php" class="nav-link btn btn-success text-white ms-4">REQUEST DEMO</a>
</nav>

<!-- Mobile slide-out aside (hidden on desktop) -->
<aside class="sidebar d-lg-none bg-white shadow-sm" id="mobileSidebar" aria-label="Mobile navigation">
    <nav class="nav flex-column p-3">
        <?php foreach ($items as $href => $label):
            $active = ($current === $href) ? 'active' : '';
            $isBtn = ($label === 'Request Demo');
        ?>
            <a class="nav-link <?php echo $active ?> <?php echo $isBtn ? 'btn btn-success text-white mt-3' : 'mt-2' ?>" href="<?php echo $href ?>"><?php echo $label ?></a>
        <?php endforeach; ?>
        <div class="mt-3">
            <a href="request_demo.php" class="btn btn-success w-100">Request Demo</a>
        </div>
    </nav>
</aside>


