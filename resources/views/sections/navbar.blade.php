<!-- Navbar -->
<nav class="navbar">
    <a href="/" class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="BioMed Summit Logo" class="navbar-logo">
    </a>
    
    <div class="nav-links">
        <a href="/">Home</a>
        <div class="nav-dropdown">
            <a href="#">About</a>
            <div class="nav-dropdown-content">
                <a href="{{ route('committee') }}">Committee</a>
                <a href="{{ route('about-organizer') }}">About Organizer</a>
            </div>
        </div>
        <div class="nav-dropdown">
            <a href="#">Experts</a>
            <div class="nav-dropdown-content">
                <a href="{{ route('plenary-speakers') }}">Plenary Speakers</a>
                <a href="{{ route('keynote-speakers') }}">Keynote Speakers</a>
                <a href="{{ route('invited-speakers') }}">Invited Speakers</a>
                <a href="#">Program</a>
            </div>
        </div>
        <div class="nav-dropdown">
            <a href="#">Abstract</a>
            <div class="nav-dropdown-content">
                <a href="{{ route('submit-paper') }}">Submit A Paper</a>
                <a href="{{ route('topics') }}">Topics</a>
                <a href="{{ route('guidelines') }}">Guidelines</a>
            </div>
        </div>
        <a href="{{ route('sponsors') }}">Sponsors</a>
        <a href="{{ route('awards') }}">Awards</a>
        <a href="{{ route('key-dates') }}">Key Dates</a>
        <a href="{{ route('venue') }}">Venue</a>
    </div>
    
    <a href="{{ route('registration') }}" class="btn btn-green">REGISTER <i class="fa-solid fa-arrow-right"></i></a>
</nav>
