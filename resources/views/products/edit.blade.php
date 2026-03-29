@extends('layouts.app')

@section('title', 'Edit Product - InvenTrack')

@section('content')
<div class="header" style="margin-bottom: 2rem;">
    <h1 style="font-size: 1.8rem; font-weight: 700; color: #fff;">Edit Product</h1>
    <p style="color: #94a3b8; margin-top: 0.5rem;">Update the details for this inventory item.</p>
</div>

<div class="card" style="background: rgba(30, 41, 59, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 12px; padding: 2rem; backdrop-filter: blur(10px); max-width: 800px;">
    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 1.5rem;">
            <div>
                <label for="name" style="display: block; color: #94a3b8; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; margin-bottom: 0.5rem;">Product Name</label>
                <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required 
                    style="width: 100%; background: rgba(15, 23, 42, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 8px; padding: 0.8rem; color: #fff; font-size: 1rem;">
            </div>
            <div>
                <label for="image" style="display: block; color: #94a3b8; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; margin-bottom: 0.5rem;">Product Image</label>
                @if($product->image)
                    <div style="margin-bottom: 0.5rem;">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 4px; border: 1px solid rgba(99, 102, 241, 0.2);">
                    </div>
                @endif
                <input type="file" name="image" id="image" 
                    style="width: 100%; background: rgba(15, 23, 42, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 8px; padding: 0.8rem; color: #fff; font-size: 1rem;">
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 1.5rem;">
            <div>
                <label for="category_id" style="display: block; color: #94a3b8; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; margin-bottom: 0.5rem;">Category</label>
                <select name="category_id" id="category_id" required
                    style="width: 100%; background: rgba(15, 23, 42, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 8px; padding: 0.8rem; color: #fff; font-size: 1rem;">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 1.5rem;">
            <div>
                <label for="price" style="display: block; color: #94a3b8; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; margin-bottom: 0.5rem;">Price ($)</label>
                <input type="number" name="price" id="price" step="0.01" min="0" value="{{ old('price', $product->price) }}" required 
                    style="width: 100%; background: rgba(15, 23, 42, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 8px; padding: 0.8rem; color: #fff; font-size: 1rem;">
            </div>
            <div>
                <label for="quantity" style="display: block; color: #94a3b8; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; margin-bottom: 0.5rem;">Quantity</label>
                <input type="number" name="quantity" id="quantity" min="0" value="{{ old('quantity', $product->quantity) }}" required 
                    style="width: 100%; background: rgba(15, 23, 42, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 8px; padding: 0.8rem; color: #fff; font-size: 1rem;">
            </div>
        </div>

        <div style="margin-bottom: 2rem;">
            <label for="description" style="display: block; color: #94a3b8; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; margin-bottom: 0.5rem;">Description (Optional)</label>
            <textarea name="description" id="description" rows="4"
                style="width: 100%; background: rgba(15, 23, 42, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 8px; padding: 0.8rem; color: #fff; font-size: 1rem;">{{ old('description', $product->description) }}</textarea>
        </div>

        <div style="display: flex; gap: 1rem;">
            <button type="submit" style="flex: 1; background: #6366f1; color: #fff; border: none; padding: 0.8rem; border-radius: 8px; font-weight: 600; cursor: pointer;">
                Update Product
            </button>
            <a href="{{ route('products') }}" style="flex: 1; text-align: center; background: rgba(148, 163, 184, 0.1); color: #94a3b8; text-decoration: none; padding: 0.8rem; border-radius: 8px; font-weight: 600;">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
