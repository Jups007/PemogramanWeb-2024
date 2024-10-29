<?php
include "koneksi.php";
include "header.php";
?>

<style>
    .contact-form .input-group {
        margin-bottom: 15px;
    }

    .contact-form .input-group-text {
        background-color: #6256CA;
        color: white;
    }

    .contact-form .form-control {
        border: 2px solid #6256CA;
        transition: border-color 0.3s;
    }

    .contact-form .form-control:focus {
        border-color: #4a47e0;
        box-shadow: 0 0 5px rgba(100, 86, 202, 0.5);
    }
</style>

<!-- Contact Section -->
<section id="contact" class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h1 style="font-weight: bold; color: #6256CA;">Contact Me</h1>
            <p>If you have any questions or would like to work together, feel free to reach out!</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <?php if (isset($_GET["isSuccess"])) : ?>
                    <div class="alert alert-success" role="alert">
                        Data <strong>berhasil</strong> dikirim!
                    </div>
                <?php endif; ?>
                <form action="form.php" method="post" class="contact-form">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                            <input type="email" class="form-control" id="email" name="email" placeholder="your.email@example.com" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-tag"></i></span>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject of your message" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="Write your message here..." required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn p-2" style="background-color: #6256CA; color: white; transition: background-color 0.3s;">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
include "footer.php";
?>