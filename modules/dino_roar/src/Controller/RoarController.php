<?php

namespace  Drupal\dino_roar\Controller;
use Symfony\Component\HttpFoundation\Response;
class RoarController
/**
 *
 * Implement depedency injection
 *
 */

{

    public function roar()
    {
          return new Response('ROOOOAR!');


   }

}
