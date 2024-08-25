@if(!empty($cidades))
  @foreach($cidades as $cidade)
    <option value="{{ $cidade->nome }}">{{ $cidade->nome }}</option>
  @endforeach
@endif