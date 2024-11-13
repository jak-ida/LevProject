<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('heading', null, []); ?> 
        Home Page
     <?php $__env->endSlot(); ?>
<?php if (isset($component)) { $__componentOriginal36b6294104f455e86022411acc86d227 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36b6294104f455e86022411acc86d227 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.counter_view','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('counter_view'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal36b6294104f455e86022411acc86d227)): ?>
<?php $attributes = $__attributesOriginal36b6294104f455e86022411acc86d227; ?>
<?php unset($__attributesOriginal36b6294104f455e86022411acc86d227); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal36b6294104f455e86022411acc86d227)): ?>
<?php $component = $__componentOriginal36b6294104f455e86022411acc86d227; ?>
<?php unset($__componentOriginal36b6294104f455e86022411acc86d227); ?>
<?php endif; ?>


<?php $__currentLoopData = $pollingStations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pollingStation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<table class="min-w-full bg-white border border-gray-200">
    <thead class='bg-gray-200 text-gray-600 uppercase text-sm sticky top-0 z-10'>
        <tr >
            <th class="border border-gray-300 px-4 py-2">Ps_Code</th>
            <th class="border border-gray-300 px-4 py-2">Polling Station</th>
            <th class="border border-gray-300 px-4 py-2">Polling District</th>
            <th class="border border-gray-300 px-4 py-2">Constituency</th>
            
        </tr>
    </thead>
    <tbody class="text-left">
        <?php $__currentLoopData = $pollingStations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $station): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td class="border border-gray-300 px-4 py-2"><?php echo e($station->Ps_Code); ?></td>
                <td class="border border-gray-300 px-4 py-2"><?php echo e($station->Ps_Name); ?></td>
                <td class="border border-gray-300 px-4 py-2"><?php echo e($station->Pd_Name); ?></td>
                <td class="border border-gray-300 px-4 py-2"><?php echo e($station->C_Name); ?></td>
                
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH C:\xampp\htdocs\dashboard\testing\resources\views/home.blade.php ENDPATH**/ ?>