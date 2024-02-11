<x-admin-layout>
    <h4 class="text-xl mb-4">
        Coin Requests
    </h4>
    @if (count($sells) > 0)
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
                            Status
                        </th>

                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sells as $sell)
                        <tr
                            class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $sell->user->name }}
                            </th>

                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $sell->user->username }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $sell->user->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $sell->payment }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $sell->ggcoin }} coins
                            </td>
                            <td class="px-6 py-4">
                                {{ $sell->status }}
                            </td>
                            <td class="px-6 py-4 text-right">
                                <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                    id="readProductButton" data-modal-target="coinModal-{{ $sell->id }}"
                                    data-modal-toggle="coinModal-{{ $sell->id }}">Detail</a>
                            </td>
                        </tr>
                        <x-coin-sell-modal :sell="$sell" />
                    @endforeach

                </tbody>
            </table>
        </div>
    @else
        <p>No Transfer for today Chief 🪲</p>

    @endif
</x-admin-layout>
