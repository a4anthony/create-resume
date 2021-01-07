<div class="container mx-auto">
    <div class="h-70-full flex">
        <div class="rounded m-auto bg-white lander w-full p-12">
            {{--<logo dark />--}}
            @livewire('logo',['darkMode'=>true])
            <div class="text-center w-full sm:w-1/2 mx-auto mt-12">
                <p class="text-gray-800 font-bold text-center px-0 sm:px-8">
                    An online tool that helps you <br/>
                    generate and download PDF formats of your resume by
                    simply filling out a form.
                </p>
            </div>
            <div class="text-center mt-12">
                <a
                    href="/create"
                    class="text-white font-bold py-2 px-4 rounded border-2 create--btn"
                >
                    Get Started
                    <span class="ml-4">
                     <i class="fas fa-chevron-right"></i>
                        </span>
                </a>
            </div>
        </div>
    </div>

    <style>
        .create--btn {
            border-color: #0f5583;
            color: #0f5583;
        }

        .create--btn:hover {
            color: white;
            background: #0f5583;
        }

        .lander {
            opacity: 0.95;
        }

        .h-70-full {
            height: 95vh;
        }
    </style>
</div>
