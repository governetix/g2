<?php $__env->startSection('content'); ?>
    <?php if (isset($component)) { $__componentOriginal8375ddcdfc3347ebce118c6335b30b25 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8375ddcdfc3347ebce118c6335b30b25 = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Section::resolve(['class' => 'py-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Section::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
        <div class="container mx-auto px-4">
            <!-- Header Section -->
            <?php if (isset($component)) { $__componentOriginal12dd8418aac0141b6c0eba98539c45fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal12dd8418aac0141b6c0eba98539c45fe = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Flex::resolve(['justify' => 'between','align' => 'start','class' => 'mb-6 flex-col md:flex-row'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::flex'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Flex::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70 = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Heading::resolve(['level' => 'h1','text' => ''.e(__('i18n.page.title')).' (Current Locale: '.e(App::getLocale()).')','class' => 'mb-4 md:mb-0'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Heading::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70)): ?>
<?php $attributes = $__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70; ?>
<?php unset($__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70)): ?>
<?php $component = $__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70; ?>
<?php unset($__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal12dd8418aac0141b6c0eba98539c45fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal12dd8418aac0141b6c0eba98539c45fe = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Flex::resolve(['gap' => '3','class' => 'flex-col sm:flex-row'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::flex'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Flex::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php if (isset($component)) { $__componentOriginal6bee907637c4c5c5f60879f39ba4eac4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6bee907637c4c5c5f60879f39ba4eac4 = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Button::resolve(['variant' => 'primary','class' => 'transform hover:scale-105'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['href' => ''.e(route('admin.core.translations.create')).'']); ?>
                        <?php echo e(__('i18n.button.add_new_translation')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6bee907637c4c5c5f60879f39ba4eac4)): ?>
<?php $attributes = $__attributesOriginal6bee907637c4c5c5f60879f39ba4eac4; ?>
<?php unset($__attributesOriginal6bee907637c4c5c5f60879f39ba4eac4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6bee907637c4c5c5f60879f39ba4eac4)): ?>
<?php $component = $__componentOriginal6bee907637c4c5c5f60879f39ba4eac4; ?>
<?php unset($__componentOriginal6bee907637c4c5c5f60879f39ba4eac4); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal6bee907637c4c5c5f60879f39ba4eac4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6bee907637c4c5c5f60879f39ba4eac4 = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Button::resolve(['variant' => 'secondary','class' => 'transform hover:scale-105','disabled' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php echo e(__('i18n.button.upload_json')); ?>

                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6bee907637c4c5c5f60879f39ba4eac4)): ?>
<?php $attributes = $__attributesOriginal6bee907637c4c5c5f60879f39ba4eac4; ?>
<?php unset($__attributesOriginal6bee907637c4c5c5f60879f39ba4eac4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6bee907637c4c5c5f60879f39ba4eac4)): ?>
<?php $component = $__componentOriginal6bee907637c4c5c5f60879f39ba4eac4; ?>
<?php unset($__componentOriginal6bee907637c4c5c5f60879f39ba4eac4); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal12dd8418aac0141b6c0eba98539c45fe)): ?>
<?php $attributes = $__attributesOriginal12dd8418aac0141b6c0eba98539c45fe; ?>
<?php unset($__attributesOriginal12dd8418aac0141b6c0eba98539c45fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal12dd8418aac0141b6c0eba98539c45fe)): ?>
<?php $component = $__componentOriginal12dd8418aac0141b6c0eba98539c45fe; ?>
<?php unset($__componentOriginal12dd8418aac0141b6c0eba98539c45fe); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal12dd8418aac0141b6c0eba98539c45fe)): ?>
<?php $attributes = $__attributesOriginal12dd8418aac0141b6c0eba98539c45fe; ?>
<?php unset($__attributesOriginal12dd8418aac0141b6c0eba98539c45fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal12dd8418aac0141b6c0eba98539c45fe)): ?>
<?php $component = $__componentOriginal12dd8418aac0141b6c0eba98539c45fe; ?>
<?php unset($__componentOriginal12dd8418aac0141b6c0eba98539c45fe); ?>
<?php endif; ?>

            <!-- Language Overview Section -->
            <?php if (isset($component)) { $__componentOriginal508e924024f9a0c7b53d27b3638d5b29 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal508e924024f9a0c7b53d27b3638d5b29 = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Card::resolve(['title' => ''.e(__('i18n.section.language_overview_title')).'','class' => 'mb-8'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Card::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php if (isset($component)) { $__componentOriginal80c1b98befb1debbf867b754fecc08fb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal80c1b98befb1debbf867b754fecc08fb = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Grid::resolve(['columns' => '1 sm:grid-cols-2 lg:grid-cols-3','gap' => '6'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Grid::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <!-- Language Card: Español -->
                    <?php if (isset($component)) { $__componentOriginal508e924024f9a0c7b53d27b3638d5b29 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal508e924024f9a0c7b53d27b3638d5b29 = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Card::resolve(['class' => 'border border-gray-200'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Card::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php if (isset($component)) { $__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70 = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Heading::resolve(['level' => 'h3','text' => 'Español (ES)','class' => 'mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Heading::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70)): ?>
<?php $attributes = $__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70; ?>
<?php unset($__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70)): ?>
<?php $component = $__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70; ?>
<?php unset($__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70); ?>
<?php endif; ?>
                        <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                            <div class="bg-green-500 h-3 rounded-full" style="width: 75%;"></div>
                        </div>
                        <p class="text-sm text-gray-600 mb-1">75% <?php echo e(app('translator')->get('gcore::i18n.card.completed_percentage')); ?></p>
                        <p class="text-sm text-gray-600">150/200 <?php echo e(__('i18n.card.strings_translated')); ?></p>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal508e924024f9a0c7b53d27b3638d5b29)): ?>
<?php $attributes = $__attributesOriginal508e924024f9a0c7b53d27b3638d5b29; ?>
<?php unset($__attributesOriginal508e924024f9a0c7b53d27b3638d5b29); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal508e924024f9a0c7b53d27b3638d5b29)): ?>
<?php $component = $__componentOriginal508e924024f9a0c7b53d27b3638d5b29; ?>
<?php unset($__componentOriginal508e924024f9a0c7b53d27b3638d5b29); ?>
<?php endif; ?>

                    <!-- Language Card: English -->
                    <?php if (isset($component)) { $__componentOriginal508e924024f9a0c7b53d27b3638d5b29 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal508e924024f9a0c7b53d27b3638d5b29 = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Card::resolve(['class' => 'border border-gray-200'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Card::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php if (isset($component)) { $__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70 = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Heading::resolve(['level' => 'h3','text' => 'English (EN)','class' => 'mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Heading::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70)): ?>
<?php $attributes = $__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70; ?>
<?php unset($__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70)): ?>
<?php $component = $__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70; ?>
<?php unset($__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70); ?>
<?php endif; ?>
                        <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                            <div class="bg-yellow-500 h-3 rounded-full" style="width: 50%;"></div>
                        </div>
                        <p class="text-sm text-gray-600 mb-1">50% <?php echo e(app('translator')->get('gcore::i18n.card.completed_percentage')); ?></p>
                        <p class="text-sm text-gray-600">100/200 <?php echo e(__('i18n.card.strings_translated')); ?></p>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal508e924024f9a0c7b53d27b3638d5b29)): ?>
<?php $attributes = $__attributesOriginal508e924024f9a0c7b53d27b3638d5b29; ?>
<?php unset($__attributesOriginal508e924024f9a0c7b53d27b3638d5b29); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal508e924024f9a0c7b53d27b3638d5b29)): ?>
<?php $component = $__componentOriginal508e924024f9a0c7b53d27b3638d5b29; ?>
<?php unset($__componentOriginal508e924024f9a0c7b53d27b3638d5b29); ?>
<?php endif; ?>

                    <!-- Language Card: Português -->
                    <?php if (isset($component)) { $__componentOriginal508e924024f9a0c7b53d27b3638d5b29 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal508e924024f9a0c7b53d27b3638d5b29 = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Card::resolve(['class' => 'border border-gray-200'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Card::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php if (isset($component)) { $__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70 = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Heading::resolve(['level' => 'h3','text' => 'Português (BR)','class' => 'mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Heading::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70)): ?>
<?php $attributes = $__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70; ?>
<?php unset($__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70)): ?>
<?php $component = $__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70; ?>
<?php unset($__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70); ?>
<?php endif; ?>
                        <div class="w-full bg-gray-200 rounded-full h-3 mb-2">
                            <div class="bg-red-500 h-3 rounded-full" style="width: 20%;"></div>
                        </div>
                        <p class="text-sm text-gray-600 mb-1">20% <?php echo e(app('translator')->get('gcore::i18n.card.completed_percentage')); ?></p>
                        <p class="text-sm text-gray-600">40/200 <?php echo e(__('i18n.card.strings_translated')); ?></p>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal508e924024f9a0c7b53d27b3638d5b29)): ?>
<?php $attributes = $__attributesOriginal508e924024f9a0c7b53d27b3638d5b29; ?>
<?php unset($__attributesOriginal508e924024f9a0c7b53d27b3638d5b29); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal508e924024f9a0c7b53d27b3638d5b29)): ?>
<?php $component = $__componentOriginal508e924024f9a0c7b53d27b3638d5b29; ?>
<?php unset($__componentOriginal508e924024f9a0c7b53d27b3638d5b29); ?>
<?php endif; ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal80c1b98befb1debbf867b754fecc08fb)): ?>
<?php $attributes = $__attributesOriginal80c1b98befb1debbf867b754fecc08fb; ?>
<?php unset($__attributesOriginal80c1b98befb1debbf867b754fecc08fb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal80c1b98befb1debbf867b754fecc08fb)): ?>
<?php $component = $__componentOriginal80c1b98befb1debbf867b754fecc08fb; ?>
<?php unset($__componentOriginal80c1b98befb1debbf867b754fecc08fb); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal508e924024f9a0c7b53d27b3638d5b29)): ?>
<?php $attributes = $__attributesOriginal508e924024f9a0c7b53d27b3638d5b29; ?>
<?php unset($__attributesOriginal508e924024f9a0c7b53d27b3638d5b29); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal508e924024f9a0c7b53d27b3638d5b29)): ?>
<?php $component = $__componentOriginal508e924024f9a0c7b53d27b3638d5b29; ?>
<?php unset($__componentOriginal508e924024f9a0c7b53d27b3638d5b29); ?>
<?php endif; ?>

            <!-- Missing Translations Section -->
            <?php if (isset($component)) { $__componentOriginal508e924024f9a0c7b53d27b3638d5b29 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal508e924024f9a0c7b53d27b3638d5b29 = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Card::resolve(['class' => 'mb-8 p-6 bg-yellow-50 border border-yellow-200 shadow-sm flex flex-col md:flex-row justify-between items-start md:items-center'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Card::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <div>
                    <?php if (isset($component)) { $__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70 = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Heading::resolve(['level' => 'h2','text' => ''.e(__('i18n.section.missing_strings_title')).'','class' => 'text-yellow-800 mb-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Heading::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70)): ?>
<?php $attributes = $__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70; ?>
<?php unset($__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70)): ?>
<?php $component = $__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70; ?>
<?php unset($__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70); ?>
<?php endif; ?>
                    <p class="text-yellow-700"><?php echo e(__('i18n.missing_strings.description')); ?></p>
                    <p class="text-yellow-700 font-bold mt-2">25 <?php echo e(__('i18n.missing_strings.detected_count')); ?></p>
                </div>
                <?php if (isset($component)) { $__componentOriginal6bee907637c4c5c5f60879f39ba4eac4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6bee907637c4c5c5f60879f39ba4eac4 = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Button::resolve(['variant' => 'warning','class' => 'mt-4 md:mt-0 transform hover:scale-105','disabled' => true] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Button::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <?php echo e(__('i18n.button.scan_missing_strings')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6bee907637c4c5c5f60879f39ba4eac4)): ?>
<?php $attributes = $__attributesOriginal6bee907637c4c5c5f60879f39ba4eac4; ?>
<?php unset($__attributesOriginal6bee907637c4c5c5f60879f39ba4eac4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6bee907637c4c5c5f60879f39ba4eac4)): ?>
<?php $component = $__componentOriginal6bee907637c4c5c5f60879f39ba4eac4; ?>
<?php unset($__componentOriginal6bee907637c4c5c5f60879f39ba4eac4); ?>
<?php endif; ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal508e924024f9a0c7b53d27b3638d5b29)): ?>
<?php $attributes = $__attributesOriginal508e924024f9a0c7b53d27b3638d5b29; ?>
<?php unset($__attributesOriginal508e924024f9a0c7b53d27b3638d5b29); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal508e924024f9a0c7b53d27b3638d5b29)): ?>
<?php $component = $__componentOriginal508e924024f9a0c7b53d27b3638d5b29; ?>
<?php unset($__componentOriginal508e924024f9a0c7b53d27b3638d5b29); ?>
<?php endif; ?>

            <!-- Translations Table Section -->
            <div>
                <?php if (isset($component)) { $__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70 = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Heading::resolve(['level' => 'h2','text' => ''.e(__('i18n.section.all_translations_title')).'','class' => 'mb-4'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Heading::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70)): ?>
<?php $attributes = $__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70; ?>
<?php unset($__attributesOriginal5bbbb8d993a1ce6ce00c03bb02654d70); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70)): ?>
<?php $component = $__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70; ?>
<?php unset($__componentOriginal5bbbb8d993a1ce6ce00c03bb02654d70); ?>
<?php endif; ?>

                <!-- Search and Filters -->
                <?php if (isset($component)) { $__componentOriginal12dd8418aac0141b6c0eba98539c45fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal12dd8418aac0141b6c0eba98539c45fe = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Flex::resolve(['gap' => '4','class' => 'mb-6 flex-col md:flex-row'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::flex'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Flex::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <input type="text" placeholder="<?php echo e(__('i18n.placeholder.search_text')); ?>" class="flex-grow p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" disabled>
                    <select class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" disabled>
                        <option value=""><?php echo e(__('i18n.filter.group_option_default')); ?></option>
                        <option value="gcore"><?php echo e(__('i18n.filter.group_gcore')); ?></option>
                        <option value="auth"><?php echo e(__('i18n.filter.group_auth')); ?></option>
                        <option value="validation"><?php echo e(__('i18n.filter.group_validation')); ?></option>
                    </select>
                    <select class="p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" disabled>
                        <option value=""><?php echo e(__('i18n.filter.status_option_default')); ?></option>
                        <option value="incomplete"><?php echo e(__('i18n.filter.status_incomplete')); ?></option>
                        <option value="complete"><?php echo e(__('i18n.filter.status_complete')); ?></option>
                    </select>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal12dd8418aac0141b6c0eba98539c45fe)): ?>
<?php $attributes = $__attributesOriginal12dd8418aac0141b6c0eba98539c45fe; ?>
<?php unset($__attributesOriginal12dd8418aac0141b6c0eba98539c45fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal12dd8418aac0141b6c0eba98539c45fe)): ?>
<?php $component = $__componentOriginal12dd8418aac0141b6c0eba98539c45fe; ?>
<?php unset($__componentOriginal12dd8418aac0141b6c0eba98539c45fe); ?>
<?php endif; ?>

                <!-- Table -->
                <div class="overflow-x-auto rounded-lg shadow-md border border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"><?php echo e(__('i18n.table.header.key')); ?></th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"><?php echo e(__('i18n.table.header.group')); ?></th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"><?php echo e(__('i18n.table.header.english')); ?></th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"><?php echo e(__('i18n.table.header.spanish')); ?></th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"><?php echo e(__('i18n.table.header.portuguese')); ?></th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider"><?php echo e(__('i18n.table.header.actions')); ?></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- Sample Row 1 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">gcore.welcome_message</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">gcore</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Welcome to our application!</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">¡Bienvenido a nuestra aplicación!</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">❌ <?php echo e(__('i18n.status.missing_translation')); ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-blue-600 hover:text-blue-900 mr-4"><?php echo e(__('i18n.action.edit')); ?></a>
                                    <a href="#" class="text-red-600 hover:text-red-900"><?php echo e(__('i18n.action.delete')); ?></a>
                                </td>
                            </tr>
                            <!-- Sample Row 2 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">auth.login_title</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">auth</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Login to your account</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Inicia sesión en tu cuenta</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Faça login na sua conta</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-blue-600 hover:text-blue-900 mr-4"><?php echo e(__('i18n.action.edit')); ?></a>
                                    <a href="#" class="text-red-600 hover:text-red-900"><?php echo e(__('i18n.action.delete')); ?></a>
                                </td>
                            </tr>
                            <!-- Sample Row 3 -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">validation.required</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">validation</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">The :attribute field is required.</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">El campo :attribute es obligatorio.</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">❌ <?php echo e(__('i18n.status.missing_translation')); ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-blue-600 hover:text-blue-900 mr-4"><?php echo e(__('i18n.action.edit')); ?></a>
                                    <a href="#" class="text-red-600 hover:text-red-900"><?php echo e(__('i18n.action.delete')); ?></a>
                                </td>
                            </tr>
                            <!-- Sample Row 4 (Dynamic translation example) -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">product.description.laptop-pro-x</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">product</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Powerful laptop for professionals.</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Potente portátil para profesionales.</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Laptop potente para profissionais.</td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-blue-600 hover:text-blue-900 mr-4"><?php echo e(__('i18n.action.edit')); ?></a>
                                    <a href="#" class="text-red-600 hover:text-red-900"><?php echo e(__('i18n.action.delete')); ?></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination (Placeholder) -->
                <?php if (isset($component)) { $__componentOriginal12dd8418aac0141b6c0eba98539c45fe = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal12dd8418aac0141b6c0eba98539c45fe = $attributes; } ?>
<?php $component = Modules\GCore\View\Components\Flex::resolve(['justify' => 'center','class' => 'mt-6'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('gcore::flex'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Modules\GCore\View\Components\Flex::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only"><?php echo e(__('i18n.pagination.previous')); ?></span>
                            <!-- Heroicon name: solid/chevron-left -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" aria-current="page" class="z-10 bg-blue-50 border-blue-500 text-blue-600 relative inline-flex items-center px-4 py-2 border text-sm font-medium">1</a>
                        <a href="#" class="bg-white border-gray-300 text-gray-700 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">2</a>
                        <a href="#" class="bg-white border-gray-300 text-gray-700 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">3</a>
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only"><?php echo e(__('gcore::i18n.pagination.next')); ?></span>
                            <!-- Heroicon name: solid/chevron-right -->
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </nav>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal12dd8418aac0141b6c0eba98539c45fe)): ?>
<?php $attributes = $__attributesOriginal12dd8418aac0141b6c0eba98539c45fe; ?>
<?php unset($__attributesOriginal12dd8418aac0141b6c0eba98539c45fe); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal12dd8418aac0141b6c0eba98539c45fe)): ?>
<?php $component = $__componentOriginal12dd8418aac0141b6c0eba98539c45fe; ?>
<?php unset($__componentOriginal12dd8418aac0141b6c0eba98539c45fe); ?>
<?php endif; ?>
            </div>
        </div>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8375ddcdfc3347ebce118c6335b30b25)): ?>
<?php $attributes = $__attributesOriginal8375ddcdfc3347ebce118c6335b30b25; ?>
<?php unset($__attributesOriginal8375ddcdfc3347ebce118c6335b30b25); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8375ddcdfc3347ebce118c6335b30b25)): ?>
<?php $component = $__componentOriginal8375ddcdfc3347ebce118c6335b30b25; ?>
<?php unset($__componentOriginal8375ddcdfc3347ebce118c6335b30b25); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('gcore::admin.layouts.master', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Governetix2\Modules\gCore\app\Providers/../../Resources/views/admin/translations/index.blade.php ENDPATH**/ ?>