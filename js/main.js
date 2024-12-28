const menuToggler=document.getElementById("menuToggler");const mobileMenu=document.getElementById("mobileMenu");const liDropper=document.querySelectorAll(".dropper");const icon=document.getElementById("iconInput");let counter=0;menuToggler.addEventListener("click",()=>{if(counter==1){menuToggler.innerHTML=`
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="24"
                height="24"
                viewBox="0 0 24 24"
                fill="none"
              >
                <path
                  d="M17 6.1001H3"
                  stroke="white"
                  stroke-width="1.25"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M21 12.1001H3"
                  stroke="white"
                  stroke-width="1.25"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M15.1 18H3"
                  stroke="white"
                  stroke-width="1.25"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>`;counter=0}else{menuToggler.innerHTML=`<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
  <path d="M12 19L5 12M5 12L12 5M5 12H19" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>`;counter=1}
mobileMenu.classList.toggle("active")});liDropper.forEach((li)=>{li.addEventListener("click",()=>{let ulElement=li.nextElementSibling;ulElement.classList.toggle("active2");let icon=li.querySelector("i");icon.classList.toggle("iconChange")})})