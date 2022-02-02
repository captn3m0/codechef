---
{"category_name":"easy","problem_code":"CHEFSPL","problem_name":"Chef And Special Dishes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"prateekg603","problem_tester":"furko","date_added":"10-02-2016","tags":{"0":"march16","1":"prateekg603","2":"simple","3":"string"},"editorial_url":"http://discuss.codechef.com/problems/CHEFSPL","time":{"view_start_date":1458034200,"submit_start_date":1458034200,"visible_start_date":1458034200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/mandarin/CHEFSPL.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/russian/CHEFSPL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/vietnamese/CHEFSPL.pdf">Vietnamese</a> as well.</h3>
<p>
One day, Chef prepared <b>D</b> brand new dishes. He named the i-th dish by a string <b>S<sub>i</sub></b>. After the cooking, he decided to categorize each of these <b>D</b> dishes as <em>special</em> or not.
</p>
<p>
A dish <b>S<sub>i</sub></b> is called <em>special</em> if it's name (i.e. the string <b>S<sub>i</sub></b>) can be represented in the form of a <em>double</em> string by removing at most one (possibly zero) character from it's name from any position.
</p>
<p>
A string is called a <em>double</em> string if it can be represented as a concatenation of two identical, non-empty strings.<br />
e.g. "abab" is a double string as it can be represented as "ab" + "ab" where + operation denotes concatenation.<br />
Similarly, "aa", "abcabc" are double strings whereas "a", "abba", "abc" are not.
</p>
<h3>Input</h3>
<ul>
<li>First line of the input contains an integer <b>D</b> denoting the number of dishes prepared by Chef on that day.</li>
<li>Each of the next <b>D</b> lines will contain description of a dish.
<ul>
<li>The i-th line contains the name of i-th dish <b>S<sub>i</sub></b>.
 	</li></ul>
</li></ul>
<h3>Output</h3>
<p>For each of the <b>D</b> dishes, print a single line containing "<b>YES</b>" or "<b>NO</b>" (without quotes) denoting whether the dish can be called as a <em>special</em> or not.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>D</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>|S<sub>i</sub>|</b> ≤ <b>10<sup>6</sup></b>.</li>
<li>Each character of string <b>S<sub>i</sub></b> will be lower case English alphabet (i.e. from 'a' to 'z').</li>
</ul>
<h3>Subtasks</h3>
<p>
<b>Subtask #1 : (20 points)</b></p>
<ul>
<li>Sum of <b>|S<sub>i</sub>|</b> in an input file doesn't exceed <b>2 * 10<sup>3</sup></b></li>
</ul>

<p>
<b>Subtask 2 : (80 points) </b></p>
<ul>
<li>Sum of <b>|S<sub>i</sub>|</b> in an input file doesn't exceed <b>2 * 10<sup>6</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
aba
abac
abcd

<b>Output:</b>
YES
NO
NO

</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b><br />
We can remove the character at position 1 (0-based index) to get "aa" which is a <em>double</em> string. Hence, it is a <em>special</em> dish.</p>
<p><b>Example case 2.</b><br />
It is not possible to remove the character at any of the position to get the double string. Hence, it is not a <em>special</em> dish.
</p>
