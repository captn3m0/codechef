---
{"category_name":"medium","problem_code":"LPAIR","problem_name":"Chef and Reunion","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"shiplu","problem_tester":"rustinpiece‎","date_added":"8-02-2014","tags":{"0":"bit","1":"cook43","2":"easy","3":"shiplu"},"editorial_url":"http://discuss.codechef.com/problems/LPAIR","time":{"view_start_date":1392575400,"submit_start_date":1392575400,"visible_start_date":1392575400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK43/mandarin/LPAIR.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK43/russian/LPAIR.pdf">Russian</a> as well.</h3>
<p>Today is the reunion of all chefs in the world. Our Chef wants to make this moment more happier. He arranged a mass wedding in this reunion. For this, he made a strange stage and drew two horizontal parallel lines on the stage. There are <b>N</b> unmarried male chefs in the reunion and he gave each male chef <b>i</b> an unique number <b>M<sub>i</sub></b>. Then all male chefs will stand in the first line drawn by Chef. But they will stand in increasing order of their number. That means chef with the lowest number will stand at the leftmost position of the line, then right to him would be the chef with the second lowest number and so on. Similarly, there are <b>N</b> female chefs in the reunion and Chef also gave each female chef <b>j</b> an unique number <b>F<sub>j</sub></b> (sequences <b>F<sub>j</sub></b> and <b>M<sub>i</sub></b> can have equal numbers). Then all female chefs will stand in the other line following the same rule(will stand in increasing order of the numbers) as the male chef. </p>
<p>Now chef will choose all the marriage pairs himself. He will select a female chef and a male chef (both of them have not selected before) and will draw a straight line between them. He calls this line a marriage line. He will do this for the rest of the chefs. </p>
<p>You will be given the <b>N</b> marriage lines; you have to find how many marriage line pairs intersect with each other.</p>

<h3>Input</h3>
<p>First line contains a single integer <b>N</b>. The <b>i</b>-th line of the next <b>N</b> lines contain two space separated integers <b>M<sub>i</sub></b> and <b>F<sub>i</sub></b>, means there is a marriage line between male chef <b>M<sub>i</sub></b> and female chef <b>F<sub>i</sub></b>. No marriage line will be mentioned twice.</p>
<h3>Output</h3>
<p>Output the number of marriage line pairs that intersect with each other on a single line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000 (10<sup>5</sup>)</b></li>
<li><b>0</b> ≤ <b>M<sub>i</sub>, F<sub>i</sub></b> ≤ <b>1000000000 (10<sup>9</sup>)</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 3
3 6
5 4

<b>Output:</b>
1

<b>Input:</b>
4
5 12
10 11
11 9
30 1

<b>Output:</b>
6

</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> Only marriage lines (3, 6) and (5, 4) intersect with each other.</p>
<p><b>Example case 2.</b> All the marriage lines intersect with each other.</p>
