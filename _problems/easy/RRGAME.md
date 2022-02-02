---
{"category_name":"easy","problem_code":"RRGAME","problem_name":"Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"utkarsh_lath","date_added":"12-09-2013","tags":{"0":"Rubanenko","1":"cook38","2":"medium"},"editorial_url":"http://discuss.codechef.com/problems/RRGAME","time":{"view_start_date":1379874600,"submit_start_date":1379874600,"visible_start_date":1379874600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
You are playing following game: given an array <b>A</b> of <b>N</b> natural numbers. All numbers in the array <b>A</b> are at most <b>M</b>. On every turn you may pick any two different elements <b>A<sub>i</sub></b> and <b>A<sub>j</sub></b> (<b>i</b>≠<b>j</b>), such that <b>A<sub>i</sub>, A<sub>j</sub> ≤ M</b>, and add <b>K</b> to both. The game ends when you are not able to continue. That is, when there is no pair <b>(i,j)</b> left such that both of them are less than equal to <b>M</b>.</p>
<p>
<b>Let's call two arrays <i>different</i> if the sum of all their elements is different</b>. When the game ends, you note down the final array <b>A</b>. How many <i>different</i> final arrays can you have.
</p>
<h3>Input</h3>
<p>
The first line contains three integers <b>N</b>, <b>M</b> and <b>K</b>. <b>N</b> elements of the array follow in the next line.
</p>
<h3>Output</h3>
<p>
Output single integer - answer for the given problem modulo <b>10<sup>9</sup>+7</b>.</p>
<p><h3>Constraints</h3>
<ul><b></b></ul></p>
<li> 1 ≤ N ≤ 10<sup>5</sup>
</li><li> 1 ≤ M,K ≤ 10<sup>12</sup>
</li><li> 1 ≤ A<sub>i</sub> ≤ M

<p><h3>Example</h3>
<pre><b>Input:</b>
3 3 2
1 2 3
<b>Output:</b>
2
</pre><h3>Explanation</h3>
</p><p>
All possible sums are 14 and 10. You can get them by, for example, these arrays:<br /><br />
<b>A=(5, 4, 5),</b><br /><br />
<b>A=(1, 4, 5)</b><br /><br />
The above arrays are different because their sums are different.</p>
</li>