<?php

namespace App\Http\Controllers;

use App\Traits\ZoomTrait;
use Illuminate\Http\Request;
use Jubaer\Zoom\Facades\Zoom;

class ZoomController extends Controller
{
    use ZoomTrait;
    function create_Meeting(Request $request)
    {
        $this->createMeeting();
    }
    function update_Meeting()
    {
        $this->updateMeeting();
    }
    function delete_Meeting()
    {
        $this->deleteMeeting();
    }
    function Get_Meeting()
    {
        $this->GetMeeting();
    }
}
