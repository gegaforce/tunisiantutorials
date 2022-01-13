<script src="<?php echo js_url('jquery-3.2.0.min');?>"></script>

<?php
	echo '<h1>test notification</h1>';
?>

    $.ajax({
            url: "<?=site_url("Admin/notification")?>",
            type: "post",
            success:function(response){
            }
        });
</script>