---
{"category_name":"easy","problem_code":"OJUMPS","problem_name":"Chef-jumping","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"xcwgf666","date_added":"19-02-2014","tags":{"0":"ad","1":"berezin","2":"cakewalk","3":"may14"},"editorial_url":"http://discuss.codechef.com/problems/OJUMPS","time":{"view_start_date":1399887000,"submit_start_date":1399887000,"visible_start_date":1399887000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/OJUMPS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/OJUMPS.pdf">Russian</a>.</h3>
<p>This morning Chef wants to jump a little. In a few minutes he will arrive at the point <b>0</b>. Then he will perform a lot of jumps in such a sequence: <b>1</b>-jump, <b>2</b>-jump, <b>3</b>-jump, <b>1</b>-jump, <b>2</b>-jump, <b>3</b>-jump, <b>1</b>-jump, and so on.</p>
<p><b>1</b>-jump means that if Chef is at the point <b>x</b>, he will jump to the point <b>x+1</b>. </p>
<p><b>2</b>-jump means that if Chef is at the point <b>x</b>, he will jump to the point <b>x+2</b>. </p>
<p><b>3</b>-jump means that if Chef is at the point <b>x</b>, he will jump to the point <b>x+3</b>. </p>
<p>Before the start Chef asks you: will he arrive at the point <b>a</b> after some number of jumps?</p>
<h3>Input</h3>
<p>
The first line contains a single integer <b>a</b> denoting the point Chef asks about. </p>
<h3>Output</h3>
<p>Output "yes" without a quotes if Chef can arrive at point <b>a</b> or "no" without a quotes otherwise.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>0</b> ≤ <b>a</b> ≤ <b>10<sup>18</sup></b></li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
0

<b>Output:</b>
yes

<b>Input:</b>
1

<b>Output:</b>
yes

<b>Input:</b>
2

<b>Output:</b>
no

<b>Input:</b>
3

<b>Output:</b>
yes

<b>Input:</b>
6

<b>Output:</b>
yes

<b>Input:</b>
7

<b>Output:</b>
yes

<b>Input:</b>
10

<b>Output:</b>
no

</pre><h3>Explanation</h3>
<p> The first reached points are: 0 (+1) 1 (+2) 3 (+3) 6 (+1) 7, and so on. </p>
