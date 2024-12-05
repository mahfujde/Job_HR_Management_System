<?php

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('/aboutUs', function () {
    return view('mainlayout.aboutUs');
});

Route::get('/contractUs', function () {
    return view('mainlayout.contractUs');
});




//admin login route start.....................................
Route::get('admin/login', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'Admin\LoginController@login');



Route::get('admin/register','Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('admin/register', 'Admin\RegisterController@register');

Route::post('/admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name(' admin.password.email');

//Route::get('/company-password/email', 'Company\ForgotPasswordController@sendResetLinkEmail')->name(' company.password.request');

//Route::get('/company/password/request', 'Company\ForgotPasswordController@showLinkRequestForm')->name(' company.password.request');
Route::post('/admin-password/reset','Admin\ResetPasswordController@reset');
Route::get('/admin-password/reset/{token} ','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
//company login route end.....

//admin pannel route start.....................................
Route::get('/adminDashboard', 'AdminController@index');

Route::get('/jobseekerInformation','Admin\ManageUsersController@viewJobSeeker');


Route::get('/companyInformation','Admin\ManageUsersController@viewCompany');

Route::get('/articals',[
 'uses' => 'AdminpannelController@blog',

 'as' => '/blog'
]);


Route::get('/gjob',[
 'uses' => 'AdminpannelController@govtjob',

 'as' => '/govtjob'
]);

Route::get('/viewlistjob',[
 'uses' => 'AdminpannelController@viewgovtjob',

 'as' => '/viewgovtjob'
]);


Route::get('/jpost',[
 'uses' => 'AdminpannelController@jobpost',

 'as' => '/jobpost'
]);

//adminpannel route start.....................................
// Govt job post
Route::post('/gjob/save',[
 'uses' => 'AddgovtjobController@savegovtjob',

 'as' => 'savegovtjob'
]);



//job seeker login route start....................................................
Route::get('/login/account','LoginRegisterController@login');

Auth::routes(['verify' => true]);

//job seeker login route end......................................................


//jobseeker pannel route start --------------------------------------------
Route::get('/jobseekerDashboard', 'HomeController@index');
Route::get('/jobseekerDashboard', 'TrackingController@viewTracking');
Route::get('/jobseekerProfile','JobseekerController@jobseekerProfile');
Route::get('/jobseekerProfile','ViewseekerprofileController@viewProfile');

//jobseeker profile route start....
Route::get('/coverPicture','SeekerprofileController@coverPicture');
Route::post('/save/coverPicture','SeekerprofileController@saveCoverPicture');
Route::get('/coverPicture','ViewseekerprofileController@checkCoverPicture');
Route::post('/update/coverPicture','ViewseekerprofileController@updateCoverPicture');

Route::get('/picturePicture','SeekerprofileController@profilePicture');
Route::post('/save/profilePicture','SeekerprofileController@saveProfilePicture');
Route::get('/picturePicture','ViewseekerprofileController@checkPicturePicture');
Route::post('/update/picturePicture','ViewseekerprofileController@updatePicturePicture');

Route::get('/about','SeekerprofileController@about');
Route::post('/save/about','SeekerprofileController@saveAbout');
Route::get('/about','ViewseekerprofileController@checkAbout');
Route::post('/update/about','ViewseekerprofileController@updateAbout');

Route::get('/seekereducation','SeekerprofileController@education');
Route::post('/save/seekereducation','SeekerprofileController@saveEducation');
Route::get('/seekereducation','ViewseekerprofileController@checkEducation');
Route::post('/seekereducation/update','ViewseekerprofileController@updateEducation');


Route::get('/socialLink','SeekerprofileController@socialLink');
Route::post('/save/socialLink','SeekerprofileController@saveSosialLink');
Route::get('/socialLink','ViewseekerprofileController@checkSocialLink');
Route::post('/update/socialLink','ViewseekerprofileController@updateSocialLink');
//jobseeker profile route end...

Route::get('/create',[
 'uses' => 'JobseekerController@createResume',

 'as' => '/createcv'
]);
//view cv part..
Route::get('/view/cv/page','ViewresumeController@viewResumePage');

Route::get('/view/cv/page','ViewresumeController@viewResume');
//jobseeker pannel end....




//create resume or cv route part start .............................
Route::get('/personal',[
 'uses' => 'ResumemakeController@personalInformation',

 'as' => '/personal'
]);

Route::get('/education',[
 'uses' => 'ResumemakeController@educationInformation',

 'as' => '/educationinfo'
]);

Route::get('/employment',[
 'uses' => 'ResumemakeController@employmentInformation',

 'as' => '/employmentinfo'
]);

Route::get('/otherinfo',[
 'uses' => 'ResumemakeController@otherInformation',

 'as' => '/otherinfo'
]);

//create resume or cv route part  end .............................

//resume save route start................................................
Route::post('/save/savePersonalInformation',[
	'uses' =>'SaveresumeinformationController@savePersonalInformation',

	'as' => 'savePersonalInformation'

]);


Route::post('/save/saveaddress',[
	'uses' =>'SaveresumeinformationController@saveAddress',

	'as' => 'saveaddress'

]);

Route::post('/save/objective',[
	'uses' =>'SaveresumeinformationController@saveObjective',

	'as' => 'objective'

]);

Route::post('/save/picture',[
	'uses' =>'SaveresumeinformationController@savePicture',

	'as' => 'picture'

]);

Route::post('/save/reference',[
	'uses' =>'SaveresumeinformationController@saveReference',

	'as' => 'reference'

]);

Route::post('/save/educationInformation',[
	'uses' =>'SaveresumeinformationController@saveAcademicInformation',

	'as' => 'educationInformation'

]);

Route::post('/save/ThesisProject',[
	'uses' =>'SaveresumeinformationController@saveThesisProject',

	'as' => 'ThesisProject'

]);
Route::post('/save/professionalExpertise',[
	'uses' =>'SaveresumeinformationController@saveprofessionalExpertise',

	'as' => 'professionalExpertise'

]);

Route::post('/save/TrainingCertification',[
	'uses' =>'SaveresumeinformationController@saveTrainingCertification',

	'as' => 'TrainingCertification'

]);

Route::post('/save/Language',[
	'uses' =>'SaveresumeinformationController@saveLanguage',

	'as' => 'Language'

]);

Route::post('/save/WorkExperience',[
	'uses' =>'SaveresumeinformationController@saveWorkExperience',

	'as' => 'WorkExperience'

]);

Route::post('/save/ExtraActivitie',[
	'uses' =>'SaveresumeinformationController@saveExtraActivitie',

	'as' => 'ExtraActivitie'

]);
//resume save route end..................

//update resume route start...................................................
Route::get('/picture/page','UpdateresumeController@updatePictureView');
Route::get('/picture/page','UpdateresumeController@pictureView');
Route::post('/update/picture','UpdateSaveResumeController@updatePicture');

Route::get('/objective/page','UpdateresumeController@updateObjectiveView');
Route::get('/objective/page','UpdateresumeController@ObjectiveView');
Route::post('/update/objective','UpdateSaveResumeController@updateObjective');

Route::get('/education/page','UpdateresumeController@updateEducationView');
Route::get('/education/page','UpdateresumeController@EducationView');
Route::post('/update/education','UpdateSaveResumeController@updateEducation');

Route::get('/work/experience/page','UpdateresumeController@updateWorkExperienceView');
Route::get('/work/experience/page','UpdateresumeController@WorkExperienceView');
Route::post('/update/work/experience','UpdateSaveResumeController@updateWorkExperience');


Route::get('/project/page','UpdateresumeController@updateProjectView');
Route::get('/project/page','UpdateresumeController@ProjectView');
Route::post('/update/project','UpdateSaveResumeController@updateProject');


Route::get('/Traning/page','UpdateresumeController@updateTraningView');
Route::get('/Traning/page','UpdateresumeController@TraningView');
Route::post('/update/traning','UpdateSaveResumeController@updateTraning');


Route::get('/skills/page','UpdateresumeController@updateSkillView');
Route::get('/skills/page','UpdateresumeController@SkillView');
Route::post('/update/skills','UpdateSaveResumeController@updateSkills');


Route::get('/language/page','UpdateresumeController@updateLanguageView');
Route::get('/language/page','UpdateresumeController@LanguageView');
Route::post('/update/language','UpdateSaveResumeController@updateLanguage');


Route::get('/extra/activity/page','UpdateresumeController@updateExtraActivityView');
Route::get('/extra/activity/page','UpdateresumeController@ExtraActivityView');
Route::post('/update/extra/activity','UpdateSaveResumeController@updateExtraActivity');


Route::get('/personalinfo/page','UpdateresumeController@updatePersonalinfoView');
Route::get('/personalinfo/page','UpdateresumeController@PersonalinfoView');
Route::post('/update/personalinfo','UpdateSaveResumeController@updatePersonalinfo');

Route::get('/address/page','UpdateresumeController@updateAddressView');
Route::get('/address/page','UpdateresumeController@AddressView');
Route::post('/update/address','UpdateSaveResumeController@updateAddress');

Route::get('/reference/page','UpdateresumeController@updateReferenceView');
Route::get('/reference/page','UpdateresumeController@ReferenceView');
Route::post('/update/reference','UpdateSaveResumeController@updateReference');

//update resume route end ....................................................














//conpany login route start.....................................


Route::get('company/login', 'Company\LoginController@showLoginForm')->name('company.login');
Route::post('company/login', 'Company\LoginController@login');

Route::post('company/register', 'Company\RegisterController@register');
Route::get('company/register','Company\RegisterController@showRegistrationForm')->name('company.register');


Route::post('/company-password/email', 'Company\ForgotPasswordController@sendResetLinkEmail')->name(' company.passwords.email');

Route::get('/company-password/email', 'Company\ForgotPasswordController@sendResetLinkEmail')->name(' company.passwords.request');

Route::get('/company/password/request', 'Company\ForgotPasswordController@showLinkRequestForm')->name(' company.passwords.request');
Route::post('/company-password/reset','Company\ResetPasswordController@reset');
Route::get('/company-password/reset/{token} ','Company\ResetPasswordController@showResetForm')->name('company.passwords.reset');

//company login route end.....

//company pannel start-------------------------------------------------

Route::get('/companyDashboard', 'CompanyController@index');
Route::get('/companyProfile','CompanypannelController@companyProfile');
Route::get('/companyProfile','ViewcompanyprofileController@viewProfile');

//company profile route start..
Route::get('/companyCoverPicture','companyprofileController@coverPicture');
Route::post('/save/companyCoverPicture','companyprofileController@saveCoverPicture');
Route::get('/companyCoverPicture','ViewcompanyprofileController@checkCoverPicture');
Route::post('/update/companyCoverPicture','ViewcompanyprofileController@updateCoverPicture');

Route::get('/companyPicturePicture','companyprofileController@profilePicture');
Route::post('/save/companyPicturePicture','companyprofileController@saveProfilePicture');
Route::get('/companyPicturePicture','ViewcompanyprofileController@checkPicturePicture');
Route::post('/update/companyPicturePicture','ViewcompanyprofileController@updatePicturePicture');

Route::get('/company/about','companyprofileController@about');
Route::post('/save/companyabout','companyprofileController@saveAbout');
Route::get('/company/about','ViewcompanyprofileController@checkAbout');
Route::post('/update/companyabout','ViewcompanyprofileController@updateAbout');

Route::get('/companyaddress','companyprofileController@address');
Route::post('/save/companyaddress','companyprofileController@saveAddress');
Route::get('/companyaddress','ViewcompanyprofileController@checkAddress');
Route::post('/update/companyaddress','ViewcompanyprofileController@updateAddress');

Route::get('/companySocialLink','companyprofileController@socialLink');
Route::post('/save/companySocialLink','companyprofileController@saveSosialLink');
Route::get('/companySocialLink','ViewcompanyprofileController@checkSocialLink');
Route::post('/update/companySocialLink','ViewcompanyprofileController@updateSocialLink');

//company profile route end..
//candiate review start..
Route::get('/candiate/review','Company\ReviewController@addReviewPage');
Route::post('/candidate/review/post','Company\ReviewController@saveReview');
Route::get('/candidate/review/list','Company\ReviewController@viewReview');
Route::post('/candidate/review/remarks','Company\ReviewController@update');
Route::get('/candidate/review/delete/{review_id}','Company\ReviewController@delete');
Route::get('/see/candidate/list','JobpostController@candidateList');

Route::get('/see/review','Company\ReviewController@seeReview');


//candiate review end....

//company pannel  end---------

//job post and apply route start----------------------------------
Route::get('/job/post','JobpostController@jobPost');
Route::post('/save/job/post','JobpostController@saveJobPost');
Route::get('/view/job/post','JobpostController@viewJobPostPage');
Route::get('/view/job/post','JobpostController@viewJobPost');
Route::get('/view/job/post/details/{job_id}','JobpostController@viewJobPostDetails');

Route::get('/job/post/list','JobpostController@jobPostList');
Route::get('/job/post/list','JobpostController@viewPostList');

Route::get('/job_post/delete/{job_id}','JobpostController@deleteJobpost');


Route::get('/jobapply/{job_id}','JobpostController@applied');

//new 27th july 

Route::post('/update/job/status','JobpostController@candidateReview');

//Job Tracking by me on 06th August

Route::get('/job/tracking','TrackingController@view');
Route::get('/job/tracking/status','TrackingController@track');
Route::post('/job/tracking/status','TrackingController@track');

//job search

Route::get('/job/search', function(){

	return view('jobseeker.job_search');
});

Route::get('/job/serach/status','SearchController@search');
Route::post('/job/serach/status','SearchController@search');
//Route::get('/job/serach/status','SearchController@fontPageSerch');
//Route::post('/job/serach/status','SearchController@fontPageSerch');

//new route for cv view 
//added by me on 06th August
Route::get('/view/cv/{email}','ViewresumeController@viewCandidateResume');

Route::get('/download/cv','ViewresumeController@download');



//chatbot route part start............................................
Route::get('/chatbot', function () {
    return view('chatbot/chat');
});
//Route::match(['get', 'post'], '/botman', 'JobquestionController@handle');
Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/botman/tinker', 'BotManController@tinker');

