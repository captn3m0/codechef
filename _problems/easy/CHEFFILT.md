---
{"category_name":"easy","problem_code":"CHEFFILT","problem_name":"Chef and Filters","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"xcwgf666","date_added":"8-10-2015","tags":{"0":"berezin","1":"dec15","2":"dynamic","3":"easy"},"editorial_url":"http://discuss.codechef.com/problems/CHEFFILT","time":{"view_start_date":1450085400,"submit_start_date":1450085400,"visible_start_date":1450085400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/mandarin/CHEFFILT.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/russian/CHEFFILT.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/vietnamese/CHEFFILT.pdf">Vietnamese</a> as well.</h3>


<p>Nobody outside the cooking community knows that Chef is a big fan of Chefgram™ — a social network where chefs and cooks upload their secret kitchen photos.
Recently Chef clicked a <em>beautiful</em> photo, which is represented using <b>10</b> pixels in a single row. Respecting Chefgram™'s boolean roots, every pixel is either white or black.
</p>
<p>
Chefgram™ has <b>N</b> filters. Every filter is a string containing <b>10</b> symbols. Every symbol is either <b>'+'</b> or <b>'-'</b>.
<ul>
<li>A <b>'+'</b> at the <b>i<sup>th</sup></b> position in a filter means that if Chef applies this filter to his photo, the <b>i<sup>th</sup></b> pixel will be <b>inverted</b>: it becomes black if it was originally white, and vice versa. </li>
<li>A <b>'-'</b> at the <b>i<sup>th</sup></b> position in a filter string means that if Chef applies this filter to his photo, the <b>i<sup>th</sup></b> pixel will remain <b>unchanged</b>.</li>
</ul>
</p>
<p>
Chef can apply as many filters as he wants from a list. He can pick any subset of filters and consequently apply them to a photo.
</p>
<p>
For example:
<ul>
<li>Imagine that Chef has a photo <b>"bbwwbbwwbb"</b> (where <b>'b'</b> stands for black and <b>'w'</b> stands for white).</li>
<li>He applies filters <b>"++--++--++"</b>, <b>"-+-+-+-+-+"</b>.</li>
<li>Applying the first filter will transform his picture to <b>"wwwwwwwwww"</b>. </li>
<li>Applying the second filter on the transformed picture will give Chef the picture <b>"wbwbwbwbwb"</b>.</li>
</ul>
</p>
<p>
<b>Even if Chefgram™ has two or more identical filters, they are still considered different!</b>
</p>
<p>
Chef is extremely interested in knowing how many <b>different subsets</b> of all the Chefgram™ filters can he apply to transform his photo into <b>10 black pixels</b>?
</p>

<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>T</b> — the number of test cases.</li>
<li>First line of each test case contains a string <b>S</b>. Each symbol is either <b>'b'</b> or <b>'w'</b>. This is Chef's photo.</li>
<li>Second line of each test case contains a single integer <b>N</b> — the number of Chefgram™ filters.</li>
<li>Each of the next <b>N</b> lines contains a single string <b>F<sub>i</sub></b>, each symbol of which is either <b>'+'</b> or <b>'-'</b>. This string is the <b>i<sub>th</sub></b> Chefgram™ filter.</li>
</ul>

<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing a single integer — answer to Chef's question modulo <b>10<sup>9</sup>+7</b>.</li>
</ul>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>|S|</b> = <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^5</b></li>
<li><b>|F<sub>i</sub>|</b> = <b>10</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask <b>1</b>: <b>T</b> ≤ <b>5</b>; <b>N</b> ≤ <b>20</b>; Points: <b>20</b></li>
<li>Subtask <b>2</b>: <b>T</b> ≤ <b>5</b>; <b>N</b> ≤ <b>10^3</b>; Points: <b>30</b></li>
<li>Subtask <b>3</b>: <b>T</b> ≤ <b>5</b>; <b>N</b> ≤ <b>10^5</b>; Points: <b>50</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
wwwwwwwwww
3
+-+-+-+-+-
----------
+---------
wbwbwbwbwb
3
+-+-+-+-+-
+-+-------
----+-+-+-
bbbbbbbbbb
2
----------
----------

<b>Output:</b>
0
2
4
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> There is no filter or combination of filters transforming the picture to whole black. </p>
<p><b>Example case 2.</b> Chef can either apply the first filter (and invert all whites) or apply the second and third filters in any order.</p>
<p><b>Example case 3.</b> Picture is already fully black, and we have two <b>different</b> identity filters. Chef can either apply the <b>empty</b> subset of filters, the first filter only, the second filter only, or both.</p>