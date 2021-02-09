<?php
include "connection.php";


use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;

require __DIR__ . '/../functions/samples/Header.php';


use PhpOffice\PhpSpreadsheet\Writer\Xlsx;


$tempXML = __DIR__ . '/../templates/template3.xlsx';



$mainSpreadSheet = new Spreadsheet();
//$template = IOFactory::load($tempXML);

$schools = ['ATPA'=>'Atlas Prep Academy','CK'=>'Christ King','EGL' => 'Elm Grove Lutheran','CSL'=>'City School','CT'=>'Cross Trainers'];
$allocation = ['Title 1'];
$activityData = [];
foreach($schools as $key=>$school) {
    $activityData[$key]['schoolName'] = $school;
    for ($i = 0; $i < 5; $i++) {
        $activity = new stdClass();
        $activity->teacherName = "Teacher_".($i + 1);
        $activity->role = "Teacher";
        $activity->dateOfBackCk = date('Y-m-d');
        $activity->techUse = "Tech Use -" . $i;
        $activity->license = "License-" . $i;
        $activity->statusHours = $i;
        $activity->hourlyMonthlyRate = ($i+1) * 1200;
        $activity->monthlyFring = ($i+1) * 700;
        $activity->chargeForInsturtion = ($i+1) * 900;
        $activityData[$key]['activity'][] = $activity;
    }
}
//echo "<pre>";print_r($activityData);die;

foreach($activityData as $schoolShortName => $schoolData) {
    $reader = IOFactory::createReader('Xlsx');
    $template = $reader->load($tempXML);
    $template->getActiveSheet()->setCellValue('H6', date('Y-m-d'))->setCellValue('B9', $schoolData['schoolName']);
    foreach ($schoolData['activity'] as $key=>$activity) {
        $col = 12 + ($key + 1);
        $template->getActiveSheet()
                ->setCellValue('A'.$col, $activity->teacherName)
                ->setCellValue('B'.$col, $activity->role)
                ->setCellValue('C'.$col, $activity->dateOfBackCk)
                ->setCellValue('D'.$col, $activity->techUse)
                ->setCellValue('E'.$col, $activity->license)
                ->setCellValue('F'.$col, $activity->statusHours)
                ->setCellValue('G'.$col, $activity->hourlyMonthlyRate)
                ->setCellValue('H'.$col,  $activity->monthlyFring)
                ->setCellValue('I'.$col, $activity->chargeForInsturtion);
    }
    $sheet = $template->getActiveSheet();
    $sheet->setTitle($schoolShortName);
    $mainSpreadSheet->addExternalSheet($sheet);
}
$mainSpreadSheet->removeSheetByIndex(0);
$helper->write($mainSpreadSheet, "Activity.xlsx", ['Xlsx']);



