<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-admin-head/>
    <body class="antialiased">
        <div class="wrapper">
            <x-admin-side-navigation/>
            <!-- Page Content  -->
            <div id="content">
                <x-admin-top-navigation/>

                <h2>Vendors</h2>

                <button type="button" class="btn btn-primary"><a href="{{ url('/admin/vendors/create_vendor') }}">Add</a></button>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Tel</th>
                        <th scope="col">Address</th>
                        <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vendors as $vendor)
                            <tr>
                                <td>{{$vendor->id}}</td>
                                <td>{{$vendor->name}}</td>
                                <td>{{$vendor->tel}}</td>
                                <td>{{$vendor->email}}</td>
                                <td>
                                    <button type="button" class="btn btn-warning"><a href="{{ route('edit_vendor', $vendor->id) }}">Edit</a></button>
                                    <button type="button" class="btn btn-danger"><a href="{{ route('delete_vendor', $vendor->id) }}">Delete</a></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </body>
    <script src="{{ url('/js/navBar.js') }}"></script>
</html>
