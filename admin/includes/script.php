<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  function alert(type, msg,position='body') {
    let msg_type = (type === 'success') ? 'alert-success' : 'alert-danger';
    let element = document.createElement('div');
    element.innerHTML = `
        <div class="alert ${msg_type} alert-dismissible fade show" role="alert">
            <strong class="me-3">${msg}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    `;

    if(position=='body'){
      document.body.append(element);
      element.classList.add('custom-alert');
    } else {
      document.getElementById(position).appendChild( element );
    }


    // Optional: Remove the alert automatically after a few seconds
    setTimeout(() => {
      element.remove();
    }, 2000);
  }


  function setActive(){
        let navbar = document.getElementById('dashboard-menu');
        let a_tags = navbar.getElementsByTagName('a');

        for(i=0;i<a_tags.length;i++){
            let file = a_tags[i].href.split('/').pop();
            let file_name = file.split('.')[0];

            if(document.location.href.indexOf(file_name)>=0){
                a_tags[i].classList.add('active');
            }
        } 
    }
    setActive();
</script>