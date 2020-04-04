<div class="container-fluid">

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="<?=base_url('assets/img/slider1.jpg')?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
        <img src="<?=base_url('assets/img/slider2.jpg')?>" class="d-block w-100" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    </div>
    <div class="row text-center mt-3">
        <?php foreach ($elektronik as $brg) : ?>

            <div class="card ml-5 mb-3" style="width: 16rem;">
                <img src="<?=base_url().'/upload/'.$brg->gambar?>" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title mb-1"><?= $brg->nama_brg?></h5>
                <small><?= $brg->keterangan?></small><br>
                <span class="badge badge-success mb-3">Rp. <?= number_format($brg->harga, 0,',','.') ?></span>
                <?=anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg, '<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>')?>
                <?=anchor('dashboard/detail/'.$brg->id_brg, '<div class="btn btn-sm btn-success">Detal</div>')?>
               
                </div>
            </div>

        <?php endforeach; ?>
        
        
    </div>
</div>