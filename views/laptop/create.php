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

            <form role="form" action="<?= base_url; ?>/laptop/simpanLaptop" method="POST" enctype="multipart/form-data">

                <div class="card-body">

                    <div class="form-group">

                        <label >Nama Merek Laptop</label>

                        <select class="form-control" name="merek_nama">

                            <option value="">Pilih Merek</option>

                            <?php foreach ($data['merek'] as $row) :?>

                                <option value="<?= $row['nama_merek']; ?>"><?= $row['nama_merek']; ?></option>

                            <?php endforeach; ?>

                        </select>

                    </div>

                    <div class="form-group">

                        <label >Nama Model Laptop</label>

                        <input type="text" class="form-control" placeholder="masukkan model..." name="nama_model" required>

                    </div>

                    <div class="form-group">

                        <label> Nama Prosesor Laptop </label>

                        <input type="text" class="form-control" placeholder="masukkan prosesor..." name="nama_prosesor" required>

                    </div>

                    <div class="form-group">

                        <label >Jumlah RAM Laptop</label>

                        <input type="number" class="form-control" placeholder="masukkan ram..." name="nama_ram" required>

                    </div>
                    <div class="form-group">

                        <label >Jumlah Penyimpanan Laptop</label>

                        <input type="number" class="form-control" placeholder="masukkan penyimpanan..." name="nama_penyimpanan" required>

                    </div>
                    <div class="form-group">

                        <label >Jumlah Harga Laptop</label>

                        <input type="number" class="form-control" placeholder="masukkan harga..." name="harga" required>

                    </div>

                </div>

                <div class="card-footer">

                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>

            </form>

        </div>

    </section>

</div>
