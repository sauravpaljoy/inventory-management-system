@extends('layouts.app')

@section('title', 'Categories - InvenTrack')

@section('content')
<div class="header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
    <h1 style="font-size: 1.8rem; font-weight: 700; color: #fff;">Categories</h1>
    <a href="{{ route('categories.create') }}" class="btn-primary" style="background: #6366f1; color: #fff; padding: 0.6rem 1.2rem; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 0.9rem; transition: all 0.2s;">
        <i class="fas fa-plus"></i> Add Category
    </a>
</div>

<div class="card" style="background: rgba(30, 41, 59, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 12px; overflow: hidden; backdrop-filter: blur(10px);">
    <table style="width: 100%; border-collapse: collapse; text-align: left;">
        <thead>
            <tr style="background: rgba(99, 102, 241, 0.1); border-bottom: 1px solid rgba(99, 102, 241, 0.2);">
                <th style="padding: 1rem; color: #94a3b8; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em;">Name</th>
                <th style="padding: 1rem; color: #94a3b8; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em;">Description</th>
                <th style="padding: 1rem; color: #94a3b8; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
            <tr style="border-bottom: 1px solid rgba(99, 102, 241, 0.1); transition: background 0.2s;" onmouseover="this.style.background='rgba(99, 102, 241, 0.05)'" onmouseout="this.style.background='transparent'">
                <td style="padding: 1rem;">
                    <div style="font-weight: 600; color: #e2e8f0;">{{ $category->name }}</div>
                </td>
                <td style="padding: 1rem; color: #94a3b8;">{{ $category->description ?? 'No description' }}</td>
                <td style="padding: 1rem; display: flex; gap: 0.5rem;">
                    <a href="{{ route('categories.edit', $category) }}" style="color: #6366f1; text-decoration: none;" title="Edit">
                        <i class="fas fa-edit"></i>
                    </a>
                    <form action="{{ route('categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?')">
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
                <td colspan="3" style="padding: 3rem; text-align: center; color: #64748b;">
                    <i class="fas fa-tags" style="font-size: 3rem; margin-bottom: 1rem; display: block; opacity: 0.2;"></i>
                    No categories found. <a href="#" style="color: #6366f1; text-decoration: none;">Add your first category</a>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
