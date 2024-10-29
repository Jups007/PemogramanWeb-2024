<?php
include "header.php";
include "koneksi.php"; // Include the database connection file

$sql = "SELECT title, description, skills, img_path FROM about WHERE id = 1"; // Assuming you want the first entry
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "0 results";
}

$conn->close();
?>

<style>
    .title {
        font-weight: bold !important;
    }
</style>
<!-- About Section -->
<section id="about" class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="container">
        <div class="row align-items-center">
            <!-- Gambar Profil -->
            <div class="col-md-4 text-center mb-4 mb-md-0">
                <img src="<?php echo $row['img_path']; ?>" alt="Profile Image" class="img-fluid rounded-circle shadow">
            </div>

            <!-- Detail Informasi -->
            <div class="col-md-8 text-center text-md-start">
                <h1 class="display-4 mb-3 title" style="color: #6256CA;"><?php echo $row['title']; ?></h1>

                <p class="lead"><?php echo $row['description']; ?></p>

                <!-- Informasi Latar Belakang -->
                <div class="mt-4">
                    <h5>Background:</h5>
                    <p><i class="bi bi-geo-alt-fill me-2"></i> Based in Jakarta, Indonesia</p>
                    <p><span class="iconify me-2" data-icon="twemoji:graduation-cap" style="font-size: 1.5em;"></span> Student at Universitas Pembangunan Jaya, majoring in Informatics</p>
                    <p><span class="iconify me-2" data-icon="twemoji:office-building" style="font-size: 1.5em;"></span> <strong>University:</strong> Universitas Pembangunan Jaya</p>
                </div>

                <!-- Skill dan Lainnya -->
                <div class="mt-4">
                    <h5>Skills:</h5>
                    <ul class="list-unstyled">
                        <?php
                        $skills = explode(';', $row['skills']);
                        foreach ($skills as $skill) {
                            echo '<li><i class="bi bi-check-circle-fill me-2 text-primary"></i> ' . trim($skill) . '</li>';
                        }
                        ?>
                    </ul>
                </div>

                <!-- Tombol untuk Lebih Lanjut -->
                <div class="mt-4">
                    <a href="contact.php" class="btn me-2" style="background-color: #6256CA; color: white;">Contact Me</a>
                    <a href="portfolio.php" class="btn btn-outline-secondary">My Portfolio</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.iconify.design/2/2.0.3/iconify.min.js"></script>

<?php
include "footer.php";
?>