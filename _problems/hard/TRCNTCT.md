---
{"category_name":"hard","problem_code":"TRCNTCT","problem_name":"Tree Connectivity","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"melnik","problem_tester":"kingofnumbers","date_added":"16-08-2017","tags":{"0":"cook85","1":"dfs","2":"divide","3":"hard","4":"melnik","5":"segment"},"editorial_url":"https://discuss.codechef.com/problems/TRCNTCT","time":{"view_start_date":1503253800,"submit_start_date":1503253800,"visible_start_date":1503253800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK85/mandarin/TRCNTCT.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK85/russian/TRCNTCT.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/COOK85/vietnamese/TRCNTCT.pdf">vietnamese</a> as well.</h3>

<p>Chef recently got influenced by the Joker and loves to carve things up with his new collection of knives. </p> 

<p>One afternoon Chef decides to cut off some vertices from a tree that has <b>N </b> vertices. Chef creates the following plan for cutting the vertices :  
<ul>
 <li> He chooses a pair of integers (<b>L, R</b>) such that (<b>1</b>≤<b>L</b>≤<b>R</b>≤<b>N</b>) and cuts off all vertices whose indices do not belong in the interval [<b>L, R</b>].</li>
<li>He also cuts off all edges that don’t connect any two vertices belonging to the interval [<b>L, R</b>].</li>
</ul> 
</p>

<p>A pair of integers [<b>L, R</b>] is said to be valid if the remaining graph after cutting the vertices according to Chef's plan is still connected.</p>

<p>The Chef wants to know the number of such valid pairs (<b>L, R</b>) for his tree. However, duty calls for the Chef and he has to rush back to the kitchen to cook. Can you help him to calculate the number of such valid pairs? </p>
	

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. The description of each test case starts with the number of vertices <b>N</b>. Each of the following <b>N - 1</b> lines contains two integers - indices of vertices connected by an edge. It is guaranteed that each test case defines a valid tree.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing the number Chef is interested in.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b></li>
<li>The sum of <b>N</b> over all testcases does not exceed <b>10<sup>6</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
2
2 1
4
3 4
1 4
4 2

<b>Output:</b>
3
7

</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> Intervals [<b>1</b>,<b>1</b>], [<b>1</b>,<b>2</b>] and [<b>2</b>,<b>2</b>] are valid.</p>
<p><b>Example case 2.</b> Intervals [<b>1</b>,<b>1</b>], [<b>1</b>,<b>4</b>], [<b>2</b>,<b>2</b>], [<b>2</b>,<b>4</b>], [<b>3</b>,<b>3</b>], [<b>3</b>,<b>4</b>] and [<b>4</b>,<b>4</b>] are valid.</p>