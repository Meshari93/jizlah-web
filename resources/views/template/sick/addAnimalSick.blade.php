<div class="modal fade" style="margin-top: -35px;min-width: 900px;" id="sickAnimalModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header rtl">
                <button type="button" class="close pull-left" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title " id="myModalLabel">أضافة حيوان مريض :</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" action="{{ route('addSickAnimal.animal') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="col-sm-6 pull-right rtl">
                        <div class="form-group is-empty input-from-group">
                            <label class="control-label">
                                <h4> رقم المريض</h4>
                            </label>
                             <!-- <select class="form-control select2-single js-example-rtl" name="Animalsickid" data-placeholder="أختيار المرض"> -->
                             <select class="form-control select2-single js-example-basic-multiple-limit js-example-rtl " name="Animalsickid" multiple="multiple">
                               @foreach($animalID as $id)
                               <option value="{{$id->id}} ">{{$id->id}}</option>
                               @endforeach
                             </select>
                            <span class="material-input"></span>
                        </div>
                        <div class="form-group is-empty input-from-group">
                            <label class="control-label">
                                <h4> أختيار المرض  :</h4>
                            </label>
                            <select class="form-control select2-multpl js-example-rtl" multiple="multiple" name="sickSelection[]" data-placeholder="أختيار المرض">
                              @foreach($sickName as $sick)
                              <option value="{{$sick->id}} ">{{$sick->name}}</option>
                              @endforeach
                            </select>
                            <span class="material-input"></span>
                        </div>
                    </div>
                    <div class="col-sm-5 pull-left rtl">
                        <span class="material-input"></span>
                        <div class="form-group is-empty input-from-group">
                            <label class="control-label">
                                <h4>توصات  </h4>
                            </label>
                            <textarea name="recommendationSickOfAnimal" class="form-control"></textarea>
                            <span class="material-input"></span>
                        </div>
                        <div class="col-sm-6">
                        <span class="material-input"></span>
                          <div class="form-group is-empty input-from-group">
                            <label class="control-label">
                                <h4> عزل الحيوان :  </h4>
                            </label>
                            <div class="togglebutton">
                                <label>
                                    <input type="checkbox" name="isolationSick" value="yes" >
                                </label>
                            </div>
                          </div>
                         </div>
                         <div class="col-sm-6">
                           <span class="material-input"></span>
                           <div class="form-group is-empty input-from-group">
                             <label class="control-label">
                                 <h4>عناية خاصة   </h4>
                             </label>
                             <div class="togglebutton">
                                 <label>
                                     <input type="checkbox" name="specialCareSick" value="yse" >
                                 </label>
                             </div>
                         </div>
                       </div>

                    </div>
                    <div class="col-sm-12 pull-right rtl">
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
