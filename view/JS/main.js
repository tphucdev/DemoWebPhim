    // const show_search = document.querySelector('js-header-search-modify');
    // const search_icon = document.querySelector('js-header__name-search');

    // function showsearch(){
    //     show_search.classList.add('open')
    // }

    // search_icon.addEventListener('click',showsearch);

// // // show đăng nhập
//         const login = document.querySelector('.js-login-tk')
//         const modal = document.querySelector('.js-modal-dangnhap')
// // //         const closelogin = document.querySelector('.js-fa-xmark')
//         // const modalelement = document.querySelector('.js-modal-element-dangnhap')
//         const modalcontainer = document.querySelector('.js-modal-container-dangnhap')

//         // Hiển thị modal đăng nhập
        // function showlogin() {
        //     modal.classList.add('open')
        // }

//         // Ẩn modal đăng nhập
//         function closeshow() {
//             modal.classList.remove('open')
//         }

//         //  click mở modal
//         login.addEventListener('click',showlogin)

//         // click đóng modal
       
//         modalelement.addEventListener('click',closeshow)

//         // ngăn sự nổi bọt (khi click vào form đăng nhập ko bị đóng)
//         modalcontainer.addEventListener('click',function(event) {
//             event.stopPropagation()
//         })
// // End show Đăng nhập

// // show đăng ký
//         const logdk = document.querySelector('.js-logout')
//         const modal_dk = document.querySelector('.js-modal-dk')
//         const closedk = document.querySelector('.js-fa-xmark-dk')
//         const modalelement_dk = document.querySelector('.js-modal-element-dk')
//         const modalcontainer_dk = document.querySelector('.js-modal-container-dk')

//     // Hiển thị modal đăng ký
//         function showlogout() {
//             modal_dk.classList.add('open')
//         }   

//         // Ẩn modal đăng nhập
//         function closeout() {
//             modal_dk.classList.remove('open')
//         }

//         // click mở modal
//         logdk.addEventListener('click',showlogout)

//         // click đóng modal
//         closedk.addEventListener('click',closeout)
//         modalelement_dk.addEventListener('click',closeout)

//         // ngăn sự nổi bọt (khi click vào form đăng nhập ko bị đóng)
//         modalcontainer_dk.addEventListener('click',function(event) {
//             event.stopPropagation()
//         })
// // End show Đăng ký

// // Ẩn Đăng ký và Đăng Nhập

//         const namehide = document.querySelector('.js-header__name-sign ')

//         // ẩn thẻ đăng ký và đăng nhập 
//         function hidename() {
//         namehide.classList.add('header__name-sign-hide')
//         namehide.classList.remove('header__name-sign-show')
//         }

//         login.addEventListener('click',hidename)
//         logdk.addEventListener('click',hidename)

//         // hiện lại thẻ đăng nhập và đăng ký
//         function closehide() {
//             namehide.classList.remove('header__name-sign-hide')
//             namehide.classList.add('header__name-sign-show')
//         }

//         closedk.addEventListener('click',closehide)
//         closelogin.addEventListener('click',closehide)
//         modalelement.addEventListener('click',closehide)
//         modalelement_dk.addEventListener('click',closehide)
// // End Ẩn Đăng ký và Đăng Nhập

// // mở form đăng ký 

//         const dangky = document.querySelector('.js-modal-modify-link-item')

//         function showdk() {
//             modal_dk.classList.add('open')
//             modal.classList.remove('open')
//         }

//         dangky.addEventListener('click',showdk)

// // mở form đăng nhập
//         const dangnhap = document.querySelector('.js-modal-modify-link-item-dn')

//         function showdn() {
//             modal.classList.add('open')
//             modal_dk.classList.remove('open')
//         }

//         dangnhap.addEventListener('click',showdn)


// Ẩn Password

        const eye = document.querySelector('.js-fa-eye')
        const eyeslash = document.querySelector('.js-fa-eye-slash')
        function hideye() {
            eye.classList.remove('hide-pass')
            eyeslash.classList.add('hide-pass')
        }

        eyeslash.addEventListener('click',hideye)

        // 
        function showeyelash() {
            eyeslash.classList.remove('hide-pass')
            eye.classList.add('hide-pass')
        }

        eye.addEventListener('click',showeyelash)


// slider changeImage

var index = 1;
changeImage = function() {
    var imgs = ['view/img/qc.jpg','view/img/silder1.jpg','view/img/img-shoes3.jpg'];
    document.getElementById('img').src = imgs[index];
    index++;
    if(index == imgs.length){
        index = 0;
    }
}



const jsbxchevronleft = document.querySelector('.js-bx-chevron-left')
const jsbxchevronright = document.querySelector('.js-bx-chevron-right')
const jssliderimg = document.querySelector('.js-slider-img')


jsbxchevronright.addEventListener('click',changeImage)

jsbxchevronleft.addEventListener('click',function() {
    var imgs = ['view/img/qc.jpg','view/img/qc2.jpg','view/img/img-shoes3.jpg'];
    document.getElementById('img').src = imgs[index];
    index++;
    if(index == imgs.length){
        index = 0;
    }
})

setInterval(changeImage,3500);


// Kiểm tra Email
function RegexEmail(emailInputBox) {
    var emailStr = document.getElementById(emailInputBox).value;
    var emailRegexStr = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    var isvalid = emailRegexStr.test(emailStr);
    if (!isvalid) {
        swal({
            title: "",
            text: "Bạn vui lòng nhập đúng định dạng email...",
            icon: "error",
            close: true,
            button: "Thử lại",
          });
        
        emailInputBox.focus;
    } else {
        swal({
            title: "",
            text: "Chúng tôi vừa gửi cho bạn email hướng dẫn đặt lại mật khẩu vào địa chỉ cho bạn",
            icon: "success",
            close: true,
            button: "Đóng",
          });
        emailInputBox.focus;
        window.location = "#";

    }
}

// kiểm tra đăng nhập
// function validate() {
//     var username = document.getElementById("username").value;
//     var password = document.getElementById("password-field").value;
//     //Đặt 1 Admin ảo để đăng nhập quản trị
//     if (username == "admin" && password == "Phuc#2020") {
//         swal({
//             title: "",
//             text: "Xin chào Võ Trường",
//             icon: "success",
//             close: true,
//             button: false,
//           });
//         // window.location = "doc/index.html";
//         return true;
       
//     }
//     //Nếu không nhập gì mà nhấn đăng nhập thì sẽ báo lỗi
//     if (username == "" && password == "") {
//         swal({
//             title: "",
//             text: "Bạn chưa điền đầy đủ thông tin đăng nhập...",
//             icon: "error",
//             close: true,
//             button: "Thử lại",
//           });
         
//         return false;
       
//     }
//     //Nếu không nhập mật khẩu mà đúng tài khoản 
//     // if (username == "admin" && password == "") {
//     //     swal({
//     //         title: "",
//     //         text: "Bạn chưa nhập mật khẩu...",
//     //         icon: "warning",
//     //         close: true,
//     //         button: "Thử lại",
//     //       });
//     //     return false;
//     // }
//     //Nếu không nhập tài khoản sẽ báo lỗi
//     if (username == null || username == "") {
//         swal({
//             title: "",
//             text: "Tài khoản đang để trống...",
//             icon: "warning",
//             close: true,
//             button: "Thử lại",
//           });
//         return false;
//     }
//     //Nếu không nhập mật khẩu sẽ báo lỗi
//     if (password == null || password == "") {
//         swal({
//             title: "",
//             text: "Mật khẩu đang để trống...",
//             icon: "warning",
//             close: true,
//             button: "Thử lại",
//           });
//         return false;
//     }
//     //Nếu trống toàn bộ thì báo lỗi
//     else {
//         swal({
            // title: "",
            // text: "Sai thông tin đăng nhập hãy kiểm tra lại...",
            // icon: "error",
            // close: true,
            // button: "Thử lại",
//           });
//         return true;
//     };
// }


/// tăng giảm số lượng


//tăng

function handlePlus(x){
    // thay doi so luong truc tiep voi dom hmtl
    var cha = x.parentElement.parentElement;
    var con = cha.children[1];
    var soluongcu = con;
    var soluongmoi = parseInt(soluongcu.innerText) + 1;
    soluongcu.innerText = soluongmoi;
    var $vitri = cha.children[3];

    //Gọi tới hàm cập nhật session

}

//Giảm

function handleMinus(x){
    // thay doi so luong truc tiep voi dom hmtl
    var cha = x.parentElement.parentElement;
    var soluongcu = cha.children[1];
    if(parseInt(soluongcu.innerText)>1){
        var soluongmoi = parseInt(soluongcu.innerText) - 1;
        soluongcu.innerText = soluongmoi;
    }


    //Gọi tới hàm cập nhật session


}