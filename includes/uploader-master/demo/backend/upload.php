<?php

require_once('../../../config/config.inc.php'); //import connector

include '../../../PHPExcel-1.8/Classes/PHPExcel.php';
include '../../../PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';
include '../../../import_excel_file/import_excel.inc.php';
include '../../../sql/insert.inc.php';

/*
  This is a ***DEMO*** , the backend / PHP provided is very basic. You can use it as a starting point maybe, but ***do not use this on production***. It doesn't preform any server-side validation, checks, authentication, etc.

  For more read the README.md file on this folder.

  Based on the examples provided on:
  - http://php.net/manual/en/features.file-upload.php
*/

header('Content-type:application/json;charset=utf-8');

try {
    if (
        !isset($_FILES['file']['error']) ||
        is_array($_FILES['file']['error'])
    ) {
        throw new RuntimeException('Invalid parameters.');
    }

    switch ($_FILES['file']['error']) {
        case UPLOAD_ERR_OK:
            break;
        case UPLOAD_ERR_NO_FILE:
            throw new RuntimeException('No file sent.');
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            throw new RuntimeException('Exceeded filesize limit.');
        default:
            throw new RuntimeException('Unknown errors.');
    }

    $filepath = sprintf('files/%s_%s', uniqid(), $_FILES['file']['name']);

    if (!move_uploaded_file(
        $_FILES['file']['tmp_name'],
        $filepath
    )) {
        throw new RuntimeException('Failed to move uploaded file.');
    }

    $absolute = $filepath;

    $r = $out->load_file($absolute);
    $qry = new SqlRead();
    for ($row = 2; $row <= $r['row']; $row++) {

      $cpf = $r['work_sheet']->getCell('A'.$row)->getValue();
      $name = $r['work_sheet']->getCell('B'.$row)->getValue();
      $desig = $r['work_sheet']->getCell('C'.$row)->getValue();
      $location = $r['work_sheet']->getCell('G'.$row)->getValue();

      $cell = $r['work_sheet']->getCell('H' . $row);
      $InvDate= $cell->getValue();
      if(PHPExcel_Shared_Date::isDateTime($cell)) {
          $date1 = date("d-m-Y", PHPExcel_Shared_Date::ExcelToPHP($InvDate));
      }

      $cell = $r['work_sheet']->getCell('I' . $row);
      $InvDate2 = $cell->getValue();
      if(PHPExcel_Shared_Date::isDateTime($cell)) {
          $date2 = date("d-m-Y", PHPExcel_Shared_Date::ExcelToPHP($InvDate2));
      }

      $phone = $r['work_sheet']->getCell('D'.$row)->getValue();
      $epabx_0 = $r['work_sheet']->getCell('E'.$row)->getValue();
      $epabx_r = $r['work_sheet']->getCell('F'.$row)->getValue();
      $remrk = $r['work_sheet']->getCell('J'.$row)->getValue();
      $token = md5($phone.time()); //create an unique token id

      $sqli = $qry->data_channel($cpf,$name,$desig,$location,$date1,$date2,$phone,$epabx_0,$epabx_r,$remrk,$token);
    }

    // All good, send the response
    echo json_encode([
        'status' => 'ok',
        'path' => $token
    ]);

} catch (RuntimeException $e) {
	// Something went wrong, send the err message as JSON
	http_response_code(400);

	echo json_encode([
		'status' => 'error',
		'message' => $e->getMessage()
	]);
}
