@extends ('layout.appadmin')
@section('content')
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('adminheader.headerst')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_settings-panel.html -->
        <div class="theme-setting-wrapper">
            <div id="settings-trigger"><i class="ti-settings"></i></div>
            <div id="theme-settings" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <p class="settings-heading">SIDEBAR SKINS</p>
                <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                    <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                </div>
                <div class="sidebar-bg-options" id="sidebar-dark-theme">
                    <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                </div>
                <p class="settings-heading mt-2">HEADER SKINS</p>
                <div class="color-tiles mx-0 px-4">
                    <div class="tiles success"></div>
                    <div class="tiles warning"></div>
                    <div class="tiles danger"></div>
                    <div class="tiles info"></div>
                    <div class="tiles dark"></div>
                    <div class="tiles default"></div>
                </div>
            </div>
        </div>
        <div id="right-sidebar" class="settings-panel">
            <i class="settings-close ti-close"></i>
            <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
                        aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                        aria-controls="chats-section">CHATS</a>
                </li>
            </ul>
            <div class="tab-content" id="setting-content">
                <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                    aria-labelledby="todo-section">
                    <div class="add-items d-flex px-3 mb-0">
                        <form class="form w-100">
                            <div class="form-group d-flex">
                                <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                <button type="submit" class="add btn btn-primary todo-list-add-btn"
                                    id="add-task">Add</button>
                            </div>
                        </form>
                    </div>
                    <div class="list-wrapper px-3">
                        <ul class="d-flex flex-column-reverse todo-list">
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Team review meeting at 3.00 PM
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li>
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Resolve all the low priority tickets due today
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Schedule meeting for next week
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Project review
                                    </label>
                                </div>
                                <i class="remove ti-close"></i>
                            </li>
                        </ul>
                    </div>
                    <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary mr-2"></i>
                            <span>Feb 11 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                        <p class="text-gray mb-0">The total number of sessions</p>
                    </div>
                    <div class="events pt-4 px-3">
                        <div class="wrapper d-flex mb-2">
                            <i class="ti-control-record text-primary mr-2"></i>
                            <span>Feb 7 2018</span>
                        </div>
                        <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                        <p class="text-gray mb-0 ">Call Sarah Graves</p>
                    </div>
                </div>
                <!-- To do section tab ends -->
                <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                    <div class="d-flex align-items-center justify-content-between border-bottom">
                        <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                        <small
                            class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
                            All</small>
                    </div>
                    <ul class="chat-list">
                        <li class="list active">
                            <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span
                                    class="online"></span></div>
                            <div class="info">
                                <p>Thomas Douglas</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">19 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span
                                    class="offline"></span></div>
                            <div class="info">
                                <div class="wrapper d-flex">
                                    <p>Catherine</p>
                                </div>
                                <p>Away</p>
                            </div>
                            <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                            <small class="text-muted my-auto">23 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span
                                    class="online"></span></div>
                            <div class="info">
                                <p>Daniel Russell</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">14 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span
                                    class="offline"></span></div>
                            <div class="info">
                                <p>James Richardson</p>
                                <p>Away</p>
                            </div>
                            <small class="text-muted my-auto">2 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span
                                    class="online"></span></div>
                            <div class="info">
                                <p>Madeline Kennedy</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">5 min</small>
                        </li>
                        <li class="list">
                            <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span
                                    class="online"></span></div>
                            <div class="info">
                                <p>Sarah Graves</p>
                                <p>Available</p>
                            </div>
                            <small class="text-muted my-auto">47 min</small>
                        </li>
                    </ul>
                </div>
                <!-- chat tab ends -->
            </div>
        </div>
        @include('adminheader.sidebar')
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">

                    <div class="col-md-12 grid-margin">
                        <div class="row">
                            <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                                <h3 class="font-weight-bold">Welcome Aamir</h3>
                                <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span
                                        class="text-primary">3 unread alerts!</span></h6>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="justify-content-end d-flex">
                                    <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                                        <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button"
                                            id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="true">
                                            <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right"
                                            aria-labelledby="dropdownMenuDate2">
                                            <a class="dropdown-item" href="#">January - March</a>
                                            <a class="dropdown-item" href="#">March - June</a>
                                            <a class="dropdown-item" href="#">June - August</a>
                                            <a class="dropdown-item" href="#">August - November</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-row align-items-center">

                                    <h4 class="card-title ">Role Assignment</h4>
                                    <div class="ml-auto">
                                        <form id="form-select">
                                            <div class="form-group">
                                                <select class="form-control " id="exampleFormControlSelect1">
                                                    <option>Admin</option>
                                                    <option>Editor</option>
                                                </select>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr style="background-color:#243F90; color:white;">
                                                <th>
                                                    RESOURCE NAME
                                                </th>
                                                <th>
                                                    READ
                                                </th>
                                                <th>
                                                    WRITE
                                                </th>
                                                <th>
                                                    UPDATE
                                                </th>
                                                <th>
                                                    DELETE
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="py-1">
                                                    Home
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="home-read" checked>
                                                        <label class="custom-control-label" for="home-read"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="home-write" checked>
                                                        <label class="custom-control-label" for="home-write"></label>
                                                    </div>

                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="home-update" checked>
                                                        <label class="custom-control-label" for="home-update"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="home-del" checked>
                                                        <label class="custom-control-label" for="home-del"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    User
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="user-read" checked>
                                                        <label class="custom-control-label" for="user-read"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="user-write" checked>
                                                        <label class="custom-control-label" for="user-write"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="user-read" checked>
                                                        <label class="custom-control-label" for="user-del"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="user-del" checked>
                                                        <label class="custom-control-label" for="user-del"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    Menu
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="menu-read" checked>
                                                        <label class="custom-control-label" for="menu-read"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="menu-write" checked>
                                                        <label class="custom-control-label" for="menu-write"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="menu-update" checked>
                                                        <label class="custom-control-label" for="menu-update"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="menu-del" checked>
                                                        <label class="custom-control-label" for="menu-del"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    Job
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="job-read" checked>
                                                        <label class="custom-control-label" for="job-read"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex "
                                                        id="job-read">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="job-write" checked>
                                                        <label class="custom-control-label" for="job-write"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="job-update" checked>
                                                        <label class="custom-control-label" for="job-update"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input" id="job-del"
                                                            checked>
                                                        <label class="custom-control-label" for="job-del"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    Opportunity
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id=" Opportunity-read" checked>
                                                        <label class="custom-control-label"
                                                            for="Opportunity-read"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="Opportunity-write" checked>
                                                        <label class="custom-control-label"
                                                            for="Opportunity-write"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="Opportunity-update" checked>
                                                        <label class="custom-control-label"
                                                            for="Opportunity-update"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="Opportunity-del" checked>
                                                        <label class="custom-control-label"
                                                            for="Opportunity-del"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    Partner
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id=" Partner-read" checked>
                                                        <label class="custom-control-label" for=" Partner-read"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id=" Partner-write" checked>
                                                        <label class="custom-control-label"
                                                            for=" Partner-write"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id=" Partner-update" checked>
                                                        <label class="custom-control-label"
                                                            for=" Partner-update"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id=" Partner-del" checked>
                                                        <label class="custom-control-label" for=" Partner-del"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="py-1">
                                                    About Us
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id=" About-read" checked>
                                                        <label class="custom-control-label" for=" About-read"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id=" About-write" checked>
                                                        <label class="custom-control-label" for=" About-write"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id=" About-update" checked>
                                                        <label class="custom-control-label" for=" About-update"></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="custom-control custom-switch d-inline-flex " id="blue">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id=" About-del" checked>
                                                        <label class="custom-control-label" for=" About-del"></label>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <div class="mt-4">
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-end">
                                                <li class="page-item disabled">
                                                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="#">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="mt-4 text-right">
                                        <button class="btn btn-danger rounded">
                                            <i class="icon-expand ml-2"> </i> Assign
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.
                            Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin
                                template</a> from BootstrapDash. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="ti-heart text-danger ml-1"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <form class="pt-1">
                            <div class="form-group">
                                <h4 class="mb-3">Please Fill your infomation</h4>
                                <input type="text" class="form-control form-control-lg" id="exampleInputUsername1"
                                    placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                    placeholder="Email">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control form-control-lg" id="exampleInputPassword1"
                                    placeholder="Password">
                            </div>

                            <div class="mt-3">
                                <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                    href="../../index.html">Create</a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection