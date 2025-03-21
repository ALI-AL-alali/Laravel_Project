<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة العملاء - لوحة المشرف</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assetsSystemAdmin/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('assetsSystemAdmin/css/stylecreate.css') }}">
</head>

<body>

    <nav class="navbar navbar-expand-lg supervisor-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-user-shield"></i> لوحة المشرف
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <button class="btn btn-link text-light" id="cust">
                            <i class="fas fa-users"></i><a href="{{ route('customers.show') }}"> أدارة حسابات الزبائن</a>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-link text-light" >
                            <i class="fas fa-sign-out-alt"></i> تسجيل الخروج
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-5">
        <div class="animated-fade-in">
            <h1 class="text-center mb-5 text-danger">
                <i class="fas fa-users-cog"></i> إدارة المدراء
            </h1>


            <div class="alert alert-success alert-dismissible fade show d-none" id="successAlert">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>

            <div class="row mb-4 g-3">
                <div class="col-md-12">
                    <div class="custom-search">
                        <input type="text" id="searchInput" class="form-control"
                            placeholder="ابحث بالبريد الإلكتروني...">
                        <button class="btn" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
            <a href="#" data-bs-toggle="modal" data-bs-target="#addManagerModal">
                <button>
                    <span>
                        <svg height="24" width="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M11 11V5h2v6h6v2h-6v6h-2v-6H5v-2z" fill="currentColor"></path>
                        </svg>
                        اضافة مدير
                    </span>
                </button>

            </a>

            <div class="custom-card p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>البريد الإلكتروني</th>
                                <th>رقم الجوال</th>
                                <th>حذف</th>
                                <th>تعديل</th>
                            </tr>
                        </thead>
                        
                        <tbody id="customersTableBody2">
                            <tr>
                                <th>#</th>
                                <th>احمد الاحمد</th>
                                <th>Ahmad@gmil.com</th>
                                <th>0948306286</th>
                                <th> <button class="button">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 69 14"
                                            class="svgIcon bin-top">
                                            <g clip-path="url(#clip0_35_24)">
                                                <path fill="black" d="M20.8232 2.62734L19.9948
                                    4.21304C19.8224 4.54309 19.4808 4.75 19.1085
                                    4.75H4.92857C2.20246 4.75 0 6.87266 0 9.5C0
                                    12.1273 2.20246 14.25 4.92857
                                    14.25H64.0714C66.7975 14.25 69 12.1273 69
                                    9.5C69 6.87266 66.7975 4.75 64.0714
                                    4.75H49.8915C49.5192 4.75 49.1776 4.54309
                                    49.0052 4.21305L48.1768 2.62734C47.3451
                                    1.00938 45.6355 0 43.7719 0H25.2281C23.3645 0
                                    21.6549 1.00938 20.8232 2.62734ZM64.0023
                                    20.0648C64.0397 19.4882 63.5822 19 63.0044
                                    19H5.99556C5.4178 19 4.96025 19.4882 4.99766
                                    20.0648L8.19375 69.3203C8.44018 73.0758
                                    11.6746 76 15.5712 76H53.4288C57.3254 76
                                    60.5598 73.0758 60.8062 69.3203L64.0023
                                    20.0648Z"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_35_24">
                                                    <rect fill="white" height="14" width="69">
                                                        </ rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 69 57"
                                            class="svgIcon bin-bottom">
                                            <g clip-path="url(#clip0_35_22)">
                                                <path fill="black" d="M20.8232 -16.3727L19.9948
                                    -14.787C19.8224 -14.4569 19.4808 -14.25
                                    19.1085 -14.25H4.92857C2.20246 -14.25 0
                                    -12.1273 0 -9.5C0 -6.8727 2.20246 -4.75 4.92857
                                    -4.75H64.0714C66.7975 -4.75 69 -6.8727 69
                                    -9.5C69 -12.1273 66.7975 -14.25 64.0714
                                    -14.25H49.8915C49.5192 -14.25 49.1776 -14.4569
                                    49.0052 -14.787L48.1768 -16.3727C47.3451
                                    -17.9906 45.6355 -19 43.7719
                                    -19H25.2281C23.3645 -19 21.6549 -17.9906
                                    20.8232 -16.3727ZM64.0023 1.0648C64.0397
                                    0.4882 63.5822 0 63.0044 0H5.99556C5.4178 0
                                    4.96025 0.4882 4.99766 1.0648L8.19375
                                    50.3203C8.44018 54.0758 11.6746 57 15.5712
                                    57H53.4288C57.3254 57 60.5598 54.0758
                                    60.8062 50.3203L64.0023 1.0648Z"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_35_22">
                                                    <rect fill="white" height="57" width="69">
                                                        </ rect>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </button>
                                </th>
                                <th> <a href='#' data-bs-toggle="modal" data-bs-target="#editManagerModal">
                                        <button class="edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                class="svgIcon pencil-top">
                                                <path fill="white" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3
                                    17.25zM20.71 7.04c.39-.39.39-1.02
                                    0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83
                                    1.83 3.75 3.75 1.83-1.83z"></path>
                                            </svg>
                                        </button>
                                    </a>
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-4 d-flex justify-content-center" id="pagination">

                </div>
            </div>
        </div>
    </main>

    <div class="modal fade" id="addManagerModal" dir="rtl">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background: transparent; border: none;">
                <div class="form-card1">
                    <div class="form-card2">
                        <form class="form">
                            <p class="form-heading">اضافة مدير جديد</p>

                            <div class="form-field">
                                <input required="" placeholder="الاسم" class="input-field" type="text" />
                            </div>

                            <div class="form-field">
                                <input required="" placeholder="البريد الإلكتروني" class="input-field"
                                    type="email" />
                            </div>

                            <div class="form-field">
                                <input required="" placeholder="رقم الهاتف" class="input-field" type="text" />
                            </div>

                            <div class="form-field">
                                <input required="" placeholder= "كلمة السر" class="input-field" type="text" />
                            </div>

                            <button class="sendMessage-btn">اضافة</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editManagerModal" dir="rtl">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="background: transparent; border: none;">
                <div class="form-card1">
                    <div class="form-card2">
                        <form class="form">
                            <p class="form-heading">تعديل بيانات المدير</p>

                            <div class="form-field">
                                <input required="" placeholder="الاسم" class="input-field" type="text" />
                            </div>

                            <div class="form-field">
                                <input required="" placeholder="رقم الهاتف" class="input-field" type="text" />
                            </div>

                            <div class="form-field">
                                <input required="" placeholder= "كلمة السر" class="input-field" type="text" />
                            </div>

                            <button class="sendMessage-btn">تعديل</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
