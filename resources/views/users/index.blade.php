@extends('layouts.app')

@section('title', 'Users - InvenTrack')

@section('content')
<div class="header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
    <h1 style="font-size: 1.8rem; font-weight: 700; color: #fff;">Users</h1>
    <a href="#" class="btn-primary" style="background: #6366f1; color: #fff; padding: 0.6rem 1.2rem; border-radius: 8px; text-decoration: none; font-weight: 600; font-size: 0.9rem; transition: all 0.2s;">
        <i class="fas fa-plus"></i> Add User
    </a>
</div>

<div class="card" style="background: rgba(30, 41, 59, 0.5); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 12px; overflow: hidden; backdrop-filter: blur(10px);">
    <table style="width: 100%; border-collapse: collapse; text-align: left;">
        <thead>
            <tr style="background: rgba(99, 102, 241, 0.1); border-bottom: 1px solid rgba(99, 102, 241, 0.2);">
                <th style="padding: 1rem; color: #94a3b8; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em;">Name</th>
                <th style="padding: 1rem; color: #94a3b8; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em;">Email</th>
                <th style="padding: 1rem; color: #94a3b8; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em;">Joined At</th>
                <th style="padding: 1rem; color: #94a3b8; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.05em;">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr style="border-bottom: 1px solid rgba(99, 102, 241, 0.1); transition: background 0.2s;" onmouseover="this.style.background='rgba(99, 102, 241, 0.05)'" onmouseout="this.style.background='transparent'">
                <td style="padding: 1rem;">
                    <div style="font-weight: 600; color: #e2e8f0;">{{ $user->name }}</div>
                </td>
                <td style="padding: 1rem; color: #94a3b8;">{{ $user->email }}</td>
                <td style="padding: 1rem; color: #94a3b8;">{{ $user->created_at->format('M d, Y') }}</td>
                <td style="padding: 1rem;">
                    <a href="#" style="color: #6366f1; margin-right: 0.5rem;"><i class="fas fa-edit"></i></a>
                    <a href="#" style="color: #ef4444;"><i class="fas fa-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
