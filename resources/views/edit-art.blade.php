@extends('Layout.master')
@section('content')

<div class="container">
@if($errors)
    @foreach($errors->all() as $error)
        <h2 style="justify-content: center; align-items: center; ">{{ $error }}</h2>
    @endforeach
@endif
</div>

<div class="post-container">
    <div class="post-wrapper">
        <section class="post">
            <header>Edit Post</header>
            <form action="{{ route('update', $product->id); }}" method="POST" enctype="multipart/form-data">
                @csrf
                <textarea style="height: 30px; min-height: 30px;" name="name" placeholder="Name Here" required>{{ old('name', $product->name); }}</textarea>
                <textarea class="price" name="artist" placeholder="artist" required>{{ old('artist', $product->artist); }}</textarea>
                <textarea name="description" placeholder="Description" required>{{ old('description', $product->description); }}</textarea>
                <div class="emoji">
                    <i class="bi bi-emoji-smile"></i>
                </div>
                <label for="role">Select Category: </label>
                <select name="category" id="category" style="border: none;">
                    <option value="2">Sale</option>
                    <option value="1">Auction</option>
                </select>
                <textarea class="price" name="price" placeholder="price" required>{{ old('price', $product->price); }}</textarea>
                <textarea class="price" name="sale_price" placeholder="sale price">{{ old('sale_price', $product->sale_price); }}</textarea>
                <div class="options" onclick="document.getElementById('file').click();">
                    <p>Add Image to Your Post</p>
                    <input type="file" name="image" id="file" hidden>
                    <i class="bi bi-card-image"></i>
                </div>
                <button type="submit" class="submit">Update</button>
            </form>
        </section>
    </div>
</div>

@endsection