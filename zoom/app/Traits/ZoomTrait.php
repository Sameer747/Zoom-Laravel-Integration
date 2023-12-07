<?php
namespace App\Traits;

use Illuminate\Http\Request;
use Jubaer\Zoom\Facades\Zoom;

trait ZoomTrait
{
    function createMeeting()
    {
        $Create_meetings = Zoom::createMeeting([
            "agenda" => "Test Sameer",
            "topic" => "Test Sameer",
            "type" => 2,
            "duration" => "60",
            "timezone" => 'Asia/Dhaka',
            "password" => "123456",
            "start_time" => '9:00AM',
            "template_id" => "Dv4YdINdTk+Z5RToadh5ug==",
            "pre_schedule" => false,
            "schedule_for" => "sameer.mohsin@ideas.com.pk",
            "settings" => [
                'join_before_host' => false, // if you want to join before host set true otherwise set false
                'host_video' => false, // if you want to start video when host join set true otherwise set false
                'participant_video' => false, // if you want to start video when participants join set true otherwise set false
                'mute_upon_entry' => false, // if you want to mute participants when they join the meeting set true otherwise set false
                'waiting_room' => false, // if you want to use waiting room for participants set true otherwise set false
                'audio' => 'both', // values are 'both', 'telephony', 'voip'. default is both.
                'auto_recording' => 'none', // values are 'none', 'local', 'cloud'. default is none.
                'approval_type' => 0, // 0 => Automatically Approve, 1 => Manually Approve, 2 => No Registration Required
            ],

        ]);
        $meetingID = $Create_meetings['data']['id'];
        $url = $Create_meetings['data']['join_url'];
        $response = [
            $meetingID => $url,
        ];
        return $response;
    }
    function updateMeeting()
    {
        $meetingId = 84090662121;
        $Update_meetings = Zoom::updateMeeting($meetingId, [
            "agenda" => "Test",
            "topic" => "Test ",
            "type" => 2,
            "duration" => "60",
            "timezone" => 'Asia/Dhaka',
            "password" => "123456",
            "start_time" => '9:00AM',
            "template_id" => "Dv4YdINdTk+Z5RToadh5ug==",
            "pre_schedule" => false,
            "schedule_for" => "sameer.mohsin@ideas.com.pk",
            "settings" => [
                'join_before_host' => false, // if you want to join before host set true otherwise set false
                'host_video' => false, // if you want to start video when host join set true otherwise set false
                'participant_video' => false, // if you want to start video when participants join set true otherwise set false
                'mute_upon_entry' => false, // if you want to mute participants when they join the meeting set true otherwise set false
                'waiting_room' => false, // if you want to use waiting room for participants set true otherwise set false
                'audio' => 'both', // values are 'both', 'telephony', 'voip'. default is both.
                'auto_recording' => 'none', // values are 'none', 'local', 'cloud'. default is none.
                'approval_type' => 0, // 0 => Automatically Approve, 1 => Manually Approve, 2 => No Registration Required
            ],
        ]);
        return dd($Update_meetings);
    }
    function deleteMeeting()
    {
        $meetingId = 84090662121;
        $Deletemeeting = Zoom::deleteMeeting($meetingId);
        return dd($Deletemeeting);
    }
    function GetMeeting()
    {
        $meetingId = 84090662121;
        $Getmeetings = Zoom::getMeeting($meetingId);
        return dd($Getmeetings);
    }
}
