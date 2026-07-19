<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 border border-gray-200">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">

                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Register your first account
                </h1>

                @if ($errors->any())
                    <div class="mb-4 text-sm text-red-600">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form class="space-y-4 md:space-y-6" action="{{ route('auth.register') }}" method="POST">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">
                            Your name
                        </label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg
                                focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="John Doe" required>
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                            Your email
                        </label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg
                                focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="name@gmail.com" required>
                    </div>

                    <div>
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
                            Password
                        </label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg
                                focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            required>
                    </div>

                    <button type="submit"
                        class="w-full text-white bg-blue-600 hover:bg-blue-700
           focus:ring-4 focus:outline-none focus:ring-blue-300
           font-medium rounded-lg text-sm px-5 py-2.5 text-center cursor-pointer">
                        Sign up
                    </button>


                    <p class="text-sm font-light text-gray-500">
                        Already have an account?
                        <a href="{{ route('auth.login') }}" class="font-medium text-primary-600 hover:underline">
                            Sign in
                        </a>
                    </p>

                </form>
            </div>
        </div>
    </div>
</x-layout>
