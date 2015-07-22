<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NavModel extends Model
{



    public static function getNavElements() {
        return [
            [
                'target'   => '/',
                'name'     => 'Home'
            ],
            [
                'target'   => '/seraphin_study',
                'name'     => 'Seraphin Study'
            ],
            [
                'target'   => '/efficacy',
                'name'     => 'Efficacy'
            ],
            [
                'target'   => '/safety_profile',
                'name'     => 'Safety Profile'
            ],
            [
                'target'   => '/about',
                'name'     => 'About Opsumit'
            ],
            [
                'target'   => '/prescribing',
                'name'     => 'Prescribing Opsumit'
            ],
            [
                'target'   => '/services',
                'name'     => 'Services and Support'
            ],
            [
                'target'   => '/resources',
                'name'     => 'PAH Resources'
            ],
        ];
    }
}
