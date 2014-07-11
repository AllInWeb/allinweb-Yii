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
    $(document).ready(function() {
        grayscale.prepare( $('.yoxview img') );
        grayscale( $('.yoxview img') );
        $('.yoxview img').hover(function() {
            grayscale.reset( $(this) );
        }, function() {
            grayscale( $(this) );
        });
    });
</script>

<h1>Portfolios</h1>

<div class="yoxview">
    <?php foreach ($model as $site): ?>
        <a href="images/portfolio/<?php echo $site->image; ?>"><img src="images/portfolio/<?php echo $site->image; ?>"
                                                                    alt="<?php echo $site->id ?>"
                                                                    title="<?php echo $site->description ?>"
                                                                    width="100px" height="100px"
                                                                    id="small-portfolio"></a>
    <?php endforeach; ?>
</div>




<?php /*$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));*/
?>
