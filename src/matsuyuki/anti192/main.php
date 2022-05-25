<?php

namespace matsuyuki\anti192;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\utils\Config;
use pocketmine\event\player\PlayerPreLoginEvent;

class main extends PluginBase implements Listener {

   public function onEnable():void {
       $this->getServer()->getPluginManager()->registerEvents($this, $this);
       $this->allow = new Config($this->getDataFolder() . "allow.yml", Config::YAML, [
           "allow" => ["LAN内からでも許可する人の名前をここにいれる", "2人目以降はこんな感じで", "3人目", "4人目..."],
           "message" => "The server isn't available now."
       ]);
   }

    public function onPreJoin(PlayerPreLoginEvent $event):void {
       if (substr($event->getIp(), 0, 8) === "192.168." and
           !in_array($event->getPlayerInfo()->getUsername(), $this->allow->get("allow"))) {
           $event->setKickReason(0, $this->allow->get("message"));
       }
    }

}
