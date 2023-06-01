<style>
    .polbox {
        margin: 50px 0;
        display: flex;
        align-items: center;
        justify-content: space-evenly;
    }
    
    .pol .text {
        text-align: center;
        font-size: 20px;
    }
    
    @media (max-width: 750px) {
        .img img {
            width: 170px;
        }
    
        .pol .text {
            font-size: 15px;
        }
    }
    
    @media (max-width: 550px) {
        .img img {
            width: 100px;
        }
    
        .pol .text {
            font-size: 10px;
        }
    }
    </style>
    <div class="policy">
        <div class="bigo">
            <div class="hdt">
                <h1>Our Services</h1>
                <div class="line"></div>
            </div>
        </div>
        <div class="polbox">
            <div class="pol">
                <div class="img">
                    <img src="{{url('/')}}/images/insuredTrip.webp" alt="">
                </div>
                <div class="text">
                    Insured Trip
                </div>
            </div>
            <div class="pol">
                <div class="img">
                    <img src="{{url('/')}}/images/zeroCancelCharge.webp" alt="">
                </div>
                <div class="text">
                    Zero Cancellation Charges
                </div>
            </div>
            <div class="pol">
                <div class="img">
                    <img src="{{url('/')}}/images/onTime.webp" alt="">
                </div>
                <div class="text">
                    On Time Guarantee
                </div>
            </div>
        </div>
    </div>