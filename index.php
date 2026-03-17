<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard - Yago Oliveira</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{
background:#f1f5f9;
font-family:Segoe UI, Arial, sans-serif;
color:#1e293b;
display:flex;
flex-direction:column;
min-height:100vh;
}

/* LAYOUT */

.dashboard-container{
display:flex;
flex:1;
}

/* MENU */

nav{
width:230px;
background:#1e293b;
padding:25px 20px;
display:flex;
flex-direction:column;
}

nav ul{
list-style:none;
display:flex;
flex-direction:column;
gap:12px;
}

nav a{
color:#cbd5f5;
text-decoration:none;
padding:10px;
border-radius:6px;
transition:0.3s;
font-weight:500;
}

nav a:hover{
background:#2563eb;
color:white;
}

/* PERFIL */

.perfil-usuario{
display:flex;
align-items:center;
gap:10px;
color:#e2e8f0;
margin-top:auto;
padding-top:20px;
border-top:1px solid rgba(255,255,255,0.1);
}

.perfil-usuario img{
width:40px;
border-radius:50%;
}

/* MAIN */

main{
flex:1;
padding:40px;
}

/* CARDS */

.container-cards{
display:flex;
flex-wrap:wrap;
gap:25px;
}

article{
flex:1;
min-width:250px;
background:white;
padding:25px;
border-radius:10px;
border:1px solid #e2e8f0;
box-shadow:0 6px 15px rgba(0,0,0,0.05);
display:flex;
flex-direction:column;
transition:0.2s;
}

article:hover{
transform:translateY(-6px);
box-shadow:0 12px 25px rgba(0,0,0,0.08);
}

article h2{
margin-bottom:10px;
color:#1e293b;
}

article p{
color:#64748b;
margin-bottom:20px;
}

/* BOTÃO */

.btn{
margin-top:auto;
text-align:center;
background:#2563eb;
color:white;
padding:10px 20px;
text-decoration:none;
border-radius:6px;
font-weight:500;
transition:0.3s;
}

.btn:hover{
background:#1d4ed8;
}

/* FOOTER */

footer{
background:#1e293b;
color:#cbd5f5;
text-align:center;
padding:15px;
font-size:14px;
}

</style>

</head>

<body>

<div class="dashboard-container">

<nav>

<ul>
<li><a href="#">Início</a></li>
<li><a href="cad-user.php">Usuários</a></li>
<li><a href="users.php">Relatórios</a></li>
<li><a href="#">Configurações</a></li>
</ul>

<div class="perfil-usuario">
<img src="https://images.icon-icons.com/3298/PNG/512/ui_user_profile_avatar_person_icon_208734.png">
<span>Yago Oliveira</span>
</div>

</nav>

<main>

<section class="container-cards">

<article>
<h2>Módulo de Usuários</h2>
<p>Gerencie os acessos e permissões do sistema nesta área.</p>
<a href="#" class="btn">Acessar</a>
</article>

<article>
<h2>Relatórios de Vendas</h2>
<p>Acompanhe os gráficos de desenvolvimento desta área.</p>
<a href="#" class="btn">Acessar</a>
</article>

<article>
<h2>Configurações do Servidor</h2>
<p>Ajuste as portas do Apache e o banco de dados.</p>
<a href="#" class="btn">Acessar</a>
</article>

</section>

</main>

</div>

<footer>
<p>&copy; <?php echo date('Y'); ?> - Desenvolvido na aula de Web I</p>
</footer>

</body>
</html>