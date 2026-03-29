@extends('layouts.app')

@section('title', 'Add Category - InvenTrack')

@section('content')
<div class="header" style="margin-bottom: 2rem;">
    <h1 style="font-size: 1.8rem; font-weight: 700; color: #fff;">Add New Category</h1>
    <p style="color: #94a3b8; margin-top: 0.5rem;">Create a new category to organize your products.</p>
</div>

<div class="card" style="background: rgba(30, 41, 59, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 12px; padding: 2rem; backdrop-filter: blur(10px); max-width: 600px;">
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        
        <div style="margin-bottom: 1.5rem;">
            <label for="name" style="display: block; color: #94a3b8; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; margin-bottom: 0.5rem;">Category Name</label>
            <input type="text" name="name" id="name" required 
                style="width: 100%; background: rgba(15, 23, 42, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 8px; padding: 0.8rem; color: #fff; font-size: 1rem; transition: border-color 0.2s;"
                placeholder="e.g. Electronics"
                onfocus="this.style.borderColor='#6366f1'" onblur="this.style.borderColor='rgba(99, 102, 241, 0.2)'">
            @error('name')
                <div style="color: #f87171; font-size: 0.85rem; mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div style="margin-bottom: 2rem;">
            <label for="description" style="display: block; color: #94a3b8; font-size: 0.85rem; font-weight: 600; text-transform: uppercase; margin-bottom: 0.5rem;">Description (Optional)</label>
            <textarea name="description" id="description" rows="4"
                style="width: 100%; background: rgba(15, 23, 42, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 8px; padding: 0.8rem; color: #fff; font-size: 1rem; transition: border-color 0.2s;"
                placeholder="Brief description of the category"
                onfocus="this.style.borderColor='#6366f1'" onblur="this.style.borderColor='rgba(99, 102, 241, 0.2)'"></textarea>
        </div>

        <div style="display: flex; gap: 1rem;">
            <button type="submit" style="flex: 1; background: #6366f1; color: #fff; border: none; padding: 0.8rem; border-radius: 8px; font-weight: 600; cursor: pointer; transition: background 0.2s;" onmouseover="this.style.background='#4f46e5'" onmouseout="this.style.background='#6366f1'">
                Create Category
            </button>
            <a href="{{ route('categories') }}" style="flex: 1; text-align: center; background: rgba(148, 163, 184, 0.1); color: #94a3b8; text-decoration: none; padding: 0.8rem; border-radius: 8px; font-weight: 600; transition: background 0.2s;" onmouseover="this.style.background='rgba(148, 163, 184, 0.2)'" onmouseout="this.style.background='rgba(148, 163, 184, 0.1)'">
                Cancel
            </a>
        </div>
    </form>
</div>
@endsection
