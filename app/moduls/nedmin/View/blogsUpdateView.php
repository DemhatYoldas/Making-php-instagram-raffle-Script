<?php extract($data['blogsUpdate']); ?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Blog Düzenle</h3>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <form action="/nedmin/blogs/update/blogsUpdateOp" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>Yüklü Resim</label>
                <div class="row">
                    <div class="col-xs-12">
                        <img width="150" src="/images/blogs/<?php echo $blogs_file; ?>" alt="Admin Profil Foto">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Resim Seç</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="file" name="blogs_file">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Başlık</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="blogs_title" value="<?php echo $blogs_title; ?>" required >
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Slug</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="blogs_slug" value="<?php echo $blogs_slug; ?>" >
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Blog İçerik</label>
                <div class="row">
                    <div class="col-xs-12">
                        <textarea name="blogs_content" id="editor1" ><?php echo $blogs_content; ?></textarea>
                    </div>
                </div>
            </div>

            <script>
                CKEDITOR.replace('editor1');
            </script>


            <input type="hidden" name="blogs_id" value="<?php echo $blogs_id; ?>">
            <input type="hidden" name="delete_file" value="<?php echo $blogs_file; ?>">

            <div align="right" class="box-footer">
                <button type="submit" class="btn btn-success" name="blogs_update">Düzenle</button>
            </div>

        </form>
    </div>
    <!-- /.box-body -->

</div>