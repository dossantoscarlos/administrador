@extends('layouts.app', ['title' => 'datables'])
@section('content')
<div class="container">
    <h2>Laravel DataTable - Tuts Make</h2>
 <table class="table table-bordered" id="laravel_datatable"> <thead>
    <tr>
       <th>Id</th>
       <th>Name</th>
       <th>Email</th>
       <th>Created at</th>
    </tr>
 </thead></table>
</div>
<script>
    $(document).ready( function () {
     $('#laravel_datatable').DataTable({
            ajax: "{{ url('users-list') }}",
            columns: [
                     { data: 'id', name: 'id' },
                     { data: 'name', name: 'name' },
                     { data: 'email', name: 'email' },
                     { data: 'created_at', name: 'created_at' }
                  ]
         });
      });
   </script>
@endsection