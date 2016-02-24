# bmi_web

Setting up:
  1. Clone this repo to your folder.
  2. Export the database located at /db folder.
  3. Open the app in your browser.
  
Initial run:
  1. The admin (admin@gmail.com:password) must configure the Growth Charts.
      a. For the boys' growth chart, use this as reference: http://www.who.int/growthref/bmifa_boys_5_19years_z.pdf?ua=1
          Note: You're gonna need the age in months, L, M and S columns. You will encode that in the boys' Growth Chart.
      a. For the girls' growth chart, use this as reference: http://www.who.int/growthref/bmifa_girls_5_19years_z.pdf?ua=1
          Note: You're gonna need the Age in months, L, M and S columns. You will encode that in the girls' Growth Chart.
  2. The admin (admin@gmail.com:password) must add workout videos at the workouts section.
      a. Navigate to /workout. If you are logged in as the admin, you will see a PLUS button at the lower right.
      b. A form will appear.
      c. Add a title and the YouTube video link (eg. https://www.youtube.com/watch?v=dQw4w9WgXcQ)
      d. Save.
      Note: To delete a workout video, log in as the admin and click on the video thumbnails.
  
Flow:
  Register > BMI Calculator (They will be classified Normal, Overweight, etc.) > Food recall at Profile > As the please.
  
Notes:
  BMI Summary and Workout Summary is available from the start.

References:
  WHO: BMI for Ages 5-19 (http://www.who.int/growthref/who2007_bmi_for_age/en/)
