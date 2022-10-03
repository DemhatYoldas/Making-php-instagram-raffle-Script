<?php extract($data['aboutsUpdate']); ?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Blog Düzenle</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <form action="/nedmin/abouts/update/aboutsUpdateOp" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>Başlık</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="abouts_title" value="<?php echo $abouts_title; ?>" required >
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Slug</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="abouts_slug"  value="<?php echo $abouts_slug; ?>" >
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Blog İçerik</label>
                <div class="row">
                    <div class="col-xs-12">
                        <textarea name="abouts_content" id="editor1" ><?php echo $abouts_content; ?></textarea>
                    </div>
                </div>
            </div>

            <script>
                CKEDITOR.replace('editor1');
            </script>


            <input type="hidden" name="abouts_id" value="<?php echo $abouts_id; ?>">

            <div align="right" class="box-footer">
                <button type="submit" class="btn btn-success" name="abouts_update">Düzenle</button>
            </div>

        </form>
    </div>
    <!-- /.box-body -->

</div>