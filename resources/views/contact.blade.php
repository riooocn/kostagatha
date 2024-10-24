<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container d-flex justify-content-center align-items-center" style="height: 50vh;">
    <div class="card p-4 shadow-lg border-0 bg-dark text-white" 
         style="width: 100%; max-width: 600px; max-height: 800px; border-radius: 15px;">
         
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('send.email') }}" method="POST">
                @csrf

                <div class="form-group mb-3">
                    <label for="user_email" class="form-label">Your Email</label>
                    <input type="email" name="user_email" class="form-control bg-secondary text-white" 
                        id="user_email" placeholder="Enter your email" required 
                        style="border-radius: 10px; border: none;">
                </div>

                <div class="form-group mb-4">
                    <label for="message" class="form-label">Message</label>
                    <textarea name="message" class="form-control bg-secondary text-white" 
                            id="message" rows="5" placeholder="Enter your message" required 
                            style="border-radius: 10px; border: none;"></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100" 
                        style="border-radius: 10px; transition: 0.3s;">
                    Send Message
                </button>
            </form>
        </div>
    </div>

    
    <style>
        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }
    </style>
    

    <!-- Footer -->
    <div class="container">
            <footer class="d-flex flex-wrap justify-content-between
            align-items-center py-3 my-4 border-top">
        </div>

</x-layout>
