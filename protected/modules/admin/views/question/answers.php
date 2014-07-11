<?php
/**
 * Created by PhpStorm.
 * User: viktor
 * Date: 7/7/14
 * Time: 1:01 PM
 */
?>
<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css'/>
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

<script>
    $(function() {
        $( "#accordion" ).accordion({
            collapsible: true,
            active:false
        });
    });
</script>
<div id="accordion">
<?php foreach($model as $question):?>
    <h3><?php echo $question->question;?></h3>
    <div>
        <?php echo $question->answer->body;?>
    </div>
<?php endforeach; ?>
<div>
