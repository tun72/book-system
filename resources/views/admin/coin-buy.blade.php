<x-admin-layout>
    <h4 class="text-xl mb-4">
        Coin Requests
    </h4>
    @if (count($transfers) > 0)
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            UserName
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Account Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Payment Method
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Coins
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transfers as $transfer)
                        @if ($transfer->user)
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $transfer->user->name }}
                                </th>

                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $transfer->user->username }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $transfer->accname }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $transfer->payment }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $transfer->ggcoin }} coins
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="#"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                        id="readProductButton" data-modal-target="coinModal-{{ $transfer->id }}"
                                        data-modal-toggle="coinModal-{{ $transfer->id }}">Detail</a>
                                </td>
                            </tr>
                            <x-coin-check-modal :transfer="$transfer"  />
                        @endif
                    @endforeach

                </tbody>
            </table>
        </div>
    @else
        <p>No Transfer for today Chief 🪲</p>

    @endif

</x-admin-layout>
