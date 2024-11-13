<x-layout>
    <x-slot:heading>
        Polling Districts
    </x-slot:heading>

        <table class="min-w-full bg-white border border-gray-200">
            <thead class='bg-gray-200 text-gray-600 uppercase text-sm sticky top-0 z-10'>
                <tr >
                    <th class="border border-gray-300 px-4 py-2">Pd_Code</th>
                    <th class="border border-gray-300 px-4 py-2">Polling District</th>
                    <th class="border border-gray-300 px-4 py-2">No. of Stations</th>
                    <th class="border border-gray-300 px-4 py-2">Constituency</th>
                    {{-- <th class="border border-gray-300 px-4 py-2">Country</th> --}}
                </tr>
            </thead>
            <tbody class="text-left">
                @foreach ($pollingDistricts as $district)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $district['Pd_Code'] }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $district['Pd_Name'] }}</td>
                        {{-- <td class="border border-gray-300 px-4 py-2">{{ $district['Pd_Name'] }}</td> --}}
                        <td class="border border-gray-300 px-4 py-2">{{ $district['C_Name'] }}</td>
                        {{-- <td class="border border-gray-300 px-4 py-2">{{ $district['C_Code'] }}</td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-layout>
