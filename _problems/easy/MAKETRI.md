---
{"category_name":"easy","problem_code":"MAKETRI","problem_name":"Chef and Triangles","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"1 - 3","source_sizelimit":50000,"problem_author":"kevind","problem_tester":"mgch","date_added":"14-01-2017","tags":{"0":"kevind"},"time":{"view_start_date":1487496600,"submit_start_date":1487496600,"visible_start_date":1487496600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/mandarin/MAKETRI.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/russian/MAKETRI.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/FEB17/vietnamese/MAKETRI.pdf">Vietnamese</a> as well.</h3>

<p>Chef is long been involved in cooking recipes. He has now got bored with it, and has to decided to play with food instead of cooking it up.</p>

<p>He has already selected <b>N</b> spaghetti strands for his dish. He has to select just one extra strand such that this strand's length makes a non-degenerate <a href="https://en.wikipedia.org/wiki/Triangle">triangle</a> with some of the two other strands already present in the dish. A triangle formed by three collinear points is called a degenerate triangle. The length of the strand to be selected must be an integer in the range <b>[L, R]</b> (both inclusive).</p> 

<p>
Formally, let array <b>L</b> denote the lengths of <b>N</b> strands, then the extra strand of length <b>X</b> can be selected if there exists two different indices <b>i, j (i ≠ j)</b> such that there can be made a triangle of side lengths <b>L<sub>i</sub>, L<sub>j</sub></b> and <b>X</b>.</p>

<p>Can you help him find the number of possible valid lengths of the extra strand?</p>

<p>Note again that three collinear points are not considered to form a triangle.</p>

<h3>Input</h3>
<p>First line of the input contains three space separated <b>N</b>, <b>L</b> and <b>R</b>, denoting the number of strands already present in the dish and the range of the length of the new strand to be selected respectively.</p>
<p>The next line contains <b>N</b> space separated integers, where the <b>i</b>-th integer <b>L<sub>i</sub></b> denotes the length of the <b>i</b>-th strand.</p>

<h3>Output</h3>
<p>Output a single line corresponding to the answer of the problem.</p>

<h3>Constraints</h3>
<ul>
<li><b>2</b> ≤ <b>N</b><b> ≤ 10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>10<sup>18</sup></b></li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b> ≤ <b>10<sup>18</sup></b></li>
</ul>

<h3>Subtasks</h3>
<p>
<b>Subtask #1 (10 points):</b>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>10<sup>6</sup></b></li>
</ul> 
</p>

<p>
<b>Subtask #2 (30 points):</b>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>10<sup>18</sup></b></li>
</ul> 
</p>

<p>
<b>Subtask #3 (60 points):</b>
<ul>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>10<sup>18</sup></b></li>
</ul> 
</p>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>5 1 4
1 2 3 4 5</tt>

<b>Output:</b>
<tt>3</tt>
</pre>

<h3>Explanation</h3>
<p>If Chef chooses the strand of length 1, he can't form a triangle using this strand and the any of the pair of strands of length 1, 2, 3, 4, 5. However, for each of the extra strand of length 2, 3, 4, one can find at least one pair of strands such that those pair of strands and the extra strand makes a triangle. So, the answer will be 3.</p>