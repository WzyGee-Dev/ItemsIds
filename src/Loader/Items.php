<?php

namespace Loader;

use pocketmine\item\LegacyStringToItemParser;
use pocketmine\plugin\PluginBase;

class Items extends PluginBase
{



    public static function getItems(int $id, int $meta, int $count = 0): \pocketmine\item\Item
    {
        return LegacyStringToItemParser::getInstance()->parse("{$id}:{$meta}")->setCount($count);
    }
}