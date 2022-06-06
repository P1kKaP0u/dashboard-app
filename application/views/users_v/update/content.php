<section class="content-header">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Kullanıcı Güncelleme İşlemi</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->

                            <?php

                                foreach ($items as $item) { ?>

                            <?php } ?>
                            
                            <form method="POST"  action="<?php echo base_url("users/update/$item->id"); ?>" class="form-horizontal">
                                <div class="card-body">
                                    <div class="form-group row">

                                    <label for="" class="col-sm-2 col-form-label">Kullanıcı adı</label>
                                        <div class="col-sm-10">
                                            <input value = "<?php echo $item->user_name;?>" type="text" name="user_name" class="form-control" id="kullaniciadi" placeholder="Kullanıcı adı">
                                        </div>

                                        <label for="" class="col-sm-2 col-form-label">Ad soyad</label>
                                        <div class="col-sm-10">
                                            <input value = "<?php echo $item->full_name;?>" type="text" name="full_name" class="form-control" id="adsoyad" placeholder="Ad soyad">
                                        </div>

                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                            <input value = "<?php echo $item->email;?>" type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                                        </div>

                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Aktif mi?</label>
                                        <div class="col-sm-10">
                                            <input type="checkbox" name="isactive" class="form-control" id="aktifmi" placeholder="">
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Güncelle</button>
                                </div>
                                <!-- /.card-footer -->
                            </form>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>