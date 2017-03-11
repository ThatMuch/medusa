// Team
$(document).ready(function () {

	var members = $('.member');

	slideInMembers(members);

	$(window).scroll(function () {

		slideInMembers(members);
	});
});

function slideInMembers(members) {

	//this set the scroll to be at the bottom of the page
	var currentScroll = $(this).scrollTop() + $(this).height();

	members.each(function (index, value) {

		var slideInPoint = $('#team').offset().top;
		if (slideInPoint <= currentScroll) {

			$(this).animate({
				left: '0'
			}, 1000, 'swing', null);
		}
	});
}

// Portfolio
$(document).ready(function () {

	var projects = $('.project');

	slideInProjects(projects);

	$(window).scroll(function () {

		slideInProjects(projects);
	});
});

function slideInProjects(projects) {

	//this set the scroll to be at the bottom of the page
	var currentScroll = $(this).scrollTop() + $(this).height();

	projects.each(function (index, value) {

		var slideInPoint = $('#portfolio').offset().top;
		if (slideInPoint <= currentScroll) {

			$(this).animate({
				left: '0'
			}, 1000, 'swing', null);
		}
	});
}
// Tags
$(document).ready(function () {
	var tags = $('.post_tags');

	slideUpTags(tags);
});

function slideUpTags(tags) {
	tags.each(function () {
		var tagBottom = -100;

		$(this).children().each(function () {
			$(this).animate({
				bottom: tagBottom
			}, 3000, 'swing', null);
			tagBottom -= 100;
		});
	});

}
