<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Ayarlar</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Açıklama</th>
                <th>İçerik</th>
                <th>Anahtar Değer</th>
                <th></th>
            </tr>
            </thead>
            <tdbody>

                <?php
                foreach ($data['adminSettings'] as $adminSettings) : ?>

                    <tr>
                        <td><?php echo $adminSettings['settings_description']; ?></td>
                        <td><?php  
                            if ($adminSettings['settings_type']=="file")
                            {?>
                                <img src="/images/settings/<?php echo $adminSettings['settings_value']; ?>" alt="">
                            <?php } else {
                                echo $adminSettings['settings_value'];
                            }

                            ?></td>
                        <td><?php echo $adminSettings['settings_key']; ?></td>
                        <td><a href="/nedmin/settings/update/<?php echo $adminSettings['settings_id'];?>"><i class="fa fa-pencil-square-o"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </tdbody>
        </table>

    </div>
    <!-- /.box-body -->

</div>