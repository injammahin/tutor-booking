@extends('admin.layouts.app')

@section('content')

    <div class="rounded-[2rem] bg-white p-8 shadow-soft">
        <h1 class="text-3xl font-black text-monty-black">Dashboard</h1>
        <p class="mt-3 text-slate-600">
            Static admin layout ready. Later you can manage tutors, packages, booking slots,
            pages, FAQs, testimonials, contact messages, and site settings.
        </p>

        <div class="mt-8 grid gap-5 md:grid-cols-2 lg:grid-cols-4">
            <div class="admin-stat-card">
                <strong>0</strong>
                <span>Bookings</span>
            </div>

            <div class="admin-stat-card">
                <strong>0</strong>
                <span>Tutors</span>
            </div>

            <div class="admin-stat-card">
                <strong>0</strong>
                <span>Packages</span>
            </div>

            <div class="admin-stat-card">
                <strong>0</strong>
                <span>Messages</span>
            </div>
        </div>
    </div>

@endsection