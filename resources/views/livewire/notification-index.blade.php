<section class="container px-4 mx-auto mt-5">
    <div class="sm:flex sm:items-center sm:justify-center">
            <h1 class="px-4 mt-5 text-5xl font-normal text-center text-gray-500 dark:text-gray-400">Notification</h1>
    </div>

    <div class="mt-6 md:flex md:items-center md:justify-between">
        <div class="inline-flex overflow-hidden bg-white border divide-x rounded-lg dark:bg-gray-900 rtl:flex-row-reverse dark:border-gray-700 dark:divide-gray-700">
            <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 bg-gray-100 sm:text-sm dark:bg-gray-800 dark:text-gray-300">
                View all
            </button>

            <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                Read
            </button>

            <button class="px-5 py-2 text-xs font-medium text-gray-600 transition-colors duration-200 sm:text-sm dark:hover:bg-gray-800 dark:text-gray-300 hover:bg-gray-100">
                Unread
            </button>
        </div>

        <div class="relative flex items-center mt-4 md:mt-0">
            <span class="absolute">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 mx-3 text-gray-400 dark:text-gray-600">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                </svg>
            </span>

            <input type="text" placeholder="Search" class="block w-full py-1.5 pr-5 text-gray-700 bg-white border border-gray-200 rounded-lg md:w-80 placeholder-gray-400/70 pl-11 rtl:pr-11 rtl:pl-5 dark:bg-gray-900 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:outline-none focus:ring focus:ring-opacity-40">
        </div>
    </div>

    <div class="flex flex-col mt-6">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                <div class="overflow-hidden border border-gray-200 dark:border-gray-700 rounded-lg mx-3">
                    <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                        <thead class="bg-gray-50 dark:bg-gray-800">
                            <tr>
                                <th scope="col" class="hidden md:inline-flex px-12 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Status
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                    Sender
                                </th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">Message</th>

                                <th scope="col" class="px-4 py-3.5 text-sm font-normal hidden lg:inline-flex text-left rtl:text-right text-gray-500 dark:text-gray-400">Date/time</th>

                                <th scope="col" class="relative py-3.5 px-4">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
                            <tr>
                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap hidden md:inline-flex">
                                    <div class="inline px-3 py-1 text-sm font-normal rounded-full text-emerald-500 gap-x-2 bg-emerald-100/60 dark:bg-gray-800">
                                        Read
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Teacher name</h2>    
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div>
                                        <h4 class="text-gray-700 dark:text-gray-200">Activity Schdule</h4>
                                        <p class="text-gray-500 dark:text-gray-400">Saturday morning...</p>
                                    </div>
                                </td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap hidden lg:inline-flex">
                                    <h2 class="text-sm font-medium text-gray-800 dark:text-white ">04-07-2023 / 07:30</h2>  
                                </td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <button class="px-3 py-2 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-600">
                                        <h2 wire:click="showPostModal" class="text-sm font-medium text-gray-800 dark:text-white ">View</h2>  
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap hidden md:inline-flex">
                                    <div class="inline px-3 py-1 text-sm font-normal text-gray-500 bg-gray-100 rounded-full dark:text-gray-400 gap-x-2 dark:bg-gray-800">
                                        Unread
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Teacher name</h2>  
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div>
                                        <h4 class="text-gray-700 dark:text-gray-200">Activity Schedule</h4>
                                        <p class="text-gray-500 dark:text-gray-400">Saturday afternoon...</p>
                                    </div>
                                </td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap hidden lg:inline-flex">
                                    <h2 class="text-sm font-medium text-gray-800 dark:text-white ">04-01-2023 / 10:30</h2>  
                                </td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <button class="px-3 py-2 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-600">
                                        <h2 wire:click="showPostModal" class="text-sm font-medium text-gray-800 dark:text-white ">View</h2>  
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap hidden md:inline-flex">
                                    <div class="inline px-3 py-1 text-sm font-normal rounded-full text-emerald-500 gap-x-2 bg-emerald-100/60 dark:bg-gray-800">
                                        Read
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Admin name</h2>  
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div>
                                        <h4 class="text-gray-700 dark:text-gray-200">Incoming Activity</h4>
                                        <p class="text-gray-500 dark:text-gray-400">Bring you own food...</p>
                                    </div>
                                </td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap hidden lg:inline-flex">
                                    <h2 class="text-sm font-medium text-gray-800 dark:text-white ">03-29-2023 / 15:35</h2>  
                                </td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <button class="px-3 py-2 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-600">
                                        <h2 wire:click="showPostModal" class="text-sm font-medium text-gray-800 dark:text-white ">View</h2>  
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap hidden md:inline-flex">
                                    <div class="inline px-3 py-1 text-sm font-normal text-gray-500 bg-gray-100 rounded-full dark:text-gray-400 gap-x-2 dark:bg-gray-800">
                                        Unread
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Teacher name</h2>  
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div>
                                        <h4 class="text-gray-700 dark:text-gray-200">Midterm Exam</h4>
                                        <p class="text-gray-500 dark:text-gray-400">Please be prepare...</p>
                                    </div>
                                </td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap hidden lg:inline-flex">
                                    <h2 class="text-sm font-medium text-gray-800 dark:text-white ">03-25-2023 / 13:15</h2>  
                                </td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <button class="px-3 py-2 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-600">
                                        <h2 wire:click="showPostModal" class="text-sm font-medium text-gray-800 dark:text-white ">View</h2>  
                                    </button>
                                </td>
                            </tr>

                            <tr>
                                <td class="px-12 py-4 text-sm font-medium whitespace-nowrap hidden md:inline-flex">
                                    <div class="inline px-3 py-1 text-sm font-normal rounded-full text-emerald-500 gap-x-2 bg-emerald-100/60 dark:bg-gray-800">
                                        Read
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div class="flex items-center">
                                        <h2 class="text-sm font-medium text-gray-800 dark:text-white ">Admin name</h2>  
                                    </div>
                                </td>
                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <div>
                                        <h4 class="text-gray-700 dark:text-gray-200">Lacking of requirements</h4>
                                        <p class="text-gray-500 dark:text-gray-400">Registration form...</p>
                                    </div>
                                </td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap hidden lg:inline-flex">
                                    <h2 class="text-sm font-medium text-gray-800 dark:text-white ">03-20-2023 / 09:07</h2>  
                                </td>

                                <td class="px-4 py-4 text-sm whitespace-nowrap">
                                    <button wire:click="showPostModal" class="px-3 py-2 text-gray-500 transition-colors duration-200 rounded-lg dark:text-gray-300 hover:bg-gray-600">
                                        <h2  class="text-sm font-medium text-gray-800 dark:text-white ">View</h2>  
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-6 sm:flex sm:items-center sm:justify-between ">
        <div class="text-sm text-gray-500 dark:text-gray-400">
            Page <span class="font-medium text-gray-700 dark:text-gray-100">1 of 10</span> 
        </div>

        <div class="flex items-center mt-4 gap-x-4 sm:mt-0">
            <a href="#" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                </svg>

                <span>
                    previous
                </span>
            </a>

            <a href="#" class="flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 bg-white border rounded-md sm:w-auto gap-x-2 hover:bg-gray-100 dark:bg-gray-900 dark:text-gray-200 dark:border-gray-700 dark:hover:bg-gray-800">
                <span>
                    Next
                </span>

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 rtl:-scale-x-100">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                </svg>
            </a>
        </div>
    </div>
</section>


<x-dialog-modal wire:model="showingPostModal" class="border border-sky-500">
    <x-slot name="title">
        <h2 class="text-4xl font-medium text-gray-800 dark:text-white ">Message Title</h2>  
    </x-slot>
    <x-slot name="content">
            <h2 class="text-2xl font-medium text-gray-800 dark:text-white ">Teacher Name</h2>  
            <h2 class="text-sm font-medium text-gray-600 dark:text-white mb-5">sender</h2>  
            <h2 class="text-2xl font-medium text-gray-800 dark:text-white ">Message</h2>  
            <h2 class="text-sm font-medium text-gray-600 dark:text-white ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium doloremque eaque ratione enim eum aliquid quasi, aliquam sit dolorem! Voluptatum dolores ea, molestiae atque culpa minus est dicta aperiam cupiditate.
            Harum animi suscipit perspiciatis nostrum et nulla repudiandae fugiat, distinctio optio accusantium cupiditate beatae porro neque sit officiis iusto rem, culpa maxime ratione quod delectus a in ducimus natus! Optio.
            Nesciunt sint deserunt maiores quia architecto totam, ipsam, pariatur tempora perferendis doloribus nostrum nobis, quaerat optio qui velit similique placeat rerum modi accusamus sed? Recusandae, est saepe! Molestias, necessitatibus delectus?
            Suscipit vero sunt, iure assumenda laboriosam asperiores maiores error ea omnis dolore deserunt vitae laborum aut! Consequuntur consectetur hic a totam numquam nesciunt tenetur ratione, omnis sint officiis, quisquam iusto!
            Assumenda repellendus atque aut ipsam blanditiis voluptate, eos officiis, minus ab exercitationem ea, dolores autem qui quae impedit tempore similique minima nulla deleniti voluptatibus architecto! Temporibus nemo repudiandae eligendi doloremque!</h2>  
              
    </x-slot>
    <x-slot name="footer">
        <x-button wire:click="updatePost" class="mx-2">Reply</x-button>
        <x-button wire:click="updatePost" class="mx-2">Close</x-button>
    </x-slot>
</x-dialog-modal>