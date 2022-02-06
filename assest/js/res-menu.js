function res_menu() {
    document.getElementById("dashboard").classList.toggle("display-none");
    document.getElementById("add-student").classList.toggle("display-none");
    document.getElementById("add-worker").classList.toggle("display-none");
    document.getElementById("add-book").classList.toggle("display-none");
    document.getElementById("cat").classList.toggle("display-none");
    document.getElementById("s-student").classList.toggle("display-none");
    document.getElementById("s-worker").classList.toggle("display-none");
    document.getElementById("s-book").classList.toggle("display-none");

    document.getElementById("d-i").classList.toggle("res-icon");
    document.getElementById("s-i").classList.toggle("res-icon");
    document.getElementById("w-i").classList.toggle("res-icon");
    document.getElementById("b-i").classList.toggle("res-icon");
    document.getElementById("cat-i").classList.toggle("res-icon");
    document.getElementById("ss-i").classList.toggle("res-icon");
    document.getElementById("sw-i").classList.toggle("res-icon");
    document.getElementById("sb-i").classList.toggle("res-icon");
  }
