<x-layout>
    <x-slot:heading>
        Polling Stations
    </x-slot:heading>

        <table class="min-w-full bg-white border border-gray-200">
            <thead class='bg-gray-200 text-gray-600 uppercase text-sm sticky top-0 z-10'>
                <tr >
                    <th class="border border-gray-300 px-4 py-2">Ps_Code</th>
                    <th class="border border-gray-300 px-4 py-2">Polling Station</th>
                    <th class="border border-gray-300 px-4 py-2">Polling District</th>
                    <th class="border border-gray-300 px-4 py-2">Constituency</th>
                    {{-- <th class="border border-gray-300 px-4 py-2">Country</th> --}}
                </tr>
            </thead>
            <tbody class="text-left">
                @foreach ($pollingStations as $station)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $station['Ps_Code'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $station['Ps_Name'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $station['Pd_Name'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $station['C_Name'] }}</td>
                        {{-- <td class="border border-gray-300 px-4 py-2">{{ $station['C_Code'] }}</td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-layout>
