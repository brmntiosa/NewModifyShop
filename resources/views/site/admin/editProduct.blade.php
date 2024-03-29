<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit Product | Attendance Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-GLhlTQ8i1I6TurfA6GvaqEF+TcRb7M/dfQFc8e9xHb6ZLl/3gy2IepER95F5jqFw" crossorigin="anonymous">
    <style>
        /* Import Google Fonts */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");

        * {
            margin: 0;
            padding: 0;
            outline: none;
            border: none;
            text-decoration: none;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        body {
            background: rgb(226, 226, 226);
        }

        nav {
            position: sticky;
            top: 0;
            bottom: 0;
            height: 100vh;
            left: 0;
            width: 90px;
            background: #fff;
            overflow: hidden;
            transition: 1s;
        }

        nav:hover {
            width: 280px;
            transition: 1s;
        }

        .logo {
            text-align: center;
            display: flex;
            margin: 10px 0 0 10px;
            padding-bottom: 3rem;
        }

        .logo img {
            width: 45px;
            height: 45px;
            border-radius: 50%;
        }

        .logo span {
            font-weight: bold;
            padding-left: 15px;
            font-size: 18px;
            text-transform: uppercase;
        }

        a {
            position: relative;
            width: 280px;
            font-size: 14px;
            color: rgb(85, 83, 83);
            display: table;
            padding: 10px;
        }

        nav .fas {
            position: relative;
            width: 70px;
            height: 40px;
            top: 20px;
            font-size: 20px;
            text-align: center;
        }

        .nav-item {
            position: relative;
            top: 12px;
            margin-left: 10px;
        }

        a:hover {
            background: #eee;
        }

        a:hover i {
            color: #34AF6D;
            transition: 0.5s;
        }

        .logout {
            position: absolute;
            bottom: 0;
        }

        .container {
            display: flex;
        }

        /* Main Section */
        .main {
            position: relative;
            padding: 20px;
            width: 100%;
        }

        .main-top {
            display: flex;
            width: 100%;
            justify-content: center;
            align-items: center;
        }

        .main-top i {
            position: absolute;
            right: 0;
            margin: 10px 30px;
            color: rgb(110, 109, 109);
            cursor: pointer;
        }

        .attendance {
            margin-top: 20px;
            text-transform: capitalize;
        }

        .attendance-list {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        button {
            padding: 10px;
            background-color: #4AD489;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #34AF6D;
        }

        .kembali {
            width: 8vh;
            position: absolute;
            left: 10px;
            bottom: 6vh;

        }
    </style>
</head>

<body>
    <div class="container">

        <section class="main">

            <div class="main-top">
                <h1>Edit Product</h1>
                <i class="fas fa-shopping-bag"></i>
            </div>
            <section class="attendance">
                <div class="attendance-list">
                    <a href='/admin'>
                        <img class="kembali" src="{{asset('global/landingpage/images/kembali.png')}}" alt="">
                    </a>
                    <form action="{{ route('site.admin.updateProduct', $product->id) }}" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label for="name">Product Name:</label>
                            <input type="text" name="name" value="{{ $product->name }}" required>
                        </div>
                        {{-- <div class="form-group">
                            <label for="category">Product Category:</label>
                            <select name="category" required>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $product->product_category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                        </option>
                        @endforeach
                        </select>
                </div> --}}
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" required>{{ $product->description }}</textarea>
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" name="price" value="{{ $product->price }}" required>
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <select name="status" required>
                        <option value="active" {{ $product->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="non-active" {{ $product->status == 'non-active' ? 'selected' : '' }}>Non-active</option>
                    </select>
                </div>
                <button type="submit">Update Product</button>
                </form>
    </div>
    </section>
    </section>
    </div>

    <script>
        document.querySelectorAll('.menu-toggle').forEach(item => {
            item.addEventListener('click', event => {
                const submenu = item.nextElementSibling;
                submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
            });
        });
    </script>
</body>

</html>