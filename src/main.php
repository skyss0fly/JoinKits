<?php

namespace skyss0fly\JoinKits;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use jojoe77777\FormAPI\SimpleForm;
use pocketmine\player\Player;
use skyss0fly\KitsPlus;
class Main extends PluginBase implements Listener {

    public function onEnable(): void {
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    public function onPlayerJoin(PlayerJoinEvent $event) {
        $player = $event->getPlayer();
        
 $title = $this->getConfig()->get("Title");
 $content = $this->getConfig()->get("Content");
 $button = $this->getConfig()->get("ButtonText");
 $kitsplus = KitsPlus
 $kits = $kitsplus->getConfig()->("JoinKit")
$form = new SimpleForm(function(Player $player, $data){
    if($data === null) return;
  //* Coming soon: kits 
});
$form->setTitle($title);
$form->setContent($content);
$form->addButton($button);
$player->sendForm($form);

}
}
