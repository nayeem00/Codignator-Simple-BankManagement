<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
$config = array(
	'addnew' => array(
			array(
				'field' => 'accNo',
				'label' => 'Account Number',
				'rules' => 'required|callback_validAccountNo'
				),
			array(
				'field' => 'accName',
				'label' => 'Account Name',
				'rules' => 'required|strtoupper'
				)
		),

	'deposite' => array(
			array(
				'field' => 'accNO',
				'label' => 'Account Number',
				'rules' => 'required|callback_validAccountNo'
				),
			array(
				'field' => 'amount',
				'label' => 'Amount',
				'rules' => 'required'
				)
		),

	'withdraw' => array(
			array(
				'field' => 'accNo',
				'label' => 'Account Number',
				'rules' => 'required|callback_validAccountNo'
				),
			array(
				'field' => 'amount',
				'label' => 'Amount',
				'rules' => 'required'
				)
		),

	'Transfer' => array(
			array(
				'field' => 'accountNoFrom',
				'label' => 'Account Number',
				'rules' => 'required|callback_validAccountNo'
				),
			array(
				'field' => 'accountNoto',
				'label' => 'Account Number',
				'rules' => 'required|callback_validAccountNo'
				),
			array(
				'field' => 'amount',
				'label' => 'Amount',
				'rules' => 'required'
				)
		)
	);