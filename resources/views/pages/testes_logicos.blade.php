<!-- Interação com listas ótima abstração -->
@if(isset($lista))
      @foreach($lista as $item)
      <p class="@if($loop -> first) test @endif">{{ $item }}</p>
      <!-- Se a variável loop estiver no primeiro indíce do array ele irá pertencer a class"test"-->
      @endforeach
    @endif
<!-- Outra opção bem melhor é FOR ELSE -->
    @forelse($lista as $item)
      <!-- Variável loop disponibilizada dentro do foreach ou forelse -->
      <!-- Tem função muito interessante em relação a interação com dados de um array -->  
      <p class="@if($loop -> last) test @endif">{{$item}}</p>
      <!-- Se a variável loop estiver no último indíce do array ele irá pertencer a class"test"-->
    @empty
      <p>Nada dentro da LISTA</p>
    @endforelse

    @if ($dev == 'Wanderson Fontes')
        é igual
    @else
        é diferente
    @endif
<!-- Aqui temos alguns exemplos porém o ideal é que o código seja limpo e enxuto -->
<!-- Estruturas de Diretivas que podem ser usadas para algumas funções           -->
    @isset($email)<!-- Verifica se uma variavel existe e se foi passada para view-->
        <p>{{$email}}</p>
    @endisset
<!-- Verifica se o valor da variável corresponde aos caso adicionados no switch  -->
    @switch($dev) 
        @case(1)
            Igual 1
            @break
        @case(2)
            Igual 2
            @break
        @case(3)
            Igual 3
            @break
        @default
            Não é igual a nenhum dos casos
    @endswitch
    @auth
      <p>Autenticado</p>
    @else 
      <p>Não Autenticado!</p>
    @endauth
    @guest
      <p>Só entra aqui se não estiver autenticado!</p>
    @endguest
    




<!-- Não é indicado uso da tag STYLE dentro da view o bom é usar uma link para um arquivo CSS específico -->
<!-- Esse será apenas um teste pra variável loop dentro do for else-->
<style>
  .test{
    background-color: red;
  }
</style>