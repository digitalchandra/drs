// -----Attribute-----
// let a = document.getElementsByClassName("first");
// console.log(a);

// let b = first.getAttribute("class");

// console.log(first.hasAttribute("style"));
// first.setAttribute("hiddne","true")

// ----------Insertion ----------

// let b = document.getElementsByTagName('div')[2]
// b.innerHTML = b.innerHTML+'<h1> Hello world</h1>'

// let div = document.createElement('div')
// div.innerHTML=  "<h2> second test </h2>"
// b.prepend(div)
// b.append(div)
// b.after(dev)
// b.replaceWith(div)


// ----------insert Element on HTML ---------- 

first.insertAdjacentHTML('beforebegin','<div> <h3>Beforebegin</h3> </div>')
first.insertAdjacentHTML('afterbegin','<div> <h3>afterbegin</h3> </div>')
first.insertAdjacentHTML('afterend','<div> <h3>afterbegin</h3> </div>')
first.insertAdjacentHTML('beforeend','<div> <h3>beforeend</h3> </div>')

first.remove()
