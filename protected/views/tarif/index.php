<?php
/* @var $this TarifController */
/* @var $dataProvider CActiveDataProvider */
?>
<?php $atr = Tarif::model()->attributeLabels() ?>
<style>

    #tbl{
        border: 1px solid;
    }
</style>
<h1>Tarifs</h1>

<table id="tbl">
    <?php foreach ($atr as $key => $name): ?>
        <tr>
            <td><?php echo $name ?></td>

            <?php foreach ($model as $tarif): ?>
                <?php
                $value = isset($tarif->$key) ? $tarif->$key : null;
                if (
                    (is_string($tarif->$key) && '1' === $tarif->$key) ||
                    (is_bool($tarif->$key) && true === $tarif->$key)
                ) {
                    $value = '+';
                } elseif (
                    (is_string($tarif->$key) && '0' === $tarif->$key) ||
                    (is_bool($tarif->$key) && false === $tarif->$key)
                ) {
                    $value = '-';
                } ?>

                <td><?php echo $value ?></td>
            <?php endforeach ?>
        </tr>
    <?php endforeach ?>
</table>
