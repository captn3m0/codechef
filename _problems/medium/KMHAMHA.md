---
{"category_name":"medium","problem_code":"KMHAMHA","problem_name":"Kamehameha","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kaushik_iska","problem_tester":"shangjingbo","date_added":"12-09-2013","tags":{"0":"bipartite","1":"easy","2":"kaushik_iska","3":"matching","4":"oct13"},"editorial_url":"http://discuss.codechef.com/problems/KMHAMHA","time":{"view_start_date":1381743000,"submit_start_date":1381743000,"visible_start_date":1381743000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/KMHAMHA.pdf">here</a></h3>
<h3>Problem Statement</h3>
<p>City of Byteland can be described as a <strong>2D</strong> grid of cells. Each cell may or may not contain a demon. You are given the list of cells that contain demons.</p>
<p>In a single Kamehameha attack, Goku can kill all the demons stading in a row or in a column. But using Kamehameha drains Goku's power. You are to tell the minimum number of Kamehameha attacks that will be required by Goku to destroy all the demons.</p>
<h3>Input</h3>
<p>The first line contains <strong>T</strong> the number of test cases. The first line of each test case contains <strong>N</strong> the number of cells where enemies are present. The following <strong>N</strong> lines contain two integers X and Y each describing the index of the cell in which the demon is present.</p>
<h3>Output</h3>
<p>For each case print the minimum number of attacks that are needed to kill all the monsters.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ T ≤ 10</li>
<li>1 ≤ N ≤ 1000</li>
<li>1 ≤ X, Y ≤ 10<sup>9</sup></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input</b>
1
3
0 0
1 0
0 1

<b>Output</b>
2
</pre>