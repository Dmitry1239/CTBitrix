<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$this->IncludeLangFile("result.php");
?><div class="bx-vote-question-block"><?

$params = $APPLICATION->IncludeComponent(
	"bitrix:voting.result",
	".default",
	Array(
		"VOTE_ID" => $arResult["VOTE_ID"],
		"PERMISSION" => $arParams["PERMISSION"],
		"SHOW_VOTED_USERS" => "Y",
		"VOTE_ALL_RESULTS" => "N",
		"NEED_SORT" => "N",
		"CACHE_TYPE" => $arParams["CACHE_TYPE"],
		"CACHE_TIME" => $arParams["CACHE_TIME"],
		"ADDITIONAL_CACHE_ID" => $arResult["ADDITIONAL_CACHE_ID"],
		"NAME_TEMPLATE" => $arParams["~NAME_TEMPLATE"],
		"PATH_TO_USER" => $arParams["~PATH_TO_USER"]),
	($this->__component->__parent ? $this->__component->__parent : $component),
	array("HIDE_ICONS" => "Y")
);
?></div><?
	$this->__component->params = $params;
if ($arParams["CAN_REVOTE"] == "Y" || $arParams["CAN_VOTE"] == "Y") {
/*	?><div class="bx-vote-bottom-block"><?*/
		?><a href="<?=(strlen($arParams["ACTION_PAGE"]) > 0 ? $arParams["ACTION_PAGE"] : $APPLICATION->GetCurPageParam("", array("VOTE_ID","VOTING_OK","VOTE_SUCCESSFULL", "view_form", "view_result")))?>" id="lets_revote<?=$arResult["VOTE_ID"]?>" <?
		?>onclick="return voteGetForm(this, <?=$arResult["VOTE_ID"]?>, '<?=$params["uid"]?>');" class="post-item-more bx-vote-button" <?
		?>><?=($arParams["CAN_REVOTE"] == "Y" ? GetMessage("VOTE_RESUBMIT_BUTTON") : GetMessage("VOTE_SUBMIT_BUTTON"))?></a><?
/*?></div><?*/
}
?>