<div class="content-wrapper">

    <section class="content-header">

        <div class="container-fluid">

            <div class="row mb-2">

                <div class="col-sm-6">

                    <h1><?= $data['title']; ?></h1>

                </div>

            </div>

        </div>

    </section>

    <section class="content">

        <div class="row">

            <div class="col-sm-12">

                <?php Flasher::Message(); ?>

            </div>

        </div>

        <div class="card">

            <div class="card-header">

                <h3 class="card-title"><?= $data['title'] ?></h3> 

                <div class="btn-group float-right">

                    <a href="<?= base_url; ?>/laptop/tambahLaptop" class="btn float-right btn-xs btn btn-primary">Tambah Laptop</a>
        
                    <a href="<?= base_url; ?>/laptop/laporanLaptop" class="btn float-right btn-xs btn btn-info">Laporan Laptop</a>

                </div>
            
            </div>


            <div class="card-body">

                <form action="<?= base_url; ?>/laptop/cariLaptop" method="post">

                    <div class="row mb-3">

                        <div class="col-lg-6">

                            <div class="input-group">

                                <input type="text" class="form-control" placeholder="" name="key" >

                                <div class="input-group-append">

                                    <button class="btn btn-outline-secondary" type="submit">Cari Data</button>

                                    <a class="btn btn-outline-danger" href="<?= base_url; ?>/laptop" >Reset</a>

                                </div>

                            </div>

                        </div>

                    </div>

                </form>

                <table class="table table-bordered">

                    <thead>

                        <tr>

                            <th style="width: 10px">#</th>

                            <th>Merek</th>

                            <th>Model</th>

                            <th>Prosesor</th>

                            <th>RAM</th>

                            <th>Penyimpanan</th>

                            <th>Harga </th>
                            
                            <th style="width: 150px">Action</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php $no=1; ?>

                        <?php foreach ($data['laptop'] as $row) :?>

                            <tr>

                                <td><?= $no; ?></td>

                                <td><?= $row['merek_nama'];?></td>

                                <td><?= $row['nama_model'];?></td>

                                <td><?= $row['nama_prosesor'];?></td>

                                <td><?= $row['nama_ram'];?>GB</td>

                                <td><?= $row['nama_penyimpanan'];?>GB SSD</td>

                                <td><div class="badge badge-warning">Rp.<?=$row['harga'];?></div></td>

                                <td>

                                    <a href="<?= base_url; ?>/laptop/editLaptop/<?= $row['id'] ?>" class="badge badge-info">Edit</a> 

                                    <a href="<?= base_url; ?>/laptop/hapusLaptop/<?= $row['id'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>

                                </td>

                            </tr>

                        <?php $no++; endforeach; ?>

                    </tbody>

                </table>

            </div>

        </div>

    </section>

</div>
