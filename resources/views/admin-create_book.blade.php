<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-admin-head/>
    <body class="antialiased">
        <div class="wrapper">
            <x-admin-side-navigation/>

            <!-- Page Content  -->
            <div id="content">
                <x-admin-top-navigation/>

                <h2>Create Book</h2>
                <hr>
                <form method="post" action="{{ route('create-book') }}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="id">ID</label>
                            <input type="number" name="id" class="form-control" id="id" placeholder="ID">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="vendor_id">Vendor ID</label>
                            <input type="number" name="vendor_id" class="form-control" id="vendor_id" placeholder="Vendor ID">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="category">Category</label>
                            <input type="text" name="category" class="form-control" id="category" placeholder="Category">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="author">Author</label>
                            <input type="text" name="author" class="form-control" id="author" placeholder="Author">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="release_date">Release Date</label>
                            <input type="date" name="release_date" class="form-control" id="release_date" placeholder="Release Date">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="img">Image</label>
                            <input type="text" name="img" class="form-control" id="img" placeholder="Image URL">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="price">Price</label>
                            <input type="number" name="price" class="form-control" id="price" placeholder="Price">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="quantity">Quantity</label>
                            <input type="Quantity" name="quantity" class="form-control" id="quantity" placeholder="Quantity">
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
