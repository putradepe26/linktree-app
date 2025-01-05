<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script>
    $(function() {
        $('#sortable').sortable({
            update: function(event, ui) {
                let order = $(this).sortable('toArray', { attribute: 'data-id' });
                $.post('<?php echo e(route('links.reorder')); ?>', { order: order, _token: '<?php echo e(csrf_token()); ?>' });
            }
        });
    });

    function confirmDelete() { return confirm('Are you sure you want to delete this link?'); }
</script><?php /**PATH C:\xampp\htdocs\linktree-app\resources\views/layers/footer.blade.php ENDPATH**/ ?>