<header>
    <div class="container-fluid">
        <div class="row d-flex">
            <div class="col-md-2 d-flex position-absolute pt-4" style="right: 0;">
                
                <div>
                    <img class="rounded rounded-5" src="{{ asset('assets/dashboard/images/adminPic.jpg') }}" alt="Admin Picture" width="50px">
                </div>
                <div style="margin-left: 10px;">
                    <div class="dropdown" id="dropdownWrapper">
                        <a class="d-flex text-decoration-none align-items-center dropdown-toggle" href="#" role="button">
                            <div>
                                <h6 class="text-dark">Admin Name</h6>
                                <p class="text-muted" style="margin-top: -10px">Admin</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu p-4" style="width: 250px; display: none;" id="dropdownMenu">
                            <h6 style="font-size: 18px;">My Profile</h6>
                            <li><hr class="dropdown-divider my-4" style="border-top: 1px solid red;"></li>
                            <li class="mt-3"><i class="fa-regular fa-user icons"></i> <a class="dropdown-item d-inline" href="#" style="font-size: 18px"> My Profile </a></li>
                            <li class="mt-4"><i class="fa-solid fa-power-off icons"></i> <a class="dropdown-item d-inline" href="#" style="font-size: 18px">Sign Out</a></li>
                        </ul>
                    </div>
                </div>
                <div class="bars-btn"><i class="fa-solid fa-bars"></i></div>
            </div>
        </div>
    </div>
</header>