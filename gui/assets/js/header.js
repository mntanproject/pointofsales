var generateHeader = function () {
    var header = document.createElement('header');
    //header.class = 'footer mt-auto py-3';
    header.innerHTML = '<nav class="navbar navbar-dark bg-primary sticky-top">  <div class="container-fluid"> <a class=" navbar-brand" href="supplier_home.html">               <img src="../assets/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">Point of sales</a></div></nav>';
    document.body.appendChild(header);
}

generateHeader();
