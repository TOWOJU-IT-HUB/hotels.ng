<!-- // main contents goes here -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Withdrawal Details</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="cust-tab" data-toggle="tab" href="#cust" role="tab" aria-controls="cust" aria-selected="false">Customer Info</a>
    </li>
</ul>
<div class="tab-content mt-4 text-left" id="myTabContent">
    <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="profile-tab">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="col">Amount</th>
                        <td>$<?= number_format($inf['amount'], 2) ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Withdrawal Method</th>
                        <td><?= ucwords($inf['method']) ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Status</th>
                        <td><?= ucwords($inf['status']) ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Date</th>
                        <td><?= date('d-m-Y h:i:A', strtotime($inf['created_at'])); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="tab-pane fade" id="cust" role="tabpanel" aria-labelledby="profile-tab">
        <!-- // tab 2 for custom css -->
        <div class="ml-3">
        <div class="table-responsive">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="col">FullName:</th>
                        <td><?= $userInfo['fullname'] ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Email</th>
                        <td><?= $userInfo['email'] ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Phone</th>
                        <td><?= $userInfo['phone'] ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Address</th>
                        <td><?= $userInfo['address'] ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Date</th>
                        <td><?= $userInfo['created_at'] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>