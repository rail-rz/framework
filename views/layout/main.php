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
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script language="javascript">
        function toggle() {
            var ele = document.getElementById("toggleText");
            var text = document.getElementById("displayText");
            if(ele.style.display == "block") {
                ele.style.display = "none";
//                text.innerHTML = "Открыть спойлер";
            }
            else {
                ele.style.display = "block";
//                text.innerHTML = "Закрыть";
            }
        }
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