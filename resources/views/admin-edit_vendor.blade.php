<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-admin-head/>
    <body class="antialiased">
        <div class="wrapper">
            <x-admin-side-navigation/>

            <!-- Page Content  -->
            <div id="content">
                <x-admin-top-navigation/>

                <h2>Edit Vendor</h2>
                <hr>
                <form method="post" action="{{ route('edit-vendor', $vendor->id) }}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="id">ID</label>
                            <input value="{{$vendor->id}}" type="number" name="id" class="form-control" id="id" placeholder="ID">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="user_id">User ID</label>
                            <input value="{{$vendor->user_id}}" type="number" name="user_id" class="form-control" id="user_id" placeholder="User ID">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input value="{{$vendor->name}}" type="text" name="name" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="img">Image</label>
                            <input value="{{$vendor->img}}" type="text" name="img" class="form-control" id="img" placeholder="Image URL">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tel">Tel</label>
                            <input value="{{$vendor->tel}}" type="text" name="tel" class="form-control" id="tel" placeholder="Tel">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input value="{{$vendor->address}}" type="text" name="address" class="form-control" id="address" placeholder="Address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input value="{{$vendor->email}}" type="email" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>

            </div>
        </div>

    </body>
    <script src="{{ url('/js/navBar.js') }}"></script>
</html>
