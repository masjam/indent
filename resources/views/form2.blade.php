<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Multi-Step dengan Validasi</title>
    <style>
        .tab {
            display: none;
        }
        .tab.active {
            display: block;
        }
        .error-message {
            color: red;
            font-size: 0.9em;
            display: none;
        }
        .error-input {
            border: 2px solid red;
        }
        label span {
            color: red;
        }
    </style>
</head>
<body>

<form id="multiStepForm">

    <!-- Step 1 -->
    <div class="tab active" id="step1">
        <h3>Data Pribadi</h3>

        <label for="nama">Nama Lengkap <span>*</span></label><br>
        <input type="text" id="nama" name="nama" required>
        <div class="error-message">Nama wajib diisi</div>
        <br><br>

        <label for="email">Email <span>*</span></label><br>
        <input type="email" id="email" name="email" required>
        <div class="error-message">Email wajib diisi</div>
        <br><br>

        <button type="button" class="next-btn">Selanjutnya</button>
    </div>

    <!-- Step 2 -->
    <div class="tab" id="step2">
        <h3>Data Alamat</h3>

        <label for="alamat">Alamat <span>*</span></label><br>
        <input type="text" id="alamat" name="alamat" required>
        <div class="error-message">Alamat wajib diisi</div>
        <br><br>

        <label for="kota">Kota <span>*</span></label><br>
        <input type="text" id="kota" name="kota" required>
        <div class="error-message">Kota wajib diisi</div>
        <br><br>

        <button type="button" class="prev-btn">Sebelumnya</button>
        <button type="button" class="next-btn">Selanjutnya</button>
    </div>

    <!-- Step 3 -->
    <div class="tab" id="step3">
        <h3>Konfirmasi</h3>
        <p>Pastikan semua data sudah benar.</p>

        <button type="button" class="prev-btn">Sebelumnya</button>
        <button type="submit">Kirim</button>
    </div>

</form>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".tab");
    let currentTab = 0;

    function showTab(index) {
        tabs.forEach((tab, i) => {
            tab.classList.toggle("active", i === index);
        });
        currentTab = index;
    }

    function validateCurrentTab() {
        let valid = true;
        const inputs = tabs[currentTab].querySelectorAll("input[required]");
        
        inputs.forEach(input => {
            const errorMessage = input.nextElementSibling;
            if (input.value.trim() === "") {
                input.classList.add("error-input");
                errorMessage.style.display = "block";
                valid = false;
            } else {
                input.classList.remove("error-input");
                errorMessage.style.display = "none";
            }
        });

        return valid;
    }

    document.querySelectorAll(".next-btn").forEach(btn => {
        btn.addEventListener("click", function () {
            if (validateCurrentTab()) {
                showTab(currentTab + 1);
            }
        });
    });

    document.querySelectorAll(".prev-btn").forEach(btn => {
        btn.addEventListener("click", function () {
            showTab(currentTab - 1);
        });
    });

    document.getElementById("multiStepForm").addEventListener("submit", function (e) {
        if (!validateCurrentTab()) {
            e.preventDefault();
        } else {
            alert("Form berhasil dikirim!");
        }
    });
});
</script>

</body>
</html>
