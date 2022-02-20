<x-layout>
    <x-slot name='title'>Home</x-slot>
    <x-slot name='content'>
        <div class="mt-5">
            <div class="text-center">
                <img src="{{asset('img/sidebar.jpg')}}" alt="" class="img-thumbnail" width="250px" height="100px">
            </div>
            <div class="mt-5 text-white mx-5 text-justify">
                <h1 class="fw-bold st-font">Hello</h1>
                <div class="px-4" style="line-height: 2rem">
                    <p style="text-indent: 100px">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia temporibus harum minus sapiente architecto accusantium dolorem, tempora ratione deleniti ea. Dolor explicabo eius doloremque qui.
                    </p>
                </div>
            </div>
            <div class="text-center">
                <a href="{{route('contact')}}" class="btn btn-outline-warning mx-5 my-3">Hire Me</a>
                <a href="{{route('contact')}}" class="btn btn-outline-info mx-5 my-3">Contact</a>
            </div>
        </div>
    </x-slot>
</x-layout>