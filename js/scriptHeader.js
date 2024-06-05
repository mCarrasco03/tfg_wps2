particlesJS("particles", {
    particles: {
        number: {
            value: 100,
            density: {
                enable: true,
                value_area: 800
            }
        },
        color: {
            value: "#ffffff"
        },
        shape: {
            type: "circle",
            stroke: {
                width: 0,
                color: "#000000"
            }
        },
        opacity: {
            value: 0.8,
            random: true,
            animation: {
                enable: true,
                speed: 1,
                opacity_min: 0,
                sync: false
            }
        },
        size: {
            value: 3,
            random: true
        },
        line_linked: {
            enable: true,
            distance: 150,
            color: "#ffffff",
            opacity: 0.4,
            width: 1
        },
        move: {
            enable: true,
            speed: 2,
            direction: "none",
            random: true,
            straight: false,
            out_mode: "out",
            bounce: false,
        }
    },
    interactivity: {
        detectsOn: "canvas",
        events: {
            onHover: {
                enable: true,
                mode: "push"
            },
            onClick: {
                enable: true,
                mode: "push"
            },
            resize: true
        },
        modes: {
            repulse: {
                distance: 100,
                duration: 0.4
            },
            push: {
                particles_nb: 4
            }
        }
    },
    retina_detect: true
});



const submenuConfig = document.getElementById('submenu_config');
const iconoConfig = document.getElementById('icono_config');


iconoConfig.addEventListener('click', function(){
if (submenuConfig.style.display === "none" | submenuConfig.style.display === ""){
    submenuConfig.style.display ="block"
}else{
    submenuConfig.style.display= "none";
}
event.stopPropagation(); });

document.body.addEventListener('click', function(){
    if(submenuConfig.style.display === "block"){
        submenuConfig.style.display = "none";
    }
});


//function mostrarModalDesdeFlecha() {
    // Mostrar el modal al hacer clic en la flecha
   // document.getElementById('modal').style.display = 'block';
//}

function irRegistro() {
    // Redirigir al usuario a la página de registro
    location.href = "cuenta.php";
}



