<?
if (!empty($_REQUEST['symbol'])) {
    $GLOBALS['arrBrandsFilter']['NAME'] = $_REQUEST['symbol'] . '%';
}
?>