document.addEventListener('DOMContentLoaded', () => {
   // بيانات وهمية للعرض
   const mockCustomers = [
      { id: 1, name: 'فاطمة عربش', email: 'fatema@example.com', phone: '0987654321', status: 'active' },
      { id: 2, name: 'علي العلي', email: 'ali@example.com', phone: '0987123456', status: 'blocked' },
   ];

   // عناصر DOM المهمة
   const tableBody = document.getElementById('customersTableBody');
   const searchInput = document.getElementById('searchInput');
   const statusFilter = document.getElementById('statusFilter');
   const logoutBtn = document.getElementById('logoutBtn');
   const successAlert = document.getElementById('successAlert');

   // دالة إنشاء صفوف الجدول
   function renderCustomers(customers) {
      tableBody.innerHTML = customers.map((customer, index) => `
           <tr class="${customer.highlight ? 'highlight-row' : ''}">
               <td>${index + 1}</td>
               <td>${customer.name}</td>
               <td>${customer.email}</td>
               <td>${customer.phone || '----'}</td>
               <td>
                   <span class="status-badge ${customer.status === 'active' ? 'status-active' : 'status-blocked'}">
                       ${customer.status === 'active' ? 'نشط' : 'معطل'}
                   </span>
               </td>
               <td>
                   <button class="btn ${customer.status === 'active' ? 'btn-danger' : 'btn-success'} action-btn"
                           data-id="${customer.id}"
                           onclick="handleStatusChange(${customer.id}, '${customer.status}')">
                       <i class="fas ${customer.status === 'active' ? 'fa-lock' : 'fa-unlock'}"></i>
                       ${customer.status === 'active' ? 'تعطيل' : 'تفعيل'}
                   </button>
               </td>
           </tr>
       `).join('');
   }

   // دالة معالجة تغيير الحالة
   window.handleStatusChange = (id, currentStatus) => {
      const newStatus = currentStatus === 'active' ? 'blocked' : 'active';
      if (confirm(`هل أنت متأكد من ${newStatus === 'active' ? 'تفعيل' : 'تعطيل'} هذا الحساب؟`)) {
         showAlert(`تم ${newStatus === 'active' ? 'تفعيل' : 'تعطيل'} الحساب بنجاح`);
         renderCustomers(mockCustomers.map(c =>
            c.id === id ? { ...c, status: newStatus } : c
         ));
      }
   }

   // دالة عرض التنبيهات
   function showAlert(message) {
      successAlert.querySelector('.btn-close').addEventListener('click', () => {
         successAlert.classList.add('d-none');
      });
      successAlert.querySelector('.alert').textContent = message;
      successAlert.classList.remove('d-none');
      setTimeout(() => successAlert.classList.add('d-none'), 5000);
   }
  
   // حدث تسجيل الخروج
   logoutBtn.addEventListener('click', () => {
      if (confirm('هل أنت متأكد من تسجيل الخروج؟')) {
         window.location.href = '/login';
      }
   });

   // أحداث البحث والتصفية
   searchInput.addEventListener('input', filterCustomers);
   statusFilter.addEventListener('change', filterCustomers);

   // دالة التصفية
   function filterCustomers() {
      const searchTerm = searchInput.value.toLowerCase();
      const status = statusFilter.value;

      const filtered = mockCustomers.filter(customer => {
         const matchesSearch = customer.email.toLowerCase().includes(searchTerm);
         const matchesStatus = !status || customer.status === status;
         return matchesSearch && matchesStatus;
      });

      renderCustomers(filtered);
   }

   // التهيئة الأولية
   renderCustomers(mockCustomers);
});