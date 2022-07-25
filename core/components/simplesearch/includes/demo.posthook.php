<?php
use MODX\Revolution\modUser;
use MODX\Revolution\modUserProfile;
/**
 * A demo postHook for doing faceted search
 */
$c = $modx->newQuery(modUser::class);
$c->innerJoin(modUserProfile::class, 'Profile');
$c->where(array(
    'username:LIKE'            => '%' . $search . '%',
    'OR:Profile.fullname:LIKE' => '%' . $search . '%',
    'OR:Profile.email:LIKE'    => '%' . $search . '%',
));
$count = $modx->getCount(modUser::class, $c);
$c->select(array(
    'modUser.*',
    'Profile.fullname',
    'Profile.email',
));
$c->limit($limit,$offset);

$users = $modx->getCollection(modUser::class, $c);

$results = array();
foreach ($users as $user) {
    $results[] = array(
        'pagetitle' => $user->get('fullname'),
        'longtitle' => $user->get('email'),
        'link'      => $modx->makeUrl(10, '',
            array(
                'user' => $user->get('id'),
            )
        ),
        'excerpt' => '',
    );
}

$hook->addFacet('people', $results, $count);

return true;
