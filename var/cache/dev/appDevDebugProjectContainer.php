<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPwq936v\appDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPwq936v/appDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerPwq936v.legacy');

    return;
}

if (!\class_exists(appDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerPwq936v\appDevDebugProjectContainer::class, appDevDebugProjectContainer::class, false);
}

return new \ContainerPwq936v\appDevDebugProjectContainer(array(
    'container.build_hash' => 'Pwq936v',
    'container.build_id' => 'be9e356b',
    'container.build_time' => 1516115744,
));
