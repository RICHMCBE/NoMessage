<?php

declare(strict_types=1);

namespace RoMo\NoMessage;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\plugin\PluginBase;

class NoMessage extends PluginBase implements Listener{
    protected function onEnable() : void{
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onJoin(PlayerJoinEvent $event) : void{
        $event->setJoinMessage("");
    }

    public function onQuit(PlayerQuitEvent $event) : void{
        $event->setQuitMessage("");

    }
}