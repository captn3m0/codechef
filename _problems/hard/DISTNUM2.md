---
{"category_name":"hard","problem_code":"DISTNUM2","problem_name":"Easy Queries","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":6,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"kevinsogo","date_added":"23-08-2015","tags":{"0":"funtional","1":"hard","2":"may16","3":"mgch","4":"range","5":"segment"},"editorial_url":"http://discuss.codechef.com/problems/DISTNUM2","time":{"view_start_date":1463391000,"submit_start_date":1463391000,"visible_start_date":1463391000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/mandarin/DISTNUM2.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/russian/DISTNUM2.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/vietnamese/DISTNUM2.pdf">Vietnamese</a> as well.</h3>
<p>You are given an array <b>A</b> consisting of <b>N</b> positive integers. You have to answer <b>Q</b> queries on it of following type: </p>
<ul>
<li><b>l r k</b> : Let <b>S</b> denote the <em>sorted (in increasing order)</em> set of elements of array <b>A</b> with its indices between <b>l</b> and <b>r</b>. Note that set <b>S</b> contains distinct elements (i.e. no duplicates).<br />
You need to find <b>k<sup>th</sup></b> number in it. If such a number does not exist, i.e. the <b>S</b> has less than <b>k</b> elements, output -1.</li>
</ul>

<p>All the indices in the queries are 1-based.</p>
<h3>Input</h3>
<p>The first line of input contains two space separated integers <b>N</b> and <b>Q</b> denoting the number of elements in <b>A</b>, and the number of queries, respectively.
</p>
<p>
	The second line of input contains <b>N</b> space separated integers denoting the array <b>A</b>.
</p>
<p>
	Each of the next <b>Q</b> lines contains five integers <b>a<sub>i</sub></b>, <b>b<sub>i</sub></b>, <b>c<sub>i</sub></b>, <b>d<sub>i</sub></b>, <b>k<sub>i</sub></b>.<br />
	We will generate <b>l<sub>i</sub></b>, <b>r<sub>i</sub></b> indices for this query as follows:
</p>
<pre>
Let answer for <b>i - 1<sup>th</sup></b> query equal <b>ans<sub>i - 1</sub></b>. 
For <b>0<sup>th</sup></b> query <b>ans<sub>0</sub></b> = 0. 
Define <b>l<sub>i</sub></b> = (<b>a<sub>i</sub></b> x <b>max(ans<sub>i - 1</sub>, 0)</b> + <b>b<sub>i</sub></b>) mod <b>N</b> + 1, 
<b>r<sub>i</sub></b> = (<b>c<sub>i</sub></b> x <b>max(ans<sub>i-1</sub>, 0)</b> + <b>d<sub>i</sub></b>) mod <b>N</b> + 1. 
If <b>l<sub>i</sub></b> > <b>r<sub>i</sub></b>, then swap <b>l<sub>i</sub></b> and <b>r<sub>i</sub></b>.
	</pre><h3>Output</h3>
<p>For each query, output the answer to the query in a single line. If such a number doesn't exist, output <b>-1</b>. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li><b>0</b> ≤ <b>a<sub>i</sub></b>, <b>b<sub>i</sub></b>, <b>c<sub>i</sub></b>, <b>d<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>l<sub>i</sub></b> ≤ <b>r<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>k<sub>i</sub></b> ≤ <b>N</b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4 4
3 2 1 2
0 1 0 3 2
2 0 0 3 4
1 2 1 3 2
2 0 0 3 3

<b>Output:</b>
2
-1
2
3

<b>Input:</b>
10 10
9 10 6 3 8 4 9 6 4 10
0 2 0 9 3
1 9 1 3 3
1 8 1 0 3
1 2 1 7 2
1 6 1 2 3
1 4 1 3 1
1 6 1 6 1
1 4 1 8 1
1 9 1 3 3
1 9 1 2 1

<b>Output:</b>
6
9
10
4
6
3
10
4
6
4
</pre><h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (10 points) :</b> <b>Q</b> x <b>N </b>≤ 10<sup>7</sup></li>
<li><b>Subtask #2 (20 points) :</b> <b>k<sub>i</sub></b> = 1</li>
<li><b>Subtask #3 (30 points) :</b> <b>a<sub>i</sub></b> = 0, <b>c<sub>i</sub></b> = 0</li>
<li><b>Subtask #4 (40 points) :</b> Original constraints</li>
</ul>
<h3>Explanation</h3>
<p><b>Example #1:</b></p>
<p><em>Query 1.</em> Sorted set of elements : {1, 2}. Second number in this is 2.</p>
<p><em>Query 2.</em> Sorted set of elements : {1, 2, 3}. Fourth number doesn't exist, hence answer is -1.</p>
<p><em>Query 3.</em> Sorted set of elements : {1, 2}. Second number in this set is 2.</p>
<p><em>Query 4.</em> Sorted set of elements : {1, 2, 3}. Third number in this set is 3.</p>
