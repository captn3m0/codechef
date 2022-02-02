---
{"category_name":"easy","problem_code":"RECRECOV","problem_name":"Receipt Recovery","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"cenadar","problem_tester":"iscsi","date_added":"23-07-2015","tags":{"0":"cenadar","1":"easy","2":"maxflow","3":"maximum","4":"nov15"},"editorial_url":"http://discuss.codechef.com/problems/RECRECOV","time":{"view_start_date":1447666200,"submit_start_date":1447666200,"visible_start_date":1447666200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/mandarin/RECRECOV.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/russian/RECRECOV.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV15/vietnamese/RECRECOV.pdf">Vietnamese</a> as well.</h3>
<p>While vacationing in Egypt, Chef found a recipe of an ancient dish. The receipt is a sequence of hieroglyphs written on a magic paper - it survived for thousands of years! The sequence is written on a long scroll. Unfortunately, the scroll is split into pieces, and possibly, some pieces of the scroll are missing. Chef has a total of <b>N</b> pieces, numbered for convenience from <b>1</b> to <b>N</b>. He gave the pieces of a tape to his friend who studies hieroglyphs for analysis. Chef was happy to hear that there are some relations between the pieces. Some of the pieces may follow other pieces.</p>
<p>The informations about these relations is given as a list of <b>M</b> pairs (<b>A<sub>i</sub></b>, <b>B<sub>i</sub></b>). Such a pair means that the <b>A<sub>i</sub></b><sup>th</sup> piece can be immediately followed by the <b>B<sub>i</sub></b><sup>th</sup> one.</p>
<p>Chef is working on recovering the recipe to prepare this dish for his Egyptian friends. He wants to place all the pieces into lines such that any pair of consecutive pieces (<b>L</b>, <b>R</b>) in a line must be explicitly allowed by one of the <b>M</b> rules described above. In other words, for some <b>i</b> (1 ≤ <b>i</b> ≤ <b>M</b>), (<b>A<sub>i</sub></b>, <b>B<sub>i</sub></b>) = (<b>L</b>, <b>R</b>). It appears that in general, not all the pieces can be placed in a single line while following the rules. So, please help Chef find what is the minimum number of lines required for all the pieces to be placed acoording to the rules.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two space-separated integers <b>N</b> and <b>M</b> denoting the number of pieces and number of relations of those <b>N</b> pieces. Next <b>M</b> lines contain two space-separated integers <b>A</b> and <b>B</b> denoting that piece number <b>A</b> can be followed by piece number <b>B</b>, all those pairs are guaraneed to be unique within a test case.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the minimum number of lines required for all the pieces to be placed acoording to the rules.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>20</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>N<sup>2</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>B<sub>i</sub></b> ≤ <b>N</b></li>
<li>There is no sequence <b>S<sub>1</sub></b>, <b>S<sub>2</sub></b>, ..., <b>S<sub>k</sub></b> such that the piece <b>S<sub>i</sub></b> can be immediately followed by the piece <b>S<sub>i+1</sub></b> for all <b>i</b> from <b>1</b> to <b>k-1</b>, and that piece <b>S<sub>k</sub></b> can be followed by piece <b>S<sub>1</sub></b>.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 3
1 2
2 3
1 3
3 2
1 2
1 3
5 4
1 3
2 3
3 4
2 5

<b>Output:</b>
1
2
2
</pre>