<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerG1bdi4B\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerG1bdi4B/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerG1bdi4B.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerG1bdi4B\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerG1bdi4B\App_KernelDevDebugContainer([
    'container.build_hash' => 'G1bdi4B',
    'container.build_id' => 'c8ffc481',
    'container.build_time' => 1589309258,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerG1bdi4B');
