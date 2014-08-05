<?php
/* @var $this PortfolioController */
/* @var $dataProvider CActiveDataProvider */
Yii::app()->clientScript->registerCss('css', "
     .yoxview {
        text-align: left;
    }
");
?>
<script type="text/javascript">4
    $(document).ready(function ($) {
        $(".yoxview").yoxview({
            backgroundColor: "Blue",
            playDelay: 5000
        });
    });
    $(function () {
        // fade in the grayscaled images to avoid visual jump
        $(".greyScale").hide().fadeIn(1000);
    });
    // user window.load to ensure images have been loaded
    $(window).load(function () {
        $(".greyScale").greyScale({
            fadeTime: 500,
            reverse: false
        });
    });
</script>

<div class="yoxview">
    <?php foreach ($model as $site) { ?>
        <a href="images/portfolio/<?php echo $site->image; ?>"><img
                src="/admin/portfolio/resized/200x200/images/portfolio/<?php echo $site->image; ?>"
                title="<?php echo $site->description; ?>"
                alt="<?php echo $site->id ?>" id="small-portfolio" class="greyScale"></a>
    <?php } ?>
</div>



