---
{"category_name":"easy","problem_code":"NEO01","problem_name":"Chef and the Feast","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"neo1tech9_7","problem_tester":null,"date_added":"13-05-2017","tags":{"0":"neo1tech9_7"},"time":{"view_start_date":1497259800,"submit_start_date":1497259800,"visible_start_date":1497259800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/JUNE17/russian/NEO01.pdf">Russian</a>.</h3>

<p>Chef has prepared a feast with <b>N</b> dishes for you. You like Chef's cooking, and so you want to eat all the dishes he has prepared for you. You are also given an array <b>A</b> of size <b>N</b>, where <b>A<sub>i</sub></b> represents the happiness you get by eating the i-th dish.You will eat all the dishes in a series of steps. In each step, you pick a non empty subset of the remaining dishes and eat them. The happiness you get from eating these dishes is the size of the subset multiplied by the sum of the individual happiness from the dishes in the subset. You want to maximize the happiness you get from the entire feast, which is the sum of happiness in each step.</p>

<h3>Input</h3>
<p> The first line contains T, the number of test cases.</p>
<p>The first line of each test case contains a single integer <b>N</b>, denoting the number of dishes prepared by the Chef.</p>
<p>The second line of each test case contains contains <b>N</b> space-separated integers: <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the happiness gained by eating the dishes.</p>

<h3>Output</h3>
<p>Output a single number denoting the maximum happiness you can get from the feast.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>8</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>-10<sup>8</sup></b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>8</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
    <li>Subtask #1: <b>A<sub>i</sub></b> ≤ <b>0</b> (30 points)</li>
    <li>Subtask #2: Original Constraints (70 points) </li>
</ul>

<h3>Example 1</h3>
<pre><b>Input:</b>
1
3
-8 0 -2 

<b>Output:</b>
-10
</pre>

<h3>Example 2</h3>
<pre><b>Input:</b>
1
3
1 2 3

<b>Output:</b>
18
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> You can eat the first dish in the first step,
 the second dish in the second step and the third dish in the third step.
total happiness = 1*(-8) + 1*0 + 1*(-2) = -10</p>