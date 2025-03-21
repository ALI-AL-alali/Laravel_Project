<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إدارة العملاء - لوحة المشرف</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assetsCustomer/css/styles.css') }}">
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
                        <button class="btn btn-link text-light" id="admin">
                            <i class="fas fa-users-cog"></i> <a href="{{ route('home') }}">ادارة حسابات المدراء </a>
                        </button>
                    </li>
                    <ul class="navbar-nav ms-auto">



                        <form action="{{ url('logout') }}" method="POST">
                            @csrf
                            <li class="nav-item">
                                <button class="btn btn-link text-light" >
                                    <i class="fas fa-sign-out-alt"></i> تسجيل الخروج
                                </button>
                            </li>
                        </form>

                    </ul>
            </div>
        </div>
    </nav>

    <main class="container py-5">
        <div class="animated-fade-in">
            <h1 class="text-center mb-5 text-success">
                <i class="fas fa-users-cog"></i> إدارة الزبائن
            </h1>

            <div class="alert alert-success alert-dismissible fade show d-none" id="successAlert">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>

            <div class="row mb-4 g-3">
                <div class="col-md-8">
                    <div class="custom-search">
                        <input type="text" id="searchInput" class="form-control"
                            placeholder="ابحث بالبريد الإلكتروني...">
                        <button class="btn" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <div class="col-md-4">
                    <select id="statusFilter" class="form-select custom-select">
                        <option value="">جميع الحسابات</option>
                        <option value="active">الحسابات النشطة فقط</option>
                        <option value="blocked">الحسابات المعطلة فقط</option>
                    </select>
                </div>
            </div>

            <div class="custom-card p-4">
                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>البريد الإلكتروني</th>
                                <th>رقم الجوال</th>
                                <th>الحالة</th>
                                <th>الإجراءات</th>
                            </tr>
                        </thead>
                        <tbody id="customersTableBody">
                            <tr>
                                <td colspan="6" class="text-center py-4">جارٍ تحميل البيانات...</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-4 d-flex justify-content-center" id="pagination">
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assetsCustomer/js/app.js') }}"></script>
</body>

</html>
