<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXQuyDIq\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXQuyDIq/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXQuyDIq.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXQuyDIq\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXQuyDIq\App_KernelDevDebugContainer([
    'container.build_hash' => 'XQuyDIq',
    'container.build_id' => 'f6a61480',
    'container.build_time' => 1589017392,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXQuyDIq');
