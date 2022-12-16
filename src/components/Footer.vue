<template>
<div
        ref="scrollTopButton"
        class="fixed bottom-0 flex justify-end w-full pb-4 pr-5 rounded-full tranition mb-14"
    >
        <div
            class="transition text-neutral hover:text-primary"
        >
            <button class="w-12 h-12 rounded-full bg-primary" @click="scrollToTop">
            <i class="text-xl text-base-100 fa-solid fa-arrow-up"></i>
            </button>
        </div>
    </div>
<div class="w-full h-auto bg-base-100">
    <footer class="p-8 lg:p-20 footer bg-base-100 text-base-content">
  <div>
    <span class="opacity-80 footer-title text-primary">Emails</span> 
    <a href="mailto:cartorio2oficiovr@gmail.com" class="link link-hover"><i class="pr-2 text-xl text-primary fa-solid fa-envelope"></i>GERAL - cartorio2oficiovr@gmail.com</a> 
    <a href="mailto:cartorio2oficiovr@yahoo.com.br" class="link link-hover"><i class="pr-2 text-xl text-primary fa-solid fa-envelope"></i>GERAL 2 - cartorio2oficiovr@yahoo.com.br</a> 
    <a href="mailto:firma.2of@gmail.com" class="link link-hover"><i class="pr-2 text-xl text-primary fa-solid fa-envelope"></i>FIRMA - firma.2of@gmail.com
</a> 
    <a href="mailto:rgi.2of@gmail.com" class="link link-hover"><i class="pr-2 text-xl text-primary fa-solid fa-envelope"></i>RGI - rgi.2of@gmail.com</a>

    <a href="mailto:cert.2of@gmail.com" class="link link-hover"><i class="pr-2 text-xl text-primary fa-solid fa-envelope"></i>CERTIDÕES - cert.2of@gmail.com
</a>

    <a href="mailto:esc.2of@gmail.com" class="link link-hover"><i class="pr-2 text-xl text-primary fa-solid fa-envelope"></i>ESCRITURA - esc.2of@gmail.com</a>
  </div> 
   <div>
    <span id="linksuteis" class="opacity-80 footer-title text-primary">Links Úteis</span> 
    <label for="my-modal-1" class="link link-hover">Transparência:
</label>
    <label for="my-modal-2" class="link link-hover">Serviços TJ - RJ:
</label>
    <label for="my-modal-3" class="link link-hover">Tabela de Emolumentos:
</label>
    <label for="my-modal-4" class="link link-hover">E-Cartório:
</label>
<label for="my-modal-5" class="link link-hover">Prefeitura Municipal de Volta Redonda:
</label>
  </div> 
  <div>
    <span class="opacity-80 footer-title text-primary">Telefones</span> 
    <a href="tel:2433471082" class="link link-hover"><i class="pr-2 text-lg text-primary fa-solid fa-phone"></i>(24)3347-1082</a> 
    <a href="tel:2433474773" class="link link-hover"><i class="pr-2 text-lg text-primary fa-solid fa-phone"></i>(24)3347-4773</a> 
    <a href="https://api.whatsapp.com/send?phone=5524992184719" class="link link-hover"><i class="pr-2 text-xl text-primary fa-brands fa-whatsapp"></i>(24)99218-4719 </a>
  </div>
  <div class="max-w-[200px]">
    <span class="opacity-80 footer-title text-primary">Endereço</span> 
    <label for="my-modal-6" class="link link-hover"><i class="pr-2 text-xl text-primary fa-solid fa-location-dot"></i>R. Primeiro de Maio, 95 - Aterrado Volta Redonda - RJ, 27213-290
</label>
  </div>
  <div class="max-w-[250px]">
    <span class="opacity-80 footer-title text-primary">Horário de Funcionamento</span> 
    <label for="my-modal-6" class="link link-hover"><i class="pr-2 text-xl text-primary fa-solid fa-clock"></i>Seg a Sex, 08:30–17:30
</label>
  </div>
</footer> 
<footer class="grid grid-cols-1 h-auto p-8 border-t bg-primary text-base-100 border-base-200 text-center">
   <p>@ Copyright 2022 Todos os direitos reservados.</p>
</footer>
</div>
</template>

<script>
 import { defineComponent } from "vue";
 
    export default defineComponent({
        mounted() {
            window.addEventListener("scroll", this.handleScroll);
        },
 
        beforeUnmount() {
            window.removeEventListener("scroll", this.handleScroll);
        },
 
        methods: {
            handleScroll() {
                const scrollBtn = this.$refs.scrollTopButton;
 
                if (window.scrollY > 0) {
                    scrollBtn.classList.remove("invisible");
                } else {
                    scrollBtn.classList.add("invisible");
                }
            },
            scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
},
        },
    });
</script>