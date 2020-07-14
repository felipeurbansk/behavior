<div class="container">
    <h1>Upload de arquivo único</h1>
    <form action="{{route('imovels.store')}}" method="post" enctype="multipart/form-data" class="form">
        @csrf

        <div class="form-group">
            <label for="name">Endereço</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Preço</label>
            <input type="text" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="image">Imagem</label>
            <input type="file" name="image" id="image" class="form-control" multiple>
        </div>

        <button type="submit">Salvar</button>
    </form>
</div>
