<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

$route['default_controller'] 				= 'catalog';
$route['upcoming-entrance-test'] 			= 'catalog/upcoming_entrance_test';

$route['upcoming-entrance-test-detail/(:any)/(:any)']	= 'catalog/upcoming_entrance_test_detail';

$route['preparation-for-entrance'] 			= 'catalog/preparation_for_entrance';
$route['sample-question'] 					= 'catalog/sample_question';
$route['interview-preparation'] 			= 'catalog/interview_preparation';

$route['register-as-a-guide'] 				= 'catalog/register_as_a_guide';
$route['search-for-guide'] 					= 'catalog/search_for_guide';
$route['job-listing'] 						= 'catalog/job_listing';
$route['topic-selection'] 					= 'catalog/topic_selection';
$route['research-proposal'] 				= 'catalog/research_proposal';
$route['data-analysis'] 					= 'catalog/data_analysis';
$route['software-implementation'] 			= 'catalog/software_implementation';
$route['thesis-chapters'] 					= 'catalog/thesis_chapters';
$route['language-editing'] 					= 'catalog/language_editing';
$route['research-paper-writing'] 			= 'catalog/research_paper_writing';
$route['scopus'] 							= 'catalog/scopus';
$route['scl-indexed'] 						= 'catalog/scl_indexed';
$route['ugc-care'] 							= 'catalog/ugc_care';
$route['abdc-journal'] 						= 'catalog/abdc_journal';
$route['register-as-peer-reviewer'] 		= 'catalog/register_as_peer_reviewer';
$route['browse-reviewers'] 					= 'catalog/browse_reviewers';
$route['thesis-printing'] 					= 'catalog/thesis_printing';
$route['thesis-binding'] 					= 'catalog/thesis_binding';


$route['register-as-a-recruiter'] 			= 'catalog/register_as_a_recruiter';
$route['sign-in'] 							= 'catalog/signin';
$route['register'] 							= 'catalog/register';
$route['account'] 							= 'catalog/account';
$route['profile'] 							= 'catalog/profile';
$route['profile/edit'] 						= 'catalog/profile';
$route['my-schools'] 						= 'catalog/my_schools';
$route['enquiries'] 						= 'catalog/enquiries';
$route['changepassword'] 					= 'catalog/changepassword';

$route['enquiries'] 						= 'catalog/enquiries';
$route['guide'] 							= 'catalog/guide';
$route['reviewer'] 							= 'catalog/reviewer';
$route['recruiter'] 						= 'catalog/recruiter';


$route['user-contacted'] 						= 'catalog/user_contacted';
$route['browse-reviewer'] 						= 'catalog/browse_reviewer';

$route['posted-job'] 						= 'catalog/posted_job';
$route['add-new-job'] 						= 'catalog/add_new_job';

$route['job-apply'] 						= 'catalog/job_apply';
$route['entrance-test'] 					= 'catalog/entrance_test';
$route['my-sample-papers'] 					= 'catalog/my_sample_papers';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
