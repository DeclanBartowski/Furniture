<?php

	namespace TQ\Tools;

	use Bitrix\Main\Loader, Bitrix\Highloadblock as HL, Bitrix\Main\Entity;

	class Hiload
	{
        public static function getHLBlockItems(
            $hl_filter,
            $filter,
            $select = ["*"],
            $order = ["ID" => "ASC"]
        )
        {
            Loader::includeModule("highloadblock");
            $result = [];
            if (!empty($hl_filter)) {
                $hlblock = HL\HighloadBlockTable::getList(array('filter' => $hl_filter))->fetch();
                $entity = HL\HighloadBlockTable::compileEntity($hlblock);
                $entity_data_class = $entity->getDataClass();
                $rsData = $entity_data_class::getList(array(
                    "select" => $select,
                    "order" => $order,
                    "filter" => $filter
                ));

                while ($arData = $rsData->Fetch()) {
                    $result[$arData['UF_XML_ID']] = $arData;
                }
            }
            return $result;
        }
	}