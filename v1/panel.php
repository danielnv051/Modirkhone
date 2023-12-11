<div class="top_btn">
    <div class="users_title" onclick="open_web('add_build')"><?php echo $users; ?> ایجاد ساختمان</div>
    <div class="users_title" onclick="open_web('modirplus')"><?php echo $modirplus; ?> اشتراک مدیر پلاس</div>
</div>
<div class="panel">
    <div class="users">
        <div class="users_title"><?php echo $users; ?> ساکن</div>
        <div class="build">
            <div class="build_info">
                <p><?php echo $building; ?> ساختمان مسکونی : <span class="build_name">جلال</span></p>
                <p><?php echo $floor; ?> واحد : <span class="unit_num">6</span></p>
                <p><?php echo $debt; ?> بدهی : <span class="debt">1/000/000</span> ریال</p>
            </div>
            <div class="build_pic">
                <img src="img/home.png" alt="home">
            </div>
        </div>

    </div>
    <div class="managers">
        <div class="users_title"><?php echo $managers; ?>مدیر</div>
        <div class="build">
            <div class="build_info">
                <p><?php echo $building; ?> ساختمان مسکونی : <span class="build_name">جلال</span></p>
                <p><?php echo $floor; ?> تعداد واحدها : <span class="unit_num">12</span></p>
                <p><?php echo $debt; ?> بدهی واحدها: <span class="debt">2/000/000</span> ریال</p>
                <p><?php echo $bank; ?> صندوق : <span class="debt">3/000/000</span> ریال</p>
            </div>
            <div class="build_pic">
                <img src="img/home.png" alt="home">
            </div>
        </div>
    </div>
</div>