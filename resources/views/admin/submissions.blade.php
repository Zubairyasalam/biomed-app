@extends('layouts.admin_cms')

@section('header_title', 'Paper Submissions')

@section('content')
    <div class="card">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
            <h3 style="font-size: 1.2rem; color: var(--admin-sidebar);">Abstract Submissions</h3>
            <span style="background: rgba(164, 198, 57, 0.15); color: #627722; padding: 6px 15px; border-radius: 20px; font-weight: 700; font-size: 0.9rem;">Total: {{ count($submissions) }}</span>
        </div>

        @if(count($submissions) > 0)
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; text-align: left;">
                    <thead>
                        <tr>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 600; text-transform: uppercase; font-size: 0.85rem;">ID</th>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 600; text-transform: uppercase; font-size: 0.85rem;">Author Info</th>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 600; text-transform: uppercase; font-size: 0.85rem;">Organization</th>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 600; text-transform: uppercase; font-size: 0.85rem;">Target / Track</th>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 600; text-transform: uppercase; font-size: 0.85rem;">Submission Date</th>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 600; text-transform: uppercase; font-size: 0.85rem;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($submissions as $sub)
                            <tr style="border-bottom: 1px solid var(--admin-border); transition: background 0.2s;">
                                <td style="padding: 15px; color: var(--admin-text);">#{{ $sub->id }}</td>
                                <td style="padding: 15px;">
                                    <div style="font-weight: 600; color: var(--admin-sidebar);">{{ $sub->title }} {{ $sub->name }}</div>
                                    <div style="font-size: 0.85rem; color: var(--admin-text); margin-top: 3px;">{{ $sub->email }}</div>
                                    <div style="font-size: 0.85rem; color: var(--admin-text);">{{ $sub->contact_number }}</div>
                                </td>
                                <td style="padding: 15px; color: var(--admin-text);">
                                    {{ $sub->organization }}<br>
                                    <span style="font-size: 0.85rem; color: #94a3b8;">{{ $sub->country }}</span>
                                </td>
                                <td style="padding: 15px;">
                                    <div style="margin-bottom: 5px;"><span style="background: rgba(17, 35, 64, 0.1); color: var(--admin-sidebar); padding: 4px 10px; border-radius: 20px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase;">{{ $sub->interested_in }}</span></div>
                                    <div style="font-size: 0.85rem; color: var(--admin-text);"><i class="fa-solid fa-microscope" style="color: var(--admin-primary); margin-right: 5px;"></i> {{ $sub->track }}</div>
                                </td>
                                <td style="padding: 15px; font-size: 0.85rem; color: var(--admin-text);">{{ $sub->created_at->format('M d, Y') }}</td>
                                <td style="padding: 15px;">
                                    <button class="btn view-btn" 
                                        data-sub="{{ json_encode($sub) }}"
                                        data-date="{{ $sub->created_at->format('M d, Y H:i A') }}"
                                        data-file="{{ $sub->abstract_file_path ? Storage::url($sub->abstract_file_path) : '' }}">
                                        <i class="fa-solid fa-eye"></i> View
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <div style="text-align: center; padding: 40px; color: var(--admin-text);">
                <i class="fa-solid fa-file-pdf" style="font-size: 3rem; margin-bottom: 15px; color: var(--admin-border);"></i>
                <p>No paper submissions found yet.</p>
            </div>
        @endif
    </div>

    <!-- CRM Details Modal -->
    <div class="crm-modal-overlay" id="detailsModal">
        <div class="crm-modal-container">
            <div class="crm-modal-header">
                <h3>Submission Details</h3>
                <button class="crm-modal-close" onclick="closeModal()"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="crm-modal-body">
                <div class="crm-detail-grid">
                    <div class="crm-detail-item crm-full-width" style="border-bottom: 1px solid var(--admin-border); padding-bottom: 10px; margin-bottom: 20px;">
                        <h4 style="color: var(--admin-primary); margin-bottom: 5px; font-size: 1.5rem;" id="m-name">Dr. John Doe</h4>
                        <div style="color: var(--admin-text); font-size: 1rem;"><i class="fa-regular fa-building" style="margin-right: 5px;"></i> <span id="m-org">University</span></div>
                    </div>

                    <div class="crm-detail-item">
                        <div class="crm-detail-label">Email Address</div>
                        <div class="crm-detail-value" id="m-email">-</div>
                    </div>
                    <div class="crm-detail-item">
                        <div class="crm-detail-label">Contact Number</div>
                        <div class="crm-detail-value" id="m-phone">-</div>
                    </div>

                    <div class="crm-detail-item">
                        <div class="crm-detail-label">Country</div>
                        <div class="crm-detail-value" id="m-country">-</div>
                    </div>
                    <div class="crm-detail-item">
                        <div class="crm-detail-label">Submission Date</div>
                        <div class="crm-detail-value" id="m-date">-</div>
                    </div>

                    <div class="crm-detail-item crm-full-width" style="border-top: 1px solid var(--admin-border); padding-top: 20px; margin-top: 5px;">
                        <div style="font-weight: 700; color: var(--admin-sidebar); margin-bottom: 15px; font-size: 1.1rem;">Academic Details</div>
                    </div>

                    <div class="crm-detail-item">
                        <div class="crm-detail-label">Target Presentation</div>
                        <div class="crm-detail-value"><span style="background: rgba(17, 35, 64, 0.1); color: var(--admin-sidebar); padding: 4px 10px; border-radius: 20px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase;" id="m-interest">-</span></div>
                    </div>
                    <div class="crm-detail-item">
                        <div class="crm-detail-label">Scientific Track</div>
                        <div class="crm-detail-value" id="m-track">-</div>
                    </div>

                    <div class="crm-detail-item crm-full-width" style="border-top: 1px solid var(--admin-border); padding-top: 20px; margin-top: 5px;">
                        <div style="font-weight: 700; color: var(--admin-sidebar); margin-bottom: 15px; font-size: 1.1rem;">Attached Files</div>
                    </div>

                    <div class="crm-detail-item crm-full-width" id="m-file-container">
                        <!-- File link injected via JS -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        tbody tr:hover { background-color: #f8fafc; }
        .crm-modal-overlay {
            display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(17, 35, 64, 0.7); z-index: 1000; backdrop-filter: blur(4px);
            align-items: center; justify-content: center;
        }
        .crm-modal-container {
            background: #fff; border-radius: 12px; width: 90%; max-width: 700px;
            max-height: 90vh; overflow-y: auto; box-shadow: 0 25px 50px rgba(0,0,0,0.15);
            animation: slideUp 0.3s ease;
        }
        .crm-modal-header {
            padding: 20px 25px; border-bottom: 1px solid var(--admin-border); display: flex;
            justify-content: space-between; align-items: center; background: var(--admin-sidebar);
            color: #fff; border-radius: 12px 12px 0 0;
        }
        .crm-modal-header h3 { color: #fff; margin: 0; font-size: 1.3rem; }
        .crm-modal-close {
            background: none; border: none; color: rgba(255,255,255,0.7); font-size: 1.5rem;
            cursor: pointer; transition: color 0.2s;
        }
        .crm-modal-close:hover { color: #fff; }
        .crm-modal-body { padding: 30px; }
        .crm-detail-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 25px; }
        .crm-detail-item { margin-bottom: 10px; }
        .crm-detail-label {
            font-size: 0.85rem; color: #94a3b8; text-transform: uppercase;
            font-weight: 700; letter-spacing: 0.5px; margin-bottom: 5px;
        }
        .crm-detail-value { font-size: 1.05rem; color: var(--admin-sidebar); font-weight: 500; }
        .crm-full-width { grid-column: 1 / -1; }
        @keyframes slideUp { from { transform: translateY(30px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
    </style>

    <script>
        const modal = document.getElementById('detailsModal');
        
        function closeModal() {
            modal.style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                closeModal();
            }
        }

        document.querySelectorAll('.view-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                const sub = JSON.parse(this.getAttribute('data-sub'));
                const date = this.getAttribute('data-date');
                const fileUrl = this.getAttribute('data-file');
                
                document.getElementById('m-name').innerText = sub.title + ' ' + sub.name;
                document.getElementById('m-org').innerText = sub.organization;
                document.getElementById('m-email').innerText = sub.email;
                document.getElementById('m-phone').innerText = sub.contact_number;
                document.getElementById('m-country').innerText = sub.country;
                document.getElementById('m-date').innerText = date;
                
                document.getElementById('m-interest').innerText = sub.interested_in;
                document.getElementById('m-track').innerText = sub.track;
                
                const fileContainer = document.getElementById('m-file-container');
                if(fileUrl) {
                    fileContainer.innerHTML = `
                        <a href="${fileUrl}" target="_blank" class="btn" style="display: inline-flex; align-items: center; gap: 8px;">
                            <i class="fa-solid fa-download"></i> Download Abstract
                        </a>
                    `;
                } else {
                    fileContainer.innerHTML = '<span style="color: #ef4444; font-size: 0.95rem;"><i class="fa-solid fa-circle-xmark"></i> No abstract file attached.</span>';
                }

                modal.style.display = 'flex';
            });
        });
    </script>
@endsection
