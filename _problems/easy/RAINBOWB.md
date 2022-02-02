---
{"category_name":"easy","problem_code":"RAINBOWB","problem_name":"Chef and Rainbow Array - 2","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"xcwgf666","date_added":"17-03-2014","tags":{"0":"berezin","1":"combinations","2":"math","3":"sept14","4":"simple"},"editorial_url":"http://discuss.codechef.com/problems/RAINBOWB","time":{"view_start_date":1410773400,"submit_start_date":1410773400,"visible_start_date":1410773400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/mandarin/RAINBOWB.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/russian/RAINBOWB.pdf">Russian</a>.</h3>
<p> </p>
<p>Chef loves arrays. But he really loves a specific kind of them - <i>Rainbow Arrays</i>. </p>
<p>The array is a <i>Rainbow Array</i> if it has such a structure:</p>
<ul>
<li>The first <b>a<sub>1</sub></b> elements equal to <b>1</b>. </li>
<li>The next <b>a<sub>2</sub></b> elements equal to  <b>2</b>. </li>
<li>The next <b>a<sub>3</sub></b> elements equal to  <b>3</b>. </li>
<li>The next <b>a<sub>4</sub></b> elements equal to  <b>4</b>. </li>
<li>The next <b>a<sub>5</sub></b> elements equal to  <b>5</b>. </li>
<li>The next <b>a<sub>6</sub></b> elements equal to  <b>6</b>. </li>
<li>The next <b>a<sub>7</sub></b> elements equal to  <b>7</b>. </li>
<li>The next <b>a<sub>6</sub></b> elements equal to  <b>6</b>. </li>
<li>The next <b>a<sub>5</sub></b> elements equal to  <b>5</b>. </li>
<li>The next <b>a<sub>4</sub></b> elements equal to  <b>4</b>. </li>
<li>The next <b>a<sub>3</sub></b> elements equal to  <b>3</b>. </li>
<li>The next <b>a<sub>2</sub></b> elements equal to  <b>2</b>. </li>
<li>The next <b>a<sub>1</sub></b> elements equal to  <b>1</b>. </li>
<li><b>a<sub>i</sub></b> is a positive integer, the variables with the same index (<b>a<sub>1</sub></b> in the first statement and <b>a<sub>1</sub></b> in the last one, for example) are equal. </li>
<li>There are no any other elements in array. </li>
</ul>

<p>
 For example, {<b>1,1,2,2,2,3,4,5,5,6,7,7,7,6,5,5,4,3,2,2,2,1,1</b>} is a <i>Rainbow Array</i>.<br />
The array {<b>1,2,3,4,5,6,7,6,6,5,4,3,2,1</b>} is not a <i>Rainbow Array</i>, because the sizes of the blocks with the element <b>6</b> are different. </p>
<p>Please help Chef to count the number of different <i>Rainbow Arrays</i> that contain exactly <b>N</b> elements. </p>
<h3>Input</h3>
<p>The first line contains a single integer <b>N</b>. </p>
<h3>Output</h3>
<p>Output the number of different Rainbow Arrays with <b>N</b> elements, modulo <b>10^9+7</b>. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b></li>


</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input #1:</b>
10 

<b>Output #1:</b>
0

<pre><b>Input #2:</b>
13

<b>Output #2:</b>
1

<pre><b>Input #3:</b>
14

<b>Output #3:</b>
1

<pre><b>Input #4:</b>
15

<b>Output #4:</b>
7

</pre><p> </p>
</pre></pre></pre>