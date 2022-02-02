---
{"category_name":"easy","problem_code":"SNSOCIAL","problem_name":"Snakes and transition from Capitalism to Socialism","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"kingofnumbers","date_added":"31-05-2017","tags":{"0":"admin2","1":"bfs","2":"easy","3":"graph","4":"snckpb17"},"editorial_url":"https://discuss.codechef.com/problems/SNSOCIAL","time":{"view_start_date":1496331000,"submit_start_date":1496331000,"visible_start_date":1496331000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPB17/mandarin/SNSOCIAL.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPB17/russian/SNSOCIAL.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKPB17/vietnamese/SNSOCIAL.pdf">Vietnamese</a> as well.</h3>

<p>After a long duration of the painful, torturous and tumultuous periods of capitalism in Snakeland, now the snakes have decided to adopt socialism. The houses in Snakeland are arranged in a rectangular fashion of dimension <b>n * m</b>. The wealth of the snake in the house at cell (i, j) is given by <b>a</b>[i][j] rupees.</p>

<p>A bill has been passed for making a smooth transition from capitalism to socialism. At the end of each hour, the wealth of a snake will grow and will become equal to the highest wealth that its neighbor had (at the start of the hour). That is, consider the maximum wealth among its neighbors at the start of the hour, and this snake's wealth will become equal to that at the end of the hour. Note that this increase in wealth will happen simultaneously for each snake. Two houses are said to be neighbors of each other if they share a side or corner with each other. Find out the minimum number of hours required for this transition.</p> 

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two space separated integers: <b>n, m</b>.</p>
<p>Each of the next <b>n</b> lines contains <b>m</b> space separated integers. The j-th integer in the i-th row denotes <b>a</b>[i][j].</p>

<h3>Output</h3>
<p>For each test case output a single integer corresponding to the minimum number of hours required for the transition.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 4</li>
<li>1 ≤ <b>n, m</b> ≤ 500</li>
<li>1 ≤ <b>a</b>[i][j] ≤ 10<sup>6</sup></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
3
2 2
1 1
1 1
2 2
1 1
1 2
3 4
1 2 1 2
1 1 1 2
1 1 2 2

<b>Output</b>
0
1
2
</pre>

<h3>Explanation</h3>
<p><b>Example 1</b>. The wealth of all the snakes is already equal. So, no time is required for the transition.</p>

<p><b>Example 2</b>. At the end of the first hour, the wealth of snakes at cells (1, 1), (2,1) and (1, 2) will change from 1 to 2. Then, the wealth of all the snakes becomes equal, and hence it required a total of 1 hour.</p>

<p><b>Example 3</b>. At the end of the first hour, the distribution of wealth of Snakeland will be as given below:</p>

<p>
<pre>
2 2 2 2
2 2 2 2
1 2 2 2
</pre>
</p>

<p>After the end of the second hour, the wealth of all the snakes will be equal. So, the answer is 2.</p>

</p>

