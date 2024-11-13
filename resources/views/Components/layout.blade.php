<!DOCTYPE html>
<html lang="en h-full bg-gray-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pam's Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="h-full bg-gray-100">
    <div class="min-h-full">
        <x-nav> </x-nav>
        <x-header></x-header>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="flex space-x-4">
                    <x-upload_csv></x-upload_csv>
                    <div class="w-3/12 rounded form-group">
                        <form method="get" action="/search">
                            <div class="flex justify-end input-group">
                                <input type="form-control" name="search" placeholder="Search..."
                                    class="border border-gray-300 rounded-SM px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" />
                                <button type="submit"
                                    class="ml-2 bg-blue-500 text-white px-4 py-2 rounded-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Search
                                </button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="flex space-x-4 py-4 h-full gap-2">
                    <div class="w-2/12 grid bg-gray-200 p-4 rounded">
                        <x-nav_menu href="/countries" :active="request()->is('countries')">COUNTRIES</x-nav_menu>
                        <x-nav_menu href="/constituencies" :active="request()->is('constituencies')">CONSTITUENCIES</x-nav_menu>
                        <x-nav_menu href="/districts" :active="request()->is('districts')">DISTRICTS</x-nav_menu>
                        <x-nav_menu href="/stations" :active="request()->is('stations')">STATIONS</x-nav_menu>
                    </div>
                    <div class="w-full bg-gray-300 p-4 rounded inline-block">
                        <div class="w-full inline-flex gap-2">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>
<!--<script>
    //const data = await fetch('data.php');
    let pollingStationData = await fetch('data.php')
        .then(response => response.json())
        .then(data => {
            return data;
        })
        .catch(error => console.error('Error fetching data:', error));

    // Function to fetch target number from PHP
    async function fetchTargetNumber() {
        try {
            //const response = await fetch('counter.php');
            //const targetNumber = await response.text();

            for (i = 1; i < 4; i++) {
                var id = "counter" + i;
                const targetNumber = await countFromData(id);

                animateCounter(targetNumber, id);
            }

        } catch (error) {
            console.error("Failed to fetch target number:", error);
        }
    }

    // Function to animate the counter
    function animateCounter(target, id) {
        const counter = document.getElementById(id);
        let start = 0;
        const duration = 1000; // Animation duration in milliseconds
        const increment = target / (duration / 16.67); // Calculate increment per frame

        function updateCounter() {
            start += increment;
            if (start >= target) {
                counter.innerText = Math.ceil(target);
            } else {
                counter.innerText = Math.floor(start);
                requestAnimationFrame(updateCounter);
            }
        }

        requestAnimationFrame(updateCounter);
    }

    //Function to get targetNumber from data (For the Counters of different categories)
    function countFromData(id) {
        // let filter = "";
        // if(id == 'counter1'){
        //   filter = ;
        // } else if(id == 'counter2'){
        //   filter = ;

        // } else if(id == 'counter3'){
        //   filter = ;

        // }

        var count = 0;
        pollingStationData.forEach(item => {
            //The following are different ways to get to the same result because item.length in this case will always be 1.
            //count = count + item.length;
            //count += item.length;
            count++;
        });
        return count;
    }

    document.addEventListener('DOMContentLoaded', fetchTargetNumber);
</script>-->

</html>
