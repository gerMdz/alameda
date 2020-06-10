$(document).ready(function(){
    $('.header').height($(window).height());
})
$('[data-countdown]').each(function () {
    var $this = $(this), finalDate = $(this).data('countdown');
    $this.countdown(finalDate, function (event) {

        var semanas = event.offset.weeks;
        var dias = event.offset.days;
        var horas = event.offset.hours;
        var minutos = event.offset.minutes;
        var segundos = event.offset.seconds;

        var letrasS = " semanas"
        if (dias > 1) {
            var letrasD = " %d días" + "<br/>"
        }
        if (dias == 1) {
            var letrasD = " %d día" + "<br/>"
        }
        if (dias < 1) {
            var letrasD = " "
        }
        if (semanas == 1) {
            var letrasW = "%w semana" + "<br/>"
        }
        if (semanas < 1) {
            var letrasW = " "
        }
        if (minutos > 1) {
            var letrasM = " %M minutos" + "<br/>"
        }
        if (minutos == 1) {
            var letrasM = " %M minuto" + "<br/>"
        }
        if (minutos < 1) {
            var letrasM = " "
        }
        if (horas > 1) {
            var letrasH = " %H horas" + "<br/>"
        }
        if (horas == 1) {
            var letrasH = " %H hora" + "<br/>"
        }
        if (horas < 1) {
            var letrasH = " "
        }
        if (segundos > 1) {
            var letrasS = " %S segundos" + "<br/>"
        }
        if (segundos == 1) {
            var letrasS = " %S segundo" + "<br/>"
        }
        if (segundos < 1) {
            var letrasS = " "
        }

        if (dias == 0 && semanas == 0 && horas == 0 && minutos == 0 && segundos == 0) {
            letrasB = '¡BIENVENIDOS!'
        } else {
            letrasB = ''
        }
        /*$(this).append().html(event.strftime(' letrasW + letrasD + letrasH + letrasM + letrasS));*/


        $this.html(event.strftime('<div class="text-info card-body h-100 my-auto ">' +
            letrasW + letrasD + letrasH + letrasM + letrasB
            + '</div>'));
    });
});