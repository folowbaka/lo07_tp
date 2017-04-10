<?php

/**
 * Created by IntelliJ IDEA.
 * User: Folow
 * Date: 10/04/2017
 * Time: 13:08
 */
interface WBinterface
{
    public function valide();
    public function pageKO();
    public function pageOK();
    public function sauveTXT();
    public function sauveXML($file);
    public function sauveBDR($base);
}