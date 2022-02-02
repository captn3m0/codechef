---
{"category_name":"easy","problem_code":"MAXIEDGE","problem_name":"Maximize Grid Score","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"28-06-2017","tags":{"0":"admin2"},"time":{"view_start_date":1498908900,"submit_start_date":1498908900,"visible_start_date":1498908900,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/SNCKFL17/mandarin/MAXIEDGE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/russian/MAXIEDGE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/SNCKFL17/vietnamese/MAXIEDGE.pdf">Vietnamese</a> as well.</h3>

<p>You are given a 2 × <b>N</b> grid (2 rows, <b>N</b> columns) consisting of lower case English characters (i.e. from 'a' to 'z'). Two cells are said to be adjacent if they share a side with each other.</p>

<p>The <i>score</i> of such a grid is defined to be the number of unordered pairs of adjacent cells, which have the same character in them.</p>

<p>You want to rearrange the letters of the grid in such a way that the score is maximized and print the new rearranged grid. If there are multiple solutions, you can print any.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follow.</p>

<p>The first line of each test case contains an integer <b>N</b>, denoting the number of columns in the grid.</p>

<p>Each of the next two lines contains a string consisting of <b>N</b> lowercase English characters, describing the first and the second rows of the grid respectively.</p>

<h3>Output</h3>
<p>For each test case, output two lines, each containing a string of length <b>N</b>. These should describe the first and the second rows of the rearranged grid.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b>, <b>N</b> ≤ 500</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input</b>
2
2
ab
ba
4
aabb
bbcc

<b>Output</b>
aa
bb
bbac
bbac
</pre>

<h3>Explanation</h3>
<p>Let (r, c) denote the cell on the r-th row and c-th column.</p>

<p><b>Example case 1</b>: The score of the new grid is 2. The two unordered pairs of cells are {(1, 1), (1, 2)} (these two cells share a side, and have the same letter 'a' in them) and {(2, 1), (2, 2)} (these two cells share a side, and have the same letter 'b' in them). This is the maximum score that we can obtain.</p>