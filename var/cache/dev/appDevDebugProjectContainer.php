<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container1gwfak4\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container1gwfak4/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container1gwfak4.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\Container1gwfak4\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \Container1gwfak4\appDevDebugProjectContainer(array(
    'container.build_hash' => '1gwfak4',
    'container.build_id' => 'da3b25db',
    'container.build_time' => 1518103311,
));
