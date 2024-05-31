@if (session('success'))
    <div class="alert alert-success" role="alert" id="successAlert">
        {{ session('success') }}
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('successAlert').style.display = 'none';
        }, 6000); // The message will disappear after 6 seconds
    </script>
@endif

@if (session('error'))
    <div class="alert alert-danger" role="alert" id="errorAlert">
        {{ session('error') }}
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('errorAlert').style.display = 'none';
        }, 6000); // The message will disappear after 6 seconds
    </script>
@endif
