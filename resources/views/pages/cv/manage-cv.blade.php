@extends('pages.layout')
@section('content')
    <div id="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <a target="_blank" href=""><img style="width: 100%; margin-top: 20px"
                        src="https://www.topcv.vn/v3/images/super-fast-job/Banner_page_QLCV.png"
                        class="img-responsive" alt="Tìm việc siêu tốc"></a>
                    <div class="box-group">
                        <div class="box-group-header">
                            <div class="row">
                                <div class="box-group-title col-sm-6 col-md-9">
                                    <a href="">Danh sách CV</a>
                                </div>
                                <div class="box-group-toolbox col-sm-6 col-md-3 text-right">
                                    <a href="" class="btn btn-topcv-primary btn-sm"><span
                                            class="fa fa-plus-circle"></span> Tạo mới</a>
                                </div>
                            </div>
                        </div>
                        <div class="box-group-body">
                            <div id="cv-list">
                                <div class="box box-white cv no-gutter clearfix">
                                    <div class="hidden-xs col-sm-3 col-cv-thumb">
                                        <a href="" target="_blank" class="cv-thumb">
                                            <img src="https://www.topcv.vn/images/cv/screenshots/thumbs/vi/mau-cv-default.png" class="img-responsive"></a>
                                    </div> <div class="col-xs-12 col-sm-9 col-cv-data">
                                        <div class="clearfix">
                                            <h4 class="cv-title pull-left"><!----> <a href="" target="_blank" class="text-highlight bold">php</a></h4> <span class="cv-date text-gray pull-right"><i aria-hidden="true" class="fa fa-clock-o text-highlight"></i> 10-09-2020 23:15 PM</span>
                                        </div>
                                        <div class="cv-url text-gray"><input type="text" onclick="this.select();" readonly="readonly"></div>
                                        <ul class="cv-action text-dark-gray">
                                            <li><a target="_blank" href="https://www.topcv.vn/xem-cv/2fedea87e640a78751f31c36b35cef3d" class="btn btn-sm bold"><i class="fa fa-eye"></i> Xem</a></li>
                                            <li><a href="" data-id="2fedea87e640a78751f31c36b35cef3d" class="btn btn-sm bold btn-download-cv"><i class="fa fa-download"></i> Tải xuống</a></li>
                                            <li><a href="" class="btn btn-sm bold"><i class="fa fa-pencil"></i> Sửa</a></li>
                                            <li><a data-toggle="modal" data-cv-id="2fedea87e640a78751f31c36b35cef3d" data-target="#confirmDelete" class="btn btn-sm bold"><i class="fa fa-trash"></i> Xóa</a></li></ul></div></div>
                                <div class="text-center"></div> <div class="box box-white cv no-gutter clearfix box-no-padding"></div></div>
                        </div>
                    </div>

                </div>
                <div class="col-sm-4" id="sidebar">
                    <div class="box box-white text-center-sm">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-avatar">
                                    <img src="https://www.topcv.vn/images/avatar-default.jpg" alt="">
                                </div>
                                <div class="text-center">
                                    <input type="file" name="avatar" style="display: none;" id="img-avatar">
                                    <a href=""
                                       style="font-size: 11px; padding: 3px 5px;margin: 6px 0px; color: #777; font-style: italic;"
                                       data-target="#upload-profile-avatar" data-toggle="modal" id="btn-upload-avatar">
                                        Cập nhật ảnh
                                    </a>
                                </div>

                            </div>
                            <div class="col-md-8">

                                <h4 class="profile-fullname">Hoàng Đình Tuấn</h4>
                                <div class="box-footer">
                                    <a href="" class="btn btn-sm btn-topcv-primary">Nâng cấp tài khoản</a>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px;padding: 20px">
                            <input type="hidden" id="currentStatus" value="">
                            <div id="on-off-job-waiting" class="">
                                <div class="col-xs-12">
                                    <input type="checkbox" class="js-switch" value="1" id="btn-job-waiting"/>
                                    <span class="job-waiting-status-text job-off-show">
                <strong class="text-red">Trạng thái tìm việc đang tắt</strong>
                </span>
                                    <span class="job-waiting-status-text job-on-show">
                <strong class="text-highlight">Trạng thái tìm việc đang bật</strong>
                <a href="" class="text-gray" title="Chỉnh sửa tiêu chí" style="display: inline-block; margin-left: 5px"><i
                        class="text-tiny glyphicon glyphicon-pencil"></i></a>
                </span>
                                </div>
                                <div class="col-xs-12">
                                    <input type="checkbox" class="js-switch" value="1" id="btn-allow-epl-view-cv"/>
                                    <span class="job-waiting-status-text">
                <strong id="text-allow-epl-view-cv" class=" text-red ">Cho phép NTD liên hệ bạn qua</strong>
                </span>
                                </div>
                                <div id="box-profile-active" class="col-xs-12" style="display: none;">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="radio-choose-active">
                                                <input id="not-is-active" type="radio" checked name="profile_is_active">
                                                <label for="not-is-active">CV Online</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="radio-choose-active" id="no-profile">
                                                <input id="is-active" type="radio" name="profile_is_active">
                                                <label for="is-active">Hồ sơ TopCV</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="" class="btn btn-topcv-primary btn-sm">Tạo TopCV Profile</a>
                            </div>
                            </p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
