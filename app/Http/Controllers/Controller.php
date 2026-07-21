<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function recruitment(Request $req)
    {
        $data = $req->all();
        $html = view('pdf_template.RecruitmentForm', compact('data'))->render();

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'default_font' => 'dejavusans',
            'format' => 'A4-P',
            'pagenumPrefix' => 'Page ',
            'pagenumSuffix' => ' / ',
            'setAutoTopMargin' => 'stretch'
        ]);
        $mpdf->curlAllowUnsafeSslRequests = false;
        $mpdf->defaultfooterline = 0;
        $mpdf->WriteHTML($html);
        $filePath = "recruitment.pdf";
        return $mpdf->Output($filePath, 'D');
    }
    public function ExpenclaimPDF(Request $req)
    {
        $data = $req->all();
        if($data["Type"] == "Expense Claim Form"){
            $html = view('pdf_template.ExpenClaimPDF', compact('data'))->render();
        }
        elseif($data["Type"] == "Material Request Form"){
           $html = view('pdf_template.MaterialRequestFormPDF', compact('data'))->render();
        }
        elseif($data["Type"] == "Cash Advance Form"){
            $html = view('pdf_template.CashAdvanceFormPDF', compact('data'))->render();
        }
        

        $mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8',
            'default_font' => 'dejavusans',
            'format' => 'A4-P',
            'pagenumPrefix' => 'Page ',
            'pagenumSuffix' => ' / ',
            'setAutoTopMargin' => 'stretch'
        ]);
        $mpdf->curlAllowUnsafeSslRequests = false;
        $mpdf->defaultfooterline = 0;
        $mpdf->WriteHTML($html);
        $filePath = "ExpenClaimPDF.pdf";
        return $mpdf->Output($filePath, 'D');
    }
}
