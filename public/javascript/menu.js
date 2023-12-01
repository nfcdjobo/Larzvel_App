// const toggle = () => {
//     let navigation = document.querySelector('.navigation');
//     let main = document.querySelector('.main');
//     navigation.classList.toggle('active');
//     main.classList.toggle('active');
// }

navigation = document.querySelector('#toggle').addEventListener('click', ()=>{
    let navigation = document.querySelector('.navigation');
    let main = document.querySelector('.main');
    navigation.classList.toggle('active');
    main.classList.toggle('active');
})
