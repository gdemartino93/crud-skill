<script setup>
import { RouterLink, RouterView } from 'vue-router';
import { onMounted } from 'vue';

onMounted(()=>{
  // FORM PER LA CHAT A COMPARSA
  const TASTOCHAT = document.getElementById('chatBtn');
  const CLOSECHAT = document.getElementById('closeChat');
  const CHAT = document.getElementById('chat');
  const BODYCHAT = document.querySelector('.body-chat');

  function closeChat(){
    if (CHAT.classList.contains('d-block')){
      CHAT.className = 'd-none'
      document.title = "Portfolio"
      CREATEAUDIO.play();
    }else{
      CHAT.className = 'd-block'
      document.title = "Invia messaggio"
      // CREATEAUDIO.load();
      CREATEAUDIO.play();
    };
  }
  CHAT.className= 'd-none';
  TASTOCHAT.addEventListener('click', closeChat);
  CLOSECHAT.addEventListener('click',closeChat);

  const INPUTBODYCHAT = BODYCHAT.querySelectorAll('input');
  for (let i = 0; i < INPUTBODYCHAT.length; i++) {
     INPUTBODYCHAT[i].style.border = ' 5px solid #198754';
  }
    // FORM PER LA CHAT A COMPARSA FINE

    // crea tag audio ed esegui audio quando apri la chat
    const CREATEAUDIO = document.createElement('audio');
    CREATEAUDIO.setAttribute('id', 'audio');
    CREATEAUDIO.setAttribute('src','https://www.zapsplat.com/wp-content/uploads/2015/sound-effects-84577/zapsplat_multimedia_button_click_bright_003_92100.mp3')
})
</script>

<template>
  <header class="d-flex align-items-center justify-content-center my-5 ">
      <nav class="d-flex justify-content-center align-items-center flex-column flex-md-row flex-lg-row gap-lg-5 gap-md-4 gap-2">
        <RouterLink to="/" class="bg-black bg-gradient fw-bold text-white p-3 rounded-pill" >
          <span id="home">Home</span>
        </RouterLink>
        <RouterLink to="/skills" class="bg-black bg-gradient fw-bold text-white p-3 rounded-pill">
          <span id="home-btn">Skills</span>
        </RouterLink>
        <RouterLink :to="{ name : 'SkillCreate' }" class="bg-black bg-gradient fw-bold text-white p-3 rounded-pill">
          <span>Add new Skill</span>
        </RouterLink>
        <RouterLink to="" class="bg-black bg-gradient fw-bold text-white p-3 rounded-pill">
          <span id="chatBtn">Contact me</span>
        </RouterLink>
        
      </nav>
  </header>
  <!-- modulo invia messaggio -->
  <section id="chat" class="">
    <div class="header-chat">
      <span id="closeChat">X</span>
    </div>
    <div >
        <form action="" class="body-chat p-2 d-flex flex-column">
          <label for="email">Inserisci la tua email:</label>
          <input type="text">
          <label for="object">Inserisci l'oggetto del messaggio:</label>
          <input type="text">
          <label for="text">Scrivi il messaggio:</label>
          <textarea type="text" id="areaTesto" cols="40"  rows="5" class="p-1"></textarea>
          <div class="body-cmd d-flex justify-content-end">
            <button class="btn btn-success" id="sendMsg" type="submit">Invia</button>
          </div>
      </form>
      
    </div>

  </section>
  <RouterView />
</template>

<style lang="scss" scoped>
header{
  height: 20vh;
}
#chat{
  width: 400px;
  padding: 10px;
  background-color: grey;
  position: absolute;
  bottom: 0;
  right: 50px;
  border: 5px solid black;
  z-index: 1;
  border-radius: 10px;
}
#areaTesto{
  height: 200px;
  border: 3px solid #198754;
}
</style>

