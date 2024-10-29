<?php
include "header.php";
include "koneksi.php";
$sql = "SELECT title, description, img_path FROM projects";
$result = $conn->query($sql);

$projects = [];

if ($result->num_rows > 0) {
    // Ambil data dari setiap baris
    while ($row = $result->fetch_assoc()) {
        $projects[] = $row;
    }
} else {
    echo "0 results";
}

$conn->close(); // Tutup koneksi setelah selesai
?>

<html>

<head>
    <title>
        Collaboration
    </title>
    <link crossorigin="anonymous" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .collaboration-title {
            color: #6a4bc3;
            font-size: 3rem;
            font-weight: bold;
            margin: 20px 0;
        }

        .card-title {
            font-weight: bold;
        }

        .btn-collaborate {
            background-color: #6a4bc3;
            color: white;
        }

        /* Add these styles to limit the height */
        .card {
            max-height: 550px;
            /* Adjust the height as needed */
            overflow: hidden;
            /* Ensures content stays within the card */
        }

        .card-img-top {
            height: 200px;
            /* Adjust image height */
            object-fit: cover;
            /* Crop the image to fit the container */
        }

        .card-body {
            display: flex;
            flex-direction: column;
            height: 500px;
            /* Menggunakan tinggi penuh dari card */
            /* justify-content: space-between; */
            /* Membuat ruang antara elemen */
        }
    </style>
</head>

<body>
    <div class="container" style="margin-top: -200px;">
        <h1 class="collaboration-title">
            Collaboration
        </h1>
        <div class="row">
            <?php foreach ($projects as $project): ?>
                <div class="col-md-4">
                    <div class="card">
                        <img alt="Person speaking at a tech conference" class="card-img-top" height="400" src="<?= htmlspecialchars($project['img_path']) ?>" width="600" />
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= htmlspecialchars($project['title']) ?>
                            </h5>
                            <p class="card-text">
                                <?= htmlspecialchars($project['description']) ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>

<?php
include "footer.php";
?>