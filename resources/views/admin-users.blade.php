<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-admin-head/>
    <body class="antialiased">
        <div class="wrapper">
            <x-admin-side-navigation/>
            <!-- Page Content  -->
            <div id="content">
                <x-admin-top-navigation/>

                <h2>Users</h2>

                <button type="button" class="btn btn-primary"><a href="{{ url('/admin/users/create_user') }}">Add</a></button>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Password</th>
                        <th scope="col">Email</th>
                        <th scope="col">Tel</th>
                        <th scope="col">Is_Seller</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->firstname}}</td>
                                <td>{{$user->lastname}}</td>
                                <td>{{$user->password}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->tel}}</td>
                                <td>{{$user->is_seller}}</td>
                                <td>
                                    <button type="button" class="btn btn-warning"><a href="{{ route('edit_user', $user->id) }}">Edit</a></button>
                                    <button type="button" class="btn btn-danger"><a href="{{ route('delete_user', $user->id) }}">Delete</a></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </body>
    <script src="{{ url('/js/navBar.js') }}"></script>
</html>
