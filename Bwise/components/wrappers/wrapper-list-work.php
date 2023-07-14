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
                                        <th>Type</th>
                                        <th>Quantite</th>
                                        <th>Hauteur</th>
                                        <th>Largeur</th>
                                        <th>Profondeur</th>
                                        <th>Type</th>
                                        <th>etat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <a href="javascript:void(0)"> sariya</a>
                                        </td>
                                        <td>bl kayass</td>
                                        <td>9</td>
                                        <td><span >0</span> </td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td><button type="button" class="btn waves-effect waves-light btn-rounded btn-info">Info</button></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <a href="javascript:void(0)"> 7ayte</a>
                                        </td>
                                        <td>bl brike</td>
                                        <td>9</td>
                                        <td><span >0</span> </td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td><button type="button" class="btn waves-effect waves-light btn-rounded btn-info">Info</button></td>
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