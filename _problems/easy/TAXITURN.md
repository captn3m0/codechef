---
{"category_name":"easy","problem_code":"TAXITURN","problem_name":"Taxi Making Sharp Turns","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"11-12-2017","tags":{"0":"acm17kgp","1":"admin2","2":"easy","3":"geometry","4":"kgp17rol"},"editorial_url":"https://discuss.codechef.com/problems/TAXITURN","time":{"view_start_date":1515875400,"submit_start_date":1515875400,"visible_start_date":1515875400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Taxis of Kharagpur are famous for making sharp turns. You are given the coordinates where a particular taxi was on a 2-D planes at <b>N</b> different moments: (<b>x<sub>1</sub>, y<sub>1</sub></b>), (<b>x<sub>2</sub>, y<sub>2</sub></b>), ..., (<b>x<sub>N</sub>, y<sub>N</sub></b>). In between these coordinates, the taxi moves on a straight line. A turn at the i-th (2 ≤ i ≤ <b>N</b>-1) coordinate is said to be a <i>sharp</i> turn if the angle by which it turns at Point B = (<b>x<sub>i</sub>, y<sub>i</sub></b>) when going from coordinates A = (<b>x<sub>i-1</sub>, y<sub>i-1</sub></b>) to C = (<b>x<sub>i+1</sub>, y<sub>i+1</sub></b>) via (<b>x<sub>i</sub>, y<sub>i</sub></b>) is greater than 45 degrees. ie. suppose you extend the line segment AB further till a point D, then the angle DBC would be greater than 45 degrees.</p>

<p>You have to identify whether the taxi made a sharp turn somewhere or not (Please look at Output section for details). If it made a sharp turn, also identify whether it is possible to change the coordinates at one of the <b>N</b> moments to make sure that the taxi doesn't make any sharp turn. Note that all the <b>N</b> pairs of coordinates (including the new coordinates) should be integers and distinct and should have their x and y coordinates at least 0 and at most 50.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of moments at which you are given the information of the taxi's coordinates.</li>
<li>Each of the next <b>N</b> lines contains two space-separated integers <b>x<sub>i</sub></b> and <b>y<sub>i</sub></b> denoting the x and y coordinates of the taxi at i-th moment.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, print a single line containing two space-separated strings, either of which can be a "yes" or "no" (without quotes). If there was no sharp turn, the first string should be "yes", and if there was a sharp turn, the first string should be "no". For the second string, you should tell whether it is possible to modify at most one coordinate in such a way that taxi doesn't make a sharp turn. Note that if the first string is "yes", then the second string would always be "yes".</li>
</ul>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 50</li>
<li>3 ≤ <b>N</b> ≤ 50</li>
<li>0 ≤ <b>x<sub>i</sub></b>, <b>y<sub>i</sub></b> ≤ 50</li>
<li>It's guaranteed that all (<b>x<sub>i</sub></b>, <b>y<sub>i</sub></b>) pairs are distinct.</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
5
3
0 0
1 1
2 1
3
0 0
1 0
6 1
3
0 0
1 0
1 1
4
0 0
1 0
1 1
6 1
6
0 0
1 0
1 1
2 1
2 2
3 2

<b>Output</b>
yes yes
yes yes
no yes
no yes
no no

</pre>

<h3>Explanation</h3>
<p><b>Example 1</b>. 
<p><img height="350" src="https://codechef_shared.s3.amazonaws.com/upfiles/example_.png
"/></p>
<p>You can see that taxi is never making a sharp turn.
</p>

<p><b>Example 3</b></p>
<p><img height="350" src="https://discuss.codechef.com/upfiles/taxi_figure2.png"/></p>
<p>You can see that taxi is making a sharp turn of 90 degrees, an angle greater than 45'. However, you can change the coordinates of the third points to (2, 1) to ensure that the angle remains <= 45'.
</p>