---
{"category_name":"medium","problem_code":"PALINDR","problem_name":"Lucy and Palindromes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":"1 - 2","source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"Rubanenko","date_added":"14-10-2013","tags":{"0":"combinatorics","1":"easy","2":"ltime06","3":"treap","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/PALINDR","time":{"view_start_date":1385283849,"submit_start_date":1385283849,"visible_start_date":1385283849,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/LTIME06/russian/PALINDR.pdf">here</a></h3>
<p>Lucy had recently learnt about palindromes. As you may probably know, palindrome is a string that reads the same way in the both directions, that is left-to-right or right-to-left. For example, strings "radar" and "level" are palindromes, at the same time, strings "hello" and "world" are not.</p>
<p>There is a string of <b>N</b> latin letters. Lucy asks you to answer the following queries:<br /><br />
1 <b>L</b> <b>R</b> - reverse the substring from the <b>L</b>-th to the <b>R</b>-th character (1-indexed), inclusive.<br /><br />
2 <b>L</b> <b>R</b> - calculate the number of distinct palindromes that can be obtained by permutting characters from the <b>L</b>-th to the <b>R</b>-th in the arbitrary order (ignoring all other characters of the string).<br /></p>
<h3>Input</h3>
<p>The first line of input consists of two space separated integers <b>N</b> and <b>M</b> - the length of the string and the number of queries.<br />
The second line consists of <b>N</b> characters from the set {'<b>a</b>', '<b>b</b>', '<b>c</b>', '<b>d</b>', '<b>e</b>', '<b>f</b>', '<b>g</b>', '<b>h</b>', '<b>i</b>', '<b>j</b>'}, describing the string. Then, <b>M</b> queries follow. Each query is given in one of the following forms:<br /><br />
1 <b>L</b> <b>R</b> - reverse the substring from the <b>L</b>-th to the <b>R</b>-th character.<br /><br />
2 <b>L</b> <b>R</b> - calculate the number of distinct palindromes that can be obtained by permutting characters from the <b>L</b>-th to the <b>R</b>-th in the arbitrary order, modulo <b>10<sup>9</sup>+7</b> (ignoring all other characters).</p>
<h3>Output</h3>
<p>For every query of the type <b>2</b> output the answer on the separate line.</p>
<h3>Example</h3>
<pre><b>Input:</b>
7 4
abacaba
2 1 7
2 2 3
1 1 2
2 2 3

<b>Output:</b>
3
0
1
</pre><h3>Scoring</h3>
<p>In all the subtasks, 1 &lt;= <b>L</b> &lt;= <b>R</b> &lt;= <b>N</b>.<br /><br />
Subtask 1 (33 points): 1 &lt;= <b>N</b> &lt;= 10, 1 &lt;= <b>M</b> &lt;= 1000<br /><br />
Subtask 2 (17 points): 1 &lt;= <b>N</b> &lt;= 1000, 1 &lt;= <b>M</b> &lt;= 1000<br /><br />
Subtask 3 (23 points): 1 &lt;= <b>N</b> &lt;= 4*10<sup>4</sup>, 1 &lt;= <b>M</b> &lt;= 4*10<sup>4</sup><br /><br />
Subtask 4 (27 points): 1 &lt;= <b>N</b> &lt;= 10<sup>5</sup>, 1 &lt;= <b>M</b> &lt;= 10<sup>5</sup><br /><br />
Time limit for subtasks 1 and 2 is 1 sec, and for the subtasks 3 and 4 it's equal to 2 sec.</p>
