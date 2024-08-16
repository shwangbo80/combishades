  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
      $('#myTab a[data-bs-toggle="tab"]').on('show.bs.tab', function(e) {
          let target = $(e.target).data('bs-target')
          $(target)
              .addClass('active show')
              .siblings('.tab-pane.active')
              .removeClass('active show')
      })
  </script>

  <script>
      function renderFabridBorder() {
          let fabricThumbnails = document.querySelectorAll(".fabric-thumb");
          fabricThumbnails[0].style.border = "3px solid black";
          let fabric = [];
          let unSelectedFabric = [];

          for (let i = 1; i < fabricThumbnails.length + 1; i++) {
              fabric[i] = document.querySelector(`#fabric-${i}`);
              fabric[i].addEventListener("click", (e) => {
                  unSelectedFabric = fabric.filter(item => {
                      return item != fabric[i]
                  })
                  fabric[i].style.border = "3px solid black";
                  for (let i = 0; i < unSelectedFabric.length; i++) {
                      unSelectedFabric[i].style.border = "none";
                  }
              })

          }

      }

      renderFabridBorder()
  </script>

<script src="../../css/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js">
</script>