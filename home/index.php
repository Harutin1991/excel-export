<?php
include "connection.php";

use PhpOffice\PhpSpreadsheet\IOFactory;

require __DIR__ . '/../functions/samples/Header.php';


use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$mainXLSX = __DIR__ . '/../exports/Inventory.xlsx';
$mainSpreadSheet = IOFactory::load($mainXLSX);
$mainSpreadSheet->removeSheetByIndex(0);
$sheetNames = [];


$schools = ['ATPA'=>'Atlas Prep Academy','EGL' => 'Elm Grove Lutheran'];
$allocations = ['Title 1','Title 2'];
$sheetColor = ['c5c71a','d84418'];
$j = 0;
foreach($schools as $key=>$school) {
    //foreach ($allocations as $allocation) {
        $inventoryData = [];
        for ($i = 0; $i < 5; $i++) {
            $inventory = new stdClass();
            $inventory->quantity = $i + 1;
            $inventory->category = "Category-" . $i;
            $inventory->name = "Item-" . $i;
            $inventory->vendor = "Vendor-" . $i;
            $inventory->sticker = "Sticker-" . $i;
            $inventoryData[] = $inventory;
        }
        $schoolName = $school;
        $schoolYearName = "2019 - 2020";

        $dataRow = include __DIR__ . '/../templates/dataRow.php';

        $filename = __DIR__ . '/../templates/template1.xml';
        $tempFolder = __DIR__ . '/../tmp/';

//read the entire string
        $str = file_get_contents($filename);

//replace something in the file string - this is a VERY simple example
        $str = str_replace("{school}", $schoolName, $str);
        $str = str_replace("{schoolYear}", $schoolYearName, $str);
        $str = str_replace("{allocation}", $allocations[0], $str);
        $str = str_replace("{dataRow}", $dataRow, $str);

//write the entire string
        file_put_contents($tempFolder . "tmp.xml", $str);
        $tmpFile = $tempFolder . "tmp.xml";
        $spreadsheet = IOFactory::load($tmpFile);
        $sheet = $spreadsheet->getSheet(0);
        $sheet->setTitle($key);
        $mainSpreadSheet->addExternalSheet($sheet);
        $mainSpreadSheet->getActiveSheet()->getTabColor()->setARGB($sheetColor[$j]);
        unlink($tmpFile);
    $j++;
    //}
}
$helper->write($mainSpreadSheet,  "Inventory.xlsx", ['Xlsx']);



