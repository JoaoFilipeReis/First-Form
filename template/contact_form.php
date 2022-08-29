<div class="page">
    <form class="contact-form" method="POST" action="send.php">
        <h1><?php echo PAGE_TITLE; ?></h1>
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="form-group">
            <label for="phone">Telefone</label>
            <input type="text" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="message">Mensagem</label>
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <button>Enviar</button>
        </div>
    </form>
</div>