<?php
/**
 * Created by PhpStorm.
 * User: manueladeridder
 * Date: 02.07.16
 * Time: 08:20
 */

namespace KillAll;


use pocketmine\command\Command;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;
use pocketmine\command\CommandSender;
use pocketmine\permission\Permission;
use pocketmine\entity\Entity;

class Main extends PluginBase {

    public function onEnable(){
        $this->getServer()->getPluginManager()->registerEvent($this ,$this);
        $this->$this->getLogger()->info(TextFormat::AQUA ."[KillAll]"TextFormat::DARK_GREEN ."has been enabled")
    }
    public function onDisable(){
        $this->getLogger()->info(TextFormat::AQUA ."[KillAll]"TextFormat::DARK_RED ."has been disabled")
    }
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        switch ($command->$this->getName()){
            case "killall":
                if->($sender->hasPermission(m77e.killall)){
                foreach ($this->getServer()->getOnlinePlayers() as $p){
                    ($p->kill(900001)) // its over 900001
                }
            }

        }
    }

}