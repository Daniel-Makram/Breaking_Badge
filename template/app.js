
let color= document.querySelector('#color');
let shape= document.querySelector('#shape');
let name= document.querySelector('#name');

let current_shape=document.querySelector('#currentShape');
let current_shape_name=document.querySelector('#currentShapeName');

color.addEventListener('focusout',function(){
   current_shape.style.background=this.value;
   current_shape.style.borderColor=this.value;
})
shape.addEventListener('click',function(){
   current_shape.classList='';
   if(this.value){
      current_shape.classList.add(this.value);
   }
})
name.addEventListener('focusout',function(){
   current_shape_name.innerHTML=this.value;
})

