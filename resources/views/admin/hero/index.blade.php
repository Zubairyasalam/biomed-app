@extends('layouts.admin_cms')

@section('header_title', 'Hero Section Settings')

@section('content')
    <div style="display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 10px; margin-bottom: 25px;">
        <h2 style="color: var(--admin-sidebar); font-size: 1.5rem; margin: 0;">Hero Section & Header</h2>
        <p style="color: #64748b; font-size: 0.9rem; margin: 0;">Manage the Topbar, Navigation Header, and Hero Banner.</p>
    </div>

    @if(session('success'))
        <div style="background: rgba(164, 198, 57, 0.15); border-left: 4px solid var(--admin-green); padding: 15px; margin-bottom: 25px; border-radius: 4px; color: #627722;">
            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.hero.update') }}" enctype="multipart/form-data">
        @csrf
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 30px;">
            
            @foreach(['contact' => 'Topbar Settings', 'hero' => 'Hero Banner Settings'] as $groupKey => $groupName)
                @if(isset($settings[$groupKey]))
                    <div class="card" style="margin-bottom: 0;">
                        <h3 style="color: var(--admin-sidebar); font-size: 1.2rem; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 1px solid var(--admin-border);">{{ $groupName }}</h3>
                        
                        @foreach($settings[$groupKey] as $setting)
                            <div style="margin-bottom: 20px;">
                                <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px; font-size: 0.9rem;">{{ $setting->label ?? ucfirst(str_replace('_', ' ', $setting->key)) }}</label>
                                
                                @if($setting->type == 'textarea')
                                    <textarea name="{{ $setting->key }}" style="width: 100%; padding: 12px 15px; border: 1px solid var(--admin-border); border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 0.95rem;" rows="4">{{ old($setting->key, $setting->value) }}</textarea>
                                @elseif($setting->type == 'image')
                                    <div id="preview_{{ $setting->key }}_container" style="margin-bottom: 10px; {{ $setting->value ? '' : 'display: none;' }}">
                                        <img id="preview_{{ $setting->key }}" src="{{ $setting->value ? (str_starts_with($setting->value, 'http') ? $setting->value : asset($setting->value)) : '' }}" style="max-width: 100%; max-height: 150px; border-radius: 8px; border: 1px solid var(--admin-border);">
                                    </div>
                                    <input type="file" name="{{ $setting->key }}" accept="image/*" style="width: 100%; padding: 12px 15px; border: 1px solid var(--admin-border); border-radius: 8px; font-size: 0.95rem;" onchange="previewImage(this, 'preview_{{ $setting->key }}_container', 'preview_{{ $setting->key }}')">
                                    <small style="color: #64748b; display: block; margin-top: 5px;">Leave blank to keep current image.</small>
                                @else
                                    <input type="text" name="{{ $setting->key }}" value="{{ old($setting->key, $setting->value) }}" style="width: 100%; padding: 12px 15px; border: 1px solid var(--admin-border); border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 0.95rem;">
                                @endif
                            </div>
                        @endforeach
                    </div>
                @endif
            @endforeach
            
        </div>

        <div style="margin-top: 30px; text-align: right;">
            <button type="submit" class="btn" style="padding: 12px 30px; font-size: 1.05rem;">
                <i class="fa-solid fa-save"></i> Save Changes
            </button>
        </div>
    </form>

    <div class="card" style="margin-top: 40px;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; border-bottom: 2px solid var(--admin-border); padding-bottom: 10px;">
            <h3 style="color: var(--admin-sidebar); margin: 0;">Timeline Items</h3>
            <button class="btn" onclick="openModal('addModal')" style="display: flex; align-items: center; gap: 8px; padding: 6px 12px; font-size: 0.9rem;">
                <i class="fa-solid fa-plus"></i> Add Deadline
            </button>
        </div>
        @if(count($deadlines) > 0)
            <div style="overflow-x: auto;">
                <table style="width: 100%; border-collapse: collapse; text-align: left; white-space: nowrap;">
                    <thead>
                        <tr>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b;">Order</th>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b;">Title</th>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b;">Deadline Date</th>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b;">Status</th>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($deadlines as $dl)
                            <tr style="border-bottom: 1px solid var(--admin-border);">
                                <td style="padding: 15px;">{{ $dl->sort_order }}</td>
                                <td style="padding: 15px; font-weight: 600; color: var(--admin-sidebar);">{{ $dl->title }}</td>
                                <td style="padding: 15px; color: var(--admin-primary); font-weight: 600;">
                                    {{ \Carbon\Carbon::parse($dl->deadline_date)->format('M d, Y') }}
                                </td>
                                <td style="padding: 15px;">
                                    @if($dl->is_active)
                                        <span style="background: rgba(164, 198, 57, 0.15); color: #627722; padding: 4px 10px; border-radius: 20px; font-size: 0.8rem; font-weight: 600;">Active</span>
                                    @else
                                        <span style="background: rgba(239, 68, 68, 0.1); color: #ef4444; padding: 4px 10px; border-radius: 20px; font-size: 0.8rem; font-weight: 600;">Disabled</span>
                                    @endif
                                </td>
                                <td style="padding: 15px;">
                                    <div style="display: flex; gap: 10px;">
                                        <button class="btn" style="background: #e2e8f0; color: #475569; padding: 6px 12px;" onclick='openEditModal(@json($dl))'>
                                            <i class="fa-solid fa-pen-to-square"></i> Edit
                                        </button>
                                        <form method="POST" action="{{ route('admin.deadlines.delete', $dl->id) }}" onsubmit="return confirm('Are you sure?');" style="display: inline;">
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
            <p style="text-align: center; color: #94a3b8; padding: 30px;">No deadlines created yet.</p>
        @endif
    </div>

    <!-- Modals -->
    <style>
        .modal-overlay { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(17, 35, 64, 0.7); z-index: 1000; align-items: center; justify-content: center; backdrop-filter: blur(4px); }
        .modal-container { background: #fff; border-radius: 12px; width: 90%; max-width: 500px; box-shadow: 0 25px 50px rgba(0,0,0,0.15); }
        .modal-header { padding: 20px 25px; border-bottom: 1px solid var(--admin-border); display: flex; justify-content: space-between; align-items: center; background: var(--admin-sidebar); color: #fff; }
        .modal-body { padding: 30px; }
        .form-group { margin-bottom: 20px; }
        .form-label { display: block; font-weight: 600; color: var(--admin-sidebar); margin-bottom: 8px; font-size: 0.9rem; }
    </style>

    <!-- Add Modal -->
    <div class="modal-overlay" id="addModal">
        <div class="modal-container">
            <div class="modal-header">
                <h3 style="margin: 0; font-size: 1.2rem;">Add Deadline</h3>
                <button onclick="closeModal('addModal')" style="background: none; border: none; color: #fff; font-size: 1.5rem; cursor: pointer;"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <form method="POST" action="{{ route('admin.deadlines.store') }}">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" class="form-control" required placeholder="e.g. Abstract Submission">
                    </div>
                    <div class="form-group">
                        <label class="form-label">Deadline Date</label>
                        <input type="date" name="deadline_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Sort Order</label>
                        <input type="number" name="sort_order" class="form-control" value="0">
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <input type="checkbox" name="is_active" id="active1" value="1" checked>
                        <label for="active1" style="color: var(--admin-text);">Active</label>
                    </div>
                </div>
                <div style="padding: 20px 30px; border-top: 1px solid var(--admin-border); text-align: right; background: #f8fafc;">
                    <button type="button" class="btn" style="background: #e2e8f0; color: #475569; margin-right: 10px;" onclick="closeModal('addModal')">Cancel</button>
                    <button type="submit" class="btn">Save</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal-overlay" id="editModal">
        <div class="modal-container">
            <div class="modal-header">
                <h3 style="margin: 0; font-size: 1.2rem;">Edit Deadline</h3>
                <button onclick="closeModal('editModal')" style="background: none; border: none; color: #fff; font-size: 1.5rem; cursor: pointer;"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <form method="POST" id="editForm">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Title</label>
                        <input type="text" name="title" id="edit_title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Deadline Date</label>
                        <input type="date" name="deadline_date" id="edit_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Sort Order</label>
                        <input type="number" name="sort_order" id="edit_sort" class="form-control">
                    </div>
                    <div style="display: flex; align-items: center; gap: 10px;">
                        <input type="checkbox" name="is_active" id="edit_active" value="1">
                        <label for="edit_active" style="color: var(--admin-text);">Active</label>
                    </div>
                </div>
                <div style="padding: 20px 30px; border-top: 1px solid var(--admin-border); text-align: right; background: #f8fafc;">
                    <button type="button" class="btn" style="background: #e2e8f0; color: #475569; margin-right: 10px;" onclick="closeModal('editModal')">Cancel</button>
                    <button type="submit" class="btn">Update</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openModal(id) { document.getElementById(id).style.display = 'flex'; }
        function closeModal(id) { document.getElementById(id).style.display = 'none'; }
        
        function openEditModal(dl) {
            document.getElementById('editForm').action = '/admin/deadlines/' + dl.id;
            document.getElementById('edit_title').value = dl.title;
            const d = new Date(dl.deadline_date);
            document.getElementById('edit_date').value = d.toISOString().split('T')[0];
            document.getElementById('edit_sort').value = dl.sort_order;
            document.getElementById('edit_active').checked = dl.is_active ? true : false;
            
            openModal('editModal');
        }
        function previewImage(input, containerId, imgId) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    var container = document.getElementById(containerId);
                    var img = document.getElementById(imgId);
                    img.src = e.target.result;
                    container.style.display = 'block';
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection
