const mBtn=document.querySelector('.c-button--menu');
console.log(mBtn);
const lSide=document.querySelector('.l-sidebar');
console.log(lSide);
const mBtnSide=lSide.querySelector('.c-button--menu');
console.log(mBtnSide);
const bLayer=document.querySelector('.p-black-layer');
console.log(bLayer);
const wrapperMain=document.querySelector('.c-wrapper-main');
console.log(wrapperMain);
const body=document.querySelector('body');


mBtn.addEventListener('click',()=> {
        mBtn.classList.toggle('is-active');
        lSide.classList.toggle('is-active');
        mBtnSide.classList.toggle('is-active');
        bLayer.classList.toggle('is-active');
        body.classList.toggle('is-active');
    });

//リサイズ
    document.addEventListener('DOMContentLoaded', function(){
        //条件分岐の判断に利用するメディアクエリを指定
        const mq=window.matchMedia("(min-width:1025px)");
        //メディアクエリをチェックする関数を定義して実行
        function mqCheck(mq){
            //if PCサイズ（１０２５px以上の場合）
            if(mq.matches){
                mBtn.classList.remove('is-active');
                lSide.classList.remove('is-active');
                mBtnSide.classList.remove('is-active');
                bLayer.classList.remove('is-active');
                body.classList.remove('is-active');
            }else{
                //else tabサイズ以下（１０２４px以下の場合）
            }  
        }
        mqCheck(mq);
        // MediaQueryListが持つ情報が変更された場合に、定義した関数を実行
        mq.addEventListener('change', mqCheck, false);
}, false);
  