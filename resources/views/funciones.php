<?php
function clear($var){
    htmlspecialchars($var);

    return $var;
}

function redir($var){
    ?>
    <script>
        window.location="<?=$var?>";
    </script>
    <?php
    die();
}

function alert($var){
    ?>
    <script text="text/javascript">
        alert("<?=$var?>");
    </script>
    <?php
}
?>
