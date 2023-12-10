document.addEventListener('DOMContentLoaded', function () {
    var editButtons = document.querySelectorAll('.mensagem-edit');

    editButtons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var formId = this.getAttribute('data-id');
            var id = formId.replace('edit-', '');
            let buttonsEdit = document.getElementById('buttons-' + id);
            let nomeEdit = document.getElementById('nome-' + id);
            let emailEdit = document.getElementById('email-' + id);
            let mensagemEdit = document.getElementById('mensagem-' + id);

            if (buttonsEdit.classList.contains('hidden')) {
                buttonsEdit.classList.remove('hidden');
                nomeEdit.classList.remove('disable');
                emailEdit.classList.remove('disable');
                mensagemEdit.classList.remove('disable');
            } else {
                buttonsEdit.classList.add('hidden');
                nomeEdit.classList.add('disable');
                emailEdit.classList.add('disable');
                mensagemEdit.classList.add('disable');
            };
            // toggleEditButtons(formId);
            // alert(id)
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    var deleteButtons = document.querySelectorAll('.mensagem-delete');

    deleteButtons.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var delid = this.getAttribute('data-id');
            var id = delid.replace('delBt-', '');
            var form = document.getElementById('form-' + id);
            form.action = 'processar-delecao.php'; // Certifique-se de que este caminho esteja correto
            form.submit();
            // alert("Del")
            // location.reload()
        });
    });
});

