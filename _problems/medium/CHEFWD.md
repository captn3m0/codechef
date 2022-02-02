---
{"category_name":"medium","problem_code":"CHEFWD","problem_name":"Chef World","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"div_adm","problem_tester":"laycurse","date_added":"3-05-2012","tags":{"0":"div_adm","1":"fibonacci","2":"maths","3":"matrix","4":"sep12"},"editorial_url":"http://discuss.codechef.com/problems/CHEFWD","time":{"view_start_date":1347356032,"submit_start_date":1347356032,"visible_start_date":1347355800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
Chef Ciel lives in a long street which can be thought as of x-axis of coordinate system.
Her house is at coordinate 0 whereas her restaurant is situated at coordinate <b>N</b>.
Usually Ciel goes from home to restaurant taking a step of size 1 or 2 in forward direction.
We all know how much Chef loves Fibonacci numbers.
</p>

<p>
But today, Ciel being little casual stepped in wrong direction on her way to her restaurant exactly once and of course she did not set her foot wrong at home.
Now she wonders how many ways she can reach her restaurant provided that she stepped wrong once but not at home.
<br> She does not go past her restaurant because it is altogether different world and once she reaches her restaurant she stops.
</p>
</p>


<p>
For example, if <b>N</b> is <b>3</b> then<br>
<b>0</b> <span style="color:gray">-></span> <b>1</b> <span style="color:gray">-></span> <b>-1</b> <span style="color:gray">-></span> <b>0</b> <span style="color:gray">-></span> <b>1</b> <span style="color:gray">-></span> <b>3</b>,<br>
<b>0</b> <span style="color:gray">-></span> <b>2</b> <span style="color:gray">-></span> <b>1</b> <span style="color:gray">-></span> <b>3</b><br>
are some possible ways where as<br>
<b>0</b> <span style="color:gray">-></span> <b>-1</b> <span style="color:gray">-></span> <b>1</b> <span style="color:gray">-></span> <b>3</b>, (She did not set her foot wrong at her home)<br>
<b>0</b> <span style="color:gray">-></span> <b>1</b> <span style="color:gray">-></span> <b>3</b>, (She sets her foot wrong direction exactly once)<br>
<b>0</b> <span style="color:gray">-></span> <b>1</b> <span style="color:gray">-></span> <b>0</b> <span style="color:gray">-></span> <b>3</b>, (Her steps are always size 1 or 2)<br>
<b>0</b> <span style="color:gray">-></span> <b>1</b> <span style="color:gray">-></span> <b>2</b> <span style="color:gray">-></span> <b>4</b> <span style="color:gray">-></span> <b>3</b>, (She does not go past her restaurant)<br>
<b>0</b> <span style="color:gray">-></span> <b>1</b> <span style="color:gray">-></span> <b>2</b> <span style="color:gray">-></span> <b>3</b> <span style="color:gray">-></span> <b>2</b> <span style="color:gray">-></span> <b>3</b> (Once she reaches her restaurant, she stops)<br>
are not.<br> 

<h3>Input</h3>
<p>
First line of input contains <b>T</b>, number of test cases which is at most 10000.
Then <b>T</b> lines follows each containing a positive integer <b>N</b> which is at most 1000000000000000 (10<sup>15</sup>).
</p>

<h3>Output</h3>
<p>
Number of ways Ciel can reach her restaurant modulo 1000000007 (10<sup>9</sup>+7).
</p>

<pre>
<b>Sample Input:</b>
2
3
4

<b>Sample Output:</b>
18
44
</pre>