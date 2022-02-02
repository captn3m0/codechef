---
{"category_name":"easy","problem_code":"PLUSMUL","problem_name":"Add or Multiply","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"deadwing97","problem_tester":null,"date_added":"1-06-2017","tags":{"0":"deadwing97"},"time":{"view_start_date":1496516400,"submit_start_date":1496516400,"visible_start_date":1496516400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/mandarin/PLUSMUL.pdf">Mandarin Chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/russian/PLUSMUL.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKEL17/vietnamese/PLUSMUL.pdf">Vietnamese</a> as well.</h3>

<p>Hussain was feeling very bored in his physics class. Just hearing theorems and formulas about mechanics and electronics makes him utterly sick. </p>

<p>He was very bored so he just started writing random numbers separated by spaces on the pages of his physics book. For example, he wrote the sequence <b>1 2 3 </b> four times. Each one with different sequence of arithmetic operations between numbers, i.e. he wrote <b>{ (1+2+3) , (1+2*3) , (1*2+3) , (1*2*3) } </b>.
</p>

<p>He wondered if he wrote a sequence of <b>N</b> positive integers, separated by question marks <b>?</b>. Each question mark may stand for a plus sign <b>+</b> or a multiplication sign <b>*</b>. </p>

<p> 
Hussain knows that there are possible <b>2^(n-1)</b> different expressions. He wondered if he wrote each expression and computed their values and summed up all the values. With what value he will end up with? Since answer may be huge, output it modulo <b>10^9+7</b>
</p>

<h3>Input</h3>
<ul>
<li>First line of the input contains a single integer <b>T</b> , denotes the number of testcases. The description of <b>T</b> test cases follow.</li>
<li>The first line of each testcase contains an integer <b>N</b> denoting how many numbers in the current expression. You may assume that all numbers in the current expression are separated by question marks, and each question mark stands for a plus sign or a multiplication sign. </li>
<li>The second line of each testcase contains <b>N</b> space separated integers, denoting integers in Hussain's expression.</li>
</ul>

<h3>Output</h3>
<p>For each testcase, output a single line containing the sum of results of all possible <b>2^(n-1)</b> different expressions considering that each question mark stands for a plus or a multiplication sign. </p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>500</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>100000</b></li>
<li>All numbers forming expressions are positive numbers less than <b>10<sup>9</sup></b></li>
<li>The sum of <b>n</b> over all test cases won't exceed <b>10<sup>6</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3
1 2 4
4
1 1 1 1

<b>Output:</b>
30
20
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> There can be following four expressions.
<pre>
1 + 2 + 4 = 7
1 + 2 * 4 = 9
1 * 2 + 4 = 6
1 * 2 * 4 = 8
</pre>

<p>
Total sum of results = 30
</p>