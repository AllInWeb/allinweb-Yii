<?php
/* @var $this PortfolioController */
/* @var $dataProvider CActiveDataProvider */
?>
<script type="text/javascript">
    $(document).ready(function () {
        $(".yoxview").yoxview({
            backgroundColor: 'Blue',
            playDelay: 5000
        });
});

</script>

<style>
    #small-portfolio {
        margin: 5px;
        filter: grayscale(100%);
        -webkit-filter: grayscale(100%);
        -moz-filter: grayscale(100%);
        -o-filter: grayscale(100%);
        -ms-filter: grayscale(100%);

    }
    #small-portfolio:hover {
        filter: grayscale(0%);
        -webkit-filter: grayscale(0%);
        -moz-filter: grayscale(0%);
        -o-filter: grayscale(0%);
        -ms-filter: grayscale(0%);

    }
    .yoxview{
        text-align: left;
    }
</style>
<div class="yoxview">
    <?php foreach ($model as $site): ?>
        <a href="images/portfolio/<?php echo $site->image; ?>"><img
                src="/admin/portfolio/resized/200x200/images/portfolio/<?php echo $site->image; ?>" title="<?php echo $site->description; ?>"
                alt="<?php echo $site->id ?>" id="small-portfolio"></a>
    <?php endforeach; ?>
</div>



