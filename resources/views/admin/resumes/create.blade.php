<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Rezyume Yuborish</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f2f2f2; padding: 30px;">

    <div class="container text-center">
        <h2 class="mb-4">Ishga Ariza Topsiring</h2>

        <!-- Modalni ochuvchi tugma -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#resumeModal">
            Rezyume Yuborish
        </button>
    </div>

    <!-- Modal oynasi -->
    <div class="modal fade" id="resumeModal" tabindex="-1" aria-labelledby="resumeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Rezyume yuborish</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Yopish"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('resumes.store') }}" method="POST" enctype="multipart/form-data" id="resumeForm">
                        @csrf

                        <div class="mb-3">
                            <label for="full_name" class="form-label">To‘liq ismingiz</label>
                            <input type="text" name="full_name" id="full_name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email manzilingiz</label>
                            <input type="email" name="email" id="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">Telefon raqamingiz</label>
                            <input type="tel" name="phone" id="phone" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="position_applied" class="form-label">Qaysi lavozimga topshiryapsiz?</label>
                            <input type="text" name="position_applied" id="position_applied" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="cv_file" class="form-label">Rezyume (PDF yoki Word)</label>
                            <input type="file" name="cv_file" id="cv_file" class="form-control" accept=".pdf,.doc,.docx" required>
                        </div>

                        <div class="mb-3">
                            <label for="cover_letter" class="form-label">Motivatsion xat (ixtiyoriy)</label>
                            <textarea name="cover_letter" id="cover_letter" class="form-control" rows="4"></textarea>
                        </div>

                        <button type="submit" class="btn btn-success w-100">Yuborish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AJAX bilan submit qilish -->
    <script>
        document.getElementById('resumeForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = e.target;
            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                }
            }).then(response => {
                if (response.ok) {
                    // Modalni yopish
                    const modal = bootstrap.Modal.getInstance(document.getElementById('resumeModal'));
                    modal.hide();

                    alert('✅ Rezyume muvaffaqiyatli yuborildi!');
                    form.reset();
                } else {
                    alert('❌ Xatolik yuz berdi. Qayta urinib ko‘ring.');
                }
            }).catch(error => {
                console.error('Xatolik:', error);
                alert('❌ Server bilan bog‘lanishda xatolik.');
            });
        });
    </script>

</body>
</html>
