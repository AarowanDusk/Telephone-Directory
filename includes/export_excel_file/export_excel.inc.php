<?php
class extractExcel{
  public function out_excel($name){
    $db = new Database();
    // Instantiate a new PHPExcel object
    $objPHPExcel = new PHPExcel();
    // Set the active Excel worksheet to sheet 0
    $objPHPExcel->setActiveSheetIndex(0);
    // Initialise the Excel row number
    $rowCount = 2;
    $rowCount1 = 1;
    $get_d = $db->db_num("SELECT token FROM teli_log");
    if($get_d){
      while($set_d = $get_d->fetch_object()){
        $idnt = $set_d->token;
        $query = $db->db_num("SELECT * FROM defenative_table_$idnt");
        if($query){
          // Iterate through each result from the SQL query in turn
          // We fetch each database result row into $row in turn
          $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount1, 'Telephone Number');
          $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount1, 'CPF ID');
          $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount1, 'Name');
          $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount1, 'Designation');
          $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount1, 'EPABX 0');
          $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount1, 'EPABX R');
          $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount1, 'Location');
          $objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount1, 'Installation Date');
          $objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount1, 'Uninstallation Date');
          $objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount1, 'Remark');
          while($set = $query->fetch_object()){
              // Set cell An to the "name" column from the database (assuming you have a column called name)
              //    where n is the Excel row number (ie cell A1 in the first row)
              $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $set->tel_no);
              $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $set->cpf);
              $objPHPExcel->getActiveSheet()->SetCellValue('C'.$rowCount, $set->name);
              $objPHPExcel->getActiveSheet()->SetCellValue('D'.$rowCount, $set->desig);
              $objPHPExcel->getActiveSheet()->SetCellValue('E'.$rowCount, $set->epabx_0);
              $objPHPExcel->getActiveSheet()->SetCellValue('F'.$rowCount, $set->epabx_r);
              $objPHPExcel->getActiveSheet()->SetCellValue('G'.$rowCount, $set->loc);
              $objPHPExcel->getActiveSheet()->SetCellValue('H'.$rowCount, $set->instl_date);
              $objPHPExcel->getActiveSheet()->SetCellValue('I'.$rowCount, $set->uninstl_date);
              $objPHPExcel->getActiveSheet()->SetCellValue('J'.$rowCount, $set->remrk);
              $rowCount++;
          }
          // Instantiate a Writer to create an OfficeOpenXML Excel .xlsx file
          $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
          // Write the Excel file to filename some_excel_file.xlsx in the current directory
          $objWriter->save($name.'.xlsx');
       }
     }
   }
 }
}
?>
