<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-admin-head/>
    <body class="antialiased">
        <div class="wrapper">
            <x-admin-side-navigation/>

            <!-- Page Content  -->
            <div id="content">
                <x-admin-top-navigation/>

                <h2>Create Vendor</h2>
                <hr>
                <form method="post" action="{{ route('create-vendor') }}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="id">ID</label>
                            <input type="number" name="id" class="form-control" id="id" placeholder="ID">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="user_id">User ID</label>
                            <input type="number" name="user_id" class="form-control" id="user_id" placeholder="User ID">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="img">Image</label>
                            <input type="text" name="img" class="form-control" id="img" placeholder="Image URL">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tel">Tel</label>
                            <input type="text" name="tel" class="form-control" id="tel" placeholder="Tel">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="address">Address</label>
                            <input type="text" name="address" class="form-control" id="address" placeholder="Address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
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
