<?php include 'html/header.html'; ?>

<body>

    <main class="container">
        <section class="section-content">
            <form id="userForm" class="needs-validation" novalidate action="php/forms.php" method="post">
                    <h1>Informações Pessoais</h1>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" class="form-control input-custom" id="nome" name="nome"
                                placeholder="Digite seu nome completo" data-placeholder="Digite seu nome completo" required>

                            <div class="invalid-feedback">Nome inválido.</div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="nascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" class="form-control input-custom" id="nascimento" name="nascimento"
                                required>
                            <div class="invalid-feedback">Data de nascimento inválida.</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" class="form-control input-custom" id="email" name="email"
                                placeholder="exemplo@dominio.com" required>
                            <div class="invalid-feedback">E-mail inválido.</div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" class="form-control input-custom" id="telefone" name="telefone"
                                placeholder="(xx) xxxx-xxxx" required>
                            <div class="invalid-feedback">Número de telefone inválido.</div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control input-custom" id="cpf" name="cpf"
                                placeholder="Digite seu CPF" required>
                            <div class="invalid-feedback">CPF inválido.</div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label for="rg" class="form-label">RG</label>
                            <input type="text" class="form-control input-custom" id="rg" name="rg"
                                placeholder="Digite seu RG" required>
                            <div class="invalid-feedback">RG inválido.</div>
                        </div>

                    <h1>Endereço</h1>

                    <div class="row">
                    <label for="cep" class="form-label">CEP</label>
                        <div class="col-md-5 mb-3 d-flex">
                            <input type="text" class="form-control input-custom" id="cep" name="cep"
                                placeholder="Digite seu CEP" required>
                            <div class="invalid-feedback">CEP inválido.</div>
                            <button type="button" id="consultarCep" class="btn btn-custom ms-1">Consultar</button>
                        </div>
                    </div>

                    <div class="row">
                        
                    <div class="col-md-8 mb-3">
                            <label for="endereco" class="form-label">Rua</label>
                            <input type="text" class="form-control input-custom" id="endereco" name="endereco"
                                placeholder="Rua" required>
                            <div class="invalid-feedback">Rua inválida.</div>
                        </div>

                        <div class="col-md-2 mb-2">
                            <label for="numero" class="form-label">Número</label>
                            <input type="text" class="form-control input-custom" id="numero" name="numero"
                                placeholder="Número" required>
                            <div class="invalid-feedback">Número inválido.</div>
					    </div>

                        <div class="col-md-4 mb-3">
                            <label for="bairro" class="form-label">Bairro</label>
                            <input type="text" class="form-control input-custom" id="bairro" name="bairro"
                                placeholder="Bairro" required>
                            <div class="invalid-feedback">Bairro inválido.</div>
                        </div>

                        <div class="col-md-5 mb-3">
                            <label for="bairro" class="form-label">Complemento</label>
                            <input type="text" class="form-control input-custom" id="complemento" name="complemento"
                                placeholder="Complemento" required>
                            <div class="invalid-feedback">Complemento inválido.</div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="cidade" class="form-label">Cidade</label>
                            <input type="text" class="form-control input-custom" id="cidade" name="cidade"
                                placeholder="Cidade" required>
                            <div class="invalid-feedback">Cidade inválida.</div>
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="estado" class="form-label">Estado</label>
                            <select class="form-select input-custom" id="estado" name="estado" required>
                                <option value="" disabled selected>Selecione seu estado</option>
                                <option value="AC">Acre</option>
                                <option value="AL">Alagoas</option>
                                <option value="AP">Amapá</option>
                                <option value="AM">Amazonas</option>
                                <option value="BA">Bahia</option>
                                <option value="CE">Ceará</option>
                                <option value="DF">Distrito Federal</option>
                                <option value="ES">Espírito Santo</option>
                                <option value="GO">Goiás</option>
                                <option value="MA">Maranhão</option>
                                <option value="MT">Mato Grosso</option>
                                <option value="MS">Mato Grosso do Sul</option>
                                <option value="MG">Minas Gerais</option>
                                <option value="PA">Pará</option>
                                <option value="PB">Paraíba</option>
                                <option value="PR">Paraná</option>
                                <option value="PE">Pernambuco</option>
                                <option value="PI">Piauí</option>
                                <option value="RJ">Rio de Janeiro</option>
                                <option value="RN">Rio Grande do Norte</option>
                                <option value="RS">Rio Grande do Sul</option>
                                <option value="RO">Rondônia</option>
                                <option value="RR">Roraima</option>
                                <option value="SC">Santa Catarina</option>
                                <option value="SP">São Paulo</option>
                                <option value="SE">Sergipe</option>
                                <option value="TO">Tocantins</option>
                            </select>
                            <div class="invalid-feedback">Estado inválido.</div>
                        </div>
                    </div>

                    <h1>Crie uma senha</h1>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="senha" class="form-label">Senha</label>
                            <input type="password" class="form-control input-custom" id="senha" name="senha"
                                placeholder="Crie uma senha segura" required>
                            <div class="invalid-feedback">Senha inválida.</div>
                        </div>

                        <div class="col-md-3 mb-3">
                            <label for="confirmaSenha" class="form-label">Confirme a Senha</label>
                            <input type="password" class="form-control input-custom" id="confirmaSenha"
                                name="confirma_senha" placeholder="Confirme sua senha" required>
                            <div class="invalid-feedback">As senhas devem coincidir.</div>
                        </div>
                    </div>

                    <h1>Mensagem</h1>

                    <div class="mb-3">
                        <label for="assunto" class="form-label">Assunto</label>
                        <input type="text" class="form-control input-custom" id="assunto" name="assunto"
                            placeholder="Digite o assunto" required>
                        <div class="invalid-feedback">Assunto inválido.</div>
                    </div>

                    <div class="mb-3" height="10%">
                        <label for="mensagem" class="form-label">Mensagem</label>
                        <input class="form-control input-custom" id="mensagem" name="mensagem" rows="4"
                            placeholder="Digite sua mensagem" required>
                        <div class="invalid-feedback">Mensagem inválida.</div>
                    </div>

                <div class="text-end">
                    <a href="registros.php" class="btn btn-custom">Consultar registros</a>
                    <button type="reset" class="btn btn-custom">Limpar</button>
                    <button type="submit" class="btn btn-custom">Cadastrar</button>
                </div>
            </form>
        </section>
    </main>

    <script src="js/masks.js"></script>
    <script src="js/main.js"></script>
    <script src="js/validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>