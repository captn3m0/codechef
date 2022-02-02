---
{"category_name":"hard","problem_code":"ANUSFR","problem_name":"Substring and five rules","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"anudeep2011","problem_tester":"kostya_by","date_added":"1-10-2014","tags":{"0":"anudeep2011","1":"cook51","2":"greedy","3":"hard","4":"segment","5":"two"},"editorial_url":"http://discuss.codechef.com/problems/ANUSFR","time":{"view_start_date":1413744000,"submit_start_date":1413744000,"visible_start_date":1413744000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK51/mandarin/ANUSFR.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK51/russian/ANUSFR.pdf">Russian</a> as well.</h3>
<p>
Given a string <b>S</b>. You need to find a substring which satisfies the following conditions and output its start and end positions in the string <b>S</b>.</p>
<ul>
<li>Has exactly <b>x</b> different characters in it.
</li><li>Length of substring is atleast <b>minLength</b> and atmost <b>maxLength</b>.
</li><li>substring's start position is greater than or equal to <b>L</b>.
</li><li>substring's end position is less than or equal to <b>R</b>.
</li></ul>

<p>
If there are multiple substrings that satisfy above conditions, choose the one that has least start position. If there are still multiple substrings, choose the one that has least end position. See output section for more details
</p>
<h3>Input</h3>
<p>
First line of input contains the string <b>S</b><br />
The second line of the input contains an integer <b>Q</b> denoting the number of queries.<br />
Only line of each query contains 5 space separated integers, <b>x</b>, <b>minLength</b>, <b>maxLength</b>, <b>L</b>, <b>R</b></p>
<h3>Output</h3>
<p>For each query, output one line with 2 space separated integers, start and end positions of substring in S. If there is no valid solution output "-1 -1" instead</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>|S| (Length of S)</b> ≤ <b>10^5</b>
</li><li><b>S contains only lower case english alphabet ('a' - 'z')</b>
</li><li><b>1</b> ≤ <b>Q</b> ≤ <b>10^5</b>
</li><li><b>1</b> ≤ <b>x</b> ≤ <b>26</b>
</li><li><b>1</b> ≤ <b>minLength</b> ≤ <b>maxLength</b> ≤ <b>|S|</b>
</li><li><b>0</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>|S|-1</b>
</li></ul>
<h3>Example</h3>
<pre><b>Input</b>
abcc
3
2 1 3 0 3
2 3 3 0 3
1 2 2 0 2

<b>Output</b>
0 1
1 3
-1 -1
</pre><h3>Explanation</h3>
<p>
<b>Testcase #1</b><br />
We need a substring with 2 different characters, of length 1 or 2 or 3 and in between S[0..3].<br />
S[0..1] = "ab", which has 2 different characters, length 2, and is in between S[0..3]
</p>
<p>
<b>Testcase #2</b><br />
Here we need the length to be 3.<br />
S[1..3] = "bcc", has 2 different characters, length 3, and is in between S[0..3]
</p>
