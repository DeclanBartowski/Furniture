<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Application,
    Bitrix\Main\Loader,
    Bitrix\Main\Engine\Contract\Controllerable;

CJSCore::Init(["fx", "ajax"]);

class TqPopularSections extends \CBitrixComponent implements Controllerable
{
    private $componentPage = '';



    private function getData()
    {
        if(empty($this->arParams["FILTER_NAME"]) || !preg_match("/^[A-Za-z_][A-Za-z01-9_]*$/", $this->arParams["FILTER_NAME"]))
        {
            $arrFilter = array();
        }
        else
        {
            global ${$this->arParams["FILTER_NAME"]};
            $arrFilter = ${$this->arParams["FILTER_NAME"]};
            if(!is_array($arrFilter))
                $arrFilter = array();
        }

        $arFilter = array('IBLOCK_ID' => array_diff($this->arParams['IBLOCK_ID'],[""]),'ACTIVE' => 'Y');
        $sectionFilter = array_merge($arrFilter, $arFilter);

        $sect = CIBlockSection::GetList(array('sort' => 'asc'), $sectionFilter, false, array('UF_*'));
        while ($section = $sect->GetNext()) {
            $section['PICTURE'] = CFile::GetFileArray($section['PICTURE']);
            $this->arResult['SECTIONS'][] = $section;
        }
    }

    public function configureActions()
    {
        return [];
    }


    public function executeComponent()
    {
        $this->getData();
        $this->includeComponentTemplate($this->componentPage);
    }
}
