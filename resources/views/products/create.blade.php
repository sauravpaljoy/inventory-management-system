@extends('layouts.app')

@section('title', 'Add Product - InvenTrack')

@section('content')
<div class="header" style="margin-bottom: 2rem;">
    <h1 style="font-size: 1.8rem; font-weight: 700; color: #fff;">Add New Product</h1>
    <p style="color: #94a3b8; margin-top: 0.5rem;">Enter details to add a new item to your inventory.</p>
</div>

<div class="card" style="background: rgba(30, 41, 59, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 12px; padding: 2rem; backdrop-filter: blur(10px); max-width: 800px;">
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 1.5rem;">
            <div>
                <label for="name" style="display: block; color: #94a3b8; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; margin-bottom: 0.5rem;">Product Name</label>
                <input type="text" name="name" id="name" required 
                    style="width: 100%; background: rgba(15, 23, 42, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 8px; padding: 0.8rem; color: #fff; font-size: 1rem;"
                    placeholder="e.g. MacBook Pro M3">
            </div>
            <div>
                <label for="image" style="display: block; color: #94a3b8; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; margin-bottom: 0.5rem;">Product Image</label>
                <input type="file" name="image" id="image" 
                    style="width: 100%; background: rgba(15, 23, 42, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 8px; padding: 0.8rem; color: #fff; font-size: 1rem;">
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 1.5rem;">
            <div>
                <label for="category_id" style="display: block; color: #94a3b8; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; margin-bottom: 0.5rem;">Category</label>
                <select name="category_id" id="category_id" required
                    style="width: 100%; background: rgba(15, 23, 42, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 8px; padding: 0.8rem; color: #fff; font-size: 1rem;">
                    <option value="" disabled selected>Select a category</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 1.5rem;">
            <div>
                <label for="price" style="display: block; color: #94a3b8; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; margin-bottom: 0.5rem;">Price ($)</label>
                <input type="number" name="price" id="price" step="0.01" min="0" required 
                    style="width: 100%; background: rgba(15, 23, 42, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 8px; padding: 0.8rem; color: #fff; font-size: 1rem;"
                    placeholder="0.00">
            </div>
            <div>
                <label for="quantity" style="display: block; color: #94a3b8; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; margin-bottom: 0.5rem;">Quantity</label>
                <input type="number" name="quantity" id="quantity" min="0" required 
                    style="width: 100%; background: rgba(15, 23, 42, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 8px; padding: 0.8rem; color: #fff; font-size: 1rem;"
                    placeholder="0">
            </div>
        </div>

        <div style="margin-bottom: 2rem;">
            <label for="description" style="display: block; color: #94a3b8; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; margin-bottom: 0.5rem;">Description (Optional)</label>
            <textarea name="description" id="description" rows="4"
                style="width: 100%; background: rgba(15, 23, 42, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 8px; padding: 0.8rem; color: #fff; font-size: 1rem;"
                placeholder="Product specifications and details"></textarea>
        </div>

        <div style="display: flex; gap: 1rem;">
            <button type="submit" style="flex: 1; background: #6366f1; color: #fff; border: none; padding: 0.8rem; border-radius: 8px; font-weight: 600; cursor: pointer;">
                Add Product
            </button>
            <a href="{{ route('products') }}" style="flex: 1; text-align: center; background: rgba(148, 163, 184, 0.1); color: #94a3b8; text-decoration: none; padding: 0.8rem; border-radius: 8px; font-weight: 600;">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
