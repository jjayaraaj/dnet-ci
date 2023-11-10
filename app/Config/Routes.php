<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/property-management-software-dynamics-365', 'RealEstatePro::index');
$routes->get('/property-leasing', 'RealEstatePro::leasing');
$routes->get('/property-sale', 'RealEstatePro::sale');
$routes->get('/dynamics-365-bid-management-software', 'Page::BidManagement');
$routes->get('/contract-management-software-dynamics-365', 'Page::ContractManagement');
$routes->get('/investment-portfolio-management-software-dynamics', 'Page::Investment');
$routes->get('/dynamics-365-HR-payroll', 'Page::AxOnePay');
$routes->get('/treasury-management-software-dynamics', 'Page::TreasuryManagement');
$routes->get('/annata-365', 'Page::Annata');
$routes->get('/propgoto', 'Page::PropGoto');
$routes->get('/microsoft-dynamics-365-for-real-estate', 'Page::IndustryRealEstate');
$routes->get('/microsoft-dynamics-365-construction-erp', 'Page::IndustryConstruction');
$routes->get('/microsoft-dynamics-365-for-retail', 'Page::IndustryRetail');
$routes->get('/microsoft-dynamics-365-financial-services', 'Page::IndustryFinancial');
$routes->get('/microsoft-dynamics-365-implementation', 'Page::ServiceImplementation');
$routes->get('/microsoft-dynamics-365-support', 'Page::ServiceSupport');
$routes->get('/dynamics-365-finance-operations-upgrade-services', 'Page::ServiceUpgrade');
$routes->get('/about-us', 'Page::About');
$routes->get('/become-a-partner', 'Page::Partner');
$routes->get('/contact', 'Page::Contact');
$routes->post('/common-download', 'Page::downloadBrochure');
$routes->post('/brochure-download', 'Page::IndividualDownload');
$routes->post('/demo-request', 'Page::DemoRequest');
$routes->post('/contact-request', 'Page::ContactRequest');
$routes->get('/thankyou', 'Page::Thankyou');
$routes->get('/brochure-thankyou', 'Page::BrochureThankyou');
$routes->get('/demo-thankyou', 'Page::DemoThankyou');
$routes->get('/privacy-policy', 'Page::PrivacyPolicy');
$routes->set404Override(function () {
    return view('my_404');
});



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
