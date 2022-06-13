const loadBrand = async ()=>{ //Async Await bc debe esperar la respuesta 
    //1) buscar marcas desde la api
    let res =await axios.get('api/brands/get'); //get brands from php
    let brands = res.data; //save brands on var 'brands'
    
    //2) cargar marcas en el select
    
    let brandSelect = document.querySelector('#brand-select'); //get select
    brands.forEach(b=>{ // for each brand 
        let option=document.createElement('option'); //create a option
        option.innerText = b; //save the brand (b) in options
        brandSelect.appendChild(option); //add in the element
    });

    //3)
};

loadBrand();