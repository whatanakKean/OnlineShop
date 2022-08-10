<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-admin-head/>
    <body class="antialiased">
        <div class="wrapper">
            <x-admin-side-navigation/>

            <!-- Page Content  -->
            <div id="content">
                <x-admin-top-navigation/>

                <h2>Create User</h2>
                <hr>
                <form method="post" action="{{ route('create-user') }}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="id">ID</label>
                            <input type="number" name="id" class="form-control" id="id" placeholder="ID">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="firstname">Firstname</label>
                            <input type="text" name="firstname" class="form-control" id="firstname" placeholder="Firstname">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastname">LastName</label>
                            <input type="text" name="lastname" class="form-control" id="lastname" placeholder="LastName">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="tel">Tel</label>
                            <input type="text" name="tel" class="form-control" id="tel" placeholder="Tel">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="is_seller">Is Seller</label>
                            <select id="is_seller" name="is_seller" class="form-control">
                              <option selected>Choose...</option>
                              <option value="1">True</option>
                              <option value="0">False</option>
                            </select>
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
