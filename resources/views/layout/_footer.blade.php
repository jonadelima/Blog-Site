<footer class="footer bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="">
                    <h5 class="text-primary">About Us</h5>
                </a>
                <p>We are a travel blog dedicated to providing the best travel tips, guides, and experiences...</p>
                @if(!Auth::check())
                    <a href="{{ route('register') }}" class="btn btn-primary text-decoration-none">
                        <h5 class="m-0 text-light">Signup</h5>
                    </a>
                @endif
            </div>
            <div class="col-md-4">
                <h5>Contact</h5>
                <p>Email: info@travelblog.com</p>
                <p>Phone: +123 456 7890</p>
            </div>
            <div class="col-md-4">
                <h5>Follow Us</h5>
                <a href="#" class="text-white me-2"><i class="fab fa-facebook"></i> Facebook</a>
                <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i> Twitter</a>
                <a href="#" class="text-white"><i class="fab fa-instagram"></i> Instagram</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col text-center">
                <p>© 2025 All rights reserved</p>
            </div>
        </div>
    </div>
</footer>