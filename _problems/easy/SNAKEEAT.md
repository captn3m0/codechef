---
{"category_name":"easy","problem_code":"SNAKEEAT","problem_name":"Snake Eating","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"kingofnumbers","date_added":"18-05-2017","tags":{"0":"admin3","1":"binary","2":"easy","3":"snckql17","4":"sorting"},"editorial_url":"https://discuss.codechef.com/problems/SNAKEEAT","time":{"view_start_date":1495625400,"submit_start_date":1495625400,"visible_start_date":1495625400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL17/mandarin/SNAKEEAT.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL17/russian/SNAKEEAT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKQL17/vietnamese/SNAKEEAT.pdf">Vietnamese</a> as well.</h3>

<p>The Chef has acquired a vicious bunch of snakes, and these snakes are ever hungry and end up eating each other. In particular, each snake i has a length <b>L<sub>i</sub></b>, whose initial value is given to you. A snake can eat any other snake which is not longer than itself. That is, snake i can eat snake j (i ≠ j), if <b>L<sub>i</sub></b> ≥ <b>L<sub>j</sub></b>. And when a snake eats another snake, its length increases by 1. That is, <b>L<sub>i</sub></b> increases by 1. A snake can eat multiple other snakes.</p>

<p>The Chef doesn't care about snakes eating each other. All he wants is to have as many snakes as possible, which are at least some particular lengths long. You are given <b>Q</b> values: <b>K<sub>1</sub>, K<sub>2</sub>, .., K<sub>Q</sub></b>. Treat each of them independently and output the answer for each. That is, for each <b>K<sub>i</sub></b>, assume that you start out from the beginning with all the snakes alive and the lengths as the initial values given in the input, and find out the maximum number of snakes you can get whose length is at least <b>K<sub>i</sub></b>.</p>


<h3>Input</h3>
<ul>
<li>The first line contains an integer <b>T</b>, which is the number of testcases. The description of each testcase follows.</li>
<li>The first line of each testcase contains two integers: <b>N</b> and <b>Q</b>, which denote the number of snakes initially, and the number of queries, respectively.</li>
<li>The second line contains <b>N</b> space separated integers: <b>L<sub>1</sub>, L<sub>2</sub>, .., L<sub>N</sub></b>, the initial lengths of the snakes.</li>
<li>The i-th of the next <b>Q</b> lines contains a single integer, <b>K<sub>i</sub></b>.
</ul>

<h3>Output</h3>
<ul>
<li>For each testcase, output <b>Q</b> lines, the i-th of which should have a single integer: The maximum number of snakes the Chef can get which are of length at least <b>K<sub>i</sub></b>.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 5</li>
<li>1 ≤ <b>N, Q</b> ≤ 10<sup>5</sup></li>
<li>1 ≤ <b>L<sub>i</sub></b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>K<sub>i</sub></b> ≤ 10<sup>9</sup></li>

</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
5 2
21 9 5 8 10
10
15
5 1
1 2 3 4 5
100
<b>Output:</b>
3
1
0
</pre>

<h3>Explanation</h3>
<p>In the first testcase, first query, the second snake (length 9) can eat the fourth snake (length 8), and hence make its length 10. Now, there are four snakes left, and their lengths are {21, 10, 5, 10}. So, we have three snakes with length ≥ 10: Two snakes of length 10 and one snake of length 21. This is the best you can do.</p>
<p>In the second query, no matter what happens, you cannot get more than one snake of length ≥ 15.</p>
<p>In the second testcase, no matter what happens, you cannot get any snake of length ≥ 100. Hence the answer is 0.</p>