@extends('Backend.index')
@section('title')
    Trang tổng quan
@endsection
@section('content')
    <div class="dashboard-content">
        <div class="row">

            <!-- Item -->
            <div class="col-lg-3 col-md-6 col-xs-6">
                <div class="dashboard-stat color-1">
                    <div class="dashboard-stat-content"><h4>6</h4> <span>Active Listings</span></div>
                    <div class="dashboard-stat-icon"><i class="im im-icon-Map2"></i></div>
                    <div class="dashboard-stat-item"><p>Someone bookmarked your listing!</p></div>
                </div>
            </div>

            <!-- Item -->
            <div class="col-lg-3 col-md-6 col-xs-6">
                <div class="dashboard-stat color-2">
                    <div class="dashboard-stat-content"><h4>726</h4> <span>Total Bookings</span></div>
                    <div class="dashboard-stat-icon"><i class="im im-icon-Line-Chart"></i></div>
                    <div class="dashboard-stat-item"><p>Someone bookmarked your listing!</p></div>
                </div>
            </div>


            <!-- Item -->
            <div class="col-lg-3 col-md-6 col-xs-6">
                <div class="dashboard-stat color-3">
                    <div class="dashboard-stat-content"><h4>95</h4> <span>Total Reviews</span></div>
                    <div class="dashboard-stat-icon"><i class="im im-icon-Add-UserStar"></i></div>
                    <div class="dashboard-stat-item"><p>Someone bookmarked your listing!</p></div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-xs-6">
                <div class="dashboard-stat color-4">
                    <div class="dashboard-stat-content"><h4>126</h4> <span>Bookmarks</span></div>
                    <div class="dashboard-stat-icon"><i class="im im-icon-Heart"></i></div>
                    <div class="dashboard-stat-item"><p>Someone bookmarked your listing!</p></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 traffic">
                <div class="dashboard-list-box">
                    <h4 class="gray">Recent Bookings</h4>
                    <div class="table-box">
                        <table class="basic-table">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Booking ID</th>
                                <th>Destination</th>
                                <th>No of Tickets</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>01/01/2017</td>
                                <td class="t-id">C001</td>
                                <td>Dubai</td>
                                <td>5</td>
                                <td>$300.00</td>
                            </tr>
                            <tr>
                                <td>01/01/2017</td>
                                <td class="t-id">C081</td>
                                <td>Grece - Zakynthos</td>
                                <td>5</td>
                                <td>$300.00</td>
                            </tr>
                            <tr>
                                <td>01/01/2017</td>
                                <td class="t-id">C001</td>
                                <td>Bulgary - Sunny Beach</td>
                                <td>5</td>
                                <td>$300.00</td>
                            </tr>
                            <tr>
                                <td>01/01/2017</td>
                                <td class="t-id">C001</td>
                                <td>France - Paris</td>
                                <td>5</td>
                                <td>$300.00</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- Recent Activity -->
            <div class="col-lg-7 col-md-12 col-xs-12 traffic">
                <div class="dashboard-list-box with-icons margin-top-20">
                    <h4 class="gray">Recent Activities</h4>
                    <ul>
                        <li>
                            <i class="list-box-icon sl sl-icon-layers"></i> Your listing <strong><a href="#">Hotel
                                    Govendor</a></strong> has been approved!
                            <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                        </li>

                        <li>
                            <i class="list-box-icon sl sl-icon-star"></i> Kathy Brown left a review
                            <div class="numerical-rating" data-rating="5.0"></div>
                            on <strong><a href="#">Burger House</a></strong>
                            <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                        </li>

                        <li>
                            <i class="list-box-icon sl sl-icon-heart"></i> Someone bookmarked your <strong><a href="#">Burger
                                    House</a></strong> listing!
                            <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                        </li>

                        <li>
                            <i class="list-box-icon sl sl-icon-star"></i> Kathy Brown left a review
                            <div class="numerical-rating" data-rating="3.0"></div>
                            on <strong><a href="#">Airport</a></strong>
                            <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                        </li>

                        <li>
                            <i class="list-box-icon sl sl-icon-heart"></i> Someone bookmarked your <strong><a href="#">Burger
                                    House</a></strong> listing!
                            <a href="#" class="close-list-item"><i class="fa fa-close"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-xs-12 traffic">
                <div class="dashboard-list-box margin-top-20 user-list">
                    <h4 class="gray">User List</h4>
                    <ul>
                        <li>
                            <div class="user-list-item">
                                <div class="user-list-image">
                                    <img src="giaodien/images/comment.jpg" alt="">
                                </div>
                                <div class="user-list-content">
                                    <h4>Loural Teak</h4>
                                    <span>Post Manager</span>
                                </div>
                                <div class="user-btns">
                                    <a href="#" class="button">View</a>
                                    <a href="#" class="button">Edit</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="user-list-item">
                                <div class="user-list-image">
                                    <img src="giaodien/images/comment.jpg" alt="">
                                </div>
                                <div class="user-list-content">
                                    <h4>Jim Gordon</h4>
                                    <span>Post Manager</span>
                                </div>
                                <div class="user-btns">
                                    <a href="#" class="button">View</a>
                                    <a href="#" class="button">Edit</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="user-list-item">
                                <div class="user-list-image">
                                    <img src="giaodien/images/comment.jpg" alt="">
                                </div>
                                <div class="user-list-content">
                                    <h4>Loural Teak</h4>
                                    <span>Post Manager</span>
                                </div>
                                <div class="user-btns">
                                    <a href="#" class="button">View</a>
                                    <a href="#" class="button">Edit</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="user-list-item">
                                <div class="user-list-image">
                                    <img src="giaodien/images/comment.jpg" alt="">
                                </div>
                                <div class="user-list-content">
                                    <h4>Loural Teak</h4>
                                    <span>Post Manager</span>
                                </div>
                                <div class="user-btns">
                                    <a href="#" class="button">View</a>
                                    <a href="#" class="button">Edit</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="user-list-item">
                                <div class="user-list-image">
                                    <img src="giaodien/images/comment.jpg" alt="">
                                </div>
                                <div class="user-list-content">
                                    <h4>Joseph Dean</h4>
                                    <span>Post Manager</span>
                                </div>
                                <div class="user-btns">
                                    <a href="#" class="button">View</a>
                                    <a href="#" class="button">Edit</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <!-- site traffic -->
            <div class="col-lg-4 col-md-4 mar-b-30">
                <div class="dashboard-list-box">
                    <h4 class="gray">Site Traffic</h4>
                    <div id="chartContainer" style="height: 250px; width: 100%;"></div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 mar-b-30">
                <div class="dashboard-list-box">
                    <h4 class="gray">Bar Chart</h4>
                    <div id="barchart" style="height: 250px; width: 100%;"></div>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="dashboard-list-box">
                    <h4 class="gray">Search Engine</h4>
                    <div id="piechart" style="height: 250px; width: 100%;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
