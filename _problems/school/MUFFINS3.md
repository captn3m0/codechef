---
{"category_name":"school","problem_code":"MUFFINS3","problem_name":"Packaging Cupcakes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":"anton_lunyov","date_added":"26-11-2012","tags":{"0":"cakewalk","1":"cook29","2":"pieguy","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/MUFFINS3","time":{"view_start_date":1356288316,"submit_start_date":1356288316,"visible_start_date":1356288262,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Now that Chef has finished baking and frosting his cupcakes, it's time to package them. Chef has <b>N</b> cupcakes, and needs to decide how many cupcakes to place in each package. Each package must contain the same number of cupcakes. Chef will choose an integer <b>A</b> between 1 and <b>N</b>, inclusive, and place exactly <b>A</b> cupcakes into each package.  Chef makes as many packages as possible. Chef then gets to eat the remaining cupcakes. Chef enjoys eating cupcakes very much. Help Chef choose the package size <b>A</b> that will let him eat as many cupcakes as possible.
</p>
<h3>Input</h3>
<p>
Input begins with an integer <b>T</b>, the number of test cases. Each test case consists of a single integer <b>N</b>, the number of cupcakes.
</p>
<h3>Output</h3>
<p>
For each test case, output the package size that will maximize the number of leftover cupcakes. If multiple package sizes will result in the same number of leftover cupcakes, print the largest such size.
</p>
<h3>Constraints</h3>
<ul>
<li>1 &le; <b>T</b> &le; 1000</li>
<li>2 &le; <b>N</b> &le; 100000000 (10<sup>8</sup>)</li>
</ul>
<h3>Sample Input</h3>
<pre>2
2
5
</pre><h3>Sample Output</h3>
<pre>2
3
</pre><h3>Explanation</h3>
<p>
In the first test case, there will be no leftover cupcakes regardless of the size Chef chooses, so he chooses the largest possible size.  In the second test case, there will be 2 leftover cupcakes.
</p>
