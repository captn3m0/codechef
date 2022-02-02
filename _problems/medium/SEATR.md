---
{"category_name":"medium","problem_code":"SEATR","problem_name":"Sereja and Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":10,"source_sizelimit":50000,"problem_author":"sereja","problem_tester":"iscsi","date_added":"6-11-2015","tags":{"0":"cook64","1":"dynamic","2":"hard","3":"mathematics","4":"memoization","5":"sereja","6":"tree"},"editorial_url":"http://discuss.codechef.com/problems/SEATR","time":{"view_start_date":1448217000,"submit_start_date":1448217000,"visible_start_date":1448217000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK64/mandarin/SEATR.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK64/russian/SEATR.pdf">Russian</a>.</h3>


<p>Sereja likes to hang around trees. A tree is an undirected graph on <b>N</b> vertices with <b>N-1</b> edges and no cycles. Sereja has his own peculiar way of comparing two trees. To describe it, let's start with the way Sereja stores a tree. For every tree, Sereja has a value <b>V</b> — the root of the tree, and for every vertex <b>i</b>, he has an ordered list <b>Q[i]</b> with <b>L[i]</b> elements — <b>Q[i][1], Q[i][2], ..., Q[i][L[i]]</b> which are children of the vertex <b>i</b>. Sereja assumes two trees to be equal if their roots are the same and for every <b>i</b>, the ordered list <b>Q[i]</b> is the same in both the trees that Sereja compares.</p>
<p>
So if Sereja has tree#1 given as <b>[V=1, Q[1]=[2, 3], Q[2]=[], Q[3]=[]]</b> and tree#2 given as <b>[V=1, Q[1]=[3, 2], Q[2]=[], Q[3]=[]]</b>, they will be considered different because <b>Q[1]</b> in the first tree is not equal to <b>Q[1]</b> in the second tree.</p>
<p>
For any vertex <b>i</b>, Sereja calls number of vertices adjacent to it as <b>E[i]</b>.</p>
<p>
Given an array <b>C</b> of <b>N</b> elements, Let <b>f(C)</b> be the number of different trees (in Sereja's representation) such that there exists a permutation <b>P[1], P[2], ... , P[N]</b> so that <b>E[P[1]]=C[1], E[P[2]]= C[2], ... , E[P[N]]=C[N]</b>.</p>
<p>
Sereja gives you the array <b>C</b>. You have to compute the number <b>f(C)</b> modulo <b>1000000007 (10<sup>9</sup>+7)</b>.</p>

<h3>Input</h3>
The first line of input contains the integer <b>N</b>. Next line contains <b>N</b> integers <b>C[1], C[2], ..., C[N]</b>.

<h3>Output</h3>
Output answer in single line. 

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b> 80 </b></li>
<li><b>0</b> ≤ <b>C[i]</b> ≤ <b> 80 </b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
1 1 2 2

<b>Output:</b>
72

<b>Input:</b>
5
3 1 1 1 2

<b>Output:</b>
960

<b>Input:</b>
3
2 2 2

<b>Output:</b>
0
</pre>