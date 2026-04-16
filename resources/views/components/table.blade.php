<div class="overflow-x-auto bg-white rounded-2xl shadow">
    <table class="min-w-full text-sm text-left">

        <thead class="bg-gray-100 text-gray-700 uppercase text-xs">
            <tr>
                @foreach ($columns as $col)
                    <th class="px-4 py-2">
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
                <tr>
                    @foreach ($columns as $col)
                        <td class="px-4 py-2">
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
