---
{"category_name":"hard","problem_code":"PRIMEDST","problem_name":"Prime Distance On Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"cgy4ever","problem_tester":"white_king","date_added":"12-06-2013","tags":{"0":"aug13","1":"cgy4ever","2":"dfs","3":"fft","4":"graph","5":"hard"},"editorial_url":"http://discuss.codechef.com/problems/PRIMEDST","time":{"view_start_date":1376299800,"submit_start_date":1376299800,"visible_start_date":1376299800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Problem description.</h3>
<p>You are given a tree. If we select 2 distinct nodes uniformly at random, what's the probability that the distance between these 2 nodes is a prime number?</p>
<h3>Input</h3>
<p>The first line contains a number <b>N</b>: the number of nodes in this tree.<br />
The following <b>N</b>-1 lines contain pairs a[i] and b[i], which means there is an edge with length 1 between a[i] and b[i].</p>
<h3>Output</h3>
<p>Output a real number denote the probability we want.<br />
You'll get accept if the difference between your answer and standard answer is no more than 10^-6.</p>
<h3>Constraints</h3>
<p><b>2</b> ≤ <b>N</b> ≤ <b>50,000</b><br /><br />
The input must be a tree.</p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1 2
2 3
3 4
4 5

<b>Output:</b>
0.5
</pre><h3>Explanation</h3>
<p>We have C(5, 2) = 10 choices, and these 5 of them have a prime distance:<br /><br />
1-3, 2-4, 3-5: 2<br /><br />
1-4, 2-5: 3<br /><br />
Note that 1 is not a prime number.<br /></p>
