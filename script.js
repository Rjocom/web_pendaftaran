document.addEventListener('DOMContentLoaded', function () {
    const tahunLulusSelect = document.getElementById('tahunLulus');
    const fakultasSelect = document.getElementById('fakultas');
    const jurusanSelect = document.getElementById('jurusan');

    const jurusanOptions = {
        'Ilmu Komputer': ['Informatika'],
        'Teknik' : ['Arsitektur'],
        'Ekonomi': ['Manajemen', 'Akuntansi'],
        'Sastra': ['Sastra Inggris'],
        'Pertanian': ['Agribisnis']
    };

    const currentYear = new Date().getFullYear();
    for (let year = currentYear; year >= 1900; year--) {
        const option = document.createElement('option');
        option.value = year;
        option.textContent = year;
        tahunLulusSelect.appendChild(option);
    }

    fakultasSelect.addEventListener('change', function () {
        const selectedFakultas = this.value;
        jurusanSelect.innerHTML = '<option value="" disabled selected>-- Pilih Jurusan --</option>';

        if (selectedFakultas in jurusanOptions) {
            jurusanOptions[selectedFakultas].forEach(function (jurusan) {
                const option = document.createElement('option');
                option.value = jurusan;
                option.textContent = jurusan;
                jurusanSelect.appendChild(option);
            });
        }
    });
});
document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('header');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
});

