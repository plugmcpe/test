<?php
namespace test;
use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
 public function onEnable(){
 $this->getServer()->getLogger()->info("plugin has been enabled");
   $this->getLogger()->info("plugin by : groupPluginer");
   }
   public function onDisable(){
    $this->getServer()->getLogger()->info("plugin has been disable");
     }
     public function onCommand(CommandSender $sender, Command $cmd, $label, array $args){
     switch ($cmd->getName()){
      case 'hello':
      $player = $sender->getPlayer();
      $player->setGamemode(1);
      break;
      }
     }
    }
