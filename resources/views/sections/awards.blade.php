<!-- Conference Awards Section -->
<section class="awards-section" style="background-color: #ffffff; padding: 70px 0 50px 0; font-family: 'Inter', system-ui, -apple-system, sans-serif;">
    <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
        
            <!-- Centered Header -->
        <div class="section-header-center" style="text-align: center; margin-bottom: 50px;">
            <h2 class="section-title" style="margin-top: 0; margin-bottom: 14px; color: #0f172a; font-weight: 800; font-size: 2.2rem; text-transform: uppercase; tracking: -0.5px;">
                Conference Awards
            </h2>
            <div class="header-line" style="width: 60px; height: 3px; background-color: #009688; margin: 0 auto 16px auto; border-radius: 2px;"></div>
            <p class="participants-desc" style="max-width: 750px; margin: 0 auto; color: #64748b; font-size: 1.05rem; line-height: 1.6;">
                Celebrating exceptional scholastic achievements, research excellence, and entrepreneurial vision with cash prizes and distiction.
            </p>
        </div>

        <!-- Awards Grid -->
        <div class="awards-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; justify-content: center; max-width: 1100px; margin: 0 auto;">
            
            @php
                $awards = \App\Models\Award::orderBy('sort_order')->get();
                $prizes = [
                    'Best Scholar Award' => '₹10,000',
                    'Best Researcher Award' => '₹25,000',
                    'Entrepreneur Award' => '₹25,000'
                ];
            @endphp

            @foreach($awards as $award)
            @php
                $prize = $prizes[$award->name] ?? null;
            @endphp
            <!-- Award Card -->
            <div class="awards-card" style="background: #ffffff; padding: 40px 30px; border-radius: 16px; display: flex; flex-direction: column; align-items: center; text-align: center; box-shadow: 0 10px 30px rgba(15, 23, 42, 0.05); border: 1px solid #e2e8f0; position: relative; overflow: hidden; transition: transform 0.3s ease, box-shadow 0.3s ease;" onmouseover="this.style.transform='translateY(-6px)'; this.style.boxShadow='0 20px 40px rgba(15, 23, 42, 0.08)'" onmouseout="this.style.transform='none'; this.style.boxShadow='0 10px 30px rgba(15, 23, 42, 0.05)'">
                
                <!-- Icon circle -->
                <div class="awards-icon-wrapper" style="width: 75px; height: 75px; border-radius: 50%; background: #e6f4f1; border: 1px solid #b2dfdb; display: flex; justify-content: center; align-items: center; margin-bottom: 22px;">
                    <i class="{{ $award->icon ?? 'fa-solid fa-award' }}" style="font-size: 2.2rem; color: #009688;"></i>
                </div>

                <h3 class="awards-title" style="margin: 0 0 10px 0; color: #0f172a; font-size: 1.4rem; font-weight: 800; line-height: 1.3;">{{ $award->name }}</h3>
                
                @if($prize)
                <div style="margin-bottom: 16px; background: #0f172a; color: #ffffff; padding: 5px 16px; border-radius: 20px; font-weight: 700; font-size: 0.9rem; display: inline-flex; align-items: center; gap: 6px;">
                    Cash Prize: {{ $prize }}
                </div>
                @endif

                <p class="awards-desc" style="margin: 0 0 20px 0; color: #475569; font-size: 0.95rem; line-height: 1.6;">
                    {{ Str::limit(str_replace(['Cash Prize: ₹10,000', 'Cash Prize: ₹25,000'], '', $award->short_description), 140) }}
                </p>

                <a href="/awards#award-{{ $award->id }}" style="margin-top: auto; padding: 10px 20px; background: #f8fafc; border: 1px solid #cbd5e1; border-radius: 8px; color: #009688; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 6px; font-size: 0.88rem; transition: background 0.2s;" onmouseover="this.style.background='#e6f4f1'" onmouseout="this.style.background='#f8fafc'">
                    View Benefits & Guidelines <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>
            @endforeach

        </div>

    </div>
</section>
