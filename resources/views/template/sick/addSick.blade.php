<div class="modal fade" style="margin-top: -35px;min-width: 900px;" id="sickModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header rtl">
                <button type="button" class="close pull-left" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title " id="myModalLabel">أضافة  مرض :</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('addsick.animal') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="col-sm-4 pull-right rtl">
                        <div class="form-group is-empty input-from-group">
                            <label class="control-label">
                                <h4> اسم المرض </h4>
                            </label>
                            <input type="text" name="sickName" placeholder="" class="form-control" required>
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group is-empty input-from-group">
                            <label class="control-label">
                                <h4> وصف المرض </h4>
                            </label>
                            <textarea name="describeSick" class="form-control"></textarea>
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="col-sm-5 pull-left rtl">
                        <div class="form-group is-empty input-from-group">
                            <label class="control-label">
                                <h4> أنتقال المرض  </h4>
                            </label>
                            <div class="row ">
                                <div class="col-sm-4 pull-right">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="sickTransmission" value="contagious" required> معدي
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-8 pull-left">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="sickTransmission" value="non Infectious"><span class="circle"></span><span class="check"></span> غير معدي
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group is-empty input-from-group">
                            <label class="control-label">
                                <h4>توصات  </h4>
                            </label>
                            <textarea name="recommendationSick" class="form-control"></textarea>
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="col-sm-12 pull-right rtl">
                        <div class="form-group is-empty input-from-group">
                            <label class="control-label">
                                <h4> درجة خطورة المرض  </h4>
                            </label>
                            <div class="row ">
                                <div class="col-sm-3 pull-right">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="severity" value="very dangerous"><span class="circle"></span><span class="check"></span><span class="circle"></span><span class="check"></span> خطير جدأ
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-2 pull-right">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="severity" value="danger"><span class="circle"></span><span class="check"></span><span class="circle"></span><span class="check"></span> خطير
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3 pull-right">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="severity" value="risk"><span class="circle"></span><span class="check"></span><span class="circle"></span><span class="check"></span> متوسط الخطورة
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-4 pull-right">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="severity" value="low risk" required><span class="circle"></span><span class="check"></span><span class="circle"></span><span class="check"></span> ضعيف الخطورة
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <span class="material-input"></span>
                        </div>
                        <div class="col-sm-6  ">
                            <div class="space-50"></div>
                            <div class="footer btn-add text-center">
                                <div class="row">
                                    <button type="submit" class="btn btn-primary  btn-dashbord">
                                        أضافة
                                    </button>
                                    <button type="button" class="btn btn-danger btn-dashbord" data-dismiss="modal">أغلاق</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
