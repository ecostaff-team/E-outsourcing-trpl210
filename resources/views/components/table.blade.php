<div class="overflow-x-auto">
    <table class="w-full text-sm border-separate border-spacing-y-2">

        <thead class="bg-green-100 text-gray-600">
            <tr shadow-sm border border-gray-100>
                @foreach ($columns as $col)
                    <th class="p-2 md:p-3 text-center text-xs md:text-sm whitespace-nowrap">
                        {{ $col['label'] }}
                    </th>
                @endforeach

                @isset($actions)
                    <th class="px-4 py-2 text-center">Aksi</th>
                @endisset
            </tr>
        </thead>

        <tbody class="divide-y">
            @forelse ($rows as $row)
                <tr class="odd:bg-white even:bg-gray-100 shadow-sm hover:bg-green-50 transition cursor-pointer">
                    @foreach ($columns as $col)
                        <td class="p-3 text-center whitespace-nowrap">
                            {{ $row[$col['field']] ?? '-' }}
                        </td>
                    @endforeach

                    @isset($actions)
                        <td class="px-4 py-2 text-center">
                            {!! $actions($row) !!}
                        </td>
                    @endisset
                </tr>
            @empty
                <tr>
                    <td colspan="{{ count($columns) + 1 }}" class="text-center py-4 text-gray-500">
                        Data tidak tersedia
                    </td>
                </tr>
            @endforelse
        </tbody>

    </table>
</div>
