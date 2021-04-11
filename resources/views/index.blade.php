<x-app-layout>
    <div class="flex space-x-6 filters">
        <div class="w-1/3">
            <select name="category" id="category" class="w-full px-4 py-2 border-none rounded-xl">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="w-1/3">
            <select name="other_filters" id="other_filters" class="w-full px-4 py-2 border-none rounded-xl">
                <option value="Category One">Category One</option>
                <option value="Category Two">Category Two</option>
                <option value="Category Three">Category Three</option>
                <option value="Category Four">Category Four</option>
            </select>
        </div>
        <div class="relative w-2/3">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>

            </div>
            <input type="search" placeholder="Find an idea" class="w-full px-4 py-2 pl-8 placeholder-gray-900 bg-white border-none rounded-xl">
        </div>
    </div><!--  end filters -->

    <div class="my-6 space-y-6 ideas-container">
        <div class="flex transition duration-150 ease-in bg-white cursor-pointer idea-container hover:shadow-card rounded-xl">
            <div class="px-5 py-8 border-r border-gray-100">
                <div class="text-center">
                    <div class="text-2xl font-semibold">
                        12
                    </div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 px-4 py-3 font-bold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 text-xxs hover:border-gray-400 rounded-xl">vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=1" alt="" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">A random title</a>
                    </h4>
                    <div class="mt-3 text-gray-600 line-clamp-3">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio alias corrupti magni illo, expedita delectus ipsam reiciendis enim eius consequuntur ratione neque saepe commodi nesciunt laborum doloribus explicabo voluptas pariatur.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="px-4 py-2 font-bold leading-none text-center uppercase bg-gray-200 rounded-full text-xxs w-28 h-7">
                                Open
                            </div>
                            <button class="relative px-3 py-1 leading-loose text-gray-400 transition duration-150 ease-in bg-gray-100 rounded-full pb-7 hover:bg-gray-200 h-7">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="absolute py-3 ml-8 font-semibold text-left bg-white shadow-dialog w-44 rounded-xl">
                                    <li>
                                        <a href="#" class="block px-5 py-3 transition duration-150 hover:bg-gray-100">Mark as Spam</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-5 py-3 transition duration-150 hover:bg-gray-100">Delete</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="my-6 space-y-6 ideas-container">
        <div class="flex transition duration-150 ease-in bg-white cursor-pointer idea-container hover:shadow-card rounded-xl">
            <div class="px-5 py-8 border-r border-gray-100">
                <div class="text-center">
                    <div class="text-2xl font-semibold text-blue">
                        42
                    </div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 px-4 py-3 font-bold text-white uppercase transition duration-150 ease-in border border-gray-200 text-xxs hover:border-gray-400 rounded-xl bg-blue">voted</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=2" alt="" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">More randomness in titles goes here</a>
                    </h4>
                    <div class="mt-3 text-gray-600 line-clamp-3">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio alias corrupti magni illo, expedita delectus ipsam reiciendis enim eius consequuntur ratione neque saepe commodi nesciunt laborum doloribus explicabo voluptas pariatur.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                            <div>2 days ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">22 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="px-4 py-2 font-bold leading-none text-center text-white uppercase rounded-full bg-yellow text-xxs w-28 h-7">
                                In Progress
                            </div>
                            <button class="relative px-3 py-1 leading-loose text-gray-400 transition duration-150 ease-in bg-gray-100 rounded-full pb-7 hover:bg-gray-200 h-7">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="absolute py-3 ml-8 font-semibold text-left bg-white shadow-dialog w-44 rounded-xl">
                                    <li>
                                        <a href="#" class="block px-5 py-3 transition duration-150 hover:bg-gray-100">Mark as Spam</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-5 py-3 transition duration-150 hover:bg-gray-100">Delete</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="my-6 space-y-6 ideas-container">
        <div class="flex transition duration-150 ease-in bg-white cursor-pointer idea-container hover:shadow-card rounded-xl">
            <div class="px-5 py-8 border-r border-gray-100">
                <div class="text-center">
                    <div class="text-2xl font-semibold">
                        3
                    </div>
                    <div class="text-gray-500">Votes</div>
                </div>

                <div class="mt-8">
                    <button class="w-20 px-4 py-3 font-bold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 text-xxs hover:border-gray-400 rounded-xl">vote</button>
                </div>
            </div>
            <div class="flex px-2 py-6">
                <a href="#" class="flex-none">
                    <img src="https://source.unsplash.com/200x200/?face&crop=face&v=3" alt="" class="w-14 h-14 rounded-xl">
                </a>
                <div class="mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="hover:underline">More randomness in titles goes here</a>
                    </h4>
                    <div class="mt-3 text-gray-600 line-clamp-3">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio alias corrupti magni illo, expedita delectus ipsam reiciendis enim eius consequuntur ratione neque saepe commodi nesciunt laborum doloribus explicabo voluptas pariatur.
                    </div>
                    <div class="flex items-center justify-between mt-6">
                        <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                            <div>2 days ago</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">22 Comments</div>
                        </div>
                        <div class="flex items-center space-x-2">
                            <div class="px-4 py-2 font-bold leading-none text-center text-white uppercase rounded-full bg-red text-xxs w-28 h-7">
                                Closed
                            </div>
                            <button class="relative px-3 py-1 leading-loose text-gray-400 transition duration-150 ease-in bg-gray-100 rounded-full pb-7 hover:bg-gray-200 h-7">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                </svg>
                                <ul class="absolute py-3 ml-8 font-semibold text-left bg-white shadow-dialog w-44 rounded-xl">
                                    <li>
                                        <a href="#" class="block px-5 py-3 transition duration-150 hover:bg-gray-100">Mark as Spam</a>
                                    </li>
                                    <li>
                                        <a href="#" class="block px-5 py-3 transition duration-150 hover:bg-gray-100">Delete</a>
                                    </li>
                                </ul>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
