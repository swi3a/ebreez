<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Contact Emplyee list</h4>
                        <h6 class="card-subtitle"></h6>
                        <button type="button" class="btn btn-info btn-rounded m-t-10 float-end text-white"
                            data-bs-toggle="modal" data-bs-target="#add-contact">Add New Contact</button>
                        <!-- Add Contact Popup Model -->
                        <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-hidden="true"></button>
                                        <h4 class="modal-title" id="myModalLabel">Add New Contact</h4>
                                    </div>
                                    <div class="modal-body">
                                        <from class="form-horizontal form-material">
                                            <div class="form-group">
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" class="form-control"
                                                        placeholder="Type name">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" class="form-control" placeholder="Email">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" class="form-control" placeholder="Phone">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" class="form-control"
                                                        placeholder="Designation">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" class="form-control" placeholder="Age">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" class="form-control"
                                                        placeholder="Date of joining">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <input type="text" class="form-control"
                                                        placeholder="Salary">
                                                </div>
                                                <div class="col-md-12 m-b-20">
                                                    <div
                                                        class="fileupload btn btn-primary btn-rounded waves-effect waves-light">
                                                        <span><i class="ion-upload m-r-5"></i>Upload Contact
                                                            Image</span>
                                                        <input type="file" class="upload">
                                                    </div>
                                                </div>
                                            </div>
                                        </from>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-info text-white waves-effect"
                                            data-bs-dismiss="modal">Save</button>
                                        <button type="button" class="btn btn-default waves-effect"
                                            data-bs-dismiss="modal">Cancel</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <div class="table-responsive">
                            <table id="demo-foo-addrow"
                                class="table table-bordered m-t-30 table-hover contact-list" data-paging="true"
                                data-paging-size="7">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Role</th>
                                        <th>Age</th>
                                        <th>Joining date</th>
                                        <th>Salery</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg"
                                                    alt="user" width="40" class="img-circle" /> Genelia
                                                Deshmukh</a>
                                        </td>
                                        <td>genelia@gmail.com</td>
                                        <td>+123 456 789</td>
                                        <td><span class="label label-danger">Designer</span> </td>
                                        <td>23</td>
                                        <td>12-10-2014</td>
                                        <td>$1200</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg"
                                                    alt="user" width="40" class="img-circle" /> Arijit Singh</a>
                                        </td>
                                        <td>arijit@gmail.com</td>
                                        <td>+234 456 789</td>
                                        <td><span class="label label-info">Developer</span> </td>
                                        <td>26</td>
                                        <td>10-09-2014</td>
                                        <td>$1800</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg"
                                                    alt="user" width="40" class="img-circle" /> Govinda
                                                jalan</a>
                                        </td>
                                        <td>govinda@gmail.com</td>
                                        <td>+345 456 789</td>
                                        <td><span class="label label-success">Accountant</span></td>
                                        <td>28</td>
                                        <td>1-10-2013</td>
                                        <td>$2200</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg"
                                                    alt="user" width="40" class="img-circle" /> Hritik
                                                Roshan</a>
                                        </td>
                                        <td>hritik@gmail.com</td>
                                        <td>+456 456 789</td>
                                        <td><span class="label label-inverse">HR</span></td>
                                        <td>25</td>
                                        <td>2-10-2017</td>
                                        <td>$200</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg"
                                                    alt="user" width="40" class="img-circle" /> John Abraham</a>
                                        </td>
                                        <td>john@gmail.com</td>
                                        <td>+567 456 789</td>
                                        <td><span class="label label-danger">Manager</span></td>
                                        <td>23</td>
                                        <td>10-9-2015</td>
                                        <td>$1200</td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg"
                                                    alt="user" width="40" class="img-circle" /> Pawandeep
                                                kumar</a>
                                        </td>
                                        <td>pawandeep@gmail.com</td>
                                        <td>+678 456 789</td>
                                        <td><span class="label label-warning">Chairman</span></td>
                                        <td>29</td>
                                        <td>10-5-2013</td>
                                        <td>$1500</td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg"
                                                    alt="user" width="40" class="img-circle" /> Ritesh
                                                Deshmukh</a>
                                        </td>
                                        <td>ritesh@gmail.com</td>
                                        <td>+123 456 789</td>
                                        <td><span class="label label-danger">Designer</span></td>
                                        <td>35</td>
                                        <td>05-10-2012</td>
                                        <td>$3200</td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg"
                                                    alt="user" width="40" class="img-circle" /> Salman Khan</a>
                                        </td>
                                        <td>salman@gmail.com</td>
                                        <td>+234 456 789</td>
                                        <td><span class="label label-info">Developer</span></td>
                                        <td>27</td>
                                        <td>11-10-2014</td>
                                        <td>$1800</td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg"
                                                    alt="user" width="40" class="img-circle" /> Govinda
                                                jalan</a>
                                        </td>
                                        <td>govinda@gmail.com</td>
                                        <td>+345 456 789</td>
                                        <td><span class="label label-success">Accountant</span></td>
                                        <td>18</td>
                                        <td>12-5-2017</td>
                                        <td>$100</td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg"
                                                    alt="user" width="40" class="img-circle" /> Sonu Nigam</a>
                                        </td>
                                        <td>sonu@gmail.com</td>
                                        <td>+456 456 789</td>
                                        <td><span class="label label-inverse">HR</span></td>
                                        <td>36</td>
                                        <td>18-5-2009</td>
                                        <td>$4200</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg"
                                                    alt="user" width="40" class="img-circle" /> Varun Dhawan</a>
                                        </td>
                                        <td>varun@gmail.com</td>
                                        <td>+567 456 789</td>
                                        <td><span class="label label-danger">Manager</span></td>
                                        <td>43</td>
                                        <td>12-10-2010</td>
                                        <td>$5200</td>
                                    </tr>
                                    <tr>
                                        <td>12</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg"
                                                    alt="user" width="40" class="img-circle" /> Genelia
                                                Deshmukh</a>
                                        </td>
                                        <td>genelia@gmail.com</td>
                                        <td>+123 456 789</td>
                                        <td><span class="label label-danger">Designer</span> </td>
                                        <td>23</td>
                                        <td>12-10-2014</td>
                                        <td>$1200</td>
                                    </tr>
                                    <tr>
                                        <td>13</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg"
                                                    alt="user" width="40" class="img-circle" /> Arijit Singh</a>
                                        </td>
                                        <td>arijit@gmail.com</td>
                                        <td>+234 456 789</td>
                                        <td><span class="label label-info">Developer</span> </td>
                                        <td>26</td>
                                        <td>10-09-2014</td>
                                        <td>$1800</td>
                                    </tr>
                                    <tr>
                                        <td>14</td>
                                        <td>
                                            <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg"
                                                    alt="user" width="40" class="img-circle" /> Govinda
                                                jalan</a>
                                        </td>
                                        <td>govinda@gmail.com</td>
                                        <td>+345 456 789</td>
                                        <td><span class="label label-success">Accountant</span></td>
                                        <td>28</td>
                                        <td>1-10-2013</td>
                                        <td>$2200</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>   
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>