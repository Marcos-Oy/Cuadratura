<script>

<?php if($ToastStatus === 'INACTIVE'){ ?>
      toastr.info('Tu usuario no se encuentra activo, comunicate con el administrador TI.')
<?php } ?>

<?php if($ToastStatus === 'PASS'){ ?>
      toastr.error('Contraseña incorrecta.')
<?php } ?>

</script>