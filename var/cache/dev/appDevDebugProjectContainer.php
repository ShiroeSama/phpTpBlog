<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQmasr3b\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQmasr3b/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerQmasr3b.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerQmasr3b\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerQmasr3b\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Qmasr3b',
    'container.build_id' => '79e7f55a',
    'container.build_time' => 1516808867,
));
