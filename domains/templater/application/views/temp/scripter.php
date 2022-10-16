</body>
<!-- Footer -->
<script src="<?php echo base_url();?>public/js/jquery.min.js"></script>
<script src="<?php echo base_url();?>public/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>public/js/jquery.js"></script>
<script src="<?php echo base_url();?>public/js/jquery.prettyPhoto.js"></script>
<script>
$('body').on('input', '.input-number', function(){
	this.value = this.value.replace(/[^0-9\.\,]/g, '');
    
    
});
</script>
<script>
    $('body').on('input', '.text_only', function(){

    this.value = this.value.replace(/[^*//+-]/gi, '');

});
</script>
</html>