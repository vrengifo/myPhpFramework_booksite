<?php 
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * 
 *                                                       * 
 *          Program:    Web Development Diploma          *
 *          Signature:  Intermediate PHP                 *
 *          Instructor: Steve George                     *
 *          Student:    Victor Rengifo                   *
 *                                                       *
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 
 Assignment: 2
 Date: 2019-04-30
 Project: VR Solutions Website
 Version: 1.2
 File: functions.php

*********************************************************/

  /**
   * Escape string for general use in HTML
   * @param  String $string data to be sanitized
   * @return Sring
   */
  function e($string){
  	return htmlentities($string, null, 'UTF-8');
  }

  /**
   * Escape string for general use in HTML attributes
   * @param  String $string data to be sanitized
   * @return String
   */
  function e_attr($string){
  	return htmlentities($string, ENT_QUOTES, 'UTF-8');
  }

  /**
   * Check the value in $_POST[$field] and return the value of ''
   * @param  String $field name of the field
   * @return String value or ''
   */
  function cleanPOST($field){
    if(!empty($_POST[$field])){
      return e_attr($_POST[$field]);
    } else 
    return '';
  }

  /**
   * Check the value in $_GET[$field] and return the value of ''
   * @param  String $field name of the field
   * @return String value or ''
   */
  function cleanGET($field){
    if(!empty($_GET[$field])){
      return e_attr($_GET[$field]);
    } else 
    return '';
  }

  /**
   * Verify if the value is in the checkbox array
   * @param  String  $field name of the checkbox in $_POST
   * @param  String  $value value to find
   * @return String  if the value exists return 'checked', otherwise ''
   */
  function isCheckboxChecked($field,$value){
    if(!empty($_POST[$field]) && in_array($value,$_POST[$field])) 
      return 'checked';
    else 
      return ''; 
  }

  /**
   * Replace _ with blank space in the key
   * @param  String $key attribute name of the field
   * @return String 
   */
  function label($key){
    return ucwords(str_replace('_', ' ', $key));
  }

  /**
   * String to create the breadcrumb
   * @param  String $page name of the current page
   * @return String
   */
  function breadcrumb($page){
    $str = '';
    if($page=='index.php'){
      $str = "Home";
    } else {
      $str = '<a href="index.php">Home</a> | ';
      switch (trim($page)) {
        case 'about.php':
          $p = 'About us';
          break;
        case 'services.php':
          $p = 'Our Services';
          break;
        case 'partners.php':
          $p = 'Our Partners';
          break;
        case 'contact.php':
          $p = 'Contact us';
          break;
        case 'register.php':
          $p = 'Register';
          break;
        case 'login.php':
          $p = 'Login';
          break;
        case 'profile.php':
          $p = 'Profile';
          break;
        default:
          $p = '...';
          break;
      }
      $str .= $p;
    }
    return ($str);
  }

  // validation functions
  /**
   * Validate a string with size
   * @param  String $str    
   * @param  Int $min_size minimum size required
   * @param  Int $max_size maximum size required
   * @return Boolean 
   */
  function validateString($str,$min_size,$max_size){
    $res = false;
    $size = strlen($str); 
    if(($size>=$min_size)&&($size<=$max_size)) {
      $res = true;
    } else {
      $res = false;
    }
    return $res;
  }

  /**
   * Validate an email
   * @param  String $str email
   * @return Boolean 
   */
  function validateEmail($str){
    return (filter_var($str,FILTER_VALIDATE_EMAIL));
  }

  function validatePhone($str,$length){
    $res = false;
    // remove -, spaces
    $search = ['-','_','.',' '];
    $str = str_replace($search, '', $str);
    if(strlen($str)==$length){
      $res = true;
    }
    return $res;
  }
  // end validation functions

    /**
     * Print a $var with var_dump
     * @param  [type] $var [description]
     * @return [type]      [description]
     */
    function dd($var)
    {
      echo '<pre>';
      var_dump($var);
      echo '</pre>';
    }

    /**
     * Set the session message with the type and message
     * @param String $type style to apply.  eg: error|success
     * @param String $message message
     */
    function setFlash($type,$message) 
    {
        $_SESSION['message'] = [$type, $message];
    }