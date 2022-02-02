---
{"category_name":"easy","problem_code":"EQUALITY","problem_name":"Equality","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"stzgd","date_added":"16-03-2015","tags":{"0":"cook57","1":"easy","2":"kostya_by","3":"linear","4":"math"},"editorial_url":"http://discuss.codechef.com/problems/EQUALITY","time":{"view_start_date":1429470000,"submit_start_date":1429470000,"visible_start_date":1429470000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK57/mandarin/EQUALITY.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK57/russian/EQUALITY.pdf">Russian</a> as well.</h3>
<p><meta charset="utf8" /></p>
<p>An <i>equation</i> is an equality containing one or more variables. Solving the equation consists of determining which values of the variables make the equality true. In this situation, variables are also known as unknowns and the values which satisfy the equality are known as solutions. An equation differs from an identity in that an equation is not necessarily true for all possible values of the variable.</p>
<p>There are many types of equations, and they are found in all areas of mathematics. For instance, a linear equation is an algebraic equation in which each term is either a constant or the product of a constant and (the first power of) a single variable.</p>
<p>In this problem we'll consider quite a special kind of systems of linear equations. To be more specific, you are given a system of <b>N</b> linear equations of the following form:</p>
<ul>
<li><b>x<sub>2</sub></b> + <b>x<sub>3</sub></b> + ... + <b>x<sub>N - 1</sub></b> + <b>x<sub>N</sub></b> = <b>a<sub>1</sub></b></li>
<li><b>x<sub>1</sub></b> + <b>x<sub>3</sub></b> + ... + <b>x<sub>N - 1</sub></b> + <b>x<sub>N</sub></b> = <b>a<sub>2</sub></b></li>
<li>...</li>
<li><b>x<sub>1</sub></b> + <b>x<sub>2</sub></b> + ... + <b>x<sub>N - 2</sub></b> + <b>x<sub>N</sub></b> = <b>a<sub>N - 1</sub></b></li>
<li><b>x<sub>1</sub></b> + <b>x<sub>2</sub></b> + ... + <b>x<sub>N - 2</sub></b> + <b>x<sub>N - 1</sub></b> = <b>a<sub>N</sub></b></li>
</ul>
<p>In other words, <b>i</b>'th equation of the system consists of the sum of all the variable <b>x<sub>1</sub></b>, ..., <b>x<sub>N</sub></b> except <b>x<sub>i</sub></b> to the left of the equality sign and the constant <b>a<sub>i</sub></b> to the right of the equality sign.</p>
<p>One can easily prove, that a system of linear equations as described above always have exactly one solution in case <b>N</b> is greater than one. Your task is to find the solution of the system(such a sequence <b>x<sub>1</sub></b>, <b>x<sub>2</sub></b>, ..., <b>x<sub>N</sub></b>, that turns each of the equations into equality). It's guaranteed, that the solution of the system is a sequence consisting only of integers from the range [1, 10<sup>8</sup>].</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of the test case description contains one integer <b>N</b> denoting the number of equations in the system.</p>
<p>The second line contains <b>N</b> integers <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, ..., <b>a<sub>N</sub></b> denoting the constants defining a system of linear equations, that you are asked to solve.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing <b>N</b> integers: a sequence <b>x<sub>1</sub></b>, <b>x<sub>2</sub></b>, ..., <b>x<sub>N</sub></b>, which is the solution of the system.</p>
<h3>Constraints</h3>
<li>1 ≤ <b>T</b> ≤ 25000</li>
<li>2 ≤ <b>N</b> ≤ 50000</li>
<li>1 ≤ <b>a<sub>i</sub></b> ≤ 5 × 10<sup>12</sup></li>
<li>1 ≤ <b>x<sub>i</sub></b> ≤ 10<sup>8</sup></li>
<li>The sum of all <b>N</b> in the input is not greater than 50000</li>
<h3>Example</h3>
<pre><b>Input:</b>
2
3
9 6 5
4
13 11 10 8

<b>Output:</b>
1 4 5 
1 3 4 6 

</pre><h3>Explanation</h3>
<p>
	In the first test case, we can simply replace the variables with the values from the correct output to make sure, that all the conditions are satisfied: </p>
<ul>
<li><b>x<sub>2</sub></b> + <b>x<sub>3</sub></b> = 4 + 5 = 9 = <b>a<sub>1</sub></b></li>
<li><b>x<sub>1</sub></b> + <b>x<sub>3</sub></b> = 1 + 5 = 6 = <b>a<sub>2</sub></b></li>
<li><b>x<sub>1</sub></b> + <b>x<sub>2</sub></b> = 1 + 4 = 5 = <b>a<sub>3</sub></b></li>
</ul>

<p>
	In the second test case, we can repeat the same process to make sure, that all the conditions are satisfied: </p>
<ul>
<li><b>x<sub>2</sub></b> + <b>x<sub>3</sub></b> + <b>x<sub>4</sub></b> = 3 + 4 + 6 = 13 = <b>a<sub>1</sub></b></li>
<li><b>x<sub>1</sub></b> + <b>x<sub>3</sub></b> + <b>x<sub>4</sub></b> = 1 + 4 + 6 = 11 = <b>a<sub>2</sub></b></li>
<li><b>x<sub>1</sub></b> + <b>x<sub>2</sub></b> + <b>x<sub>4</sub></b> = 1 + 3 + 6 = 10 = <b>a<sub>3</sub></b></li>
<li><b>x<sub>1</sub></b> + <b>x<sub>2</sub></b> + <b>x<sub>3</sub></b> = 1 + 3 + 4 = 8 = <b>a<sub>4</sub></b></li>
</ul>

