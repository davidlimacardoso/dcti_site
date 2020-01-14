// SHORTNED CURSOS

$(document).ready(function() {
	var showCharCurso = 1;
	var moretextCurso = "Veja mais cursos";
	var lesstextCurso = "Ver menos";
	$('.more_course').each(function() {
		var contentCurso = $(this).html();

		if(contentCurso.length > showCharCurso) {

			var cCurso = contentCurso.substr(0, showCharCurso);
			var hCurso = contentCurso.substr(showCharCurso-1, contentCurso.length - showCharCurso);

			var htmlCurso = cCurso + '<span class="morecontent"><span>' + hCurso + '</span>&nbsp;&nbsp;<a href="" class="morelinkCurso">' + moretextCurso + '</a></span>';

			$(this).html(htmlCurso);
		}

	});

	$(".morelinkCurso").click(function(){
		if($(this).hasClass("lessCurso")) {
			$(this).removeClass("lessCurso");
			$(this).html(moretextCurso);
		} else {
			$(this).addClass("lessCurso");
			$(this).html(lesstextCurso);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});
});

// SHORTNED GRADUAÇÃO
$(document).ready(function() {
	var showChar = 1;
	var moretext = "Sobre o curso";
	var lesstext = "Menos";
	$('.more').each(function() {
		var content = $(this).html();

		if(content.length > showChar) {

			var c = content.substr(0, showChar);
			var h = content.substr(showChar-1, content.length - showChar);

			var html = c + '<span class="morecontent"><span>' + h + '</span><a href="" class="morelink">' + moretext + '</a></span>';

			$(this).html(html);
		}

	});

	$(".morelink").click(function(){
		if($(this).hasClass("less")) {
			$(this).removeClass("less pl-3");
			$(this).html(moretext);
		} else {
			$(this).addClass("less pl-3");
			$(this).html(lesstext);
		}
		$(this).parent().prev().toggle();
		$(this).prev().toggle();
		return false;
	});
});
