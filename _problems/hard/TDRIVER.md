---
{"category_name":"hard","problem_code":"TDRIVER","problem_name":"Taxi Driver","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"stzgd","date_added":"16-03-2015","tags":{"0":"cook57","1":"geometry","2":"kostya_by","3":"manhattan","4":"medium"},"editorial_url":"http://discuss.codechef.com/problems/TDRIVER","time":{"view_start_date":1429470000,"submit_start_date":1429470000,"visible_start_date":1429470000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK57/mandarin/TDRIVER.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK57/russian/TDRIVER.pdf">Russian</a> as well.</h3>

<meta charset="utf8" />

<p>Mark is a taxi driver working in a big city. A taxi company, where Mark works, has <b>N</b> regular customers. The house of a regular customer can be described as a point of the Cartesian plane with non-negative integer coordinates. Recently, Mark's boss has given him a big assignment: he should drive between each pair of regular customers to make sure all the direct roads between the customers are in a good condition. Now Mark is wondering how big the total distance he will be driving during this assignment is.</p>

<p>More formally, you are given a sequence <b>p<sub>1</sub></b>, <b>p<sub>2</sub></b>, ..., <b>p<sub>N</sub></b> of points of the Cartesian plane with non-negative integer coordinates. These points describe the houses of the regular customers. Also, you are given two positive integer parameters <b>a</b> and <b>b</b>. The distance between points (<b>x<sub>1</sub></b>, <b>y<sub>1</sub></b>) and (<b>x<sub>2</sub></b>, <b>y<sub>2</sub></b>) is equal to <b>max</b>(<b>a</b> × |<b>x<sub>1</sub></b> - <b>x<sub>2</sub></b>|, <b>b</b> × |<b>y<sub>1</sub></b> - <b>y<sub>2</sub></b>|).</p>

<p>You task is to calculate the sum of the distances between each pair of the given points.</p>

<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>

<p>The first line of the test case description contains one integer <b>N</b> denoting the size of the sequence. The second line contains two positive integers <b>a</b> and <b>b</b>.</p>

<p>Each of the next <b>N</b> lines contains two non-negative integers <b>x<sub>i</sub></b> and <b>y<sub>i</sub></b> denoting the coordinates of the corresponding point of the sequence.</p>

<h3>Output</h3>

For each test case, output a single line containing one integer: the sum of the distances between each pair of the given points.

<h3>Constraints</h3>

<ul>
    <li>1 ≤ <b>T</b> ≤ 200000</li>
    <li>1 ≤ <b>N</b> ≤ 200000</li>
    <li>1 ≤ <b>a</b>, <b>b</b> ≤ 100</li>
    <li>0 ≤ <b>x<sub>i</sub></b>, <b>y<sub>i</sub></b> ≤ 10<sup>6</sup></li>
    <li>The sum of all <b>N</b> in the input is not greater than 200000</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
4
1 1
0 0
0 1
1 0
1 1
7
6 9
1 2
2 3
4 1
5 431
213 2
32 12
11 99

<b>Output:</b>
6
32274

</pre>