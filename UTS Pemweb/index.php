<?php
include "koneksi.php";
include "header.php";

$sql = "SELECT * FROM homepage";
$result = $conn->query($sql);
$homepage = null;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $homepage[] = $row;
    }
} else {
    echo "error";
}

$conn->close();

?>
<!--- Untuk Home Page -->
<section id="hero" class="hero section" style="margin-top: 200px; margin-bottom: 10px;">
    <div class="container">

        <div class="row align-items-center">
            <!-- Kolom Teks di Kiri -->
            <div class="col-lg-6">
                <div class="hero-content">
                    <?php foreach ($homepage as $h) : ?>
                        <h1 class="mb-4">
                            Hello, <br>
                            My Name is <span style="color: #6256CA;"><?= $h["name"]; ?></span><br>
                        </h1>

                        <p class="mb-4 mb-md-5">
                            <?= $h["description"]; ?>
                        </p>

                        <div class="hero-buttons">
                            <a href="about.php" class="btn me-0 me-sm-2 mx-1" style="background-color: #6256CA; color: white;">Read more ></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Kolom Gambar di Kanan -->
            <div class="col-lg-6">
                <div class="hero-image">
                    <!-- <img src="https://img.freepik.com/free-vector/cross-platform-frameworks-abstract-concept-illustration_335657-1825.jpg" alt="Hero Image" class="img-fluid" style="border-radius: 50px;"> -->
                    <img src="img/homepage-juan.jpg" alt="Hero Image" class="img-fluid" style="border-radius: 50px; margin-left: 150px;">
                </div>
            </div>
        </div>

    </div>
</section>

<?php
include "footer.php";
?>