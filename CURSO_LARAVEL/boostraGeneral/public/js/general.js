const d = document;
const w = window;
const ls = localStorage;
d.addEventListener("DOMContentLoaded",e=>{
    
    scrollTopButton(".scroll-top-btn");
}); 


//============Programacion del tema-oscuro=
const darktheme = (btn,classDark) =>{
    const $themeBtn = d.querySelector(btn);
    const $selectors = d.querySelectorAll("[data-dark]");
    let moon = "🌙";
    let son = "☀️"

    const LightMode = ()=>{
        $selectors.forEach(el =>el.classList.remove(classDark));
        $themeBtn.textContent = moon;
        ls.setItem("theme","light")
    }

    const darkMode = () =>{
        $selectors.forEach(el => el.classList.add(classDark));
        $themeBtn.textContent = son;
        ls.setItem("theme","dark")
    }

    d.addEventListener("click",e=>{
        if(e.target.matches(btn)){
            //console.log($themeBtn.textContent);
            if($themeBtn.textContent === moon){
                darkMode();
            }else{
                LightMode();
            }
        }
    })
    d.addEventListener("DOMContentLoaded",e=>{
        if(ls.getItem("theme") === null){
            ls.setItem("theme","light");
        }
        if(ls.getItem("theme") === "light"){
            LightMode();
        }
        if(ls.getItem("theme") ==="dark"){
            darkMode();
        } })
};
darktheme(".dark-themen-btn","dark-mode")

//=============Programacion del Scroll
const scrollTopButton = (btn) =>{
    const $scrollBtn = d.querySelector(btn);

    w.addEventListener("scroll", e=>{
        let scrollTop = w.pageYOffset || d.documentElement.scrollTop;
        if(scrollTop > 200){
            $scrollBtn.classList.remove("hidden")
        }else{
            $scrollBtn.classList.add("hidden")
        }
    });

    d.addEventListener("click", e=>{
        if(e.target.matches(btn)){
            w.scrollTo({
                behavior:"smooth",
                top:0,
                //left:0
            })
        }
    })
}