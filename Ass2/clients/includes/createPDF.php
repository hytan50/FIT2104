<?php
  class CreatePDF {
    function ClientPDF($header, $headerWidth, $data) {
      $pdf = new TCPDF("L");
      $pdf->setHeaderData('', '', "Famox Client List");
      $pdf->setHeaderFont(array('HelveticaB', '', 30));
      $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
      $pdf->AddPage();
      $pdf->Ln();
      $table = '<table cellpadding="5" cellspacing="5" border="0">';
      $table .= '<tr bgcolor="#00ced1">';  // turquoise background colour
      for ($i=0; $i<sizeof($header); ++$i) {
        $table .= '<td class="heading" width="'.$headerWidth[$i].'">'.$header[$i].'</td>';
      }
      $table .="</tr>";

      $rowCount = 0;
      foreach ($data as $row){
        if ($rowCount % 2 == 0) {
          $table.='<tr valign="top" bgcolor="#afeeee">';  // pale turquoise background colour, happens every 2 lines
        } else {
          $table.='<tr valign="top">';
        }

        // $row = array(id, first_name, last_name, address_street, address_suburb, address_state, address_postcode, email, phone);
        $table.='<td>'.$row[0].'</td>';
        $table.='<td>'.$row[1].' '.$row[2].'</td>';
        $table.='<td>'.$row[7].'</td>';
        $table.='<td>'.$row[8].'</td>';
        $table.='<td>'.$row[3].', '. $row[4].', '. $row[5].' '.$row[6].'</td></tr>';
        $rowCount++;
      }
      $table .="</table>";
      // Write HTML code to pdf and send to browser
      $pdf->writeHTML($table, true, true, true, true, '');
      $pdf->Output('Client_List.pdf', 'I');  // Output is sent straight to the buffer
      return $table;
    }
  }
?>
