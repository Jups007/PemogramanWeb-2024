<?php
include "koneksi.php";
include "header.php";

$sql = "SELECT * FROM experiences WHERE id = 1"; // Assuming you want the first entry
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "0 results";
}

$conn->close();

?>
<!-- Experiences Section -->
<section id="experiences" class="features section py-5">
    <!-- Section Title -->
    <div class="container text-center mb-5">
        <h1 style="font-weight: bold; color: #6256CA;">Experiences</h1>
        <p>My journey through organizational and academic experiences in Informatics.</p>
    </div>

    <div class="container">
        <div class="d-flex justify-content-center mb-4">
            <ul class="nav nav-tabs" id="experienceTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="org-tab" data-bs-toggle="tab" data-bs-target="#org" type="button" role="tab" aria-controls="org" aria-selected="true">
                        <h4><?= $row["name"]; ?></h4>
                    </button>
                </li>
            </ul>
        </div>

        <div class="tab-content" id="experienceTabContent">
            <!-- Organizational Experience Content -->
            <div class="tab-pane fade show active" id="org" role="tabpanel" aria-labelledby="org-tab">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center">
                        <!-- <img src="https://via.placeholder.com/400" alt="Organization Image" class="img-fluid rounded"> -->
                        <img src="img/experience-juan.jpg" alt="Informatics Image" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <h3><?= $row["name"]; ?></h3>
                        <p class="fst-italic">
                            <?= $row["description"]; ?>
                        </p>
                        <ul>

                            <?php
                            // Cek apakah ada pengalaman untuk ditampilkan
                            if (isset($row["points"])) {
                                $points = $row['points']; // Ambil deskripsi pengalaman dari database

                                // Pisahkan string berdasarkan titik koma
                                $items = explode(';', $points);

                                // Tampilkan dalam format daftar
                                foreach ($items as $item) {
                                    $trimmedItem = trim($item);
                                    if (!empty($trimmedItem)) {
                                        echo '<li><i class="bi bi-check2-all"></i> <span>' . htmlspecialchars($trimmedItem) . '</span></li>';
                                    }
                                }
                            } else {
                                echo '<li>No experience available.</li>'; // Pesan jika tidak ada pengalaman
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Informatics Student Content -->
            <div class="tab-pane fade" id="inf" role="tabpanel" aria-labelledby="inf-tab">
                <div class="row align-items-center">
                    <div class="col-lg-6 text-center">
                        <img src="https://via.placeholder.com/400" alt="Informatics Image" class="img-fluid rounded">
                    </div>
                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <h3>Informatics Student</h3>
                        <p class="fst-italic">
                            As an Informatics student, I am focused on building a solid foundation in programming, machine learning, and web development.
                        </p>
                        <ul>
                            <li>Built responsive web applications using PHP, JavaScript, and Python.</li>
                            <li>Studied concepts in machine learning, IoT, and data analysis.</li>
                            <li>Participated in collaborative projects, enhancing problem-solving skills.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include "footer.php";
?>