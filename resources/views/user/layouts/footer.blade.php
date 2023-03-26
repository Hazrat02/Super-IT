<footer style="background-color: rgb(18, 14, 9);color: aliceblue " id="ContactUs" >
    <div class="container ">
        <div class="row py-2">
            <div class="col-md-4">
                <h3>Contact Us</h3>
                <form method="POST" action="{{route('contactus')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="sms" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary m-2">Submit</button>
                </form>
            </div>
            <div class="col-md-4">
                <h3>Developer Review</h3>
                <div class="text-center"  style="background-color: azure ;color: black ; border-bottom-left-radius: 30%;border-top-right-radius: 30%" class="p-4 ">
                    <img class="m-2" style="width: 60px ;border-radius: 100% ;
                     border:solid blue 3px" 
                     src="https://scontent.fdac34-1.fna.fbcdn.net/v/t39.30808-1/327777647_743737100696616_3969370136552412552_n.jpg?stp=dst-jpg_p160x160&_nc_cat=106&ccb=1-7&_nc_sid=f67be1&_nc_eui2=AeGMyiKB2pXv3zX7WYKYH_vzETMbvwDGx1sRMxu_AMbHWwEPBO8T9zSEAKql-i_0UsHUaZPYAw-q4C7bP09yMSvm&_nc_ohc=cEs3uinSNeIAX9d2K0R&_nc_ht=scontent.fdac34-1.fna&oh=00_AfBH6YPBozfW7rTWSAHtjapQRNiSC9W7vd2KPcLEdBn1Ew&oe=63F1F5A3" alt="">
                    <p style="font-family: 'EB Garamond', serif;">I am Developer  of this website and I am proud of the work we have done. We strive to provide the best
                        user experience and customer service possible.</p>
                    <p style="font-family: 'EB Garamond', serif;">Thank you for visiting and I hope you enjoy our website!</p>
                    
                    <p style="font-family: 'Bad Script', cursive;">- Hazrat</p>
                   
                </div>
               
            </div>
            <div class="col-md-4">
                <h3>Follow Us</h3>
                <p>Stay connected with us on social media</p>
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-facebook-square fa-2x"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-twitter-square fa-2x"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">
                            <i class="fab fa-instagram fa-2x"></i>
                        </a>
                    </li>
                </ul>
                <p class="copyright">Copyright &copy; Super-IT 2020</p>
            </div>
        </div>
    </div>
</footer>
