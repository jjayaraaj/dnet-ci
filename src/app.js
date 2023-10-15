function intiateOwl() {
  var checkWidth = $(window).width();

  var successOwl = $("#success");

  successOwl.owlCarousel({
    items: 1,
    nav: false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 3000,
    dots: false,
    loop: true,
  });

  $(".successNext").click(function () {
    successOwl.trigger("next.owl.carousel");
  });

  $(".successPrev").click(function () {
    successOwl.trigger("prev.owl.carousel");
  });

  $(".owl-client").owlCarousel({
    margin: 50,
    nav: false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 3000,
    dots: false,
    loop: true,
    responsive: {
      0: {
        items: 1,
      },
      1000: {
        items: 6,
      },
    },
  });

  $(".customerNext").click(function () {
    $(".owl-client").trigger("next.owl.carousel");
  });

  $(".customerPrev").click(function () {
    $(".owl-client").trigger("prev.owl.carousel");
  });

  $(".owl-dynamic").owlCarousel({
    margin: 50,
    dots: false,
    responsive: {
      0: {
        items: 1,
      },
      1000: {
        items: 4,
        nav: false,
      },
    },
  });

  $(".dynamicNext").click(function () {
    $(".owl-dynamic").trigger("next.owl.carousel");
  });

  $(".dynamicPrev").click(function () {
    $(".owl-dynamic").trigger("prev.owl.carousel");
  });

  $(".owl-service").owlCarousel({
    margin: 50,
    dots: false,
    nav: false,
    responsive: {
      0: {
        items: 1,
      },
      1000: {
        items: 4,
        nav: false,
      },
    },
  });
  $(".serviceNext").click(function () {
    $(".owl-service, .owl-dynamic").trigger("next.owl.carousel");
  });

  $(".servicePrev").click(function () {
    $(".owl-service, .owl-dynamic").trigger("prev.owl.carousel");
  });

  $(".owl-vertical").owlCarousel({
    margin: 50,
    responsive: {
      0: {
        items: 1,
      },
    },
  });
}

$(document).ready(function () {
  intiateOwl();

  $("#brochureForm").validate({
    rules: {
      broName: "required",
      broEmail: "required",
    },
    messages: {
      broName: "Please specify your name",
      broEmail: "Please enter your email id",
    },
    submitHandler: function (form) {
      form.submit();
    },
  });

  $("#demoFrom").validate({
    rules: {
      demoName: "required",
      demoEmail: "required",
      demoSolution: "required",
    },
    messages: {
      demoName: "Please specify your name",
      demoEmail: "Please enter your email id",
      demoSolution: "Please enter solution",
    },
    submitHandler: function (form) {
      form.submit();
    },
  });

  $("#contactForm").validate({
    rules: {
      contactName: "required",
      contactEmail: "required",
    },
    messages: {
      contactName: "Please specify your name",
      contactEmail: "Please enter your email id",
    },
    submitHandler: function (form) {
      form.submit();
    },
  });

  $("#footerDemo").validate({
    rules: {
      footerName: "required",
      footerEmail: "required",
      footerSolution: "required",
    },
    messages: {
      footerName: "Please specify your name",
      footerEmail: "Please enter your email id",
      footerSolution: "Please enter solution",
    },
    submitHandler: function (form) {
      form.submit();
    },
  });

  $("#commonDownloadForm").validate({
    rules: {
      commonFormName: "required",
      commonFormEmail: {
        required: true,
        email: true,
      },
      commonFormPhone4: {
        required: true,
        number: true,
      },
      solution: "required",
    },
    messages: {
      commonFormName: "Please specify your name",
      commonFormEmail: "Please enter your email id",
      phone4: "Please enter valid phone",
      solution: "Select one",
    },
    // errorElement: "div",
    // errorLabelContainer: ".errorTxt",

    submitHandler: function (form) {
      form.submit();
    },
  });

  //   if ($(window).width() > 765) {
  //     intiateOwl();
  //   } else {
  //     $('.owl-carousel').addClass('off');
  //   }
  // });

  // $(window).resize(function() {
  //   if ($(window).width() > 765) {
  //     intiateOwl();
  //   } else {
  //     stopCarousel();
  //   }
});

function stopCarousel() {
  var owl = $(".owl-carousel");
  owl.trigger("destroy.owl.carousel");
  owl.addClass("off");
}

const phoneInputField = document.querySelector("#footerPhone");

intlTelInput(phoneInputField);

const downloadDiv = document.getElementById("downloadDiv");

const countryData = window.intlTelInputGlobals.getCountryData();

// populate the country dropdown
for (let i = 0; i < countryData.length; i++) {
  const country = countryData[i];
  const optionNode = document.createElement("option");
  optionNode.value = country.iso2;
  const textNode = document.createTextNode(country.name);
  optionNode.appendChild(textNode);
}
document.addEventListener("alpine:init", () => {
  Alpine.data("app", () => ({
    downloadDivOpen: false,
    demoDivOpen: false,
    commonDownloadDivOpen: false,
    commonFormData: {
      name: {
        value: "",
        error: false,
        errorMsg: "",
      },
      company: {
        value: "",
        error: false,
        errorMsg: "",
      },
      designation: "",
      email: "",
      phone: "",
      solution: "",
    },
    status: false,
    loading: false,
    isError: false,

    //commonform submit

    commonFormsubmitData() {
      const commonForm = document.querySelector("#commonDownloadForm");
      // if (!this.commonFormData.name.value.length ||
      //   !this.commonFormData.company.length) {
      //   this.isError = true;
      //   alert("Please fill out all required field and try again!")
      //   return;
      // }
      if (!this.commonFormData.name.value.length) {
        this.commonFormData.name.error = true;
        return;
      }

      if (!this.commonFormData.company.value.length) {
        this.commonFormData.company.error = true;
        return;
      }
      commonForm.submit();
    },

    openCommonDownloadForm() {
      const commonInput = document.querySelector("#commonDownloadFlag");
      const phoneDown4 = document.querySelector("#phone4");
      const flagInput = document.querySelector("#commonDownloadForm");

      const iti = intlTelInput(phoneDown4);

      $(phoneDown4).on("countrychange", function (e) {
        commonInput.value = iti.getSelectedCountryData().name;
      });

      // intlTelInput(phoneDown4);
      this.commonDownloadDivOpen = true;
    },

    openFormDownload(solution) {
      const phoneDown2 = document.querySelector("#phone2");
      const docInput = document.querySelector("#broDoc");
      docInput.setAttribute("value", solution);

      intlTelInput(phoneDown2);
      console.log(solution);
      this.downloadDivOpen = true;
    },
    openFormDemoDiv(solution) {
      const phoneDown = document.querySelector("#demoPhone");
      intlTelInput(phoneDown);
      this.demoDivOpen = true;
      console.log(solution);
    },
  }));
});
