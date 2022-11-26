<?php
class c_comfirmation_screen{
    public function show_comfirmation_screen(){
        if (isset($_GET['ve'])){
            $id=$_GET['ve'];
            $m_ticket=new m_ticket();
            $ve=$m_ticket->show_ticket_booking($id);
            include_once 'view/confirmation_screen.php';
        }
    }
}