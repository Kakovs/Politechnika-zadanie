/**
 * @file
 * Contains JS function
 */


const kay = "https://httpbin.org/get"



const task = (kay) => {

  fetch(kay)
  .then(res => res.json())
  .then(properties => {
    document.getElementById("answer").innerHTML = properties["origin"]
  })

}

task(kay)




