<?php

namespace Plugin\OSGHTKDelivery;

use Eccube\Common\EccubeNav;

class Nav implements EccubeNav
{
    /**
     * {@inheritdoc}
     *
     * @return array
     */
    public static function getNav()
    {
        return [
            'plugin' => [
                'children' => [
                    'OSGHTKDelivery' => [
                        'name' => 'ghtk.name',
                        'children' => [
                            'index' => [
                                'name' => 'ghtk.header',
                                'url' => 'osghtk_delivery_admin_config',
                            ]
                        ]
                    ],
                ],
            ],
        ];
    }
}
