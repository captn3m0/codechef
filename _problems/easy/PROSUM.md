---
{"category_name":"easy","problem_code":"PROSUM","problem_name":"Little Chef and Numbers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"viv001","problem_tester":"whiteking","date_added":"26-01-2014","tags":{"0":"cakewalk","1":"march14","2":"simple","3":"viv001"},"editorial_url":"http://discuss.codechef.com/problems/PROSUM","time":{"view_start_date":1395135000,"submit_start_date":1395135000,"visible_start_date":1395135000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/mandarin/PROSUM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/russian/PROSUM.pdf">Russian</a>.</h3>
<p>Little chef has just been introduced to the world of numbers! While experimenting with addition and multiplication operations, the little chef came up with the following problem:<br />
<p/>
<p> Given an array <b>A</b> of non-negative integers, how many pairs of indices <b>i</b> and <b>j</b> exist such that <b> A[i]*A[j] > A[i]+A[j] </b> where <b> i &lt; j </b>.</p>
<p> Now being a learner, little chef isn't able to solve this problem efficiently and hence turns to you for help. </p>
<h3>Input</h3>
<p>First line of input contains an integer <b>T</b> denoting the number of test cases. For each test case, the first line contains an integer <b>N</b> denoting the number of integers in the array. The next line contains <b>N</b> space separated integers where the <b>i<sup>th</sup></b> integer represents <b>A[i]</b>. </p>
<p><b> Note : There may be trailing spaces on each line of input. </b></p>
<h3>Output</h3>
<p>For each test, print the required number of pairs in a single line.</p>
<h3>Constraints</h3>
<ul>
<li> <b>1</b> ≤ <b>T</b> ≤ <b>10</b> </li>
<li> <b>2</b> ≤ <b>N</b> ≤ <b>100000 (10<sup>5</sup>)</b> </li>
<li> <b>0</b> ≤ <b>A[i]</b> ≤ <b>1000000 (10<sup>6</sup>)</b>
</li></ul>
<p><br/></br/></p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
3 4 5
4
1 1 1 1

<b>Output:</b>
3
0
</pre><h3>Explanation</h3>
</p/></p>
<p><b>Example case 1.</b><br/><br />
All pairs of numbers satisfy the criteria. Total number of pairs equals <b>3</b>.
</br/></p>
<p><b>Example case 2.</b><br/><br />
No pair of numbers satisfy the criteria.
</br/></p>
