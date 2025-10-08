<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi Password dan AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi Password dan AJAX</h1>
    <form id="myFormPassword" method="post" action="proses_validasi.php">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>
    
    <div id="hasil_ajax"></div>

    <script>
    $(document).ready(function() {
        $("#myFormPassword").submit(function(event) {
            var nama = $("#nama").val();
            var email = $("#email").val();
            var password = $("#password").val();
            var valid = true;

            // Validasi Nama
            if (nama === "") {
                $("#nama-error").text("Nama harus diisi.");
                valid = false;
            } else {
                $("#nama-error").text("");
            }

            // Validasi Email
            if (email === "") {
                $("#email-error").text("Email harus diisi.");
                valid = false;
            } else {
                $("#email-error").text("");
            }
            
            // Validasi Password (JQuery: minimal 8 karakter)
            if (password.length < 8) {
                $("#password-error").text("Password minimal 8 karakter.");
                valid = false;
            } else {
                $("#password-error").text("");
            }

            if (!valid) {
                event.preventDefault();
            } else {
                event.preventDefault(); 
                
                // Kirim data menggunakan AJAX
                var formData = $("#myFormPassword").serialize();
                $.ajax({
                    url: "proses_validasi.php", 
                    type: "POST",
                    data: formData,
                    success: function(response) {
                        $("#hasil_ajax").html(response);
                    }
                });
            }
        });
    });
    </script>
</body>
</html>