function SetActivePage() {
    const params = new Proxy(new URLSearchParams(window.location.search), {
        get: (searchParams, prop) => searchParams.get(prop),
      });
      let value = params.page;

      for (let index = 0; index < $(".navbar-item").length; index++) {
        const element = $(".navbar-item")[index];
        if (element.href.includes(value))
        {
            element.classList.add("navbar-item-active");
            console.log("current page: "+value);
        }
      }
}