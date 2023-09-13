document.addEventListener("DOMContentLoaded", ()=> {
    let video = document.querySelector("#video-background video");

    // Définir le coefficient de vitesse de lecture de la vidéo
    video.playbackRate = 0.6; 
});

//POO avec class pour le survol des elements
class HoverElement {
    constructor(elementSelector, hoverText) {
      this.element = document.querySelector(elementSelector);
      this.originalText = this.element.textContent;
      this.hoverText = hoverText;
  
      this.setupHover();
    }
  
    setupHover() {
      if (this.element) {
        this.element.addEventListener("mouseover", () => {
          this.element.textContent = this.hoverText;
        });
  
        this.element.addEventListener("mouseout", () => {
          this.element.textContent = this.originalText;
        });
      }
    }
  }
  
  // Les instances de HoverElement
  const telHover = new HoverElement(".btn-tel", "coucou");
  const adrHover = new HoverElement(".btn-adr", "110 rue fictive 31400 Toulouse");
  

  