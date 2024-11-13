<x-layout>
    <x-slot:heading>
        Constituencies
</x-slot:heading>

        <table class="min-w-full bg-white border border-gray-200">
            <thead class='bg-gray-200 text-gray-600 uppercase text-sm sticky top-0 z-10'>
                <tr >
                    <th class="border border-gray-300 px-4 py-2">Constituency Code</th>
                    <th class="border border-gray-300 px-4 py-2">Constituency</th>
                    <th class="border border-gray-300 px-4 py-2">No. of Districts</th>
                   <th class="border border-gray-300 px-4 py-2">Country</th>
                </tr>
            </thead>
            <tbody class="text-left">
                @foreach ($constituencies as $constituency)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $constituency['C_Code'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $constituency['C_Name'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $constituency[''] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $station[''] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-layout>
