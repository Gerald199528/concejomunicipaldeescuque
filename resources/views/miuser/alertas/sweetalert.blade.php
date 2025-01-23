@if(Session::has('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Éxito',
        text: '{{ Session::get('success') }}',
        showConfirmButton: true,
        timer: 2000,
        timerProgressBar: true,
        confirmButtonColor: '#6E0EE9',
        confirmButtonText: 'Ok',
        customClass: {
            popup: 'larger-alert'
        },
        width: '600px',
        heightAuto: false
    });
</script>
@endif