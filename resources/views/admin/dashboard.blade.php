@extends('layouts.app')

@section('title', 'Admin Dashboard — InvenTrack')

@section('styles')
<style>
    .welcome-banner {
        background: linear-gradient(135deg, rgba(239,68,68,0.1), rgba(248,113,113,0.05));
        border: 1px solid rgba(239,68,68,0.2);
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
        background: linear-gradient(135deg, #ef4444, #f87171);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.2rem; margin-bottom: 2rem; }
    .stat-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(239,68,68,0.15);
        border-radius: 14px;
        padding: 1.4rem;
        transition: all 0.25s;
    }
    .stat-card:hover { border-color: rgba(239,68,68,0.4); box-shadow: 0 8px 24px rgba(0,0,0,0.3); transform: translateY(-2px); }
    .stat-icon {
        width: 42px; height: 42px;
        border-radius: 10px;
        display: flex; align-items: center; justify-content: center;
        font-size: 1.1rem; margin-bottom: 1rem;
    }
    .stat-icon.red    { background: rgba(239,68,68,0.15);  color: #f87171; }
    .stat-icon.blue   { background: rgba(59,130,246,0.15); color: #60a5fa; }
    .stat-icon.green  { background: rgba(34,197,94,0.15);  color: #4ade80; }
    .stat-icon.purple { background: rgba(139,92,246,0.15); color: #a78bfa; }
    
    .stat-value { font-size: 1.8rem; font-weight: 700; color: #e2e8f0; line-height: 1; }
    .stat-label { font-size: 0.8rem; color: #64748b; margin-top: 0.3rem; }

    .section-title { font-size: 1rem; font-weight: 600; color: #e2e8f0; margin-bottom: 1rem; }
    .quick-actions { display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 1rem; }
    .qa-card {
        background: rgba(255,255,255,0.04);
        border: 1px solid rgba(239,68,68,0.15);
        border-radius: 14px;
        padding: 1.4rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.25s;
        text-decoration: none;
        display: block;
    }
    .qa-card:hover { border-color: rgba(239,68,68,0.5); background: rgba(239,68,68,0.08); transform: translateY(-2px); }
    .qa-card i { font-size: 1.6rem; margin-bottom: 0.6rem; display: block; }
    .qa-card span { font-size: 0.82rem; color: #94a3b8; font-weight: 500; }
    .qa-card.red    i { color: #f87171; }
    .qa-card.blue   i { color: #60a5fa; }
    .qa-card.green  i { color: #4ade80; }
    .qa-card.purple i { color: #a78bfa; }
</style>
@endsection

@section('content')
    <div class="welcome-banner">
        <div>
            <h2>Admin Control Panel 👋</h2>
            <p>System Overview for {{ Auth::user()->name }} | {{ now()->format('l, F j, Y') }}</p>
        </div>
        <div class="welcome-icon"><i class="fas fa-user-shield"></i></div>
    </div>

    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon red"><i class="fas fa-users-cog"></i></div>
            <div class="stat-value">0</div>
            <div class="stat-label">Total Users</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon blue"><i class="fas fa-store"></i></div>
            <div class="stat-value">0</div>
            <div class="stat-label">Active Shops</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon green"><i class="fas fa-chart-pie"></i></div>
            <div class="stat-value">$0.00</div>
            <div class="stat-label">Total Revenue</div>
        </div>
        <div class="stat-card">
            <div class="stat-icon purple"><i class="fas fa-server"></i></div>
            <div class="stat-value">Stable</div>
            <div class="stat-label">System Status</div>
        </div>
    </div>

    <p class="section-title">Administrative Actions</p>
    <div class="quick-actions">
        <a href="#" class="qa-card red">
            <i class="fas fa-users"></i>
            <span>Manage Users</span>
        </a>
        <a href="#" class="qa-card blue">
            <i class="fas fa-file-invoice-dollar"></i>
            <span>Global Reports</span>
        </a>
        <a href="#" class="qa-card green">
            <i class="fas fa-cogs"></i>
            <span>System Settings</span>
        </a>
        <a href="#" class="qa-card purple">
            <i class="fas fa-shield-alt"></i>
            <span>Security Audit</span>
        </a>
    </div>
@endsection
