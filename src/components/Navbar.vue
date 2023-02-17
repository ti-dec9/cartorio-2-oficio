<template>
<div class="fixed top-0 z-50 px-8 shadow-md bg-base-100 text-neutral lg:px-20 navbar max-h-24">
  <div class="flex-1 px-2 lg:flex-none">
    <img class="max-w-[150px]" src="../assets/logo.jpg" alt="Logo cartorio 2 oficio">
  </div> 
  <div class="flex justify-end flex-1 px-2 font-medium">
    <div class="flex items-stretch">
    <ul class="hidden text-xl lg:flex">
        <li><a @click="scroll('ri')" class="font-medium normal-case btn btn-ghost rounded-btn">Registro de Imóveis</a></li>
        <li><a @click="scroll('services')" class="font-medium normal-case btn btn-ghost rounded-btn">Serviços</a></li>
        <li><a  @click="scroll('notas')" class="font-medium normal-case btn btn-ghost rounded-btn">Notas</a></li>
        <li><a  @click="scroll('contato')" class="font-medium normal-case btn btn-ghost rounded-btn">Contato</a></li>
        <li><a @click="scroll('linksuteis')" class="font-medium normal-case btn btn-ghost rounded-btn">Links Úteis</a></li>
        <li><a href="https://api.whatsapp.com/send?phone=5524992184719">ㅤ<i class="text-3xl fa-brands fa-whatsapp text-primary hover:scale-110 transition duration-[400ms]"></i></a></li>
        <li><a href="tel:2433471082">ㅤ<i class="text-3xl fa-solid fa-square-phone text-primary hover:scale-110 transition duration-[400ms]"></i></a></li>
        <li><a href="mailto:cartorio2oficiovr@gmail.com">ㅤ<i class="text-3xl fa-solid fa-square-envelope text-primary hover:scale-110 transition duration-[400ms]"></i></a></li>
    </ul>
    <div>
  </div>
       <div class=" text-neutral">
        <div class="transition duration-300 ease-linear transform btn btn-ghost rounded-btn">
          <i v-click-outside="hideMobileNav"  @click="toggleMobileNav" v-show="mobile" class="text-xl fa-solid" :class="{ 'fa-bars':mobile} "></i>
        </div>
        <transition  enter-active-class="transition duration-700 ease-out"
    enter-from-class="transform -translate-x-64"
    leave-active-class="transition duration-700 ease"
    leave-to-class="transform -translate-x-64">
            <ul v-show="mobileNav" class="fixed z-20 text-neutral flex flex-col w-full max-w-[250px] h-screen p-8 gap-2 bg-white shadow top-0 left-0">
            <div class="">
               <img class="max-w-[150px]" src="../assets/logo.jpg" alt="Logo cartorio 2 oficio">
            </div> 
                 <li><a @click="scroll('ri')" class="font-medium normal-case btn btn-ghost rounded-btn">Registro de Imóveis</a></li>
                  <li><a @click="scroll('services')" class="font-medium normal-case btn btn-ghost rounded-btn">Serviços</a></li>
                 <li><a  @click="scroll('notas')" class="font-medium normal-case btn btn-ghost rounded-btn">Notas</a></li>  
                 <li><a  @click="scroll('contato')" class="font-medium normal-case btn btn-ghost rounded-btn">Contato</a></li>  
                 <li><a @click="scroll('linksuteis')" class="font-medium normal-case btn btn-ghost rounded-btn">Links Úteis</a></li>
              </ul>
        </transition>
        </div>
    </div>
  </div>
</div>
</template>

<script>

import vClickOutside from 'click-outside-vue3'
 
export default{
  name:'navigation',
  directives: {
      clickOutside: vClickOutside.directive
    },
  data(){
    return{
      sticky:null,
      scrolledNav:null,
      mobile:null,
      mobileNav:null,
      windowWidth:null,
      xbutton:null,
    };
  },
  created(){
    window.addEventListener('resize',this.checkScreen);
    this.checkScreen();
  },
 
  mounted(){
    window.addEventListener("scroll",this.updateScroll);
    this.updateScroll();
  },
  methods:{
    toggleMobileNav(){
      this.mobileNav = !this.mobileNav;
    },
     hideMobileNav () {
      this.mobileNav = false
    },
 scroll(id) {  
      document.getElementById(id).scrollIntoView({
        behavior: "smooth"
      });
 }, 
    updateScroll(){
      const scrolledNav = window.scrollY;
      if (scrolledNav > 50){
        this.scrolledNav = true;
      }
      this.scrolledNav = false;
      this.sticky = true;
    },
    checkScreen(){
      this.windowWidth = window.innerWidth;
      if (this.windowWidth <= 1024){
        this.mobile = true;
        return;
      }
      this.mobile = false;
      this.mobileNav = false;
      return;
    }
  }
}
</script>