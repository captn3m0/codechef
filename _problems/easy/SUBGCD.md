---
{"category_name":"easy","problem_code":"SUBGCD","problem_name":"Subarray GCD","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"darkshadows","problem_tester":null,"date_added":"13-06-2014","tags":{"0":"cakewalk","1":"cook50","2":"darkshadows","3":"maths"},"editorial_url":"http://discuss.codechef.com/problems/SUBGCD","time":{"view_start_date":1411324200,"submit_start_date":1411324200,"visible_start_date":1411324200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/english/SUBGCD.pdf">English</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/mandarin/SUBGCD.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK50/russian/SUBGCD.pdf">Russian</a> as well.</h3>
<p>Given an array <b>A<sub>1</sub>,A<sub>2</sub>...A<sub>N</sub></b>, you have to print the size of the largest contiguous subarray such that<br />
<a href="http://en.wikipedia.org/wiki/Greatest_common_divisor">GCD</a> of all integers in that subarray is <b>1</b>.<br/><br />
Formally,<br/> For a subarray <b>A<sub>i</sub>,A<sub>i+1</sub>...A<sub>j</sub></b> where <b>1 ≤ i &lt; j ≤ N</b> to be valid: <b>GCD(A<sub>i</sub>,A<sub>i+1</sub>...A<sub>j</sub>)</b> should be <b>1</b>. You have to print the size of the largest valid subarray.</br/></br/></p>
<p>If no valid subarray exists, output <b>-1</b>.</p>
<p><b>Note:</b>A single element is not considered as a subarray according to the definition of this problem.</p>
<h3>Input</h3>
<p>First line contains <b>T</b>, the number of testcases. Each testcase consists of <b>N</b> in one line followed by <b>N</b> integers in the next line.</p>
<h3>Output</h3>
<p>For each testcase, print the required answer in one line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
7 2
3
2 2 4

<b>Output:</b>
2
-1
</pre><h3>Explanation</h3>
<p>
<b>Example case 1.</b>GCD(2,7)=1. So the subarray <b>[A<sub>1</sub>,A<sub>2</sub>]</b> is valid.<br/><br />
<b>Example case 2.</b>No subarray satisfies.<br/>
</br/></br/></p>
<p><b>Note: Use scanf/print instead of cin/cout. Large input files.</b></p>
