---
{"category_name":"easy","problem_code":"COMPILER","problem_name":"Compilers and parsers","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kuruma","problem_tester":"xcwgf666","date_added":"21-01-2014","tags":{"0":"ad","1":"easy","2":"kuruma","3":"may14"},"editorial_url":"http://discuss.codechef.com/problems/COMPILER","time":{"view_start_date":1399887000,"submit_start_date":1399887000,"visible_start_date":1399887000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/COMPILER.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/COMPILER.pdf">Russian</a>.</h3>
<p>Lira is now very keen on compiler development. :) </p>
<p>She knows that one of the most important components of a compiler, is its parser.</p>
<p>A parser is, in simple terms, a software component that processes text, and checks it's semantic correctness, or, if you prefer, if the text is properly built.</p>
<p>As an example, in declaring and initializing an integer, in C/C++, you can't do something like:</p>
<p> int = x ;4</p>
<p>as the semantics of such statement is incorrect, as we all know that the datatype must precede an identifier and only afterwards should come the equal sign and the initialization value, so, the corrected statement should be:</p>
<p> int x = 4;</p>
<p>Today, Lira is concerned with an abstract instruction which is composed of the characters "&lt;" and ">" , which she will use on the design of her language, L++ :D.</p>
<p>She is using it as an abstraction for generating XML code Tags in an easier fashion and she understood that, for an expression to be valid, a "&lt;" symbol must always have a corresponding ">" character somewhere (not necessary immediately) after it. Moreover, each ">" symbol should correspond to exactly one "&lt;" symbol.</p>
<p>So, for instance, the instructions:</p>
<p> <b> &lt;&lt;>> </b></p>
<p><b> &lt;> </b></p>
<p><b> &lt;>&lt;> </b></p>
<p>are all valid. While:</p>
<p><b> >> </b></p>
<p><b> >&lt;>&lt; </b></p>
<p>are not.</p>
<p>Given some expressions which represent some instructions to be analyzed by Lira's compiler, you should tell the length of the longest prefix of each of these expressions that is valid, or <b>0</b> if there's no such a prefix.</p>
<h3>Input</h3>
<p>Input will consist of an integer <b>T</b> denoting the number of test cases to follow.</p>
<p>Then, <b>T</b> strings follow, each on a single line, representing a possible expression in L++.</p>
<h3>Output</h3>
<p>For each expression you should output the length of the longest prefix that is valid or <b>0</b> if there's no such a prefix. </p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b>500</b></li>
<li><b>1</b> ≤ <b>The length of a single expression</b> ≤ <b>10<sup>6</sup></b></li>
<li>The total size all the input expressions is no more than <b>5*10<sup>6</sup></b></li>

<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
&lt;&lt;>>
>&lt;
&lt;>>>
<b>Output:</b>
4
0
2

</pre><p> </p>
