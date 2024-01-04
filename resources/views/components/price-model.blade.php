<!-- Button trigger modal -->


<!-- Modal -->
{{-- <div class="modal top fade" id="price" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-mdb-backdrop="true" data-mdb-keyboard="true">
    <div class="modal-dialog  ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Buy Book</h5>
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group-light">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <img src="{{ $book->image }}" alt="" width="150px" height="200px" />

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        title
                        <span class="badge badge-primary rounded-pill fs-6">{{ $book->title }}</span>
                    </li>

                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        ggcoin
                        <span class="badge badge-primary rounded-pill fs-7"><i
                                class="fa-brands fa-gg-circle text-primary"></i>{{ $book->ggcoin }}</span>
                    </li>
                </ul>

            </div>

        </div>
    </div>
</div> --}}


<div id="popup-modal" tabindex="-1"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full bg-slate-200/20 backdrop-blur-sm">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow ">
            <button type="button"
                class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center"
                data-modal-hide="popup-modal">
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="p-4 md:p-5 text-center">

                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                </svg>

                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete
                    this product?</h3>

                <form class="flex gap-3 justify-center" action="/books/{{ $book->slug }}/buy" method="POST">
                    @csrf
                    <button data-modal-hide="popup-modal" type="submit"
                        class="text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center me-2">
                        Yes, I'm sure
                    </button>
                    <button data-modal-hide="popup-modal" type="button"
                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">No,
                        cancel</button>

                </form>


            </div>
        </div>
    </div>
</div>
