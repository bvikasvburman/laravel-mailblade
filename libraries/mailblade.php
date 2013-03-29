<?php

/**
 * Mailblade class
 *
 * A Laravel bundle for managing your email templates
 * and sending them.
 * 
 * @package    Mailblade
 * @author     Carlos Castillo (http://carlos.castillo.com.co)
 * @link       https://github.com/crlosmify/laravel-mailblade
 * @license    MIT License
 */

class Mailblade {

  /**
   * Method of sending email messages (smtp, postmark or mandrill)
   * @var string
   */
  private $sending_method;

 /**
   * Inbox where you will receive the email messages
   * @var string
   */
  private $inbound_inbox;
  
  /**
   * Email template used for the message
   * @var Template
   */
  public $template;

  #             ~ ---------- ~              #
  
  /**
   * Create a new Mailblade instance
   *
   * @param  string   $sending_method
   * @param  string   $inbound_inbox
   * @return void
   */
  public function __construct($sending_method=null, $inbound_inbox=null)
  {
    
  }

  /**
   * Create a new Mailblade instance
   *
   * @param  string    $sending_method
   * @param  string    $inbound_inbox 
   * @return Contacto
   */
  public static function make($sending_method=null, $inbound_inbox=null)
  {
    
  }

  #             ~ ---------- ~              #
  
  /**
   * Set email template to be used
   *
   * @param  string  $name     Name of the template
   * @param  array   $params   Parameters for the template
   * @return Template
   */
  public function template($name=null, array $params=null)
  {
    
  }

  /**
   * Send email message
   * 
   * @param   array   $input
   * @return  bool
   */
  public function send(array $input)
  {
    
  }

  #             ~ ---------- ~              #
  
  /**
   * Use your own server to send the email
   * 
   * @param   array    $input Input from user
   * @return  bool
   */
  public function smtp(array $input)
  {

  }

  /**
   * Use Postmark to send the email
   * 
   * @param   array    $input Input from user
   * @return  bool
   */
  public function postmark(array $input)
  {

  }

}