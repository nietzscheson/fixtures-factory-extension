<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXvtwtcq\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXvtwtcq/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerXvtwtcq.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerXvtwtcq\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerXvtwtcq\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Xvtwtcq',
    'container.build_id' => '4e8b392a',
    'container.build_time' => 1516221382,
));
