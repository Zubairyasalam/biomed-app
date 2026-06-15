@extends('layouts.admin_cms')

@section('header_title', 'Paper Submissions')

@section('content')
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px; gap: 15px;">
            <h3 style="font-size: 1.2rem; color: var(--admin-sidebar); margin: 0;">Abstract Submissions</h3>
            <span style="background: rgba(164, 198, 57, 0.15); color: #627722; padding: 6px 15px; border-radius: 20px; font-weight: 700; font-size: 0.9rem; white-space: nowrap;">Total: {{ count($submissions) }}</span>
        </div>

        @if(count($submissions) > 0)
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; white-space: nowrap;">
                    <thead>
                        <tr style="background: #f8fafc;">
                            <th style="padding: 14px 16px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 700; text-transform: uppercase; font-size: 0.78rem; white-space: nowrap;">#</th>
                            <th style="padding: 14px 16px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 700; text-transform: uppercase; font-size: 0.78rem;">Name</th>
                            <th style="padding: 14px 16px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 700; text-transform: uppercase; font-size: 0.78rem;">Email</th>
                            <th style="padding: 14px 16px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 700; text-transform: uppercase; font-size: 0.78rem;">Contact</th>
                            <th style="padding: 14px 16px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 700; text-transform: uppercase; font-size: 0.78rem;">Organization</th>
                            <th style="padding: 14px 16px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 700; text-transform: uppercase; font-size: 0.78rem;">Country</th>
                            <th style="padding: 14px 16px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 700; text-transform: uppercase; font-size: 0.78rem;">Presentation</th>
                            <th style="padding: 14px 16px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 700; text-transform: uppercase; font-size: 0.78rem;">Track</th>
                            <th style="padding: 14px 16px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 700; text-transform: uppercase; font-size: 0.78rem;">Date</th>
                            <th style="padding: 14px 16px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 700; text-transform: uppercase; font-size: 0.78rem;">Abstract</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($submissions as $sub)
                            <tr style="border-bottom: 1px solid var(--admin-border); transition: background 0.2s;">
                                <td style="padding: 14px 16px; color: #94a3b8; font-weight: 600; font-size: 0.9rem;">#{{ $sub->id }}</td>

                                <td style="padding: 14px 16px;">
                                    <div style="font-weight: 700; color: var(--admin-sidebar); white-space: nowrap;">{{ $sub->title }} {{ $sub->name }}</div>
                                </td>

                                <td style="padding: 14px 16px;">
                                    <a href="mailto:{{ $sub->email }}" style="color: #1e293b; font-size: 0.9rem; text-decoration: none;">{{ $sub->email }}</a>
                                </td>

                                <td style="padding: 14px 16px; color: var(--admin-text); font-size: 0.9rem; white-space: nowrap;">
                                    {{ $sub->contact_number }}
                                </td>

                                <td style="padding: 14px 16px;">
                                    <div style="color: var(--admin-text); font-size: 0.9rem; font-weight: 500;">{{ $sub->organization }}</div>
                                </td>

                                <td style="padding: 14px 16px;">
                                    <span style="background: #f1f5f9; color: #475569; padding: 4px 10px; border-radius: 20px; font-size: 0.82rem; font-weight: 600; white-space: nowrap;">{{ $sub->country }}</span>
                                </td>

                                <td style="padding: 14px 16px;">
                                    <span style="background: rgba(17, 35, 64, 0.1); color: var(--admin-sidebar); padding: 4px 10px; border-radius: 20px; font-size: 0.78rem; font-weight: 700; text-transform: uppercase; white-space: nowrap;">{{ $sub->interested_in }}</span>
                                </td>

                                <td style="padding: 14px 16px; color: #1e293b; font-size: 0.85rem; font-weight: 500;">
                                    <i class="fa-solid fa-microscope" style="color: var(--admin-primary); margin-right: 4px;"></i>{{ $sub->track }}
                                </td>

                                <td style="padding: 14px 16px; font-size: 0.85rem; color: #94a3b8; white-space: nowrap;">
                                    {{ $sub->created_at->format('M d, Y') }}<br>
                                    <span style="font-size: 0.78rem;">{{ $sub->created_at->format('h:i A') }}</span>
                                </td>

                                <td style="padding: 14px 16px;">
                                    @if($sub->abstract_file_path)
                                        <a href="{{ Storage::url($sub->abstract_file_path) }}" target="_blank"
                                           style="display: inline-flex; align-items: center; gap: 6px; background: var(--admin-primary); color: #fff; padding: 7px 14px; border-radius: 8px; font-size: 0.82rem; font-weight: 700; text-decoration: none; white-space: nowrap;">
                                            <i class="fa-solid fa-download"></i> Download
                                        </a>
                                    @else
                                        <span style="color: #ef4444; font-size: 0.85rem;"><i class="fa-solid fa-circle-xmark"></i> No file</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div style="text-align: center; padding: 60px; color: var(--admin-text);">
                <i class="fa-solid fa-file-pdf" style="font-size: 3.5rem; margin-bottom: 15px; color: var(--admin-border); display: block;"></i>
                <p style="font-size: 1.1rem;">No paper submissions yet.</p>
                <p style="font-size: 0.9rem; color: #94a3b8;">Submissions will appear here once authors submit from the website.</p>
            </div>
        @endif
    </div>

    <style>
        tbody tr:hover { background-color: #f8fafc; }
    </style>

@endsection
