---
{"category_name":"school","problem_code":"ALPHABET","problem_name":"Studying Alphabet","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"harshil7924","date_added":"6-08-2016","tags":{"0":"cakewalk","1":"implementation","2":"ltime39","3":"strings","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/ALPHABET","time":{"view_start_date":1472317200,"submit_start_date":1472317200,"visible_start_date":1472317200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME39/mandarin/ALPHABET.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME39/russian/ALPHABET.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME39/vietnamese/ALPHABET.pdf">Vietnamese</a> as well.</h3>


<p>Not everyone probably knows that Chef has younder brother Jeff. Currently Jeff learns to read.</p>

<p>He knows some subset of the letter of Latin alphabet. In order to help Jeff to study, Chef gave him a book with the text consisting of <b>N</b> words. Jeff can read a word iff it consists only of the letters he knows.</p>

<p>Now Chef is curious about which words his brother will be able to read, and which are not. Please help him!</p>

<h3>Input</h3>

<p>The first line of the input contains a lowercase Latin letter string <b>S</b>, consisting of the letters Jeff can read. Every letter will appear in <b>S</b> no more than once.</p>

<p>The second line of the input contains an integer <b>N</b> denoting the number of words in the book.</p>

<p>Each of the following <b>N</b> lines contains a single lowecase Latin letter string <b>W<sub>i</sub></b>, denoting the <b>i</b><sup>th</sup> word in the book.</p>

<h3>Output</h3>
<p>For each of the words, output <tt>"Yes"</tt> (without quotes) in case Jeff can read it, and <tt>"No"</tt> (without quotes) otherwise.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>26</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>|W<sub>i</sub>|</b> ≤ <b>12</b></li>
<li>Each letter will appear in <b>S</b> no more than once.</li>
<li><b>S, W<sub>i</sub></b> consist only of lowercase Latin letters.</li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1 (31 point)</b>: <b>|S|</b> = <b>1</b>, i.e. Jeff knows only one letter.</li>
<li><b>Subtask #2 (69 point)</b>	: no additional constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>act
2
cat
dog</tt>

<b>Output:</b>
<tt>Yes
No</tt>
</pre>

<h3>Explanation</h3>
<p>The first word can be read.</p>
<p>The second word contains the letters d, o and g that aren't known by Jeff.</p>