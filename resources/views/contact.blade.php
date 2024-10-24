<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container d-flex justify-content-center align-items-center">
        <div class="card p-4 shadow-lg border-0" style="width: 100%; max-width: 500px; border-radius: 15px;">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            <form action="{{ route('send.email') }}" method="POST">
                @csrf
    
                <div class="form-group mb-3">
                    <label for="user_email" class="form-label">Your Email</label>
                    <input type="email" name="user_email" class="form-control" id="user_email" placeholder="Enter your email" required style="border-radius: 10px;">
                </div>
    
                <div class="form-group mb-4">
                    <label for="message" class="form-label">Message</label>
                    <textarea name="message" class="form-control" id="message" rows="5" placeholder="Enter your message" required style="border-radius: 10px;"></textarea>
                </div>
    
                <button type="submit" class="btn btn-primary w-100" style="border-radius: 10px; transition: 0.3s;">Send Message</button>
            </form>
        </div>
    </div>
    
    <style>
        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>
    

    <hr class="featurette-divider">

</x-layout>
