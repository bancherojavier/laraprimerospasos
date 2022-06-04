@csrf
            <label>Titulo</label>
            <input type="text" name="title" value="{{ old("title",$post->title)}}">
            <label>Slug</label>
            <input type="text" name="slug" value="{{ old("slug",$post->slug)}}">

            <label>Categorias</label>
            <select name="category_id">
                @foreach ($categories as $title => $id)
                    <option {{ old("category_id",$post->category_id) == $id ? "selected" : ""}} value="{{ $id}}">{{ $title}}</option>
                @endforeach

            </select>
            <label>Posteado?</label>
            <select name="posted">
                <option {{ old("posted",$post->posted) == 'not' ? 'selected' : ""}} value="not">NO</option>
                <option {{ old("posted",$post->posted) == 'yes' ? 'selected' : ""}} value="yes">SI</option>
                
            </select>
            <label>Contenido</label>
            <textarea name="content">{{ old("content",$post->content)}}</textarea>
            <label>Descripción</label>
            <textarea name="description">{{ old("description",$post->description)}}</textarea>
            @if ( isset($task) && $task == "edit")
                <label>Imagen:</label>
                <input type="file" name="image">
            @endif
            <button type="submit">Enviar</button>