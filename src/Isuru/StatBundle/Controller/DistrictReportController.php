<?php

namespace Isuru\StatBundle\Controller;

//require 'PDF.php';
//;
//use Isuru\StatBundle\Temp\PDF;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DistrictReportController extends Controller {

    public function indexAction(Request $request) {


        $district = $request->get('district');
        
        $em = $this->getDoctrine()->getEntityManager();
        $connection = $em->getConnection();

        $statement = $connection->prepare("select district, occupation, gender, (case 
                                      when datediff(current_date, str_to_date(dateofbirth,'%m/%d/%Y'))/365 < 30 then '1'
                                      when datediff(current_date, str_to_date(dateofbirth,'%m/%d/%Y'))/365 between 30 and 50 then '2'
                                      else '3'
                                      end
                                     ) as t, sum(hours) from Employment join VolunteerPersonal join Profile join VolunteerContactDetails
                                     on VolunteerPersonal.user=Employment.user and Employment.user=Profile.user and Employment.user=VolunteerContactDetails.user
                                     group by occupation, gender, t having district = '$district' order by occupation, gender, t");

        $statement->execute();
        $hoursByProfession = $statement->fetchAll();

        $statement = $connection->prepare("select district, gender, (case 
                                      when datediff(current_date, str_to_date(dateofbirth,'%m/%d/%Y'))/365 < 20 then '00-20'
                                      when datediff(current_date, str_to_date(dateofbirth,'%m/%d/%Y'))/365 between 20 and 30 then '20-30'
                          when datediff(current_date, str_to_date(dateofbirth,'%m/%d/%Y'))/365 between 30 and 40 then '30-40'
                          when datediff(current_date, str_to_date(dateofbirth,'%m/%d/%Y'))/365 between 40 and 50 then '40-50'
                          when datediff(current_date, str_to_date(dateofbirth,'%m/%d/%Y'))/365 between 50 and 60 then '50-60'
                                      else 'over 60'
                                      end
                                     ) as t, sum(hours) from VolunteerPersonal join Profile join VolunteerContactDetails on VolunteerPersonal.user=Profile.user and Profile.user=VolunteerContactDetails.user group by  gender, t having district = '$district' order by  t,gender");

        $statement->execute();
        $hoursByAgeGroup = $statement->fetchAll();

        

        $statement = $connection->prepare("select district, occupation, gender, (case 
                                      when datediff(current_date, str_to_date(dateofbirth,'%m/%d/%Y'))/365 < 30 then '1'
                                      when datediff(current_date, str_to_date(dateofbirth,'%m/%d/%Y'))/365 between 30 and 50 then '2'
                                      else '3'
                                      end
                                     ) as t, sum(hours*value) from Employment join VolunteerPersonal join Profile join VolunteerContactDetails
                                     on VolunteerPersonal.user=Employment.user and Employment.user=Profile.user and Employment.user=VolunteerContactDetails.user
                                     group by occupation, gender, t having district = '$district' order by occupation, gender, t");

        $statement->execute();
        $valueByProfession = $statement->fetchAll();

        $statement = $connection->prepare("select district, gender, (case 
                                      when datediff(current_date, str_to_date(dateofbirth,'%m/%d/%Y'))/365 < 20 then '00-20'
                                      when datediff(current_date, str_to_date(dateofbirth,'%m/%d/%Y'))/365 between 20 and 30 then '20-30'
                          when datediff(current_date, str_to_date(dateofbirth,'%m/%d/%Y'))/365 between 30 and 40 then '30-40'
                          when datediff(current_date, str_to_date(dateofbirth,'%m/%d/%Y'))/365 between 40 and 50 then '40-50'
                          when datediff(current_date, str_to_date(dateofbirth,'%m/%d/%Y'))/365 between 50 and 60 then '50-60'
                                      else 'over 60'
                                      end
                                     ) as t, sum(hours*value) from VolunteerPersonal join Profile join VolunteerContactDetails on VolunteerPersonal.user=Profile.user and Profile.user=VolunteerContactDetails.user group by  gender, t having district = '$district' order by  t,gender");

        $statement->execute();
        $valueByAgeGroup = $statement->fetchAll();



        $list = $request->get('check_list4');


        require_once 'PDF.php';

        //catch volunteer ID
        //create a pdf
        $pdf = new \PDF("P", "mm", "A4");

        $pdf->SetMargins(25.4, 25.4, 25.4);
        $pdf->AddPage();
        $pdf->SetTopMargin(25.4);

        $pdf->SetTextColor(000, 000, 000);
        $pdf->SetFont('Times', '', 24);
        $pdf->SetXY(25.4, 100);
        $pdf->MultiCell(0, 10, 'DISTRICT VOLUNTEER REPORT ('.$district.')', 0, 'L');
        $pdf->SetY($pdf->GetY() + 10);
        $pdf->SetFont('Times', '', 20);
        $pdf->MultiCell(0, 6, 'PRELIMINARY REPORT', 0, 'L');
        $pdf->SetY($pdf->GetY() + 10);
        $pdf->SetFont('Times', '', 18);
        $pdf->MultiCell(0, 6, 'NATIONAL VOLUNTEERING SECRETARIAT', 0, 'L');
        $pdf->SetY($pdf->GetY() + 10);

        foreach ($list as $value) {
            switch ($value) {
                
                case 1:
                    if ($hoursByProfession != null) {
                        $pdf->AddPage();
                        $pdf->SetY(25.4);
                        $pdf->SetFont('Times', '', 16);
                        $pdf->MultiCell(0, 6, 'Volunteer hours by Age group, Gender and Profession', 0, 'C');
                        $pdf->SetY($pdf->GetY() + 10);
                        $pdf->SetFont('Times', '', 12);

                        $pdf->SetFont('Arial', 'B', 12); //Set the Font type to Arial,Bold with size 12 Pt
                        $pdf->SetTextColor(0); //Set the Text Color
                        $pdf->SetFillColor(000, 188, 225); //Fill the text with RGB Color
                        $pdf->SetLineWidth(0.2); //Set the Line Width to 1pt

                        $pdf->Cell(25, 10, 'Profession', 'LTR', 0, 'C', !true);
                        $pdf->Cell(45, 5, 'Male', 'LTR', 0, 'C', !true);
                        $pdf->Cell(45, 5, 'Female', 'LTR', 0, 'C', !true);
                        $pdf->Cell(45, 5, 'Total', 'LTR', 1, 'C', !true);
                        $pdf->SetX(50.4);
                        $pdf->SetFont('Times', '', 10);
                        $pdf->Cell(15, 5, 'Below 30', 'LTR', 0, 'C', !true);
                        $pdf->Cell(15, 5, '30-50', 'LTR', 0, 'C', !true);
                        $pdf->Cell(15, 5, 'Over 50', 'LTR', 0, 'C', !true);
                        $pdf->Cell(15, 5, 'Below 30', 'LTR', 0, 'C', !true);
                        $pdf->Cell(15, 5, '30-50', 'LTR', 0, 'C', !true);
                        $pdf->Cell(15, 5, 'Over 50', 'LTR', 0, 'C', !true);
                        $pdf->Cell(15, 5, 'Below 30', 'LTR', 0, 'C', !true);
                        $pdf->Cell(15, 5, '30-50', 'LTR', 0, 'C', !true);
                        $pdf->Cell(15, 5, 'Over 50', 'LTR', 1, 'C', !true);
                        $predis = 'null';
                        $b30M = 0;
                        $mM = 0;
                        $o30M = 0;
                        $b30F = 0;
                        $mF = 0;
                        $o30F = 0;
                        $pdf->SetFillColor(238);
                        $fill = false;
                        for ($i = 0; $i < count($hoursByProfession); $i++) {
                            if ($predis != $hoursByProfession[$i]['occupation']) {
                                if ($predis != 'null') {
                                    $pdf->Cell(25, 5, $predis, 1, 0, 'C', $fill);
                                    $pdf->Cell(15, 5, $b30M, 1, 0, 'C', $fill);
                                    $pdf->Cell(15, 5, $mM, 1, 0, 'C', $fill);
                                    $pdf->Cell(15, 5, $o30M, 1, 0, 'C', $fill);
                                    $pdf->Cell(15, 5, $b30F, 1, 0, 'C', $fill);
                                    $pdf->Cell(15, 5, $mF, 1, 0, 'C', $fill);
                                    $pdf->Cell(15, 5, $o30F, 1, 0, 'C', $fill);
                                    $pdf->Cell(15, 5, $b30F + $b30M, 1, 0, 'C', $fill);
                                    $pdf->Cell(15, 5, $mF + $mM, 1, 0, 'C', $fill);
                                    $pdf->Cell(15, 5, $o30F + $o30M, 1, 1, 'C', $fill);
                                    $fill = !$fill;
                                }
                                $b30M = 0;
                                $mM = 0;
                                $o30M = 0;
                                $b30F = 0;
                                $mF = 0;
                                $o30F = 0;
                            }

                            $predis = $hoursByProfession[$i]['occupation'];
                            if ($hoursByProfession[$i]['gender'] == "F") {
                                switch ($hoursByProfession[$i]['t']) {
                                    case 1:
                                        $b30F = $hoursByProfession[$i]['sum(hours)'];
                                        break;
                                    case 2:
                                        $mF = $hoursByProfession[$i]['sum(hours)'];
                                        break;
                                    case 3:
                                        $o30F = $hoursByProfession[$i]['sum(hours)'];
                                        break;
                                }
                            } else {
                                switch ($hoursByProfession[$i]['t']) {
                                    case 1:
                                        $b30M = $hoursByProfession[$i]['sum(hours)'];
                                        break;
                                    case 2:
                                        $mM = $hoursByProfession[$i]['sum(hours)'];
                                        break;
                                    case 3:
                                        $o30M = $hoursByProfession[$i]['sum(hours)'];
                                        break;
                                }
                            }
                            if ($i == count($hoursByProfession) - 1) {
                                $pdf->Cell(25, 5, $predis, 1, 0, 'C', $fill);
                                $pdf->Cell(15, 5, $b30M, 1, 0, 'C', $fill);
                                $pdf->Cell(15, 5, $mM, 1, 0, 'C', $fill);
                                $pdf->Cell(15, 5, $o30M, 1, 0, 'C', $fill);
                                $pdf->Cell(15, 5, $b30F, 1, 0, 'C', $fill);
                                $pdf->Cell(15, 5, $mF, 1, 0, 'C', $fill);
                                $pdf->Cell(15, 5, $o30F, 1, 0, 'C', $fill);
                                $pdf->Cell(15, 5, $b30F + $b30M, 1, 0, 'C', $fill);
                                $pdf->Cell(15, 5, $mF + $mM, 1, 0, 'C', $fill);
                                $pdf->Cell(15, 5, $o30F + $o30M, 1, 1, 'C', $fill);
                                $fill = !$fill;
                            }
                        }
                    }
                    break;
                case 2:
                    if ($hoursByAgeGroup != null) {
                        $pdf->AddPage();
                        $pdf->SetY(25.4);
                        $pdf->SetFont('Times', '', 16);
                        $pdf->MultiCell(0, 6, 'Volunteer hours by Gender and Age group', 0, 'C');
                        $pdf->SetY($pdf->GetY() + 10);
                        $pdf->SetFont('Times', '', 12);

                        $pdf->SetFont('Arial', 'B', 12); //Set the Font type to Arial,Bold with size 12 Pt
                        $pdf->SetTextColor(0); //Set the Text Color
                        $pdf->SetFillColor(000, 188, 225); //Fill the text with RGB Color
                        $pdf->SetLineWidth(0.2); //Set the Line Width to 1pt

                        $pdf->Cell(40, 7, 'Age Group', 'LTR', 0, 'C', !true);
                        $pdf->Cell(40, 7, 'Male', 'LTR', 0, 'C', !true);
                        $pdf->Cell(40, 7, 'Female', 'LTR', 0, 'C', !true);
                        $pdf->Cell(40, 7, 'Total', 'LTR', 1, 'C', !true);
                        $preGroup = 'null';
                        $M = 0;
                        $F = 0;
                        $pdf->SetFont('Times', '', 12);
                        $pdf->SetFillColor(238);
                        $fill = false;
                        for ($i = 0; $i < count($hoursByAgeGroup); $i++) {
                            if ($preGroup != $hoursByAgeGroup[$i]['t']) {
                                if ($preGroup != 'null') {
                                    $pdf->Cell(40, 5, $preGroup, 1, 0, 'C', $fill);
                                    $pdf->Cell(40, 5, $M, 1, 0, 'C', $fill);
                                    $pdf->Cell(40, 5, $F, 1, 0, 'C', $fill);
                                    $pdf->Cell(40, 5, $M + $F, 1, 1, 'C', $fill);
                                    $fill = !$fill;
                                }
                                $M = 0;
                                $F = 0;
                            }

                            $preGroup = $hoursByAgeGroup[$i]['t'];
                            if ($hoursByAgeGroup[$i]['gender'] == "F") {
                                $F = $hoursByAgeGroup[$i]['sum(hours)'];
                            } else {
                                $M = $hoursByAgeGroup[$i]['sum(hours)'];
                            }
                            if ($i == count($hoursByAgeGroup) - 1) {
                                $pdf->Cell(40, 5, $preGroup, 1, 0, 'C', $fill);
                                $pdf->Cell(40, 5, $M, 1, 0, 'C', $fill);
                                $pdf->Cell(40, 5, $F, 1, 0, 'C', $fill);
                                $pdf->Cell(40, 5, $M + $F, 1, 1, 'C', $fill);
                                $fill = !$fill;
                            }
                        }
                    }
                    break;
                
                case 3:
                    if ($valueByProfession != null) {
                        $pdf->AddPage();
                        $pdf->SetY(25.4);
                        $pdf->SetFont('Times', '', 16);
                        $pdf->MultiCell(0, 6, 'Volunteer value by Age group, Gender and Profession', 0, 'C');
                        $pdf->SetY($pdf->GetY() + 10);
                        $pdf->SetFont('Times', '', 12);

                        $pdf->SetFont('Arial', 'B', 12); //Set the Font type to Arial,Bold with size 12 Pt
                        $pdf->SetTextColor(0); //Set the Text Color
                        $pdf->SetFillColor(000, 188, 225); //Fill the text with RGB Color
                        $pdf->SetLineWidth(0.2); //Set the Line Width to 1pt

                        $pdf->Cell(25, 10, 'Profession', 'LTR', 0, 'C', !true);
                        $pdf->Cell(45, 5, 'Male', 'LTR', 0, 'C', !true);
                        $pdf->Cell(45, 5, 'Female', 'LTR', 0, 'C', !true);
                        $pdf->Cell(45, 5, 'Total', 'LTR', 1, 'C', !true);
                        $pdf->SetX(50.4);
                        $pdf->SetFont('Times', '', 10);
                        $pdf->Cell(15, 5, 'Below 30', 'LTR', 0, 'C', !true);
                        $pdf->Cell(15, 5, '30-50', 'LTR', 0, 'C', !true);
                        $pdf->Cell(15, 5, 'Over 50', 'LTR', 0, 'C', !true);
                        $pdf->Cell(15, 5, 'Below 30', 'LTR', 0, 'C', !true);
                        $pdf->Cell(15, 5, '30-50', 'LTR', 0, 'C', !true);
                        $pdf->Cell(15, 5, 'Over 50', 'LTR', 0, 'C', !true);
                        $pdf->Cell(15, 5, 'Below 30', 'LTR', 0, 'C', !true);
                        $pdf->Cell(15, 5, '30-50', 'LTR', 0, 'C', !true);
                        $pdf->Cell(15, 5, 'Over 50', 'LTR', 1, 'C', !true);
                        $predis = 'null';
                        $b30M = 0;
                        $mM = 0;
                        $o30M = 0;
                        $b30F = 0;
                        $mF = 0;
                        $o30F = 0;
                        $pdf->SetFillColor(238);
                        $fill = false;
                        for ($i = 0; $i < count($valueByProfession); $i++) {
                            if ($predis != $valueByProfession[$i]['occupation']) {
                                if ($predis != 'null') {
                                    $pdf->Cell(25, 5, $predis, 1, 0, 'C', $fill);
                                    $pdf->Cell(15, 5, $b30M, 1, 0, 'C', $fill);
                                    $pdf->Cell(15, 5, $mM, 1, 0, 'C', $fill);
                                    $pdf->Cell(15, 5, $o30M, 1, 0, 'C', $fill);
                                    $pdf->Cell(15, 5, $b30F, 1, 0, 'C', $fill);
                                    $pdf->Cell(15, 5, $mF, 1, 0, 'C', $fill);
                                    $pdf->Cell(15, 5, $o30F, 1, 0, 'C', $fill);
                                    $pdf->Cell(15, 5, $b30F + $b30M, 1, 0, 'C', $fill);
                                    $pdf->Cell(15, 5, $mF + $mM, 1, 0, 'C', $fill);
                                    $pdf->Cell(15, 5, $o30F + $o30M, 1, 1, 'C', $fill);
                                    $fill = !$fill;
                                }
                                $b30M = 0;
                                $mM = 0;
                                $o30M = 0;
                                $b30F = 0;
                                $mF = 0;
                                $o30F = 0;
                            }

                            $predis = $valueByProfession[$i]['occupation'];
                            if ($valueByProfession[$i]['gender'] == "F") {
                                switch ($valueByProfession[$i]['t']) {
                                    case 1:
                                        $b30F = $valueByProfession[$i]['sum(hours*value)'];
                                        break;
                                    case 2:
                                        $mF = $valueByProfession[$i]['sum(hours*value)'];
                                        break;
                                    case 3:
                                        $o30F = $valueByProfession[$i]['sum(hours*value)'];
                                        break;
                                }
                            } else {
                                switch ($valueByProfession[$i]['t']) {
                                    case 1:
                                        $b30M = $valueByProfession[$i]['sum(hours*value)'];
                                        break;
                                    case 2:
                                        $mM = $valueByProfession[$i]['sum(hours*value)'];
                                        break;
                                    case 3:
                                        $o30M = $valueByProfession[$i]['sum(hours*value)'];
                                        break;
                                }
                            }
                            if ($i == count($valueByProfession) - 1) {
                                $pdf->Cell(25, 5, $predis, 1, 0, 'C', $fill);
                                $pdf->Cell(15, 5, $b30M, 1, 0, 'C', $fill);
                                $pdf->Cell(15, 5, $mM, 1, 0, 'C', $fill);
                                $pdf->Cell(15, 5, $o30M, 1, 0, 'C', $fill);
                                $pdf->Cell(15, 5, $b30F, 1, 0, 'C', $fill);
                                $pdf->Cell(15, 5, $mF, 1, 0, 'C', $fill);
                                $pdf->Cell(15, 5, $o30F, 1, 0, 'C', $fill);
                                $pdf->Cell(15, 5, $b30F + $b30M, 1, 0, 'C', $fill);
                                $pdf->Cell(15, 5, $mF + $mM, 1, 0, 'C', $fill);
                                $pdf->Cell(15, 5, $o30F + $o30M, 1, 1, 'C', $fill);
                                $fill = !$fill;
                            }
                        }
                    }
                    break;
                case 4:
                    if ($valueByAgeGroup != null) {
                        $pdf->AddPage();
                        $pdf->SetY(25.4);
                        $pdf->SetFont('Times', '', 16);
                        $pdf->MultiCell(0, 6, 'Volunteer value by Gender and Age group', 0, 'C');
                        $pdf->SetY($pdf->GetY() + 10);
                        $pdf->SetFont('Times', '', 12);

                        $pdf->SetFont('Arial', 'B', 12); //Set the Font type to Arial,Bold with size 12 Pt
                        $pdf->SetTextColor(0); //Set the Text Color
                        $pdf->SetFillColor(000, 188, 225); //Fill the text with RGB Color
                        $pdf->SetLineWidth(0.2); //Set the Line Width to 1pt

                        $pdf->Cell(40, 7, 'Age Group', 'LTR', 0, 'C', !true);
                        $pdf->Cell(40, 7, 'Male', 'LTR', 0, 'C', !true);
                        $pdf->Cell(40, 7, 'Female', 'LTR', 0, 'C', !true);
                        $pdf->Cell(40, 7, 'Total', 'LTR', 1, 'C', !true);
                        $preGroup = 'null';
                        $M = 0;
                        $F = 0;
                        $pdf->SetFont('Times', '', 12);
                        $pdf->SetFillColor(238);
                        $fill = false;
                        for ($i = 0; $i < count($valueByAgeGroup); $i++) {
                            if ($preGroup != $valueByAgeGroup[$i]['t']) {
                                if ($preGroup != 'null') {
                                    $pdf->Cell(40, 5, $preGroup, 1, 0, 'C', $fill);
                                    $pdf->Cell(40, 5, $M, 1, 0, 'C', $fill);
                                    $pdf->Cell(40, 5, $F, 1, 0, 'C', $fill);
                                    $pdf->Cell(40, 5, $M + $F, 1, 1, 'C', $fill);
                                    $fill = !$fill;
                                }
                                $M = 0;
                                $F = 0;
                            }

                            $preGroup = $valueByAgeGroup[$i]['t'];
                            if ($valueByAgeGroup[$i]['gender'] == "F") {
                                $F = $valueByAgeGroup[$i]['sum(hours*value)'];
                            } else {
                                $M = $valueByAgeGroup[$i]['sum(hours*value)'];
                            }
                            if ($i == count($valueByAgeGroup) - 1) {
                                $pdf->Cell(40, 5, $preGroup, 1, 0, 'C', $fill);
                                $pdf->Cell(40, 5, $M, 1, 0, 'C', $fill);
                                $pdf->Cell(40, 5, $F, 1, 0, 'C', $fill);
                                $pdf->Cell(40, 5, $M + $F, 1, 1, 'C', $fill);
                                $fill = !$fill;
                            }
                        }
                    }
                    break;
            }
        }

        return new Response($pdf->Output(), 200, array(
                    'Content-Type' => 'application/pdf'));
    }

    public function volunteerAction() {
        return $this->render('IsuruStatBundle:Default:index.html.twig');
    }

}
