<div>
    Modal
    @include('livewire.user.admin.modal.add-role-modal')

    <script>
        window.livewire.on('addRoleModal_Admin', () => {
            $('#addRoleModal_Admin').modal('show');
        });
    </script>
</div>
