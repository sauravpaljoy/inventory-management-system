@extends('layouts.app')

@section('title', 'Dashboard — InvenTrack')

@section('styles')
<style>
    .welcome-banner {
        background: linear-gradient(135deg, rgba(99,102,241,0.2), rgba(167,139,250,0.1));
        border: 1px solid rgba(99,102,241,0.25);
        border-radius: 16px;
        padding: 1.8rem 2rem;
        margin-bottom: 2rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 1rem;
    }
    .welcome-banner h2 { font-size: 1.4rem; font-weight: 700; color: #e2e8f0; }
    .welcome-banner p  { color: #94a3b8; font-size: 0.88rem; margin-top: 0.3rem; }
    .welcome-icon {
        font-size: 2.5rem;
        background: linear-gradient(135deg, #6366f1, #a78bfa);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.2rem; margin-bottom: 2rem; }
    .stat-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(99,102,241,0.15);
        border-radius: 14px;
        padding: 1.4rem;
        transition: all 0.25s;
    }
    .stat-card:hover { border-color: rgba(99,102,241,0.4); box-shadow: 0 8px 24px rgba(0,0,0,0.3); transform: translateY(-2px); }
    .stat-icon {
        width: 42px; height: 42px;
        border-radius: 10px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.1rem; margin-bottom: 1rem;
    }
    .stat-icon.purple { background: rgba(99,102,241,0.2); color: #818cf8; }
    .stat-icon.green  { background: rgba(34,197,94,0.15);  color: #4ade80; }
    .stat-icon.orange { background: rgba(251,146,60,0.15); color: #fb923c; }
    .stat-icon.red    { background: rgba(239,68,68,0.15);  color: #f87171; }
    .stat-value { font-size: 1.8rem; font-weight: 700; color: #e2e8f0; line-height: 1; }
    .stat-label { font-size: 0.8rem; color: #64748b; margin-top: 0.3rem; }

    .section-title { font-size: 1rem; font-weight: 600; color: #e2e8f0; margin-bottom: 1rem; }
    .quick-actions { display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 1rem; }
    .qa-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(99,102,241,0.15);
        border-radius: 14px;
        padding: 1.4rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.25s;
        text-decoration: none;
        display: block;
    }
    .qa-card:hover { border-color: rgba(99,102,241,0.5); background: rgba(99,102,241,0.08); transform: translateY(-2px); }
    .qa-card i { font-size: 1.6rem; margin-bottom: 0.6rem; display: block; }
    .qa-card span { font-size: 0.82rem; color: #94a3b8; font-weight: 500; }
    .qa-card.purple i { color: #818cf8; }
    .qa-card.green  i { color: #4ade80; }
    .qa-card.orange i { color: #fb923c; }
    .qa-card.cyan   i { color: #22d3ee; }
</style>
@endsection

@section('content')
    <div class="welcome-banner">
        <div>
            <h2>Good {{ now()->format('H') < 12 ? 'Morning' : (now()->format('H') < 17 ? 'Afternoon' : 'Evening') }}, {{ Auth::user()->name }}! 👋</h2>
            <p>Here's your inventory overview for today, {{ now()->format('l, F j, Y') }}</p>
        </div>
        <div class="welcome-icon"><i class="fas fa-chart-line"></i></div>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon purple"><i class="fas fa-box"></i></div>
            <div class="stat-value">0</div>
            <div class="stat-label">Total Products</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon green"><i class="fas fa-tags"></i></div>
            <div class="stat-value">0</div>
            <div class="stat-label">Categories</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon orange"><i class="fas fa-triangle-exclamation"></i></div>
            <div class="stat-value">0</div>
            <div class="stat-label">Low Stock Items</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon red"><i class="fas fa-circle-xmark"></i></div>
            <div class="stat-value">0</div>
            <div class="stat-label">Out of Stock</div>
        </div>
    </div>

    <p class="section-title">Quick Actions</p>
    <div class="quick-actions">
        <a href="#" class="qa-card purple">
            <i class="fas fa-plus-circle"></i>
            <span>Add Product</span>
        </a>
        <a href="#" class="qa-card green">
            <i class="fas fa-folder-plus"></i>
            <span>Add Category</span>
        </a>
        <a href="#" class="qa-card orange">
            <i class="fas fa-file-export"></i>
            <span>Export Report</span>
        </a>
        <a href="#" class="qa-card cyan">
            <i class="fas fa-chart-bar"></i>
            <span>View Analytics</span>
        </a>
    </div>
@endsection
