
<?php $__env->startSection('container'); ?>
<section class="rataKanan">
    <img src="img/bgRegister.png" alt="">
    <h2 class="ms-5 justify-content-center position-absolute start-0 top-50 text-white">Gabung Dewi Laundry<br>
        Maksimalkan Waktumu</h2>
    <div class="d-inline-flex flex-column justify-content-center">
        <div class="container-rataKanan position-absolute start-50 ms-5 p-0">
            <form class="border border-dark p-4 rounded-3">
                <!-- <h4 style="font-weight: 500;">Isi Form Untuk Cek Tarif Laundry</h1> -->
                <h2 class="fw-semibold text-center">Register</h2>
                <div class="mb-2">
                    <label for="nomorTelepon" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" id="nomorTelepon" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="namaLengkap" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="namaLengkap" aria-describedby="emailHelp">
                </div>
                <div class="mb-2">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock">
                </div>
                <div class="text-center">
                    <a type="submit" class="mt-4 btn btn-primary" href="/login">Register</a>
                </div>
            </form>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.mainPengunjung', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\rezaa\Documents\DEVELOPMENT\Dewi_Laundry\resources\views/layouts/pengunjung/register.blade.php ENDPATH**/ ?>