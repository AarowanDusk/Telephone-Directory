<?php
// include '../PHPExcel-1.8/Classes/PHPExcel.php';
// include '../PHPExcel-1.8/Classes/PHPExcel/IOFactory.php';
// include these files on the files where this file to be included
    class xls_read{
      private $tmpfname;
      public function load_file($temp){
        //load data of the excel file
        $this->tmpfname = $temp;
        $excelReader = PHPExcel_IOFactory::createReaderForFile($this->tmpfname);
    		$excelObj = $excelReader->load($this->tmpfname);
    		$worksheet = $excelObj->getSheet(0);
    		$lastRow = $worksheet->getHighestRow();


        return array(
           'row'    => $lastRow,
           'work_sheet' => $worksheet
         );
      }
    }

    $out = new xls_read();
    // $r = $out->load_file("Book1.xlsx");
    // echo "<table>";
    // for ($row = 2; $row <= $r['row']; $row++) {
    //    echo "<tr><td>";
    //    echo $r['work_sheet']->getCell('A'.$row)->getValue();
    //    echo "</td><td>";
    //    echo $r['work_sheet']->getCell('B'.$row)->getValue();
    //    echo "</td><td>";
    //    echo $r['work_sheet']->getCell('C'.$row)->getValue();
    //    echo "</td></tr>";
    // }
    // echo "</table>";
?>
