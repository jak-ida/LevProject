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
        <?php if (isset($component)) { $__componentOriginalff09156f73c896030ee75284e9b2c466 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalff09156f73c896030ee75284e9b2c466 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>  <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalff09156f73c896030ee75284e9b2c466)): ?>
<?php $attributes = $__attributesOriginalff09156f73c896030ee75284e9b2c466; ?>
<?php unset($__attributesOriginalff09156f73c896030ee75284e9b2c466); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalff09156f73c896030ee75284e9b2c466)): ?>
<?php $component = $__componentOriginalff09156f73c896030ee75284e9b2c466; ?>
<?php unset($__componentOriginalff09156f73c896030ee75284e9b2c466); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalfd1f218809a441e923395fcbf03e4272 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfd1f218809a441e923395fcbf03e4272 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.header','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $attributes = $__attributesOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__attributesOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfd1f218809a441e923395fcbf03e4272)): ?>
<?php $component = $__componentOriginalfd1f218809a441e923395fcbf03e4272; ?>
<?php unset($__componentOriginalfd1f218809a441e923395fcbf03e4272); ?>
<?php endif; ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="flex space-x-4">
                    <?php if (isset($component)) { $__componentOriginalf4f9c70aa8f7a230599cb93c1ddb1657 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf4f9c70aa8f7a230599cb93c1ddb1657 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.upload_csv','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('upload_csv'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf4f9c70aa8f7a230599cb93c1ddb1657)): ?>
<?php $attributes = $__attributesOriginalf4f9c70aa8f7a230599cb93c1ddb1657; ?>
<?php unset($__attributesOriginalf4f9c70aa8f7a230599cb93c1ddb1657); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf4f9c70aa8f7a230599cb93c1ddb1657)): ?>
<?php $component = $__componentOriginalf4f9c70aa8f7a230599cb93c1ddb1657; ?>
<?php unset($__componentOriginalf4f9c70aa8f7a230599cb93c1ddb1657); ?>
<?php endif; ?>
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
                        <?php if (isset($component)) { $__componentOriginalb66386d4a4c4eec366d08b5fd8a9ac57 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb66386d4a4c4eec366d08b5fd8a9ac57 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav_menu','data' => ['href' => '/countries','active' => request()->is('countries')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav_menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/countries','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('countries'))]); ?>COUNTRIES <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb66386d4a4c4eec366d08b5fd8a9ac57)): ?>
<?php $attributes = $__attributesOriginalb66386d4a4c4eec366d08b5fd8a9ac57; ?>
<?php unset($__attributesOriginalb66386d4a4c4eec366d08b5fd8a9ac57); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb66386d4a4c4eec366d08b5fd8a9ac57)): ?>
<?php $component = $__componentOriginalb66386d4a4c4eec366d08b5fd8a9ac57; ?>
<?php unset($__componentOriginalb66386d4a4c4eec366d08b5fd8a9ac57); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalb66386d4a4c4eec366d08b5fd8a9ac57 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb66386d4a4c4eec366d08b5fd8a9ac57 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav_menu','data' => ['href' => '/constituencies','active' => request()->is('constituencies')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav_menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/constituencies','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('constituencies'))]); ?>CONSTITUENCIES <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb66386d4a4c4eec366d08b5fd8a9ac57)): ?>
<?php $attributes = $__attributesOriginalb66386d4a4c4eec366d08b5fd8a9ac57; ?>
<?php unset($__attributesOriginalb66386d4a4c4eec366d08b5fd8a9ac57); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb66386d4a4c4eec366d08b5fd8a9ac57)): ?>
<?php $component = $__componentOriginalb66386d4a4c4eec366d08b5fd8a9ac57; ?>
<?php unset($__componentOriginalb66386d4a4c4eec366d08b5fd8a9ac57); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalb66386d4a4c4eec366d08b5fd8a9ac57 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb66386d4a4c4eec366d08b5fd8a9ac57 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav_menu','data' => ['href' => '/districts','active' => request()->is('districts')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav_menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/districts','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('districts'))]); ?>DISTRICTS <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb66386d4a4c4eec366d08b5fd8a9ac57)): ?>
<?php $attributes = $__attributesOriginalb66386d4a4c4eec366d08b5fd8a9ac57; ?>
<?php unset($__attributesOriginalb66386d4a4c4eec366d08b5fd8a9ac57); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb66386d4a4c4eec366d08b5fd8a9ac57)): ?>
<?php $component = $__componentOriginalb66386d4a4c4eec366d08b5fd8a9ac57; ?>
<?php unset($__componentOriginalb66386d4a4c4eec366d08b5fd8a9ac57); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalb66386d4a4c4eec366d08b5fd8a9ac57 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb66386d4a4c4eec366d08b5fd8a9ac57 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.nav_menu','data' => ['href' => '/stations','active' => request()->is('stations')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('nav_menu'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => '/stations','active' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(request()->is('stations'))]); ?>STATIONS <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb66386d4a4c4eec366d08b5fd8a9ac57)): ?>
<?php $attributes = $__attributesOriginalb66386d4a4c4eec366d08b5fd8a9ac57; ?>
<?php unset($__attributesOriginalb66386d4a4c4eec366d08b5fd8a9ac57); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb66386d4a4c4eec366d08b5fd8a9ac57)): ?>
<?php $component = $__componentOriginalb66386d4a4c4eec366d08b5fd8a9ac57; ?>
<?php unset($__componentOriginalb66386d4a4c4eec366d08b5fd8a9ac57); ?>
<?php endif; ?>
                    </div>
                    <div class="w-full bg-gray-300 p-4 rounded inline-block">
                        <div class="w-full inline-flex gap-2">
                            <?php echo e($slot); ?>

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
<?php /**PATH C:\xampp\htdocs\dashboard\testing\resources\views/components/layout.blade.php ENDPATH**/ ?>