<script>
    document.addEventListener('DOMContentLoaded', function() {
        const buttons = document.querySelectorAll('.approval-button');
        const hiddenInput = document.getElementById('approved_hidden');

        buttons.forEach(button => {
            button.addEventListener('click', function() {
                buttons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');
                hiddenInput.value = this.getAttribute('data-value');
            });
        });
    });
</script>