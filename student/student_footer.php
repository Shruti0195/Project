<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const collapseEl = document.querySelector('.navbar-collapse');
  const breakpoint = 992; // Bootstrap lg breakpoint

  collapseEl.addEventListener('show.bs.collapse', function () {
    if (window.innerWidth < breakpoint) {
      collapseEl.style.height = collapseEl.scrollHeight + 'px';
    }
  });

  collapseEl.addEventListener('shown.bs.collapse', function () {
    if (window.innerWidth < breakpoint) {
      collapseEl.style.height = 'auto';
    }
  });

  collapseEl.addEventListener('hide.bs.collapse', function () {
    if (window.innerWidth < breakpoint) {
      const scrollHeight = collapseEl.scrollHeight;
      collapseEl.style.height = scrollHeight + 'px';
      collapseEl.offsetHeight; // trigger reflow
    }
  });

  collapseEl.addEventListener('hidden.bs.collapse', function () {
    if (window.innerWidth < breakpoint) {
      collapseEl.style.height = '';
    }
  });

  // Optional: reset height on window resize to prevent broken state
  window.addEventListener('resize', function () {
    if (window.innerWidth >= breakpoint) {
      collapseEl.style.height = '';
    }
  });
});
</script>

</body>
</html>
