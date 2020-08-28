<?php

/*

type: layout

name: Clients

description: Simple Clients Template

*/

?>

    <style>
        .clients-simple {
            width: 80%;
            margin: 0 auto;
            display: block;
        }

        .clients-simple .client {
            width: 20%;
            float: left;
            padding: 0 20px;
            height: 90px;
        }

        .clients-simple .client img {
            border: 0;
            max-width: 100%;
            width: auto;
            max-height: 70px;
        }

        .clients-simple .client .pic-valign {
            display: table;
            height: 100%;
            width: 100%;
            text-align: center;
        }

        .clients-simple .client .pic-valign-cell {
            display: table-cell;
            vertical-align: middle;
        }

        @media screen and (max-width: 1199px) {
            .clients-simple .client {
                width: 33%;
                float: left;
                padding: 0 20px;
                height: 90px;
            }
        }

        @media screen and (max-width: 768px) {
            .clients-simple .client {
                width: 50%;
                float: left;
                padding: 0 20px;
                height: 90px;
            }
        }
    </style>

<?php if (is_array($data)): ?>

    <?php $rand = uniqid(); ?>

    <div class="clients-simple" id="mw-gallery-<?php print $rand; ?>">
        <?php $count = -1;
        foreach ($data as $item): ?>
            <?php $count++; ?>
            <div class="client client-<?php print $item['id']; ?>">
                <div class="pic-valign">
                      <span class="pic-valign-cell">
                          <img src="<?php print thumbnail($item['filename'], 400); ?>"/>
                      </span>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="clearfix"></div>
        <script>gallery<?php print $rand; ?> = [
                    <?php foreach($data  as $item): ?>{image: "<?php print ($item['filename']); ?>", description: "<?php print $item['title']; ?>"},
                <?php endforeach;  ?>
            ];</script>
    </div>
<?php endif; ?>