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
       <!-- <li><img alt="" src="images/carousel/p1.jpg" width="500" height="213" /><p>Hi there. I&#39;m
                a caption for this image. If you click the pause icon in the upper right
                hand corner you can pause the slideshow and restart it whenever you like.</p>
        </li>
        <li><img alt="" src="images/carousel/p2.jpg" width="500" height="213" /><p>This is the caption
                for the second image. The image to the right has no caption. clicking the
                left and right arrows will also pause the show.</p>
        </li>
        <li><img alt="" src="images/carousel/p3.jpg" width="500" height="213" />
            <p>This is the caption
                for the third image. The image to the right has no caption. clicking the
                left and right arrows will also pause the show.</p>
        </li>-->
    </ul>
</div>