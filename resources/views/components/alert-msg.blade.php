@if(session('message'))
<div class="alert alert-success alert-dismissible show fade">
    <div class="alert-body">
        <button class="close" data-dismiss="alert">
            <span>&times;</span>
        </button>
         <strong>Success!</strong>
        {{ session('message') }}
    </div>
</div>

<script>
        setTimeout(function () {
            document.querySelector('.alert').style.display = 'none';
        }, 3000); // Auto-hide after 3 seconds
</script>

@endif