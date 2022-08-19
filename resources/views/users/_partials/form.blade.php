@csrf
<input type="text" name="name" placeholder="Insira o Nome" value="{{$user->name ?? old('name')}}">
<input type="email" name="email" placeholder="e-mail" value="{{$user->email ?? old('email')}}">
<input type="password" name="password" placeholder="Senha">
<button type="submit">Enviar</button>
 