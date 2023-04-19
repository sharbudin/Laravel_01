<?php if((Session::has('home'))): ?>
    {<?php echo Session::flush(); ?>}
    {<?php echo redirect()->to('/'); ?>}
<?php else: ?>
    {<?php echo redirect()->to('/'); ?>}
<?php endif; ?>
<?php /**PATH D:\Laravel\Laravel_01\ui_build\resources\views/logout.blade.php ENDPATH**/ ?>