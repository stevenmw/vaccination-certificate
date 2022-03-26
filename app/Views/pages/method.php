<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>

<div class="container-fluid">

    <!-- Page Heading -->
    <h2 class="text-primary text-center">Bagaimana Olivak bekerja?</h2>

    <div style="width: 50%; float:left;">
        <iframe width=" 90%" height="315" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" id="widget2" allowfullscreen></iframe>
    </div>

    <div style="flex-grow: 1;">
        <figure class="text-justify">
            <h7>
                <p>Pada saat pengguna mengunduh Olivac, sistem akan meminta persetujuan Anda untuk login jika sudah memiliki akun sebelumnya. Namun, jika anda belum memiliki akun, pengguna diminta untuk melakukan registrasi dengan email, username, dan password. Dengan data ini, pemerintah bisa melakukan verifikasi keberhasilan vaksinasi dan tracing zona covid-19 di wilayah tertentu.</p>

                <p>Hasil tracing ini akan memudahkan pemerintah untuk mengidentifikasi siapa saja yang perlu mendapat penanganan lebih lanjut agar penghentian penyebaran COVID-19 dapat dilakukan. Sehingga, semakin banyak partisipasi masyarakat yang menggunakan aplikasi ini, akan semakin membantu pemerintah dalam melakukan tracing dan tracking.</p>

                <p>Olivac sangat memperhatikan kerahasiaan pribadi Anda. Data Anda disimpan aman dalam format terenkripsi dan tidak akan dibagikan kepada orang lain. Data Anda hanya akan diakses bila Anda dalam risiko tertular COVID-19 dan perlu segera dihubungi oleh petugas kesehatan.</p>
            </h7>
        </figure>
    </div>


</div>
<?= $this->endSection(); ?>