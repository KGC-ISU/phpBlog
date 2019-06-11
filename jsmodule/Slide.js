import $ from 'jquery';

export default class Slide {

    constructor() {

        $(".imgs:first-child").addClass("active");

        this.nowSlide = 0;
        this.sList = $(".slide > .imgs");
        this.slideBtn = $(".slide-btn > span");
        
        this.slideBtn.each((idx, target) => {
            $(target).data("idx", idx);
        });

        this.slideBtn.on("click", (e) => {
            let idx = $(e.target).data("idx");
            console.log(e.target)

            if(idx == 1) {  //다음
                this.slide(this.nowSlide + 1);
            }else { //이전
                this.slide(this.nowSlide - 1);
            }
        });

    }

    slide(idx) {

        if(idx < 0 || idx >= this.sList.length) {
            return;
        }

        console.log(idx);

        this.sList.removeClass("active");
        this.sList.eq(idx).addClass("active");

        this.nowSlide = idx;
        
    }
    

}