@extends('layouts.admin_cms')

@section('header_title', 'Registration Settings')

@section('content')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
        <h2 style="color: var(--admin-sidebar); font-size: 1.5rem;">Registration Page Settings</h2>
        <p style="color: #64748b; font-size: 0.9rem;">Manage the content and fields displayed on the Registration page.</p>
    </div>

    @if(session('success'))
        <div style="background: rgba(164, 198, 57, 0.15); border-left: 4px solid var(--admin-green); padding: 15px; margin-bottom: 25px; border-radius: 4px; color: #627722;">
            <i class="fa-solid fa-circle-check" style="margin-right: 5px;"></i> {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('admin.settings.registration.update') }}">
        @csrf
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(400px, 1fr)); gap: 30px;">
            
            @foreach(['registration' => 'Registration Page Content', 'reg_fields' => 'Registration Form Fields'] as $groupKey => $groupName)
                @if(isset($settings[$groupKey]))
                    <div class="card" style="margin-bottom: 0;">
                        <h3 style="color: var(--admin-sidebar); font-size: 1.2rem; margin-bottom: 20px; padding-bottom: 10px; border-bottom: 1px solid var(--admin-border);">{{ $groupName }}</h3>
                        
                        @foreach($settings[$groupKey] as $setting)
                            @if($setting->key !== 'reg_interested_options')
                                <div style="margin-bottom: 20px;">
                                    <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px; font-size: 0.9rem;">{{ $setting->label ?? ucfirst(str_replace('_', ' ', $setting->key)) }}</label>
                                    
                                    @if($setting->type == 'textarea')
                                        <textarea name="{{ $setting->key }}" style="width: 100%; padding: 12px 15px; border: 1px solid var(--admin-border); border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 0.95rem;" rows="4">{{ old($setting->key, $setting->value) }}</textarea>
                                    @else
                                        <input type="text" name="{{ $setting->key }}" value="{{ old($setting->key, $setting->value) }}" style="width: 100%; padding: 12px 15px; border: 1px solid var(--admin-border); border-radius: 8px; font-family: 'Poppins', sans-serif; font-size: 0.95rem;">
                                    @endif
                                </div>
                            @endif
                        @endforeach
                    </div>
                @endif
            @endforeach
            
        </div>

        <div style="margin-top: 30px; text-align: right;">
            <button type="submit" class="btn btn-primary" style="padding: 12px 30px; font-size: 1.05rem;">
                <i class="fa-solid fa-save"></i> Save Registration Settings
            </button>
        </div>
    </form>

    <div style="margin-top: 50px;">
        <h2 style="color: var(--admin-sidebar); font-size: 1.5rem; margin-bottom: 10px;">Dropdown Options: "Interested In"</h2>
        <p style="color: #64748b; font-size: 0.9rem; margin-bottom: 25px;">Manage the list of options available in the 'Select Interested In' dropdown on the registration form.</p>

        <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 30px;">
            <div class="card" style="align-self: start;">
                <h3 style="font-size: 1.2rem; color: var(--admin-sidebar); margin-bottom: 20px; padding-bottom: 10px; border-bottom: 1px solid var(--admin-border);">Add New Option</h3>
                
                <form action="{{ route('admin.interest_options.store') }}" method="POST">
                    @csrf
                    <div style="margin-bottom: 15px;">
                        <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">Option Name <span style="color: #ef4444;">*</span></label>
                        <input type="text" name="name" required placeholder="e.g., Virtual Attendee" style="width: 100%; padding: 12px; border: 1px solid var(--admin-border); border-radius: 8px;">
                    </div>
                    
                    <div style="margin-bottom: 25px;">
                        <label style="display: block; font-weight: 600; color: var(--admin-text); margin-bottom: 8px;">Sort Order</label>
                        <input type="number" name="sort_order" value="0" style="width: 100%; padding: 12px; border: 1px solid var(--admin-border); border-radius: 8px;">
                    </div>

                    <button type="submit" class="btn btn-primary" style="width: 100%;">Add Option</button>
                </form>
            </div>

            <div class="card">
                <table style="width: 100%; border-collapse: collapse; text-align: left;">
                    <thead>
                        <tr>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 600; font-size: 0.85rem; text-transform: uppercase;">Option Name</th>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; width: 100px;">Sort</th>
                            <th style="padding: 15px; border-bottom: 2px solid var(--admin-border); color: #64748b; font-weight: 600; font-size: 0.85rem; text-transform: uppercase; width: 100px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($interestOptions as $option)
                            <tr style="border-bottom: 1px solid var(--admin-border);">
                                <td style="padding: 15px; font-weight: 600; color: var(--admin-sidebar);">{{ $option->name }}</td>
                                <td style="padding: 15px; color: var(--admin-text);">{{ $option->sort_order }}</td>
                                <td style="padding: 15px;">
                                    <form method="POST" action="{{ route('admin.interest_options.delete', $option->id) }}" onsubmit="return confirm('Delete this option?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn" style="background: rgba(239, 68, 68, 0.1); color: #ef4444; border: 1px solid #ef4444; padding: 6px 12px; font-size: 0.85rem; border-radius: 4px; cursor: pointer;">
                                            <i class="fa-solid fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" style="padding: 20px; text-align: center; color: var(--admin-text);">No options defined yet.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
