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

        <div class="card card-primary">

            <div class="card-header">

                <h3 class="card-title"><?= $data['title']; ?></h3>

            </div>

            <form role="form" action="<?= base_url; ?>/laptop/updateLaptop" method="POST" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?= $data['laptop']['id']; ?>">

                <div class="card-body">

                    <div class="form-group">

                        <label >Nama Merek Laptop</label>

                        <select class="form-control" name="merek_nama">

                            <option value="">Pilih Merek</option>

                            <?php foreach ($data['merek'] as $row) :?>

                                <option value="<?= $row['nama_merek']; ?>" <?php if($data['laptop']['merek_nama'] == $row['nama_merek']) { echo "selected"; } ?>><?= $row['nama_merek']; ?></option>

                            <?php endforeach; ?>

                        </select>

                    </div>

                    <div class="form-group">

                        <label >Nama Model Laptop</label>

                        <input type="text" class="form-control" placeholder="masukkan model..." name="nama_model" value="<?= $data['laptop']['nama_model'];?>">

                    </div>

                    <div class="form-group">

                        <label >Nama Prosesor Laptop</label>

                        <input type="text" class="form-control" placeholder="masukkan prosesor..." name="nama_prosesor" value="<?= $data['laptop']['nama_prosesor'];?>">

                    </div>

                    <div class="form-group">

                        <label >Jumlah Ram Laptop</label>

                        <input type="number" class="form-control" placeholder="masukkan ram..." name="nama_ram" value="<?= $data['laptop']['nama_ram'];?>">

                    </div>
                    <div class="form-group">

                        <label >Jumlah Penyimpanan Laptop</label>

                        <input type="number" class="form-control" placeholder="masukkan penyimpanan..." name="nama_penyimpanan" value="<?= $data['laptop']['nama_penyimpanan'];?>">

                    </div>
                    <div class="form-group">

                        <label >Jumlah Harga Laptop</label>

                        <input type="number" class="form-control" placeholder="masukkan harga..." name="harga" value="<?= $data['laptop']['harga'];?>">

                    </div>

                </div>

                <div class="card-footer">

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>

            </form>

        </div>

    </section>

</div>