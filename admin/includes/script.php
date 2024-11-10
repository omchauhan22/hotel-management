<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    function alert(type,msg){
        let  msg_type = (type == 'success') ? 'alert-success' : 'alert-danger';
        let element = document.createElement('div');
        element.innerHTML = `
        <div class="alert $(msg_type) alert-dismissible custom-alert fade show custom-alert" role="alert">
    <strong class="me-3">$(msg)</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  `;
  document.body.append(element);
    }
</script>