<div class="container-fluid">
    <h4>Keranjang Belanja</h4>

    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Produk</th>
            <th class="text-center">Jumlah</th>
            <th class="text-center">Harga</th>
            <th class="text-center">Sub Total</th>
        </tr>

        <?php $no=1;
        foreach ($this->cart->contents() as $items) :?>
            <tr>
                <td class="text-center"><?=$no++?></td>
                <td class="text-center"><?=$items['name']?></td>
                <td class="text-center"><?=$items['qty']?></td>
                <td align="right">Rp. <?=number_format($items['price'], 0,',','.')?></td>
                <td align="right">Rp. <?=number_format($items['subtotal'], 0,',','.')?></td>
            </tr>

           
        <?php endforeach ?>

        <tr>
            <td colspan="4"></td>
            <td align="right">Rp. <?=number_format($this->cart->total(), 0,',','.')?></td>
        </tr>
    </table>

    <div align="right">
            <a href="<?=base_url('dashboard/hapus_keranjang')?>"><class class="btn btn-sm btn-danger">Hapus Keranjang</class></a>
            <a href="<?=base_url('welcome/index')?>"><class class="btn btn-sm btn-primary">Lanjut Belanja</class></a>
            <a href="<?=base_url('dashboard/pembayaran')?>"><class class="btn btn-sm btn-success">Pembayaran</class></a>
    </div>
</div>