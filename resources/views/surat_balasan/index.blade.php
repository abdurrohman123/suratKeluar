@extends('layouts.master')
@section('abdurrohman_content')

<div class="row">
    <form>
        <div class="container col-md-3">
            <div class="form-group">
                <label for="exampleInputEmail1">Tanggal Masuk</label>
                <input type="date" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
        <div class="container col-md-3">
            <div class="form-group">
                <label for="">Tanggal Penyelesaian</label>
                <input type="date" class="form-control" id="">
            </div>
        </div>
        <div class="container col-md-6">
            <div class="form-group">
                <label for="">Nomor Surat</label>
                <input type="text" class="form-control" id="">
            </div>
        </div>
        <div class="container col-md-3">
            <div class="form-group">
                <label for="">Register Surat</label>
                <input type="text" class="form-control" id="">
            </div>
        </div>
        <div class="container col-md-3">
            <div class="form-group">
                <label for="">Tanggal Surat</label>
                <input type="date" class="form-control" id="">
            </div>
        </div>
        <div class="container col-md-6">
            <div class="form-group">
                <label for="">Asal Surat</label>
                <input type="text" class="form-control" id="">
            </div>
        </div>
        <div class="container col-md-6">
            <div class="form-group">
                <label for="comment">Prihal</label>
                <textarea class="form-control" rows="5" id="comment"></textarea>
              </div>
        </div>
        <div class="container col-md-3">
            <div class="form-group">
                <label for="">Disposisi</label>
                <input type="text" class="form-control" id="">
            </div>
        </div>
        <div class="container col-md-3">
            <div class="form-group">
                <label for="">Keterangan</label>
                <input type="text" class="form-control" id="">
            </div>
        </div>
        <div class="container col-md-6">
            <div class="form-group">
                <label for="">No Surat Keluar</label>
                <input type="text" class="form-control" id="">
            </div>
        </div>
    </form>
    
    <div class="col-md-12">
        <div class="pull-right">
            <button type="submit" class="btn btn-danger btn-flat">Cencel</button>
            <button type="submit" class="btn btn-primary btn-flat">Simpan</button>

        </div>
    </div>
</div>
<div class="row">

    <div class="col-md-12">


            <div class="c_title">
                <h2>Editable Table</h2>
                <ul class="nav navbar-right panel_options">
                    <li>
                        <a class="full-screen">
                            <span class="icon-size-fullscreen"></span>
                        </a>
                    </li>
                    <li>
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu bullet pull-right animated pulse" role="menu">
                            <li class="hvr-bounce-to-right-global-parent">
                                <a href="#">Settings 1</a>
                            </li>
                            <li class="hvr-bounce-to-right-global-parent">
                                <a href="#">Settings 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!--/.c_title-->

            <div class="c_content">

                <div class="margin-bottom-20">
                    <div class="btn-group">
                        <button id="table-edit_new" class="btn btn-sm btn-success btn-raised rippler rippler-inverse"><i
                                class="fa fa-plus"></i> Add New Line</button>
                    </div>
                </div>
                <div id="table-editable_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="dataTables_length" id="table-editable_length"><label>Show <select
                                        name="table-editable_length" aria-controls="table-editable"
                                        class="form-control input-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-6">
                            <div id="table-editable_filter" class="dataTables_filter"><label>Search:<input type="search"
                                        class="form-control input-sm" placeholder="Search a user..."
                                        aria-controls="table-editable"></label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover dataTable table table-striped table-bordered no-footer"
                                id="table-editable" role="grid" aria-describedby="table-editable_info">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tgl Masuk</th>
                                        <th>Tgl Penyelesaian</th>
                                        <th>No.Surat</th>
                                        <th>Register</th>
                                        <th>Tgl Surat</th>
                                        <th>Asal Surat</th>
                                        <th>Disposisi</th>
                                        <th>Keterangan</th>
                                        <th>Prihal</th>
                                        <th>No.Surat Keluar</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr role="row" class="odd">
                                        <td>435</td>
                                        <td>435</td>
                                        <td>435</td>
                                        <td>435</td>
                                        <td>435</td>
                                        <td>435</td>
                                        <td>435</td>
                                        <td>435</td>
                                        <td>435</td>
                                        <td>435</td>
                                        <td><input type="text" class="form-control small" value="super Admin"></td>
                                        <td class="text-center">
                                            <div class="text-center"><button type="button"
                                                    class="edit btn btn-sm btn-success btn-bordered btn-flat" href=""><i
                                                        class="fa fa-save"></i></button> <a
                                                    class="delete btn btn-sm btn-danger btn-bordered btn-flat"
                                                    href=""><i class="fa fa-trash"></i></a></div>
                                        </td>
                                    </tr>
                                    <tr role="row" class="even">
                                        <td class="sorting_1">Aishmen</td>
                                        <td>Samuel</td>
                                        <td>435</td>
                                        <td>435</td>
                                        <td>435</td>
                                        <td>435</td>
                                        <td>435</td>
                                        <td>435</td>
                                        <td>435</td>
                                        <td>435</td>
                                        <td>super Admin</td>
                                        <td class="text-center"><a
                                                class="edit btn btn-sm btn-default btn-raised rippler rippler-inverse"
                                                href="javascript:;"><i class="fa fa-pencil-square-o"></i></a> <a
                                                class="delete btn btn-sm btn-danger btn-raised rippler rippler-inverse"
                                                href="javascript:;"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="dataTables_info" id="table-editable_info" role="status" aria-live="polite">
                                Showing 1 to 10 of 12 entries</div>
                        </div>
                        <div class="col-sm-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="table-editable_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button previous disabled" id="table-editable_previous"><a
                                            href="#" aria-controls="table-editable" data-dt-idx="0"
                                            tabindex="0">Previous</a></li>
                                    <li class="paginate_button active"><a href="#" aria-controls="table-editable"
                                            data-dt-idx="1" tabindex="0">1</a></li>
                                    <li class="paginate_button "><a href="#" aria-controls="table-editable"
                                            data-dt-idx="2" tabindex="0">2</a></li>
                                    <li class="paginate_button next" id="table-editable_next"><a href="#"
                                            aria-controls="table-editable" data-dt-idx="3" tabindex="0">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--/.c_content-->

        <!--/.c_panels-->

    </div>

</div>
@endsection