<?php $order = array_filter($order) ?>
<!-- // main contents goes here -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Details</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="cust-tab" data-toggle="tab" href="#cust" role="tab" aria-controls="cust" aria-selected="false">Customer</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log" aria-selected="false">Change Log</a>
    </li>
</ul>
<div class="tab-content mt-4 text-left" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <!-- // Tab one. for settings -->
    </div>
    <div class="tab-pane fade" id="cust" role="tabpanel" aria-labelledby="profile-tab">
        <!-- // tab 2 for custom css -->
        <div class="ml-3">
            <div class="row">
                <p>First Name <span class="text-right"> Last Name</span></p>
            </div>

            <div class="row">
                <span class="text-left"> Last Name</span>
            </div>

            <div class="row">
                <span class="text-left"> Email </span>
            </div>

            <div class="row">
                <span class="text-left"> Phone </span>
            </div>

            <div class="row">
                <span class="text-left"> Address </span>
            </div>

            <div class="row">
                <span class="text-left"> Country </span>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="log" role="tabpanel" aria-labelledby="profile-tab">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">By</th>
                        <th scope="col">Action</th>
                        <th scope="col">At</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Otto</td>
                        <td>mdo</td>
                        <td>mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>