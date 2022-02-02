---
{"category_name":"easy","problem_code":"SEATSTR2","problem_name":"Sereja and Two Strings 2","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"furko","date_added":"11-10-2014","tags":{"0":"combinatorics","1":"march16","2":"medium","3":"sereja"},"editorial_url":"http://discuss.codechef.com/problems/SEATSTR2","time":{"view_start_date":1458034200,"submit_start_date":1458034200,"visible_start_date":1458034200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/mandarin/SEATSTR2.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/russian/SEATSTR2.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/vietnamese/SEATSTR2.pdf">Vietnamese</a> as well.</h3>
<p>
Sereja has a string <b>A</b> consisting of <b>n</b> lower case English letters.
</p>
<p>
Sereja calls two strings <b>X</b> and <b>Y</b> each of length <b>n</b> <em>similar</em> if they can be made equal by applying the following operation at most once in <b>each</b> of them.</p>
<ul>
<li>Chose any two position <b>i, j</b> in the string (<b>i</b> can be equal to <b>j</b> too). Swap the characters at position <b>i</b> with character at position <b>j</b>.</li>
</ul>

<p>
For example strings <i>"abcd"</i> and <i>"acbd"</i> are similar, strings <i>"ab"</i> and <i>"ab"</i> are similar, but strings <i>"abcde"</i> and <i>"bcdea"</i> are not similar. Note that strings  <i>"abc"</i> and <i>"cab"</i> are also similar, as you can swap 'a' and 'c' in the first string to get <i>"cba"</i> and 'a' and 'b' in the second string to get <i>"cba"</i>.
</p>
<p>
Now Sereja is interested in finding number of <b>ordered</b> pairs of non <em>similar</em> strings <b>X</b> and <b>Y</b> such that they can be constructed from a given string <b>A</b> by permutation of its characters. As answer could be large, please output your answer modulo  (10<sup>9</sup> + 7).
</p>
<p>
<b>Note</b> <br />
A string <b>s</b> (of size <b>n</b>) is said to be constructed from string <b>t</b> (also of size <b>n</b>) by permutation of its characters if there exists a permutation <b>P</b> (of length <b>n</b>), such that <b>s[i] = t[P[i]]</b> for each <b>i</b> from 1 to <b>n</b>.
</p>
<h3>Input</h3>
<ul>
<li>First line contain integer <b>T</b> - number of test cases. </li>
<li>For each of the next <b>T</b> lines:
<ul>
<li>Each line contains a string <b>A</b> as defined in the problem.</li>
</ul>
</li></ul>
<h3>Output</h3>
<p>For each test case, output answer modulo 1000000007 (10<sup>9</sup> + 7) in separate line. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b> 10 </b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b> 10^5 </b></li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>Subtask #1:</b> <b>1</b> ≤ <b>n</b> ≤ <b> 10 </b> (<b>25</b> points)</li>
<li><b>Subtask #2:</b> <b>1</b> ≤ <b>n</b> ≤ <b> 100 </b> (<b>25</b> points)</li>
<li><b>Subtask #3:</b> <b>1</b> ≤ <b>n</b> ≤ <b> 1000 </b> (<b>25</b> points)</li>
<li><b>Subtask #4:</b> <b>original constraints</b> (<b>25</b> points)</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
z
abcd

<b>Output:</b>
0
144
</pre>