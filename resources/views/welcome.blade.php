

@extends('includes/bootstrap')
@section('contentSite')
<div class="container">
   <h4 class="center" style="text-align:center">Sales Voucher Form</h4>
    <div class="row">
      <div class="col">
      <form action="{{url('salesForm')}}" method="POST">
            @method('post')
            @csrf
        <div class="form-group row">
            <label for="sessionName" class="col-sm-2 col-form-label">Session</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="sessionName" name="sessionName">
            </div>
          </div>
        </div>
        <!--- Second in same---->
        <div class="col">
            <div class="form-group row">
                <label for="fy" class="col-sm-2 col-form-label">F:Y:</label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="fy" name="fy">
                </div>
              </div>
        </div>
    </div>
    <!--- Next Line---->
    <hr>
    <span class="badge badge-primary"><h6>Prospectus Details</h6></span>
    <div class="row">
      <div class="col">
          <div class="form-group row">
              <label for="vouchars" class="col-sm-4 col-form-label">VoucherID</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" id="vouchars" name="vouchars">
              </div>
            </div>
      </div>

      <div class="col">
          <div class="form-group row">
              <label for="use_date" class="col-sm-2 col-form-label">Date</label>
              <div class="col-sm-10">
                <input type="date" class="form-control" id="use_date" name="user_date">
              </div>
            </div>
      </div>

      <div class="col">
          <div class="form-group row">
              <label for="form_num" class="col-sm-4 col-form-label">FormNo.</label>
              <div class="col-sm-8">
                <input type="number" class="form-control" id="form_num" name="Form_no">
              </div>
            </div>
      </div>

      <div class="col">
          <div class="form-group row">
              <label for="form_status" class="col-sm-2 col-form-label">Status</label>
              <div class="col-sm-5">
                <input type="text" class="form-control" id="form_status" name="status">
              </div>
            </div>
      </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group row">
                <label for="stu_group" class="col-sm-2 col-form-label">Student Group</label>
                <div class="col-sm-12">
                    <select class="custom-select mr-sm-2" id="stu_group" name="group_stu">
                        <option selected>Choose...</option>
                        <option value="General">General</option>
                        <option value="SC">SC</option>
                        <option value="OBC">OBC</option>
                      </select>
                </div>
              </div>
        </div>
      </div>

      <div class="row">
          <div class="col">
              <div class="form-group row">
                  <label for="stu_campus" class="col-sm-2 col-form-label">Campus</label>
                  <div class="col-sm-12">
                      <select class="custom-select mr-sm-2" id="stu_campus" name="campus">
                          <option selected>Choose...</option>
                          <option value="12">12</option>
                          <option value="11">11</option>
                          <option value="10">10</option>
                        </select>
                  </div>
                </div>
          </div>

          <div class="col">
              <div class="form-group row">
                  <label for="for_class" class="col-sm-2 col-form-label">ForClass</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" id="for_class" name="for_class">
                  </div>
                </div>
          </div>

          <div class="col">
              <div class="form-group row">
                  <label for="for_class" class="col-sm-2 col-form-label">+</label>
                  <div class="col-sm-12">
                    <input type="text" class="form-control" id="for_class">
                  </div>
                </div>
          </div>
        </div>
        <!---- Student Details---->
        <hr>
        <span class="badge badge-primary"><h6>Student Details</h6></span>
<div class="row">
  <div class="col">
    <div class="form-group">
    <label for="student" class="col-sm-2 col-form-label">Name Of Student</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" id="student" name="stuname">
    </div>
  </div>
  </div>
</div>
<div class="row">
  <div class="col">
    <div class="form-group">
      <label for="gender" class="col-sm-2 col-form-label">Genedr</label>
      <div class="col-sm-4">
        <select class="custom-select mr-sm-2" id="gender" name="gender">
        <option selected value="0">--Choose gender</option>
        <option value="Male">Male</option>
        <option value="female">female</option>
        <option value="Others">Others</option>
      </select>
      </div>
    </div>
  </div>
                  <div class="col">
                    <div class="form-group">
                      <label for="dob" class="col-sm-2 col-from-label">DateofBirth</label>
                      <div class="col-sm-4">
                        <input type="date" class="form-control" id="dob" name="dob">
                      </div>
                    </div>
                    </div> 

                    <div class="col">
                      <div class="form-group">
                        <label for="age" class="col-sm-2 col-form-label">Age(yrs,Mnt)</label>
                        <input type="number" class="form-control" id="age" name="age">
                      </div>
                    </div>
</div>
       <div class="row">
         <div class="col">
           <div class="form-group">
             <label for="fn" class="col-sm-2 col-form-label">Father Name</label>
             <div class="col-sm-6">
               <input type="text" class="form-control" id="fn" name="fn">
             </div>
           </div>
         </div>
                    <div class="col">
                      <div class="form-group">
                        <label for="mn" class="col-sm-2 col-form-label">Monther Name</label>
                        <div class="col-sm-6">
                          <input type="text" class="form-control" id="mn" name="mn">
                        </div>
                      </div>
                    </div>

       </div>
             <div class="row">
               <div class="col">
                 <div class="form-group">
                   <label for="ref" class="col-sm-2 col-form-label">Reference Name</label>
                   <div class="col-sm-6">
                     <input type="text" class="form-control" id="ref" name="ref">
                   </div>
                 </div>
               </div>
             </div>
             <!--- Adress Details--->
             <hr>
             <span class="badge badge-primary"><h6>Address Details</h6></span>  
             <div class="row">
               <div class="col">
                 <div class="form-group">
                    <label for="address" class="col-sm-2 col-form-label">Adress</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" id="address" name="address">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="address" name="address1">
                      </div>
                      <div class="col-sm-6">
                          <input type="text" class="form-control" id="address" name="address2">
                        </div>
                 </div>
               </div>
               <div class="col">
                 <div class="form-group">
                    <label for="cnt" class="col-sm-2 col-form-label">ContactNumber</label>
                    <div class="col-sm-4">
                      <input type="number" class="form-control" id="cnt" name="contactNumber">
                    </div>
                 </div>
               </div>
               
             </div>
             <div class="row">
                <div class="col">
                    <div class="form-group">
                       <label for="smcnt" class="col-sm-2 col-form-label">Mobile(SmsNo.)</label>
                       <div class="col-sm-4 pull-right">
                         <input type="number" class="form-control" id="smcnt" name="smsNum">
                       </div>
                    </div>
                  </div>
             </div>   
             <div class="row">
                <div class="col">
                    <div class="form-group">
                       <label for="cits" class="col-sm-2 col-form-label">city/Area</label>
                       <div class="col-sm-3">
                         <input type="text" class="form-control" id="cits" name="city">
                         
                       </div>
                    </div>
                  </div>
                  <div class="col">
                      <div class="form-group">
                         <label for="area" class="col-sm-2 col-form-label">+</label>
                         <div class="col-sm-3">
                          
                           <input type="text" class="form-control" id="area" name="area">
                         </div>
                      </div>
                    </div>

                    <div class="col">
                        <div class="form-group">
                           <label for="res" class="col-sm-2 col-form-label">Result</label>
                           <div class="col-sm-3">
                            
                             <input type="text" class="form-control" id="res" name="result">
                           </div>
                        </div>
                      </div>
                      <div class="col">
                          <div class="form-group">
                             <label for="val" class="col-sm-2 col-form-label">Value</label>
                             <div class="col-sm-3">
                              
                               <input type="text" class="form-control" id="val" name="value">
                             </div>
                          </div>
                        </div>
             </div>
             <div class="row">
                <div class="col">
                    <div class="form-group">
                       <label for="pi" class="col-sm-2 col-form-label">pin</label>
                       <div class="col-sm-4">
                        
                         <input type="text" class="form-control" id="pi" name="pin">
                       </div>
                    </div>
                  </div>
                  <div class="col">
                      <div class="form-group">
                         <label for="pres" class="col-sm-2 col-form-label">Previous School</label>
                         <div class="col-sm-8">
                          
                           <input type="text" class="form-control" id="pres" name="preSch">
                         </div>
                      </div>
                    </div>
             </div>
             <div class="row">
                <div class="col">
                    <div class="form-group">
                       <label for="dis" class="col-sm-2 col-form-label">District</label>
                       <div class="col-sm-6">
                        
                         <input type="text" class="form-control" id="dis" name="dist">
                       </div>
                    </div>
                  </div>
                  <div class="col">
                      <div class="form-group">
                         <label for="sta" class="col-sm-2 col-form-label">State</label>
                         <div class="col-sm-6">
                          
                           <input type="text" class="form-control" id="sta" name="state">
                         </div>
                      </div>
                    </div>
             </div>
             <hr>
             <div class="row">
                <div class="col">
                    <div class="form-group">
                       <label for="rec" class="col-sm-2 col-form-label">Reciever Name</label>
                       <div class="col-sm-6">
                        
                         <input type="text" class="form-control" id="rec" name="rec_name">
                       </div>
                    </div>
                  </div>
                  <div class="col">
                      <div class="form-group">
                         <label for="reps" class="col-sm-2 col-form-label">Receipt Name</label>
                         <div class="col-sm-6">
                          
                           <input type="text" class="form-control" id="reps" name="rep_name">
                         </div>
                      </div>
                    </div>
             </div>
             <div class="row">
                <div class="col">
                    <div class="form-group">
                       <label for="comment" class="col-sm-2 col-form-label">Instructions (if any)</label>
                       <div class="col-sm-6">
                        
                          <textarea class="form-control" rows="8" id="comment" name="instru"></textarea>
                       </div>
                    </div>
                  </div>
             </div>
             
        <div class="row">
          <div class="col-sm-6">
              <button type="submit" class="btn btn-success pull-right">SAVE</button>
          </div>
          <div class="col-sm-6">
              <button type="reset" class="btn btn-danger pull-right">UNDO</button>
          </div>
        </div>
    
  </form>
</div>
@endsection
