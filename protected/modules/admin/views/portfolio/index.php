<?php
/* @var $this PortfolioController */
/* @var $dataProvider CActiveDataProvider */
?>
<!--<script type="text/javascript" src="--><?php //Yii::app()->getBasePath();?><!--/js/grayscale.js"></script>-->
<!--<script type="text/javascript" src="http://www.pixastic.com/lib/git/pixastic/actions/desaturate.js"></script>-->
<script type="text/javascript" src="<?php Yii::app()->getBasePath(); ?>/js/gs/greyScale.js"></script>


<script type="text/javascript">
    $(document).ready(function ($) {
        $(".yoxview").yoxview({
            backgroundColor: 'Blue',
            playDelay: 5000
        });


    });
    $(function () {
        // fade in the grayscaled images to avoid visual jump
        $('.greyScale').hide().fadeIn(1000);
    });
    // user window.load to ensure images have been loaded
    $(window).load(function () {
        $('.greyScale').greyScale({
            // call the plugin with non-defult fadeTime (default: 400ms)
            fadeTime: 500,
            reverse: false
        });
    });

</script>

<style>
    .yoxview {
        text-align: left;
    }
</style>
<div class="yoxview">
    <?php foreach ($model as $site): ?>
        <a href="images/portfolio/<?php echo $site->image; ?>"><img
                src="/admin/portfolio/resized/200x200/images/portfolio/<?php echo $site->image; ?>"
                title="<?php echo $site->description; ?>"
                alt="<?php echo $site->id ?>" id="small-portfolio" class="greyScale"></a>
    <?php endforeach; ?>
</div>



