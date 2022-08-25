<x-layout title="Clientes">

<div class="mb-2">
    <br>
    <a href="{{route('clientes.create')}}" class="btn btn-dark mb-2">Adicionar</a>
    @isset($successMsg)
        <div class="alert alert-success">
        <?=$successMsg?>
        </div>
    @endisset
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Valor</th>
            <th scope="col">Modelo</th>
            <th scope="col">Plataforma</th>
            <th scope="col">Status</th>

        </tr>
        </thead>

    <?php foreach ($clientes as $cliente):?>
    <tbody>
    <tr>
            <td> <?= $cliente->nome?></td>
            <td> <?= $cliente->valor?></td>
            <td> <?= $cliente->modelo?></td>
            <td> <?= $cliente->plataforma?></td>
            <td><?= $cliente->status?></td>
        <td><a href="{{route('clientes.edit', $cliente->id)}}"><button class="btn btn-dark mb-2" >Editar</button></a></td>
        <form action="{{route('clientes.destroy', $cliente->id)}}" method="post">
            @method('DELETE')
            @csrf
        <td> <button class="btn btn-red mb-2" type="submit">Excluir</button></td>
        </form>
    </tr>
    </tbody>
        <?php endforeach; ?>
    </table>

</div>
</x-layout>

