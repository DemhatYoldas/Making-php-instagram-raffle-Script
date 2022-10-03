<?php

class nedminController extends mainController
{
    public function index() {
        $data=[];
        $this->callLayout("backend","main","nedmin","index",$data);
    }

    public function login() {
        $data=[];
        if (isset($_SESSION['admins']))
        {
            Header("Location:/nedmin");
            exit;
        } else {
            $this->callView("nedmin","login",$data);

        }
    }

    public function loginControl() {


        $loginControlModel=new nedminModel();
        $_SESSION['messageManagement']=$loginControlModel->loginControl();
        $data=$_SESSION['messageManagement'];

        if ($data['status']) {
            Header("Location:/nedmin");
            exit;
//            $this->callLayout("backend","main","nedmin","index",$data);
        } else {
            $this->callView("nedmin","login",$data);
        }
    }

    public function logout() {
        $data=[];
        $logout=new nedminModel();
        $logout->logout();
        $this->CallView("nedmin","login",$data);
    }

    public function settings() {
        $data=[];
        $settingsModel=new nedminModel();
        $data['adminSettings']=$settingsModel->settings();
        $this->callLayout("backend","main","nedmin","settings",$data);
    }

    public function settingsUpdate($settings_id) {
        $data=[];
        $settingsUpdateModel=new nedminModel();
        $data['settingsUpdate']=$settingsUpdateModel->settingsUpdate($settings_id);
        $this->callLayout("backend","main","nedmin","settingsUpdate",$data);
    }

    public function settingsUpdateOp(){

        $settingsUpdateOpModel=new nedminModel();
        $_SESSION['messageManagement']=$settingsUpdateOpModel->settingsUpdateOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function admins() {
        $data=[];
        $adminsModel=new nedminModel();
        $data['admins']=$adminsModel->admins();

        $this->callLayout("backend","main","nedmin","admins",$data);
    }

    public function adminsSortable() {
        $adminsSortableModel=new nedminModel();
        $adminsSortableModel->adminsSortable();
    }

    public function adminsUpdate($admins_id) {
        $data=[];
        $adminsUpdateModel=new nedminModel();
        $data['adminsUpdate']=$adminsUpdateModel->adminsUpdate($admins_id);
        $this->callLayout("backend","main","nedmin","adminsUpdate",$data);
    }

    public function adminsUpdateOp(){

        $adminsUpdateOpModel=new nedminModel();
        $_SESSION['messageManagement']=$adminsUpdateOpModel->adminsUpdateOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function adminsDelete($admins_id){
        $adminsDeleteModel=new nedminModel();
        $_SESSION['messageManagement']=$adminsDeleteModel->adminsDelete($admins_id);
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function adminsInsertOp(){
        $adminsInsertOp=new nedminModel();
        $_SESSION['messageManagement']=$adminsInsertOp->adminsInsertOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function sliders() {
        $data=[];
        $slidersModel=new nedminModel();
        $data['sliders']=$slidersModel->sliders();
        $this->callLayout("backend","main","nedmin","sliders",$data);
    }

    public function slidersInsertOp(){
        $slidersInsertOp=new nedminModel();
        $_SESSION['messageManagement']=$slidersInsertOp->slidersInsertOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function slidersDelete($sliders_id){
        $slidersDeleteModel=new nedminModel();
        $_SESSION['messageManagement']=$slidersDeleteModel->slidersDelete($sliders_id);
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function slidersSortable() {
        $slidersSortable=new nedminModel();
        $slidersSortable->slidersSortable();
    }

    public function blogs() {
        $data=[];
        $blogsModel=new nedminModel();
        $data['blogs']=$blogsModel->blogs();
        $this->callLayout("backend","main","nedmin","blogs",$data);
    }

    public function blogsInsertOp(){
        $blogsInsertOp=new nedminModel();
        $_SESSION['messageManagement']=$blogsInsertOp->blogsInsertOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function blogsUpdate($blogs_id) {
        $data=[];
        $blogsUpdateModel=new nedminModel();
        $data['blogsUpdate']=$blogsUpdateModel->blogsUpdate($blogs_id);
        $this->callLayout("backend","main","nedmin","blogsUpdate",$data);
    }

    public function blogsUpdateOp(){

        $blogsUpdateOpModel=new nedminModel();
        $_SESSION['messageManagement']=$blogsUpdateOpModel->blogsUpdateOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function blogsDelete($blogs_id){
        $blogsDeleteModel=new nedminModel();
        $_SESSION['messageManagement']=$blogsDeleteModel->blogsDelete($blogs_id);
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function blogsSortable() {
        $blogsSortableModel=new nedminModel();
        $blogsSortableModel->blogsSortable();
    }

    //ABOUTS

    public function abouts() {
        $data=[];
        $aboutsModel=new nedminModel();
        $data['abouts']=$aboutsModel->abouts();
        $this->callLayout("backend","main","nedmin","abouts",$data);
    }

    public function aboutsInsertOp(){
        $aboutsInsertOp=new nedminModel();
        $_SESSION['messageManagement']=$aboutsInsertOp->aboutsInsertOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function aboutsUpdate($abouts_id) {
        $data=[];
        $aboutsUpdateModel=new nedminModel();
        $data['aboutsUpdate']=$aboutsUpdateModel->aboutsUpdate($abouts_id);
        $this->callLayout("backend","main","nedmin","aboutsUpdate",$data);
    }

    public function aboutsUpdateOp(){

        $aboutsUpdateOpModel=new nedminModel();
        $_SESSION['messageManagement']=$aboutsUpdateOpModel->aboutsUpdateOp();
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function aboutsDelete($abouts_id){
        $aboutsDeleteModel=new nedminModel();
        $_SESSION['messageManagement']=$aboutsDeleteModel->aboutsDelete($abouts_id);
        Header("Location:{$_SERVER['HTTP_REFERER']}");
        exit;
    }

    public function aboutsSortable() {
        $aboutsSortableModel=new nedminModel();
        $aboutsSortableModel->aboutsSortable();
    }
}