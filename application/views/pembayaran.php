<div class="contaner-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total=0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $items) {
                        $grand_total = $grand_total + $items['subtotal'];
                    }
                    echo "<h4>Total Belanja anda : Rp. ".number_format($grand_total, 0,',','.');
               
                ?>
            </div><br><br>
             <h3>Input Alamat Pengiriman dan Pembayaran</h3>
                <form method="post" action="<?=base_url('dashboard/proses_pesanan')?>">
                    <div class="form-group">
                        <label>Nama Lengkap</label>
                        <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Alamat Lengkap</label>
                        <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Nomer Telpon</label>
                        <input type="text" name="no_telp" placeholder="Nomer Telopn Anda" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Jasa Pengiriman</label>
                        <select class="form-control">
                            <option>JNE</option>
                            <option>TIKI</option>
                            <option>Pos Indonesia</option>
                            <option>GoJek</option>
                            <option>Grab</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Pilih Bank</label>
                        <select class="form-control">
                            <option>BCA - xxxxxxx</option>
                            <option>BNI - xxxxxxx</option>
                            <option>Mandiri - xxxxxxxx</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>
                </form>
                <?php 
                     } else{
                         echo "<h4>Keranjang Belanjaan anda masih kosong !!";
                     }
                ?>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>