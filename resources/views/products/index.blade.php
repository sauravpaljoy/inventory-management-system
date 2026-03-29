@extends('layouts.app')

@section('title', 'Products - InvenTrack')

@section('content')
<div class="header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
    <h1 style="font-size: 1.8rem; font-weight: 700; color: #fff;">Products</h1>
    <a href="{{ route('products.create') }}" class="btn-primary" style="background: #6366f1; color: #fff; padding: 0.6rem 1.2rem; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 0.9rem; transition: all 0.2s;">
        <i class="fas fa-plus"></i> Add Product
    </a>
</div>

<div class="card" style="background: rgba(30, 41, 59, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 12px; overflow: hidden; backdrop-filter: blur(10px);">
    <table style="width: 100%; border-collapse: collapse; text-align: left;">
        <thead>
            <tr style="background: rgba(99, 102, 241, 0.1); border-bottom: 1px solid rgba(99, 102, 241, 0.2);">
                <th style="padding: 1rem; color: #94a3b8; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em;">Image</th>
                <th style="padding: 1rem; color: #94a3b8; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em;">Name</th>
                <th style="padding: 1rem; color: #94a3b8; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em;">Category</th>
                <th style="padding: 1rem; color: #94a3b8; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em;">Price</th>
                <th style="padding: 1rem; color: #94a3b8; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em;">Quantity</th>
                <th style="padding: 1rem; color: #94a3b8; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($products as $product)
            <tr style="border-bottom: 1px solid rgba(99, 102, 241, 0.1); transition: background 0.2s;" onmouseover="this.style.background='rgba(99, 102, 241, 0.05)'" onmouseout="this.style.background='transparent'">
                <td style="padding: 1rem;">
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" style="width: 40px; height: 40px; object-fit: cover; border-radius: 6px; border: 1px solid rgba(99, 102, 241, 0.2);">
                    @else
                        <div style="width: 40px; height: 40px; background: rgba(99, 102, 241, 0.1); border-radius: 6px; display: flex; align-items: center; justify-content: center; color: #6366f1;">
                            <i class="fas fa-image"></i>
                        </div>
                    @endif
                </td>
                <td style="padding: 1rem;">
                    <div style="font-weight: 600; color: #e2e8f0;">{{ $product->name }}</div>
                </td>
                <td style="padding: 1rem; color: #94a3b8;">{{ $product->category->name }}</td>
                <td style="padding: 1rem; color: #e2e8f0;">${{ number_format($product->price, 2) }}</td>
                <td style="padding: 1rem;">
                    <span style="background: rgba(99, 102, 241, 0.1); color: #818cf8; padding: 0.2rem 0.6rem; border-radius: 6px; font-size: 0.85rem; font-weight: 600;">
                        {{ $product->quantity }}
                    </span>
                </td>
                <td style="padding: 1rem; display: flex; gap: 0.5rem;">
                    <a href="{{ route('products.edit', $product) }}" style="color: #6366f1; text-decoration: none;" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background: none; border: none; color: #ef4444; cursor: pointer; padding: 0;" title="Delete">
                            <i class="fas fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" style="padding: 3rem; text-align: center; color: #64748b;">
                    <i class="fas fa-box-open" style="font-size: 3rem; margin-bottom: 1rem; display: block; opacity: 0.2;"></i>
                    No products found. <a href="#" style="color: #6366f1; text-decoration: none;">Add your first product</a>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
