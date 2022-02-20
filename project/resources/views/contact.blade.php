<x-layout>
    <x-slot name='title'>Contact</x-slot>
    <x-slot name='content'>
        <div class="container mt-5">
            <h1 class="text-warning mb-5 border-bottom">Contact Us</h1>
            <div class="row text-white mb-5">
                <p class="mx-auto mb-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, laboriosam.
                </p>
                <div class="col-sm-9 mb-5">
                    <form action="">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="inputName">Your Name</label>
                                <input type="text" name="" id="" class="form-control mt-2">
                            </div>
                            <div class="col-md-6">
                                <label for="inputName">Your Email</label>
                                <input type="email" name="" id="" class="form-control mt-2">
                            </div>
                            <div class="col-md-12">
                                <label for="subject">Your Subject</label>
                                <input type="text" name="" id="" class="form-control mt-2">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="subject">Your Message</label>
                                <input type="text" name="" id="" class="form-control mt-2">
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
</x-layout>