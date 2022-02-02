---
{"category_name":"medium","problem_code":"CARLOS","problem_name":"Inversion sorting","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"xellos0","problem_tester":"xcwgf666","date_added":"25-01-2015","tags":{"0":"april15","1":"dynamic","2":"easy","3":"prefix","4":"xellos0"},"editorial_url":"http://discuss.codechef.com/problems/CARLOS","time":{"view_start_date":1428917400,"submit_start_date":1428917400,"visible_start_date":1428917400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/mandarin/CARLOS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL15/russian/CARLOS.pdf">Russian</a>.</h3>
<p>
The Aa'ugld alphabet consists of <b>M</b> letters, which we'll denote by integers from <b>1</b> to <b>M</b> in alphabetical order - the smaller number a letter has, the earlier it appears in the alphabet. Since the author of this alphabet wasn't very creative, many letters can be transformed to other ones using some simple operations, which we'll call "inversions".
</p>
<p>
You're given a list of possible operations. The list isn't exhaustive, since any two inversions can be combined to produce a new inversion. Specifically, if there is an inversion that transforms a letter <tt><b>x</b></tt> to a letter <tt><b>y</b></tt> and an inversion that transforms the letter <tt><b>y</b></tt> to a letter <tt><b>z</b></tt>, you may assume that there's also an inversion that transforms the letter <tt><b>x</b></tt> to the letter <tt><b>z</b></tt>. In short, "inversion" operations are transitive.
</p>
<p>
Combining any inversion with itself produces identity - an operation that transforms any letter to itself. (That's where the name "inversion" comes from - an operation that's its own inverse.) Therefore, if there's an inversion that transforms a letter <tt><b>x</b></tt> to a letter <tt><b>y</b></tt>, then there's also an inversion that transforms the letter <tt><b>y</b></tt> to the letter <tt><b>x</b></tt>.
</p>
<p>
There's a long word <b>W</b> with <b>N</b> letters. You should transform some of these letters to other ones in order to make the letters of <b>W</b> sorted in alphabetical order. Is it possible at all? If it is, what's the minimum number of letters that should be transformed?
</p>
<h3>Input</h3>
<p><ul>
<li>
The first line of the input contains an integer <b>T</b> - the number of test cases.
</li>
<li>
The first line of each test case contains three integers <b>M</b>, <b>K</b> and <b>N</b>.
</li>
<li>
The following <b>K</b> lines each contain two integers <b>x</b> and <b>y</b>, denoting an inversion that transforms letter <b>x</b> to letter <b>y</b>.
</li>
<li>
The last line of each test case contains <b>N</b> integers <b>a<sub>i</sub></b> - letters of the word <b>W</b>.
</li>
</ul>
</p>
<h3>Output</h3>
<p>
For each test case, output a single line containing <b>-1</b> if it's impossible to make the letters of <b>W</b> sorted in alphabetical order. Otherwise, output the smallest number of letters that need to be transformed to achieve that.
</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>200000</b></li>
<li><b>0</b> ≤ <b>K</b> ≤ <b>M(M-1)/2</b></li>
<li><b>1</b> ≤ <b>x,y</b> ≤ <b>M</b></li>
<li>all unordered pairs <b>(x,y)</b> will be distinct</li>
<li><b>1</b> ≤ <b>a<sub>i</sub></b> ≤ <b>M</b></li>
</ul>
</p>
<p>Subtask 1 (18 points):</p>
<ul>
<li><b>1 ≤ M ≤ 10</b></li>
<li><b>1 ≤ N ≤ 20</b></li>
</ul>

<p>Subtask 2 (60 points):</p>
<ul>
<li><b>1 ≤ M ≤ 50</b></li>
<li><b>1 ≤ N ≤ 20000</b></li>
</ul>

<p>Subtask 3 (22 points):</p>
<ul>
<li><b>1 ≤ M ≤ 200</b></li>
<li><b>1 ≤ N ≤ 200000</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3 3 3
1 2
2 3
3 1
3 2 1
3 1 2
2 3
2 1
<b>Output:</b>
2
-1
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> It's possible to transform the first letter to <tt>1</tt> and the last letter to <tt>2</tt>. The resulting word has letters <tt>1 2 2</tt>.</p>
<p><b>Example case 2.</b> This word can only be transformed to <tt>2 1</tt> or <tt>3 1</tt>.</p>
