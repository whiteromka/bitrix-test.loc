<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/** @var CBitrixComponent $this */

//$arResult['DATE'] = date('Y-m- H:i:s');
$arResult['DATE'] = date($arParams["TEMPLATE_FOR_DATE"]);
$this->IncludeComponentTemplate();