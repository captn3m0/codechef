---
{"category_name":"medium","problem_code":"TSHIRTS","problem_name":"Little Elephant and T-Shirts","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":null,"date_added":"21-02-2014","tags":{"0":"aug14","1":"darkshadows","2":"dp","3":"dynamic","4":"easy"},"editorial_url":"http://discuss.codechef.com/problems/TSHIRTS","time":{"view_start_date":1407749400,"submit_start_date":1407749400,"visible_start_date":1407749400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/mandarin/TSHIRTS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/russian/TSHIRTS.pdf">Russian</a>.</h3>
<p>Little Elephant and his friends are going to a party. Each person has his own collection of T-Shirts. There are <b>100</b> different kind of T-Shirts. Each T-Shirt has a unique id between <b>1</b> and <b>100</b>. No person has two T-Shirts of the same ID.</p>
<p>They want to know how many arrangements are there in which no two persons wear same T-Shirt. One arrangement is considered different from another arrangement if there is at least one person wearing a different kind of T-Shirt in another arrangement.</p>

<h3>Input</h3>
<p>First line of the input contains a single integer <b> T </b> denoting number of test cases. Then <b>T</b> test cases follow.</p>
<p>For each test case, first line contains an integer <b>N</b>, denoting the total number of persons. Each of the next <b>N</b> lines contains at least <b>1</b> and at most <b>100</b> space separated distinct integers, denoting the ID's of the T-Shirts <b>i</b><sup>th</sup> person has.</p>
<h3>Output</h3>
<p>For each test case, print in single line the required number of ways modulo <b>1000000007 = 10<sup>9</sup>+7</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10</b></li>
<li><b>1 ≤ N ≤ 10</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
3 5
8 100
3
5 100 1
2
5 100

<b>Output:</b>
4
4
</pre><h3>Explanation</h3>
<p>For the first case, <b>4</b> possible ways are <b>(3,8)</b>, <b>(3,100)</b>, <b>(5,8)</b> and <b>(5,100)</b>.For the second case, <b>4</b> possible ways are <b>(5,2,100)</b>, <b>(100,2,5)</b>, <b>(1,2,100)</b>, and <b>(1,2,5)</b>.</p>
