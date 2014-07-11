<?php
/* @var $this CarouselController */
/* @var $dataProvider CActiveDataProvider */

?>

<div id="carousel">
    <ul>
        <?php foreach($model as $image){?>
        <li><img alt="" src="<?php echo Yii::app()->params['carouselImageUrl'] . $image->image?>" width="500" height="213" /><p><?php echo $image->description;?></p>
        </li>
        <?php }
//        var_dump(\Yii::app()->baseUrl); die();
        ?>

    </ul>
</div>