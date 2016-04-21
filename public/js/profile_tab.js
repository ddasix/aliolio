  $(document).ready(function () {
      $("#listview_thumb").click(function () {
          $(".profile_listwrap_thumb, .profile_listwrap_feed").removeClass("hide");
          $(".profile_listwrap_feed").addClass("hide");
          $("#listview_thumb").addClass("choose");
          $("#listview_feed").removeClass("choose");
      });
      $("#listview_feed").click(function () {
          $(".profile_listwrap_thumb, .profile_listwrap_feed").removeClass("hide");
          $(".profile_listwrap_thumb").addClass("hide");
          $("#listview_feed").addClass("choose");
          $("#listview_thumb").removeClass("choose");
      });
  });