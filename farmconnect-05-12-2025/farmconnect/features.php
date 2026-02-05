<?php include 'header.php'; ?>

<?php
$intro_title = 'Features';
$intro_subtitle = 'Explore the tools FarmConnect offers to support planting decisions, market access, and pest management.';
include 'intro.php';
?>

<main class="main-content">
    <div class="container">
        <section class="section">
            <h2 class="section-title">FarmConnect Features</h2>
            <p class="text-muted mb-4">Practical features designed for smallholder farmers and buyers.</p>

            <div class="row gy-4">
                <?php $features = [
                    ['title'=>'Localized Weather Forecasting','desc'=>'Hyperlocal forecasts tailored to barangay-level microclimates.','img'=>'forecasting.png','icon'=>'cloud-sun'],
                    ['title'=>'Climate Pattern Alerts','desc'=>'Seasonal predictions and alerts to reduce crop risk.','img'=>'climate.png','icon'=>'chart-area'],
                    ['title'=>'Market Price Index','desc'=>'Daily market price tracking for informed selling decisions.','img'=>'price.png','icon'=>'money-bill-wave'],
                    ['title'=>'Verified Buyer Directory','desc'=>'Connect with vetted buyers to cut intermediaries.','img'=>'directory.png','icon'=>'users'],
                    ['title'=>'Pest & Disease Notifications','desc'=>'Early warnings and recommendations for protection.','img'=>'pest.png','icon'=>'bug'],
                    ['title'=>'Direct Farm-to-Buyer Marketplace','desc'=>'Tools to match supply and demand directly.','img'=>'nigg.png','icon'=>'handshake'],
                ];
                foreach($features as $f): ?>
                <div class="col-md-4">
                    <div class="card card-modern feature-item">
                        <img src="assets/img/<?php echo $f['img'] ?>" alt="<?php echo $f['title'] ?>">
                        <div class="card-body">
                            <h5 class="card-title"><i class="fa fa-<?php echo $f['icon'] ?> me-2 text-success"></i><?php echo $f['title'] ?></h5>
                            <p class="card-text text-muted"><?php echo $f['desc'] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</main>

<?php include 'footer.php'; ?>
