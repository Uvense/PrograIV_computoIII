    <label class="form-label">Nombre:</label>
    <input type="text" name="name" id="name" value="{{ isset($pet)?$pet->name:'' }}" class"form-control" /><br />
    @error('name')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <br />
    Edad:
    <input type="number" name="age" id="age" value="{{ isset($pet)?$pet->age:'' }}" /><br />
    @error('age')
    <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <br />
    Peso (kg)
    <input type="text" name="weight_kg" id="weight_kg" value="{{ isset($pet)?$pet->weight_kg:'' }}"><br />
    @error('weight_kg')
    <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <br />
    <!--mostrar propietarios-->
    <select name="owner_id">
        <option value=""></option>
        @foreach($owners as $own)
        <option value="{{$own->id}}" {{ isset($pet->owner_id) == $own->id ? 'selected' : '' }}>
            {{$own->full_name}}
        </option>
        @endforeach
    </select>
    @error('owner_id')
    <div class="alert alert-danger">
            {{ $message }}
        </div>
    @enderror
    <br />

    <button type="submit" class="btn btn-primary">Guardar</button>