<?php
    // CONFIG STARTS HERE by ARCHEZ
    // FOR GESIOR AAC ONLY!
    
    //GUIDE:
    // LINES COMMENTED WITH (//) MUST NOT BE CHANGED.
    ## LINES COMMENTED WITH (##) _CAN_ BE CHANGED.
    
#    TURN IT ON or OFF - with TRUE as ON and FALSE as OFF!
    $downloads['on'] = true;
    
    // DONT MOVE //
    $c1 = $config['site']['darkborder'];
//    $c2 = $config['site']['lightborder'];
    $c3 = $config['site']['vdarkborder'];

#    Server client version (i.e. 854)
    $downloads['client_version'] = '854';
    
#    IP Changer from OTCHANGER.NET
    $downloads['ip_enabled'] = true;
    
    // DONT MOVE //
    $downloads['windows'] = 'http://www.mediafire.com/download/49j7zq1ue742n04/DybbukOT+10.94.rar'.'10.94';
    $downloads['linux'] = 'http://dybbuk.sytes.net/?subtopic=download&action=downloadagreement'.'IP';

#    Tibia Loader from OTSERVLIST.ORG
#    // ENABLE TIBIA LOADER DOWNLOAD? (yes = true / no = false)
    $downloads['otservlist'] = true;
#    // YOUR IPC (unique download number to get coins on otservlist)
    $downloads['ipc'] = 'http://www.mediafire.com/file/9g6im97va1po65n/DybkOT10.97.zip'.'IP';
    

    // DONT MOVE //
    $downloads['ipchanger'] = '';
    $downloads['link'] = '';

    // CONFIG ENDS HERE by ARCHEZ
    $main_content .= '<table border="0" cellspacing="1" cellpadding="4" width="100%">
        <tr bgcolor="'.$c3.'"><td colspan="1" class="white"><center><b>Disclaimer</b></center></td></tr>
        <tr bgcolor="'.$c1.'"><td>When downloading the tibia client, you agree that the use of the software is at your sole risk.
        The software and any related documentation is provided "as is" without warranty of any kind.
        The entire risk arising out of use of the software remains with you.
        In no event shall '.$config['site']['worlds']['0'].' be liable for any damages to your computer or loss of data.</td></tr>
        </table><br />';
        if($downloads['on'] == true)
    {
       // $main_content .= '
       // <table border="0" cellspacing="1" cellpadding="4" width="100%">
       // <tr bgcolor="'.$c3.'"><td colspan="2" class="white"><center><b>Cliente 10.53 e IP Changer</b></center></td></tr>
       // <tr bgcolor="'.$c1.'"><td width="50%"><center><a href="'.$downloads['windows'].'">Cliente 10.53</a></center></td><td><center><a href="'.$downloads['linux'].'">IP Changer</a></center></td></tr>
       // </table>';
        
        
        if($downloads['otservlist'] == true)
                $main_content .= '
                <br />
                <table border="0" cellspacing="1" cellpadding="4" width="100%">
                <tr bgcolor="'.$c3.'"><td colspan="1" class="white"><center><b>Cliente Propio 10.97</b></center></td></tr>
                <tr bgcolor="'.$c1.'"><td width="50%"><center><a href="'.$downloads['link'].''.$downloads['ipc'].'" target="_blank">Cliente Propio 10.97!</a></center></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr><td></td></tr>
				<tr bgcolor="'.$c3.'"><td colspan="1" class="white"><center><b>TEST Server 10.94</b></center></td></tr>
                <tr bgcolor="'.$c1.'"><td width="50%"><center><a href="'.$downloads['link'].''.$downloads['windows'].'" target="_blank">PRUEVA NUESTRA NUEVA VERSION!</a></center></td></tr>
				</table>'
				;
    }
            else
                    $main_content .= 'Downloads... plain text.';
?>