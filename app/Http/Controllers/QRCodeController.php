<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QRCodeController extends Controller
{
    public function index()
    {
        return view('qr-code');
    }

    public function generateQrCode(Request $request)
    {
        if ($request->qrCode) {
            $qrCode = qrCode::generate($request->qrCode);
            // dd($qrCode);
            return back()->with('qrCode', $qrCode);
        }
    }
}
