<!-- Page Content -->
<?php

foreach ($data['instagram'] as $key) {
    $item['href'] = $key->find('h3 a', 0)->title;
    $item['span'] = $key->find('span', 0)->plaintext;
    $articles[] = $item;
}
//    echo "<pre>";
//    print_r($articles);
//    exit;
?>
<div class="container">
    <h1 class="my-4">Instagram Çekiliş Scripti</h1>

    <p>Yapılan Yorum Sayısı...: <?php echo count($articles); ?></p>
    <p>Yapılan Tekil Yorum Sayısı...: <?php
        $details=unique_multidim_array($articles,'href');
        array_shift($details);
        echo count($details);

        ?></p>
    <?php
//        echo "<pre>";
//        print_r($details);
//        exit;
    ?>
    <form action="/" method="POST" class="form-inline">
        <div class="form-group mx-sm-3 mb-2">

            <input type="number" pattern="[0-9]" name="kazanan_sayisi" class="form-control" placeholder="Kazanan Sayısı">
        </div>
        <button type="submit" class="btn btn-primary mb-2">Çekilişi Başlat</button>
    </form>
    <hr>
    <?php
    if ($_POST['kazanan_sayisi']>count($details)) {
        echo "<p>Çekilişe katılandan fazla sayı giremezsiniz.</p>";

    }
        else if (isset($_POST['kazanan_sayisi'])){
            ?>


            <h3>Kazananlar</h3>
            <table id="example" class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">İnstagram Hesap Adı</th>
                    <th scope="col">Yorumu</th>
                    <th scope="col">Hesap Linki</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $rand=array_rand($details,$_POST['kazanan_sayisi']);
                $count=1;

                foreach($rand as $key => $values):?>

                    <tr>
                        <th scope="row"><?php echo $count++; ?></th>
                        <td><?php echo $details[$values]['href']; ?></td>
                        <td><?php echo $details[$values]['span']; ?></td>
                        <td><a target="_blank" href="<?php echo "https://www.instagram.com/".$details[$values]['href']; ?>"><?php echo $details[$values]['href'];?></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
    <?php } ?>

</div>

<!-- /.container -->