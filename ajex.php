<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <form id="myForm" enctype="multipart/form-data" >
  <div class="mb-3 col-6">
    <label for="name" class="form-label">name</label>
    <input type="name"class="form-control" id="name" name="name">
    
   
  </div>
  <div class="mb-3 col-6">
    <label for="img" class="form-label">uploding img</label>
    <input type="file"class="form-control" id="img" name="img">

  </div>
  <div class="mb-3 col-6">
    <label for="phone" class="form-label">phone</label>
    <input type="number"class="form-control" id="phone" name="phone">

  </div>
  <div class="mb-3">
    <label for="email" class="form-label">email</label>
    <input type="email"class="form-control" id="email" name="email">
    
        
    

  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
  <button class="btn btn-success my-3 loaddata">Load data</button>
</form>
    </div> 
  
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  <script>
    const myForm = document.querySelector('#myForm');
    console.log('hello');
    myForm.addEventListener('submit', async (e)=>{
        let formData = new FormData(myForm);
        console.log(formData);
        e.preventDefault();
        let response= await fetch('./sumite.php',{
            method:'post',
            body:formData,
        })
        //   console.log(data.text());
        // })
       if(!response.ok){
        console.log('somithing went wrong');
       }
       let resText = await response.text();
       console.log(resText);
        console.log(response.statusText);

        // if(!response.ok){
        //   console.log('somithing went wrong');

        // }
       
        console.log('form sumbmitted');

    })
    // loaddata.addEventListener('click',()=>{
    //   let response
    // })
   </script>
</html>






