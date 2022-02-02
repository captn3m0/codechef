---
{"category_name":"easy","problem_code":"MAKEART","problem_name":"Art","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":"xcwgf666,antoniuk1","date_added":"30-05-2016","tags":{"0":"cakewalk","1":"kevinsogo","2":"loops","3":"snckpa16"},"editorial_url":"http://discuss.codechef.com/problems/MAKEART","time":{"view_start_date":1465140600,"submit_start_date":1465140600,"visible_start_date":1465140600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" href="/download/translated/SNCKPA16/mandarin/MAKEART.pdf">Mandarin Chinese</a>, <a target="_blank" href="/download/translated/SNCKPA16/russian/MAKEART.pdf">Russian</a> and <a target="_blank" href="/download/translated/SNCKPA16/vietnamese/MAKEART.pdf">Vietnamese</a> as well.</h3>
<p>Chef's new hobby is painting, but he learned the fact that it's not easy to paint 2D pictures in a hard way, after wasting a lot of canvas paper, paint and of course time. From now on, he decided to paint 1D pictures only.</p>
<p>Chef's canvas is <b>N</b> millimeters long and is initially all white. For simplicity, colors will be represented by an integer between <b>0</b> and <b>10<sup>5</sup></b>. <b>0</b> indicates white. The picture he is envisioning is also <b>N</b> millimeters long and the <b>i</b><sup>th</sup> millimeter consists purely of the color <b>C<sub>i</sub></b>. Unfortunately, his brush isn't fine enough to paint every millimeter one by one. The brush is 3 millimeters wide and so it can only paint three millimeters at a time <i>with the same color.</i> Painting over the same place completely replaces the color by the new one. Also, Chef has lots of bottles of paints of each color, so he will never run out of paint of any color.</p>
<p>Chef also doesn't want to ruin the edges of the canvas, so he doesn't want to paint any part beyond the painting. This means, for example, Chef cannot paint just the first millimeter of the canvas, or just the last two millimeters, etc.</p>
<p>Help Chef by telling him whether he can finish the painting or not with these restrictions.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b>. The second line contains <b>N</b> space-separated integers <b>C<sub>1</sub></b>, <b>C<sub>2</sub></b>, ..., <b>C<sub>N</sub></b> denoting the colors of Chef's painting.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing either “<tt>Yes</tt>” or “<tt>No</tt>” (without quotes), denoting whether Chef can finish the painting or not.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>3</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li>The sum of the <b>N</b>s over all the test cases in a single test file is ≤ <b>5×10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>C<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
<tt>3
4
1 5 5 5
4
1 1 1 5
3
5 5 2
</tt>
<b>Output:</b>
<tt>Yes
Yes
No
</tt></pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> Chef's canvas initially contains the colors [0,0,0,0]. Chef can finish the painting by first painting the first three millimeters with color 1, so the colors become [1,1,1,0], and then the last three millimeters with color 5 so that it becomes [1,5,5,5].</p>
<p><b>Example case 2.</b> Chef's canvas initially contains the colors [0,0,0,0]. Chef can finish the painting by first painting the last three millimeters by color 5 so the colors become [0,5,5,5], and then the first three millimeters by color 1 so it becomes [1,1,1,5].</p>
<p><b>Example case 3.</b> In this test case, Chef can only paint the painting as a whole, so all parts must have the same color, and the task is impossible.</p>