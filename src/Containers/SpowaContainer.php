<?php
 
namespace Spowa\Containers;
 
use Plenty\Plugin\Templates\Twig;
 
class SpowaContainer
{
    public function call(Twig $twig):string
    {
        return $twig->render('Spowa::content.Spowa');
    }
}
