$(function() {
"use strict";
    var $start = $('#start');
    var $red = $('#red');
    var $yellow = $('#yellow');
    var $blue = $('#blue');
    var $green = $('#green');
    var $buttons = $('.buttons');
    var boxArray = [];
    var boxIndex = 0;
    var i = 0;
    var randombox;
    var audio = new Audio('/audio/pacman.mp3');
    var $title = $('#title');
    var $score = $('#score');

    //random box to fade
    function getRandomBox() {
        var random = parseInt(Math.random()*100);
        if (random <= 25) {
            randombox = $red 
        } else if (random > 25 && random <= 50) {
            randombox = $yellow
        } else if (random > 50 && random <= 75) {
            randombox = $blue
        } else if (random > 75) {
            randombox = $green
        };
        boxArray.push(randombox[0])
        return randombox
    };
                
    $start.click(function() {
        boxArray = []
        getRandomBox();
        if ($(window).width() > 739) {
            randombox.animate({
                opacity: ".3"
            }, 500).effect("shake").animate ({
                opacity: "1"
            }, 500);
        } else {
             randombox.animate({
                opacity: ".3"
            }, 500).animate ({
                opacity: "1"
            }, 500);
        }
    });

    function arrayLoop() {
        boxIndex = 0;
        var intervalId = setInterval(function() {
                var $currentBox = $(boxArray[i]);
                if ($(window).width() > 739) {
                    $currentBox.animate({
                        opacity: ".3"
                    }, 200).effect("shake").animate ({
                        opacity: "1"
                    }, 200);
                } else {
                    $currentBox.animate({
                        opacity: ".3"
                    }, 200).animate ({
                        opacity: "1"
                    }, 200);
                }
            i++;
            if (boxArray.length == i) {
                clearInterval(intervalId)
            };
        }, 750);
    };
    
    $buttons.each(function() {
        $(this).click(function() {
            if (boxArray[0] == undefined) {
                $title.html("<img src='/img/simon-garfunkel.png'>");
                setTimeout(function() {
                        $title.html("Simon Game")
                    }, 2000)
            } else {
                 if (this == boxArray[boxIndex]) {
                    boxIndex++;
                     if (boxArray.length == boxIndex) {
                        $('#score').html("Score: " + boxIndex);
                        i = 0;
                        getRandomBox();
                        arrayLoop();
                    }
                } else {
                    boxArray = [];
                    i = 0;
                    boxIndex = 0;
                    audio.play();
                    if ($(window).width() > 739) {
                        $buttons.addClass('pacman')
                        setTimeout(function() {
                            $buttons.removeClass('pacman')
                        }, 1000)
                    }
                    $title.html("Game Over...");
                    setTimeout(function() {
                        $title.html("Simon Game")
                    }, 1000)
                    $score.html("Score: ")
                }
            }
        });
    });
});
