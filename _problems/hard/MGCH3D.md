---
{"category_name":"hard","problem_code":"MGCH3D","problem_name":"3D Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"kevinsogo","date_added":"24-03-2015","tags":{"0":"fft","1":"fourier","2":"hard","3":"mgch","4":"sept15"},"editorial_url":"http://discuss.codechef.com/problems/MGCH3D","time":{"view_start_date":1442223000,"submit_start_date":1442223000,"visible_start_date":1442223000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT15/mandarin/MGCH3D.pdf">Mandarin</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT15/russian/MGCH3D.pdf">Russian</a>. Translations in Vietnamese to be uploaded soon.</h3>
<p>Today, you finally have a chance to compete with a famous coder like Vasia and prove your mettle.</p>
<p>While he likes the real world as well, his adventures in <b>3D</b> computer puzzles make him the undisputed King of the subject. Until now, that is!</p>
<p>Vasia has <b>N</b> distinct points in 3 dimensional space and he is going to ask you to find the following sum <b>Q</b> times.</p>
<p><img src="http://latex.codecogs.com/gif.latex?\sum \limits_{i \neq j}\frac{|A(X_{i} - X_{j}) + B(Y_{i} - Y_{j}) + C(Z_{i}- Z_{j}) + D |}{N(N-1)\sqrt{ (X_{i} - X_{j})^4 + (Y_{i} - Y_{j})^4 + (Z_{i} - Z_{j})^4}}" /></p>
<p>Where <b>A</b>,<b>B</b>,<b>C</b> and <b>D</b> are some evil integers chosen by Vasia, and their values vary for each summation query.</p>
<h3>Input</h3>
<ul>
<li>First line contains two integers <b>N</b> and <b>Q</b>. <b>N</b> is number of points, and <b>Q</b> is number of queries.</li>
<li>The next <b>N</b> lines contain integer point coordinates <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b>, <b>Z<sub>i</sub></b>.</li>
<li>The last <b>Q</b> lines contain a query each in the form of 4 integers <b>A</b>, <b>B</b>, <b>C</b>, <b>D</b>.</li>
<li>Note that all the integers in a single line are separated by single spaces.</li>
</ul>
<h3>Output</h3>
<p>For each query, output a single line containing the sum accurate up to <b>10<sup>-6</sup></b>.</p>
<h3>Constraints</h3>
<ul>
<li>2 ≤ <b>N</b> ≤ 777777</li>
<li>1 ≤ <b>Q</b> ≤ 77</li>
<li>1 ≤ <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b>, <b>Z<sub>i</sub></b> ≤ 77</li>
<li>1 ≤ <b>A<sub>i</sub></b>, <b>B<sub>i</sub></b>, <b>C<sub>i</sub></b> ≤ 77</li>
<li>1 ≤ <b>D<sub>i</sub></b> ≤ 7777</li>
<li><b>P.S.</b> I hope the digit "<b>7</b>" brings you luck :) </li>
</ul>
<h3>Example</h3>
<pre>
 <b>Input:</b>
 10 5
 45 70 41
 9 1 43
 1 68 8
 70 76 7
 1 19 33
 71 70 53
 42 54 71
 11 13 30
 16 63 25
 30 24 34
 56 61 29 7328
 63 32 18 365
 37 41 11 2332
 36 19 43 7432
 68 55 46 6338

 <b>Output:</b>
 6.692386875130186
 1.323651551014940
 2.269817185835997
 6.783038317971530
 5.816449269601737
 
</pre><h3>Subtasks</h3>
<ul>
<li><b>Subtask 1:</b> <b>Q</b>*<b>N<sup>2</sup> </b>≤ 77777777. <b>Points - 15</b></li>
<li><b>Subtask 2:</b> Original constraints. <b>Points - 85</b></li>
</ul>
