---
{"category_name":"school","problem_code":"TWEED","problem_name":"Tweedle-Dee and Tweedle-Dum ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"kingofnumbers","date_added":"21-07-2016","tags":{"0":"alei","1":"cakewalk","2":"cook73","3":"game","4":"parity"},"editorial_url":"http://discuss.codechef.com/problems/TWEED","time":{"view_start_date":1471804200,"submit_start_date":1471804200,"visible_start_date":1471804200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK73/mandarin/TWEED.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK73/russian/TWEED.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK73/vietnamese/TWEED.pdf">Vietnamese</a> as well.</h3>

<p>Tweedle-Dee and Tweedle-Dum are in a fierce battle playing even-odd nim. This novel game is played on <b>N</b> heaps. Heap <b>i</b> contains <b>a<sub>i</sub></b> stones.
</p>

<p>Like normal nim, Tweedle-Dee and Tweedle-Dum alternate taking a positive number of stones from any single one of the heaps, and the player that can't remove stones loses. However Tweedle-Dee can only take an even number of stones, and Tweedle-Dum can only take an odd number of stones.</p>

<p>Alice doesn't want to wait until the end of the game, so she asks you to determine the winner of the game. Remember that Tweedle-Dee and Tweedle-Dum are legendary grandmasters of combinatorial games, so they always play optimally.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each case consists of an integer <b>N</b> the number of heaps, and a string <b>P</b> the player that starts the game. String <b>P</b> is equal to "Dee" if Tweedle-Dee goes first, or "Dum" if  Tweedle-Dum goes first.</p>
<p>The second line of each case contains <b>N</b> space separated integers <b>a<sub>i</sub></b> the number of stones of the i-th heap.</p>

<h3>Output</h3>
<p>For each test case, output a single line containing either "Dee" if Twedle-Dee winns the game or "Dum" otherwise.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>a<sub>i</sub></b> ≤ <b>50</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b><tt>
1
2 Dee
2 2
</tt>
<b>Output:</b><tt>
Dum</tt>
</pre>

<h3>Explanation</h3>
<p>Tweedle-Dee takes two stones from any of the heaps leaving just one non empty heap, next Tweedle-Dum takes one stone and the game finishes.</p>
