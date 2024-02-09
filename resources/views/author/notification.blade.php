<x-author-layout>
    <!-- component -->
    {{-- @dd($notifications) --}}
    <style>
        .main {
            padding: 30px
        }
    </style>
    <div class="bg-white  rounded-md w-full p-4">
        {{-- @dd($notifications) --}}
        <h1 class="text-2xl mb-5">Notifications</h1>
        <table class="table-auto border-collapse w-full p-5">
            <tbody class="text-sm font-normal text-gray-700 w-full">
                @foreach ($notifications as $noti)
                    <tr class="hover:bg-gray-100 border-b border-gray-200 py-4 bg-blue-100 cursor-pointer">
                        <td class="px-4 py-4 flex items-center gap-5">
                            <i class="fas fa-circle text-blue-400"></i>
                            <div class="rounded-full overflow-hidden">
                                <img src="{{ $noti->user->imageUrl }}" alt="" class="w-[50px] h-[50px]">
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="flex items-center gap-2">
                                    <h3>{{ $noti->user->name }}</h3>
                                    <p>{{ $noti->about }}</p>
                                </div>
                                <span>{{ $noti->created_at->diffForHumans() }}</span>
                            </div>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</x-author-layout>
