<div style="display:none" id="insertForm" class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Slider ekle</h3>

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <form action="/nedmin/sliders/insert/slidersInsertOp" method="post" enctype="multipart/form-data">

            <div class="form-group">
                <label>Resim Seç</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" required type="file" name="sliders_file">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Başlık</label>
                <div class="row">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="sliders_title" required >
                    </div>
                </div>
            </div>


            <div align="right" class="box-footer">
                <button type="submit" class="btn btn-success" name="sliders_insert">Kaydet</button>
            </div>

        </form>


    </div>
    <!-- /.box-body -->

</div>

<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Sliders</h3>
        <div align="right">
            <button id="insertFormShow" class="btn btn-success">Ekle</button>
        </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body">

        <table class="table table-striped">
            <thead>
            <tr>
                <th>Slider Görsel</th>
                <th>Başlık</th>
                <th></th>
            </tr>
            </thead>
            <tbody id="sortable">

                <?php
                foreach ($data['sliders'] as $sliders) : ?>

                    <tr id="item-<?php echo $sliders['sliders_id'] ?>">
                        <td class="sortable"><img width="100" src="/images/sliders/<?php echo $sliders['sliders_file']; ?>" alt=""></td>
                        <td><?php echo $sliders['sliders_title']; ?></td>
                        <td width="10"><a href="/nedmin/sliders/delete/<?php echo $sliders['sliders_id'];?>"><i class="fa fa-trash-o"></i></a></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
    <!-- /.box-body -->

</div>

<script type="text/javascript">
    $(function(){
        $('#sortable').sortable({
        revert:true,
            handle:".sortable",
            stop:function(event,ui) {
            var data=$(this).sortable('serialize');
            $.ajax({
                type:"POST",
                data:data,
                url:"/nedmin/sliders",
                success:function(msg){
                    if (msg) {
                        alertify.success("İşlem Başarılı");
                    } else {
                        alertify.error("İşlem Tamamlanamadı");
                    }
                }
            });

            }
        });
        $('#sortable').disableSelection();
    });
</script>