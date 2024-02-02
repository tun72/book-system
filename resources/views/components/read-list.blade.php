@props(['book'])

@php
    $index = $book->id;
@endphp

{{-- @dd($book) --}}


<div class="relative w-full select-none shadow-xl">
    <div id="dropdown-example-{{ $index }}"
        class="absolute right-0 z-10  w-[14rem]  flex-col items-center  origin-top-right  rounded-md hidden bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">

        <form action="#" class="addReadList w-full">
            <input type="hidden" value="{{ $index }}">
            <div class="flex justify-between items-center gap-4 py-1 px-2">
                <label for="input-group-search" class="opacity-0">Add</label>
                <h5 class="text-base">Add to</h5>
                <button data-modal-hide="dropdown-example-{{ $book->id }}">Done</button>
            </div>
            <ul class="h-[8rem] overflow-y-scroll overflow-x-hidden w-full text-sm text-gray-700 dark:text-gray-200 readlists">
                @foreach ($readlists as $readlist)
                    <li>
                        <div class="flex items-center rounded hover:bg-gray-100 dark:hover:bg-gray-600 p-1">
                            <label for="checkbox-item-{{ $readlist->id }}-{{ $index }}"
                                class="w-full py-2 ms-2 text-sm font-medium text-gray-900 rounded dark:text-gray-300"><i
                                    class="fas fa-clone mr-2"></i>{{ $readlist->title }}</label>
                            <input id="checkbox-item-{{ $readlist->id }}-{{ $index }}" type="checkbox"
                                value="{{ $readlist->id }}" name="readlist[]"
                                class="checkbox-item-{{ $index }} w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500"
                                {{ $readlist->isInreadLists($book) ? 'checked' : '' }} />
                        </div>
                    </li>
                @endforeach
            </ul>
        </form>

        <form class="p-3 newReadList relative flex gap-3 items-center  w-full" action="#">
            <input type="hidden" value="{{ $index }}">
            <input type="hidden" value="{{ auth()->user()?->id }}" class="userId-{{ $index }}">
            <input type="text" id="readlist"
                class="block w-full p-2 newreadlist-{{ $index }} text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Add to new read lists...">

            <button class="bg-white cursor-pointer border-none outline-none" type="submit">
                <i class="fas fa-plus-circle text-lg"></i>
            </button>

        </form>
    </div>
</div>
