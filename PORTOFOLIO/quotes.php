<?php
include "connector.php";
$sql = "SELECT quote_text, quote_author FROM quotes";
$result = $conn->query($sql);

// Array untuk menyimpan data kutipan
$quotes = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $quotes[] = $row;
    }
}
$conn->close();
?>

<div id="colorlib-testimony">
    <div class="container">
        <div class="row text-center">
            <h2 class="bold">Quotes</h2>
        </div>
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-center animate-box intro-heading">
                <span>Quotes</span>
                <h2>The Quote</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="rotate">
                    <h2 class="heading">Somebody</h2>
                </div>
            </div>
        </div>
        <div class="row animate-box">
            <div class="owl-carousel">
                <?php foreach ($quotes as $quote) : ?>
                    <div class="item">
                        <div class="col-md-12 text-center">
                            <div class="testimony">
                                <blockquote>
                                    <p><?php echo htmlspecialchars($quote['quote_text']); ?></p>
                                    <span> &mdash; <?php echo htmlspecialchars($quote['quote_author']); ?></span>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>