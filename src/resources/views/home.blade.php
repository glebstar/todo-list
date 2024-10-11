@extends('layouts.main')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th class="text-start">Название</th>
                <th class="text-start">Текст</th>
                <th class="text-start">Тэги</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-start">Первая</td>
                <td class="text-start">Принести чай</td>
                <td class="text-start">
                    <span class="badge text-bg-success">New</span>
                    <span class="badge text-bg-success">Old</span>
                </td>
                <td>
                    <a href="#"><i class="bi bi-pencil"></i></a>
                    <a href="#"><i class="bi bi-trash3"></i></a>
                </td>
            </tr>
        </tbody>
    </table>

    <div class="modal" tabindex="-1" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Редактирование задачи</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="editModalInputTitle" class="form-label">Название</label>
                            <input type="text" class="form-control" id="editModalInputTitle">
                        </div>
                        <div class="mb-3">
                            <label for="editModalInputText" class="form-label">Текст</label>
                            <textarea class="form-control" id="editModalInputText"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Отмена</button>
                    <button type="button" class="btn btn-primary">Сохранить изменения</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function (){
            initButtons();
        });

        function initButtons()
        {
            $('.bi-pencil').click(function(){
                const editModal = new bootstrap.Modal(document.getElementById('edit-modal'));
                editModal.show();
            });
        }
    </script>
@endsection
