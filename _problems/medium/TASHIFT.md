---
{"category_name":"medium","problem_code":"TASHIFT","problem_name":"Shift The String","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"tuananh93","problem_tester":null,"date_added":"3-07-2014","tags":{"0":"kmp","1":"ltime14","2":"medium","3":"strings","4":"tuananh93"},"editorial_url":"http://discuss.codechef.com/problems/TASHIFT","time":{"view_start_date":1406452500,"submit_start_date":1406452500,"visible_start_date":1406452500,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME14/mandarin/TASHIFT.pdf">Mandarin Chinese </a>.</h3>

<p> </p>
<p>You are given two strings <b>A</b> and <b>B</b> of the same length. Each string contains <b>N</b> Lower case Latin character (from 'a' to 'z'). A shift operation will remove the first character of a string and add the same character at the end of that string. For example after you perform a shift operation on a string 'abcd', the new string will be 'bcda'. If you perform this operation two times, the new string will be 'cdab'. You need to use some (maybe none) shift operations on the string <b>B</b> to maximize the length of the longest common prefix of <b>A</b> and <b>B</b>. If more than one result can be found pick the one that use smallest number of shift operations.</p>


<h3>Input</h3>
<p>The first line of the input contains a single integer <b>N</b>. The second and the third lind contains the string <b>A</b> and <b>B</b> respectively.</p>
<p> </p>

<h3>Output</h3>
<p>Contains a single integer which is the number of shift operations.</p>
<p> </p>

<h3>Constraints</h3>
<p>30 points:</p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>5000</b></li>
</ul>

<p>30 points:</p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>4</sup></b></li>
</ul>

<p>40 points:</p>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b></li>
</ul>
<p></p>
<h3>Example</h3>
<pre><b>Input:</b>
5
ccadd
bddcc

<b>Output:</b>
3

</pre>
<p> </p>