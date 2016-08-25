<?php

namespace Pidev\FrontOfficeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PidevFrontOfficeBundle extends Bundle
{
    public function getParent()
{
return 'FOSUserBundle';
}
}
