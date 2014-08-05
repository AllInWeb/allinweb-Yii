<div id="carousel">
    <ul>
        <?php foreach ($model as $image) { ?>
            <li><img alt="" src="<?php echo Yii::app()->params['carouselImageUrl'] . $image->image ?>" width="700" height="413"/>
                <p><?php echo $image->description; ?></p>
            </li>
        <?php } ?>
    </ul>
</div>
<div id="car"></div>
