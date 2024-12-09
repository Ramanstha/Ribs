<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\NoticeController;
use App\Http\Controllers\backend\SmessageController;
use App\Http\Controllers\backend\MessageController;
use App\Http\Controllers\backend\SocialmediaController;
use App\Http\Controllers\backend\AffiliationsController;
use App\Http\Controllers\backend\BannerController;
use App\Http\Controllers\backend\SitesettingController;
use App\Http\Controllers\backend\ContactController;
use App\Http\Controllers\backend\AcademicController;
use App\Http\Controllers\backend\AboutusController;
use App\Http\Controllers\User\AddmissionController;
use App\Http\Controllers\backend\GovernanceController;
use App\Http\Controllers\backend\RmcController;
use App\Http\Controllers\backend\PublicationController;
use App\Http\Controllers\backend\ResourceController;
use App\Http\Controllers\backend\IQACActivitiesController;
use App\Http\Controllers\backend\GalleryFeeStructureController  ;
use App\Http\Controllers\backend\VideoController;
use App\Http\Controllers\User\MainPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

///////////Login////////////////////////
Route::get('/ribs-admin-login',[App\Http\Controllers\Auth\LoginController::class,'Login'])->name('login');
Route::post('/ribs-admin-postlogin',[App\Http\Controllers\Auth\LoginController::class,'PostLogin'])->name('login.perform');


///////////////////////////Backend////////////////////////////////
Route::group(['middleware' => ['auth']],function () {
Route::get('/dashboard',[DashboardController::class,'Dashboard'])->name('dashboard');

Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'Logout'])->name('logout');


//ChangePassword
Route::get('change-password', [App\Http\Controllers\Auth\ChangepasswordController::class, 'changePassword'])->name('changepassword');
Route::post('update-newpassword', [App\Http\Controllers\Auth\ChangepasswordController::class, 'updateNewPassword'])->name('updatenewpassword');

//Change details
Route::get('change-details', [App\Http\Controllers\Auth\ChangedetailsController::class, 'changeDetails'])->name('changedetails');
Route::post('update-details', [App\Http\Controllers\Auth\ChangedetailsController::class, 'updateDetails'])->name('updatedetails');


//////////Notices
Route::get('/notice',[NoticeController::class,'Notice'])->name('create.notice');
Route::post('/notice-store',[NoticeController::class,'Store'])->name('store.notice');
Route::get('/notice-view',[NoticeController::class,'View'])->name('view.notice');
Route::get('/notice-edit/{id}',[NoticeController::class,'Edit'])->name('edit.notice');
Route::post('/notice-update/{id}',[NoticeController::class,'Update'])->name('update.notice');
Route::get('/notice-delete/{id}',[NoticeController::class,'Delete'])->name('delete.notice');
Route::get('/notice-status',[NoticeController::class,'Noticestatus'])->name('status.notice');

//////////Special message
Route::get('/smessage',[SmessageController::class,'Smessage'])->name('create.smessage');
Route::post('/smessage-store',[SmessageController::class,'Store'])->name('store.smessage');
Route::get('/smessage-view',[SmessageController::class,'View'])->name('view.smessage');
Route::get('/smessage-edit/{id}',[SmessageController::class,'Edit'])->name('edit.smessage');
Route::post('/smessage-update/{id}',[SmessageController::class,'Update'])->name('update.smessage');
Route::get('/smessage-delete/{id}',[SmessageController::class,'Delete'])->name('delete.smessage');

//////////Message
Route::get('/message',[MessageController::class,'Message'])->name('create.message');
Route::post('/message-store',[MessageController::class,'Store'])->name('store.message');
Route::get('/message-view',[MessageController::class,'View'])->name('view.message');
Route::get('/message-edit/{id}',[MessageController::class,'Edit'])->name('edit.message');
Route::post('/message-update/{id}',[MessageController::class,'Update'])->name('update.message');
Route::get('/message-delete/{id}',[MessageController::class,'Delete'])->name('delete.message');

//////////Socialmedia
Route::get('/socialmedia',[SocialmediaController::class,'Socialmedia'])->name('create.socialmedia');
Route::post('/socialmedia-store',[SocialmediaController::class,'Store'])->name('store.socialmedia');
Route::get('/socialmedia-view',[SocialmediaController::class,'View'])->name('view.socialmedia');
Route::get('/socialmedia-edit/{id}',[SocialmediaController::class,'Edit'])->name('edit.socialmedia');
Route::post('/socialmedia-update/{id}',[SocialmediaController::class,'Update'])->name('update.socialmedia');
Route::get('/socialmedia-delete/{id}',[SocialmediaController::class,'Delete'])->name('delete.socialmedia');

//////////Affiliations
Route::get('/affiliations',[AffiliationsController::class,'Affiliations'])->name('create.affiliations');
Route::post('/affiliations-store',[AffiliationsController::class,'Store'])->name('store.affiliations');
Route::get('/affiliations-view',[AffiliationsController::class,'View'])->name('view.affiliations');
Route::get('/affiliations-edit/{id}',[AffiliationsController::class,'Edit'])->name('edit.affiliations');
Route::post('/affiliations-update/{id}',[AffiliationsController::class,'Update'])->name('update.affiliations');
Route::get('/affiliations-delete/{id}',[AffiliationsController::class,'Delete'])->name('delete.affiliations');
Route::get('/affiliations-status',[AffiliationsController::class,'affiliationstatus'])->name('status.affiliations');

//////////academic
Route::get('/academic',[AcademicController::class,'Academic'])->name('create.academic');
Route::post('/academic-store',[AcademicController::class,'Store'])->name('store.academic');
Route::get('/academic-view',[AcademicController::class,'View'])->name('view.academic');
Route::get('/academic-edit/{id}',[AcademicController::class,'Edit'])->name('edit.academic');
Route::post('/academic-update/{id}',[AcademicController::class,'Update'])->name('update.academic');
Route::get('/academic-delete/{id}',[AcademicController::class,'Delete'])->name('delete.academic');
Route::post('/select-programcategory',[AcademicController::class,'selectprogramCategory'])->name('select.programcategory');

// program category
Route::get('/all-programcategory',[App\Http\Controllers\backend\ProgramCategoryController::class,'viewAllprogramCategory'])->name('view.programcategory');
Route::get('/create-programcategory',[App\Http\Controllers\backend\ProgramCategoryController::class,'showprogramCategoryForm'])->name('create.programcategory');
Route::post('/store-programcategory',[App\Http\Controllers\backend\ProgramCategoryController::class,'storeprogramCategory'])->name('store.programcategory');
Route::get('/edit-programcategory/{id}',[App\Http\Controllers\backend\ProgramCategoryController::class,'editprogramCategory'])->name('edit.programcategory');
Route::post('/update-programcategory/{id}',[App\Http\Controllers\backend\ProgramCategoryController::class,'updateprogramCategory'])->name('update.programcategory');
Route::get('/delete-programcategory/{id}',[App\Http\Controllers\backend\ProgramCategoryController::class,'deleteprogramCategory'])->name('delete.programcategory');
Route::get('/programcategory-status',[App\Http\Controllers\backend\ProgramCategoryController::class,'Status'])->name('status.programcategory');

// program subcategory
Route::get('/all-programsubcategory',[App\Http\Controllers\backend\ProgramSubCategoryController::class,'viewAllprogramsubCategory'])->name('view.programsubcategory');
Route::get('/create-programsubcategory',[App\Http\Controllers\backend\ProgramSubCategoryController::class,'showprogramsubCategoryForm'])->name('create.programsubcategory');
Route::post('/store-programsubcategory',[App\Http\Controllers\backend\ProgramSubCategoryController::class,'storeprogramsubCategory'])->name('store.programsubcategory');
Route::get('/edit-programsubcategory/{id}',[App\Http\Controllers\backend\ProgramSubCategoryController::class,'editprogramsubCategory'])->name('edit.programsubcategory');
Route::post('/update-programsubcategory/{id}',[App\Http\Controllers\backend\ProgramSubCategoryController::class,'updateprogramsubCategory'])->name('update.programsubcategory');
Route::get('/delete-programsubcategory/{id}',[App\Http\Controllers\backend\ProgramSubCategoryController::class,'deleteprogramsubCategory'])->name('delete.programsubcategory');
Route::get('/programsubcategory-status',[App\Http\Controllers\backend\ProgramSubCategoryController::class,'Status'])->name('status.programsubcategory');

//////////aboutus
Route::get('/aboutus',[AboutusController::class,'Aboutus'])->name('create.aboutus');
Route::post('/aboutus-store',[AboutusController::class,'Store'])->name('store.aboutus');
Route::get('/aboutus-view',[AboutusController::class,'View'])->name('view.aboutus');
Route::get('/aboutus-edit/{id}',[AboutusController::class,'Edit'])->name('edit.aboutus');
Route::post('/aboutus-update/{id}',[AboutusController::class,'Update'])->name('update.aboutus');
Route::get('/aboutus-delete/{id}',[AboutusController::class,'Delete'])->name('delete.aboutus');
Route::post('/select-aboutcategory',[AboutusController::class,'selectaboutCategory'])->name('select.aboutcategory');

// about category
Route::get('/all-aboutcategory',[App\Http\Controllers\backend\AboutCategoryController::class,'viewAllaboutCategory'])->name('view.aboutcategory');
Route::get('/create-aboutcategory',[App\Http\Controllers\backend\AboutCategoryController::class,'showaboutCategoryForm'])->name('create.aboutcategory');
Route::post('/store-aboutcategory',[App\Http\Controllers\backend\AboutCategoryController::class,'storeaboutCategory'])->name('store.aboutcategory');
Route::get('/edit-aboutcategory/{id}',[App\Http\Controllers\backend\AboutCategoryController::class,'editaboutCategory'])->name('edit.aboutcategory');
Route::post('/update-aboutcategory/{id}',[App\Http\Controllers\backend\AboutCategoryController::class,'updateaboutCategory'])->name('update.aboutcategory');
Route::get('/delete-aboutcategory/{id}',[App\Http\Controllers\backend\AboutCategoryController::class,'deleteaboutCategory'])->name('delete.aboutcategory');
Route::get('/aboutcategory-status',[App\Http\Controllers\backend\AboutCategoryController::class,'Status'])->name('status.aboutcategory');

// about subcategory
Route::get('/all-aboutsubcategory',[App\Http\Controllers\backend\AboutSubCategoryController::class,'viewAllaboutsubCategory'])->name('view.aboutsubcategory');
Route::get('/create-aboutsubcategory',[App\Http\Controllers\backend\AboutSubCategoryController::class,'showaboutsubCategoryForm'])->name('create.aboutsubcategory');
Route::post('/store-aboutsubcategory',[App\Http\Controllers\backend\AboutSubCategoryController::class,'storeaboutsubCategory'])->name('store.aboutsubcategory');
Route::get('/edit-aboutsubcategory/{id}',[App\Http\Controllers\backend\AboutSubCategoryController::class,'editaboutsubCategory'])->name('edit.aboutsubcategory');
Route::post('/update-aboutsubcategory/{id}',[App\Http\Controllers\backend\AboutSubCategoryController::class,'updateaboutsubCategory'])->name('update.aboutsubcategory');
Route::get('/delete-aboutsubcategory/{id}',[App\Http\Controllers\backend\AboutSubCategoryController::class,'deleteaboutsubCategory'])->name('delete.aboutsubcategory');
Route::get('/aboutsubcategory-status',[App\Http\Controllers\backend\AboutSubCategoryController::class,'Status'])->name('status.aboutsubcategory');

//////////video
Route::get('/video',[VideoController::class,'Video'])->name('create.video');
Route::post('/video-store',[VideoController::class,'Store'])->name('store.video');
Route::get('/video-view',[VideoController::class,'View'])->name('view.video');
Route::get('/video-edit/{id}',[VideoController::class,'Edit'])->name('edit.video');
Route::post('/video-update/{id}',[VideoController::class,'Update'])->name('update.video');
Route::get('/video-delete/{id}',[VideoController::class,'Delete'])->name('delete.video');
Route::get('/video-status',[VideoController::class,'Videostatus'])->name('status.video');
//Banner
Route::get('/banner-create',[BannerController::class,'Banner'])->name('create.banner');
Route::get('/banner-view',[BannerController::class,'View'])->name('view.banner');
Route::post('/banner-store',[BannerController::class,'Store'])->name('store.banner');
Route::get('/banner-edit/{id}',[BannerController::class,'Edit'])->name('edit.banner');
Route::post('/banner-update/{id}',[BannerController::class,'Update'])->name('update.banner');
Route::get('/banner-delete/{id}',[BannerController::class,'Delete'])->name('delete.banner');

//Sidesetting 
Route::get('/sitesetting-create',[SitesettingController::class,'Sitesetting'])->name('create.sitesetting');
Route::post('/sitesetting-store',[SitesettingController::class,'Store'])->name('store.sitesetting');
Route::get('/sitesetting-view',[SitesettingController::class,'View'])->name('view.sitesetting');
Route::get('/sitesetting-edit/{id}',[SitesettingController::class,'Edit'])->name('edit.sitesetting');
Route::post('/sitesetting-update/{id}',[SitesettingController::class,'Update'])->name('update.sitesetting');
Route::get('/sitesetting-delete/{id}',[SitesettingController::class,'Delete'])->name('delete.sitesetting');

//Contact
Route::get('/contact-create',[ContactController::class,'Contact'])->name('create.contact');
Route::post('/contact-store',[ContactController::class,'Store'])->name('store.contact');
Route::get('/contact-view',[ContactController::class,'View'])->name('view.contact');
Route::get('/contact-edit/{id}',[ContactController::class,'Edit'])->name('edit.contact');
Route::post('/contact-update/{id}',[ContactController::class,'Update'])->name('update.contact');
Route::get('/contact-delete/{id}',[ContactController::class,'Delete'])->name('delete.contact');

Route::get('/user-message/{id}',[ContactController::class,'viewUserMessage'])->name('view_user_message.contact');
Route::get('/user-contact-message',[ContactController::class,'viewUserContactMessage'])->name('view_user.contact');
Route::get('/user-contact-delete/{id}',[ContactController::class,'userMessageDelete'])->name('delete_user.contact');

//Gallery and Fee Structure
Route::get('/galleryandfee-create',[GalleryFeeStructureController::class,'GalleryAndFee'])->name('create.galleryandfee');
Route::post('/galleryandfee-store',[GalleryFeeStructureController::class,'Store'])->name('store.galleryandfee');
Route::get('/galleryandfee-view',[GalleryFeeStructureController::class,'View'])->name('view.galleryandfee');
Route::get('/galleryandfee-edit/{id}',[GalleryFeeStructureController::class,'Edit'])->name('edit.galleryandfee');
Route::post('/galleryandfee-update/{id}',[GalleryFeeStructureController::class,'Update'])->name('update.galleryandfee');
Route::get('/galleryandfee-delete/{id}',[GalleryFeeStructureController::class,'Delete'])->name('delete.galleryandfee');

//Governance
Route::get('/governance-create',[GovernanceController::class,'CampusAssembly'])->name('create.governance');
Route::post('/governance-store',[GovernanceController::class,'Store'])->name('store.governance');
Route::get('/governance-view',[GovernanceController::class,'View'])->name('view.governance');
Route::get('/governance-edit/{id}',[GovernanceController::class,'Edit'])->name('edit.governance');
Route::post('/governance-update/{id}',[GovernanceController::class,'Update'])->name('update.governance');
Route::get('/governance-delete/{id}',[GovernanceController::class,'Delete'])->name('delete.governance');
Route::get('/governance-status',[GovernanceController::class,'Governancestatus'])->name('status.governance');
Route::post('/select-category',[GovernanceController::class,'selectaboutCategory'])->name('select.category');

//IQAC ACTIVITIES
Route::get('/iqac-create',[IQACActivitiesController::class,'IqacActivities'])->name('create.iqac');
Route::post('/iqac-store',[IQACActivitiesController::class,'Store'])->name('store.iqac');
Route::get('/iqac-view',[IQACActivitiesController::class,'View'])->name('view.iqac');
Route::get('/iqac-edit/{id}',[IQACActivitiesController::class,'Edit'])->name('edit.iqac');
Route::post('/iqac-update/{id}',[IQACActivitiesController::class,'Update'])->name('update.iqac');
Route::get('/iqac-delete/{id}',[IQACActivitiesController::class,'Delete'])->name('delete.iqac');
Route::get('/iqac-status',[IQACActivitiesController::class,'IQACstatus'])->name('status.iqac');

//RMC ACTIVITIES
Route::get('/rmc-create',[RmcController::class,'RmcActivities'])->name('create.rmc');
Route::post('/rmc-store',[RmcController::class,'Store'])->name('store.rmc');
Route::get('/rmc-view',[RmcController::class,'View'])->name('view.rmc');
Route::get('/rmc-edit/{id}',[RmcController::class,'Edit'])->name('edit.rmc');
Route::post('/rmc-update/{id}',[RmcController::class,'Update'])->name('update.rmc');
Route::get('/rmc-delete/{id}',[RmcController::class,'Delete'])->name('delete.rmc');
Route::get('/rmc-status',[RmcController::class,'Rmcstatus'])->name('status.rmc');

//Publication
Route::get('/publication-create',[PublicationController::class,'Publication'])->name('create.publication');
Route::post('/publication-store',[PublicationController::class,'Store'])->name('store.publication');
Route::get('/publication-view',[PublicationController::class,'View'])->name('view.publication');
Route::get('/publication-edit/{id}',[PublicationController::class,'Edit'])->name('edit.publication');
Route::post('/publication-update/{id}',[PublicationController::class,'Update'])->name('update.publication');
Route::get('/publication-delete/{id}',[PublicationController::class,'Delete'])->name('delete.publication');
Route::get('/publication-status',[PublicationController::class,'publicationstatus'])->name('status.publication');

//Facilities
Route::get('/facilities-create',[App\Http\Controllers\backend\FacilitiesController::class,'Facilities'])->name('create.facilities');
Route::post('/facilities-store',[App\Http\Controllers\backend\FacilitiesController::class,'Store'])->name('store.facilities');
Route::get('/facilities-view',[App\Http\Controllers\backend\FacilitiesController::class,'View'])->name('view.facilities');
Route::get('/facilities-edit/{id}',[App\Http\Controllers\backend\FacilitiesController::class,'Edit'])->name('edit.facilities');
Route::post('/facilities-update/{id}',[App\Http\Controllers\backend\FacilitiesController::class,'Update'])->name('update.facilities');
Route::get('/facilities-delete/{id}',[App\Http\Controllers\backend\FacilitiesController::class,'Delete'])->name('delete.facilities');
Route::get('/facilities-status',[App\Http\Controllers\backend\FacilitiesController::class,'facilitiesstatus'])->name('status.facilities');

// category
Route::get('/all-category',[App\Http\Controllers\backend\CategoryController::class,'viewAllCategory'])->name('view.category');
Route::get('/create-category',[App\Http\Controllers\backend\CategoryController::class,'showCategoryForm'])->name('create.category');
Route::post('/store-category',[App\Http\Controllers\backend\CategoryController::class,'storeCategory'])->name('store.category');
Route::get('/edit-category/{id}',[App\Http\Controllers\backend\CategoryController::class,'editCategory'])->name('edit.category');
Route::post('/update-category/{id}',[App\Http\Controllers\backend\CategoryController::class,'updateCategory'])->name('update.category');
Route::get('/delete-category/{id}',[App\Http\Controllers\backend\CategoryController::class,'deleteCategory'])->name('delete.category');
Route::get('/category-status',[App\Http\Controllers\backend\CategoryController::class,'Status'])->name('status.category');

//Admission
Route::get('/applicants',[App\Http\Controllers\backend\AdmissionController::class,'view'])->name('view.applicants');
Route::get('/applicants-delete/{id}',[App\Http\Controllers\backend\AdmissionController::class,'Delete'])->name('delete.applicants');
Route::get('/view-application/{id}',[App\Http\Controllers\backend\AdmissionController::class,'ApplicationView'])->name('view.application');
Route::get('create-pdf-file/{id}', [App\Http\Controllers\backend\AdmissionController::class, 'Pdf'])->name('info.download');

//Scholarship
Route::get('/scholarship',[App\Http\Controllers\backend\ScholarshipController::class,'View'])->name('view.scholarship');
Route::get('/scholarship-delete/{id}',[App\Http\Controllers\backend\ScholarshipController::class,'Delete'])->name('delete.scholarship');
Route::get('/view-scholarship-form/{id}',[App\Http\Controllers\backend\ScholarshipController::class,'ScholarshipView'])->name('view.scholarship');
Route::get('create-pdf-file/{id}', [App\Http\Controllers\backend\ScholarshipController::class, 'Pdf'])->name('scholarship.download');
});

///////////////////////////////////////////////////////user///////////////////////////////////////////////////////
//Auth
Route::get('/ribs-user-login',[App\Http\Controllers\Userauth\LoginController::class,'UserLogin'])->name('userlogin');
Route::post('/ribs-user-postlogin',[App\Http\Controllers\Userauth\LoginController::class,'UserPostLogin'])->name('userlogin.perform');
Route::get('/ribs-logout', [App\Http\Controllers\Userauth\LoginController::class, 'UserLogout'])->name('userlogout');

// Route::group(['middleware' => ['auth']],function () {
//Dashboard
Route::get('/',[MainPageController::class,'Mainpage'])->name('Home');

Route::get('/fee-structure',[App\Http\Controllers\User\FeeStructureController::class,'FeeStruture'])->name('fee_structure');
Route::get('/gallery',[App\Http\Controllers\User\FeeStructureController::class,'Gallery'])->name('gallery');
Route::get('/scholorship',[App\Http\Controllers\User\FeeStructureController::class,'Scholorship'])->name('scholorship');

// User contact
Route::get('/contact-us',[App\Http\Controllers\User\ContactusController::class,'getUserContact'])->name('show_user.contact');
Route::post('/contact-us',[App\Http\Controllers\User\ContactusController::class,'storeUserContact'])->name('user_contact.store');

//notice
Route::get('download/{image}',[MainPageController::class,'download'])->name('download.file');

/***** aboutus *****/
Route::get('/about-ribs',[App\Http\Controllers\User\AboutUsController::class,'aboutus'])->name('aboutus');
Route::get('/academic-programs/{id}',[App\Http\Controllers\User\AboutUsController::class,'academicPrograms'])->name('academic.program');
Route::get('/master-academic-programs/{id}',[App\Http\Controllers\User\AboutUsController::class,'masterAcademicPrograms'])->name('master.academic.program');
Route::get('/academic-programs-details/{id}',[App\Http\Controllers\User\AboutUsController::class,'academicProgramsDetails'])->name('academic.details');

/***** message */
Route::get('/ribs-message',[App\Http\Controllers\User\AboutUsController::class,'getMessage'])->name('ribs.message');
Route::get('/ribs-message-details/{id}',[App\Http\Controllers\User\AboutUsController::class,'getMessageDetails'])->name('ribs.message.details');
Route::get('/message-details/{id}',[App\Http\Controllers\User\AboutUsController::class,'getribsMessageDetails'])->name('student.message.details');


/****** Event/activities ******/ 
Route::get('/ribs-activities',[App\Http\Controllers\User\ActivitiesController::class,'getactivities'])->name('ribs.activities');
Route::get('/ribs-facilities-detail/{id}',[App\Http\Controllers\User\ActivitiesController::class,'getfacilities'])->name('ribs.facilities');

/****** notic and news ******/ 
Route::get('/download-notices-ribs',[App\Http\Controllers\User\NoticeController::class,'allNotice'])->name('all.notice');
Route::get('/notice-download/{image}',[App\Http\Controllers\User\NoticeController::class,'noticeDownload'])->name('notice.download');
Route::get('/news-events/{id}',[App\Http\Controllers\User\NoticeController::class,'newsEvents'])->name('newsevent.details');

/****** governance */
Route::get('/ribs-gqi/{id}',[App\Http\Controllers\User\GovernanceController::class,'allGovernance'])->name('all.governance');
Route::get('/ribs-downloads',[App\Http\Controllers\User\GovernanceController::class,'allDownload'])->name('all.download');
Route::get('/ribs-download/{image}',[App\Http\Controllers\User\GovernanceController::class,'Download'])->name('download.download');

Route::get('/ribs-campus-assembly',[App\Http\Controllers\User\GovernanceController::class,'getCampusAssembly'])->name('campus.assembly');
Route::get('/ribs-cmc',[App\Http\Controllers\User\GovernanceController::class,'getCmc'])->name('cmc');
Route::get('/ribs-hods',[App\Http\Controllers\User\GovernanceController::class,'getHods'])->name('hods');
Route::get('/ribs-subject-committiees',[App\Http\Controllers\User\GovernanceController::class,'getSubjectCommittiees'])->name('subject.committiees');
Route::get('/ribs-different-committiees',[App\Http\Controllers\User\GovernanceController::class,'getDifferentCommittiees'])->name('different.committiees');
Route::get('/ribs-working-procedure',[App\Http\Controllers\User\GovernanceController::class,'getWorkingProcedure'])->name('working.procedure');
Route::get('/ribs-governance-details/{id}',[App\Http\Controllers\User\GovernanceController::class,'governanceDetails'])->name('governance.details');

/***** iqac */
Route::get('/ribs-loi-letter',[App\Http\Controllers\User\IqacController::class,'getLoiLetter'])->name('loi.letter');
Route::get('/ribs-ssr-report',[App\Http\Controllers\User\IqacController::class,'getSSRReport'])->name('ssr.report');
Route::get('/ribs-prt-response-report',[App\Http\Controllers\User\IqacController::class,'getPrtResponsereport'])->name('prt.report');
Route::get('/ribs-sat-activities',[App\Http\Controllers\User\IqacController::class,'getSatActivities'])->name('sat.activities');
Route::get('/ribs-strategic-plan',[App\Http\Controllers\User\IqacController::class,'getStrategicPlan'])->name('strategic.plan');
Route::get('/ribs-tracer-study-report',[App\Http\Controllers\User\IqacController::class,'getStudyReport'])->name('study.report');
Route::get('/ribs-master-plan',[App\Http\Controllers\User\IqacController::class,'getMasterplan'])->name('master.plan');
Route::get('/ribs-campus-development-plan',[App\Http\Controllers\User\IqacController::class,'getCampusDevelopmentPlan'])->name('development.plan');
Route::get('/ribs-daily-log-book',[App\Http\Controllers\User\IqacController::class,'getDailyLogBook'])->name('log.book');
Route::get('/ribs-iqac-details/{id}',[App\Http\Controllers\User\IqacController::class,'getIqacDetails'])->name('iqac.details');

/***** rmc */
Route::get('/ribs-research-activities',[App\Http\Controllers\User\RmcController::class,'getResearch'])->name('research');
Route::get('/ribs-seminars',[App\Http\Controllers\User\RmcController::class,'getSeminars'])->name('seminar');
Route::get('/ribs-workshops',[App\Http\Controllers\User\RmcController::class,'getWorkshops'])->name('workshop');
Route::get('/ribs-training',[App\Http\Controllers\User\RmcController::class,'getTraining'])->name('training');
Route::get('/ribs-field-trip',[App\Http\Controllers\User\RmcController::class,'getFieldTrip'])->name('fieldtrip');
Route::get('/ribs-rmc-details/{id}',[App\Http\Controllers\User\RmcController::class,'getRmcDetails'])->name('rmc.details');

///Publication
Route::get('/all-publication/{id}',[App\Http\Controllers\User\PublicationController::class,'allPublication'])->name('all.publication');
Route::get('/ribs-publication-details/{id}',[App\Http\Controllers\User\PublicationController::class,'publicationDetails'])->name('publication.details');

///Resource
Route::get('/all-resource/{id}',[App\Http\Controllers\User\ResourceController::class,'allresource'])->name('all.resource');
Route::get('/ribs-resource-details/{id}',[App\Http\Controllers\User\ResourceController::class,'resourceDetails'])->name('resource.details');

//addmission form
Route::get('/online-admission',[AddmissionController::class,'Admission'])->name('admission');
Route::post('/select-subject',[AddmissionController::class,'selectSubject'])->name('select.subject');
Route::post('store-online-admission',[AddmissionController::class,'StoreForm'])->name('store.form');

//schoolarship form
Route::get('/online-schoolarship',[App\Http\Controllers\User\ScholorshipController::class,'Schoolarship'])->name('schoolarship');
// Route::post('/select-subject',[AddmissionController::class,'selectSubject'])->name('select.subject');
Route::post('store-online-schoolarship',[App\Http\Controllers\User\ScholorshipController::class,'StoreSchoolarship'])->name('store.schoolarship');
// });


Route::get('reset', function (){
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
});
Route::get('/run-migrations', function () {
      Artisan::call('migrate', [
       '--force' => true
    ]);
});
Route::get('/key', function () {
    Artisan::call('key:generate', [
       '--force' => true
    ]);
});
Route::get('/storage', function () {
    Artisan::call('storage:link', [
       '--force' => true
    ]);
});