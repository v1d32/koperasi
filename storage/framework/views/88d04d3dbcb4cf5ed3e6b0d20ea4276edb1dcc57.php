<?php $__env->startSection('pojok_kanan'); ?>
    <?php echo e(Session::get('account')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('body'); ?>
<div class="kotakSimpan">
            <center><h1 style="font-size: 30px; font-family: sans-serif">Simpan</h1></center>
            <form method="post" action="transaksi/simpan">
            <?php echo e(csrf_field()); ?>

                <div id="formSimpan">
                    Pilih tata cara penyimpanan
                    <div>
                        ATM
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" value = "Bank Mandiri" name="pembayaran" checked>Mandiri
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" value = "BNI" name="pembayaran">BNI
                        </label>
                    </div>
                    <div>
                        Mercant
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" value = "Indomaret" name="pembayaran">Indomart
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" value = "Alfamart" name="pembayaran">Alfamart
                        </label>
                    </div>
                    <div>
                        Other
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" value = "Bitcoin" name="pembayaran">Bitcoin
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" value = "Paypal" name="pembayaran">PayPal
                        </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" value = "Koperasi" name="pembayaran">Koperasi
                        </label>
                    </div>
                    <br>
                </div>
                <div class="posisi" id="formSimpan">
                    Nominal uang yang akan disimpan <br>
                    Rp. <input type="text" name="jumlahUang" required id="ktk">
                    <br> <br>
                    <input id="tmbl" type="submit" value="Selesai">
                </div>
            </form>
            
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\IF4103_KOPERASI-SIMPAN-PINJAM\resources\views/simpan.blade.php ENDPATH**/ ?>