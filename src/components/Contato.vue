<template>
    <section id="contato" class="relative">
        <div class="w-full h-full py-8 lg:py-20 bg-base-200">
            <div class="flex justify-center w-full py-4 text-black">
                <h1 class="px-2 text-4xl font-semibold text-center">Entre em Contato</h1>
            </div>
            <div class="w-16 h-2 mx-auto text-center rounded-lg bg-primary"></div>
            <div class="relative">
                <div
                    class="flex flex-col justify-center rounded-lg w-[90%] relative z-10 mt-6 lg:w-7/12 shadow-md mx-auto bg-base-300">
                    <form action="envia.php" id="lead_form" method="POST" class="gap-4 p-8 lg:p-12 form-control">
                        <label class="label">
                            <span class="text-lg label-text text-primary">Setores: *</span>
                        </label>
                        <select name="setores" class="w-full select">
                            <option disabled selected>Escolha o setor desejado para contato:</option>
                            <option value="firma">Firma</option>
                            <option value="rgi">RGI</option>
                            <option value="certidoes">Certidões</option>
                            <option value="escritura">Escritura</option>
                        </select>
                        <label class="label">
                            <span class="text-lg label-text text-primary">Nome: *</span>
                        </label>
                        <input class="input" required id="lead_nome" name="nome" type="text"
                            placeholder="Digite seu nome aqui">
                        <label class="label">
                            <span class="text-lg label-text text-primary">Email: *</span>
                        </label>
                        <input class="input" required id="lead_email" name="email" type="mail"
                            placeholder="email@email.com">
                        <label class="label">
                            <span class="text-lg label-text text-primary">Mensagem: *</span>
                        </label>
                        <textarea class="textarea" name="mensagem" required placeholder="Mensagem"></textarea>
                        <div class="flex justify-center">
                            <button type="submit" id="lead_submit"
                                class="w-full text-white transition duration-500 border-0 hover:bg-primary btn bg-primary hover:scale-105 ">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>