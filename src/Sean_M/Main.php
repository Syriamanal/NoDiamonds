<?php
namespace Sean_M\NoDiamonds;

use pocketmine\Player;
use pocketmine\event\player\PlayerItemHeldEvent;

class Main extends PluginBase implements Listener{
   
     public function onEnable(){      
          $this->getServer()->getPluginManager()->registerEvents($this);
          $this->getLogger()->info("NoDiamonds enabled!");
     }

     public function itemHeld(PlayerItemHeldEvent $event){
          $p = $event->getPlayer();
               if($p->getName() == "AA12"){
               if($p->getItemInHand()->getId() == 264) $p->kick("Haha!");
               
          }
     }
}
