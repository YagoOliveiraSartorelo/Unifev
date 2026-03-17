<!DOCTYPE html>
<html lang="pt-BR">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Listagem de Usuários</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Segoe UI, Arial, sans-serif;
}

body{
background:#f1f5f9;
padding:40px;
}

/* HEADER */

.header-content{
margin-bottom:25px;
}

.header-content h2{
color:#1e293b;
font-size:26px;
margin-bottom:5px;
}

.header-content p{
color:#64748b;
font-size:14px;
}

/* TABELA */

.table-responsive{
background:white;
border-radius:10px;
box-shadow:0 8px 20px rgba(0,0,0,0.06);
overflow:hidden;
}

table{
width:100%;
border-collapse:collapse;
}

/* CABEÇALHO */

th{
background:#1e293b;
color:white;
padding:15px;
text-align:left;
font-size:13px;
text-transform:uppercase;
letter-spacing:0.5px;
}

/* LINHAS */

td{
padding:15px;
border-bottom:1px solid #eee;
font-size:14px;
color:#334155;
}

tbody tr:nth-child(even){
background:#f8fafc;
}

tbody tr:hover{
background:#eef2ff;
transition:0.2s;
}

/* BOTÕES */

.btn-icon{
background:none;
border:none;
cursor:pointer;
font-size:16px;
margin-right:10px;
color:#64748b;
transition:0.2s;
}

.btn-icon:hover{
color:#2563eb;
transform:scale(1.1);
}

/* BADGES */

.badge{
padding:6px 12px;
border-radius:20px;
font-size:12px;
font-weight:600;
}

.badge.ativo{
background:#22c55e;
color:white;
}

.badge.inativo{
background:#ef4444;
color:white;
}

</style>

</head>

<body>

<main>

<div class="header-content">
<h2>Gestão de Usuários</h2>
<p>Visualize e gerencie as permissões dos usuários do sistema</p>
</div>

<div class="table-responsive">

<table>

<thead>
<tr>
<th>ID</th>
<th>Nome</th>
<th>E-mail</th>
<th>Acesso</th>
<th>Status</th>
<th>Ações</th>
</tr>
</thead>

<tbody>

<tr>
<td>01</td>
<td>Eric Freitas</td>
<td>eric@unifev.edu.br</td>
<td>Administrador</td>
<td><span class="badge ativo">Ativo</span></td>
<td>
<button class="btn-icon" title="Editar"><i class="fa-solid fa-pen-to-square"></i></button>
<button class="btn-icon" title="Visualizar"><i class="fa-solid fa-eye"></i></button>
<button class="btn-icon" title="Excluir"><i class="fa-solid fa-trash"></i></button>
</td>
</tr>

<tr>
<td>02</td>
<td>Ana Souza</td>
<td>ana.souza@email.com</td>
<td>Editor</td>
<td><span class="badge ativo">Ativo</span></td>
<td>
<button class="btn-icon" title="Editar"><i class="fa-solid fa-pen-to-square"></i></button>
<button class="btn-icon" title="Visualizar"><i class="fa-solid fa-eye"></i></button>
<button class="btn-icon" title="Excluir"><i class="fa-solid fa-trash"></i></button>
</td>
</tr>

<tr>
<td>03</td>
<td>Carlos Lima</td>
<td>carlos.lima@servidor.com</td>
<td>Usuário</td>
<td><span class="badge inativo">Inativo</span></td>
<td>
<button class="btn-icon" title="Editar"><i class="fa-solid fa-pen-to-square"></i></button>
<button class="btn-icon" title="Visualizar"><i class="fa-solid fa-eye"></i></button>
<button class="btn-icon" title="Excluir"><i class="fa-solid fa-trash"></i></button>
</td>
</tr>

</tbody>

</table>

</div>

</main>

</body>
</html>