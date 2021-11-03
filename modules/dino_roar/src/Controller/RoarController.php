<?php
    use Symfony\Component\HttpFoundation\Response;
namespace Drupal\dino_roar\Controller\RoarController;

class RoarController
{

    
    /**
     * Undocumented function
     * testing depedency injection
     * 
     * @return void
     */
     public function roar()
        {

             return new Response('ROOOOAR');
        }






}