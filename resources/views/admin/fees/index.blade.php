@extends('layouts.admin_cms')

@section('header_title', 'Manage Registration Fees')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
        <h2 style="color: var(--admin-sidebar); font-size: 1.5rem;">Pricing Plans</h2>
        <button class="btn" onclick="openModal('addModal')" style="display: flex; align-items: center; gap: 8px;">
            <i class="fa-solid fa-plus"></i> Add New Plan
        </button>
    </div>

    @if(session('success'))
        <div style="background: rgba(164, 198, 57, 0.15); border-left: 4px solid var(--admin-green); padding: 15px; margin-bottom: 25px; border-radius: 4px; color: #627722;">
            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> {{ session('success') }}
        </div>
    @endif

    <div class="card">
        @if(count($fees) > 0)
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; text-align: left;">
                    <thead>
                        <tr>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 600;">Sort Order</th>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 600;">Category Name</th>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 600;">Price (INR)</th>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 600;">Features</th>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 600;">Status</th>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 600;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($fees as $fee)
                            <tr style="border-bottom: 1px solid var(--admin-border);">
                                <td style="padding: 15px; color: var(--admin-text);">{{ $fee->sort_order }}</td>
                                <td style="padding: 15px; font-weight: 600; color: var(--admin-sidebar);">
                                    {{ $fee->category_name }}
                                    @if($fee->is_highlighted)
                                        <span style="margin-left: 8px; background: rgba(245, 158, 11, 0.15); color: #f59e0b; padding: 2px 8px; border-radius: 12px; font-size: 0.7rem; text-transform: uppercase;">Highlighted</span>
                                    @endif
                                </td>
                                <td style="padding: 15px; color: var(--admin-primary); font-weight: 700;">{{ $fee->price_inr }}</td>
                                <td style="padding: 15px; font-size: 0.85rem; color: #64748b;">
                                    @php $features = json_decode($fee->features, true) ?? []; @endphp
                                    {{ count($features) }} features listed
                                </td>
                                <td style="padding: 15px;">
                                    @if($fee->is_active)
                                        <span style="background: rgba(164, 198, 57, 0.15); color: #627722; padding: 4px 10px; border-radius: 20px; font-size: 0.8rem; font-weight: 600;">Active</span>
                                    @else
                                        <span style="background: rgba(239, 68, 68, 0.1); color: #ef4444; padding: 4px 10px; border-radius: 20px; font-size: 0.8rem; font-weight: 600;">Disabled</span>
                                    @endif
                                </td>
                                <td style="padding: 15px;">
                                    <div style="display: flex; gap: 10px;">
                                        <button class="btn" style="background: #e2e8f0; color: #475569; padding: 6px 12px;" onclick='openEditModal(@json($fee))'>
                                            <i class="fa-solid fa-pen-to-square"></i> Edit
                                        </button>
                                        <form method="POST" action="{{ route('admin.fees.delete', $fee->id) }}" onsubmit="return confirm('Are you sure you want to delete this plan?');" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn" style="background: #fee2e2; color: #ef4444; padding: 6px 12px;">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p style="text-align: center; color: #94a3b8; padding: 30px;">No fee plans created yet.</p>
        @endif
    </div>

    <!-- Modals -->
    <style>
        .modal-overlay { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(17, 35, 64, 0.7); z-index: 1000; align-items: center; justify-content: center; backdrop-filter: blur(4px); }
        .modal-container { background: #fff; border-radius: 12px; width: 90%; max-width: 600px; box-shadow: 0 25px 50px rgba(0,0,0,0.15); animation: slideUp 0.3s ease; overflow: hidden;}
        .modal-header { padding: 20px 25px; border-bottom: 1px solid var(--admin-border); display: flex; justify-content: space-between; align-items: center; background: var(--admin-sidebar); color: #fff; }
        .modal-body { padding: 30px; max-height: 70vh; overflow-y: auto;}
        .form-group { margin-bottom: 20px; }
        .form-label { display: block; font-weight: 600; color: var(--admin-sidebar); margin-bottom: 8px; font-size: 0.9rem; }
        .form-control { width: 100%; padding: 10px 15px; border: 1px solid var(--admin-border); border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 0.95rem; }
        .checkbox-group { display: flex; align-items: center; gap: 10px; margin-bottom: 10px; }
    </style>

    <!-- Add Modal -->
    <div class="modal-overlay" id="addModal">
        <div class="modal-container">
            <div class="modal-header">
                <h3 style="margin: 0; font-size: 1.2rem;">Add Pricing Plan</h3>
                <button onclick="closeModal('addModal')" style="background: none; border: none; color: #fff; font-size: 1.5rem; cursor: pointer;"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <form method="POST" action="{{ route('admin.fees.store') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Category Name</label>
                        <input type="text" name="category_name" class="form-control" required placeholder="e.g. Student, Regular, VIP">
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                        <div class="form-group">
                            <label class="form-label">Price (INR)</label>
                            <input type="text" name="price_inr" class="form-control" required placeholder="e.g. 5,000">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Sort Order</label>
                            <input type="number" name="sort_order" class="form-control" value="0">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Features (One per line)</label>
                        <textarea name="features" class="form-control" rows="5" required placeholder="Conference Kit&#10;Lunch & Refreshments&#10;Certificate"></textarea>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" name="is_active" id="active1" value="1" checked>
                        <label for="active1" style="color: var(--admin-text); font-size: 0.95rem;">Active (Visible on frontend)</label>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" name="is_highlighted" id="highlight1" value="1">
                        <label for="highlight1" style="color: var(--admin-text); font-size: 0.95rem;">Highlight Card (Premium Styling)</label>
                    </div>
                </div>
                <div style="padding: 20px 30px; border-top: 1px solid var(--admin-border); text-align: right; background: #f8fafc;">
                    <button type="button" class="btn" style="background: #e2e8f0; color: #475569; margin-right: 10px;" onclick="closeModal('addModal')">Cancel</button>
                    <button type="submit" class="btn">Save Plan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal-overlay" id="editModal">
        <div class="modal-container">
            <div class="modal-header">
                <h3 style="margin: 0; font-size: 1.2rem;">Edit Pricing Plan</h3>
                <button onclick="closeModal('editModal')" style="background: none; border: none; color: #fff; font-size: 1.5rem; cursor: pointer;"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <form method="POST" id="editForm">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Category Name</label>
                        <input type="text" name="category_name" id="edit_name" class="form-control" required>
                    </div>
                    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                        <div class="form-group">
                            <label class="form-label">Price (INR)</label>
                            <input type="text" name="price_inr" id="edit_price" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Sort Order</label>
                            <input type="number" name="sort_order" id="edit_sort" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Features (One per line)</label>
                        <textarea name="features" id="edit_features" class="form-control" rows="5" required></textarea>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" name="is_active" id="edit_active" value="1">
                        <label for="edit_active" style="color: var(--admin-text); font-size: 0.95rem;">Active (Visible on frontend)</label>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" name="is_highlighted" id="edit_highlight" value="1">
                        <label for="edit_highlight" style="color: var(--admin-text); font-size: 0.95rem;">Highlight Card (Premium Styling)</label>
                    </div>
                </div>
                <div style="padding: 20px 30px; border-top: 1px solid var(--admin-border); text-align: right; background: #f8fafc;">
                    <button type="button" class="btn" style="background: #e2e8f0; color: #475569; margin-right: 10px;" onclick="closeModal('editModal')">Cancel</button>
                    <button type="submit" class="btn">Update Plan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openModal(id) { document.getElementById(id).style.display = 'flex'; }
        function closeModal(id) { document.getElementById(id).style.display = 'none'; }
        
        function openEditModal(fee) {
            document.getElementById('editForm').action = '/admin/fees/' + fee.id;
            document.getElementById('edit_name').value = fee.category_name;
            document.getElementById('edit_price').value = fee.price_inr;
            document.getElementById('edit_sort').value = fee.sort_order;
            
            let features = JSON.parse(fee.features);
            document.getElementById('edit_features').value = features ? features.join('\n') : '';
            
            document.getElementById('edit_active').checked = fee.is_active ? true : false;
            document.getElementById('edit_highlight').checked = fee.is_highlighted ? true : false;
            
            openModal('editModal');
        }
    </script>
@endsection
