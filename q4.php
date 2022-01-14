<?php include('header.php') ?>
<h1>Hello, world</h1>
<p id="p1">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros</p>

<p id="p2">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Etiam porta sem malesuada magna mollis euismod. Nulla vitae elit libero, a pharetra augue. Donec sed odio dui. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

<p id="p3">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia
    <a href=https://www.bigcabal.com> odio sem nec elit. Sed posuere </a> consectetur est at 
    <abbr name="lobortis">lbrt</abbr>. Maecenas faucibus mollis interdum. Aenean lacinia 
    <img src=test.jpeg with=300 height=auto> bibendum nulla sed consectetur. Praesent 
    <code><b>commodo cursus magna, vel scelerisque nisl consectetur et.</b></code>
</p>

<div id="div1">

</div>
<button id="addp">Hit me</button>

<script>
    const btnAdd = document.querySelector('#addp');
    btnAdd.addEventListener('click', addPara);

    const x = document.getElementById('p1').innerHTML;
    const y = document.getElementById('p2').innerHTML;
    const z = document.getElementById('p3').innerHTML;

    const paragraphs = [x, y, z];

    function addPara() {
        paragraphs.forEach(element => {
            const newPara = document.createElement('p');
            document.getElementById('div1').appendChild(newPara).innerHTML = element;
            newPara.setAttribute('id', 'divp')
        });
    }
    const newBtn = document.createElement('button');
    document.body.appendChild(newBtn).innerHTML = "Remove";
    newBtn.setAttribute('onclick', 'removePara()');

    // document.body.appendChild(newBtn).setAttribute('onclick', 'removePara');

    function removePara() {
        paragraphs.forEach(element => {
            document.getElementById('divp').remove();
        });
    }
</script>

<?php include('footer.php') ?>