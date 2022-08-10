<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-admin-head/>

    <body class="antialiased">
        <div class="wrapper">
            <x-admin-side-navigation/>
            <!-- Page Content  -->

            <div id="content">
                <x-admin-top-navigation/>

                <h2>Books</h2>

                <button type="button" class="btn btn-primary"><a href="{{ url('/admin/books/create_book') }}">Add</a></button>
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Author</th>
                        <th scope="col">Description</th>
                        <th scope="col">Release Date</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{$book->id}}</td>
                                <td>{{$book->name}}</td>
                                <td>{{$book->category}}</td>
                                <td>{{$book->author}}</td>
                                <td>{{$book->description}}</td>
                                <td>{{$book->release_date}}</td>
                                <td>{{$book->price}}</td>
                                <td>{{$book->quantity}}</td>
                                <td>
                                    <button type="button" class="btn btn-warning"><a href="{{ route('edit_book', $book->id) }}">Edit</a></button>
                                    <button type="button" class="btn btn-danger"><a href="{{ route('delete_book', $book->id) }}">Delete</a></button>
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
