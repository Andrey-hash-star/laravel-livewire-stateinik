@if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@else
    <form wire:submit.prevent="saveComment">
        <div class="mb-3">
            <label for="title" class="form-label">Тема сообщения</label>
            <input wire:model.lazy="title" type="text" class="form-control" id="title"
                placeholder="Введите тему сообщения">
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Текст сообщения</label>
            <textarea wire:model.lazy="message" class="form-control" id="message" rows="3"></textarea>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
@endif

