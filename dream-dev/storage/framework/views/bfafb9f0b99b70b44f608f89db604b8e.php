<?php if((Session::has('ID'))): ?>
    {<?php echo Session::flush(); ?>}
    {<?php echo redirect()->to('login'); ?>}
<?php else: ?>
    {<?php echo redirect()->to('login'); ?>}
<?php endif; ?>

<?php /**PATH D:\Laravel\Laravel_01\dream-dev\resources\views/logout.blade.php ENDPATH**/ ?>