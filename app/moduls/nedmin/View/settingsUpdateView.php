<?php extract($data['settingsUpdate']); ?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Ayar Düzenle</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <form action="/nedmin/settings/update/settingsUpdateOp" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>Açıklama</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" readonly type="text" name="settings_description" required
                               value="<?php echo $settings_description; ?>">
                    </div>
                </div>
            </div>

            <?php
            if ($settings_type == "file") {
                ?>
                <div class="form-group">
                    <label>Resim Seç</label>
                    <div class="row">
                        <div class="col-xs-12">
                            <input class="form-control" type="file" name="settings_value" required>
                        </div>
                    </div>
                </div>
            <?php }
            ?>


            <div class="form-group">
                <label>İçerik</label>
                <div class="row">
                    <div class="col-xs-12">
                        <?php
                        if ($settings_type == "text") { ?>
                            <input class="form-control" type="text" name="settings_value" required
                                   value="<?php echo $settings_value; ?>">
                        <?php } else if ($settings_type == "textarea") { ?>
                            <textarea class="form-control" name="settings_value"><?php echo $settings_value; ?></textarea>
                        <?php } else if ($settings_type == "ckeditor") { ?>
                            <textarea class="form-control" name="settings_value"
                                      id="editor1"><?php echo $settings_value; ?></textarea>
                        <?php } else if ($settings_type == "file") { ?>
                            <img width="100" src="/images/settings/<?php echo $settings_value; ?>">
                        <?php }
                        ?>
                    </div>
                </div>
            </div>

            <script>
                CKEDITOR.replace('editor1');
            </script>

            <input type="hidden" name="settings_id" value="<?php echo $settings_id; ?>">
            <?php if ($settings_type == "file") { ?>
                <input type="hidden" name="delete_file" value="<?php echo $settings_value; ?>">
            <?php } ?>

            <div align="right" class="box-footer">
                <button type="submit" class="btn btn-success" name="settings_update">Düzenle</button>
            </div>

        </form>
    </div>
    <!-- /.box-body -->

</div>