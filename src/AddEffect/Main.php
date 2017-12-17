<?php

namespace AddEffect;

use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Command\Command;
use pocketmine\Command\CommandSender;
use pocketmine\entity\Effect;

class Main extends PluginBase{
	
	public function onEnable(){
		$this->getServer()->getLogger()->info("AddEffect enabled!");
	}
	
	public function onDisable(){
		$this->getServer()->getLogger()->info("AddEffect disabled!");
	}
	
	public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
		
		switch($cmd->getName()){
				
			case "jump":
				if($sender instanceof Player){
# getEffect(8) là id effect
					$jump = Effect::getEffect(8);
# setVisible(true) có thể nhìn thấy đc
					$jump->setVisible(true);
# setAmplifier(1) độ mạnh
					$jump->setAmplifier(1);
# setDuration(100000) thời gian hết effect
					$jump->setDuration(100000);
# addEffect($jump) khai báo
					$sender->addEffect($jump);
				}
			break;
			
			case "speed":
				if($sender instanceof Player){
					$speed = Effect::getEffect(1);
					$speed->setVisible(true);
					$speed->setAmplifier(2);
					$speed->setDuration(100000);
					$sender->addEffect($speed);
				}
			break;
		

		}
		return true;
	}

