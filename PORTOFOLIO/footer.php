<?php
include "connector.php";
$sql = "SELECT * FROM footer_info WHERE id = 1"; // Sesuaikan dengan ID atau kondisi yang sesuai
$result = $conn->query($sql);

// Ambil data dari hasil query
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $about_me = $row['about_me'];
    $github_url = $row['github_url'];
    $youtube_url = $row['youtube_url'];
    $instagram_url = $row['instagram_url'];
    $contact_text = $row['contact_text'];
    $copyright_text = $row['copyright_text'];
} else {
    echo "Data tidak ditemukan.";
}
$conn->close();
?>

<footer>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-pb-sm">
                    <div class="row">
                        <div class="col-md-10">
                            <h2>About Me</h2>
                            <p><?php echo htmlspecialchars($about_me); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-pb-sm">
                    <h2>Social Media</h2>
                    <p class="colorlib-social-icons">
                        <a href="<?php echo htmlspecialchars($github_url); ?>" target="_blank"><i class="icon-github"></i></a>
                        <a href="<?php echo htmlspecialchars($youtube_url); ?>" target="_blank"><i class="icon-youtube"></i></a>
                        <a href="<?php echo htmlspecialchars($instagram_url); ?>" target="_blank"><i class="icon-instagram"></i></a>
                    </p>
                </div>
                <div class="col-md-4 col-pb-sm">
                    <h2>Contact Me</h2>
                    <p><?php echo htmlspecialchars($contact_text); ?></p>
                    <div class="text-center">
                        <div class="form-group">
                            <a href="contact.php" class="btn btn-primary btn-custom">Go to Contact Page</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p><?php echo $copyright_text; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
