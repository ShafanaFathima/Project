<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Login::index');         
$routes->post('login', 'Login::login');     
$routes->get('dashboard', 'Dashboard::index');
$routes->get('categories', 'Categories::index');
$routes->get('roles', 'Roles::index');
$routes->get('manageindustry', 'ManageIndustry::index');
$routes->get('managedepartment', 'ManageDepartment::index');
$routes->get('manageplan', 'ManagePlan::index');
$routes->get('alljobs', 'ManageJobs::index');
$routes->get('approvedjobs', 'ManageJobs::approvedjobs');
$routes->get('expiredjobs', 'ManageJobs::expiredjobs');
$routes->get('pendingjobs', 'ManageJobs::pendingjobs');
$routes->get('rejectedjobs', 'ManageJobs::rejectedjobs');
$routes->get('activeusers', 'ManageUsers::index');
$routes->get('allusers', 'ManageUsers::allusers');
$routes->get('bannedusers', 'ManageUsers::bannedusers');
$routes->get('email', 'ManageUsers::email');
$routes->get('mobile', 'ManageUsers::mobile');
$routes->get('send', 'ManageUsers::send');
$routes->get('active', 'ManageEmployers::index');
$routes->get('allemployers', 'ManageEmployers::allemployers');
$routes->get('banned', 'ManageEmployers::banned');
$routes->get('emailunverified', 'ManageEmployers::emailunverified');
$routes->get('mobileunverified', 'ManageEmployers::mobileunverified');
$routes->get('sendnotification', 'ManageEmployers::sendnotification');
$routes->get('balance', 'ManageEmployers::balance');
$routes->get('city', 'ManageLocation::index');
$routes->get('location', 'ManageLocation::location');
$routes->get('degree', 'ManageEducation::index');
$routes->get('group', 'ManageEducation::group');
$routes->get('level', 'ManageEducation::level');
$routes->get('experience', 'ManageBasic::index');
$routes->get('nofemployee', 'ManageBasic::nofemployees');
$routes->get('salary', 'ManageBasic::salary');
$routes->get('shift', 'ManageBasic::shift');
$routes->get('skill', 'ManageBasic::skill');
$routes->get('type', 'ManageBasic::type');
$routes->get('all', 'Payment::index');
$routes->get('approved', 'Payment::approved');
$routes->get('initiated', 'Payment::initiated');
$routes->get('pending', 'Payment::pending');
$routes->get('rejected', 'Payment::rejected');
$routes->get('successful', 'Payment::successful');
$routes->get('allticket', 'SupportTicket::index');
$routes->get('answered', 'SupportTicket::answered');
$routes->get('closed', 'SupportTicket::closed');
$routes->get('pendingticket', 'SupportTicket::pendingticket');
$routes->get('loginhistory', 'Report::index');
$routes->get('history', 'Report::history');
$routes->get('transaction', 'Report::transaction');
$routes->get('application', 'Extra::index');
$routes->get('optimize', 'Extra::cache');
$routes->get('server', 'Extra::server');
$routes->get('update', 'Extra::update');
$routes->get('subscriber', 'Subscribers::index');
$routes->get('system', 'SystemSetting::index');
$routes->get('report', 'ReportRequest::index');

$routes->get('logout', 'Login::logout');    

