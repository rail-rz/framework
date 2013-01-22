<?php
/**
 * Created by JetBrains PhpStorm.
 * User: R2
 * Date: 30.11.12
 * Time: 20:48
 * To change this template use File | Settings | File Templates.
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<!--    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>-->
    <script type="text/javascript" src="http://poll/helper/jquery-1.2.6.pack.js"></script>
    <script type="text/javascript">
        var total = 0;
        function add_new_image(){
            total++;
            $('<tr>')
                .attr('id','tr_image_'+total)
                .css({lineHeight:'20px'})
                .append (
                $('<td>')
                    .attr('id','td_title_'+total)
                    .css({paddingRight:'5px',width:'200px'})
                    .append(
                    $('<textarea name="answers[]" rows="1" cols="40"></textarea>')
//                        .attr('id','input_title_'+total)
//                        .attr('name','input_title_'+total)
                )

            )
                .append(
                $('<td>')
//                    .css({width:'60px'})
                    .append(
                    $('<span id="progress_'+total+'" class="padding5px"><a href="#" onclick="$(\'#tr_image_'+total+'\').remove();" class="ico_delete">[X]</a></span>')
                )
            )
                .appendTo('#table_container');
        }
        $(document).ready(function() {
            add_new_image();
        });
    </script>



</head>

<div class="container">

    <div id="header">
        <div id="logo">Header</div>
    </div><!-- header -->

    <?=$content ;?>

    <div id="footer">
        <div>Footer</div>
    </div><!-- footer -->

</div><!--page>