<div class="w-full rounded-md">
    <form class="space-y-4" action="{{route('uploadCsv')}}" method="POST" name="uploadCsv" enctype="multipart/form-data">
      @csrf
        <div class="flex items-center space-x-4">
        <label for="file" class="text-lg font-semibold">Upload CSV File</label>
        <input
          type="file"
          name="file"
          accept=".csv"
          id="file"
          name="csv"
          class="border border-gray-300 rounded-sm px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
        <button
          type="submit"
          name="import"
          class="bg-blue-500 text-white px-6 py-2 rounded-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
          Import
        </button>
      </div>
    </form>
  </div>
