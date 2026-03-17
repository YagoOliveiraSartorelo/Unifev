<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<section class="card-form">

<div class="form-header">
<h2><i class="fa-solid fa-user-plus"></i> Novo Usuário</h2>
<p>Preencha os dados abaixo para registrar um novo acesso.</p>
</div>

<form action="processa.php" method="POST">

<div class="form-group">
<label for="nome">Nome Completo</label>
<input type="text" id="nome" name="nome" placeholder="Ex: Eric Freitas" required>
</div>

<div class="form-group">
<label for="email">E-mail</label>
<input type="email" id="email" name="email" placeholder="nome@empresa.com" required>
</div>

<div class="form-row">

<div class="form-group flex-1">
<label for="senha">Senha</label>
<input type="password" id="senha" name="senha" required>
</div>

<div class="form-group flex-1">
<label for="nivel">Nível</label>
<select id="nivel" name="nivel">
<option value="1">Usuário</option>
<option value="2">Administrador</option>
</select>
</div>

</div>

<div class="form-actions">
<button type="submit" class="btn-save">
<i class="fa-solid fa-check"></i> Finalizar Cadastro
</button>

<a href="index.php" class="btn-cancel">
<i class="fa-solid fa-xmark"></i> Cancelar
</a>
</div>

</form>
</section>

<style>

body{
background:#f1f5f9;
font-family:Segoe UI, Arial, sans-serif;
}

/* CARD */

.card-form{
background:white;
max-width:700px;
margin:40px auto;
padding:35px;
border-radius:12px;
box-shadow:0 10px 30px rgba(0,0,0,0.06);
}

/* HEADER */

.form-header{
margin-bottom:25px;
border-bottom:1px solid #e5e7eb;
padding-bottom:15px;
}

.form-header h2{
color:#1e293b;
font-size:24px;
margin-bottom:5px;
}

.form-header p{
color:#64748b;
font-size:14px;
}

/* CAMPOS */

.form-group{
display:flex;
flex-direction:column;
gap:6px;
margin-bottom:18px;
}

label{
font-weight:600;
font-size:14px;
color:#334155;
}

input,select{
padding:12px;
border:1px solid #cbd5e1;
border-radius:6px;
font-size:14px;
transition:0.2s;
}

input:focus,select:focus{
border-color:#2563eb;
outline:none;
box-shadow:0 0 0 3px rgba(37,99,235,0.15);
}

/* LINHA */

.form-row{
display:flex;
gap:20px;
}

.flex-1{
flex:1;
}

/* BOTÕES */

.form-actions{
margin-top:25px;
display:flex;
gap:15px;
}

.btn-save{
background:#2563eb;
color:white;
border:none;
padding:12px 22px;
border-radius:6px;
cursor:pointer;
font-weight:600;
display:flex;
align-items:center;
gap:8px;
transition:0.2s;
}

.btn-save:hover{
background:#1d4ed8;
transform:translateY(-2px);
}

.btn-cancel{
background:#e2e8f0;
color:#334155;
padding:12px 22px;
border-radius:6px;
text-decoration:none;
font-weight:600;
display:flex;
align-items:center;
gap:8px;
transition:0.2s;
}

.btn-cancel:hover{
background:#cbd5e1;
}

/* RESPONSIVO */

@media(max-width:600px){

.form-row{
flex-direction:column;
}

.form-actions{
flex-direction:column;
}

.btn-save,.btn-cancel{
justify-content:center;
}

}

</style>