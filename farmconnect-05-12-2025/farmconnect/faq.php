<?php include 'header.php'; ?>

<?php
$intro_title = 'FAQ';
$intro_subtitle = 'Common questions about FarmConnect, features, and how to get started.';
include 'intro.php';
?>

<main class="main-content">
    <div class="container">
        <section class="section bg-white p-4 rounded card-modern">
            <h2 class="section-title">Frequently Asked Questions</h2>

            <div class="accordion mt-3" id="faqAccordion">
                <?php $faqs = [
                    ['q'=>'What is FarmConnect?','a'=>'FarmConnect is a platform that provides weather, market prices, pest alerts, and buyer connections for farmers.'],
                    ['q'=>'How accurate are the weather forecasts?','a'=>'We use best-available meteorological data combined with local observations. Accuracy improves with more local inputs.'],
                    ['q'=>'Is FarmConnect free?','a'=>'We offer a free basic tier for farmers and paid services for advanced analytics and buyer tools.'],
                    ['q'=>'How can buyers use FarmConnect?','a'=>'Buyers can search the verified buyer directory, post requests, and connect directly with farmer groups.'],
                    ['q'=>'How do pest alerts work?','a'=>'Alerts are generated from field reports, remote sensing and partner extension services and pushed to affected areas.'],
                    ['q'=>'How do I request a demo?','a'=>'Visit the Request Demo page and submit your details; our team will contact you to schedule a walkthrough.'],
                ];
                $i=0; foreach($faqs as $f): $i++; ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?php echo $i ?>">
                        <button class="accordion-button <?php echo $i>1 ? 'collapsed' : '' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i ?>"><?php echo $f['q'] ?></button>
                    </h2>
                    <div id="collapse<?php echo $i ?>" class="accordion-collapse collapse <?php echo $i===1 ? 'show' : '' ?>" data-bs-parent="#faqAccordion">
                        <div class="accordion-body"><?php echo $f['a'] ?></div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
    </div>
</main>

<?php include 'footer.php'; ?>
