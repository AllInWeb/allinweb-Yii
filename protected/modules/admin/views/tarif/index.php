<?php
/* @var $this TarifController */
/* @var $dataProvider CActiveDataProvider */
?>
<script type="text/javascript">
$(function(){

    $('#tbl tr:nth-child(4)').after('<tr><td><i style="color: orange;text-decoration: underline;padding: 10px;margin: 15px;">Основное</i></td></tr>');
    $('#tbl tr:nth-child(7)').after('<tr><td><i style="color: orange;text-decoration: underline;padding: 10px;margin: 15px;">Функционал сайта</i></td></tr>');
    $('#tbl tr:nth-child(21)').after('<tr><td><i style="color: orange;text-decoration: underline;padding: 10px;margin: 15px;">Подготовка к раскрутке</i></td></tr>');

})

</script>

<?php //$atr = Tarif::model()->attributeLabels() ?>
<?php $atr = Tarif::model()->getAttributes() ?>
<pre>
</pre>
    <style>
    #tbl tr:nth-child(1){
       display:none;
    }
    #tbl tr:nth-child(2){
        color: orange;
    }
    #tbl tr:nth-child(4){
        color: orange;
    }
</style>

<table id="tbl">
    <?php foreach ($atr as $key => $name): ?>
        <tr>
            <td><?php echo Yii::t('aliases',$key); ?></td>

            <?php foreach ($model as $tarif): ?>
                <?php
                $value = isset($tarif->$key) ? $tarif->$key : null;
                if (
                    (is_string($tarif->$key) && '1' === $tarif->$key) ||
                    (is_bool($tarif->$key) && true === $tarif->$key)
                ) {
                    $value = "<img src='/images/parts/yes.png'>";
                } elseif (
                    (is_string($tarif->$key) && '0' === $tarif->$key) ||
                    (is_bool($tarif->$key) && false === $tarif->$key)
                ) {
                    $value = "<img src='/images/parts/no.png'>";
                } ?>

                <td><?php echo $value ?></td>
            <?php endforeach ?>
        </tr>
    <?php endforeach ?>
</table>