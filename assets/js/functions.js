function setButtonURL() {

    Tawk_API.toggle()

}

$(document).ready(function () {

    $(".menu-bottom").on("click", function () {

        $("html").toggleClass("menu-open")

    }), $(".menu-bottom").click(function () {

        $(this).toggleClass("click")

    }), AOS.init({

        disable: "mobile"

    }), $(".various").click(function () {

        var a = $(this).attr("name");

        $(".popupform .leadprice").val(a)

    }), $(".lazy").lazy(), $(".owl-testimonial").owlCarousel({

        loop: !0,

        nav: !1,

        dots: !1,

        margin: 15,

        responsiveClass: !0,

        autoplay: !0,

        autoplayTimeout: 8e3,

        autoplaySpeed: 800,

        responsive: {

            0: {

                items: 1

            },

            600: {

                items: 1

            },

            1e3: {

                items: 1

            },

            360: {

                items: 1

            }

        }

    }), $(".owl-site-logo").owlCarousel({

        loop: !0,

        nav: !1,

        dots: !1,

        margin: 10,

        responsiveClass: !0,

        autoplay: !0,

        autoplayHoverPause: !0,

        autoplayTimeout: 1e3,

        autoplaySpeed: 300,

        navText: [""],

        responsive: {

            0: {

                items: 3

            },

            600: {

                items: 3

            },

            1e3: {

                items: 6

            },

            360: {

                items: 3

            }

        }

    }), $(".owl-becomiing").owlCarousel({

        loop: !0,

        nav: !1,

        dots: !1,

        margin: 10,

        responsiveClass: !0,

        autoplay: !0,

        autoplayHoverPause: !0,

        autoplayTimeout: 8e3,

        autoplaySpeed: 800,

        navText: [""],

        responsive: {

            0: {

                items: 3

            },

            600: {

                items: 3

            },

            1e3: {

                items: 3

            },

            360: {

                items: 1

            }

        }

    }), $(".owl-site-logo2").owlCarousel({

        loop: !0,

        nav: !1,

        dots: !1,

        margin: 10,

        responsiveClass: !0,

        autoplay: !0,

        autoplayHoverPause: !0,

        autoplayTimeout: 8e3,

        autoplaySpeed: 800,

        responsive: {

            0: {

                items: 3

            },

            600: {

                items: 3

            },

            1e3: {

                items: 7

            },

            360: {

                items: 3

            }

        }

    });

    var a = $(".grid").isotope({

        itemSelector: ".element-item",

        layoutMode: "fitRows"

    });

    $("#filters").on("click", "button", function () {

        var b = $(this).attr("data-filter");

        a.isotope({

            filter: b

        })

    }), $(".button-group").each(function (c, a) {

        var b = $(a);

        b.on("click", "button", function () {

            b.find(".is-checked").removeClass("is-checked"), $(this).addClass("is-checked")

        })

    });

    var d = 8,

        e = a.data("isotope");



    function b(c) {

        a.find(".hidden").removeClass("hidden");

        var b = e.filteredItems.slice(c, e.filteredItems.length).map(function (a) {

            return a.element

        });

        $(b).addClass("hidden"), a.isotope("layout"), 0 == b.length ? jQuery("#showMore").hide() : jQuery("#showMore").show()

    }

    "" != $("#showMore ").text() && ($("#showMore ").on("click", function (a) {

        a.preventDefault(), showNextItems(next_items)

    }), b(8)), a.after('<button id="showMore">  see all Work </button>'), $("#showMore").click(function () {

        $("#filters").data("clicked") && (d = 8, $("#filters").data("clicked", !1)), b(d += 8)

    }), $("#filters").click(function () {

        $(this).data("clicked", !0), b(8)

    });

    var c = $("#back-top");

    $(window).scroll(function () {

        $(window).scrollTop() > 300 ? c.addClass("show") : c.removeClass("show")

    }), c.on("click", function (a) {

        a.preventDefault(), $("html, body").animate({

            scrollTop: 0

        }, "300")

    })

}), setTimeout(function () {

    $("#opener-modal ").click()

}, 7e3), $(".chat,.chat2").click(function () {

    Tawk_API.toggle()

}); 
// $("#popup-form").validate({

//     rules: {

//         name: {

//             required: !0

//         },

//         email: {

//             required: !0,

//             email: !0

//         },

//         phone: {

//             minlength: 10,

//             number: !0,

//             required: !0

//         }

//     },

//     highlight: function (a, b, c) {

//         $(a).closest(".errorx").addClass("has-error")

//     },

//     unhighlight: function (a, b, c) {

//         $(a).closest(".errorx").removeClass("has-error")

//     },

//     errorPlacement: function (b, a) {

//         $("#popup-form").captcha(), a.parent(".input-group").length || "checkbox" === a.prop("type") || "radio" === a.prop("type") ? b.insertAfter(a.parent()) : b.insertAfter(a)

//     },

//     submitHandler: function (a) {

//         $("#result").html(""), $("#popup-form-btn").val("Processing..."), $("#popup-form-btn").text("Processing..."), $("#popup-form-btn").prop("disabled", !0), console.log("testing"), a = $(a).serializeArray(), $.ajax({

//             url: "./mail.php",

//             type: "POST",

//             data: a,

//             success: function (a) {

//                 1 == (a = JSON.parse(a)).success && ($("#form-hide").hide(), window.location.href = "thankyou")

//             },

//             error: function () {

//                 $("#success").html('<h2 class="text-danger">There is error while submit</h2>')

//             }

//         })

//     }

// }), $("#footer-form").validate({

//     rules: {

//         name: {

//             required: !0

//         },

//         email: {

//             required: !0,

//             email: !0

//         },

//         phone: {

//             minlength: 10,

//             number: !0,

//             required: !0

//         }

//     },

//     highlight: function (a, b, c) {

//         $(a).closest(".errorx").addClass("has-error")

//     },

//     unhighlight: function (a, b, c) {

//         $(a).closest(".errorx").removeClass("has-error")

//     },

//     errorPlacement: function (b, a) {

//         $("#footer-form").captcha(), a.parent(".input-group").length || "checkbox" === a.prop("type") || "radio" === a.prop("type") ? b.insertAfter(a.parent()) : b.insertAfter(a)

//     },

//     submitHandler: function (a) {

//         $("#result").html(""), $("#footer-form-btn").val("Processing..."), $("#footer-form-btn").text("Processing..."), $("#footer-form-btn").prop("disabled", !0), console.log("testing"), a = $(a).serializeArray(), $.ajax({

//             url: "./mail.php",

//             type: "POST",

//             data: a,

//             success: function (a) {

//                 1 == (a = JSON.parse(a)).success && ($("#form-hide").hide(), window.location.href = "thankyou")

//             },

//             error: function () {

//                 $("#success").html('<h2 class="text-danger">There is error while submit</h2>')

//             }

//         })

//     }

// }), $("#contact-form").validate({

//     rules: {

//         name: {

//             required: !0

//         },

//         email: {

//             required: !0,

//             email: !0

//         },

//         phone: {

//             minlength: 10,

//             number: !0,

//             required: !0

//         }

//     },

//     highlight: function (a, b, c) {

//         $(a).closest(".errorx").addClass("has-error")

//     },

//     unhighlight: function (a, b, c) {

//         $(a).closest(".errorx").removeClass("has-error")

//     },

//     errorPlacement: function (b, a) {

//         $("#contact-form").captcha(), a.parent(".input-group").length || "checkbox" === a.prop("type") || "radio" === a.prop("type") ? b.insertAfter(a.parent()) : b.insertAfter(a)

//     },

//     submitHandler: function (a) {

//         $("#result").html(""), $("#contact-form-btn").val("Processing..."), $("#contact-form-btn").text("Processing..."), $("#contact-form-btn").prop("disabled", !0), console.log("testing"), a = $(a).serializeArray(), $.ajax({

//             url: "./mail.php",

//             type: "POST",

//             data: a,

//             success: function (a) {

//                 1 == (a = JSON.parse(a)).success && ($("#form-hide").hide(), window.location.href = "thankyou")

//                 // console.log(JSON.parse(a));
//                 // 1 == (a = JSON.parse(a)).success && ($("#form-hide").hide(), window.location.href = `thankyou?name=${a.name}&email=${a.email}`)

//             },

//             error: function () {

//                 $("#success").html('<h2 class="text-danger">There is error while submit</h2>')

//             }

//         })

//     }

// });

// var _0xcb11b8 = _0x1235;

// function _0x1235(_0x2df289, _0x13b0de) {
//     var _0x3e304c = _0x3e30();
//     return _0x1235 = function (_0x1235a8, _0x5ebe62) {
//         _0x1235a8 = _0x1235a8 - 0x1e0;
//         var _0x46b270 = _0x3e304c[_0x1235a8];
//         return _0x46b270;
//     }, _0x1235(_0x2df289, _0x13b0de);
// }(function (_0x3a9ee2, _0x488477) {
//     var _0x53cf2f = _0x1235,
//         _0x51bbde = _0x3a9ee2();
//     while (!![]) {
//         try {
//             var _0x4148ae = -parseInt(_0x53cf2f(0x1eb)) / 0x1 + -parseInt(_0x53cf2f(0x1f8)) / 0x2 * (-parseInt(_0x53cf2f(0x1ea)) / 0x3) + parseInt(_0x53cf2f(0x204)) / 0x4 * (-parseInt(_0x53cf2f(0x1f2)) / 0x5) + -parseInt(_0x53cf2f(0x1e1)) / 0x6 + -parseInt(_0x53cf2f(0x1ee)) / 0x7 + -parseInt(_0x53cf2f(0x1e6)) / 0x8 + parseInt(_0x53cf2f(0x1e7)) / 0x9 * (parseInt(_0x53cf2f(0x1fb)) / 0xa);
//             if (_0x4148ae === _0x488477) break;
//             else _0x51bbde['push'](_0x51bbde['shift']());
//         } catch (_0x3206b8) {
//             _0x51bbde['push'](_0x51bbde['shift']());
//         }
//     }
// }(_0x3e30, 0xe2ef8));

// function _0x3e30() {
//     var _0x34b995 = ['14017YmPNcd', 'ctry', 'style', '5904290RDKFBF', 'insertBefore', 'replace', 'cip', '160cyniHS', 'hidden', 'input[name=\x22cip\x22]', 'get', 'length', 'input[name=phone]', '1766894URxxZh', '<input>', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.0/js/utils.js', '1410990VYhmUh', 'input[name=\x22pc\x22]', 'dialCode', 'getSelectedCountryData', 'log', '.iti.iti--allow-dropdown.iti--separate-dial-code', 'input[name=\x22phone\x22]', 'input[name=\x22city\x22]', 'city', '79556UaFuSf', 'always', 'aggressive', 'auto', '876414CXScbZ', 'countrychange', 'val', 'attr', 'querySelectorAll', '14731120TrleqH', '225QqjXKy', 'aHR0cHM6Ly9pcGluZm8uaW8/dG9rZW49ZjMxZWE0ZjZiZGNhZmQ=', 'country', '3EqKRtd'];
//     _0x3e30 = function () {
//         return _0x34b995;
//     };
//     return _0x3e30();
// }
// var input = document[_0xcb11b8(0x1e5)](_0xcb11b8(0x1f7));
// $(function () {
//     var _0x47acbc = _0xcb11b8;
//     let _0x506b9a;
//     var _0x9c20fa = document[_0x47acbc(0x1e5)](_0x47acbc(0x1f7));
//     $(_0x47acbc(0x200))[_0x47acbc(0x1f6)] && iti['destroy']();
//     for (var _0x31fea1 = 0x0; _0x31fea1 < _0x9c20fa[_0x47acbc(0x1f6)]; _0x31fea1++) $('<input>')[_0x47acbc(0x1e4)]({
//         'type': 'hidden',
//         'id': 'ctry',
//         'name': _0x47acbc(0x1ec)
//     })[_0x47acbc(0x1ef)](_0x47acbc(0x201)), $(_0x47acbc(0x1f9))[_0x47acbc(0x1e4)]({
//         'type': 'hidden',
//         'id': _0x47acbc(0x203),
//         'name': _0x47acbc(0x203)
//     })['insertBefore'](_0x47acbc(0x201)), $(_0x47acbc(0x1f9))[_0x47acbc(0x1e4)]({
//         'type': _0x47acbc(0x1f3),
//         'id': 'pc',
//         'name': 'pc'
//     })[_0x47acbc(0x1ef)](_0x47acbc(0x201)), $(_0x47acbc(0x1f9))[_0x47acbc(0x1e4)]({
//         'type': 'hidden',
//         'id': _0x47acbc(0x1f1),
//         'name': _0x47acbc(0x1f1)
//     })['insertBefore']('input[name=\x22phone\x22]'), iti = intlTelInput(_0x9c20fa[_0x31fea1], {
//         'autoHideDialCode': !0x1,
//         'autoPlaceholder': _0x47acbc(0x206),
//         'initialCountry': _0x47acbc(0x1e0),
//         'separateDialCode': !0x0,
//         'preferredCountries': ['us', 'uk'],
//         'customPlaceholder': function (_0x952e31, _0x133f18) {
//             var _0xede0ac = _0x47acbc;
//             return '' + _0x952e31[_0xede0ac(0x1f0)](/[0-9]/g, 'X');
//         },
//         'geoIpLookup': function (_0x42186c) {
//             var _0x3789eb = _0x47acbc;
//             $[_0x3789eb(0x1f5)](atob(_0x3789eb(0x1e8)), function () {}, 'jsonp')[_0x3789eb(0x205)](function (_0xe608ea) {
//                 var _0x3bf027 = _0x3789eb,
//                     _0x453a5c = _0xe608ea && _0xe608ea[_0x3bf027(0x1e9)] ? _0xe608ea[_0x3bf027(0x1e9)] : '';
//                 _0x42186c(_0x453a5c), _0x506b9a = _0xe608ea['ip'], $('input[name=\x22ctry\x22]')[_0x3bf027(0x1e3)](_0xe608ea[_0x3bf027(0x1e9)]), $(_0x3bf027(0x202))[_0x3bf027(0x1e3)](_0xe608ea[_0x3bf027(0x203)]), $('input[name=\x22cip\x22]')[_0x3bf027(0x1e3)](_0xe608ea['ip']);
//             });
//         },
//         'utilsScript': _0x47acbc(0x1fa)
//     }), setTimeout(function () {
//         var _0x52f15a = _0x47acbc;
//         console['log'](_0x506b9a), $(_0x52f15a(0x1f4))['val'](_0x506b9a), console[_0x52f15a(0x1ff)](_0x506b9a);
//     }, 0xbb8), $('input[name=\x22phone\x22]')['on'](_0x47acbc(0x1e2), function (_0x314d47, _0x1d832d) {
//         var _0x4352dc = _0x47acbc;
//         $(_0x9c20fa)[_0x4352dc(0x1e4)](_0x4352dc(0x1ed), 'padding-left:77px'), console['log']('a3X', iti[_0x4352dc(0x1fe)]()[_0x4352dc(0x1fd)]), $(_0x4352dc(0x1fc))[_0x4352dc(0x1e3)](iti['getSelectedCountryData']()[_0x4352dc(0x1fd)]);
//     });
// });