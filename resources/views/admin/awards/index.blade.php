@extends('layouts.admin_cms')

@section('header_title', 'Awards CMS')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
        <h2 style="color: var(--admin-sidebar); font-size: 1.5rem;">Awards & Recognitions</h2>
        <p style="color: #64748b; font-size: 0.9rem;">Manage the awards, their descriptions, and criteria.</p>
    </div>

    @if(session('success'))
        <div style="background: rgba(164, 198, 57, 0.15); border-left: 4px solid var(--admin-green); padding: 15px; margin-bottom: 25px; border-radius: 4px; color: #627722;">
            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> {{ session('success') }}
        </div>
    @endif
    @if ($errors->any())
        <div style="background: rgba(220, 53, 69, 0.15); border-left: 4px solid #dc3545; padding: 15px; margin-bottom: 25px; border-radius: 4px; color: #dc3545;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card" style="margin-bottom: 30px;">
        <h3 style="color: var(--admin-sidebar); font-size: 1.2rem; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 1px solid var(--admin-border);">Awards Introduction text</h3>
        <form method="POST" action="{{ route('admin.awards.settings.update') }}">
            @csrf
            <div style="margin-bottom: 20px;">
                <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px; font-size: 0.9rem;">Intro Paragraph</label>
                <textarea name="awards_intro" style="width: 100%; padding: 12px 15px; border: 1px solid var(--admin-border); border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 0.95rem;" rows="4">{{ $settings['awards_page']->where('key', 'awards_intro')->first()->value ?? '' }}</textarea>
            </div>
            <div style="text-align: right;">
                <button type="submit" class="btn" style="padding: 10px 25px;">
                    <i class="fa-solid fa-save"></i> Save Content
                </button>
            </div>
        </form>
    </div>

    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 15px;">
        <h3 style="color: var(--admin-sidebar); font-size: 1.2rem; margin: 0;">Awards List</h3>
        <button onclick="openModal('addAwardModal')" class="btn" style="background: var(--admin-sidebar);"><i class="fa-solid fa-plus"></i> Add Award</button>
    </div>

    <div class="card" style="padding: 0; overflow: hidden; margin-bottom: 30px;">
        <table style="width: 100%; border-collapse: collapse; text-align: left;">
            <thead style="background: #f8fafc; border-bottom: 1px solid var(--admin-border);">
                <tr>
                    <th style="padding: 15px 20px; font-size: 0.85rem; color: #64748b; text-transform: uppercase;">Award</th>
                    <th style="padding: 15px 20px; font-size: 0.85rem; color: #64748b; text-transform: uppercase;">Short Description</th>
                    <th style="padding: 15px 20px; font-size: 0.85rem; color: #64748b; text-transform: uppercase;">Order</th>
                    <th style="padding: 15px 20px; font-size: 0.85rem; color: #64748b; text-transform: uppercase; text-align: right;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($awards as $award)
                    <tr style="border-bottom: 1px solid var(--admin-border);">
                        <td style="padding: 15px 20px; font-weight: 500;">
                            <div style="display: flex; align-items: center; gap: 10px;">
                                <div style="width: 40px; height: 40px; border-radius: 50%; background: rgba(0,0,0,0.05); display: flex; align-items: center; justify-content: center;">
                                    <i class="{{ $award->icon ?? 'fa-solid fa-trophy' }}" style="color: {{ $award->icon_color ?? '#fbc02d' }}; font-size: 1.2rem;"></i>
                                </div>
                                {{ $award->name }}
                            </div>
                        </td>
                        <td style="padding: 15px 20px; color: #64748b; font-size: 0.9rem;">{{ Str::limit($award->short_description, 60) }}</td>
                        <td style="padding: 15px 20px;">{{ $award->sort_order }}</td>
                        <td style="padding: 15px 20px; text-align: right;">
                            <button onclick='editAward(@json($award))' style="background: none; border: none; color: #3b82f6; cursor: pointer; margin-right: 15px; font-size: 1rem;"><i class="fa-solid fa-pen-to-square"></i></button>
                            <form action="{{ route('admin.awards.destroy', $award->id) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this award?');">
                                @csrf @method('DELETE')
                                <button type="submit" style="background: none; border: none; color: #ef4444; cursor: pointer; font-size: 1rem;"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" style="padding: 30px; text-align: center; color: #64748b;">No awards found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Add Award Modal -->
    <div id="addAwardModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; align-items: center; justify-content: center; overflow-y: auto; padding: 40px 0;">
        <div style="background: #fff; width: 700px; border-radius: 8px; padding: 30px; position: relative; margin: auto;">
            <button type="button" onclick="closeModal('addAwardModal')" style="position: absolute; top: 15px; right: 15px; background: none; border: none; font-size: 1.2rem; cursor: pointer; color: #64748b;"><i class="fa-solid fa-xmark"></i></button>
            <h3 style="margin-top: 0; color: var(--admin-sidebar); margin-bottom: 20px;">Add Award</h3>
            <form action="{{ route('admin.awards.store') }}" method="POST">
                @csrf
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 15px;">
                    <div>
                        <label style="display: block; font-weight: 600; margin-bottom: 5px; font-size: 0.9rem;">Award Name</label>
                        <input type="text" name="name" required style="width: 100%; padding: 10px; border: 1px solid var(--admin-border); border-radius: 4px;">
                    </div>
                    <div>
                        <label style="display: block; font-weight: 600; margin-bottom: 5px; font-size: 0.9rem;">Sort Order</label>
                        <input type="number" name="sort_order" value="0" required style="width: 100%; padding: 10px; border: 1px solid var(--admin-border); border-radius: 4px;">
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 15px;">
                    <div>
                        <label style="display: block; font-weight: 600; margin-bottom: 5px; font-size: 0.9rem;">Icon Class (FontAwesome)</label>
                        <input type="text" name="icon" placeholder="fa-solid fa-trophy" style="width: 100%; padding: 10px; border: 1px solid var(--admin-border); border-radius: 4px;">
                    </div>
                    <div>
                        <label style="display: block; font-weight: 600; margin-bottom: 5px; font-size: 0.9rem;">Icon Color (Hex)</label>
                        <input type="text" name="icon_color" placeholder="#fbc02d" style="width: 100%; padding: 10px; border: 1px solid var(--admin-border); border-radius: 4px;">
                    </div>
                </div>

                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-weight: 600; margin-bottom: 5px; font-size: 0.9rem;">Short Description (For Top Card)</label>
                    <textarea name="short_description" rows="2" style="width: 100%; padding: 10px; border: 1px solid var(--admin-border); border-radius: 4px;"></textarea>
                </div>

                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-weight: 600; margin-bottom: 5px; font-size: 0.9rem;">Benefits (One per line. Basic HTML like &lt;strong&gt; allowed)</label>
                    <textarea name="benefits" rows="4" style="width: 100%; padding: 10px; border: 1px solid var(--admin-border); border-radius: 4px; font-family: monospace; font-size: 0.85rem;"></textarea>
                </div>

                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-weight: 600; margin-bottom: 5px; font-size: 0.9rem;">Eligibility Criteria (One per line. Basic HTML allowed)</label>
                    <textarea name="eligibility" rows="4" style="width: 100%; padding: 10px; border: 1px solid var(--admin-border); border-radius: 4px; font-family: monospace; font-size: 0.85rem;"></textarea>
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-weight: 600; margin-bottom: 5px; font-size: 0.9rem;">Guidelines (One per line. Basic HTML allowed)</label>
                    <textarea name="guidelines" rows="4" style="width: 100%; padding: 10px; border: 1px solid var(--admin-border); border-radius: 4px; font-family: monospace; font-size: 0.85rem;"></textarea>
                </div>

                <div style="text-align: right;">
                    <button type="button" onclick="closeModal('addAwardModal')" class="btn" style="background: #e2e8f0; color: #475569; margin-right: 10px;">Cancel</button>
                    <button type="submit" class="btn">Save Award</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Award Modal -->
    <div id="editAwardModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1000; align-items: center; justify-content: center; overflow-y: auto; padding: 40px 0;">
        <div style="background: #fff; width: 700px; border-radius: 8px; padding: 30px; position: relative; margin: auto;">
            <button type="button" onclick="closeModal('editAwardModal')" style="position: absolute; top: 15px; right: 15px; background: none; border: none; font-size: 1.2rem; cursor: pointer; color: #64748b;"><i class="fa-solid fa-xmark"></i></button>
            <h3 style="margin-top: 0; color: var(--admin-sidebar); margin-bottom: 20px;">Edit Award</h3>
            <form id="editAwardForm" method="POST">
                @csrf
                @method('PUT')
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 15px;">
                    <div>
                        <label style="display: block; font-weight: 600; margin-bottom: 5px; font-size: 0.9rem;">Award Name</label>
                        <input type="text" id="edit_award_name" name="name" required style="width: 100%; padding: 10px; border: 1px solid var(--admin-border); border-radius: 4px;">
                    </div>
                    <div>
                        <label style="display: block; font-weight: 600; margin-bottom: 5px; font-size: 0.9rem;">Sort Order</label>
                        <input type="number" id="edit_award_sort_order" name="sort_order" required style="width: 100%; padding: 10px; border: 1px solid var(--admin-border); border-radius: 4px;">
                    </div>
                </div>
                
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 15px;">
                    <div>
                        <label style="display: block; font-weight: 600; margin-bottom: 5px; font-size: 0.9rem;">Icon Class (FontAwesome)</label>
                        <input type="text" id="edit_award_icon" name="icon" style="width: 100%; padding: 10px; border: 1px solid var(--admin-border); border-radius: 4px;">
                    </div>
                    <div>
                        <label style="display: block; font-weight: 600; margin-bottom: 5px; font-size: 0.9rem;">Icon Color (Hex)</label>
                        <input type="text" id="edit_award_icon_color" name="icon_color" style="width: 100%; padding: 10px; border: 1px solid var(--admin-border); border-radius: 4px;">
                    </div>
                </div>

                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-weight: 600; margin-bottom: 5px; font-size: 0.9rem;">Short Description (For Top Card)</label>
                    <textarea id="edit_award_short_description" name="short_description" rows="2" style="width: 100%; padding: 10px; border: 1px solid var(--admin-border); border-radius: 4px;"></textarea>
                </div>

                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-weight: 600; margin-bottom: 5px; font-size: 0.9rem;">Benefits (One per line. Basic HTML allowed)</label>
                    <textarea id="edit_award_benefits" name="benefits" rows="4" style="width: 100%; padding: 10px; border: 1px solid var(--admin-border); border-radius: 4px; font-family: monospace; font-size: 0.85rem;"></textarea>
                </div>

                <div style="margin-bottom: 15px;">
                    <label style="display: block; font-weight: 600; margin-bottom: 5px; font-size: 0.9rem;">Eligibility Criteria (One per line. Basic HTML allowed)</label>
                    <textarea id="edit_award_eligibility" name="eligibility" rows="4" style="width: 100%; padding: 10px; border: 1px solid var(--admin-border); border-radius: 4px; font-family: monospace; font-size: 0.85rem;"></textarea>
                </div>

                <div style="margin-bottom: 20px;">
                    <label style="display: block; font-weight: 600; margin-bottom: 5px; font-size: 0.9rem;">Guidelines (One per line. Basic HTML allowed)</label>
                    <textarea id="edit_award_guidelines" name="guidelines" rows="4" style="width: 100%; padding: 10px; border: 1px solid var(--admin-border); border-radius: 4px; font-family: monospace; font-size: 0.85rem;"></textarea>
                </div>

                <div style="text-align: right;">
                    <button type="button" onclick="closeModal('editAwardModal')" class="btn" style="background: #e2e8f0; color: #475569; margin-right: 10px;">Cancel</button>
                    <button type="submit" class="btn">Update Award</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openModal(id) {
            document.getElementById(id).style.display = 'flex';
        }
        function closeModal(id) {
            document.getElementById(id).style.display = 'none';
        }
        function editAward(award) {
            document.getElementById('editAwardForm').action = '/admin/awards/' + award.id;
            document.getElementById('edit_award_name').value = award.name;
            document.getElementById('edit_award_sort_order').value = award.sort_order;
            document.getElementById('edit_award_icon').value = award.icon || '';
            document.getElementById('edit_award_icon_color').value = award.icon_color || '';
            document.getElementById('edit_award_short_description').value = award.short_description || '';
            document.getElementById('edit_award_benefits').value = award.benefits || '';
            document.getElementById('edit_award_eligibility').value = award.eligibility || '';
            document.getElementById('edit_award_guidelines').value = award.guidelines || '';
            openModal('editAwardModal');
        }
    </script>
@endsection
