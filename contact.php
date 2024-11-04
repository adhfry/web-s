<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - RA. SHOFIA T.M.</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <?php include "./layouts/navbar.php"; ?>

    <main class="">
        <div id="consultancy-form">
            <p>Contact Me</p>
            <h2>Contact Form</h2>

            <div class="form-container">
                <!-- Bagian Formulir -->
                <div class="contact-form">
                    <input type="text" placeholder="Name*" id="name" required>
                    <input type="email" placeholder="Email Address*" id="email" required>
                    <input type="text" placeholder="Subject" id="subject" required>
                    <textarea rows="4" placeholder="Masukan" id="teks"></textarea>

                    <button class="submit-btn" onclick="showAlert()">Send Now</button>
                </div>
            </div>
        </div>

        <!-- Alert Modal -->
        <div id="customAlert" class="alert">
            <div class="alert-content">
                <p>Your request has been submitted successfully!</p>
                <button onclick="closeAlert()">OK</button>
            </div>
        </div>
    </main>

    <script>
        const name = document.getElementById('name');
        const email = document.getElementById('email');
        const subject = document.getElementById('subject');
        const teks = document.getElementById('teks');

        function showAlert() {
            if (name.value !== '' && email.value !== '' && subject.value !== '' && teks.value !== '') {
                document.getElementById('customAlert').classList.add('show');
            } else {
                alert('Input tidak boleh kosong');
            }
        }

        function closeAlert() {
            document.getElementById('customAlert').classList.remove('show');
        }
    </script>

    <?php include "./layouts/footer.php" ?>
</body>

</html>